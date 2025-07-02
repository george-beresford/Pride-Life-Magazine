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
     * Split plain text content into columns as evenly as possible by sentence (each line is a sentence).
     * Tries to equalise the length of all columns by word count, splitting lines if needed.
     * If the next column would have 5 words or less difference, it will split the line.
     * If a line starts with "#", any split part will also start with "# ".
     * Returns HTML string of <div class="col"><p>...</p></div> for each column.
     * If the algorithm fails to fill all columns, falls back to an even split by lines.
     */
    function split_content_columns($text, $num_columns = 4, $tolerance = 5) {
        if (empty($text)) {
            return str_repeat('<div class="col"></div>', $num_columns);
        }

        // Split by newlines, trim each sentence, remove empty lines
        $sentences = array_filter(array_map('trim', explode("\n", $text)), function($s) {
            return $s !== '';
        });

        // Flatten sentences into array of arrays of words, and track if line starts with #
        $sentence_words = [];
        $sentence_hash = [];
        foreach ($sentences as $sentence) {
            $has_hash = false;
            if (preg_match('/^\s*#\s*/', $sentence)) {
                $has_hash = true;
                $sentence = preg_replace('/^\s*#\s*/', '', $sentence, 1);
            }
            $words = preg_split('/\s+/', $sentence, -1, PREG_SPLIT_NO_EMPTY);
            if ($words) {
                $sentence_words[] = $words;
                $sentence_hash[] = $has_hash;
            }
        }

        // Calculate total words
        $total_words = 0;
        foreach ($sentence_words as $words) {
            $total_words += count($words);
        }

        if ($total_words === 0) {
            return str_repeat('<div class="col"></div>', $num_columns);
        }

        $target_words_per_col = ceil($total_words / $num_columns);
        $columns = array_fill(0, $num_columns, '');
        $col_word_counts = array_fill(0, $num_columns, 0);

        $col = 0;
        foreach ($sentence_words as $i => $words) {
            $sentence_word_count = count($words);
            $has_hash = $sentence_hash[$i];

            // If adding this sentence would exceed target, consider splitting
            if (
                $col < $num_columns - 1 &&
                $col_word_counts[$col] + $sentence_word_count > $target_words_per_col + $tolerance
            ) {
                // How many words can we add to this column to stay within tolerance?
                $remaining = $target_words_per_col + $tolerance - $col_word_counts[$col];
                if ($remaining > 0 && $remaining < $sentence_word_count) {
                    // Split the sentence
                    $first_part = array_slice($words, 0, $remaining);
                    $second_part = array_slice($words, $remaining);

                    $first_line = implode(' ', $first_part);
                    $second_line = implode(' ', $second_part);

                    if ($has_hash) {
                        $first_line = '# ' . $first_line;
                        $second_line = '# ' . $second_line;
                    }

                    $columns[$col] .= ($columns[$col] !== '' ? "\n" : '') . $first_line;
                    $col_word_counts[$col] += count($first_part);

                    $col++;
                    $columns[$col] .= ($columns[$col] !== '' ? "\n" : '') . $second_line;
                    $col_word_counts[$col] += count($second_part);
                    continue;
                }
            }

            // If current column is over target, move to next
            if (
                $col < $num_columns - 1 &&
                $col_word_counts[$col] + $sentence_word_count > $target_words_per_col
            ) {
                $col++;
            }

            $line = implode(' ', $words);
            if ($has_hash) {
                $line = '# ' . $line;
            }
            $columns[$col] .= ($columns[$col] !== '' ? "\n" : '') . $line;
            $col_word_counts[$col] += $sentence_word_count;
        }

        // If the last column(s) are empty, fallback to even split by lines
        $empty_cols = 0;
        foreach ($columns as $c) {
            if (trim($c) === '') $empty_cols++;
        }
        if ($empty_cols > 0) {
            // Fallback: split sentences evenly by line count
            $lines_per_col = ceil(count($sentences) / $num_columns);
            $columns = array_fill(0, $num_columns, '');
            foreach ($sentences as $i => $sentence) {
                $col = floor($i / $lines_per_col);
                if ($col >= $num_columns) $col = $num_columns - 1;
                $columns[$col] .= ($columns[$col] !== '' ? "\n" : '') . $sentence;
            }
        }

        // Output columns, wrap each in <p>
        $output = '';
        foreach ($columns as $colContent) {
            $colContent = trim($colContent);
            $output .= '<div class="col">' . $colContent . '</div>';
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
                        <div class="column has-media">
                            <img class="object-fit-cover w-100 h-100" loading="lazy" src="' . htmlspecialchars($args['image'] ?? '') . '" alt="' . htmlspecialchars($args['image_alt'] ?? '') . '" />
                            <figcaption title="' . htmlspecialchars($args['image_credit'] ?? '') . '" class="credit">' . htmlspecialchars($args['image_credit'] ?? '') . '</figcaption>
                        </div>
                    </div>
                </section>';
            case 'split-media':
                return '
                <section class="'.htmlspecialchars($class ?? '').'">
                    <div class="layout">
                        <div class="column has-media">
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
                        <div class="column has-media">
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