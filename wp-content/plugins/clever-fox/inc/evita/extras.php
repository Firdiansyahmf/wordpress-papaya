<?php
/**
 * Eduvert Above Header Social
 */
if ( ! function_exists( 'eduvert_abv_hdr_social' ) ) {
	function eduvert_abv_hdr_social() {
		//above_header_first
		$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
		$social_icons 				= get_theme_mod( 'social_icons',eduvert_get_social_icon_default());	
		
				 if($hide_show_social_icon == '1') { ?>
					<li>
						<div class="widget-left text-nt-left text-center">
							<aside class="widget widget-social-widget">
								<ul>
									<?php
										$social_icons = json_decode($social_icons);
										if( $social_icons!='' )
										{
										foreach($social_icons as $social_item){	
										$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'eduvert_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
										$social_link = ! empty( $social_item->link ) ? apply_filters( 'eduvert_translate_single_string', $social_item->link, 'Header section' ) : '';
									?>
										<li><a class="<?php echo esc_attr(substr(str_replace("-","",$social_icon),2)); ?>" href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
									<?php }} ?>
								</ul>
							</aside>
						</div>
					</li>
				<?php } 
	}
}
add_action( 'eduvert_abv_hdr_social', 'eduvert_abv_hdr_social' );

/*
 *
 * Social Icon
 */
function eduvert_get_social_icon_default() {
	return apply_filters(
		'eduvert_get_social_icon_default', wp_json_encode(
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
				)
			)
		)
	);
}


/*
 *
 * Slider Default
 */
function evita_get_slider_default() {
	return apply_filters(
		'evita_get_slider_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=>  CLEVERFOX_PLUGIN_URL .'inc/evita/images/slider/slide01.png',
					'title'           	=> esc_html__( 'We Care About you', 'clever-fox' ),
					'subtitle'         	=> esc_html__( 'Health Care', 'clever-fox' ),
					'text'            	=> esc_html__( 'It is a long established fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem ipsum', 'clever-fox' ),
					'text2'	  			=>  esc_html__( 'Get Started', 'clever-fox' ),
					'link2'	  			=>  esc_html__( '#', 'clever-fox' ),
					'video_url'	  		=>  'https://www.youtube.com/watch?v=D0UnqGm_miA',
					'slide_align' 		=> 'left', 
					'id'              	=> 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL .'inc/evita/images/slider/slide02.png',
					'title'           	=> esc_html__( 'We Care About you', 'clever-fox' ),
					'subtitle'         	=> esc_html__( 'Health Care', 'clever-fox' ),
					'text'            	=> esc_html__( 'It is a long established fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem ipsum', 'clever-fox' ),
					'text2'	  			=>  esc_html__( 'Get Started', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'video_url'	  		=>  'https://www.youtube.com/watch?v=D0UnqGm_miA',
					'slide_align' 		=> 'center', 
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'      	=> CLEVERFOX_PLUGIN_URL .'inc/evita/images/slider/slide03.png',
					'title'           	=> esc_html__( 'We Care About you', 'clever-fox' ),
					'subtitle'         	=> esc_html__( 'Health Care', 'clever-fox' ),
					'text'            	=> esc_html__( 'It is a long established fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem ipsum', 'clever-fox' ),
					'text2'	  			=>  esc_html__( 'Get Started', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'video_url'	  		=>  'https://www.youtube.com/watch?v=D0UnqGm_miA',
					'slide_align' 		=> 'right', 
					'id'              => 'customizer_repeater_slider_003',
				),
			)
		)
	);
}


/*
 *
 * Course Category Default
 */
 function eduvert_get_course_cat_default() {
	return apply_filters(
		'eduvert_get_course_cat_default', wp_json_encode(
				 array(
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL .'inc/eduvert/images/categorie/Image.png',
					'title'           => esc_html__( 'All Courses', 'clever-fox' ),
					'subtitle'         => esc_html__( '14 course', 'clever-fox' ),
					'text'         => esc_html__( 'There are many variations of passages of Lorem Ipsum available', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_course_cat_001',
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL .'inc/eduvert/images/categorie/Image-1.png',
					'title'           => esc_html__( 'Business Course', 'clever-fox' ),
					'subtitle'         => esc_html__( '4 course', 'clever-fox' ),
					'text'         => esc_html__( 'There are many variations of passages of Lorem Ipsum available', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_course_cat_002',
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL .'inc/eduvert/images/categorie/Image-2.png',
					'title'           => esc_html__( 'Graphics Design', 'clever-fox' ),
					'subtitle'         => esc_html__( '7 course', 'clever-fox' ),
					'text'         => esc_html__( 'There are many variations of passages of Lorem Ipsum available', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_course_cat_003',
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL .'inc/eduvert/images/categorie/Image-3.png',
					'title'           => esc_html__( 'Web Developer', 'clever-fox' ),
					'subtitle'         => esc_html__( '6 course', 'clever-fox' ),
					'text'         => esc_html__( 'There are many variations of passages of Lorem Ipsum available', 'clever-fox' ),
					'link'	  =>  esc_html__( '#', 'clever-fox' ),
					'id'              => 'customizer_repeater_course_cat_004',
				)
			)
		)
	);
}


/*
 *
 * Funfact Default
 */
 function eduvert_get_funfact_default() {
	return apply_filters(
		'eduvert_get_funfact_default', wp_json_encode(
				 array(
				array(
					'icon_value'       => 'fa-user',
					'title'           => esc_html__( '786', 'clever-fox' ),
					'subtitle'           => esc_html__( 'K', 'clever-fox' ),
					'text'            => esc_html__( 'Happy Students', 'clever-fox' ),
					'id'              => 'customizer_repeater_funfact_001'					
				),
				array(
					'icon_value'       => 'fa-calendar-plus-o',
					'title'           => esc_html__( '25', 'clever-fox' ),
					'subtitle'           => esc_html__( '+', 'clever-fox' ),
					'text'            => esc_html__( 'Our Experience', 'clever-fox' ),
					'id'              => 'customizer_repeater_funfact_002'
				),
				array(
					'icon_value'       => 'fa-trophy',
					'title'           => esc_html__( '456', 'clever-fox' ),
					'subtitle'           => esc_html__( '+', 'clever-fox' ),
					'text'            => esc_html__( 'Award Earned', 'clever-fox' ),
					'id'              => 'customizer_repeater_funfact_003'
				),
				array(
					'icon_value'       => 'fa-star',
					'title'           => esc_html__( '4.5', 'clever-fox' ),
					'subtitle'           => esc_html__( 'K', 'clever-fox' ),
					'text'            => esc_html__( 'Student Review', 'clever-fox' ),
					'id'              => 'customizer_repeater_funfact_004'
				),
			)
		)
	);
}


/*
 *
 * Achivement Default
 */
function evita_get_achivement_default() {
	return apply_filters(
		'evita_get_achivement_default', wp_json_encode(
				 array(
				array(
					'title'           	=> esc_html__( 'Digital Products', 'clever-fox' ),
					'subtitle'          => esc_html__( '121', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_achivement_001',
					
				),
				array(
					'title'           => esc_html__( 'Award Winners', 'clever-fox' ),
					'subtitle'        => esc_html__( '786', 'clever-fox' ),
					'id'              => 'customizer_repeater_achivement_002',
				
				),
				array(
					'title'           => esc_html__( 'Happy Customer', 'clever-fox' ),
					'subtitle'        => esc_html__( '298', 'clever-fox' ),
					'id'              => 'customizer_repeater_achivement_003',
			
				),
			)
		)
	);
}

/*
 *
 * Social Icon
 */
function evita_get_about_social_icon_default() {
	return apply_filters(
		'evita_get_about_social_icon_default', wp_json_encode(
				 array(
				array(
					'icon_value'	  	=>  esc_html__( 'fa-behance', 'clever-fox' ),
					'title'	  		  	=>  esc_html__( 'Behance Account', 'clever-fox' ),
					'subtitle'	  	  	=>  esc_html__( 'Please Check My Portfolio', 'clever-fox' ),
					'text2'	  		  	=>  esc_html__( 'Check Portfolio', 'clever-fox' ),
					'link'	  		  	=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_header_about_social_001',
				),
				array(
					'icon_value'	  	=>  esc_html__( 'fa-pinterest-p', 'clever-fox' ),
					'title'	  		  	=>  esc_html__( 'Pinterest Account', 'clever-fox' ),
					'subtitle'	  	  	=>  esc_html__( 'Please Check My Portfolio', 'clever-fox' ),
					'text2'	  		  	=>  esc_html__( 'Check Portfolio', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_header_about_social_002',
				),
				array(
					'icon_value'	  	=>  esc_html__( 'fa-dribbble', 'clever-fox' ),
					'title'	  		  	=>  esc_html__( 'Dribble Account', 'clever-fox' ),
					'subtitle'	  	  	=>  esc_html__( 'Please Check My Portfolio', 'clever-fox' ),
					'text2'	  		  	=>  esc_html__( 'Check Portfolio', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_header_about_social_003',
				),
				array(
					'icon_value'	  	=>  esc_html__( 'fa-skype', 'clever-fox' ),
					'title'	  		  	=>  esc_html__( 'Skype Account', 'clever-fox' ),
					'subtitle'	  	  	=>  esc_html__( 'Please Check My Portfolio', 'clever-fox' ),
					'text2'	  		  	=>  esc_html__( 'Check Portfolio', 'clever-fox' ),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_header_about_social_004',
				)
			)
		)
	);
}


/*
 *
 * Service Default
 */
function evita_get_service_default() {
	return apply_filters(
		'evita_get_service_default', wp_json_encode(
			array(
				array(
					'icon_value'   => 'fa-cube',	
					'title'        => esc_html__( 'Motion Graphic', 'clever-fox' ),
					'text'         => esc_html__( 'There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_001',
				),
				array(
					'icon_value'   => 'fa-paint-brush',	
					'title'        => esc_html__( 'UI/UX Design', 'clever-fox' ),
					'text'         => esc_html__( 'There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_002',
				),
				array(
					'icon_value'   => 'fa-laptop',	
					'title'        => esc_html__( 'Web Developer', 'clever-fox' ),
					'text'         => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, eius!', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_003',
				)
			)
		)
	);
}
