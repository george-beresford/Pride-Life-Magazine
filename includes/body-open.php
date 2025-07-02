<?php
    // Place to add scripts to opening body tag
    global $config, $schema, $social;
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "<?= $config['title']['brand_name']; ?>",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $schema['streetAddress']; ?>",
        "addressLocality": "<?= $schema['addressLocality']; ?>",
        "addressRegion": "<?= $schema['addressRegion']; ?>",
        "postalCode": "<?= $schema['postalCode']; ?>",
        "addressCountry": "<?= $schema['addressCountry']; ?>"
    },
    "telephone": "<?= $schema['telephone']; ?>",
    "email": "<?= $schema['email']; ?>",
    "url": "<?= get_site_url(); ?>",
    "openingHours": [
        <?php
            foreach ($schema['openingHours'] as $key => $hours):
                if ($key === array_key_last($schema['openingHours'])) {
                    echo '"'.$hours.'"'.PHP_EOL;
                } else {
                    echo '"'.$hours.'",'.PHP_EOL;
                }
            endforeach;
        ?>
    ],
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "<?= $schema['latitude']; ?>",
        "longitude": "<?= $schema['longitude']; ?>"
    },
    "sameAs": [
        <?php
            foreach($social as $key => $link):
                if ($key === array_key_last($social)) {
                    echo '"'.$link[1].'"'.PHP_EOL;
                } else {
                    echo '"'.$link[1].'",'.PHP_EOL;
                }
            endforeach;
        ?>
    ]
}
</script>
<?php echo PHP_EOL;

