<?php
/*
Plugin Name: Elementor Widget Plugin
Description: This plugin adds a custom widget to Elementor.
Version: 1.0
Author: Your Name
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Check if Elementor is active
if (!class_exists('Elementor\Plugin')) {
    return;
}

// Include the widget class file
require_once(plugin_dir_path(__FILE__) . 'includes/widget-class.php');

// Register the widget
function register_elementor_widget() {
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Elementor_Widget_Plugin_Widget());
}
add_action('elementor/widgets/widgets_registered', 'register_elementor_widget');
