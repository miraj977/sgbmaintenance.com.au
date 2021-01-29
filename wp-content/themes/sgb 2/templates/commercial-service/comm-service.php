<div class="commercial-services <?php the_sub_field('extra_class');?>">

    <?php
$i = 0;
while (have_rows('services')): the_row();

    if (get_sub_field('title_tag')) {$titletag = get_sub_field('title_tag');} else { $titletag = "h2";}

    if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
    if ($i % 2 == 0) {
        $section = "left";
    } else {
        $section = "right";
    }
    ?>
    <div class="<?php echo $section; ?>-section">
        <div class="<?php echo $section; ?>-content">
            <div class="<?php echo $section; ?>-bar"></div>
            <div class="heading">
                <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>"><?php echo get_sub_field('title'); ?>
                </<?php echo $titletag; ?>>
            </div>
            <div class="text">
                <?php echo get_sub_field('content'); ?>
            </div>
            <a href=" <?php echo get_sub_field('link')['url']; ?>"><button class="more-services">See our
                    services</button></a>
        </div>
    </div>
    <?php $i++;endwhile;?>
</div>
<?php if (is_front_page()): ?>
<div class="book-job book-job-top">
    <div class="book-job-container">
        <div class="contact-call"><a href="tel:<?php the_field('contact_now', 'options');?>">Call
                <?php the_field('contact_now', 'options');?></a><span class="book-or">or</span></div>
        <div class="contact-book trigger2"><button>Book a Job</button></div>
        <div class="contact-vehicle-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/sgb-van.png'; ?>" alt="">
        </div>
    </div>
</div>
<?php endif;?>
