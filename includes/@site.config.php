<?php
    // Site-wide configuration array
    global $config, $social;
    $config = [
        'language' => 'en',
        'url' => [
            'protocol'          => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://',
            'domain'            => $_SERVER['HTTP_HOST'].'/pride-life-magazine',
            'page'              => get_current_page(),
        ],
        'meta' => [
            'charset'           => 'UTF-8',
            'viewport'          => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no',
            'X-UA-Compatible'   => 'ie=edge',
            'description'       => 'Billy Porter reflects on Pride, sharing the bitter and the sweet moments, and discusses his stunning new play in this exclusive feature.',
            'author'            => 'George Beresford Design',
        ],
        'favicons' => [
            'favicon'           => 'assets/seo/favicon.ico',
            'favicon_16x16'     => '/assets/seo/favicon-16x16.png',
            'favicon_32x32'     => '/assets/seo/favicon-32x32.png',
            'apple_touch_icon'  => '/assets/seo/apple-touch-icon.png',
            'mask_icon'         => '/assets/seo/safari-pinned-tab.svg',
            'msapplication_tile_color'  => '#FFFFFF',
            'theme_color'               => '#FFFFFF',
        ],
        'title' => [
            'brand_name'        => 'Pride Life Magazine', // The ACME Corporation
            'brand_abbrev'      => 'Pride Life', // ACME Corp.
            'page_title'        => isset($config['title']['page_title']) ? $config['title']['page_title'] : '',
            'separator'         => ' · ',
            'formatted'         => '',
        ],
        'open_graph' => [
            'title'             => '',
            'description'       => '',
            'image'             => '/assets/seo/og-image.jpg',
            'url'               => 'https://example.com',
            'type'              => 'website',
        ],
        'twitter' => [
            'card'              => 'summary_large_image',
            'site'              => '@defaultsite',
            'creator'           => '@defaultcreator',
            'title'             => '',
            'description'       => '',
            'image'             => '/assets/seo/twitter-card.jpg',
        ]
    ];
    // Set defaults and duplicates after defining array
    $config['title']['formatted']           = get_page_title($config['title']['separator'], 'left');
    $config['open_graph']['title']          = get_page_title($config['title']['separator'], 'left');
    $config['open_graph']['description']    = $config['meta']['description'];
    $config['open_graph']['url']            = get_site_url().$config['url']['page'];
    $config['twitter']['title']             = get_page_title($config['title']['separator'], 'left');
    $config['twitter']['description']       = $config['meta']['description'];

    // Define localbusiness @schema details
    $schema = [
        'telephone' => '+1 555-123-4567',
        'email' => 'info@example.com',

        'openingHours' => [
            'Mo-Fr 09:00-18:00',
            'Sa 10:00-14:00',
        ],
        
        'streetAddress' => '123 Main Street',
        'addressLocality' => 'Anytown',
        'addressRegion' => 'State',
        'postalCode' => '12345',
        'addressCountry' => 'US',

        'latitude' => 40.712776,
        'longitude' => -74.005974
    ];

    // Define social media profile URLs
    $social = [
        // 'Name' => ['icon.svg', 'URL', 'Title', 'Pretty Link', 'Target _blank = true]
        'Facebook'      => ['facebook.svg', 'https://www.facebook.com/Pridelifemagazine', 'Like @PrideLifeMagazine on Facebook', 'Find us on Facebook', true],
        'Instagram'     => ['instagram.svg', 'https://www.instagram.com/pridelifeglobal', 'Follow @PrideLifeGlobal on Instagram', 'Find us on Instagram', true],
        'Twitter'       => ['twitter.svg', 'https://x.com/pridelife', 'Follow @PrideLife on Twitter', 'Find us on Twitter', true],
        // 'WhatsApp'      => ['whatsapp.svg', '##', 'Call USERNAME on WhatsApp', 'WhatsApp us', true],
        'LinkedIn'      => ['linkedin.svg', 'https://www.linkedin.com/company/pride-life/', 'Follow Pride Life on LinkedIn', 'Find us on LinkedIn', true],
    ];

    // Function to generate and display all meta tags to 2025 web standards
    function generate_meta_tags($debug = false) {
        global $config;

        $metaTags = '<title>'.htmlspecialchars($config['title']['formatted'] ?? '').'</title>'.PHP_EOL;
        $metaTags .= '<link rel="canonical" href="'.htmlspecialchars($config['url']['protocol'].$config['url']['domain'].'/'.$config['url']['page']).'">'.PHP_EOL;
        $metaTags .= '<link rel="alternate" href="'.htmlspecialchars($config['url']['protocol'].$config['url']['domain'].'/'.$config['url']['page']).'" hreflang="en">'.PHP_EOL;
        
        if(empty($hide_page)) {
            $metaTags .= '<meta name="robots" content="index, follow">'.PHP_EOL;
        } else {
            $metaTags .= '<meta name="robots" content="noindex, nofollow">'.PHP_EOL;
        }

        $errors = [];

        // Helper function to validate required keys
        function validate_keys($keys, $data, $type) {
            global $errors;
            foreach ($keys as $key) {
                if (empty($data[$key])) {
                    $errors[] = "Missing or invalid $type key: $key";
                }
            }
        }

        // Validate meta, Open Graph, and Twitter keys
        validate_keys(['charset', 'viewport', 'description', 'author'], $config['meta'], 'meta');
        if (!empty($config['open_graph'])) {
            validate_keys(['title', 'description', 'image', 'url', 'type'], $config['open_graph'], 'Open Graph');
        }
        if (!empty($config['twitter'])) {
            validate_keys(['card', 'site', 'creator', 'title', 'description', 'image'], $config['twitter'], 'Twitter');
        }

        // Display debug comments if enabled
        if ($debug && !empty($errors)) {
            foreach ($errors as $error) {
                echo "<!-- $error -->".PHP_EOL;
            }
            if (!empty($errors)) return; // Stop execution if errors exist
        }

        // Generate meta tags from $config['meta']
        foreach ($config['meta'] as $key => $value) {
            if ($key === 'charset') {
            $metaTags .= '<meta charset="'.htmlspecialchars($value).'">'.PHP_EOL;
            } elseif ($key === 'viewport') {
            $metaTags .= '<meta name="viewport" content="'.htmlspecialchars($value).'">'.PHP_EOL;
            } elseif ($key === 'X-UA-Compatible') {
            $metaTags .= '<meta http-equiv="X-UA-Compatible" content="'.htmlspecialchars($value).'">'.PHP_EOL;
            } else {
            $metaTags .= '<meta name="'.htmlspecialchars($key).'" content="'.htmlspecialchars($value).'">'.PHP_EOL;
            }
        }
        // Add mobile web app tags
        $metaTags .= '<meta name="mobile-web-app-capable" content="yes">'.PHP_EOL;
        $metaTags .= '<meta name="apple-mobile-web-app-capable" content="yes">'.PHP_EOL;
        $metaTags .= '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">'.PHP_EOL;

        // Open Graph tags
        if (!empty($config['open_graph'])) {
            foreach (['title', 'description', 'image', 'url', 'type'] as $key) {
                $metaTags .= '<meta property="og:'.$key.'" content="'.htmlspecialchars($config['open_graph'][$key] ?? '').'">'.PHP_EOL;
            }
        }

        // Twitter Card tags
        if (!empty($config['twitter'])) {
            foreach (['card', 'site', 'creator', 'title', 'description', 'image'] as $key) {
                $metaTags .= '<meta name="twitter:'.$key.'" content="'.htmlspecialchars($config['twitter'][$key] ?? '').'">'.PHP_EOL;
            }
        }

        // Favicon links
        foreach ($config['favicons'] as $key => $value) {
            if (strpos($key, 'favicon') !== false && !empty($value)) {
                $metaTags .= '<link rel="icon" href="'.htmlspecialchars($value).'">'.PHP_EOL;
            } elseif ($key === 'apple_touch_icon' && !empty($value)) {
                $metaTags .= '<link rel="apple-touch-icon" href="'.htmlspecialchars($value).'">'.PHP_EOL;
            } elseif ($key === 'mask_icon' && !empty($value)) {
                $metaTags .= '<link rel="mask-icon" href="'.htmlspecialchars($value).'">'.PHP_EOL;
            }
        }

        echo $metaTags;
        generate_web_manifest();
    }

    // Function to return site url
    function get_site_url() {
        global $config;
        return $config['url']['protocol'].$config['url']['domain'];
    }

    // Function to create internal page links
    function get_page_url($slug) {
        global $config;
        // Ensure $slug starts and ends with a single slash
        $slug = '/'.trim($slug, '/').'/';
        return $config['url']['protocol'].$config['url']['domain'].$slug;
    }


    // Function to format titles to combine Brand and Page Titles with separator
    function get_page_title($separator, $position = "left") {
        global $config;

        if (empty($config['title']['page_title'])) {
            return $config['title']['brand_name'];
        }

        $maxlen = 55;
        if ($position === "left") {
            // Default, we use `Page Title {separator} Brand Full Name`
            $title = $config['title']['page_title'].$config['title']['separator'].$config['title']['brand_name'];
            // If too long, use `Page Title {separator} Brand Abbreviation` instead
            return strlen($title) <= $maxlen ? $title : $config['title']['page_title'].$config['title']['separator'].$config['title']['brand_abbrev'];
        } else {
            // Default, we use `Brand Full Name {separator} Page Title`
            $title = $config['title']['brand_name'].$config['title']['separator'].$config['title']['page_title'];
            // If too long, use `Brand Abbreviation {separator} Page Title` instead
            return strlen($title) <= $maxlen ? $title : $config['title']['brand_abbrev'].$config['title']['separator'].$config['title']['page_title'];
        }
    }

    // Function to get current page from current URL
    function get_current_page() {
        $uri = $_SERVER['REQUEST_URI'];
        $path = parse_url($uri, PHP_URL_PATH);
        $basename = basename($path);
        if (empty($basename)) {
            $basename = 'index.php';
        }
        // Ensure the extension is always included
        return strpos($basename, '.') !== false ? $basename : $basename . '.php';
    }

    // Generate inline web manifest JSON
    function generate_web_manifest() {
        global $config;
        $webManifest = [
            'name' => $config['title']['brand_name'],
            'short_name' => $config['title']['brand_abbrev'],
            'start_url' => '/',
            'display' => 'standalone',
            'background_color' => $config['favicons']['theme_color'],
            'theme_color' => $config['favicons']['theme_color'],
            'icons' => [
                [
                    'src' => '/assets/seo/android-chrome-192x192.png',
                    'sizes' => '192x192',
                    'type' => 'image/png'
                ],
                [
                    'src' => '/assets/seo/android-chrome-512x512.png',
                    'sizes' => '512x512',
                    'type' => 'image/png'
                ]
            ]
        ];
    
        // Output the inline web manifest as a script tag
        echo '<script type="application/manifest+json">'.json_encode($webManifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES).'</script>';
    }
?>