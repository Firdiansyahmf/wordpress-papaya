<?php  
	$cta_hs							= get_theme_mod('cta_hs','1'); 
	$accron_cta_title				= get_theme_mod('cta_title',__('Want To Work With Us ?','clever-fox')); 
	$accron_cta_description			= get_theme_mod('cta_description',__('Meet Our People. See Our Work. Join Our Team','clever-fox'));
	$accron_cta_video_url			= get_theme_mod('cta_video_url',esc_url('https://www.youtube.com/watch?v=b5Jyqzm5idw'));
	$accron_cta_btn_lbl				= get_theme_mod('cta_btn_lbl',__('Contact With Us','clever-fox')); 
	$accron_cta_btn_link			= get_theme_mod('cta_btn_link', esc_url('#'));
	$accron_cta_phone_number		= get_theme_mod('cta_phone_number',__('70 975 70 975','clever-fox'));
	$accron_cta_call_icon			= get_theme_mod('cta_call_icon','fa-phone-alt');
	$accron_cta_whatsapp_number		= get_theme_mod('cta_whatsapp_number',__('70 975 70 975','clever-fox'));
	$accron_cta_whatsapp_icon		= get_theme_mod('cta_whatsapp_icon','fa-whatsapp');
	$accron_cta_bg_setting			= get_theme_mod('cta_bg_setting',esc_url(CLEVERFOX_PLUGIN_URL. 'inc/accron/images/bg-cta.jpg')); 
	$accron_cta_bg_position			= get_theme_mod('cta_bg_position','fixed');
	if($cta_hs == 1) {
?>
<!-- cta section -->
<section class="cta-section scroll-bg roller cta-section-home" data-roller="start:0.5" <?php if(!empty($accron_cta_bg_setting)){ ?> style="background:url('<?php echo esc_url($accron_cta_bg_setting); ?>'); background-repeat:no-repeat;background-size:cover; background-attachment:<?php echo esc_attr($accron_cta_bg_position); ?>" <?php } ?>>
    <div class="container-fluid">
        <div class="row align-items-center">
			<?php if(!empty($accron_cta_call_icon) || !empty($accron_cta_phone_number)): ?>
				<div class="col-lg-3 col-md-3 col-sm-3 p-0">
					<div class="cta-left">
						<aside class="widget widget-contact">
							<div class="contact-area">
								<?php if(!empty($accron_cta_call_icon)): ?>
									<div class="contact-icon">
										<i class="fa <?php echo esc_html($accron_cta_call_icon); ?>"></i>
									</div>
								<?php endif; ?>
									
								<?php if(!empty($accron_cta_phone_number)): ?>
									<div class="contact-info">
										<p class="text">
											<a href="tel:<?php echo esc_attr(str_replace(' ','',$accron_cta_phone_number)); ?>"><?php echo esc_html($accron_cta_phone_number); ?></a>
										</p>
									</div>
								<?php endif; ?>							
							</div>
						</aside>
					</div>
				</div>
			<?php endif; ?>		
			
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cta-center">
                    <div class="cta-content">
						<?php if(!empty($accron_cta_title)): ?>
							<h3>
								<?php echo esc_html($accron_cta_title); ?>
							</h3>
						<?php endif; ?>
						
						<?php if(!empty($accron_cta_description)): ?>
							<p>
								<?php echo wp_kses_post($accron_cta_description); ?>
							</p>
						<?php endif; ?>	
						
						<?php if(!empty($accron_cta_btn_lbl) || !empty($accron_cta_btn_link)): ?>
							<a href="<?php echo esc_url($accron_cta_btn_link); ?>" class="main-btn bg">
								<?php echo esc_html($accron_cta_btn_lbl); ?>
							</a>
						<?php endif; ?>							
                    </div>					
					
					<?php if(!empty($accron_cta_video_url)): ?>
						<div class="cta-play-btn">
							<a href="<?php echo esc_url($accron_cta_video_url); ?>" class="youtube" aria-label="play button"><i class="fas fa-play"></i></a>
						</div>
					<?php endif; ?>							
                </div>
            </div>
			
			<?php if(!empty($accron_cta_whatsapp_icon) || !empty($accron_cta_whatsapp_number)): ?>
				<div class="col-lg-3 col-md-3 col-sm-3 p-0">
					<div class="cta-right">
						<aside class="widget widget-contact">
							<div class="contact-area">
								<?php if(!empty($accron_cta_whatsapp_icon)): ?>
									<div class="contact-icon">
										<i class="fab <?php echo esc_html($accron_cta_whatsapp_icon); ?>"></i>
									</div>
								<?php endif; ?>
									
								<?php if(!empty($accron_cta_whatsapp_number)): ?>
									<div class="contact-info">
										<p class="text">
											<a href="https://api.whatsapp.com/send?phone=<?php echo esc_attr(str_replace(' ','',$accron_cta_whatsapp_number)); ?>"><?php echo esc_html($accron_cta_whatsapp_number); ?></a>
										</p>
									</div>
								<?php endif; ?>		
							</div>
						</aside>
					</div>
				</div>
			<?php endif; ?>	
        </div>
    </div>
</section>
<!-- cta section end-->
<?php } ?>