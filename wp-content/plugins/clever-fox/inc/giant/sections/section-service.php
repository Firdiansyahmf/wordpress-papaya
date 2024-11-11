<?php 
	$service_hs 						= get_theme_mod('service_hs','1');
	$giant_service_title 				= get_theme_mod('service_title',__('Services','clever-fox'));
	$giant_service_description			= get_theme_mod('service_description',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!.','clever-fox'));
	$giant_service_contents			= get_theme_mod('service_contents',giant_get_service_default());
	$giant_service_sec_column			= get_theme_mod('service_sec_column','4');  
	if($service_hs=='1'){
?>	
	<!-- Start: Service Section
            =======================-->
    <!-- Service start -->
<section class="service-section service-home">
    <div class="container">
		<?php if(!empty($giant_service_title)  || !empty($giant_service_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($giant_service_title)): ?>
					<h2 class="maintitle">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);" class="desg1"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
						
							<span><?php echo wp_kses_post($giant_service_title); ?></span>
						
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($giant_service_description)): ?>
					<p>
						<?php echo wp_kses_post($giant_service_description); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
			
		<div class="row">
			<?php
				if ( ! empty( $giant_service_contents ) ) {
				$giant_service_contents = json_decode( $giant_service_contents );
				$count = 1;
				foreach ( $giant_service_contents as $service_item ) { 
					$image2 = ! empty( $service_item->image_url2 ) ? apply_filters( 'translate_single_string', $service_item->image_url2, 'Service section' ) : '';
					$giant_service_icon = ! empty( $service_item->icon_value) ? apply_filters( 'translate_single_string', $service_item->icon_value,'Service section' ) : '';
					$giant_service_title = ! empty( $service_item->title ) ? apply_filters( 'translate_single_string', $service_item->title, 'Service section' ) : '';
					$giant_service_subtitle = ! empty( $service_item->text ) ? apply_filters( 'translate_single_string', $service_item->text, 'Service section' ) : '';
					$giant_service_btn_lbl = ! empty( $service_item->text2 ) ? apply_filters( 'translate_single_string', $service_item->text2, 'Service section' ) : '';
					$giant_service_link = ! empty( $service_item->link ) ? apply_filters( 'translate_single_string', $service_item->link, 'Service section' ) : '';
			?>						
				<div class="col-lg-<?php echo esc_attr($giant_service_sec_column); ?> col-sm-6">
					<div class="service">
						<?php if( ! empty( $giant_service_icon ) ): ?>
							<div class="service-icon">
								<i class="fas <?php echo esc_attr($giant_service_icon); ?>"></i>
							</div>
						<?php endif; ?>
						<div class="service-content">
							<?php if ( ! empty( $giant_service_title ) ) : ?>
								<h2>
									<?php if($giant_service_title): esc_html(printf(/* translators: %s: giant_service_title */__( '%s','clever-fox' ),$giant_service_title)); endif; ?>
								</h2>
							<?php endif; ?>
							<?php if ( ! empty( $giant_service_subtitle ) ) : ?>
								<p>
									<?php if($giant_service_subtitle): esc_html(printf(/* translators: %s: giant_service_subtitle */__( '%s','clever-fox' ),$giant_service_subtitle)); endif; ?>
								</p>
							<?php endif; ?>	
							<a href="<?php echo esc_url( $giant_service_link ); ?>" class="main-btn"><?php if($giant_service_btn_lbl): esc_html(printf(/* translators: %s: giant_service_btn_lbl */__( '%s','clever-fox' ),$giant_service_btn_lbl)); endif; ?>
							 <i class="fas fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
			<?php ++$count; } }?>
		</div>
	</div>
</section>
    <!-- End: Service Section
            =======================-->
<?php } ?>