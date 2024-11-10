<?php  
	$testimonial_ttl		= get_theme_mod('testimonial_ttl','Our <span>Testimonial</span>');
	$testimonial_description= get_theme_mod('testimonial_description','There are many variations of passages of Lorem Ipsum available.');
	$testimonial_bg_image			= get_theme_mod('testimonial_bg_image',esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/shapes/shape-4.png'));
	$testimonial_bg_position	= get_theme_mod('testimonial_bg_position','fixed');
	$testimonial_contents	= get_theme_mod('testimonial_contents',corpex_get_testimonial_default()); 						
?>	
<!-- testimonial -->
    <section class="testimonial-section home-testimonial" <?php if(!empty($testimonial_bg_image)){ ?> style="background:url('<?php echo esc_url($testimonial_bg_image); ?>'); background-repeat:no-repeat;background-size:cover;background-attachment:<?php echo esc_attr($testimonial_bg_position); ?>" <?php } ?>>
        <div class="container">
            <?php if(!empty($testimonial_ttl) || !empty($testimonial_description)): ?>
				<div class="section-title">
					<?php if(!empty($testimonial_ttl)): ?>
						<h2>
							<?php echo wp_kses_post($testimonial_ttl); ?>
						</h2>
					<?php endif; ?>
					
					<?php if(!empty($testimonial_description)): ?>
						<p>
							<?php echo esc_html($testimonial_description); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<?php 
				if ( ! empty( $testimonial_contents ) ) { 
				$testimonial_contents = json_decode( $testimonial_contents );
			?>
				<div id="testimonial" class="carousel slide testimonial" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#testimonial" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#testimonial" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#testimonial" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<?php $count=0;							
							foreach ( $testimonial_contents as $testimonial_item ) {
								
								$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'corpex_translate_single_string', $testimonial_item->image_url, 'Testimonial section' ) : '';
								$title = ! empty( $testimonial_item->title ) ? apply_filters( 'corpex_translate_single_string', $testimonial_item->title, 'Testimonial section' ) : '';
								$subtitle = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'corpex_translate_single_string', $testimonial_item->subtitle, 'Testimonial section' ) : '';
								$subtitle2 = ! empty( $testimonial_item->subtitle2 ) ? apply_filters( 'corpex_translate_single_string', $testimonial_item->subtitle2, 'Testimonial section' ) : '';
								$text = ! empty( $testimonial_item->text ) ? apply_filters( 'corpex_translate_single_string', $testimonial_item->text, 'Testimonial section' ) : '';
								$active = ($count == 0)?'active':'';
						?>
							<div class="carousel-item <?php echo esc_attr($active); ?>">
								<div class="row">
									<?php if(!empty($image)): ?>
										<div class="col-lg-6">
											<div class="testimonial-image">
												<span><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr__('Testimonial Image','clever-fox'); ?>"></span>
											</div>
										</div>
									<?php endif; ?>
									
									<div class="col-lg-6">
										<div class="testimonial-content">
											<?php if(!empty($subtitle2)){ ?>
												<div class="content-heading">
													<h2>
														<?php echo wp_kses_post($subtitle2); ?>
													</h2>
												</div>
											<?php } ?>
											
											<div class="testimonial-content-inner">
												<?php if(!empty($text)): ?>
													<p class="paragraph">
														<?php echo esc_html($text); ?>
													</p>
												<?php endif; ?>
												
												
												<div class="client-detail">
													<?php if(!empty($image)): ?>
														<div class="image">
															<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr__('Testimonial Image','clever-fox'); ?>">
														</div>
													<?php endif; ?>
													
													<div class="info">
														<?php if(!empty($title) || !empty($subtitle)): ?>
															<h6>
																<?php echo esc_html($title); ?>
															</h6>
															<span>
																<?php echo esc_html($subtitle); ?>
															</span>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php ++$count; } ?>
					</div>
				</div>
			<?php } ?>
        </div>
    </section>
    <!-- testimonial end -->