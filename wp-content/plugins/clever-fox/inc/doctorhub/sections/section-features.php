<?php  
	$features_title 			= get_theme_mod('features_title',"What's Our Speciality");
	$features_desc				= get_theme_mod('features_desc','Feature'); 
	$features_contents			= get_theme_mod('features_contents',medazin_get_features_default());
	$features_sec_column		= get_theme_mod('features_sec_column','5'); 	
?>	
	<!-- Start : ================= Feature Section = ====================== -->
    <section class="feature-section features-home">
        <div class="bg-elements">
            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/element3.png'); ?>" alt="<?php	echo esc_attr__('Image','clever-fox') ?>" class="element1">
            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/element8.png'); ?>" alt="<?php	echo esc_attr__('Image','clever-fox') ?>" class="element2">
        </div>
        <div class="container">
			<?php if(!empty($features_title)  || !empty($features_desc)): ?>
				<div class="section-title text-center wow slideInDown">
					<?php if(!empty($features_desc)): ?>
						<span class="subtitle">
							<?php echo wp_kses_post($features_desc); ?>
						</span>
						<span class="title-element"> <i class="fa fa-heartbeat"></i></span>
					<?php endif; ?>
					
					<?php if(!empty($features_title)): ?>
						<h5>
							<?php echo wp_kses_post($features_title); ?>
						</h5>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
            <div class="row row-cols-1 row-cols-lg-<?php echo esc_attr($features_sec_column); ?> row-cols-md-2 row-cols-2">
                <?php
					if ( ! empty( $features_contents ) ) {
					$features_contents = json_decode( $features_contents );
					foreach ( $features_contents as $features_item ) {
						$title = ! empty( $features_item->title ) ? apply_filters( 'medazin_translate_single_string', $features_item->title, 'Features section' ) : '';
						$link = ! empty( $features_item->link ) ? apply_filters( 'medazin_translate_single_string', $features_item->link, 'Features section' ) : '';
						$image = ! empty( $features_item->image_url ) ? apply_filters( 'medazin_translate_single_string', $features_item->image_url, 'Features section' ) : '';
						$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'medazin_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
						$choice = ! empty( $features_item->choice ) ? apply_filters( 'medazin_translate_single_string', $features_item->choice, 'Features section' ) : '';
				?>				
					<div class="col mt-4 wow flipInX">
						<div class="feature-wrap">
							<div class="icon-wrap">
								<?php if ( $choice =='customizer_repeater_image' ) { ?>
									<img src="<?php echo esc_url($image); ?>" />
								<?php } else {  ?>
										<i class="fa <?php echo esc_attr($icon); ?>"></i>
								<?php } ?>
							</div>
							
							<?php if(!empty($title)): ?>
								<div class="text-wrap">
									<a href="<?php echo esc_url($link); ?>" class="title"><?php echo esc_html($title); ?></a>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php } } ?>
            </div>
        </div>
    </section>
    <!-- End : ================= Feature Section = ====================== -->