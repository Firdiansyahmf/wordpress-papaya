<?php
/**
 * @package Corpex
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-typography.php';

if ( ! function_exists( 'cleverfox_corpex_frontpage_sections' ) ) :
	function cleverfox_corpex_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-cta.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-features.php';		
    }
	add_action( 'corpex_sections', 'cleverfox_corpex_frontpage_sections' );
endif;

function corpex_customize_remove( $wp_customize ) {
	$wp_customize->remove_control('corpex_slide_text');
}
add_action( 'customize_register', 'corpex_customize_remove' );