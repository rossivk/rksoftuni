<?php



// Load the theme stylesheets

if (!defined('DIGITAL_AGENCY')) {
    define('DIGITAL_AGENCY_VERSION', '0.2');
}

if (!defined('DIGITAL_AGENCY_ASSETS_URL')) {
    define('DIGITAL_AGENCY_ASSETS_URL', get_template_directory_uri() . '/assets/');
}

// Generate a few theme support elements
add_theme_support('title-tag');
add_theme_support('post-thumbnails');



/**
 * Function to enqueue (load) the assets
 *
 * @return void
 */

function digital_agency_enqueue_assets()
{
    // Define the URL of the theme assets directory

    // Theme Styles
    wp_enqueue_style('animate', DIGITAL_AGENCY_ASSETS_URL . 'animate/animate.css', array(), DIGITAL_AGENCY_VERSION);
    wp_enqueue_style('bootstrap-css', DIGITAL_AGENCY_ASSETS_URL . 'bootstrap/css/bootstrap.css', array(), DIGITAL_AGENCY_VERSION);
    wp_enqueue_style('main_css', DIGITAL_AGENCY_ASSETS_URL . 'style.css', array(), DIGITAL_AGENCY_VERSION);


    // Theme Scripts
    wp_enqueue_script('skript-plugin', plugins_url('rksoftuni/assets/js/script.js'), array('jquery'), DIGITAL_AGENCY_VERSION, array());
    wp_enqueue_script('main-scripts', DIGITAL_AGENCY_ASSETS_URL . 'script.js', array(), DIGITAL_AGENCY_VERSION, array());
    wp_enqueue_script('bootstrap-js', DIGITAL_AGENCY_ASSETS_URL . 'bootstrap/js/bootstrap.js', array('jquery'), DIGITAL_AGENCY_VERSION, array());
    wp_enqueue_script('wow-min', DIGITAL_AGENCY_ASSETS_URL . 'wow/wow.min.js', array('jquery'), DIGITAL_AGENCY_VERSION, array());
    wp_enqueue_script('touchSwipe-min', DIGITAL_AGENCY_ASSETS_URL . 'mobile/touchSwipe.min.js', array('jquery'), DIGITAL_AGENCY_VERSION, array());
    wp_enqueue_script('respond', DIGITAL_AGENCY_ASSETS_URL . 'respond/respond.js', array('jquery'), DIGITAL_AGENCY_VERSION, array());
}
add_action('wp_enqueue_scripts', 'digital_agency_enqueue_assets');




/*
* AJAX function to show latest post excerpt.
*/
