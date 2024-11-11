<?php  
	$info_contents 		= get_theme_mod('info_contents',medazin_get_info_default());
	$info_title 		= get_theme_mod( 'info_title','Departments');
	
?>	
	<!-- ================ Info Section ================================- -->
    <section class="info-section wow slideInUp">
        <h2 class="d-none">-</h2>
        <!-- Ignore The  above h2 element -->
        <div class="container">
            <?php if(!empty($info_title)){ ?>
				<div class="toggle-btn">
					<button id="toggle-btn"><?php echo esc_html($info_title); ?><i class="fa fa-angle-down"></i></button>
				</div>
			<?php } ?>
			
            <div class="info-carousel" style="display: none;">
            <div class="row justify-content-center my-4">
				<?php
					if (  !empty( $info_contents ) ) {
					$info_contents = json_decode( $info_contents );
					foreach ( $info_contents as $info_item ) {
						$title = ! empty( $info_item->title ) ? apply_filters( 'medazin_translate_single_string', $info_item->title, 'Info section' ) : '';
						$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'medazin_translate_single_string', $info_item->icon_value, 'Info section' ) : '';
						$image = ! empty( $info_item->image_url ) ? apply_filters( 'medazin_translate_single_string', $info_item->image_url, 'Info section' ) : '';
						$choice = ! empty( $info_item->choice ) ? apply_filters( 'medazin_translate_single_string', $info_item->choice, 'Info section' ) : '';
				?>
					<div class="item">
						<svg viewBox="0 0 100 100">
							<path d="M55,71Q26,92,28.5,55Q31,18,57.5,34Q84,50,55,71Z" stroke="none" stroke-width="0"
								fill="#4F46E5"></path>
						</svg>
						
						<?php if($choice =='customizer_repeater_image'): ?>
							<div class="icon-box">
								<img src="<?php echo esc_url($image); ?>" />
							</div>
						<?php else: ?>
							<?php if ( ! empty( $icon ) ) { ?>
								<div class="icon-box">
									<i class="fa <?php echo esc_attr($icon); ?> active"></i>
								</div>
							<?php } ?>
						<?php endif; ?>
						
						<?php if(!empty($title)): ?>
							<div class="title-box">
								<span>
									<?php echo esc_html($title); ?>
									
								</span>
							</div>
						<?php endif; ?>
					</div>
				<?php } } ?>
				</div>
            </div>
        </div>
    </section>