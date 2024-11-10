<?php
/**
 * @package Accron
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/accron/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-typography.php';

if ( ! function_exists( 'cleverfox_accron_frontpage_sections' ) ) :
	function cleverfox_accron_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/accron/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/accron/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/accron/sections/section-features.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/accron/sections/section-cta.php';
    }
	add_action( 'accron_sections', 'cleverfox_accron_frontpage_sections' );
endif;

function accron_customize_remove( $wp_customize ) {
	$wp_customize->remove_control('accron_slide_text');
}
add_action( 'customize_register', 'accron_customize_remove' );