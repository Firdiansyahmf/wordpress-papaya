<?php
function corpex_project_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Project  Section
	=========================================*/
	$wp_customize->add_section(
		'project_setting', array(
			'title' => esc_html__( 'Project Section', 'clever-fox' ),
			'priority' => 5,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	//Project Documentation Link
	class WP_project_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add project section :</h3>
			<p>Frontpage Section > project Section <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Project Doc Link // 
	$wp_customize->add_setting( 
		'project_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_project_Customize_Control($wp_customize,
	'project_doc_link' , 
		array(
			'label'          => __( 'Project Documentation Link', 'clever-fox' ),
			'section'        => 'project_setting',
			'type'           => 'radio',
			'description'    => __( 'Project Documentation Link', 'clever-fox' ), 
		) 
	) );


	// Settings
	$wp_customize->add_setting(
		'project_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'project_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','clever-fox'),
			'section' => 'project_setting',
		)
	);
	
	// Project Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_portfolio' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_portfolio', 
		array(
			'label'	      => esc_html__( 'Hide / Show Portfolio', 'clever-fox' ),
			'section'     => 'project_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Project Tab Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_project_tab' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_project_tab', 
		array(
			'label'	      => esc_html__( 'Hide / Show Filter Tab', 'clever-fox' ),
			'section'     => 'project_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Project Header Section // 
	$wp_customize->add_setting(
		'project_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'project_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'project_setting',
		)
	);
	
	// Project Title // 
	$wp_customize->add_setting(
    	'project_title',
    	array(
	        'default'			=> 'Our <span>Portfolio</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'project_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'project_setting',
			'type'           => 'text',
		)  
	);
	
	// Project Description // 
	$wp_customize->add_setting(
    	'project_desc',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'project_desc',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'project_setting',
			'type'           => 'textarea',
		)  
	);

	// Project content Section // 
	
	$wp_customize->add_setting(
		'project_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'project_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'project_setting',
		)
	);
	
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'project_display_num',
			array(
				'default' => '10',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'corpex_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'project_display_num', 
			array(
				'label'      => __( 'No. of Project Display', 'clever-fox' ),
				'section'  => 'project_setting',
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

add_action( 'customize_register', 'corpex_project_setting' );

// project selective refresh
function corpex_home_project_section_partials( $wp_customize ){	
	// project title
	$wp_customize->selective_refresh->add_partial( 'project_title', array(
		'selector'            => '.portfolio-home .section-title h2',
		'settings'            => 'project_title',
		'render_callback'  => 'corpex_project_title_render_callback',
	) );
	
	// project_subtitle
	$wp_customize->selective_refresh->add_partial( 'project_subtitle', array(
		'selector'            => '.portfolio-home .section-title span',
		'settings'            => 'project_subtitle',
		'render_callback'  => 'corpex_project_subtitle_render_callback',
	) );
	
	// project description
	$wp_customize->selective_refresh->add_partial( 'project_desc', array(
		'selector'            => '.portfolio-home .section-title p',
		'settings'            => 'project_desc',
		'render_callback'  => 'corpex_project_desc_render_callback',
	) );
	
	}

add_action( 'customize_register', 'corpex_home_project_section_partials' );

// project title
function corpex_project_title_render_callback() {
	return get_theme_mod( 'project_title' );
}

// project_subtitle
function corpex_project_subtitle_render_callback() {
	return get_theme_mod( 'project_subtitle' );
}

// project description
function corpex_project_desc_render_callback() {
	return get_theme_mod( 'project_desc' );
}