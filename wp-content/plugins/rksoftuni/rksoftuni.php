<?php
/*
 * Plugin Name:       RK SoftUni
 * Plugin URI:        
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      8
 * Author:            Rosica Kirkova
 * Author URI:        
 * License:           GPL v2 or later
 * License URI:      
 * Update URI:        
 * Text Domain:       mrvsoftuni
 * Domain Path:       /languages
 */

// include 'includes/cpt-services.php';
if (!defined('SERVICES_INCLUDE')) {
    define('SERVICES_INCLUDE', plugin_dir_path(__FILE__) . 'includes');
}

require SERVICES_INCLUDE . '/cpt-services.php';
require SERVICES_INCLUDE . '/functions.php';
