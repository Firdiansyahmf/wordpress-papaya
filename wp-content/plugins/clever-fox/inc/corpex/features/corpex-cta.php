<?php
function corpex_cta_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_setting', array(
			'title' => esc_html__( 'Call to Action Section', 'clever-fox' ),
			'priority' => 6,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	//Cta Documentation Link
	class WP_cta_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add cta section :</h3>
			<p>Frontpage Section > cta Section <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Cta Doc Link // 
	$wp_customize->add_setting( 
		'cta_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_cta_Customize_Control($wp_customize,
	'cta_doc_link' , 
		array(
			'label'          => __( 'Cta Documentation Link', 'clever-fox' ),
			'section'        => 'cta_setting',
			'type'           => 'radio',
			'description'    => __( 'Cta Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	
	// cta Section // 
	$wp_customize->add_setting(
		'cta_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'corpex_sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'cta_headings',
		array(
			'type' => 'hidden',
			'label' => __('CTA','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
	// Hide / Show 
	$wp_customize->add_setting(
		'cta_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'corpex_sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cta_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','clever-fox'),
			'section' => 'cta_setting',
		)
	);

	$wp_customize->add_setting(
    	'cta_title',
    	array(
	        'default'			=> __('Word We Love & Work Everyday','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 9,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	// CTA Description // 
	$wp_customize->add_setting(
    	'cta_description',
    	array(
	        'default'			=> esc_html__('Inspiration Is The One','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'textarea',
		)  
	);	
	
	// CTA Background // 	
	$wp_customize->add_setting(
		'cta_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 13,
		)
	);

	$wp_customize->add_control(
	'cta_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Image Section','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
    $wp_customize->add_setting( 
    	'cta_client_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/cta/image-1.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta_client_image' ,
		array(
			'label'          => __( 'Client Image', 'clever-fox' ),
			'section'        => 'cta_setting',
		) 
	));
	
    $wp_customize->add_setting( 
    	'cta_bg_setting' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/cta/ctabg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta_bg_setting' ,
		array(
			'label'          => __( 'Background Image', 'clever-fox' ),
			'section'        => 'cta_setting',
		) 
	));

	$wp_customize->add_setting( 
		'cta_bg_position' , 
			array(
			'default' => 'fixed',
			'capability'     => 'edit_theme_options',
			//'sanitize_callback' => 'corpex_sanitize_select',
			'priority' => 15,
		) 
	);
	
	$wp_customize->add_control(
		'cta_bg_position' , 
			array(
				'label'          => __( 'Image Position', 'clever-fox' ),
				'section'        => 'cta_setting',
				'type'           => 'radio',
				'choices'        => 
				array(
					'fixed'=> __( 'Fixed', 'clever-fox' ),
					'scroll' => __( 'Scroll', 'clever-fox' )
			)  
		) 
	);
}
add_action( 'customize_register', 'corpex_cta_setting' );

// CTA selective refresh
function corpex_cta_section_partials( $wp_customize ){
	
	// cta_title
	$wp_customize->selective_refresh->add_partial( 'cta_title', array(
		'selector'            => '.cta-section-home .cta-content h3 span',
		'settings'            => 'cta_title',
		'render_callback'  => 'corpex_cta_title_render_callback',
	) );
	
	// cta_description
	$wp_customize->selective_refresh->add_partial( 'cta_description', array(
		'selector'            => '.cta-section-home .cta-content h3',
		'settings'            => 'cta_description',
		'render_callback'  => 'corpex_cta_description_render_callback',
	) );	
}
add_action( 'customize_register', 'corpex_cta_section_partials' );

// cta_title
function corpex_cta_title_render_callback() {
	return get_theme_mod( 'cta_title' );
}

// cta_description
function corpex_cta_description_render_callback() {
	return get_theme_mod( 'cta_description' );
}