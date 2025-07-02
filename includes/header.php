<!DOCTYPE html>
<html lang="<?= $config['language']; ?>">
<head>
    <?php generate_meta_tags(); ?>
    
    <!-- <link rel="stylesheet" href="<?= get_site_url(); ?>/assets/css/main.css"> -->
    <link rel="stylesheet" href="<?= get_site_url(); ?>/assets/css/main.css?v=<?= time(); ?>">
</head>
<body class="scroll-snap-y">
    <?php require_once(__DIR__.'/body-open.php'); ?>
    <?php require_once(__DIR__.'/nav.php'); ?>
