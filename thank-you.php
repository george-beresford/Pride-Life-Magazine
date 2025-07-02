<?php
    $hide_page = TRUE;
    $config['title']['page_title'] = "Thank You";
    require_once(__DIR__.'/includes/@site.config.php');
?>
<?php require __DIR__.'/includes/header.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Thank You!</h2>
                <p class="lead">Thanks for getting in touch. We've received your enquiry and will get back to you as soon as possible.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex flex-row gap-4 flex-wrap justify-content-left">
                    <a href="<?= $config['url']['protocol'].$config['url']['domain']; ?>" class="btn btn-primary">Return Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>