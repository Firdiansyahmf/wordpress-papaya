<?php
function corpex_testimonial_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Team  Section
	=========================================*/
	$wp_customize->add_section(
		'testimonial_setting', array(
			'title' => esc_html__( 'Testimonial Section', 'clever-fox' ),
			'priority' => 15,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	//Testimonial Documentation Link
	class WP_testimonial_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('How to add testimonial section :','clever-fox'); ?></h3>
			<p><?php esc_html_e('Frontpage Section > testimonial Section','clever-fox'); ?> <br><br> <?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:rgba(223, 69, 44, 1); color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
		<?php
	   }
	}
	
	// Testimonial Doc Link // 
	$wp_customize->add_setting( 
		'testimonial_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_testimonial_Customize_Control($wp_customize,
	'testimonial_doc_link' , 
		array(
			'label'          => __( 'Testimonial Documentation Link', 'clever-fox' ),
			'section'        => 'testimonial_setting',
			'type'           => 'radio',
			'description'    => __( 'Testimonial Documentation Link', 'clever-fox' ), 
		) 
	) );

	/*=========================================
	Testimonial Section
	=========================================*/
	// Head
	$wp_customize->add_setting(
		'testimonial_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 31,
		)
	);

	$wp_customize->add_control(
	'testimonial_headings',
		array(
			'type' => 'hidden',
			'label' => __('Testimonial Section','clever-fox'),
			'section' => 'testimonial_setting',
		)
	);
	
	// Hide/ Show  // 
	$wp_customize->add_setting( 
		'hs_testimonial' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 32,
		) 
	);
	
	$wp_customize->add_control(
	'hs_testimonial', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'clever-fox' ),
			'section'     => 'testimonial_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Title // 
	$wp_customize->add_setting(
    	'testimonial_ttl',
    	array(
	        'default'			=> 'Our <span>Testimonial</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 33,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_ttl',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	
	// Testimonial Description // 
	$wp_customize->add_setting(
    	'testimonial_description',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'textarea',
		)  
	);
	
	$wp_customize->add_setting( 
    	'testimonial_bg_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/shapes/shape-4.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'testimonial_bg_image' ,
		array(
			'label'          => __( 'Background Image', 'clever-fox' ),
			'section'        => 'testimonial_setting',
		) 
	));
	
	$wp_customize->add_setting( 
		'testimonial_bg_position' , 
			array(
			'default' => 'fixed',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_select',
			'priority' => 15,
		) 
	);
	
	$wp_customize->add_control(
		'testimonial_bg_position' , 
			array(
				'label'          => __( 'Image Position', 'clever-fox' ),
				'section'        => 'testimonial_setting',
				'type'           => 'radio',
				'choices'        => 
				array(
					'fixed'=> __( 'Fixed', 'clever-fox' ),
					'scroll' => __( 'Scroll', 'clever-fox' )
			)  
		) 
	);
	
	/**
	 * Customizer Repeater for add Testimonial
	 */
	
		$wp_customize->add_setting( 'testimonial_contents', 
			array(
			 'sanitize_callback' => 'corpex_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 35,
			 'default' => corpex_get_testimonial_default()
			)
		);
		
		$wp_customize->add_control( 
			new corpex_Repeater( $wp_customize, 
				'testimonial_contents', 
					array(
						'label'   => esc_html__('Testimonial','clever-fox'),
						'section' => 'testimonial_setting',
						'add_field_label'                   => esc_html__( 'Add New Testimonial', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Testimonial', 'clever-fox' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);
	
	//Pro feature
		class Corpex_testimonial__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_testimonial_upgrade_section up-to-pro" href="https://www.nayrathemes.com/corpex-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'testimonial_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'corpex_sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Corpex_testimonial__section_upgrade(
			$wp_customize,
			'testimonial_upgrade_to_pro',
				array(
					'section'	=> 'testimonial_setting',
				)
			)
		);
}

add_action( 'customize_register', 'corpex_testimonial_setting' );

// team selective refresh
function corpex_home_testimonial_section_partials( $wp_customize ){	
	// testimonial_ttl
	$wp_customize->selective_refresh->add_partial( 'testimonial_ttl', array(
		'selector'            => '.home-testimonial .section-title h2',
		'settings'            => 'testimonial_ttl',
		'render_callback'  => 'corpex_testimonial_ttl_render_callback',	
	) );
	
	// testimonial_description
	$wp_customize->selective_refresh->add_partial( 'testimonial_description', array(
		'selector'            => '.home-testimonial .section-title p',
		'settings'            => 'testimonial_description',
		'render_callback'  => 'corpex_testimonial_description_render_callback',	
	) );
	
	
	 // testimonial_contents
	$wp_customize->selective_refresh->add_partial( 'testimonial_contents', array(
		'selector'            => '.home-testimonial .testimonial .carousel-inner .testimonial-content .content-heading h2',
	) );
	
}

add_action( 'customize_register', 'corpex_home_testimonial_section_partials' );

// pg_testimonial_ttl
function corpex_testimonial_ttl_render_callback() {
	return get_theme_mod( 'testimonial_ttl' );
}

// testimonial_subttl
function corpex_testimonial_subttl_render_callback() {
	return get_theme_mod( 'testimonial_subttl' );
}
// testimonial_description
function corpex_testimonial_description_render_callback() {
	return get_theme_mod( 'testimonial_description' );
}