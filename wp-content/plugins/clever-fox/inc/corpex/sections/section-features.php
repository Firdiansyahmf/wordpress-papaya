<?php 
	$feature_hs					= get_theme_mod('feature_hs','1');
	$features_title 			= get_theme_mod('features_title',__('Our <span>Feature</span>','clever-fox'));
	$features_desc				= get_theme_mod('features_desc',__('There are many variations of passages of Lorem Ipsum available.','clever-fox')); 
	$features_contents			= get_theme_mod('features_contents',corpex_get_features_default());
	$features_image				= get_theme_mod('features_image',esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/feature.png'));
	if($feature_hs=='1'){
?>	
	<!-- our feature  -->
<section class="feature-section features-home">
	<div class="container">
		<?php if(!empty($features_title) || !empty($features_desc)): ?>
			<div class="section-title">
				<?php if(!empty($features_title)): ?>
					<h2>
						<?php echo wp_kses_post($features_title); ?>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($features_desc)): ?>
					<p>
						<?php echo esc_html($features_desc); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<ul class="feature-list left">
					<?php 
					if ( ! empty( $features_contents ) ) {
						$features_contents = json_decode( $features_contents );
						foreach ( $features_contents as $index => $feature_item ) {
							$id1 = $index % 2;
							if($id1 == 0){
							$title = ! empty( $feature_item->title ) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->title, 'feature section' ) : '';
							$text = ! empty( $feature_item->text ) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->text, 'feature section' ) : '';
							$link = ! empty( $feature_item->link ) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->link, 'feature section' ) : '';
							$icon = ! empty( $feature_item->icon_value) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->icon_value,'feature section' ) : '';
					?>
						<li>
							<?php if ( ! empty( $icon ) ) {?>
								<i class="fa fab fas <?php echo esc_attr( $icon ); ?>"></i>
							<?php } ?>
							
							<?php if ( ! empty( $title ) ) : ?>
								<h5>
									<?php echo esc_html( $title ); ?>
								</h5>
							<?php endif; ?>
							
							<a href="<?php echo esc_url($link); ?>" class="main-btn"><i class="fas fa-angle-double-right"></i></a>
						</li>
					<?php } } } ?>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 d-none d-lg-block">
				<?php if(!empty($features_image)){ ?>
					<div class="feature-image">
						<img src="<?php echo esc_url($features_image); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
					</div>
				<?php } ?>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<ul class="feature-list right">
					<?php
						if ( ! empty( $features_contents ) ) {					
							foreach ( $features_contents as $index => $feature_item ) {
							$id1 = $index % 2;
							if($id1 == 1){
							$title = ! empty( $feature_item->title ) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->title, 'feature section' ) : '';
							$text = ! empty( $feature_item->text ) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->text, 'feature section' ) : '';
							$link = ! empty( $feature_item->link ) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->link, 'feature section' ) : '';
							$icon = ! empty( $feature_item->icon_value) ? apply_filters( 'corpex_pro_translate_single_string', $feature_item->icon_value,'feature section' ) : '';
					?>
						<li>
							<?php if ( ! empty( $icon ) ) { ?>
								<i class="fa fab fas <?php echo esc_attr( $icon ); ?>"></i>
							<?php } ?>
							
							<?php if ( ! empty( $title ) ) : ?>
								<h5>
									<?php echo esc_html( $title ); ?>
								</h5>
							<?php endif; ?>
							
							<a href="<?php echo esc_url($link); ?>" class="main-btn"><i class="fas fa-angle-double-right"></i></a>
						</li>
					<?php } } } ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- our feature End  -->
<?php } ?>