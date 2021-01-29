<?php if (get_sub_field('title_tag')) {$titletag = get_sub_field('title_tag');} else { $titletag = "h2";}
if (get_sub_field('subtitle_tag')) {$subtitletag = get_sub_field('subtitle_tag');} else { $subtitletag = "h2";}
if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
if (get_sub_field('title_class')) {$titleclass = get_sub_field('title_class');}
if (get_sub_field('content_class')) {$contentclass = get_sub_field('content_class');}
?>
<div class="common-page-vehicle-section <?php the_sub_field('extra_class');?>">
    <div class="common-page-vehicle-image">
        <img src="<?php echo get_sub_field('image')['url']; ?>" alt="Car">

    </div>
    <div class="vehicle-section-content">
        <div class="content-heading">
            <<?php echo $titletag; ?> class="<?php echo $titleclass; ?>"><?php
				if(get_field('new_title',get_the_ID())){
	the_field('new_title',get_the_ID());
}elseif(get_field('new_title')){
	the_field('new_title');
					
				}else{
					the_sub_field('title');}?>
            </<?php echo $titletag; ?>>
        </div>
        <div class="content-text">
            <div class="text"><?php 
				if(get_field('new_content',get_the_ID())){
	the_field('new_content',get_the_ID());
}elseif(get_field('new_title')){
	the_field('new_title');
				}else{the_sub_field('content');}?></div>
        </div>
        <div class="content-bottom">
            <div class="text">Call us today to find out more: <?php the_field('contact_now', 'option');?>.</div>
        </div>
    </div>
</div>
