<?php
	if ( ! function_exists( 'hantus_lite_info' ) ) :
	function hantus_lite_info() {
		$hide_show_info			= get_theme_mod('hide_show_info','1');
		$info_first_img_setting	= get_theme_mod('info_first_img_setting',CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/icons/icon01.jpg');
		$info_title				= get_theme_mod('info_title',__('Opening Time','clever-fox'));
		$info_description		= get_theme_mod('info_description',__('Mon - Sat: 10h00 - 18h00','clever-fox'));
		$info_btn				= get_theme_mod('info_btn',__('Read More','clever-fox'));
		$info_link				= get_theme_mod('info_link','#');
		
		$info_second_img_setting= get_theme_mod('info_second_img_setting',CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/icons/icon02.jpg');
		$info_title2			= get_theme_mod('info_title2',__('Address','clever-fox'));
		$info_description2		= get_theme_mod('info_description2',__('40 Baria Sreet, NY USAm','clever-fox'));
		$info_btn2				= get_theme_mod('info_btn2',__('Read More','clever-fox'));
		$info_link2				= get_theme_mod('info_link2','#');
		
		$info_third_img_setting	= get_theme_mod('info_third_img_setting',CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/icons/icon03.jpg');		
		$info_title3			= get_theme_mod('info_title3',__('Telephone','clever-fox'));
		$info_description3		= get_theme_mod('info_description3',__('+12 345 678 9101','clever-fox')); 
		$info_btn3				= get_theme_mod('info_btn3',__('Read More','clever-fox'));
		$info_link3				= get_theme_mod('info_link3','#');		
?>
	<?php if($hide_show_info == '1') { ?>
	<section id="contact2"  class="info-thai-spa">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
	            	<ul class="info-wrapper">
	                    <li class="info-first">
	                        <aside class="single-info-thai-spa strip-hover">
								<div class="strip-hover-wrap">
									<div class="strip-overlay">
										<?php if ( ! empty( $info_first_img_setting ) ) { ?>
											<div class="icon-info-thai-spa">
												<img src="<?php echo esc_url( $info_first_img_setting ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($title)); ?>" title="<?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($title)); ?>" <?php endif; ?> />
											</div>
										<?php } ?>
										<div class="info-area-thai-spa">
											<div class="info-caption-thai-spa">
												<h4><?php /* translators: %s: Info Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_title)); ?></h4>
												<p><?php /* translators: %s: Info Description */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_description)); ?></p>
												<a href="<?php echo esc_url($info_link); ?>" class="btn-info"><?php /* translators: %s: Info Button */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_btn)); ?></a>
											</div>
										</div>
									</div>
								</div>
	                        </aside>
	                    </li>
	                    <li class="info-second">
	                        <aside class="single-info-thai-spa strip-hover">
								<div class="strip-hover-wrap">
									<div class="strip-overlay">
										<?php if ( ! empty( $info_second_img_setting ) ) { ?>
										<div class="icon-info-thai-spa">
											<img src="<?php echo esc_url( $info_second_img_setting ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($title)); ?>" title="<?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($title)); ?>" <?php endif; ?> />
										</div>
										<?php } ?>
										<div class="info-area-thai-spa">
											<div class="info-caption-thai-spa">
												<h4><?php /* translators: %s: Info Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_title2)); ?></h4>
												<p><?php /* translators: %s: Info Description */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_description2)); ?></p>
												<a href="<?php echo esc_url($info_link2); ?>" class="btn-info"><?php /* translators: %s: Info Button */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_btn2)); ?></a>
											</div>
										</div>
									</div>
								</div>
	                        </aside>
	                    </li>
	                    <li class="info-third">
	                        <aside class="single-info-thai-spa strip-hover">
								<div class="strip-hover-wrap">
									<div class="strip-overlay">
										<?php if ( ! empty( $info_third_img_setting ) ) { ?>
										<div class="icon-info-thai-spa">
											<img src="<?php echo esc_url( $info_third_img_setting ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($title)); ?>" title="<?php /* translators: %s: Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($title)); ?>" <?php endif; ?> />
										</div>
										<?php } ?>
										<div class="info-area-thai-spa">
											<div class="info-caption-thai-spa">
												<h4><?php /* translators: %s: Info Title */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_title3)); ?></h4>
												<p><?php /* translators: %s: Info Description */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_description3)); ?></p>
												<a href="<?php echo esc_url($info_link3); ?>" class="btn-info"><?php /* translators: %s: Info Button */printf( esc_html__('%s.', 'clever-fox'), esc_html($info_btn3)); ?></a>
											</div>
										</div>
									</div>
								</div>
	                        </aside>
	                    </li>
	                </ul>
	            </div>
            </div>
        </div>
    </section>
	<?php }} endif; ?>
	<?php
	if ( function_exists( 'hantus_lite_info' ) ) {
		$section_priority = apply_filters( 'hantus_section_priority', 12, 'hantus_lite_info' );
		add_action( 'hantus_sections', 'hantus_lite_info', absint( $section_priority ) );
	}
?>