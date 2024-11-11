<?php  
	$info_contents 		= get_theme_mod('info_contents',corpex_get_info_default());
	$hs_info				= get_theme_mod('hs_info','1');
	if( $hs_info == '1' ) {
?>	
<!-- info section -->
<section class="info-section">
        <div class="container">
            <div class="row">
				<?php
					if (  !empty( $info_contents ) ) {
					$info_contents = json_decode( $info_contents );
					foreach ( $info_contents as $info_item ) {
						$title = ! empty( $info_item->title ) ? apply_filters( 'corpex_translate_single_string', $info_item->title, 'Info section' ) : '';
						$text = ! empty( $info_item->text ) ? apply_filters( 'corpex_translate_single_string', $info_item->text, 'Info section' ) : '';
						$link = ! empty( $info_item->link ) ? apply_filters( 'corpex_translate_single_string', $info_item->link, 'Info section' ) : '';
						$image = ! empty( $info_item->image_url ) ? apply_filters( 'corpex_translate_single_string', $info_item->image_url, 'Info section' ) : '';
						$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'corpex_translate_single_string', $info_item->icon_value, 'Info section' ) : '';
						$choice = ! empty( $info_item->choice ) ? apply_filters( 'corpex_translate_single_string', $info_item->choice, 'Info section' ) : '';
				?>
					<div class="col-lg-4 col-md-6">
						<div class="info-item">
							<aside class="widget widget-contact">
								<div class="contact-area">
									<div class="contact-info">
										<p class="text">
											<?php if(!empty($title)): ?>
												<a href="<?php echo esc_url($link); ?>">
													<?php echo esc_html($title); ?>													
												</a>
											<?php endif; ?>
											
											<span><?php echo esc_html($text); ?></span>
										</p>
									</div>
									
									<?php if($choice =='customizer_repeater_image'): ?>
										<div class="contact-icon">
											<img src="<?php echo esc_url($image); ?>" />
										</div>
									<?php else: ?>
										<div class="contact-icon">
											<i class="fa <?php echo esc_attr($icon); ?>"></i>
										</div>
									<?php endif; ?>
								</div>
							</aside>
						</div>
					</div>
				<?php } } ?>
			</div>
        </div>
</section>
<?php } ?>
<!-- info section end -->