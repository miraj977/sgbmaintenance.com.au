<?php
/**
 * Template Name: Services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pictura_Creative
 */
get_header();
?>


<div class="common-page-container kitchen-service maintenance-service">
    <?php if (get_field('main_heading')): ?>
    <div class="content-heading">
        <?php
if (get_field('main_heading_tag')) {
    $titletag = get_field('main_heading_tag');
} else {
    $titletag = "h1";
}
if (get_field('main_heading_class')) {
    $titleclass = get_field('main_heading_class');
}
if (get_field('main_heading_tag_copy')) {$titletag2 = get_field('main_heading_tag_copy');} else { $titletag2 = "h4";}
if (get_field('main_heading_class_copy')) {$titleclass2 = get_field('main_heading_class_copy');}

?>
        <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>"><?php echo get_field('main_heading'); ?>
        </<?php echo $titletag; ?>>
    </div>
    <?php endif;?>

    <?php if (have_rows('service_blocks')): ?>
    <div class="kitchen-service-blocks">
        <?php while (have_rows('service_blocks')): the_row();?> <a href="<?php echo get_sub_field('link')['url']; ?>">
            <div class="block-one block">
                <?php if (get_sub_field('icon')): ?>
                <div>
                    <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="">
                </div>
                <?php endif;?>
                <p class="text"><?php echo get_sub_field('title'); ?>
                </p>
                <p class="read-more">Read More</p>
            </div>
        </a>
        <?php endwhile;?>
    </div>
    <?php endif;?>

    <div class="content-text black">
        <div class="text"><?php the_field('content');?></div>
    </div>
    <div class="content-bottom bottom-text">
        <div class="text"><?php the_field('content_bottom');?></div>
    </div>
    <div class="content-contact">
        <div class="contact-call"><a href="tel:<?php the_field('contact_now', 'options');?>">Call
                <?php the_field('contact_now', 'options');?></a></div>
    </div>
</div>

<div class="common-page-vehicle-section kitchen-service-profile">

    <div class="vehicle-section-content kitchen-service-profile-content">
        <div class="content-heading">
            <<?php echo $titletag; ?> class="<?php echo $titleclass2; ?>"><?php the_field('profile_heading');?>
            </<?php echo $titletag; ?>>
        </div>
        <div class="content-text">
            <div class="text"><?php the_field('profile_text');?></div>
        </div>
        <div class="content-bottom">
            <div class="text"><?php the_field('profile_bottom_text');?></div>
        </div>
    </div>
    <div class="common-page-vehicle-image">
        <img src="<?php the_field('profile_image');?>" alt="">

    </div>
</div>

<?php get_footer();?>
