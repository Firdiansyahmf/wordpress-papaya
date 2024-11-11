<?php

/*
 *
 * Slider Default
 */
function corpex_get_slider_default() {

	return apply_filters(
		'corpex_get_slider_default', wp_json_encode(
				 array(
				array(
					'image_url2'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/corpex/images/slider/slider-img1.jpg'),
					'title'           	=> esc_html__( '20 Years Of Successful Business Consulting', 'clever-fox' ),
					'subtitle'         	=> esc_html__( 'Your Business Innovative Strategies For Success', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'video_url'	  		=>  'https://www.youtube.com/embed/D0UnqGm_miA',
					'text'	  			=>  esc_html__( 'Read More', 'clever-fox' ),
					'link2'	  			=>  esc_html__( '#', 'clever-fox' ),
					'link_follow_nofollow'	  	=>  '',
					'id'              	=> 'customizer_repeater_slider_001',
				),
				array(
					'image_url2'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/corpex/images/slider/slider-img2.jpg'),
					'title'           	=> esc_html__( '20 Years Of Successful Business Consulting', 'clever-fox' ),
					'subtitle'         	=> esc_html__( 'Your Business Innovative Strategies For Success', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'text'	  			=>  esc_html__( 'Read More', 'clever-fox' ),
					'video_url'	  		=>  'https://www.youtube.com/embed/9xwazD5SyVg',
					'link2'	  			=>  esc_html__( '#', 'clever-fox' ),
					'link_follow_nofollow'	  	=>  '',
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url2'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/corpex/images/slider/slider-img3.jpg'),
					'title'           	=> esc_html__( '20 Years Of Successful Business Consulting', 'clever-fox' ),
					'subtitle'         	=> esc_html__( 'Your Business Innovative Strategies For Success', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'text'	  			=>  esc_html__( 'Read More', 'clever-fox' ),
					'video_url'	  		=>  'https://www.youtube.com/embed/xcJtL7QggTI',
					'link2'	  			=>  esc_html__( '#', 'clever-fox' ),
					'link_follow_nofollow'	  	=>  '',
					'id'              => 'customizer_repeater_slider_003',
				),
			)
		)
	);
}


/*
 *
 * Service Default
*/
function corpex_get_service_default() {
	return apply_filters(
		'corpex_get_service_default', wp_json_encode(
			array(
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/service/service-img1.jpg'),	
					'icon_value'   => 'fa-tags',	
					'title'        => esc_html__( 'Branding Service', 'clever-fox' ),
					'text'        => esc_html__( 'Building Brands', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_001',
				),
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/service/service-img2.jpg'),
					'icon_value'   => 'fa-laptop',	
					'title'        => esc_html__( 'Digital Product', 'clever-fox' ),
					'text'        => esc_html__( 'Innovation Redefined', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_002',
				),
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/service/service-img3.jpg'),
					'icon_value'   => 'fa-image',	
					'title'        => esc_html__( 'Media Planing', 'clever-fox' ),
					'text'        => esc_html__( 'Media Solution', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_003',
				),
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/service/service-img4.jpg'),
					'icon_value'   => 'fa-users',	
					'title'        => esc_html__( 'IT Consulting', 'clever-fox' ),
					'text'        => esc_html__( 'Accelerating Business', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_004',
				)
			)
		)
	);
}


/*
 *
 * Features Default
 */
function corpex_get_features_default() {
	return apply_filters(
		'corpex_get_features_default', wp_json_encode(
				 array(
				array(
					'icon_value'        => 'fa-laptop',	
					'title'           	=> esc_html__( 'Website Development', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_001',
				),
				array(
					'icon_value'        => 'fa-paint-brush',	
					'title'           	=> esc_html__( 'Graphic Designing', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_002',				
				),
				array(
					'icon_value'       	=> 'fa-user',	
					'title'            	=> esc_html__( 'Digital Marketing', 'clever-fox' ),
					'link'       	  	=> '#',
					'id'               	=> 'customizer_repeater_features_003',
				),
				array(
					'icon_value'        => 'fa-mobile-alt',	
					'title'           	=> esc_html__( 'Apps Development', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_004',
				),
				array(
					'icon_value'        => 'fa-file-alt',	
					'title'           	=> esc_html__( 'SEO & Content Writing', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_005',
				),
				array(
					'icon_value'        => 'fa-tv',	
					'title'           	=> esc_html__( 'UI/UX Designing', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_006',
				),
				array(
					'icon_value'        => 'fa-database',	
					'title'           	=> esc_html__( 'Data Analytics', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_007',
				),
				array(
					'icon_value'        => 'fa-cogs',	
					'title'           	=> esc_html__( 'Technology consulting', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_008',
				),
				
			)
		)
	);
}


/**
 * Corpex Above Header Social Icon
 */
if ( ! function_exists( 'corpex_abv_hdr_social' ) ) {
	function corpex_abv_hdr_social() {
		//above_header_first
		$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
		$social_icons 				= get_theme_mod( 'social_icons',corpex_get_social_icon_default());	
		
				 if($hide_show_social_icon == '1') { ?>
					<aside class="widget widget_social_widget">
						<ul>
							<?php
								$social_icons = json_decode($social_icons);
								if( $social_icons!='' )
								{
								foreach($social_icons as $social_item){	
								$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'corpex_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
								$social_link = ! empty( $social_item->link ) ? apply_filters( 'corpex_translate_single_string', $social_item->link, 'Header section' ) : '';
							?>
								<li><a href="<?php echo esc_url( $social_link ); ?>" class="social-icon"><i class="fab <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
							<?php }} ?>
						</ul>
					</aside>
				<?php } 
	}
}
add_action( 'corpex_abv_hdr_social', 'corpex_abv_hdr_social' );


/**
 * Corpex Above Header
 */
if ( ! function_exists( 'corpex_above_hdr' ) ) {
	function corpex_above_hdr() {
		//above_header_first
		$hide_show_mbl_details 		= get_theme_mod( 'hide_show_mbl_details','1'); 
		$tlh_mobile_icon 			= get_theme_mod( 'tlh_mobile_icon','fas fa-phone-alt');
		$tlh_mobile_title 			= get_theme_mod( 'tlh_mobile_title',__('Call Us','clever-fox')); 
		$tlh_mobile_number 			= get_theme_mod( 'tlh_mobile_number',__('+70 975 975 70','clever-fox')); 

		$hide_show_email_details 	= get_theme_mod( 'hide_show_email_details','1');
		$tlh_email_icon 			= get_theme_mod( 'tlh_email_icon','fas fa-envelope');
		$tlh_email_title 			= get_theme_mod( 'tlh_email_title',__('Write Us','clever-fox')); 								
		$tlh_email 					= get_theme_mod( 'tlh_email',__('email@company.com','clever-fox'));
		
		$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
		
		?>
		<div class="above-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="above-item left">
                            <?php if($hide_show_email_details =='1' && !empty($tlh_email)): ?>
								<aside class="widget widget-contact widget-email">
									<div class="contact-area">
										<div class="contact-icon">
											<i class="fa <?php echo esc_attr($tlh_email_icon); ?>"></i>
										</div>
										<div class="contact-info">
											<p class="text">
												<span><?php echo esc_html($tlh_email_title); ?></span>
												<a href="mailto:<?php echo esc_attr($tlh_email); ?>"><?php echo esc_html($tlh_email); ?></a>
											</p>
										</div>
									</div>
								</aside>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="above-item center">
                            <?php $hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
								if($hide_show_social_icon =='1'):
									do_action('corpex_abv_hdr_social'); 
								endif; 
							?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="above-item right">
							<?php if($hide_show_mbl_details =='1' && !empty($tlh_mobile_number)): ?>
								<aside class="widget widget-contact widget-phone">
									<div class="contact-area">
										<div class="contact-icon">
											<i class="fas <?php echo esc_attr($tlh_mobile_icon); ?>"></i>
										</div>
										<div class="contact-info">
											<p class="text">
												<span><?php echo esc_html($tlh_mobile_title); ?></span>
												<a href="tel:<?php echo esc_attr(str_replace(' ','',$tlh_mobile_number)); ?>">
													<?php echo esc_html($tlh_mobile_number); ?>
												</a>
											</p>
										</div>
									</div>
								</aside>
							<?php endif; ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php  
	}
}
add_action( 'corpex_above_hdr', 'corpex_above_hdr' );


/**
 * Corpex Bottom Header 
 */
if ( ! function_exists( 'corpex_bottom_hdr' ) ) {
	function corpex_bottom_hdr() {
		$hide_show_office_hours_details = get_theme_mod( 'hide_show_office_hours_details','1'); 
		$tlh_office_hours_icon 		= get_theme_mod( 'tlh_office_hours_icon','fa-clock');
		$tlh_office_hours_title 	= get_theme_mod( 'tlh_office_hours_title',__('Opening Hour:','clever-fox'));
		$tlh_office_hours 			= get_theme_mod( 'tlh_office_hours',__('Mon-Sat 9:00am To 8:00pm','clever-fox'));
		
		$corpex_theme =  wp_get_theme();
		?>
		<div class="header-bottom">
            <div class="container">
               <?php if($corpex_theme->name == 'Corpex') {echo '<div class="bg-head-bottom">'; } ?>
                    <div class="row">
                        <div class="col-lg-6">
							<?php 								
								$hide_show_hiring_details 	= get_theme_mod( 'hide_show_hiring_details','1'); 
								$tlh_hiring_title 			= get_theme_mod( 'tlh_hiring_title',__('Hiring:','clever-fox'));
								$tlh_hiring_text_slider 		= get_theme_mod( 'tlh_hiring_text_slider',__('Lorem Ipsum is simply dummy text., Lorem Ipsum is simply dummy text., Lorem Ipsum is simply dummy text.','clever-fox'));
								if($hide_show_hiring_details=='1'){ 
							?>
								<aside class="widget widget-contact">
									<div class="contact-area">
										<div class="contact-icon">
											<i class="fa fa-bullhorn"></i>
										</div>
										<div class="contact-info">
											<div class="text">
												<?php if(!empty($tlh_hiring_title)){ ?>
													<span class="title">
														<?php echo esc_html($tlh_hiring_title); ?>
													</span>
												<?php } ?>
											
												<?php if(!empty($tlh_hiring_text_slider)){ 
													$slide_text	= explode(',',$tlh_hiring_text_slider);
												?>
													<div id="textcarouselExample" class="carousel slide" data-bs-ride="carousel">
														<div class="carousel-inner">
															<?php 
															$count = 1;
															foreach($slide_text as $text_slide){ 
																$active_class = ($count==1)?'active':'';
															?>
																<div class="carousel-item <?php echo esc_attr($active_class); ?>">
																	<span><?php echo esc_html($text_slide); ?></span>
																</div>
															<?php $count++; } ?>
														</div>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</aside>
							<?php } ?>
                        </div>
                        <div class="col-lg-6 text-end">
                            <?php if($hide_show_office_hours_details =='1' && !empty($tlh_office_hours)): ?>									
								<aside class="widget widget-contact">
									<div class="contact-area">
										<div class="contact-icon">
											<i class="fas <?php echo esc_attr($tlh_office_hours_icon); ?>"></i>
										</div>
										<div class="contact-info">
											<p class="text">
												<span><?php echo esc_html($tlh_office_hours_title); ?></span>
												<span><?php echo esc_html($tlh_office_hours); ?></span>
											</p>
										</div>
									</div>
								</aside>
							<?php endif; ?>
                        </div>
                    </div>
           <?php if($corpex_theme->name == 'Corpex') {echo '</div>';} ?>
            </div>
        </div>
	<?php  
	}
}
add_action( 'corpex_bottom_hdr', 'corpex_bottom_hdr' );

function corpex_get_info_default() {
	return apply_filters(
		'corpex_get_info_default', wp_json_encode(
			array(
				array(
					'icon_value'      => 'fa-users',
					'title'           => esc_html__( 'Services', 'clever-fox' ),
					'text'            => esc_html__( 'We Have Trusted Customers', 'clever-fox' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_info_001',					
				),
				
				array(
					'icon_value'      => 'fa-headphones',
					'title'           => esc_html__( '24/7 Support', 'clever-fox' ),
					'text'            => esc_html__( '7097597570', 'clever-fox' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_info_002',					
				),
				
				array(
					'icon_value'      => 'fa-trophy',
					'title'           => esc_html__( 'Experienced', 'clever-fox' ),
					'text'            => esc_html__( '10 Year Of Experience', 'clever-fox' ),
					'link'            => '#',
					'id'              => 'customizer_repeater_info_003',					
				)
			)
		)
	);
}

/*
 *
 * Social Icon
 */
function corpex_get_social_icon_default() {
	return apply_filters(
		'corpex_get_social_icon_default', wp_json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-google-plus', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_header_social_002',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-linkedin', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_header_social_004',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-behance', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_header_social_005',
				)
			)
		)
	);
}

if ( ! function_exists( 'blog_header_content' ) ){
	function blog_header_content() {
	
	/* Blog Header */
	$blog_title 			= get_theme_mod('blog_title',__('Our <span>Blog</span>','clever-fox'));
	$blog_description 		= get_theme_mod('blog_description',__('There are many variations of passages of Lorem Ipsum available','clever-fox'));
	if(!empty($blog_title) || !empty($blog_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($blog_title)): ?>
					<h2 class="section-title-heading">
						<?php echo wp_kses_post($blog_title); ?>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($blog_description)): ?>
					<p>
						<?php echo esc_html($blog_description); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php }
}
add_action( 'blog_header_content', 'blog_header_content' );

/*
 *
 * Team Default
 */
 function corpex_get_team_default() {
	return apply_filters(
		'corpex_get_team_default', wp_json_encode(
			array(
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/team/team-1.jpg'),
					'title'           => esc_html__( 'Evelyn Rack', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Developer','clever-fox' ),
					'id'              => 'customizer_repeater_team_0001',	
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_001',
								'link' => 'instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_002',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_003',
								'link' => 'pinterest.com',
								'icon' => 'fa-pinterest',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_004',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							)
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/team/team-2.jpg'),
					'title'           => esc_html__( 'Sophie Baker', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Designer','clever-fox' ),
					'id'              => 'customizer_repeater_team_0002',	
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_005',
								'link' => 'instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_006',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_007',
								'link' => 'pinterest.com',
								'icon' => 'fa-pinterest',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_008',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							)
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/team/team-3.jpg'),
					'title'           => esc_html__( 'Ava Robinson', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Marketing','clever-fox' ),
					'id'              => 'customizer_repeater_team_0003',	
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_009',
								'link' => 'instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_010',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_011',
								'link' => 'pinterest.com',
								'icon' => 'fa-pinterest',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_012',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							)
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/team/team-4.jpg'),
					'title'           => esc_html__( 'Benjamin White', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Sr. Developer','clever-fox' ),
					'id'              => 'customizer_repeater_team_0004',	
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_013',
								'link' => 'instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_014',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_015',
								'link' => 'pinterest.com',
								'icon' => 'fa-pinterest',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_016',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							)
						)
					),
				)
				
			)
		)
	);
}


/*
 *
 * Funfact Default
 */
function corpex_get_funfact_default() {
	return apply_filters(
		'corpex_get_funfact_default', wp_json_encode(
			array(
				array(
					
					'title'         => esc_html__( 'Speakers', 'clever-fox' ),
					'text'          => esc_html__( '45', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_001',
				),
				array(
					'title'         => esc_html__( 'Sponsors', 'clever-fox' ),
					'text'          => esc_html__( '95', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_002',
				),
				array(
					'title'        	=> esc_html__( 'Clients', 'clever-fox' ),
					'subtitle'      => esc_html__( '23', 'clever-fox' ),
					'text'         	=> esc_html__( '80', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_003',				
				),
				array(
					'title'        	=> esc_html__( 'Projects', 'clever-fox' ),
					'text'         	=> esc_html__( '98', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_004',				
				),
				
			)
		)
	);
}

/*
 *
 * Testimonial Default
 */
 function corpex_get_testimonial_default() {
	return apply_filters(
		'corpex_get_testimonial_default', wp_json_encode(
				 array(
				array(
					'image_url'      => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/testimonial/t-1.jpg'),
					'title'          => esc_html__( 'Mike Williams', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Marketing Manager', 'clever-fox' ),
					'subtitle2'      => 'Our Awesome Clients Review <span class="primary_color">For Inspiration</span>',
					'text'           => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut tenetur ad earum consequuntur libero incidunt!', 'clever-fox' ),
					'id'             => 'customizer_repeater_testimonial_001',
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/testimonial/t-2.jpg'),
					'title'          => esc_html__( 'Mike Williams', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Marketing Manager', 'clever-fox' ),
					'subtitle2'      => 'Our Awesome Clients Review <span class="primary_color">For Inspiration</span>',
					'text'           => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut tenetur ad earum consequuntur libero incidunt!', 'clever-fox' ),
					'id'              => 'customizer_repeater_testimonial_002',
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/testimonial/t-3.jpg'),
					'title'          => esc_html__( 'Mike Williams', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Marketing Manager', 'clever-fox' ),
					'subtitle2'      => 'Our Awesome Clients Review <span class="primary_color">For Inspiration</span>',
					'text'           => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut tenetur ad earum consequuntur libero incidunt!', 'clever-fox' ),
					'id'              => 'customizer_repeater_testimonial_003',
				),
			)
		)
	);
}