 <!--===// Start: Slider
    =================================--> 

	<?php  
if ( ! function_exists( 'cleverfox_evita_lite_slider' ) ) :
	function cleverfox_evita_lite_slider() {
	$slider_bg_element_enable	= get_theme_mod('slider_bg_element_enable','1'); 	
	$slider 					= get_theme_mod('slider',evita_get_slider_default()); 	
?>	
	<!--===// start:slider
	=================================-->
	<section class="slider-section slider-one">
		<div class="bg-elements">
			<div class="element1"></div>			
			<div class="element4"></div>
			<div class="element5"></div>
		</div>
		<div class="slider-main owl-carousel">
			<?php
				if ( ! empty( $slider ) ) {
				$slider = json_decode( $slider );
				foreach ( $slider as $slide_item ) {
					$title = ! empty( $slide_item->title ) ? apply_filters( 'evita_translate_single_string', $slide_item->title, 'slider section' ) : '';
					$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'evita_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
					$text = ! empty( $slide_item->text ) ? apply_filters( 'evita_translate_single_string', $slide_item->text, 'slider section' ) : '';
					$button = ! empty( $slide_item->text2) ? apply_filters( 'evita_translate_single_string', $slide_item->text2,'slider section' ) : '';
					$link = ! empty( $slide_item->link ) ? apply_filters( 'evita_translate_single_string', $slide_item->link, 'slider section' ) : '';
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'evita_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
					$img_id  = attachment_url_to_postid( $image );
					$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);					
			?>
				<div class="slide-item">
					<div class="nt-container">
						<div class="nt-columns-area">
							<div class="nt-column-6 nt-sm-column-6">
								<div class="theme-content">
									<?php if ( ! empty( $subtitle ) ) : ?>
										<h3>
											<?php echo wp_kses_post($subtitle); ?>
										</h3> 
									<?php endif; ?>
									
									<?php if ( ! empty( $title ) ) : ?>
										<h1>
											<?php echo esc_html($title); ?>
										</h1>
									<?php endif; ?>
									
									<?php if ( ! empty( $text ) ) : ?>		
										<p>
											<?php echo esc_html($text); ?>
										</p>
									<?php endif; ?>
									
									<?php if ( ! empty( $button ) ) : ?>
										<a href="<?php echo esc_url( $link ); ?>" target='_blank' class="nt-btn main-btn"> <span><?php echo esc_html( $button ); ?></span> <i class="fa fa-user"></i> </a>
									<?php endif; ?>
									
								</div>
							</div>
							<div class="nt-column-6 nt-sm-column-6">
								<?php if ( ! empty( $image ) ) : ?>
									<div class="slider-image">
										<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt_text); ?>">
									</div>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			<?php } } ?>
		</div>
	</section>
	<!--===// end: slider
	=================================-->
	<?php	
	}
endif;
if ( function_exists( 'cleverfox_evita_lite_slider' ) ) {
$section_priority = apply_filters( 'evita_section_priority', 11, 'cleverfox_evita_lite_slider' );
add_action( 'evita_sections', 'cleverfox_evita_lite_slider', absint( $section_priority ) );
}