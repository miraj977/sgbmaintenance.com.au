<?php
/*
Template Name: Service Sub page
 */

get_header();?>

<div class="common-page-container">

    <div class="content-left">
        <?php if (get_field('main_title')): ?>
        <div class="content-heading">
            <?php if (get_field('main_title_tag')) {
    $mtag = get_field('main_title_tag');
} else {
    $mtag = "h1";}
if (get_field('main_title_class')) {$mclass = get_field('main_title_class');}
?>
            <<?php echo $mtag; ?> class="<?php echo $mclass; ?>"><?php echo get_field('main_title'); ?>
            </<?php echo $mtag; ?>>
        </div>
        <div class="content-text">
            <div class="text"><?php the_field('main_content');?></div>
        </div>
        <?php
endif;
if (get_field('content')):
    while (have_rows('content')): the_row();
        if (get_sub_field('subtitle')):

        ?>
        <div class="content-heading">
            <?php if (get_sub_field('subtitle_tag')) {
            $stag = get_sub_field('subtitle_tag');
        } else {
            $stag = "h2";}
        if (get_sub_field('subitle_class')) {$sclass = get_sub_field('subitle_class');}
        ?>
            <<?php echo $stag; ?> class="<?php echo $sclass; ?>"><?php echo get_sub_field('subtitle'); ?>
            </<?php echo $stag; ?>>
        </div>
        <?php endif;?>
        <div class="content-text">
            <div class="text"><?php the_sub_field('content');?></div>
        </div>

        <?php endwhile;endif;?>
        <div class="content-bottom">
            <div class="text bottom-text"><?php the_field('content_bottom');?></div>
        </div>
        <div class="content-contact">
            <div class="contact-call"><a href="tel:<?php the_field('contact_now', 'options');?>">Call
                    <?php the_field('contact_now', 'options');?></a></div>
            <div class="book-or"> or</div>
            <div class="contact-book trigger2"><button>Book a Job</button></div>
        </div>
    </div>
    <div class="content-right">
        <div class="call-icon-common-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/call.svg'; ?>" alt="">

        </div>
        <div class="contact-bar">
            <?php dynamic_sidebar("contact-sidebar");?>

        </div>
        <div class="bottom-right-bar">
            <?php if (get_field('sidebar_content')):
    while (have_rows('sidebar_content')): the_row();
        if (get_sub_field('title_tag')) {$titletag = get_sub_field('title_tag');} else { $titletag = "h2";}
        if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}

        ?>
            <div class="content-heading">
                <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>">
                    <?php the_sub_field('title');?>
                </<?php echo $titletag; ?>>
            </div>
            <div class="content-text">
                <div class="text"><?php the_sub_field('content');?></div>
            </div>
            <button><a href="<?php the_sub_field('link');?>">Read more</a></button>
            <div class="content-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/common-page-profile-image.png'; ?>"
                    alt="">
            </div>
            <?php endwhile;endif;?>
        </div>
    </div>
</div>
<?php if (get_field('slider_image')): ?>
<div class="common-page-flexslider-content">
    <div class="flexslider">
        <ul class="slides">
            <?php foreach (get_field('slider_image') as $page_content) {?>
            <li>
                <div class="carousel-image">
                    <img src="<?php echo $page_content['url']; ?> " alt="printer_repairs_sydney">
                </div>
            </li>
            <?php }?>
        </ul>
        <ul class="flex-direction-nav flex-control">
            <li class="flex-nav-prev">
                <a class="flex-prev" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.svg'; ?>" alt=""> </a>
            </li>
            <li class="flex-nav-next">
                <a class="flex-next" href="#"> <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.svg'; ?>" alt=""></a>
            </li>
        </ul>
    </div>
</div>
<?php endif;?>

<?php get_footer();?>
