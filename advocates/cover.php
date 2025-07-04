<?php
// Change the title based on 'advocates' GET parameter
$title = isset($_GET['advocate']) && $_GET['advocate'] !== ''
    ? 'Meet more of our Pride Inclusion Advocates'
    : 'Pride Inclusion Advocates';

echo create_layout('background-media', [
    'title' => $title,
    'content' => '',
    'image' => get_site_url() . '/articles/advocates/cover.webp',
    'image_alt' => '',
    'image_credit' => '',
]);
?>