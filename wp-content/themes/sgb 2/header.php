<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta id="Viewport" name="viewport"
            content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo get_the_title(get_the_ID()); ?></title>
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/reset.css'; ?>"> -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/common-page.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/slider.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/model.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/responsive.css'; ?>">
        <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.ico'; ?>">
		<?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>

        <header>
            <div class="nav">
                <div class="left-section">
                    <div class="company-logo">
                        <a href="<?php echo get_site_url(); ?>"><img
                                src="<?php echo get_template_directory_uri() . '/assets/images/sgb-logo.png'; ?>"
                                alt=""></a>
                    </div>
                    <div class="company-main-heading">
                        <p>Commercial</p>
                        <p>Maintenance Experts</p>
                    </div>
                </div>
                <div class="right-section">
                    <div class="nav-services">
                        <p>Services</p>
                        <div class="triangle triangle-4" style="display:none"></div>
                        <div class="services-options-popup" style="display:none">
                            <div class="popup-container">
                                <div class="grid-container">
                                    <div class="item5">
                                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => '',
    'menu_class' => 'menu-kitchen-service',
    'menu' => 'Menu Kitchen Service',
);
wp_nav_menu($defaults);
?>
                                    </div>
                                    <div class="item6">
                                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => '',
    'menu_class' => 'menu-maintenance-service',
    'menu' => 'Menu Maintenance Service',
);
wp_nav_menu($defaults);
?>
                                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => 'menu-full',
    'menu_class' => 'fms main',
    'menu' => 'FMS',
);
wp_nav_menu($defaults);
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-about">
                        <a href="<?php echo site_url() . '/about-us'; ?>
">About Us</a>
                    </div>
                    <div class="nav-contact-image">
                        <a href="tel:<?php the_field('contact_now', 'options');?>"><img
                                src="<?php echo get_template_directory_uri() . '/assets/images/phone-call.png'; ?>"
                                alt=""></a>
                    </div>
                    <div class="nav-contact-phone">
                        <a
                            href="tel:<?php the_field('contact_now', 'options');?>"><?php the_field('contact_now', 'options');?></a>
                    </div>
                    <div class="nav-book-job trigger2">
                        <button class="trigger2 fms-change">Book a Job</button>
                    </div>
                    <div class="nav-hamburger-menu trigger">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/menu-icon.png'; ?>" alt="">
                    </div>
                </div>


            </div>

        </header>
        <div class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <div class="model-hidden">
                    <div class="nav-contact-image">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/phone-call.png'; ?>" alt="">
                    </div>
                    <div class="nav-contact-phone">
                        <a
                            href="tel:<?php the_field('contact_now', 'options');?>"><?php the_field('contact_now', 'options');?></a>
                    </div>
                    <div class="nav-book-job trigger2">
                        <button class="trigger3">Book a Job</button>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="item1">
                        <?php
$defaults = array(
    'container' => 'menu-full',
    'menu_class' => 'menu-kitchen-service main',
    'menu' => 'Menu Kitchen Service',
    'theme_location' => 'top',

);
wp_nav_menu($defaults);
?>
                    </div>
                    <div class="item2">
                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => 'menu-full',
    'menu_class' => 'menu-maintenance-service main',
    'menu' => 'Menu Maintenance Service',
);
wp_nav_menu($defaults);
?>
                    </div>
                    <div class="item3">
                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => 'menu-full',
    'menu_class' => 'menu-about-us main',
    'menu' => 'Menu About Us',
);
wp_nav_menu($defaults);
?>
                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => 'menu-full',
    'menu_class' => 'menu-contact-us main',
    'menu' => 'Contact Us',
);
wp_nav_menu($defaults);
?>
                    </div>
                    <div class="item4">

                    </div>
                    <div class="item-fms">
                        <?php
$defaults = array(
    'theme_location' => 'top',
    'container' => 'menu-full',
    'menu_class' => 'fms main',
    'menu' => 'FMS',
);
wp_nav_menu($defaults);
?>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal2">
            <div class="modal-content">
                <span class="close-button2">&times;</span>
                <div class="book-modal">
                    <div class="left-modal">
                        <<?php echo get_field('title_tag', 'option');
?> class="booka-job">
                            <?php echo get_field('title', 'option'); ?>
                        </<?php echo get_field('title_tag', 'option');
?>>
                        <?php echo get_field('content', 'option');
?>
                    </div>
                    <div class="right-modal">
                        <?php echo do_shortcode('[contact-form-7 id="238" title="Enquire Online"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!get_field('page_image') && !is_front_page()):
    $site = "nobanner";
endif;?>

        <div class="site <?php echo $site; ?>">
            <!-- Banner Image -->
            <?php if (get_field('page_image')): ?>
            <div class="common-page-image">
                <?php if (get_field('banner_text')):
    $position = get_field('banner_position');?>
                <div class="<?php echo $position; ?>">
                    <?php the_field('banner_text');?>
                </div>
                <?php endif;?>
                <div class="page-image" style="background-image:url('<?php the_field('page_image');?>')"></div>
            </div>
            <?php endif;?>
            <?php

// Breadcrumb Printing

if (!is_front_page()):
    echo "<div class='breadcrumb'>";
    echo do_shortcode('[wpseo_breadcrumb]');
    echo "</div>";
endif;?>
			
			<?php if(!is_page_template('page-fms.php')){?>
			<style>.facility-management-icons{
				display:none;
				}</style>
<?php }?>
<?php if(is_page_template('page-fms.php')){?>
			<style>.service-highlights.footer-icon{
				display:none;
				}</style>
<?php }?>


