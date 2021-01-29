<div class="about-us-container">
    <div class="tile-one tile">
        <div class="heading">
            <h1><?php the_field('tile_one_heading');?></h1>
        </div>
        <div class="content">
            <div class="text"><?php the_field('tile_one_content');?></div>
        </div>
    </div>
    <div class="tile-two tile" style="position:relative;">
        <div class="heading">
            <h1><?php the_field('tile_two_heading');?></h1>

        </div>
        <div class="content">
            <div class="text"><?php the_field('tile_two_content');?></div>
        </div>
        <div class="image"  style="position:relative;">
            <img src="<?php the_field('tile_two_image');?>" alt="">
        </div>
<div class="bg"></div>
    </div>
    <div class="tile-three tile">
        <div class="heading">
            <h1><?php the_field('tile_three_heading');?></h1>
        </div>
        <div class="content">
            <div class="text"><?php the_field('tile_three_content');?></div>
        </div>
    </div>
    <div class="tile-four tile" style="position:relative;">
        <div class="heading">
            <h1><?php the_field('tile_four_heading');?></h1>
        </div>
        <div class="content">
            <div class="text"><?php the_field('tile_four_content');?></div>
        </div>
        <div class="image"  style="position:relative;">
            <img src="<?php the_field('tile_four_image');?>" alt="">
        </div>
<div class="bg"></div>
		</div>
    </div>
</div>
<div class="about-us-client-section">
    <div class="service-highlights common-page-service-highlights">
        <div class="service-container" style="max-width: 920px;">
            <div class="heading">
                <h1><?php the_field('about_us_heading');?></h1>
            </div>
        </div>
        <div class="service-container">
            <div class="content">
                <div class="text"><?php the_field('about_us_content');?></div>
            </div>
        </div>
        <div class="brands-logo-large container">
            <div class="service-container">
                <div class="brands-logo-top client-logos">
                    <?php
$client_imgs = get_field('icon');
foreach ($client_imgs as $client_img):
?>
                    <div class="individual-content content-margin client-logo">
                        <img src="<?php echo $client_img['url']; ?>" alt=""></p>
                    </div>

                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

</div>
