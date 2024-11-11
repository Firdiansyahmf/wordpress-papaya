<?php
function corpex_faq_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Faq  Section
	=========================================*/
	$wp_customize->add_section(
		'faq_setting', array(
			'title' => esc_html__( 'Faq Section', 'clever-fox' ),
			'priority' => 5,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	//Faq Documentation Link
	class WP_faq_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add faq section :</h3>
			<p>Frontpage Section > faq Section <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Faq Doc Link // 
	$wp_customize->add_setting( 
		'faq_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_faq_Customize_Control($wp_customize,
	'faq_doc_link' , 
		array(
			'label'          => __( 'Faq Documentation Link', 'clever-fox' ),
			'section'        => 'faq_setting',
			'type'           => 'radio',
			'description'    => __( 'Faq Documentation Link', 'clever-fox' ), 
		) 
	) );


	// Settings
	$wp_customize->add_setting(
		'faq_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'faq_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','clever-fox'),
			'section' => 'faq_setting',
		)
	);
	
	// Faq Tab Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_faq' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_faq', 
		array(
			'label'	      => esc_html__( 'Hide / Show Faq', 'clever-fox' ),
			'section'     => 'faq_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Faq Header Section // 
	$wp_customize->add_setting(
		'faq_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'faq_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'faq_setting',
		)
	);
	
	// Faq Title // 
	$wp_customize->add_setting(
    	'faq_title',
    	array(
	        'default'			=> 'Our <span>Faq</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'faq_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'faq_setting',
			'type'           => 'text',
		)  
	);
	
	// Faq Description // 
	$wp_customize->add_setting(
    	'faq_desc',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'faq_desc',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'faq_setting',
			'type'           => 'textarea',
		)  
	);
	
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'faq_display_num',
			array(
				'default' => '10',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'corpex_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'faq_display_num', 
			array(
				'label'      => __( 'No. of Faq Display', 'clever-fox' ),
				'section'  => 'faq_setting',
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

add_action( 'customize_register', 'corpex_faq_setting' );

// faq selective refresh
function corpex_home_faq_section_partials( $wp_customize ){	
	// faq title
	$wp_customize->selective_refresh->add_partial( 'faq_title', array(
		'selector'            => '.faq-section.pricing-faq .section-title h2',
		'settings'            => 'faq_title',
		'render_callback'  => 'corpex_faq_title_render_callback',
	) );
	
	// faq description
	$wp_customize->selective_refresh->add_partial( 'faq_desc', array(
		'selector'            => '.faq-section.pricing-faq .section-title p',
		'settings'            => 'faq_desc',
		'render_callback'  => 'corpex_faq_desc_render_callback',
	) );
	
	}

add_action( 'customize_register', 'corpex_home_faq_section_partials' );

// faq title
function corpex_faq_title_render_callback() {
	return get_theme_mod( 'faq_title' );
}

// faq description
function corpex_faq_desc_render_callback() {
	return get_theme_mod( 'faq_desc' );
}