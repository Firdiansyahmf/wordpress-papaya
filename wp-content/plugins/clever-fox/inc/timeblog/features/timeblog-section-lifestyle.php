<?php
function timeblog_lifestyle_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Section 4
	=========================================*/
	$wp_customize->add_section(
		'section4_setting', array(
			'title' => esc_html__( 'Lifestyle Section', 'clever-fox' ),
			'panel' => 'fiona_blog_frontpage_sections',
			'priority' => 3,
		)
	);
	
	//  Contents
	$wp_customize->add_setting(
		'section4_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fiona_blog_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'section4_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','clever-fox'),
			'section' => 'section4_setting',
		)
	);
	
	// Title // 
	$wp_customize->add_setting(
    	'section4_title',
    	array(
			'default'   => __('Lifestyle','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'fiona_blog_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'section4_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'section4_setting',
			'type'           => 'text',
		)  
	);
	
	// section4 Category
	$wp_customize->add_setting(
    'section4_category_id',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		//'sanitize_callback' => 'fiona_blog_sanitize_text',
		)
	);	
	$wp_customize->add_control( new Fiona_Blog_Category_Dropdown_Control( $wp_customize, 
	'section4_category_id', 
		array(
		'label'   => __('Select category','clever-fox'),
		'section' => 'section4_setting',
		) 
	) );
	
	// blog_display_num
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'section4_display_num',
			array(
				'default' => '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'fiona_blog_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'section4_display_num', 
			array(
				'label'      => __( 'No of Posts Display', 'clever-fox' ),
				'section'  => 'section4_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'    => 1,
							'max'    => 500,
							'step'   => 1,
							'default_value' => 3,
						),
					),
			) ) 
		);
	}
	
}

add_action( 'customize_register', 'timeblog_lifestyle_setting' );