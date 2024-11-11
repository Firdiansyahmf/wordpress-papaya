<?php
function corpex_pricing_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Pricing  Section
	=========================================*/
	$wp_customize->add_section(
		'pricing_setting', array(
			'title' => esc_html__( 'Pricing Section', 'clever-fox' ),
			'priority' => 7,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	//Pricing Documentation Link
	class WP_pricing_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add pricing section :</h3>
			<p>Frontpage Section > pricing Section <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Project Doc Link // 
	$wp_customize->add_setting( 
		'pricing_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_pricing_Customize_Control($wp_customize,
	'pricing_doc_link' , 
		array(
			'label'          => __( 'Pricing Documentation Link', 'clever-fox' ),
			'section'        => 'pricing_setting',
			'type'           => 'radio',
			'description'    => __( 'Pricing Documentation Link', 'clever-fox' ), 
		) 
	) );

	$wp_customize->add_control(
	'pricing_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'pricing_setting',
		)
	);
	
	
	// Pricing Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_pricing' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_pricing', 
		array(
			'label'	      => esc_html__( 'Hide / Show Pricing', 'clever-fox' ),
			'section'     => 'pricing_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Pricing Title // 
	$wp_customize->add_setting(
    	'pricing_title',
    	array(
	        'default'			=> __('Our <span>Pricing</span>','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	
	// Pricing Description // 
	$wp_customize->add_setting(
    	'pricing_description',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'pricing_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'pricing_setting',
			'type'           => 'text',
		)  
	);
	
	$wp_customize->add_setting( 
    	'pricing_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/shapes/shape2.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'pricing_image' ,
		array(
			'label'          => __( 'Image', 'clever-fox' ),
			'section'        => 'pricing_setting',
		) 
	));
	
	
	
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'pricing_display_num',
			array(
				'default' => '10',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'corpex_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'pricing_display_num', 
			array(
				'label'      => __( 'No. of Pricing Display', 'clever-fox' ),
				'section'  => 'pricing_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 1,
							'max'           => 100,
							'step'          => 1,
							'default_value' => 10,
						),
					),
			) ) 
		);
	}
}

add_action( 'customize_register', 'corpex_pricing_setting' );

// pricing selective refresh
function corpex_home_pricing_section_partials( $wp_customize ){	
	// pricing title
	$wp_customize->selective_refresh->add_partial( 'pricing_title', array(
		'selector'            => '.pricing-home .section-title h2',
		'settings'            => 'pricing_title',
		'render_callback'  => 'corpex_pricing_title_render_callback',
	) );
	
	// pricing_description
	$wp_customize->selective_refresh->add_partial( 'pricing_description', array(
		'selector'            => '.pricing-home .section-title p',
		'settings'            => 'pricing_description',
		'render_callback'  => 'corpex_pricing_description_render_callback',
	) );
	}

add_action( 'customize_register', 'corpex_home_pricing_section_partials' );

// pricing title
function corpex_pricing_title_render_callback() {
	return get_theme_mod( 'pricing_title' );
}
// pricing_description
function corpex_pricing_description_render_callback() {
	return get_theme_mod( 'pricing_description' );
}