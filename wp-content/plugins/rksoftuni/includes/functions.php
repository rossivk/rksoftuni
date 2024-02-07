<?php

/**
 * Essential theme supports
 * */
function rksortuni_features()
{
    add_theme_support('post-thumbnails');
    add_image_size('iconBig', 64, 64, true);
    add_image_size('pageBanner', 1500, 300, true);
}
add_action('after_setup_theme', 'rksortuni_features');


// Load the theme stylesheets

/**
 * Never worry about cache again!
 */
function rvksoftuni_assets($hook)
{
    // create my own version codes
    // $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
    // $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));
    // 

    // $args = array(
    //     'in_footer' => true,
    //     'strategy' => 'defer',
    // );
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/script.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/wow/wow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('touchSwipe-min', get_template_directory_uri() . '/assets/mobile/touchSwipe.min.js', array(), '1.0.0', true);


    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/animate/animate.css', false,   '1.0.0');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', false,   '1.0.0');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/style.css', false,   '1.0.0');
}
add_action('wp_enqueue_scripts', 'rvksoftuni_assets');


//Register menus

function rksoftuni_register_nav_menus()
{
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'rksoftuni'),
            'footer_menu' => __('Footer Menu', 'rksoftuni'),
            'sidebar_menu' => __('Sidebar Menu', 'rksoftuni'),
        )
    );
}
add_action('after_setup_theme', 'rksoftuni_register_nav_menus');


// Register a sidebar.
function rvsoftuni_sidebars()
{
    register_sidebar(array(
        'name'          => __('Footer Left'),
        'id'            => 'footer-left',
        'description'   => __('Left side widget in footer ', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Right'),
        'id'            => 'footer-right',
        'description'   => __('Right side widget in footer ', 'textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'rvsoftuni_sidebars');


/**
 * Custom Shortcodes
 * 
 * [custom_greeting] returns a greeting with an attribute name.
 * @return string Current Year
 */

function custom_greeting_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'name' => '',
        'day' => '',
        'month' => '',
        'year' => '',
    ), $atts);
    return "Hello, {$atts['name']}! Welcome to my test project. It is {$atts['day']} / {$atts['month']} / {$atts['year']}, and time is not enought to make the project as prety as I would like.";
}

add_shortcode('custom_greeting', 'custom_greeting_shortcode');


/*
* AJAX function to show latest post excerpt.
*/
function click_me_to_read()
{
    $my_data = $_POST['ajax_data'];

    $my_data['toclick'] = 'Hello, please have a look at the message below';
    $my_data['clicked'] = wp_get_recent_posts();

    wp_send_json($my_data);
}

add_action('wp_ajax_my_ajax_action', "click_me_to_read");        //when webste user is signed in
add_action('wp_ajax_nopriv_my_ajax_action', "click_me_to_read"); //when webste user is not signed in