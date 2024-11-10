<?php  
	$process_title					= get_theme_mod('process_title',__('Our Work Process','clever-fox')); 
	$process_subtitle				= get_theme_mod('process_subtitle',__('Process','clever')); 
	$process_contents				= get_theme_mod('process_contents',medazin_get_process_default());
	$process_bg_img				= get_theme_mod('process_bg_img', esc_url(CLEVERFOX_PLUGIN_URL . '/inc/medazin/images/work-process/bg.jpg')); 
?>
	 <!-- =================================== Work Process Section ======================== -->
    <section class="work-process-section home-process" <?php if(!empty($process_bg_img)){ ?> style="background:url('<?php echo esc_url($process_bg_img); ?>') center center; background-repeat: no-repeat;background-size: cover;"<?php } ?>>
        <div class="container ">
            <?php if(!empty($process_title)  || !empty($process_subtitle)): ?>
				<div class="section-title text-center wow slideInDown">
					<?php if(!empty($process_subtitle)): ?>
						<span class="subtitle">
							<?php echo wp_kses_post($process_subtitle); ?>
						</span>
						<span class="title-element"> <i class="fa fa-heartbeat"></i></span>
					<?php endif; ?>
					
					<?php if(!empty($process_title)): ?>
						<h5>
							<?php echo wp_kses_post($process_title); ?>
						</h5>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
            <div class="row row-cols-2 justify-content-center text-center align-items-center ">
				<?php
					if ( ! empty( $process_contents ) ) {
					$process_contents = json_decode( $process_contents );
					$count = 1;
					foreach ( $process_contents as $process_item ) {
						$title = ! empty( $process_item->title ) ? apply_filters( 'medazin_translate_single_string', $process_item->title, 'Process section' ) : '';
				?>
					<div class="col-lg-3 col-md-6 col-sm-12 mt-4 wow zoomIn main-item ">
						<div class="item-wrap ">
							<span class="animte-border "></span>
							<div class="count ">
								<span>0<?php echo esc_html($count); ?></span>
							</div>
							<?php if(!empty($title)  || !empty($subtitle)): ?>
								<div class="title">
									<span><?php echo esc_html($title); ?></span>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<?php ++$count; } } ?>
            </div>
        </div>
    </section>
    <!-- =================================== End ======================== -->