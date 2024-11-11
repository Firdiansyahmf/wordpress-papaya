<?php 
	$service_hs 			= get_theme_mod('service_hs','1'); 
	$service_title 			= get_theme_mod('service_title',__('Our <span>Service</span>','clever-fox'));
	$service_description	= get_theme_mod('service_description',__('There are many variations of passages of Lorem Ipsum available.','clever-fox'));
	$service_contents		= get_theme_mod('service_contents',corpex_get_service_default());
	$service_sec_column		= get_theme_mod('service_sec_column','3');  	
	
	if($service_hs=='1'){
?>	
	<!-- service -->
    <section class="service-home service-section">
        <div class="container">
			<?php if(!empty($service_title)  || !empty($service_description)): ?>
				<div class="section-title">
					<?php if(!empty($service_title)): ?>
						<h2>
							<?php echo wp_kses_post($service_title); ?>
						</h2>
					<?php endif; ?>
					
					<?php if(!empty($service_description)): ?>
						<p>
							<?php echo wp_kses_post($service_description); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
            <div class="row ">
				<?php
					if ( ! empty( $service_contents ) ) {
					$service_contents = json_decode( $service_contents );
					foreach ( $service_contents as $service_item ) { 
						$image2 = ! empty( $service_item->image_url2 ) ? apply_filters( 'corpex_translate_single_string', $service_item->image_url2, 'Service section' ) : '';
						$image = ! empty( $service_item->image_url ) ? apply_filters( 'corpex_translate_single_string', $service_item->image_url, 'Service section' ) : '';
						$corpex_service_icon = ! empty( $service_item->icon_value) ? apply_filters( 'corpex_translate_single_string', $service_item->icon_value,'Service section' ) : '';
						$corpex_service_title = ! empty( $service_item->title ) ? apply_filters( 'corpex_translate_single_string', $service_item->title, 'Service section' ) : '';
						$corpex_service_text = ! empty( $service_item->text ) ? apply_filters( 'corpex_translate_single_string', $service_item->text, 'Service section' ) : '';
						$corpex_service_link = ! empty( $service_item->link ) ? apply_filters( 'corpex_translate_single_string', $service_item->link, 'Service section' ) : '';
						$choice = ! empty( $service_item->choice ) ? apply_filters( 'corpex_translate_single_string', $service_item->choice, 'Service section' ) : '';
				?>
					<div class="col-lg-<?php echo esc_attr($service_sec_column); ?> col-md-6 col-sm-6">
						<div class="card">
							<div class="card-front">
								<img src="<?php echo esc_url($image2); ?>" class="card-img-top" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
								<div class="card-body">
									<?php if ( ! empty( $corpex_service_title ) ) : ?>
										<h5 class="card-title">											
											<?php echo esc_html( $corpex_service_title ); ?>
										</h5>
									<?php endif; ?>
									
									<?php if ( ! empty( $corpex_service_icon ) ) : ?>
										<a href="<?php echo esc_url( $corpex_service_link ); ?>" class="main-btn"><i class="fa fa-angle-double-right"></i></a>
									<?php endif; ?>
								</div>
							</div>
							<div class="card-back">
								<div class="card-body">
									<?php if($choice =='customizer_repeater_image'): ?>
										<div class="icon-item">
											<img src="<?php echo esc_url($image); ?>" />
										</div>
									<?php else: ?>
										<div class="icon-item">
											<i class="fa <?php echo esc_attr($corpex_service_icon); ?>"></i>
										</div>
									<?php endif; ?>
									
									<?php if ( ! empty( $corpex_service_text ) ) : ?>
										<p class="card-text">
											<?php echo esc_html( $corpex_service_text ); ?>
										</p>
									<?php endif; ?>	
									<a href="<?php echo esc_url( $corpex_service_link ); ?>" class="main-btn"><i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
                <?php } }?>
            </div>
        </div>
    </section>
    <!-- service end  -->
<?php } ?>