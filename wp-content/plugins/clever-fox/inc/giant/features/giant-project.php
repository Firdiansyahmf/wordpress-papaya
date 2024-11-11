<?php
function giant_project_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Project  Section
	=========================================*/
	$wp_customize->add_section(
		'project_setting', array(
			'title' => esc_html__( 'Project Section', 'clever-fox' ),
			'priority' => 4,
			'panel' => 'giant_frontpage_sections',
		)
	);

	//Project Documentation Link
	class WP_project_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add project section :</h3>
			<p>Frontpage Section > project Section <br><br> <a href="#" style="background-color:#03c281; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
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
			'sanitize_callback' => 'giant_sanitize_text',
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
	
	// Project Tab Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_project_tab' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'giant_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_project_tab', 
		array(
			'label'	      => esc_html__( 'Hide / Show', 'clever-fox' ),
			'section'     => 'project_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Project Header Section // 
	$wp_customize->add_setting(
		'project_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
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
	        'default'			=> 'Portfolio',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_html',
			'transport'         => $selective_refresh,
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
	        'default'			=> __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_html',
			'transport'         => $selective_refresh,
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
	
}

add_action( 'customize_register', 'giant_project_setting' );

// project selective refresh
function giant_home_project_section_partials( $wp_customize ){	
	// project title
	$wp_customize->selective_refresh->add_partial( 'project_title', array(
		'selector'            => '.portfolio-section .section-title h2.maintitle',
		'settings'            => 'project_title',
		'render_callback'  => 'giant_project_title_render_callback',
	) );
	
	// project description
	$wp_customize->selective_refresh->add_partial( 'project_desc', array(
		'selector'            => '.portfolio-section .section-title p',
		'settings'            => 'project_desc',
		'render_callback'  => 'giant_project_desc_render_callback',
	) );
	
	}

add_action( 'customize_register', 'giant_home_project_section_partials' );

// project title
function giant_project_title_render_callback() {
	return get_theme_mod( 'project_title' );
}

// project_subtitle
function giant_project_subtitle_render_callback() {
	return get_theme_mod( 'project_subtitle' );
}

// project description
function giant_project_desc_render_callback() {
	return get_theme_mod( 'project_desc' );
}