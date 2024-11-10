 <!--===// Start: Slider
    =================================--> 
<?php  
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slider 						= get_theme_mod('slider',accron_get_slider_default());
	if($slider_hs=='1'){
?>	
<!-- slider -->
<section class="slider-section slider-two">
    <div id="sliderTwo" class="carousel slide">        
        <div class="carousel-inner">		
			<?php 
				if ( ! empty( $slider ) ) {
				$slider = json_decode( $slider );
				foreach ( $slider as $slide_item ) {
					$title = ! empty( $slide_item->title ) ? apply_filters( 'acronix_translate_single_string', $slide_item->title, 'slider section' ) : '';
					$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'acronix_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
					$button = ! empty( $slide_item->text2) ? apply_filters( 'acronix_translate_single_string', $slide_item->text2,'slider section' ) : '';
					$link = ! empty( $slide_item->link ) ? apply_filters( 'acronix_translate_single_string', $slide_item->link, 'slider section' ) : '';
					$button2 = ! empty( $slide_item->button_second) ? apply_filters( 'acronix_translate_single_string', $slide_item->button_second,'slider section' ) : '';
					$link2 = ! empty( $slide_item->link2 ) ? apply_filters( 'acronix_translate_single_string', $slide_item->link2, 'slider section' ) : '';
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'acronix_translate_single_string', $slide_item->image_url, 'slider section' ) : '';					
					
			?>
				<div class="carousel-item active">
					<div class="container">
						<div class="slider2-item">
							<div class="row">
								<div class="col-sm-6">
									<div class="slider2-content">
										<div class="carousel-caption">
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
								<div class="col-sm-6">
									<div class="slider-image">
										<?php if ( ! empty( $image ) ) : ?>
											<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
										<?php endif; ?>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            <?php  } } ?>
        </div>       
    </div>
</section>
	<?php }?>
<!-- slider end -->