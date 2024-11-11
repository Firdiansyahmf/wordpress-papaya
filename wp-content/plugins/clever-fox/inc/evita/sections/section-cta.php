<?php  
if ( ! function_exists( 'cleverfox_evita_lite_cta' ) ) :
	function cleverfox_evita_lite_cta() {
	$cta_hs				= get_theme_mod('cta_hs','1'); 
	$cta_title				= get_theme_mod('cta_title',__('Freelance Work','clever-fox'));
	$cta_subtitle			= get_theme_mod('cta_subtitle',__('<span class="primary_color">I Am</span> Available For','clever-fox'));
	$cta_description		= get_theme_mod('cta_description',__('There are many variations of passages of Lorem Ipsum available but the majority have	suffered injected humour dummy now.','clever-fox'));
	$cta_btn				= get_theme_mod('cta_btn_label',__('Contact Us','clever-fox')); 
	$cta_btn_link			= get_theme_mod('cta_btn_link','#');
	$cta_image				= get_theme_mod('cta_image',CLEVERFOX_PLUGIN_URL .'/inc/evita/images/cta1.png');
	if($cta_hs=='1'):
?>
	<!--===// start: CTA
	=================================-->
	<section class="section-cta home-cta">
		<div class="nt-container">
			<div class="nt-columns-area">
				<div class="nt-column-7 nt-sm-column-6">
					<div class="content-cta">
						<div class="section-title">
							<?php if(!empty($cta_subtitle)){ ?>
								<h5>
									<?php echo wp_kses_post($cta_subtitle); ?>
								</h5>
							<?php } ?>
							
							<?php if(!empty($cta_title)){ ?>
								<h2>
									<?php echo esc_html($cta_title); ?>
								</h2>
							<?php } ?>
							
							<?php if(!empty($cta_description)){ ?>
								<p>
									<?php echo esc_html($cta_description); ?>
								</p>
							<?php } ?>
							
							<?php if(!empty($cta_btn)){ ?>
								<a href="<?php echo esc_url($cta_btn_link); ?>" class="main-btn"><?php echo esc_html($cta_btn); ?> <i class="fa fa-user"></i></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="nt-column-5 nt-sm-column-6">
					<?php if(!empty($cta_image)){ ?>
						<div class="image-side">
							<div class="image-cta">
								<img src="<?php echo esc_url($cta_image) ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!--===// end: CTA
	=================================-->

	<?php	
endif;	}
endif;
if ( function_exists( 'cleverfox_evita_lite_cta' ) ) {
$section_priority = apply_filters( 'evita_section_priority', 15, 'cleverfox_evita_lite_cta' );
add_action( 'evita_sections', 'cleverfox_evita_lite_cta', absint( $section_priority ) );
}