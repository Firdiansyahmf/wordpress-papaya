<?php
	
/*
	*
 * Slider Default
 */
 
 function giant_get_slider_default() {
/* 	 $theme = wp_get_theme() -> name;
	 if($theme == 'Acronix'){
		 $slide_image = 'item1.png';
	 }else{
		 $slide_image = 'slider-img1.jpg';
	 } */
	return apply_filters(
		'giant_get_slider_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/slider/slide-img1.jpg'),
					'title'           	=> esc_html__('Perfact IT Solution For Your Business','clever-fox'),
					'subtitle'         	=> esc_html__('Strategic Business Consulting','clever-fox'),
					'text2'	  			=>  esc_html__('Read More','clever-fox'),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/slider/slide-img2.jpg'),
					'title'           	=> esc_html__('Perfact IT Solution For Your Business','clever-fox'),
					'subtitle'         	=> esc_html__('Your Business Innovative Strategies','clever-fox'),
					'text2'	  			=>  esc_html__('Read More','clever-fox'),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/slider/slide-img3.jpg'),
					'title'           	=> esc_html__('Perfact IT Solution For Your Business','clever-fox'),
					'subtitle'         	=> esc_html__('Strategic Business Consulting','clever-fox'),
					'text2'	  			=>  esc_html__('Read More','clever-fox'),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_slider_003',
				)
			)
		)
	);
}	

/*
 *
 * Info Default
 */
 function giant_get_info_default() {
	return apply_filters(
		'giant_get_info_default', json_encode(
			array(
				array(
					'title'           	=> esc_html__( 'Email Address', 'clever-fox' ),
					'text2'	  			=>  esc_html__( 'email@example.com', 'clever-fox' ),
					'icon_value'      => 'fa-envelope',
					'id'              	=> 'customizer_repeater_info_001',
				),
				array(
					'title'           	=> esc_html__( 'Customer Support', 'clever-fox' ),
					'text2'	  			=>  esc_html__( '70 975 975 70', 'clever-fox' ),
					'icon_value'      => 'fa-life-ring',
					'id'              => 'customizer_repeater_info_002',
				),
				array(
					'title'           	=> esc_html__( 'Office Address', 'clever-fox' ),
					'text2'	  			=>  esc_html__( 'Califonia Floor, USA 125', 'clever-fox' ),
					'icon_value'      => 'fa-map-marker-alt',
					'id'              => 'customizer_repeater_info_003',
				),
			)
		)
	);
}
	
/*
 *
 * Service Default
*/
function giant_get_service_default() {
	return apply_filters(
		'giant_get_service_default',wp_json_encode(
			array(
				array(	
					'icon_value'   => 'fa-pencil-alt',	
					'title'        => esc_html__( 'Project Development', 'clever-fox' ),
					'text'        => esc_html__( 'Lorem Ipsum is simply dummy text of the.', 'clever-fox' ),
					'text2'         => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_001',
				),
				array(
					'icon_value'   => 'fa-cog',	
					'title'        => esc_html__( 'Software Development', 'clever-fox' ),
					'text'        => esc_html__( 'Lorem Ipsum is simply dummy text of the.', 'clever-fox' ),
					'text2'         => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_002',
				),
				array(
					'icon_value'   => 'fa-list-ul',	
					'title'        => esc_html__( 'Project Management', 'clever-fox' ),
					'text'        => esc_html__( 'Lorem Ipsum is simply dummy text of the.', 'clever-fox' ),
					'text2'         => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_003',
				)
			)
		)
	);
}



/*
 *
 * Features Default
 */
function giant_get_features_default() {
	return apply_filters(
		'giant_get_features_default',wp_json_encode(
				 array(
				array(
					'image_url2'       => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/feature/item1.jpg'),
					'icon_value'        => 'fa-laptop',	
					'title'           	=> esc_html__( 'Website Development', 'clever-fox' ),
					'subtitle'           => esc_html__( 'Development', 'clever-fox' ),
					'text'           	=> esc_html__( 'Express delivery inno service effective logistics solution for delivery
								of small', 'clever-fox' ),
					'text2'           	=> esc_html__( 'Read More', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_001',
				),
				array(
					'image_url2'       => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/feature/item2.jpg'),
					'icon_value'        => 'fa-paint-brush',	
					'title'           	=> esc_html__( 'Graphic Designing', 'clever-fox' ),
					'subtitle'           => esc_html__( 'User Experience', 'clever-fox' ),
					'text'           	=> esc_html__( 'Express delivery inno service effective logistics solution for delivery
								of small', 'clever-fox' ),
					'text2'           	=> esc_html__( 'Read More', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_002',				
				),
				array(
					'image_url2'       => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/feature/item3.jpg'),
					'icon_value'       	=> 'fa-user',	
					'title'            	=> esc_html__( 'Digital Marketing', 'clever-fox' ),
					'subtitle'           => esc_html__( 'Strategy', 'clever-fox' ),
					'text'           	=> esc_html__( 'Express delivery inno service effective logistics solution for delivery
								of small', 'clever-fox' ),
					'text2'           	=> esc_html__( 'Read More', 'clever-fox' ),
					'link'       	  	=> '#',
					'id'               	=> 'customizer_repeater_features_003',
				),
				
			)
		)
	);
}


/*
 *
 * Funfact Default
 */
function giant_get_funfact_default() {
	return apply_filters(
		'giant_get_funfact_default', json_encode(
			array(
				array(
					'icon_value'    => 'fa-briefcase',	
					'title'         => esc_html__( '1656', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'          => esc_html__( 'Completed Projects', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_001',
				),
				array(
					'icon_value'    => 'fa-thumbs-up',	
					'title'         => esc_html__( '1250', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'          => esc_html__( 'Satisfied Clients', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_002',
				),
				array(
					'icon_value'    => 'fa-award',	
					'title'        	=> esc_html__( '30', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'         	=> esc_html__( 'Awards Winner', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_003',				
				),
				array(
					'icon_value'    => 'fa-users',	
					'title'        	=> esc_html__( '155', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'         	=> esc_html__( 'Team Members', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_004',				
				),
				
			)
		)
	);
}


/*
 *
 * Client Default
 */
function giant_get_client_default() {
	return apply_filters(
		'giant_get_client_default', json_encode(
			array(
				array(
					'image_url'     => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/sponsor/image-1.png'),
					'link'       	=> '#',
					'id'            => 'customizer_repeater_client_001',
				),
				array(
					'image_url'     => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/sponsor/image-2.png'),
					'link'          => '#',
					'id'            => 'customizer_repeater_client_002',				
				),
				array(
					'image_url'     => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/sponsor/image-3.png'),
					'link'          => '#',
					'id'            => 'customizer_repeater_client_003',
				),
				array(
					'image_url'     => esc_url(CLEVERFOX_PLUGIN_URL. 'inc/giant/images/sponsor/image-4.png'),
					'link'       	=> '#',
					'id'            => 'customizer_repeater_client_004',
				)
			)
		)
	);
}


/**
 * giant Above Header Social
 */
if ( ! function_exists( 'giant_abv_hdr_social' ) ) {
	function giant_abv_hdr_social() {
		//above_header_first
		$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
		$social_icons 				= get_theme_mod( 'social_icons',giant_get_social_icon_default());	
		
				 if($hide_show_social_icon == '1') { ?>
					<aside class="widget widget_social_widget">
						<ul>
							<?php
								$social_icons = json_decode($social_icons);
								if( $social_icons!='' )
								{
								foreach($social_icons as $social_item){	
								$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'giant_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
								$social_link = ! empty( $social_item->link ) ? apply_filters( 'giant_translate_single_string', $social_item->link, 'Header section' ) : '';
							?>
								<li><a href="<?php echo esc_url( $social_link ); ?>" class="social-icon"><i class="fab <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
							<?php }} ?>
						</ul>
					</aside>
				<?php } 
	}
}
add_action( 'giant_abv_hdr_social', 'giant_abv_hdr_social' ); 

/*
 *
 * Social Icon
 */
function giant_get_social_icon_default() {
	return apply_filters(
		'giant_get_social_icon_default',wp_json_encode(
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
	$blog_title 			= get_theme_mod('blog_title',__('Blog','clever-fox'));
	$blog_description 		= get_theme_mod('blog_description',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!.','clever-fox'));
?>

		<?php if(!empty($blog_title)  || !empty($blog_subttl) || !empty($blog_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($blog_title)): ?>					
					<h2 class="maintitle">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);" class="desg1"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
						
							<span><?php echo wp_kses_post($blog_title); ?></span>
						
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
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