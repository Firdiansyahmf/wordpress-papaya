<?php
/**
 * @package Medazin
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/dynamic-style.php';
// require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-footer.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-testimonial.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-typography.php';

if ( ! function_exists( 'cleverfox_medazin_frontpage_sections' ) ) :
	function cleverfox_medazin_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-cta.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-testimonial.php';
    }
	add_action( 'medazin_sections', 'cleverfox_medazin_frontpage_sections' );
endif;


function cleverfox_medazin_enqueue_scripts() {
	wp_enqueue_style('animate',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/animate.css','','3.5.2');
}
add_action( 'wp_enqueue_scripts', 'cleverfox_medazin_enqueue_scripts' );