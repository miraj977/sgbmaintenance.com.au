<?php if (get_sub_field('title_tag')) {$titletag = get_sub_field('title_tag');} else { $titletag = "h2";}
if (get_sub_field('subtitle_tag')) {$subtitletag = get_sub_field('subtitle_tag');} else { $subtitletag = "h2";}
if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
if (get_sub_field('content_class')) {$contentclass = get_sub_field('content_class');}
?>
<div class="major-brands client-section <?php the_sub_field('extra_class');?>">
    <div class="service-container">
        <div class="heading">
            <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>"><?php echo get_sub_field('title'); ?>
            </<?php echo $titletag; ?>>
        </div>
    </div>
    <?php if (get_sub_field('content')): ?>
    <div class="service-container">
        <div class="text">
            <p class="<?php echo $contentclass; ?>"><?php echo get_sub_field('content'); ?>
            </p>
        </div>
    </div>
    <?php endif;?>
    <div class="service-container">
        <div class="brands-heading"><?php echo get_sub_field('subtitle'); ?>
        </div>
    </div>
    <div class="brands-logo-large">
        <div class="service-container">
            <div class="brands-logo-top client-logos">
                <?php
$client_imgs = get_sub_field('icons');
foreach ($client_imgs as $client_img):
?>
                <div class="individual-content content-margin client-logo">
                    <img src="<?php echo $client_img['url']; ?>" alt=""></p>
                </div>

                <?php endforeach;?>
            </div>
        </div>
    </div>

    <?php if (get_sub_field('link')): ?>
    <div class="service-container">
        <div class="more-brands">
            <a href="<?php echo get_sub_field('link')['url']; ?>
"><?php echo get_sub_field('link')['title']; ?></a>
        </div>
    </div>
    <?php endif;?>
</div>
