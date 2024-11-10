<?php
	
/*
	*
 * Slider Default
 */
 
 function accron_get_slider_default() {
	 $theme = wp_get_theme() -> name;
	 if($theme == 'Acronix'){
		 $slide_image = 'item1.png';
	 }else{
		 $slide_image = 'slider-img1.jpg';
	 }
	return apply_filters(
		'accron_get_slider_default', wp_json_encode(
				 array(
				array(
					'image_url'       	=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/accron/images/slider/'.$slide_image),
					'title'           	=> esc_html__('20 Years Of Successful Business Consulting','clever-fox'),
					'subtitle'         	=> esc_html__('Your Business Innovative Strategies For Success','clever-fox'),
					'text2'	  			=>  esc_html__('Our Service','clever-fox'),
					'link'	  			=>  esc_html__( '#', 'clever-fox' ),
					'id'              	=> 'customizer_repeater_slider_001',
				)
			)
		)
	);
}	
	
/*
 *
 * Service Default
*/
function accron_get_service_default() {
	return apply_filters(
		'accron_get_service_default',wp_json_encode(
			array(
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/accron/images/service/service-img1.jpg'),	
					'icon_value'   => 'fa-tags',	
					'title'        => esc_html__( 'Branding Service', 'clever-fox' ),
					'text'        => esc_html__( 'Building Brands', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_001',
				),
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/accron/images/service/service-img2.jpg'),
					'icon_value'   => 'fa-laptop',	
					'title'        => esc_html__( 'Digital Product', 'clever-fox' ),
					'text'        => esc_html__( 'Innovation Redefined', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_002',
				),
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/accron/images/service/service-img3.jpg'),
					'icon_value'   => 'fa-image',	
					'title'        => esc_html__( 'Media Planing', 'clever-fox' ),
					'text'        => esc_html__( 'Media Solution', 'clever-fox' ),
					'text2'         => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_003',
				),
				array(
					'image_url2'   => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/accron/images/service/service-img4.jpg'),
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
function accron_get_features_default() {
	return apply_filters(
		'accron_get_features_default',wp_json_encode(
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
 * Accron Above Header Social
 */
if ( ! function_exists( 'accron_abv_hdr_social' ) ) {
	function accron_abv_hdr_social() {
		//above_header_first
		$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
		$social_icons 				= get_theme_mod( 'social_icons',accron_get_social_icon_default());	
		
				 if($hide_show_social_icon == '1') { ?>
					<aside class="widget widget_social_widget">
						<ul>
							<?php
								$social_icons = json_decode($social_icons);
								if( $social_icons!='' )
								{
								foreach($social_icons as $social_item){	
								$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'accron_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
								$social_link = ! empty( $social_item->link ) ? apply_filters( 'accron_translate_single_string', $social_item->link, 'Header section' ) : '';
							?>
								<li><a href="<?php echo esc_url( $social_link ); ?>" class="social-icon"><i class="fab <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
							<?php }} ?>
						</ul>
					</aside>
				<?php } 
	}
}
add_action( 'accron_abv_hdr_social', 'accron_abv_hdr_social' );

/*
 *
 * Social Icon
 */
function accron_get_social_icon_default() {
	return apply_filters(
		'accron_get_social_icon_default',wp_json_encode(
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
	$blog_title 			= get_theme_mod('blog_title',__('<span class="primary-color">What</span> People Writes','clever-fox'));
	$blog_subttl 			= get_theme_mod('blog_subtitle',__('Outstanding Blog','clever-fox'));
	$blog_description 		= get_theme_mod('blog_description',__('Discover key strategies for managing remote teams effectively.','clever-fox'));
?>

		<?php if(!empty($blog_title)  || !empty($blog_subttl) || !empty($blog_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($blog_title)): ?>
					<h2 class="section-title-heading">
						<?php echo wp_kses_post($blog_title); ?>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($blog_subttl)): ?>
					<span class="sub-title">
						<?php echo esc_html($blog_subttl); ?>
					</span>
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