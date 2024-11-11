<?php
/**
 * @package Cormex
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/cormex/features/corpex-team.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/cormex/features/corpex-testimonial.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-typography.php';

if ( ! function_exists( 'cleverfox_corpex_frontpage_sections' ) ) :
	function cleverfox_corpex_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/cormex/sections/section-team.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/cormex/sections/section-testimonial.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-cta.php';
    }
	add_action( 'corpex_sections', 'cleverfox_corpex_frontpage_sections' );
endif;

function cormex_customize_remove( $wp_customize ) {
	$wp_customize->remove_control('hdr_nav_toggle');
	$wp_customize->remove_control('hs_nav_toggle');
}
add_action( 'customize_register', 'cormex_customize_remove' );