<?php
if( ! function_exists( 'cleverfox_medazin_dynamic_styles' ) ):
    function cleverfox_medazin_dynamic_styles() {
		$output_css = '';
		
		$theme = wp_get_theme(); // gets the current theme
		
		/**
		 * Logo Width 
		 */
		 $logo_width			= get_theme_mod('logo_width','220');
		if($logo_width !== '') { 
				$output_css .=".main-navigation a img, .mobile-logo img {
					max-width: " .esc_attr($logo_width). "px;
				}\n";
			}
		
		
		
		/**
		 * CTA
		 */
		 $cta_bg_setting		= get_theme_mod('cta_bg_setting',esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/slider/img01.jpg')); 	
				$output_css .=".cta-section {
					background-image: url(".esc_url($cta_bg_setting).");
				}\n";
		
		
		
		/**
		 *  Typography Body
		 */
		 $medazin_body_text_transform	 	 = get_theme_mod('medazin_body_text_transform','inherit');
		 $medazin_body_font_style	 		 = get_theme_mod('medazin_body_font_style','inherit');
		 $medazin_body_font_size	 		 = get_theme_mod('medazin_body_font_size','15');
		 $medazin_body_line_height		 = get_theme_mod('medazin_body_line_height','1.5');
		
		 $output_css .=" body{ 
			font-size: " .esc_attr($medazin_body_font_size). "px;
			line-height: " .esc_attr($medazin_body_line_height). ";
			text-transform: " .esc_attr($medazin_body_text_transform). ";
			font-style: " .esc_attr($medazin_body_font_style). ";
		}\n";		 
		
		/**
		 *  Typography Heading
		 */
		 for ( $i = 1; $i <= 6; $i++ ) {	
			 $medazin_heading_text_transform 	= get_theme_mod('medazin_h' . $i . '_text_transform','inherit');
			 $medazin_heading_font_style	 	= get_theme_mod('medazin_h' . $i . '_font_style','inherit');
			 $medazin_heading_font_size	 		 = get_theme_mod('medazin_h' . $i . '_font_size');
			 $medazin_heading_line_height		 	 = get_theme_mod('medazin_h' . $i . '_line_height');
			 
			 $output_css .=" h" . $i . "{ 
				font-size: " .esc_attr($medazin_heading_font_size). "px;
				line-height: " .esc_attr($medazin_heading_line_height). ";
				text-transform: " .esc_attr($medazin_heading_text_transform). ";
				font-style: " .esc_attr($medazin_heading_font_style). ";
			}\n";
		 }
		 	
			
	 wp_add_inline_style( 'medazin-style', $output_css );
    }
endif;
add_action( 'wp_enqueue_scripts', 'cleverfox_medazin_dynamic_styles' );
?>