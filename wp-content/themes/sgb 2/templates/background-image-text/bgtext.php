<div class="expert-profile <?php the_sub_field('extra_class');?>">
    <div class="expert-profile-image">
        <div class="bottom-bar"></div>
        <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="">
        <div class="expert-text">
            <div class="heading">
                <h2><?php the_sub_field('image_title');?></h2>
            </div>
            <div class="text">
                <?php the_sub_field('image_content');?>
            </div>
            <a href="<?php the_sub_field('button_link')['url'];?>"><button>Find out more</button></a>
        </div>
    </div>
</div>
