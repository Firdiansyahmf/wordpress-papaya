<?php
/**
 * @package Profolio
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/features/corpex-pricing.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/features/corpex-project.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/features/corpex-faq.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/features/corpex-funfact.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/features/corpex-typography.php';

if ( ! function_exists( 'cleverfox_corpex_frontpage_sections' ) ) :
	function cleverfox_corpex_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/corpex/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/sections/section-project.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/sections/section-pricing.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/sections/section-funfact.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/profolio/sections/section-faq.php';
    }
	add_action( 'corpex_sections', 'cleverfox_corpex_frontpage_sections' );
endif;

function profolio_customize_remove( $wp_customize ) {
	$wp_customize->remove_control('hdr_nav_toggle');
	$wp_customize->remove_control('hs_nav_toggle');
}
add_action( 'customize_register', 'profolio_customize_remove' );