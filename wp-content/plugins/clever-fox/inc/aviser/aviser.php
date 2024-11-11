<?php
/**
 * @package   Avril
 */
 
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aviser/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aviser/sections/above-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aviser/features/avril-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avail/features/avril-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/features/avril-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/features/avril-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/features/avril-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/features/avril-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/axtria/features/avril-funfact.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/avril/features/avril-typography.php';

if ( ! function_exists( 'cleverfox_avril_frontpage_sections' ) ) :
	function cleverfox_avril_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/avril/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/avril/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/avril/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/aviser/sections/section-features.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/axtria/sections/section-funfact.php';
	    require CLEVERFOX_PLUGIN_DIR . 'inc/aviser/sections/section-cta-2.php';
    }
	add_action( 'avril_sections', 'cleverfox_avril_frontpage_sections' );
endif;

function cleverfox_avril_enqueue_scripts() {
	wp_enqueue_script( 'counterup', CLEVERFOX_PLUGIN_URL .'/inc/assets/js/jquery.counterup.min.js', array('jquery'), '4.0.0', true);
	wp_enqueue_style('animate',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/animate.css','','3.5.2');
	wp_enqueue_style('owl-carousel-min',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/owl.carousel.min.css','','2.2.1');
	wp_enqueue_script( 'owl-carousel', CLEVERFOX_PLUGIN_URL . 'inc/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', true);
}
add_action( 'wp_enqueue_scripts', 'cleverfox_avril_enqueue_scripts' );