<?php  
	$cta_call_title		= get_theme_mod('cta_call_title',__('Make Appointment','clever-fox')); 
	$cta_call_text		= get_theme_mod('cta_call_text',__('+12 345 678 90','clever-fox'));
	$cta_right_icon		= get_theme_mod('cta_right_icon','fa-phone'); 
	$cta_title			= get_theme_mod('cta_title',__('We Care About Your Health!','clever-fox'));
	$cta_description	= get_theme_mod('cta_description',__('Need An Emergency help?','clever-fox'));
	$cta_btn_link		= get_theme_mod('cta_btn_link');
	$cta_bg_setting			= get_theme_mod('cta_bg_setting',esc_url(CLEVERFOX_PLUGIN_URL .'inc/medazin/images/cta/section-bg.jpg')); 
	$cta_bg_position	= get_theme_mod('cta_bg_position','fixed');
?>
	<!-- ================================ CTA Section ======================== -->
    <section class="cta-section-1 ripple-area wow flipInX " <?php if(!empty($cta_bg_setting)){ ?> style="background:url('<?php echo esc_url($cta_bg_setting); ?>') center center no-repeat; background-attachment:<?php echo esc_attr($cta_bg_position); ?>" <?php } ?>>
        <div class="container ">
            <div class="row cta-content-box align-items-center ">
				<?php if(!empty($cta_title) || !empty($cta_description)): ?>
					<div class="col-lg-5 col-6">
						<div class="cta-content ">
							<div class="cta-text-wrap">
								<?php if(!empty($cta_description)): ?>
									<span>
										<?php echo wp_kses_post($cta_description); ?>
									</span>
								<?php endif; ?>
								
								<?php if(!empty($cta_title)): ?>
									<h2>
										<?php echo wp_kses_post($cta_title); ?>
									</h2>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				
                <div class="col-lg-7 col-6">
                    <div class="cta-content ">
                        <div class="cta-info-wrap ">
                            <aside class="widget widget-contact ">
                                <div class="contact-area ">
									<?php if(!empty($cta_right_icon)){ ?>
										<div class="contact-icon ">
											<i class="fas <?php echo esc_attr($cta_right_icon); ?> "></i>
										</div>
									<?php } ?>
									
									<?php if(!empty($cta_call_text)){ ?>
										<div class="contact-info ">
											<p class="text">
												<a href="tel:<?php echo esc_attr($cta_call_text); ?>"><?php echo wp_kses_post($cta_call_text); ?></a>
											</p>
										</div>
									<?php } ?>
                                </div>
                            </aside>
							
							<?php if(!empty($cta_call_title) || !empty($cta_btn_link)): ?>
								<div class="cta-btn ">
									<a href="<?php echo esc_url($cta_btn_link); ?>" class="main-button active">
										<span>
											<?php echo esc_html($cta_call_title); ?>
										</span> <i class="fa fa-plus "></i>
									</a> 
								</div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== End ================================ -->