<?php
if (have_rows('template_blocks', 'option')):
    while (have_rows('template_blocks', 'option')): the_row();?>

<!-- Class and Tags Assignment -->

<?php if (get_sub_field('title_tag')) {$titletag = get_sub_field('title_tag');} else { $titletag = "h2";}
        if (get_sub_field('subtitle_tag')) {$subtitletag = get_sub_field('subtitle_tag');} else { $subtitletag = "h2";}
        if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
        if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
        if (get_sub_field('content_class')) {$contentclass = get_sub_field('content_class');}

        ?>


<?php if ((get_row_layout() == 'image_and_text') && get_field('show_car') != 1) {
            echo get_template_part('templates/image-and-text/imgtxt');
        } elseif ((get_row_layout() == 'icons_and_text') && get_field('show_why_choose_sgb') != 1) {
        echo get_template_part('templates/icon-and-text/icontxt');
    } elseif ((get_row_layout() == 'brand_logos') && get_field('show_brand_logo_block') != 1 && !is_page_template('page-service.php')) {
    echo get_template_part('templates/brand-logos/logo');
} elseif ((get_row_layout() == 'client_logos') && get_field('show_clients_logo_block') != 1) {
    echo get_template_part('templates/clients-logo/logo');
}

endwhile;
endif;?>

<?php
if (have_rows('extra_blocks')):
    while (have_rows('extra_blocks')): the_row();
if(get_row_layout() == content):
echo get_template_part('templates/content/content');
endif; endwhile;endif;?>


<?php if (get_field('show_testimonial') != 1): ?>
<div class="client-feedback">
    <div class="service-container">
        <div class="heading">
            <?php if (get_field('title_tag', 450)) {
    $titletag = get_field('title_tag', 450);} else {
    $titletag = "h2";
}if (get_field('title_class', 450)) {
    $titleclass = get_field('title_class', 450);}
?>

            <<?php echo $titletag; ?> class=<?php echo $titleclass; ?>>
                <?php echo get_field('title', 450) ?></<?php echo $titletag; ?>>
        </div>
    </div>
    <?php while (have_rows("testimonials", 450)): the_row();?>
    <div class="service-container">
        <div class="feedback-text">
            <?php echo get_sub_field('content', 450) ?>
        </div>
    </div>
    <div class="service-container">
        <div class="client-details">
            <p><?php
    if (get_sub_field('name', 450)):
        echo get_sub_field('name', 450);
        if (get_sub_field('position', 450)): ?>
                , <?php echo get_sub_field('position', 450);
    endif;if (get_sub_field('company', 450)):  ?>
                <strong>- <?php echo get_sub_field('company', 450) ?>
                </strong>
                <?php endif;endif;?>
            </p>
        </div>
    </div>
    <?php endwhile;?>
</div>
<?php endif;

if (have_rows('template_blocks', 'option')):
    while (have_rows('template_blocks', 'option')): the_row();
        if ((get_row_layout() == 'brand_logos') && is_page_template('page-service.php')):
            echo get_template_part('templates/brand-logos/logo');endif;
    endwhile;endif;

if (have_rows('template_blocks')):
    while (have_rows('template_blocks')): the_row();
        if ((get_row_layout() == 'client_logos')) {
            echo get_template_part('templates/clients-logo/logo');
        }
    endwhile;endif;?>

<div class=" book-job book-job-bottom">
    <div class="book-job-container">

        <div class="contact-call">
            <?php if (is_page_template('page-fms.php')) {?>
            <p class="fms-book">Call now for an obligation free consultion: <a href="tel:1300 55 44 56">1300 55 44 56.</a></p>
            <?php } else {?>
            <a href="tel:<?php the_field('contact_now', 'options');?>">Call
                <?php the_field('contact_now', 'options');?></a><span class="book-or">or</span> <div class="contact-book trigger2"><button>Book a Job</button></div>
            <?php }?>
        </div>
       
    </div>
</div>
<footer>
    <div class="footer-top-empty">
    </div>
    <div class="footer-content">
        <div class="service-container">
            <div class="footer-section1">
                <div class="footer-kitchen">
                    <?php dynamic_sidebar('footer-1');?>
                </div>

                <div class="fms-footer">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
            </div>

            <div class="footer-section2">
                <div class="footer-maintenance">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
            </div>
            <div class="footer-section3">
                <div class="footer-about">
                    <?php dynamic_sidebar('footer-4');?>

                    <div class="footer-contact footer-contact-sub">
                        <div class="contact-us">
                            <a href="<?php echo site_url() . '/contact-us'; ?>" class="contact-footer-title">Contact
                                Us</a>
                            <a href="tel:<?php the_field('contact_now', 'options');?>">Call us:
                                <?php the_field('contact_now', 'options');?></a>
                        </div>
                        <div class="follow-us">
                            <p class="head-office-footer footer-head follow">Follow Us</p>

                            <?php if (get_field('facebook', 'option')): ?>
                            <a href="<?php the_field('facebook', 'option');?>"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>"
                                    alt=""></a>
                            <?php endif;?>

                            <?php if (get_field('instagram', 'option')): ?>
                            <a href="<?php the_field('instagram', 'option');?>"><img
                                    src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png'; ?>"
                                    alt=""></a>
                            <?php endif;?>
                            <?php if (get_field('linkedin', 'option')): ?>
                            <a href="<?php the_field('linkedin', 'option');?>">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>"
                                    alt=""></a>
                            <?php endif;?>
                            <?php if (get_field('google', 'option')): ?>
                            <a href="<?php the_field('google', 'option');?>">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/google-plus.png'; ?>"
                                    alt=""></a>
                            <?php endif;?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-contact footer-contact-main">
                <div class="contact-us">
                    <p class="footer-head"><a href="<?php echo site_url() . '/contact-us'; ?>"
                            class="contact-footer-title">Contact Us</a>
                    </p>
                    <a href="tel:<?php the_field('contact_now', 'options');?>" class="contact-call">Call us:
                        <?php the_field('contact_now', 'options');?></a>
                    <p class="head-office-footer  footer-head">Head Office</p>
                    <a href="https://goo.gl/maps/HAcpBWSQknJaNbUW6"
                        class="contact-call"><?php the_field('address', 'options');?>
                    </a>
                </div>
                <div class="follow-us">
                    <p class="head-office-footer footer-head follow">Follow Us</p>

                    <?php if (get_field('facebook', 'option')): ?>
                    <a href="<?php the_field('facebook', 'option');?>"><img
                            src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>"
                            alt=""></a>
                    <?php endif;?>

                    <?php if (get_field('instagram', 'option')): ?>
                    <a href="<?php the_field('instagram', 'option');?>"><img
                            src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png'; ?>"
                            alt=""></a>
                    <?php endif;?>
                    <?php if (get_field('linkedin', 'option')): ?>
                    <a href="<?php the_field('linkedin', 'option');?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>"
                            alt=""></a>
                    <?php endif;?>
                    <?php if (get_field('google', 'option')): ?>
                    <a href="<?php the_field('google', 'option');?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/google-plus.png'; ?>"
                            alt=""></a>
                    <?php endif;?>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-left">
            <div class="footer-left-text">
                <span><a href="<?php echo site_url(); ?>"><img
                            src="<?php echo get_template_directory_uri() . '/assets/images/sgb-footer-logo.png'; ?>"
                            alt=""></a></span> Copyright <?php echo date("Y"); ?>.
                SGB Maintenance
                Pty Ltd. All rights reserved.
            </div>

        </div>
        <div class="footer-right">
            <div class="footer-right-text">
                <a href="<?php echo site_url() . '/privacy'; ?>">Privacy</a> | <a
                    href="<?php echo site_url() . '/terms'; ?>">Terms & Conditions</a>
            </div>
        </div>
    </div>
    <div class="footer-small">
        <?php dynamic_sidebar('footer-1');?>
        <?php dynamic_sidebar('footer-2');?>
        <?php dynamic_sidebar('footer-3');?>
        <?php dynamic_sidebar('footer-4');?>
        <div class="follow-us">
            <p class="head-office-footer footer-head follow">Follow Us</p>

            <?php if (get_field('facebook', 'option')): ?>
            <a href="<?php the_field('facebook', 'option');?>"><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png'; ?>" alt=""></a>
            <?php endif;?>

            <?php if (get_field('instagram', 'option')): ?>
            <a href="<?php the_field('instagram', 'option');?>"><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png'; ?>" alt=""></a>
            <?php endif;?>
            <?php if (get_field('linkedin', 'option')): ?>
            <a href="<?php the_field('linkedin', 'option');?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.png'; ?>" alt=""></a>
            <?php endif;?>
            <?php if (get_field('google', 'option')): ?>
            <a href="<?php the_field('google', 'option');?>">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/google-plus.png'; ?>" alt=""></a>
            <?php endif;?>
        </div>
        <div class="footer-small-lower">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sgb-footer-logo.png'; ?>" alt="">
            <div class="text">Copyright <?php echo date("Y"); ?>.
                SGB Maintenance
                Pty Ltd. All rights reserved.</div>
            <div class="text"><a href="<?php echo site_url() . '/privacy'; ?>">Privacy</a> | <a
                    href="<?php echo site_url() . '/terms'; ?>">Terms & Conditions</a></div>
        </div>
    </div>
	<div id="top"></div>
</footer>
</div>

<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/popper.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/webfontloader.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'; ?>"></script>
<?php wp_footer(); ?>
</body>

</html>
