<?php if (get_sub_field('title_tag')) {$titletag = get_sub_field('title_tag');} else { $titletag = "h2";}
if (get_sub_field('subtitle_tag')) {$subtitletag = get_sub_field('subtitle_tag');} else { $subtitletag = "h2";}
if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
if (get_sub_field('content_class')) {$contentclass = get_sub_field('content_class');}
?>
<div class="service-highlights common-page-service-highlights icon-text-section <?php the_sub_field('extra_class');?>"
    style="background:<?php echo the_sub_field('section_background') . ';'; ?>">
    <div class="service-container">
        <div class="heading">
            <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>"><?php echo get_sub_field('title'); ?>
            </<?php echo $titletag; ?>>
        </div>
    </div>
    <?php if (get_sub_field('content')): ?>
    <div class="icon-content"><?php the_sub_field('content');?></div>
    <?php endif;?>
    <div class=" service-container-large">
        <div class="service-container">
            <?php if (have_rows('icons')): while (have_rows('icons')): the_row();?>
            <div class="individual-content content-margin">
                <img src="<?php echo wp_get_attachment_url(get_sub_field('icon')); ?>" alt="">
                <p><?php echo get_sub_field('icon_text');
        ?></p>
            </div>

            <?php endwhile;endif;?>
        </div>
        <?php if (is_page_template('page-fms.php')): ?>
        <div class="container additional center">
            <?php the_sub_field('additional_content');?>
        </div>
        <div class="cta-para container center">
            <?php the_sub_field('cta_paragraph');?>
        </div>
        <?php endif;?>
    </div>
</div>
	
<?php
// if(have_rows('extra_blocks','option')){
//     while(have_rows('extra_blocks','option')): the_row();
// if ((get_row_layout() == 'icons_and_text')):
// 	echo get_template_part('templates/icon-and-text/icontxt');
//  endif;
//  endwhile;}
 ?>