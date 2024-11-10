<?php 
	$service_hs 						= get_theme_mod('service_hs','1');
	$accron_service_title 				= get_theme_mod('service_title',__('<span class="primary-color">What</span> We Do','clever-fox'));
	$accron_service_subtitle			= get_theme_mod('service_subtitle',__('Outstanding Service','clever-fox'));
	$accron_service_description			= get_theme_mod('service_description',__('There are many variations of passages of Lorem Ipsum available.','clever-fox'));
	$accron_service_description2		= get_theme_mod('service_description2',__('Digital Agency Services Built Specifically For Your Business.','clever-fox'));
	$accron_service_btn_lbl				= get_theme_mod('service_btn_lbl',__('Find Your Solution','clever-fox'));
	$accron_service_btn_link			= get_theme_mod('service_btn_link','#');
	$accron_service_contents			= get_theme_mod('service_contents',accron_get_service_default());
	$accron_service_sec_column			= get_theme_mod('service_sec_column','3');  
	if($service_hs=='1'){
?>	
	<!-- Start: Service Section
            =======================-->
    <!-- Service start -->
<section class="service-section service-home">
    <div class="container">
		<?php if(!empty($accron_service_title)  || !empty($accron_service_subtitle)  || !empty($accron_service_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($accron_service_title)): ?>
					<h2 class="section-title-heading">
						<?php echo wp_kses_post($accron_service_title); ?>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($accron_service_subtitle)): ?>
					<span class="sub-title">
						<?php echo esc_html($accron_service_subtitle); ?>
					</span>
				<?php endif; ?>
				
				<?php if(!empty($accron_service_description)): ?>
					<p>
						<?php echo wp_kses_post($accron_service_description); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
			
		<div class="row">
			<?php
				if ( ! empty( $accron_service_contents ) ) {
				$accron_service_contents = json_decode( $accron_service_contents );
				$count = 1;
				foreach ( $accron_service_contents as $service_item ) { 
					$image2 = ! empty( $service_item->image_url2 ) ? apply_filters( 'translate_single_string', $service_item->image_url2, 'Service section' ) : '';
					$accron_service_icon = ! empty( $service_item->icon_value) ? apply_filters( 'translate_single_string', $service_item->icon_value,'Service section' ) : '';
					$accron_service_title = ! empty( $service_item->title ) ? apply_filters( 'translate_single_string', $service_item->title, 'Service section' ) : '';
					$accron_service_subtitle = ! empty( $service_item->text ) ? apply_filters( 'translate_single_string', $service_item->text, 'Service section' ) : '';
					$accron_service_link = ! empty( $service_item->link ) ? apply_filters( 'translate_single_string', $service_item->link, 'Service section' ) : '';
			?>						
				<div class="col-lg-<?php echo esc_attr($accron_service_sec_column); ?> col-md-6 col-sm-6">
					<div class="service">
						<div class="service-image" data-tilt>
							<img src="<?php echo esc_url($image2); ?>" width="306" height="356" alt="">
							<div class="service-content">
								<div class="service-icon">
									<i class="fas <?php echo esc_attr($accron_service_icon); ?>"></i>
								</div>
								<div class="service-heading">
									<?php if ( ! empty( $accron_service_title ) ) : ?>
										<h2>
											<a href="<?php echo esc_url( $accron_service_link ); ?>">
												<?php echo esc_html( $accron_service_title ); ?>
											</a>
										</h2>
									<?php endif; ?>
									<?php if ( ! empty( $accron_service_subtitle ) ) : ?>
										<span>
											<?php echo esc_html( $accron_service_subtitle ); ?>
										</span>
									<?php endif; ?>	
								</div>
								<a href="<?php echo esc_url( $accron_service_link ); ?>" area-label="arrow right for click to more detail"><i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php ++$count; } }?>
		</div>
		<?php if(!empty($accron_service_description2) || !empty($accron_service_btn_lbl) || !empty($accron_service_btn_link)): ?>			
			<div class="row">
				<div class="col-lg-8 mx-auto"><p class="find-solution"><?php echo wp_kses_post($accron_service_description2); ?> <a href="<?php echo esc_url($accron_service_btn_link); ?>"><?php echo esc_html($accron_service_btn_lbl); ?></a></p></div>
			</div>
		<?php endif; ?>
	</div>
</section>
    <!-- End: Service Section
            =======================-->
<?php } ?>