<?php
function giant_cta_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_setting', array(
			'title' => esc_html__( 'Call to Action Section', 'clever-fox' ),
			'priority' => 5,
			'panel' => 'giant_frontpage_sections',
		)
	);

	//Cta Documentation Link
	class WP_cta_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('Section Documentation','clever-fox'); ?></h3>
			<p><a href="#" target="_blank" style="background-color:#03c281; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;"><?php esc_html_e('Click Here','clever-fox');?></a></p>
			
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
	
	// CTA Call Section // 
		
	$wp_customize->add_setting(
		'cta_call_contents'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cta_call_contents',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
	
	// Hide / Show 
	$wp_customize->add_setting(
		'cta_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_checkbox',
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
		
		
	// CTA Title // 
	$wp_customize->add_setting(
    	'cta_title',
    	array(
	        'default'			=> __('We\'re Ready To Grow You Business Get Start Today!','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_html',
			'transport'         => $selective_refresh,
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
	
	$wp_customize->add_setting(
    	'cta_subtitle',
    	array(
	        'default'			=> __('Want To Work With Us?','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_html',
			'priority' => 9,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_subtitle',
		array(
		    'label'   => __('Sub Title','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	// CTA Description // 
	$wp_customize->add_setting(
    	'cta_description',
    	array(
	        'default'			=> esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum ac mauris sit
                        amet pretium. Sed fringilla mauris in eros porta posuere.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_html',
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
}

add_action( 'customize_register', 'giant_cta_setting' );

// CTA selective refresh
function giant_cta_section_partials( $wp_customize ){
	
	// cta_call_icon
	$wp_customize->selective_refresh->add_partial( 'cta_call_icon', array(
		'selector'            => '.cta-section-1 .cta-content .cta-info-wrap .widget-contact .contact-icon ',
		'settings'            => 'cta_call_icon',
		'render_callback'  => 'cta_call_icon_render_callback',
	) );
	
	// cta_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'cta_btn_lbl', array(
		'selector'            => '.cta-content a',
		'settings'            => 'cta_btn_lbl',
		'render_callback'  => 'cta_btn_lbl_render_callback',
	) );
	
	// cta_phone_number
	$wp_customize->selective_refresh->add_partial( 'cta_phone_number', array(
		'selector'            => '.cta-section-1 .cta-content .cta-info-wrap .widget-contact .contact-info p a',
		'settings'            => 'cta_phone_number',
		'render_callback'  => 'cta_phone_number_render_callback',
	) );
	
	// giant_cta_title
	$wp_customize->selective_refresh->add_partial( 'cta_title', array(
		'selector'            => '.cta-content h3',
		'settings'            => 'cta_title',
		'render_callback'  => 'cta_title_render_callback',
	) );
	
	// giant_cta_description
	$wp_customize->selective_refresh->add_partial( 'cta_description', array(
		'selector'            => '.cta-content p',
		'settings'            => 'cta_description',
		'render_callback'  => 'cta_description_render_callback',
	) );
	}

add_action( 'customize_register', 'giant_cta_section_partials' );


// cta_call_icon
function cta_call_icon_render_callback() {
	return get_theme_mod( 'cta_call_icon' );
}

// cta_btn_lbl
function cta_btn_lbl_render_callback() {
	return get_theme_mod( 'cta_btn_lbl' );
}

// cta_phone_number
function cta_phone_number_render_callback() {
	return get_theme_mod( 'cta_phone_number' );
}

// giant_cta_title
function cta_title_render_callback() {
	return get_theme_mod( 'cta_title' );
}


// giant_cta_description
function cta_description_render_callback() {
	return get_theme_mod( 'cta_description' );
}
