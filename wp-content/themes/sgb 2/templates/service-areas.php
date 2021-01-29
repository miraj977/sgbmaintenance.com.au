<div class="about-us-container brands-we-service service-areas kitchen-service maintenance-service">
    <div class="tile-one">
        <div class="heading">
            <h1><?php the_field('heading');?></h1>
        </div>
        <div class="content">
            <div class="text"><?php the_field('content');?></div>
        </div>
        <div class="service-area-image">
            <img src="<?php the_field('area_image');?>" alt="">
        </div>
        <div class="content">
            <div class="text"><?php the_field('content_bottom');?></div>
        </div>
    </div>

    <?php if (have_rows('areas')): ?>
    <div class="kitchen-service-blocks areas">
        <?php while (have_rows('areas')): the_row();?> <a href="#!">
            <div class="block-one block">
                <<?php the_sub_field('name_tag');?> class="text area"><?php echo get_sub_field('area_name'); ?>
                </<?php the_sub_field('name_tag');?>>
            </div>
        </a>
        <?php endwhile;?>
    </div>
    <?php endif;?>
</div>
