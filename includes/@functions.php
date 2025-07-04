<?php
    /**
     * Function that formats text content 
    **/
    function format_content($html, $lead = false) {
        // If wrapped in <div class="col">, only process inner content and re-wrap after formatting
        $is_col = false;
        $columns = [];
        $col_pattern = '/<div class="col">(.*?)<\/div>/s';
        if (preg_match_all($col_pattern, $html, $matches)) {
            $is_col = true;
            $columns = $matches[1];
        }

        // Helper to process a single block of content
        $process_block = function($block) use ($lead) {
            // Remove leading newlines
            $block = ltrim($block, "\n\r");

            // Replace typographic single and double quotes with HTML entities
            $block = str_replace(
                ['’', '‘', '“', '”', '′', '″', '...'],
                ['&rsquo;', '&lsquo;', '&ldquo;', '&rdquo;', '&prime;', '&Prime;', '&hellip;'],
                $block
            );

            // First, wrap URLs in anchor tags (but not mailto: or already inside an anchor)
            $block = preg_replace_callback(
                '/\b((?:https?:\/\/|www\.)[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}(?:\/[^\s<]*)?)/i',
                function ($matches) {
                    $url = $matches[1];
                    // If it's an email, skip (will be handled separately)
                    if (filter_var($url, FILTER_VALIDATE_EMAIL)) {
                        return $url;
                    }
                    // Ensure href always starts with http:// or https://
                    if (preg_match('/^https?:\/\//i', $url)) {
                        $href = $url;
                    } else {
                        $href = 'http://' . $url;
                    }

                    // Add UTM parameters
                    $utm = [
                        'utm_source' => 'Pride+Life',
                        'utm_medium' => 'Digital+Magazine',
                        'utm_campaign' => 'Issue+38'
                    ];
                    $parsed = parse_url($href);
                    $query = isset($parsed['query']) ? $parsed['query'] : '';
                    parse_str($query, $queryParams);
                    $queryParams = array_merge($queryParams, $utm);
                    $new_query = http_build_query($queryParams, '', '&', PHP_QUERY_RFC3986);

                    // Rebuild URL with new query
                    $href =
                        (isset($parsed['scheme']) ? $parsed['scheme'] . '://' : '') .
                        (isset($parsed['user']) ? $parsed['user'] . (isset($parsed['pass']) ? ':' . $parsed['pass'] : '') . '@' : '') .
                        (isset($parsed['host']) ? $parsed['host'] : '') .
                        (isset($parsed['port']) ? ':' . $parsed['port'] : '') .
                        (isset($parsed['path']) ? $parsed['path'] : '') .
                        ($new_query ? '?' . $new_query : '') .
                        (isset($parsed['fragment']) ? '#' . $parsed['fragment'] : '');

                    $icon = '';
                    $icon_path = __DIR__ . '/../../../assets/svg/icons/external-link.svg';
                    if (is_file($icon_path)) {
                        $icon = '<icon>' . file_get_contents($icon_path) . '</icon>';
                    }
                    return '<a href="' . $href . '" target="_blank">' . $url . $icon . '</a>';
                },
                $block
            );

            // Now, wrap email addresses in mailto links, but only if not already inside an anchor tag
            $block = preg_replace_callback(
                '/\b([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})\b/',
                function ($matches) {
                    // Check if already inside an anchor tag
                    $email = $matches[1];
                    // Look behind for <a ...> up to 100 chars before, and </a> after
                    // If already inside <a>, do not replace
                    // This is a simple check and may not cover all edge cases
                    $before = substr($matches[0], -100);
                    if (preg_match('/<a [^>]*>[^<]*' . preg_quote($email, '/') . '[^<]*<\/a>/i', $matches[0])) {
                        return $email;
                    }
                    return '<a href="mailto:' . $email . '">' . $email . '</a>';
                },
                $block
            );

            // Split into lines, wrap each in <p>
            $lines = preg_split('/\n+/', trim($block));
            $out = '';
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === '') continue;
                $classes = [];
                $is_accent = false;
                if (preg_match('/^\s*#/', $line)) {
                    $is_accent = true;
                    $line = preg_replace('/^\s*#\s*/', '', $line, 1);
                }
                if ($lead) $classes[] = 'lead';
                if ($is_accent) $classes[] = 'accent';
                $class_attr = $classes ? ' class="' . implode(' ', $classes) . '"' : '';
                $out .= '<p' . $class_attr . '>' . $line . '</p>';
            }
            return $out;
        };

        if ($is_col) {
            $result = '';
            foreach ($columns as $col) {
                // Remove leading newlines after opening column
                $col = ltrim($col, "\n\r");
                $result .= '<div class="col">' . $process_block($col) . '</div>';
            }
            return $result;
        } else {
            return $process_block($html);
        }
    }

    /**
     * Split plain text content into columns as evenly as possible by word count,
     * but never split inside a URL or HTML tag.
     * If a line starts with "#", any split part will also start with "# ".
     * Returns HTML string of <div class="col"><p>...</p></div> for each column.
     * If the algorithm fails to fill all columns, falls back to an even split by lines.
     */
    function split_content_columns($text, $num_columns = 4) {
        if (empty($text)) {
            return str_repeat('<div class="col"></div>', $num_columns);
        }

        // Split by newlines, trim each sentence, remove empty lines
        $sentences = array_filter(array_map('trim', explode("\n", $text)), function($s) {
            return $s !== '';
        });

        // Flatten sentences into array of arrays of tokens (words, URLs, tags), and track if line starts with #
        $sentence_tokens = [];
        $sentence_hash = [];
        foreach ($sentences as $sentence) {
            $has_hash = false;
            if (preg_match('/^\s*#\s*/', $sentence)) {
                $has_hash = true;
                $sentence = preg_replace('/^\s*#\s*/', '', $sentence, 1);
            }
            // Tokenize: keep URLs and tags as single tokens
            $tokens = [];
            $pattern = '/(<[^>]+>|https?:\/\/[^\s<]+|www\.[^\s<]+|\S+)/i';
            if (preg_match_all($pattern, $sentence, $matches)) {
                $tokens = $matches[0];
            }
            if ($tokens) {
                $sentence_tokens[] = $tokens;
                $sentence_hash[] = $has_hash;
            }
        }

        // Calculate total tokens (words, URLs, tags)
        $total_tokens = 0;
        foreach ($sentence_tokens as $tokens) {
            $total_tokens += count($tokens);
        }

        if ($total_tokens === 0) {
            return str_repeat('<div class="col"></div>', $num_columns);
        }

        $target_tokens_per_col = floor($total_tokens / $num_columns);
        $columns = array_fill(0, $num_columns, []);
        $col_token_counts = array_fill(0, $num_columns, 0);

        $col = 0;
        foreach ($sentence_tokens as $i => $tokens) {
            $has_hash = $sentence_hash[$i];
            $token_count = count($tokens);

            // If adding this sentence would make the column much larger than target, try to split
            while (
                $col < $num_columns - 1 &&
                $col_token_counts[$col] + $token_count > $target_tokens_per_col + 1 // +1 for tolerance
            ) {
                $remaining = $target_tokens_per_col + 1 - $col_token_counts[$col];
                if ($remaining > 0 && $remaining < $token_count) {
                    // Only split if not in the middle of a tag or URL
                    // Find a safe split point
                    $split_at = $remaining;
                    for ($j = $remaining; $j < $token_count; $j++) {
                        if (
                            preg_match('/^(https?:\/\/|www\.)/i', $tokens[$j]) ||
                            preg_match('/^<[^>]+>$/', $tokens[$j])
                        ) {
                            // Don't split before/after a URL or tag, move split point after this token
                            $split_at = $j + 1;
                        } else {
                            break;
                        }
                    }
                    // If split_at is still less than token_count, split
                    if ($split_at < $token_count) {
                        $first_part = array_slice($tokens, 0, $split_at);
                        $second_part = array_slice($tokens, $split_at);

                        $first_line = implode(' ', $first_part);
                        $second_line = implode(' ', $second_part);

                        if ($has_hash) {
                            $first_line = '# ' . $first_line;
                            $second_line = '# ' . $second_line;
                        }

                        $columns[$col][] = $first_line;
                        $col_token_counts[$col] += count($first_part);

                        $col++;
                        $columns[$col][] = $second_line;
                        $col_token_counts[$col] += count($second_part);
                        continue 2;
                    }
                }
                // If can't split, move to next column
                $col++;
            }

            $line = implode(' ', $tokens);
            if ($has_hash) {
                $line = '# ' . $line;
            }
            $columns[$col][] = $line;
            $col_token_counts[$col] += $token_count;
        }

        // If the last column(s) are empty, fallback to even split by lines
        $empty_cols = 0;
        foreach ($columns as $c) {
            if (empty($c)) $empty_cols++;
        }
        if ($empty_cols > 0) {
            // Fallback: split sentences evenly by line count
            $lines_per_col = ceil(count($sentences) / $num_columns);
            $columns = array_fill(0, $num_columns, []);
            foreach ($sentences as $i => $sentence) {
                $col = floor($i / $lines_per_col);
                if ($col >= $num_columns) $col = $num_columns - 1;
                $columns[$col][] = $sentence;
            }
        }

        // Output columns, wrap each in <p>
        $output = '';
        foreach ($columns as $colContent) {
            $colContent = array_map('trim', $colContent);
            $colContent = array_filter($colContent, function($s) { return $s !== ''; });
            $output .= '<div class="col">' . implode("\n", $colContent) . '</div>';
        }
        return $output;
    }

    /**
     * Create a layout based on a given style and content.
     * Supported styles: 'default', 'advert', 'background-media', 'split-media', 'split-media-reverse', 'split-editorial'
     * Defaults to 'default' style if not specified or invalid.
     */
    function create_layout($style = 'default', $args = [], $class = null) {
        // Default to 'default' style if not supported
        $supported_styles = ['default', 'advert', 'background-media', 'full-media', 'split-media', 'split-media-reverse', 'split-editorial', 'image-collage'];
        if (!in_array($style, $supported_styles)) {
            $style = 'default';
        }

        // // Apply format_content() to 'content' if present
        // if (isset($args['content'])) {
        //     $args['content'] = format_content($args['content']);
        // }

        switch ($style) {
            case 'default':
                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column">'
                            . ((isset($args['title']) && trim($args['title']) !== '') ? '
                            <div class="row">
                                <div class="col">
                                    <h2>' . htmlspecialchars($args['title']) . '</h2>
                                </div>
                            </div>' : '') . '
                            <div class="row">
                                <div class="col">
                                    ' . (format_content($args['content']) ?? '') . '
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
            case 'background-media':
                return '
                <section class="has-background align-items-center text-center '.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column">
                            <div class="background">
                                <img class="object-fit-cover w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />
                                <figcaption title="' . htmlspecialchars($args['image_credit'] ?? '') . '" class="credit">' . htmlspecialchars($args['image_credit'] ?? '') . '</figcaption>
                            </div>'
                            . ((isset($args['title']) && trim($args['title']) !== '') ? '
                            <div class="row">
                                <div class="col">
                                    <h2>' . htmlspecialchars($args['title']) . '</h2>
                                </div>
                            </div>' : '') . '
                            <div class="row">
                                <div class="col">
                                    ' . (format_content($args['content']) ?? '') . '
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
            case 'full-media':
                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column has-media' . (!empty($args['has_face']) ? ' has-face' : '') . '">
                            <img class="object-fit-cover w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />
                            <figcaption title="' . htmlspecialchars($args['image_credit'] ?? '') . '" class="credit">' . htmlspecialchars($args['image_credit'] ?? '') . '</figcaption>
                        </div>
                    </div>
                </section>';
            case 'split-media':
                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column has-media' . (!empty($args['has_face']) ? ' has-face' : '') . '">
                            <img class="object-fit-cover w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />
                            <figcaption title="' . htmlspecialchars($args['image_credit'] ?? '') . '" class="credit">' . htmlspecialchars($args['image_credit'] ?? '') . '</figcaption>
                        </div>
                        <div class="column">'
                            . ((isset($args['title']) && trim($args['title']) !== '') ? '
                            <div class="row">
                                <div class="col">
                                    <h2>' . htmlspecialchars($args['title']) . '</h2>
                                </div>
                            </div>' : '') . '
                            <div class="row">
                                ' . format_content( split_content_columns(($args['content'] ?? ''), 2) ) . '
                            </div>
                        </div>
                    </div>
                </section>';
            case 'split-media-reverse':
                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column">'
                            . ((isset($args['title']) && trim($args['title']) !== '') ? '
                            <div class="row">
                                <div class="col">
                                    <h2>' . htmlspecialchars($args['title']) . '</h2>
                                </div>
                            </div>' : '') . '
                            <div class="row">
                                ' . format_content( split_content_columns(($args['content'] ?? ''), 2) ). '
                            </div>
                        </div>
                        <div class="column has-media' . (!empty($args['has_face']) ? ' has-face' : '') . '">
                            <img class="object-fit-cover w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />
                            <figcaption title="' . htmlspecialchars($args['image_credit'] ?? '') . '" class="credit">' . htmlspecialchars($args['image_credit'] ?? '') . '</figcaption>
                        </div>
                    </div>
                </section>';
            case 'split-editorial':
                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column">'
                            . ((isset($args['title']) && trim($args['title']) !== '') ? '
                            <div class="row">
                                <div class="col">
                                    <h2>' . htmlspecialchars($args['title']) . '</h2>
                                </div>
                            </div>' : '') . '
                            <div class="row">
                                ' . format_content( split_content_columns(($args['content'] ?? ''), 4) ) . '
                            </div>
                        </div>
                    </div>
                </section>';
            case 'image-collage':
                // Ensure images are an array
                $images = is_array($args['collection'] ?? null) ? $args['collection'] : [];
                if (empty($images)) {
                    return '<section class="'.htmlspecialchars($class ?? '').'"><div class="layout"><div class="column"><p>Photo collection coming soon&hellip;</p></div></div></section>';
                }

                // Generate grid items with bento-box style (varying sizes)
                $bento_patterns = [
                    1 => ['grid-area: 1 / 1 / 3 / 3;'],
                    2 => [
                        'grid-area: 1 / 1 / 3 / 2;',
                        'grid-area: 1 / 2 / 3 / 3;'
                    ],
                    3 => [
                        'grid-area: 1 / 1 / 3 / 2;',
                        'grid-area: 1 / 2 / 2 / 3;',
                        'grid-area: 2 / 2 / 3 / 3;'
                    ],
                    4 => [
                        'grid-area: 1 / 1 / 2 / 2;',
                        'grid-area: 1 / 2 / 2 / 3;',
                        'grid-area: 2 / 1 / 3 / 2;',
                        'grid-area: 2 / 2 / 3 / 3;'
                    ],
                    5 => [
                        'grid-area: 1 / 1 / 2 / 2;',
                        'grid-area: 1 / 2 / 2 / 3;',
                        'grid-area: 2 / 1 / 3 / 2;',
                        'grid-area: 2 / 2 / 3 / 3;',
                        'grid-area: 1 / 3 / 3 / 4;'
                    ],
                    6 => [
                        'grid-area: 1 / 1 / 2 / 2;',
                        'grid-area: 1 / 2 / 2 / 3;',
                        'grid-area: 1 / 3 / 2 / 4;',
                        'grid-area: 2 / 1 / 3 / 2;',
                        'grid-area: 2 / 2 / 3 / 3;',
                        'grid-area: 2 / 3 / 3 / 4;'
                    ]
                ];
                $pattern = $bento_patterns[min(count($images), 6)];
                $grid_items = '';
                foreach ($images as $i => $img) {
                    // Support both array and string (fallback)
                    $img_url = htmlspecialchars(is_array($img) ? ($img['image'] ?? $img['url'] ?? $img[0] ?? '') : $img);
                    $img_alt = htmlspecialchars(is_array($img) ? ($img['image_alt'] ?? $img['alt'] ?? '') : '');
                    $img_credit = htmlspecialchars(is_array($img) ? ($img['image_credit'] ?? $img['credit'] ?? '') : '');
                    $style = $pattern[$i] ?? '';
                    $grid_items .= '
                        <figure class="bento-item" style="'.$style.'">
                            <img src="'.$img_url.'" alt="'.$img_alt.'" loading="lazy" />
                            '.($img_credit ? '<figcaption title="'.$img_credit.'" class="credit">'.$img_credit.'</figcaption>' : '').'
                        </figure>';
                }

                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column">
                            <div class="row h-100">
                                <div class="col">
                                    <div class="bento-grid">
                                        '.$grid_items.'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
            case 'advert':
                // Prepare hyperlink variables
                $has_link = !empty($args['hyperlink']) && !empty($args['hyperlink']['url']);
                $link_url = $has_link ? htmlspecialchars($args['hyperlink']['url']) : '';
                $link_text = $has_link ? htmlspecialchars($args['hyperlink']['text'] ?? '') : '';
                $link_title = $has_link ? htmlspecialchars($args['hyperlink']['title'] ?? $link_text) : '';

                // return '
                // <section class="advert '.htmlspecialchars($class ?? '').'">
                //     <div class="layout">
                //         <div class="column h-100">
                //             <div class="background" style="background-image: url(' . htmlspecialchars($args['image'] ?? '') . ');">
                //                 <h2>' . htmlspecialchars($args['title'] ?? '') . '</h2>
                //             </div>
                //             <div class="row h-100">
                //                 <div class="col h-100">
                //                     ' . (
                //                         $has_link
                //                         ? '<a href="' . $link_url . '" title="' . $link_text . '" target="_blank">'
                //                             . '<img class="object-fit-contain w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />'
                //                             . ($link_text !== '' ? '<span class="visually-hidden">' . $link_text . '</span>' : '')
                //                         . '</a>'
                //                         : '<img class="object-fit-contain w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />'
                //                     ) . '
                //                     ' . (
                //                         $has_link
                //                         ? '<a href="' . $link_url . '" title="' . $link_title . '" class="btn btn-default btn-pill" target="_blank">' . ($link_text !== '' ? $link_text : $link_url) . '</a>'
                //                         : ''
                //                     ) . '
                //                 </div>
                //             </div>
                //         </div>
                //     </div>
                // </section>';

                return '
                <section class="advert '.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column has-advert h-100">
                            <div class="background justify-content-center align-items-center d-flex" style="background-image: url(' . htmlspecialchars($args['image'] ?? '') . ');">
                                <h3>' . htmlspecialchars($args['title'] ?? '') . '</h3>
                            </div>
                            <div class="row h-100">
                                <div class="col h-100 d-flex align-items-end justify-content-center">
                                    ' . (
                                        $has_link
                                        ? '<a href="' . $link_url . '" title="' . $link_title . '" class="btn btn-default btn-pill" target="_blank">' . ($link_text !== '' ? $link_text : $link_url) . '</a>'
                                        : ''
                                    ) . '
                                </div>
                            </div>
                        </div>
                    </div>
                </section>';
            default:
                return '';
        }
    }
?>