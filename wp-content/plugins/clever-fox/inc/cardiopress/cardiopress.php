<?php
/**
 * @package Medazin
 */

require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/extras.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/dynamic-style.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/cardiopress/features/medazin-features.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/cardiopress/features/medazin-process.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-cta.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-header.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/features/medazin-typography.php';

if ( ! function_exists( 'cleverfox_medazin_frontpage_sections' ) ) :
	function cleverfox_medazin_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-info.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/cardiopress/sections/section-features.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/medazin/sections/section-cta.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/cardiopress/sections/section-process.php';
		
    }
	add_action( 'medazin_sections', 'cleverfox_medazin_frontpage_sections' );
endif;