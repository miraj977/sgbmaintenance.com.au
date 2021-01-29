<div class="common-page-image">
    <div class="page-image" style="background-image:url('<?php the_field('page_image');?>')"></div>
</div>
<div class="common-page-container kitchen-service maintenance-service">
    <div class="content-heading">
        <h1><?php the_field('main_heading');?></h1>
    </div>
    <div class="kitchen-service-blocks">
        <div class="block-one block">
            <div><img src="<?php echo get_template_directory_uri() . '/assets/images/handyman.svg'; ?>" alt=""></div>
            <p class="text">Handyman Service</p>
            <p class="read-more">Read More</p>
        </div>
        <div class="block-two block">
            <div><img src="<?php echo get_template_directory_uri() . '/assets/images/electrical_2.svg'; ?>" alt="">
            </div>
            <p class="text">Electrical Service</p>
            <p class="read-more">Read More</p>
        </div>
        <div class="block-three block">
            <div><img src="<?php echo get_template_directory_uri() . '/assets/images/plumbing_2.svg'; ?>" alt=""></div>
            <p class="text">Plumbing service</p>
            <p class="read-more">Read More</p>
        </div>
        <div class="block-four block">
            <div><img src="<?php echo get_template_directory_uri() . '/assets/images/waste-management_2.svg'; ?>"
                    alt=""></div>
            <p class="text">Waste Management</p>
            <p class="read-more">Read More</p>
        </div>
        <div class="block-five block">
            <div><img src="<?php echo get_template_directory_uri() . '/assets/images/pest-control_2.svg'; ?>" alt="">
            </div>
            <p class="text">Pest Control</p>
            <p class="read-more">Read More</p>
        </div>
        <div class="block-six block">
            <div><img src="<?php echo get_template_directory_uri() . '/assets/images/cleaning_2.svg'; ?>" alt=""></div>
            <p class="text">Cleaning</p>
            <p class="read-more">Read More</p>
        </div>
    </div>
    <div class="content-text">
        <div class="text"><?php the_field('content');?></div>
    </div>
    <div class="content-bottom">
        <div class="text"><?php the_field('content_bottom');?></div>
    </div>
    <div class="content-contact">
        <div class="contact-call"><a href="tel:<?php the_field('contact_now', 'options');?>">Call
                <?php the_field('contact_now', 'options');?></a></div>
    </div>
</div>

<div class="common-page-vehicle-section kitchen-service-profile">

    <div class="vehicle-section-content kitchen-service-profile-content">
        <div class="content-heading">
            <h1><?php the_field('profile_heading');?></h1>
        </div>
        <div class="content-text">
            <div class="text"><?php the_field('profile_text');?></div>
        </div>
        <div class="content-bottom">
            <div class="text"><?php the_field('profile_bottom_text');?></div>
        </div>
    </div>
    <div class="common-page-vehicle-image">
        <img src="<?php the_field('profile_image');?>" alt="">

    </div>
</div>
