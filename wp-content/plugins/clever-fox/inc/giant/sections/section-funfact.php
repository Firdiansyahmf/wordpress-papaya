<?php  
	$funfact_title 			= get_theme_mod('funfact_title',__('Our Funfact','clever-fox'));
	$funfact_subtitle		= get_theme_mod('funfact_subtitle',__('Funfact','clever-fox'));
	$funfact_contents		= get_theme_mod('funfact_contents',giant_get_funfact_default());
	$funfact_sec_column		= get_theme_mod('funfact_sec_column','3');  
	/* $funfact_bg_img			= get_theme_mod('funfact_bg_img',esc_url(get_template_directory_uri() .'/assets/images/slider/slide-img3.jpg'));  */
?>	
	<!-- funfact section -->
<section class="funfact-section" style="background: var(--primary-color);" >
    <div class="container">
        <div class="row">
			<?php
				if ( ! empty( $funfact_contents ) ) {
				$funfact_contents = json_decode( $funfact_contents );
				foreach ( $funfact_contents as $funfact_item ) {
					$title = ! empty( $funfact_item->title ) ? apply_filters( 'giant_pro_translate_single_string', $funfact_item->title, 'Funfact section' ) : '';
					$subtitle = ! empty( $funfact_item->subtitle ) ? apply_filters( 'giant_pro_translate_single_string', $funfact_item->subtitle, 'Funfact section' ) : '';
					$text = ! empty( $funfact_item->text ) ? apply_filters( 'giant_pro_translate_single_string', $funfact_item->text, 'Funfact section' ) : '';
					$icon = ! empty( $funfact_item->icon_value ) ? apply_filters( 'giant_pro_translate_single_string', $funfact_item->icon_value, 'Funfact section' ) : '';
					$choice = ! empty( $funfact_item->choice ) ? apply_filters( 'giant_pro_translate_single_string', $funfact_item->choice, 'Funfact section' ) : '';
			?>
				<div class="col-lg-3 col-sm-6">
					<div class="funfact">
						<div class="funfact-icon">
							<?php if(!empty($icon)): ?>
								<i class="fas <?php echo esc_attr($icon); ?>"></i>
							<?php endif; ?>
						</div>
						
						<div class="funfact-content">
							<?php if(!empty($title)  || !empty($subtitle)): ?>
								<h2><span class="counter"><?php if($title): esc_html(printf(/* translators: %s: title */__( '%s','clever-fox' ),$title)); endif; ?></span><?php if($subtitle): esc_html(printf(/* translators: %s: subtitle */__( '%s','clever-fox' ),$subtitle)); endif; ?></h2>
							<?php endif; ?>
							
							<?php if(!empty($text)): ?>
								<p>
									<?php echo esc_html($text); ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php } } ?>
        </div>
    </div>
</section>
<!-- funfact section end -->