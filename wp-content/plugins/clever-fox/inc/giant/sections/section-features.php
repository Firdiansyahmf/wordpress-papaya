<?php 
	$feature_hs							= get_theme_mod('feature_hs','1');
	$giant_features_title 				= get_theme_mod('features_title',__('Features','clever-fox'));
	$giant_features_desc				= get_theme_mod('features_desc',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!','clever-fox')); 
	$giant_features_contents			= get_theme_mod('features_contents',giant_get_features_default());
	$giant_features_sec_column			= get_theme_mod('features_sec_column','4'); 	
	if($feature_hs=='1'){
?>	
	<!-- features -->
<section class="feature-section features-home">
    <div class="container">
		<?php if(!empty($giant_features_title)  || !empty($giant_features_subtitle) || !empty($giant_features_desc)): ?>
			<div class="section-title col-lg-6 mx-auto">
					
				<?php if(!empty($giant_features_title)): ?>
					<h2 class="maintitle">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);" class="desg1"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
						
							<span><?php echo wp_kses_post($giant_features_title); ?></span>
						
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($giant_features_desc)): ?>
					<p>
						<?php echo wp_kses_post($giant_features_desc); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
        <div class="row">
			<?php
				if ( ! empty( $giant_features_contents ) ) {
				$giant_features_contents = json_decode( $giant_features_contents );
				foreach ( $giant_features_contents as $features_item ) {
					$title = ! empty( $features_item->title ) ? apply_filters( 'giant_translate_single_string', $features_item->title, 'Features section' ) : '';
					$subtitle = ! empty( $features_item->subtitle ) ? apply_filters( 'giant_translate_single_string', $features_item->subtitle, 'Features section' ) : '';
					$desc = ! empty( $features_item->text ) ? apply_filters( 'giant_translate_single_string', $features_item->text, 'Features section' ) : '';
					$text2 = ! empty( $features_item->text2 ) ? apply_filters( 'giant_translate_single_string', $features_item->text2, 'Features section' ) : '';
					$link = ! empty( $features_item->link ) ? apply_filters( 'giant_translate_single_string', $features_item->link, 'Features section' ) : '';
					$image = ! empty( $features_item->image_url2 ) ? apply_filters( 'giant_translate_single_string', $features_item->image_url2, 'Features section' ) : '';
					$icon = ! empty( $features_item->icon_value ) ? apply_filters( 'giant_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
					$choice = ! empty( $features_item->choice ) ? apply_filters( 'giant_translate_single_string', $features_item->choice, 'Features section' ) : '';
			?>	
				<div class="col-lg-<?php echo esc_attr($giant_features_sec_column); ?> col-sm-6">
					<div class="feature-item">
						<div class="feature-image"><img src="<?php echo esc_url($image); ?>" alt=""></div>
						<div class="content-area">
							<?php if(!empty($icon)): ?>
								<div class="icon">
									<i class="fa <?php echo esc_attr($icon); ?>"></i>
								</div>
							<?php endif; ?>
							<?php if(!empty($subtitle)): ?>
								<span><?php if($subtitle): esc_html(printf(/* translators: %s: subtitle */__( '%s','clever-fox' ),$subtitle)); endif; ?></span>
							<?php endif; ?>
							<div class="feature-body">
								<?php if(!empty($title)): ?>
									<h2><?php if($title): esc_html(printf(/* translators: %s: title */__( '%s','clever-fox' ),$title)); endif; ?></h2>
								<?php endif; ?>
								
								<?php if(!empty($desc)): ?>
									<p><?php echo wp_kses_post($desc); ?></p>
								<?php endif; ?>
									<a href="<?php echo esc_url($link); ?>" class="main-btn"><span><?php echo esc_html($text2); ?></span> <i class="fas fa-angle-double-right"></i></a>
							</div>
						</div>	
					</div>
				</div>
            <?php } } ?>
        </div>
    </div>
</section>
<!-- features end -->
<?php } ?>