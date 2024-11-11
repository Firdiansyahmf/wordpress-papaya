 <!--===// Start: Slider
    =================================--> 
<?php  
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slider 						= get_theme_mod('slider',accron_get_slider_default());
	// $accron_slide_image				= get_theme_mod('accron_slide_image', esc_url(CLEVERFOX_PLUGIN_URL. 'inc/accron/images/slider/slider-img1.jpg'));
	// $accron_slide_title				= get_theme_mod('accron_slide_title',__('20 Years Of Successful Business Consulting','clever-fox'));
	// $accron_slide_subtitle			= get_theme_mod('accron_slide_subtitle',__('Your Business Innovative Strategies For Success','clever-fox'));
	// $accron_slide_button			= get_theme_mod('accron_slide_button',__('Our Service','clever-fox'));
	// $accron_slide_link				= get_theme_mod('accron_slide_link','#');
	if($slider_hs=='1'){
?>	
<!--===// Start: Slider
=====================-->
	<section class="slider-section slider-one imgarrow">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade">
            <div class="carousel-inner">
			<?php
				if ( ! empty( $slider ) ) {
				$slider = json_decode( $slider );
				foreach ( $slider as $slide_item ) {
					$title = ! empty( $slide_item->title ) ? apply_filters( 'accron_translate_single_string', $slide_item->title, 'slider section' ) : '';
					$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'accron_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
					$button = ! empty( $slide_item->text2) ? apply_filters( 'accron_translate_single_string', $slide_item->text2,'slider section' ) : '';
					$link = ! empty( $slide_item->link ) ? apply_filters( 'accron_translate_single_string', $slide_item->link, 'slider section' ) : '';
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'accron_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
				?>
					<div class="carousel-item active">
						<div class="slide-main-item">
							<?php if ( ! empty( $image ) ) : ?>
								<img src="<?php echo esc_url($image); ?>" class="d-block w-100" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
							<?php endif; ?>	
							<div class="slider-content">
								<div class="container">
									<div class="carousel-caption col-lg-8 mx-auto">
										<?php if ( ! empty( $title ) ) : ?>
											<span class="firstword1">
												<span class="firstword"><?php echo esc_html($title); ?></span>
												<span class="sub-effect"></span>
											</span>
										<?php endif; ?>
										<?php if ( ! empty( $subtitle ) ) : ?>
											<h1  class="lastword">
												<?php echo esc_html($subtitle); ?>	
											</h1> 
										<?php endif; ?>
										
										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url( $link ); ?>" target="_blank" rel="nofollow" class="main-btn bg"> <?php echo esc_html( $button ); ?> </a>
										<?php endif; ?>										
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
            </div>            
        </div>
    </section>
<?php } ?>
<!-- End: Slider
=======================-->