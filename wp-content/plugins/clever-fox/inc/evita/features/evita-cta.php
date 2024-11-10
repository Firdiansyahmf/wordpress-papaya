<?php
function evita_cta_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_setting', array(
			'title' => esc_html__( 'Call to Action Section', 'clever-fox' ),
			'priority' => 6,
			'panel' => 'evita_frontpage_sections',
		)
	);

	// Setting Head
	$wp_customize->add_setting(
		'cta_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cta_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','clever-fox'),
			'section' => 'cta_setting',
		)
	);

	// Hide / Show 
	$wp_customize->add_setting(
		'cta_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_checkbox',
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

	//Cta Documentation Link
	class WP_cta_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add cta section :</h3>
			<p>Frontpage Section > cta Section <br><br> <a href="#" style="background-color:#4bffa5; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
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
	
	
	// CTA Content Section // 
	$wp_customize->add_setting(
		'cta_contents'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'cta_contents',
		array(
			'type' => 'hidden',
			'label' => __('Heading Content','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	

	// CTA Title // 
	$wp_customize->add_setting(
    	'cta_title',
    	array(
	        'default'			=> __('Freelance Work','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
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
	
	// CTA Subtitle // 
	$wp_customize->add_setting(
    	'cta_subtitle',
    	array(
	        'default'			=> '<span class="primary_color">I Am</span> Available For',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	// CTA Description // 
	$wp_customize->add_setting(
    	'cta_description',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available but the majority have	suffered injected humour dummy now.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
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
	
	// Button // 	
	$wp_customize->add_setting(
    	'cta_btn_label',
    	array(
	        'default'			=> __('contact Us','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 11,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_btn_label',
		array(
		    'label'   => __('Button Label','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'cta_btn_link',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_url',
			'priority' => 13,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_btn_link',
		array(
		    'label'   => __('Link','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
    $wp_customize->add_setting( 
    	'cta_image' , 
    	array(
			'default' 			=> CLEVERFOX_PLUGIN_URL . '/inc/evita/images/cta1.png',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta_image' ,
		array(
			'label'          => __( 'Image', 'clever-fox' ),
			'section'        => 'cta_setting',
		) 
	));
	
	// // cta After Before
	// $wp_customize->add_setting(
	// 	'cta_after_before'
	// 		,array(
	// 		'capability'     	=> 'edit_theme_options',
	// 		'sanitize_callback' => 'evita_sanitize_text',
	// 	)
	// );

	// $wp_customize->add_control(
	// 'cta_after_before',
	// 	array(
	// 		'type' => 'hidden',
	// 		'label' => __('Before / After Content','clever-fox'),
	// 		'section' => 'cta_setting',
	// 		'priority' => 21,
	// 	)
	// );
	
	// // Before
	// $wp_customize->add_setting(
	// 'cta_before_data',
	// 	array(
	// 		'default' => '0',
	// 		'capability' => 'edit_theme_options',
	// 		'sanitize_callback'	=> 'evita_sanitize_number_absint',
	// 	)
	// );
		
	// $wp_customize->add_control(
	// 'cta_before_data',
	// 	array(
	// 		'type'	=> 'dropdown-pages',
	// 		'label'	=> __('Select Page for Before Content','clever-fox'),
	// 		'section'	=> 'cta_setting',
	// 		'priority'  => 22
	// 	)
	// );	
	
	// // After
	// $wp_customize->add_setting(
	// 'cta_after_data',
	// 	array(
	// 		'default' => '0',
	// 		'capability' => 'edit_theme_options',
	// 		'sanitize_callback'	=> 'evita_sanitize_number_absint',
	// 	)
	// );
		
	// $wp_customize->add_control(
	// 'cta_after_data',
	// 	array(
	// 		'type'	=> 'dropdown-pages',
	// 		'label'	=> __('Select Page for After Content','clever-fox'),
	// 		'section'	=> 'cta_setting',
	// 		'priority'  => 23
	// 	)
	// );

}

add_action( 'customize_register', 'evita_cta_setting' );

// CTA selective refresh
function evita_ata_section_partials( $wp_customize ){
	
	// cta_title
	$wp_customize->selective_refresh->add_partial( 'cta_title', array(
		'selector'            => '.home-cta .section-title h2',
		'settings'            => 'cta_title',
		'render_callback'  => 'evita_cta_title_render_callback',
	) );
	
	// cta_subtitle
	$wp_customize->selective_refresh->add_partial( 'cta_subtitle', array(
		'selector'            => '.home-cta .section-title h5',
		'settings'            => 'cta_subtitle',
		'render_callback'  => 'evita_cta_subtitle_render_callback',
	) );
	
	// cta_description
	$wp_customize->selective_refresh->add_partial( 'cta_description', array(
		'selector'            => '.home-cta .section-title p',
		'settings'            => 'cta_description',
		'render_callback'  => 'evita_cta_description_render_callback',
	) );
	
	// cta_btn_label
	$wp_customize->selective_refresh->add_partial( 'cta_btn_label', array(
		'selector'            => '.home-cta .section-title a  ',
		'settings'            => 'cta_btn_label',
		'render_callback'  => 'evita_cta_btn_label_render_callback',
	) );	
	}

add_action( 'customize_register', 'evita_ata_section_partials' );

// cta_title
function evita_cta_title_render_callback() {
	return get_theme_mod( 'cta_title' );
}


// cta_subtitle
function evita_cta_subtitle_render_callback() {
	return get_theme_mod( 'cta_subtitle' );
}

// cta_description
function evita_cta_description_render_callback() {
	return get_theme_mod( 'cta_description' );
}

// cta_btn_label
function evita_cta_btn_label_render_callback() {
	return get_theme_mod( 'cta_btn_label' );
}
