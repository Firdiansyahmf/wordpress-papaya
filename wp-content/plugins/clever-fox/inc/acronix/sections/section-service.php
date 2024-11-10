<?php 
	$service_hs 						= get_theme_mod('service_hs','1');
	$acronix_service_title 				= get_theme_mod('service_title',__('<span class="primary-color">What</span> We Do','clever-fox'));
	$acronix_service_subtitle			= get_theme_mod('service_subtitle',__('Outstanding Service','clever-fox'));
	$acronix_service_description			= get_theme_mod('service_description',__('There are many variations of passages of Lorem Ipsum available.','clever-fox'));
	$acronix_service_description2		= get_theme_mod('service_description2',__('Digital Agency Services Built Specifically For Your Business.','clever-fox'));
	$acronix_service_btn_lbl				= get_theme_mod('service_btn_lbl',__('Find Your Solution','clever-fox'));
	$acronix_service_btn_link			= get_theme_mod('service_btn_link','#');
	$acronix_service_contents			= get_theme_mod('service_contents',accron_get_service_default());
	// $acronix_service_sec_column			= get_theme_mod('service_sec_column','3');  
	if($service_hs=='1'){
?>	
	
<!-- Service start -->
<section class="service-section service-home">
    <div class="container">
        <?php if(!empty($acronix_service_title)  || !empty($acronix_service_subtitle)  || !empty($acronix_service_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($acronix_service_title)): ?>
					<h2 class="section-title-heading">
						<?php echo wp_kses_post($acronix_service_title); ?>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($acronix_service_subtitle)): ?>
					<span class="sub-title">
						<?php echo esc_html($acronix_service_subtitle); ?>
					</span>
				<?php endif; ?>
				
				<?php if(!empty($acronix_service_description)): ?>
					<p>
						<?php echo wp_kses_post($acronix_service_description); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
        <div class="row">
			<?php
				if ( ! empty( $acronix_service_contents ) ) {
				$acronix_service_contents = json_decode( $acronix_service_contents );
				$count = 1;
				foreach ( $acronix_service_contents as $service_item ) { 
					$acronix_service_icon = ! empty( $service_item->icon_value) ? apply_filters( 'acronix_translate_single_string', $service_item->icon_value,'Service section' ) : '';
					$acronix_service_title = ! empty( $service_item->title ) ? apply_filters( 'acronix_translate_single_string', $service_item->title, 'Service section' ) : '';
					$acronix_service_text = ! empty( $service_item->text ) ? apply_filters( 'acronix_translate_single_string', $service_item->text, 'Service section' ) : '';
					$acronix_service_link = ! empty( $service_item->link ) ? apply_filters( 'acronix_translate_single_string', $service_item->link, 'Service section' ) : '';
			?>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="service-two" data-tilt>
						<div class="service-icon">
							<i class="fa <?php echo esc_attr($acronix_service_icon); ?>"></i>
						</div>
						<div class="service-content">
							<div class="service-heading">
								<?php if ( ! empty( $acronix_service_title ) ) : ?>
									<h2>
										<a href="<?php echo esc_url( $acronix_service_link ); ?>">
											<?php echo esc_html( $acronix_service_title ); ?>
										</a>
									</h2>
								<?php endif; ?>
								<?php if ( ! empty( $acronix_service_text ) ) : ?>
									<p>
										<?php echo esc_html( $acronix_service_text ); ?>
									</p>
								<?php endif; ?>	
								
								<span>0<?php echo esc_html($count); ?></span>
							</div>
							<a href="<?php echo esc_url($acronix_service_btn_link); ?>"><i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>
            <?php ++$count; } }?>
        </div>
        <?php if(!empty($acronix_service_description2) || !empty($acronix_service_btn_lbl) || !empty($acronix_service_btn_link)): ?>			
			<div class="row">
				<div class="col-lg-8 mx-auto"><p class="find-solution"><?php echo wp_kses_post($acronix_service_description2); ?> <a href="<?php echo esc_url($acronix_service_btn_link); ?>"><?php echo esc_html($acronix_service_btn_lbl); ?></a></p></div>
			</div>
		<?php endif; ?>
    </div>
</section>
<!-- End: Service Section
=======================-->
<?php } ?>