<?php
/**
 * Template Name: Facility Maintenance Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pictura_Creative
 */
get_header();

$titletag = get_field('title_tag');
if ($titletag == "") {
    $titletag = "h1";
}
$titleclass = get_field('title_class');

$ctitletag = get_field('title_tag_copy');
if ($titletag == "") {
    $titletag = "h1";
}
$ctitleclass = get_field('title_class_copy');
$t2 = get_field('title_tag_copy2');
if ($t2 == "") {
    $t2 = "h1";
}
$c2 = get_field('title_class_copy2');

?>
<main class="fms-template">
    <section class="container-lg facility-mgmt-serv">
        <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>">
            <?php the_field('page_title');?>
        </<?php echo $titletag; ?>>
        <div class="fms-content">
            <?php the_field('main_content')?>
        </div>
        <<?php echo $ctitletag; ?> class="second-title">
            <?php the_field('second_title');?>
        </<?php echo $ctitletag; ?>>


        <?php if (have_rows("icons")): ?>
        <div class="facility-include">
            <?php while (have_rows("icons")): the_row();?>
            <div class="facility-icons">
                <img src="<?php echo get_sub_field('icon')['url']; ?>" alt=""><br>
                <span><?php the_sub_field('text');?></span>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif;?>

        <div class="fms-content">
            <?php the_field('content')?>
        </div>
    </section>

    <?php if (get_field('full_image')): ?>
    <section class="fms-full-img">
        <img src="<?php echo get_field('full_image')['url']; ?>" alt="SGB Services" clas="full-img">
    </section>
    <?php endif;?>

    <section class="lr-section container-lg">
        <?php if (get_field('image_text_block_title')): ?>
        <<?php echo $t2; ?> class="<?php echo $c2; ?>">
            <?php the_field('image_text_block_title');?>
        </<?php echo $t2; ?>>
        <?php endif;?>

        <div class="content">
            <?php the_field('image_text_block_content');?>
        </div>

        <div class="left-right-block">
            <?php if (have_rows('image_text_block')):
    $i = 0;
    while (have_rows('image_text_block')): the_row();
        $titletag = get_sub_field('title_tag');
        if ($titletag == "") {
            $titletag = "h1";
        }
        $titleclass = get_sub_field('title_class');?>

            <div class="left-right">
                <?php if (get_sub_field('image')): ?>
                <div class=" lr-img <?php if ($i % 2 == 0) {echo " order-sm ";} else {echo " order-lg ";}?>">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('title'); ?>">
                </div>
                <?php endif;?>

                <div class="lr-text <?php if ($i % 2 != 0) {echo " order-sm ";} else {echo " order-lg ";}?>">
                    <<?php echo $ctitletag; ?> class="<?php echo $titleclass; ?>">
                        <?php echo get_sub_field('title'); ?>
                    </<?php echo $ctitletag; ?>>
                    <div class="lr-content">
                        <?php echo get_sub_field('content'); ?>
                    </div>
                </div>
            </div>
            <?php $i++;endwhile;
endif;?>
        </div>
        <!-- left-right-block end here -->


        <?php if (get_field('content_after_image_text_block')): ?>
        <div class="content-after">
            <?php the_field('content_after_image_text_block');?>
        </div>
        <?php endif;?>
        <?php if (get_field('call_to_action_paragraph')): ?>
        <div class="content-after cta-para">
            <?php the_field('call_to_action_paragraph');?>
        </div>
        <?php endif;?>
        <?php while (have_posts()): the_post();
    get_template_part("templates/page-template");
endwhile;?>
    </section>
</main>
<?php get_footer();?>

<script>
$('.fms-change, .booka-job').text('Get in Touch');
</script>
