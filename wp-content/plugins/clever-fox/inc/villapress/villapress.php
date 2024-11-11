<?php
/**php
 * @package   VillaPress
 */
 
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/villapress/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/villapress/sections/above-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/features/aravalli-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/features/aravalli-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/features/aravalli-room.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/features/aravalli-amenities.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/features/aravalli-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/features/aravalli-typography.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/villapress/features/villapress-info.php';


if ( ! function_exists( 'cleverfox_aravalli_frontpage_sections' ) ) :
	function cleverfox_aravalli_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/villapress/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/sections/section-room.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/sections/section-amenities.php';
	    require CLEVERFOX_PLUGIN_DIR . 'inc/aravalli/sections/section-features.php';
	    
    }
	add_action( 'aravalli_sections', 'cleverfox_aravalli_frontpage_sections' );
endif;

set_theme_mod( 'nav_info_right_ttl',__('Our Location'));
set_theme_mod( 'nav_info_right_subttl',__('24 St, Angeles, US'));
set_theme_mod( 'nav_info_left_ttl',__('We Are Open'));
set_theme_mod( 'nav_info_left_subttl',__('Mon - Fri 8:00 - 16:00'));
set_theme_mod( 'nav_btn_lbl',__('Book Now'));