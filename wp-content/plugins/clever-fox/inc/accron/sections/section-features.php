<?php 
	$feature_hs							= get_theme_mod('feature_hs','1');
	$accron_features_title 				= get_theme_mod('features_title',__('<span class=\'primary-color\'>What</span> We Do','clever-fox'));
	$accron_features_subtitle			= get_theme_mod('features_subtitle',__('Outstanding Features','clever-fox')); 
	$accron_features_desc				= get_theme_mod('features_desc',__('There are many variations of passages of Lorem Ipsum available.','clever-fox')); 
	$accron_features_contents			= get_theme_mod('features_contents',accron_get_features_default());
	$accron_features_sec_column			= get_theme_mod('features_sec_column','3'); 	
	if($feature_hs=='1'){
?>	
	<!-- features -->
<section class="feature-section features-home">
    <div class="container">
		<?php if(!empty($accron_features_title)  || !empty($accron_features_subtitle) || !empty($accron_features_desc)): ?>
			<div class="section-title col-lg-6 mx-auto">
					
				<?php if(!empty($accron_features_title)): ?>
					<h2 class="section-title-heading">
						<?php echo wp_kses_post($accron_features_title); ?>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($accron_features_subtitle)): ?>
					<span class="sub-title">
						<?php echo wp_kses_post($accron_features_subtitle); ?>
					</span>
				<?php endif; ?>
				
				<?php if(!empty($accron_features_desc)): ?>
					<p>
						<?php echo wp_kses_post($accron_features_desc); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
        <div class="row">
			<?php
				if ( ! empty( $accron_features_contents ) ) {
				$accron_features_contents = json_decode( $accron_features_contents );
				foreach ( $accron_features_contents as $features_item ) {
					$title = ! empty( $features_item->title ) ? apply_filters( 'accron_translate_single_string', $features_item->title, 'Features section' ) : '';
					$link = ! empty( $features_item->link ) ? apply_filters( 'accron_translate_single_string', $features_item->link, 'Features section' ) : '';
					$image = ! empty( $features_item->image_url ) ? apply_filters( 'accron_translate_single_string', $features_item->image_url, 'Features section' ) : '';
					$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'accron_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
					$choice = ! empty( $features_item->choice ) ? apply_filters( 'accron_translate_single_string', $features_item->choice, 'Features section' ) : '';
			?>	
				<div class="col-lg-<?php echo esc_attr($accron_features_sec_column); ?> col-md-6 col-sm-6">
					<div class="feature-item">
						<?php if(!empty($title)): ?>
							<div class="feature-content">
								<h3>
									<?php echo esc_html($title); ?>
								</h3>
							</div>
						<?php endif; ?>
						
						<?php if ( $choice =='customizer_repeater_image' ) { ?>
							<div class="feature-icon">
								<img src="<?php echo esc_url($image); ?>" />
							</div>
						<?php } elseif ( ! empty( $icon ) ) { ?>
							<div class="feature-icon">
								<i class="fa <?php echo esc_attr($icon); ?>"></i>
							</div>
						<?php } ?>
					</div>
				</div>
            <?php } } ?>
        </div>
    </div>
</section>
<!-- features end -->
<?php } ?>