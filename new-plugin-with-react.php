<?php
/*
Plugin Name: Plugin with react.js
Author: Nahid
Author URI: https://w3school.com
Version: 1.0.0
Description: Plugin with react js

*/

if (!defined('ABSPATH')) : exit();
endif;

// Define plugin contents
define('WPWR_PATH', trailingslashit(plugin_dir_path(__FILE__)));
define('WPWR_URL', trailingslashit(plugins_url('/', __FILE__)));

function new_dashboard_setup()
{
    wp_add_dashboard_widget('new-dashboard-widget', 'New Graph Widget', 'new_dashboard_widget_callback');
};

add_action('wp_dashboard_setup', 'new_dashboard_setup');

function new_dashboard_widget_callback()
{
    echo '<div id="new-dashboard-widget"></div>';
}
