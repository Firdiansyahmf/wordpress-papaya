<?php  
	$cta_hs							= get_theme_mod('cta_hs','1'); 
	$acronix_cta_title				= get_theme_mod('cta2_title',__('Download Our <a href="#">Acronix</a> Application','clever-fox')); 
	$acronix_cta_subtitle			= get_theme_mod('cta2_subtitle',__('Get Our Free App','clever-fox')); 
	$acronix_cta_description		= get_theme_mod('cta2_description',__('Meet Our People. See Our Work. Join Our Team','clever-fox'));
	$acronix_cta_img				= get_theme_mod('cta2_img',esc_url(CLEVERFOX_PLUGIN_URL. 'inc/acronix/images/hand.svg'));
	$acronix_cta_bg_img				= get_theme_mod('cta2_bg_img',esc_url(CLEVERFOX_PLUGIN_URL. 'inc/acronix/images/cta2.jpg'));
	$acronix_cta_btn_lbl			= get_theme_mod('cta2_btn_lbl',__('<span>Get In</span><span>Google Play</span>','clever-fox')); 
	$acronix_cta_btn_link			= get_theme_mod('cta2_btn_link', esc_url('#'));	
	$acronix_cta_btn2_lbl			= get_theme_mod('cta2_btn2_lbl',__('<span>Get In</span><span>Play Store</span>','clever-fox')); 
	$acronix_cta_btn2_link			= get_theme_mod('cta2_btn2_link', esc_url('#'));	
	$acronix_cta_bg_position		= get_theme_mod('cta_bg_position','fixed');
	if($cta_hs == 1) {
?>
<!-- cta section -->
<section class="cta2-section home-cta2" <?php if(!empty($acronix_cta_bg_img)){ ?> style="background:url('<?php echo esc_url($acronix_cta_bg_img); ?>');" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
				<?php if(!empty($acronix_cta_img)){ ?>
					<div class="cta2-image">
						<img src="<?php echo esc_url($acronix_cta_img); ?>" alt="<?php echo esc_attr__('App Image','clever-fox'); ?>">
					</div>
				<?php } ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="cta2-content">
					<?php if(!empty($acronix_cta_subtitle)): ?>
						<span class="cta2-subttl">
							<?php echo esc_html($acronix_cta_subtitle); ?>
						</span>
					<?php endif; ?>
					
					<?php if(!empty($acronix_cta_title)): ?>
						<h1>
							<?php echo wp_kses_post($acronix_cta_title); ?>
						</h1>
					<?php endif; ?>
					
					<?php if(!empty($acronix_cta_description)): ?>
						<p class="cta2-desc">
							<?php echo wp_kses_post($acronix_cta_description); ?>
						</p>
					<?php endif; ?>	
				
					<?php if(!empty($acronix_cta_btn_lbl) || !empty($acronix_cta_btn_link)): ?>
						<a href="<?php echo esc_html($acronix_cta_btn_link); ?>" class="store_btn google">
							<i class="fas fa-play"></i>
							<span>
								<?php echo wp_kses_post($acronix_cta_btn_lbl); ?>
							</span>
						</a>
					<?php endif; ?>	
					
					<?php if(!empty($acronix_cta_btn2_lbl) || !empty($acronix_cta_btn2_link)): ?>
						<a href="<?php echo esc_html($acronix_cta_btn2_link); ?>" class="store_btn apple">
							<i class="fab fa-apple"></i>
							<span>
								<?php echo wp_kses_post($acronix_cta_btn2_lbl); ?>
							</span>
						</a>
					<?php endif; ?>	
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta section end-->
<?php } ?>