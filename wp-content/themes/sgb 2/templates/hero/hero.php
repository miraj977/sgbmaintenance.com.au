<div class="main-image slideshow-container flexslider <?php the_sub_field('extra_class');?>">
    <ul class="slides">
        <?php

while (have_rows('hero_content')): the_row();
    ?>
        <li>

            <div class="mySlides-container mySlides fade">
                <div class=" hero-image slide-image-one"
                    style="background-image:url('<?php echo get_sub_field('hero_image')['url']; ?>')">
                </div>
                <div class="image-content">
                    <div class="image-text">
                        <h3><?php echo get_sub_field('hero_text'); ?></h3>
                    </div>
                    <div class="image-button">
                        <button>How can we help you?</button>
                    </div>
                </div>
            </div>
        </li>
        <?php
endwhile;
?>
    </ul>
    <div class="flexslider-controls">
        <ol class="flex-control-nav">
            <li class="first">
                <a href="">01</a>
            </li>
            <li class="second">
                <a href="">02</a>
            </li>
            <li class="third">
                <a href="">03</a>
            </li>
        </ol>
    </div>

</div>
<a href="#!" id="scrolldown"><img src="<?php echo get_template_directory_uri() . '/assets/images/scrolldown.png'; ?>">
</a>
