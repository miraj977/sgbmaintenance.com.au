<?php

add_theme_support('menus');

register_nav_menus((
    array('top' => 'Top Menu Location')
));

/**** HIDE ADMIN BAR **/
function hide_admin_bar_from_front_end()
{
    if (is_blog_admin()) {
        return true;
    }
    return false;
}
add_filter('show_admin_bar', 'hide_admin_bar_from_front_end');

/*ADD CLASS TO BODY **/
function my_plugin_body_class($classes)
{
    global $post;

    if ("page" == get_post_type()) {
        $classes[] = $post->post_type . '-' . $post->post_name.' page-id-'.$post->ID;
    }

    return $classes;
}
add_filter('body_class', 'my_plugin_body_class');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'id' => 'change_me',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'contact sidebar',
        'id' => 'contact-sidebar',
        'description' => 'Appears as the sidebar on the custom page',
        'before_widget' => '<div class="sidebar"></div><div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));
}
if (function_exists('register_sidebar')) {
    $sidebar2 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget1', 'pictura-creative'),
        'id' => 'footer-1',
    );
    $sidebar3 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget2', 'pictura-creative'),
        'id' => 'footer-2',
    );

    $sidebar4 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget3', 'pictura-creative'),
        'id' => 'footer-3',
    );
    $sidebar5 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget4', 'pictura-creative'),
        'id' => 'footer-4',
    );

    $sidebar6 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Left sidebar', 'pictura-creative'),
        'id' => 'left-sidebar',
    );

    $sidebar7 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Right sidebar', 'pictura-creative'),
        'id' => 'right-sidebar',
    );

    $sidebar8 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Blog sidebar', 'pictura-creative'),
        'id' => 'blog-sidebar',
    );

    register_sidebar($sidebar2);
    register_sidebar($sidebar3);
    register_sidebar($sidebar4);
    register_sidebar($sidebar5);
    register_sidebar($sidebar6);
    register_sidebar($sidebar7);
    register_sidebar($sidebar8);

}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title' => __('Theme General Settings'),
            'menu_title' => __('Theme Settings'),
            'redirect' => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title' => __('Social Settings'),
            'menu_title' => __('Social'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title' => __('Footer Settings'),
            'menu_title' => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
        ));

    }
}

// Featured Image Support

function mytheme_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_post_thumbnails');

function remove_query_strings()
{
    if (!is_admin()) {
        add_filter('script_loader_src', 'remove_query_strings_split', 15);
        add_filter('style_loader_src', 'remove_query_strings_split', 15);
    }
}

// REMOVE QUERY STRING FROM STATIC RESOURCES
function remove_query_strings_split($src)
{
    $output = preg_split("/(&ver|\?ver)/", $src);
    return $output[0];
}
add_action('init', 'remove_query_strings');

// REMOVE PAGE CONTENT EDITOR

add_action('init', function () {
    // remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}, 99);
