<?php
function accron_cta2_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Cta2   Section
	=========================================*/
	$wp_customize->add_section(
		'cta2_setting', array(
			'title' => esc_html__( 'Call To Action', 'clever-fox' ),
			'priority' => 9,
			'panel' => 'accron_frontpage_sections',
		)
	);

	//Cta2  Documentation Link
	class WP_cta2_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add cta2 section :</h3>
			<p>Frontpage Section > cta2 Section <br><br> <a href="#" style="background-color:#0073C7; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Cta2  Doc Link // 
	$wp_customize->add_setting( 
		'cta2_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_cta2_Customize_Control($wp_customize,
	'cta2_doc_link' , 
		array(
			'label'          => __( 'Cta2  Documentation Link', 'clever-fox' ),
			'section'        => 'cta2_setting',
			'type'           => 'radio',
			'description'    => __( 'Cta2  Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	// Cta2  Header Section // 
	$wp_customize->add_setting(
		'cta2_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'cta2_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'cta2_setting',
		)
	);
	
	// Cta2  Title // 
	$wp_customize->add_setting(
    	'cta2_title',
    	array(
	        'default'			=> 'Download Our <a href="#">Accron</a> Application',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'text',
		)  
	);
	
	// Cta2  Subtitle // 
	$wp_customize->add_setting(
    	'cta2_subtitle',
    	array(
	        'default'			=> __('Get Our Free App','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'text',
		)  
	);
	
	// Cta2  Description // 
	$wp_customize->add_setting(
    	'cta2_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, accusantium. Laborum fugiat veniam soluta ex eos itaque saepe unde aperiam, obcaecati cum corrupti cupiditate facilis nemo in dolor accusamus error.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'textarea',
		)  
	);
	
	//  Background Image // 
    $wp_customize->add_setting( 
    	'cta2_bg_img' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/acronix/images/cta2.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_url',	
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta2_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'clever-fox'),
			'section'        => 'cta2_setting',
		) 
	));
	
	// Image // 
    $wp_customize->add_setting( 
    	'cta2_img' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/acronix/images/hand.svg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_url',	
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta2_img' ,
		array(
			'label'          => esc_html__( 'Image', 'clever-fox'),
			'section'        => 'cta2_setting',
		) 
	));
	
	// Cta2  button 1 Label // 
	$wp_customize->add_setting(
    	'cta2_btn1_lbl',
    	array(
	        'default'			=> __('Get In Google Play','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_btn1_lbl',
		array(
		    'label'   => __('Button 1 Label','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'text',
		)  
	);
	
	// Cta2  button 1 Link // 
	$wp_customize->add_setting(
    	'cta2_btn1_link',
    	array(
	        'default'			=> __('#','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_btn1_link',
		array(
		    'label'   => __('Button 1 Link','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'text',
		)  
	);
	
	// Cta2  button 2 Label // 
	$wp_customize->add_setting(
    	'cta2_btn2_lbl',
    	array(
	        'default'			=> __('Get In Play Store','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_btn2_lbl',
		array(
		    'label'   => __('Button 2 Label','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'text',
		)  
	);
	
	// Cta2  button 2 Link // 
	$wp_customize->add_setting(
    	'cta2_btn2_link',
    	array(
	        'default'			=> __('#','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'accron_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'cta2_btn2_link',
		array(
		    'label'   => __('Button 2 Link','clever-fox'),
		    'section' => 'cta2_setting',
			'type'           => 'text',
		)  
	);	
}

add_action( 'customize_register', 'accron_cta2_setting' );

// cta2 selective refresh
function accron_cta2_section_partials( $wp_customize ){	
	// cta2_title
	$wp_customize->selective_refresh->add_partial( 'cta2_title', array(
		'selector'            => '.home-cta2 .cta2-content h1',
		'settings'            => 'cta2_title',
		'render_callback'  => 'accron_cta2_title_render_callback',
	
	) );
	
	// cta2_subtitle
	$wp_customize->selective_refresh->add_partial( 'cta2_subtitle', array(
		'selector'            => '.home-cta2 .cta2-content span.cta2-subttl',
		'settings'            => 'cta2_subtitle',
		'render_callback'  => 'accron_cta2_subtitle_render_callback',
	
	) );
	
	// cta2_description
	$wp_customize->selective_refresh->add_partial( 'cta2_description', array(
		'selector'            => '.home-cta2 .cta2-content p.cta2-desc',
		'settings'            => 'cta2_description',
		'render_callback'  => 'accron_cta2_description_render_callback',	
	) );
	
	// cta2_btn1_lbl
	$wp_customize->selective_refresh->add_partial( 'cta2_btn1_lbl', array(
		'selector'            => '.home-cta2 .cta2-content a.store_btn.google span',
		'settings'            => 'cta2_btn1_lbl',
		'render_callback'  => 'accron_cta2_btn1_lbl_render_callback',	
	) );
	
	// cta2_btn2_lbl
	$wp_customize->selective_refresh->add_partial( 'cta2_btn2_lbl', array(
		'selector'            => '.home-cta2 .cta2-content a.store_btn.apple span',
		'settings'            => 'cta2_btn2_lbl',
		'render_callback'  => 'accron_cta2_btn2_lbl_render_callback',	
	) );
	
	}

add_action( 'customize_register', 'accron_cta2_section_partials' );

// cta2_title
function accron_cta2_title_render_callback() {
	return get_theme_mod( 'cta2_title' );
}

// cta2_subtitle
function accron_cta2_subtitle_render_callback() {
	return get_theme_mod( 'cta2_subtitle' );
}