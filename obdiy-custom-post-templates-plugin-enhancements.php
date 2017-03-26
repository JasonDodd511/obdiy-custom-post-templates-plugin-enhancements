<?php

/*
Plugin Name: OBDIY Custom Post Templates Plugin Enhancements
Plugin URI: https://github.com/JasonDodd511/obdiy-custom-post-templates-plugin-enhancements
Description: Plugin to house Custom Post Templates Plugin enhancements.
Version: 1.0
Author: Jason Dodd
Author URI: https://cambent.com
License: GPL2
GitHub Plugin URI: https://github.com/JasonDodd511/obdiy-custom-post-templates-plugin-enhancements
GitHub Branch:     master
GitHub Languages:
*/

/**
 * Important note, In order to have a template selector meta box in the custom post types
 * I needed to add the Custom Post Templates plugin: https://wordpress.org/plugins/custom-post-template/
 *
 * Also, is used a function provided by the CPT Plugin, is_post_template() to modify the header and footer
 * template in the 5MPM child theme to remove header and footer when using the "Blank" page template.
 */


/**
 * Add the custom post types to the array of custom post types the
 * Custom Post Templates Plugin should work with.
 **/
function my_cpt_post_types( $post_types ) {
	$post_types[] = 'landing_page';
	$post_types[] = 'execution_plan';
	return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );