<?php 
while(have_rows('contents')): the_row();
if (get_sub_field('title_tag')) {$ttag = get_sub_field('title_tag');} else { $ttag = "h2";}
        if (get_sub_field('subtitle_tag')) {$stag = get_sub_field('subtitle_tag');} else { $stag = "h2";}
        if (get_sub_field('title_class')) {$tclass = get_sub_field('title_class');}
        if (subtitle_class) {$sclass = get_sub_field('subtitle_class');}
        $bg = get_sub_field('background_color').';';
        $title = get_sub_field('title');
        $content = get_sub_field('content');
?>

<section class="<?php echo get_sub_field('extra_class');?> extra-content" style="background: #<?php echo $bg;?>;padding:6vw;">
    <div class="container-lg">
<div class="heading center" style="max-width:750px;margin: 0px auto 20px;">
    <<?php echo $ttag;?> class="<?php echo $tclass;?>"><?php echo $title;?></<?php echo $ttag;?>>
</div>
<div class="content">
    <?php echo $content;?>
</div>
</div>
</section>
<?php endwhile;?>