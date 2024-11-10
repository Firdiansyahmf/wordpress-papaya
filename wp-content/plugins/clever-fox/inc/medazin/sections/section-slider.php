 <!--===// Start: Slider
    =================================--> 
<?php  
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slide_image					= get_theme_mod('slide_image', esc_url(CLEVERFOX_PLUGIN_URL. 'inc/medazin/images/slider/slider-img1.jpg'));
	$slide_title					= get_theme_mod('slide_title',__('We Care About You','clever-fox'));
	$slide_subtitle					= get_theme_mod('slide_subtitle',__('Health Care','clever-fox'));
	$slide_text						= get_theme_mod('slide_text',__('It is a long established fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem ipsum','clever-fox'));
	$slide_button					= get_theme_mod('slide_button',__('Get Started','clever-fox'));
	$slide_link						= get_theme_mod('slide_link','#');
	if($slider_hs=='1'){
?>	
<!--===// Start: Slider
=====================-->
	<section id="main-slider" class="main-slider-1">
		<div class="row">
			<div class="col-md-12">
				<div class="home-slider slider-carousel">				
					<div class="item">
						<?php if ( ! empty( $slide_image ) ) : ?>
						<img src="<?php echo esc_url($slide_image); ?>" data-img-url="<?php echo esc_url($slide_image); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>" data-animation-in="zoomInImage">
						<?php endif; ?>	
						<div class="cover">
							<div class="container">
								<div class="slider-content">
									<?php if ( ! empty( $slide_title ) ) : ?>
										<h2>
											<span class="slider-sub-title"><?php echo esc_html($slide_title); ?></span>
											<?php if ( ! empty( $slide_subtitle ) ) : ?>
												<?php echo esc_html($slide_subtitle); ?>
											<?php endif; ?>
										</h2> 
									<?php endif; ?>
									
									<?php if ( ! empty( $slide_text ) ) : ?>		
										<p>
											<?php echo esc_html($slide_text); ?>
										</p>
									<?php endif; ?>
									
									<?php if ( ! empty( $slide_button ) ) : ?>
										<a href="<?php echo esc_url( $slide_link ); ?>"  target="_blank" class="main-button active"> <span><?php echo esc_html( $slide_button ); ?></span> <i class="fa fa-plus"></i> </a>
									<?php endif; ?>
									
								</div>
							</div>
						</div>
					</div>  
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<!-- End: Slider
=======================-->