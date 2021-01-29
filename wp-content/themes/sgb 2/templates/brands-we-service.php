<div class="about-us-container brands-we-service">
    <div class="tile-one">
        <div class="heading">
            <h1><?php the_field('heading');?></h1>
        </div>
        <div class="content">
            <div class="text"><?php the_field('content');?></div>
        </div>
    </div>
</div>
<?php echo get_template_part('templates/page-template');
