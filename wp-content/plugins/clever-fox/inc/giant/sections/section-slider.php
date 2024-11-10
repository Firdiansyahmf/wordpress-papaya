 <!--===// Start: Slider
    =================================--> 
<?php  
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slider 						= get_theme_mod('slider',giant_get_slider_default());
	if($slider_hs=='1'){
?>	
	<!-- slider -->
    <section class="slider-section slider-one">
		<div id="slidercarousel" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true" data-bs-pause="hover" data-bs-interval="5000">
		
            <div class="carousel-inner">
				<?php
					if ( ! empty( $slider ) ) {
						$slider = json_decode( $slider );
						$count = 1;
					foreach ( $slider as $slide_item ) {
						$title = ! empty( $slide_item->title ) ? apply_filters( 'giant_translate_single_string', $slide_item->title, 'slider section' ) : '';
						$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'giant_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
						$button = ! empty( $slide_item->text2) ? apply_filters( 'giant_translate_single_string', $slide_item->text2,'slider section' ) : '';
						$link = ! empty( $slide_item->link ) ? apply_filters( 'giant_translate_single_string', $slide_item->link, 'slider section' ) : '';
						$image = ! empty( $slide_item->image_url ) ? apply_filters( 'giant_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
						$active_class = ($count==1)?'active':'';
				?>
					<div class="carousel-item <?php echo esc_attr($active_class); ?>">
						<div class="slider-item">
							<?php if ( ! empty( $image ) ) : ?>
								<img src="<?php echo esc_url($image); ?>" class="d-block w-100" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
							<?php endif; ?>	
							<div class="slider-content">
								<div class="container">
									<div class="carousel-caption text-center mx-auto">
										<?php if ( ! empty( $subtitle ) ) : ?>
											 <span class="slide_subtitle">
												<?php if($subtitle): esc_html(printf(/* translators: %s: subtitle */__( '%s','clever-fox' ),$subtitle)); endif; ?>	
											</span> 
										<?php endif; ?>
										<?php if ( ! empty( $title ) ) : ?>
											<h2 class="slide_title">
												<?php if($title): esc_html(printf(/* translators: %s: title */__( '%s','clever-fox' ),$title)); endif; ?>
											</h2>
										<?php endif; ?>
										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url( $link ); ?>" class="main-btn"class="main-btn"> <?php if($button): esc_html(printf(/* translators: %s: button */__( '%s','clever-fox' ),$button)); endif; ?> <i class="fas fa-angle-double-right"></i></a>
										<?php endif; ?>	
									
									</div>
								</div>
							</div>
						</div>
					</div>
					
				<?php $count++; }  ?>  
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slidercarousel" data-bs-slide="prev">
                <i class="fas fa-arrow-left"></i>
                <span class="visually-hidden"><?php echo esc_html__('Previous','clever-fox'); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slidercarousel" data-bs-slide="next">
                <i class="fas fa-arrow-right"></i>
                <span class="visually-hidden"><?php echo esc_html__('Next','clever-fox'); ?></span>
            </button>
        </div>
    </section>
    <!-- slider end -->
	<?php }}?>