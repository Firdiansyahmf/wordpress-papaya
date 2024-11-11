<?php
/**
 * @package   Evita
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/evita/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/evita/dynamic-style.php';
// require CLEVERFOX_PLUGIN_DIR . 'inc/evita/features/evita-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/evita/features/evita-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/evita/features/evita-about.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/evita/features/evita-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/evita/features/evita-service.php';
// require CLEVERFOX_PLUGIN_DIR . 'inc/evita/features/evita-typography.php';

if ( ! function_exists( 'cleverfox_evita_frontpage_sections' ) ) :
	function cleverfox_evita_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/evita/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/evita/sections/section-about.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/evita/sections/section-cta.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/evita/sections/section-service.php';
    }
	add_action( 'evita_sections', 'cleverfox_evita_frontpage_sections' );
endif;


function cleverfox_evita_enqueue_scripts() {
	wp_enqueue_style('animate',CLEVERFOX_PLUGIN_URL .'/inc/assets/css/animate.css','','3.5.2');
}
add_action( 'wp_enqueue_scripts', 'cleverfox_evita_enqueue_scripts' );