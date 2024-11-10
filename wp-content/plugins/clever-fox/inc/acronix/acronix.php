<?php
/**
 * @package Accron
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/accron/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/acronix/features/accron-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/accron/features/accron-typography.php';

if ( ! function_exists( 'cleverfox_accron_frontpage_sections' ) ) :
	function cleverfox_accron_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/acronix/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/acronix/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/acronix/sections/section-features.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/acronix/sections/section-cta.php';
    }
	add_action( 'accron_sections', 'cleverfox_accron_frontpage_sections' );
endif;

function acronix_customize_remove( $wp_customize ) {
	$wp_customize->remove_control('hdr_nav_toggle');
	$wp_customize->remove_control('hs_nav_toggle');
}
add_action( 'customize_register', 'acronix_customize_remove' );