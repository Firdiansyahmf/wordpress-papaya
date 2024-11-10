<?php
/**
 * @package   Fiona
 */
 
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/sections/above-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/features/fiona-blog-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/features/fiona-blog-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/features/fiona-blog-weekend-top.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/features/fiona-blog-typography.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/timeblog/features/timeblog-section-lifestyle.php';

if ( ! function_exists( 'cleverfox_fiona_blog_frontpage_sections' ) ) :
	function cleverfox_fiona_blog_frontpage_sections() {		
		require CLEVERFOX_PLUGIN_DIR . 'inc/fiona-blog/sections/section-weekend-top.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/timeblog/sections/section-lifestyle.php';
    }
	add_action( 'fiona_blog_sections', 'cleverfox_fiona_blog_frontpage_sections' );
endif;

function cleverfox_fiona_blog_enqueue_scripts() {
	wp_enqueue_style('animate',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/animate.css','','3.5.2');
	
}
add_action( 'wp_enqueue_scripts', 'cleverfox_fiona_blog_enqueue_scripts' );

function timeblog_customize_remove( $wp_customize ) {
	$wp_customize->remove_section('slider_setting');
}
add_action( 'customize_register', 'timeblog_customize_remove' );