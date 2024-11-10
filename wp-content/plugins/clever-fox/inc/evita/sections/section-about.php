<?php 
 
if ( ! function_exists( 'cleverfox_evita_lite_about' ) ) :
	function cleverfox_evita_lite_about() {
	$about_hs			= get_theme_mod('about_hs','1'); 	
	$about_title					= get_theme_mod('about_title',__('All World Leading Best UI/UX Designer','clever-fox')); 
	$about_subtitle					= get_theme_mod('about_subtitle',__('<span class="primary_color">About</span> Us','clever-fox')); 
	$about_subtitle2				= get_theme_mod('about_subtitle2','A Passionet UI/UX Designer And Web Developer Based in NYC, USA'); 
	$about_description				= get_theme_mod('about_description','There are many variations of passages of Lorem Ipsum available but the
							majority have suffered injected humour dummy now
							variations of passages of Lorem Ipsum available but the majority have suffered injected
							humour dummy now.'); 
	$about_btn_lbl					= get_theme_mod('about_btn_lbl',__('Live Chat','clever-fox')); 
	$about_btn_link					= get_theme_mod('author_button_link','#'); 
	$achivement_contents			= get_theme_mod('achivement_contents',evita_get_achivement_default()); 
	$social_contents				= get_theme_mod('social_contents',evita_get_about_social_icon_default()); 	
	$about_signature_img			= get_theme_mod('about_signature_img',CLEVERFOX_PLUGIN_URL .'/inc/evita/images/about/sign.png'); 
	$about_left_img					= get_theme_mod('about_left_img',CLEVERFOX_PLUGIN_URL .'/inc/evita/images/about/abt01.png'); 
if($about_hs=='1'):
	
?>
	<!--===// start: About us
	=================================-->
	<section class="about-us about-home">
		<div class="bg-elements">
			<div class="element6"><img src="<?php echo esc_url(EVITA_PARENT_URI.'/assets/images/element/ele8.png'); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>"></div>
			<div class="element8"><img src="<?php echo esc_url(EVITA_PARENT_URI.'/assets/images/element/ele1.png'); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>"></div>
			<div class="element9"><img src="<?php echo esc_url(EVITA_PARENT_URI.'/assets/images/element/ele1.png'); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>"></div>
		</div>
		<div class="nt-container">
			<div class="nt-columns-area">
				<?php if(!empty($about_left_img)){ ?>
					<div class="nt-column-6 nt-sm-column-6">
						<div class="about-img" data-tilt>
							<div class="bg-elements">
								<div class="element7">
									<img src="<?php echo esc_url(EVITA_PARENT_URI.'/assets/images/element/ele8.png'); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
								</div>
							</div>
							<img src="<?php echo esc_url($about_left_img) ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
						</div>
					</div>
				<?php } ?>
				
				<div class="nt-column-6 nt-sm-column-6">
					<div class="about-content">
						<div class="section-title">
							<?php if(!empty($about_subtitle)){ ?>
								<h5>
									<?php echo wp_kses_post($about_subtitle); ?>
								</h5>
							<?php } ?>
							
							<?php if(!empty($about_title)){ ?>
								<h2>
									<?php echo esc_html($about_title); ?>
								</h2>
							<?php } ?>
						</div>
						
						<?php if(!empty($about_subtitle2)){ ?>
							<p class="about_subtitle2">
								<a href="javascript:void(0)">
									<?php echo esc_html($about_subtitle2); ?>
								</a>
							</p>
						<?php } ?>
						
						<?php if(!empty($about_description)){ ?>
							<p class="about-p">
								<?php echo esc_html($about_description); ?>
							</p>
						<?php } ?>
						
						<?php if(!empty($about_btn_lbl)){ ?>
							<a href="<?php echo esc_url($about_btn_link); ?>" class="main-btn"><?php echo esc_html($about_btn_lbl); ?> <i class="fa fa-arrow-right"></i></a>
						<?php } ?>
						
						<?php if(!empty($about_signature_img)){ ?>
							<div class="signature">
								<img src="<?php echo esc_url($about_signature_img) ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
							</div>
						<?php } ?>
					</div>
					
					<?php if(!empty($achivement_contents)){ ?>
						<ul class="about-funfact">
							<?php 
								$achivement_contents = json_decode( $achivement_contents );
								foreach ( $achivement_contents as $achivement_item ) {
									$title = ! empty( $achivement_item->title ) ? apply_filters( 'evita_translate_single_string', $achivement_item->title, 'achivement section' ) : '';
									$subtitle = ! empty( $achivement_item->subtitle ) ? apply_filters( 'evita_translate_single_string', $achivement_item->subtitle, 'achivement section' ) : '';
							?>
								<li>
									<h4><span class="counter"><?php echo esc_html($subtitle); ?></span>+</h4>
									<p><?php echo esc_html($title); ?></p>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!--===// end: About us
	=================================-->
<?php	
endif;	}
endif;
if ( function_exists( 'cleverfox_evita_lite_about' ) ) {
$section_priority = apply_filters( 'evita_section_priority', 14, 'cleverfox_evita_lite_about' );
add_action( 'evita_sections', 'cleverfox_evita_lite_about', absint( $section_priority ) );
}