<div class="contain">

	 <div class="common-page-container privacy-policy contact-page">
    <div class="contact-heading">
        <<?php the_field('title_tag')?>><?php the_field('main_heading');?></<?php the_field('title_tag')?>>
    </div>
</div>
<div class="contact-container">
    <div class="business-information">
        <p class="bold">Business Information</p>
        <div class="contact-number">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/phone-call-contact.png'; ?>" alt="">
            <a
                href="tel:<?php the_field('contact_now', 'options');?>"><b><?php the_field('contact_now', 'options');?></b></a>
        </div>
        <div class="contact-email text">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/email-contact.png'; ?>" alt="">
            <a href="mailto:<?php the_field('email', 'options');?>"><?php the_field('email', 'options');?></a>
        </div>
        <div class="contact-address text">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/location-contact.png'; ?>" alt="">
            <p><?php the_field('address', 'options');?></p>
        </div>
        <div class="directions"><a href="<?php echo get_field('get_direction','option')?>" target="_blank">Get Directions</a></div>
        <div class="office-hours">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/clock-contact.png'; ?>" alt="">
            <div class="right-side">
                <p><strong>Office</strong></p>
                <p>Monday - Friday: <?php the_field('office_mon_fri', 'options');?></p>
                <p>Saturday - Sunday: <?php the_field('office_sat_sun', 'options');?></p>
            </div>
        </div>
        <div class="service-hours">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/service-contact.png'; ?>" alt="">
            <div class="right-side">
                <p><strong>Service</strong></p>
                <p>Monday - Friday: <?php the_field('office_mon_fri', 'options');?></p>
                <p>Saturday - Sunday: <?php the_field('office_sat_sun', 'options');?></p>
            </div>
        </div>
        <div class="look-service-areas"><a href="<?php echo site_url() . '/about-us/service-areas'; ?>">Looking for our
                service areas?</a></div>
    </div>
    <div class="enquire-online">
        <p class="bold">Enquire Online</p>
        <div class="online-form">
            <?php echo do_shortcode('[contact-form-7 id="238" title="Enquire Online"]'); ?>
        </div>

    </div>
</div>
<div class="contact-google-map">
<?php echo get_field('map','option');?>
</div>
		
			
</div>
