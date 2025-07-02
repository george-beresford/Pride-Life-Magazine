<section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
    <div class="scroll-snap-x">
        <?php echo create_layout('default', $args = [
            'title' => 'Template Style :: Default',
            'content' => 'This is placeholder content for the default template style. It can be used to showcase various types of content in a standard layout
            Text may be formatted into columns depending on the content length and associated styles.',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_alt' => 'Tristan B Unsplash',
            'image_credit' => 'Tristan B Unsplash',
        ]); ?>
        <?php echo create_layout('full-media', $args = [
            'title' => 'Template Style :: Background Media',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_alt' => 'Tristan B Unsplash',
            'image_credit' => 'Tristan B Unsplash',
        ]); ?>
        <?php echo create_layout('background-media', $args = [
            'title' => 'Template Style :: Background Media',
            'content' => 'This is placeholder content for the default template style. It can be used to showcase various types of content in a standard layout
            Text may be formatted into columns depending on the content length and associated styles.',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_alt' => 'Tristan B Unsplash',
            'image_credit' => 'Tristan B Unsplash',
        ]); ?>
        <?php echo create_layout('split-media', $args = [
            'title' => 'Template Style :: Split Media',
            'content' => '#This is placeholder content for the default template style. It can be used to showcase various types of content in a standard layout
            Text may be formatted into columns depending on the content length and associated styles.',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_alt' => 'Tristan B Unsplash',
            'image_credit' => 'Tristan B Unsplash',
        ], "accented"); ?>
        <?php echo create_layout('split-media-reverse', $args = [
            'title' => 'Template Style :: Split Media Reverse',
            'content' => '#This is placeholder content for the default template style. It can be used to showcase various types of content in a standard layout
            Text may be formatted into columns depending on the content length and associated styles.',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_credit' => 'Tristan B Unsplash',
        ]); ?>
        <?php echo create_layout('split-editorial', $args = [
            'title' => 'Template Style :: Editorial Columns',
            'content' => '#This is placeholder content for the default template style. It can be used to showcase various types of content in a standard layout
            Text may be formatted into columns depending on the content length and associated styles.',
        ]); ?>
        <?php echo create_layout('image-collage', $args = [
            'collection' => [
                [
                    'image' => get_site_url() . '/articles/washington-pride/World-Pride-Bus.png',
                    'image_alt' => 'PICTURES: WASHINGTON.COM',
                    'image_credit' => 'PICTURES: WASHINGTON.COM',
                ],
                [
                    'image' => get_site_url() . '/articles/washington-pride/World-Pride-Carnival.png',
                    'image_alt' => 'PICTURES: WASHINGTON.COM',
                    'image_credit' => 'PICTURES: WASHINGTON.COM',
                ],
                [
                    'image' => get_site_url() . '/articles/washington-pride/World-Pride-Speech.png',
                    'image_alt' => 'PICTURES: WASHINGTON.COM',
                    'image_credit' => 'PICTURES: WASHINGTON.COM',
                ],
            ],
            
        ]); ?>
    </div>
</section>






<?php /*

SINGLE PAGE ADVERT

*/ ?>
<?php echo create_layout('advert', $args = [
    'title' => 'Template Style :: Advert',
    'content' => '',
    'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
    'image_alt' => 'Tristan B Unsplash',
    'image_credit' => 'Tristan B Unsplash',
]); ?>






<?php /*

DOUBLE SPREAD ADVERT

*/ ?>
<section style="--background: var(--lightgrey); --accent: var(--pride-green); --color: var(--white);">
    <div class="scroll-snap-x">
        <?php echo create_layout('advert', $args = [
            'title' => 'Advert :: Double Spread :: Page 1',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_alt' => 'Tristan B Unsplash',
            'hyperlink' => array('text' => 'FLOATING BUTTON', 'url' => 'https://link.com/'),
        ]); ?>
        <?php echo create_layout('advert', $args = [
            'title' => 'Advert :: Double Spread :: Page 1',
            'image' => get_site_url() . '/assets/img/tristan-b-72EYDDwn8dE-unsplash.jpg',
            'image_alt' => 'Tristan B Unsplash',
            'hyperlink' => array('text' => 'FLOATING BUTTON', 'url' => 'https://link.com/'),
        ]); ?>
    </div>
</section>