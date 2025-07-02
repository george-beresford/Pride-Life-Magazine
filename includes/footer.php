        <footer>
            <div class="layout">
                <div class="column">
                    <div class="row">
                        <div class="col">
                            <div class="row gy-4 gy-lg-0">
                                <div class="col-12 col-md-4 align-left">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Contact</h5>
                                            <ul class="list-unstyled">
                                                <li><a href="tel:+447919473473">+44 (0)7919 473 473</a></li>
                                                <li><a href="mailto:info@pridelifeglobal.com">info@pridelifeglobal.com</a></li>
                                            </ul>
                                            <hr />
                                            <h5>Follow Us</h5>
                                            <ul class="social-menu list-unstyled d-flex flex-row">
                                                <?php foreach ($social as $platform => $details) {
                                                    if (count($details) === 5) {
                                                        list($icon, $href, $title, $prettyLink, $targetBlank) = $details;
                                                        $target = $targetBlank ? '_blank' : '_self';
                                                        ?>
                                                        <li class="me-2">
                                                            <a href="<?= $href; ?>" title="<?= $title; ?>" target="<?= $target; ?>">
                                                                <icon class="solid-fill"><?= file_get_contents(__DIR__.'/../assets/svg/icons/social/'.$icon); ?></icon>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 align-left">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Executive Offices</h5>
                                            <p>
                                                Pride Life Global Ltd, 204, 58 Peregrine Road, Hainault, Ilford, Essex, IG6 3SZ
                                            </p>
                                            <hr />
                                            <h5>For Advertising &amp; Partnership Enquiries</h5>
                                            <p>
                                                <a href="mailto:partnerships@pridelifeglobal.com">partnerships@pridelifeglobal.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 align-left">
                                    <div class="row">
                                        <div class="col">                                
                                            <h5>Credits</h5>
                                            <ul class="list-unstyled">
                                                <li><strong>Chief Executive Officer:</strong> Steve Sohal</li>
                                                <li><strong>Editor-in-Chief:</strong> Nigel Robinson</li>
                                                <li><strong>Art Director:</strong> Paul Vyse</li>
                                                <!-- <li><strong>Printed in the UK by:</strong> DMlink Ltd</li> -->
                                                <li><strong>Interactive Digital Issue:</strong> George Beresford</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="copyright align-center">&copy; Copyright <?php echo date('Y'); ?> Pride Life Global Limited. All rights reserved. No part of this publication may be reproduced by any means without the written permission of the copyright owners. Although every effort has been made to ensure the accuracy of this publication, the publisher cannot accept responsibility for any errors or omissions. In the interest of independence and impartiality, many features in Pride Life have been written on behalf of the publisher by third-party experts. It should be noted that any opinions and recommendations expressed therein are the views of the writers themselves and not necessarily those of Pride Life Global Limited or its publisher.</p>
                                    <p class="credit align-center">Made possible and with love, by <a href="https://georgeberesford.co.uk/" title="George Beresford Design - Website Design and Development Specialist"><icon aria-hidden><?= file_get_contents(__DIR__ . '/../assets/svg/george-beresford-design.svg'); ?></icon>GB Design</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php require_once(__DIR__.'/body-close.php'); ?>
    </body>
</html>