<?php  
	$testimonial_ttl		= get_theme_mod('testimonial_ttl',__('Our Testimonial','clever-fox'));
	$testimonial_subttl		= get_theme_mod('testimonial_subttl',__('Testimonial','clever-fox'));
	$testimonial_contents	= get_theme_mod('testimonial_contents',medazin_get_testimonial_default()); 
do_action('medazin_before_testimonial_section_trigger');							
?>	
	<!-- ================================- Testimonial Section ===================================== -->
    <section class="testimonial-section home-testimonial">
        <div class="container ">
            <?php if(!empty($testimonial_ttl)  || !empty($testimonial_subttl)): ?>
				<div class="section-title text-center wow slideInDown">
					<?php if(!empty($testimonial_subttl)): ?>
						<span class="subtitle">
							<?php echo wp_kses_post($testimonial_subttl); ?>
						</span>
						<span class="title-element"> <i class="fa fa-heartbeat"></i></span>
					<?php endif; ?>
					
					<?php if(!empty($testimonial_ttl)): ?>
						<h5>
							<?php echo wp_kses_post($testimonial_ttl); ?>
						</h5>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<?php 
				if ( ! empty( $testimonial_contents ) ) { 
				$testimonial_contents = json_decode( $testimonial_contents );
			?>
				<div class="testimonial-items owl-carousel ">
					<?php							
						foreach ( $testimonial_contents as $testimonial_item ) {
							
							$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'medazin_translate_single_string', $testimonial_item->image_url, 'Testimonial section' ) : '';
							$title = ! empty( $testimonial_item->title ) ? apply_filters( 'medazin_translate_single_string', $testimonial_item->title, 'Testimonial section' ) : '';
							$subtitle = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'medazin_translate_single_string', $testimonial_item->subtitle, 'Testimonial section' ) : '';
							$text = ! empty( $testimonial_item->text ) ? apply_filters( 'medazin_translate_single_string', $testimonial_item->text, 'Testimonial section' ) : '';
					?>
						<div class="testimonial-box wow slideInUp ">
							<?php if(!empty($image)): ?>
								<div class="testimonial-img">
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr__('Testimonial Image','clever-fox'); ?>">
								</div>
							<?php endif; ?>		
							
							<div class="info-wrap ">
								<?php if(!empty($title) || !empty($subtitle)): ?>
									<h4 class="testimonial-name ">
										<?php echo esc_html($title); ?>
									</h4>
									<span class="sub-title">
										<?php echo esc_html($subtitle); ?>
									</span>
								<?php endif; ?>	
								
								<?php if(!empty($text)): ?>
									<blockquote>
										<?php echo esc_html($text); ?>
									</blockquote>
								<?php endif; ?>
								
								<div class="star-list ">
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
									<i class="fa fa-star "></i>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
        </div>
    </section>
    <!-- =================================== End =====================- -->
<?php do_action('medazin_after_testimonial_section_trigger'); ?>