<?php
function medazin_cta_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	CTA  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_setting', array(
			'title' => esc_html__( 'Call to Action Section', 'clever-fox' ),
			'priority' => 6,
			'panel' => 'medazin_frontpage_sections',
		)
	);

	//Cta Documentation Link
	class WP_cta_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('Section Documentation','clever-fox'); ?></h3>
			<p><?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:#21CDC0; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
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
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cta_call_contents',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
	// CTA Call Text // 
	$wp_customize->add_setting(
    	'cta_call_text',
    	array(
	        'default'			=> __('+70 975 975 70','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_call_text',
		array(
		    'label'   => __('Text','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	
	// CTA Content Section // 
	$wp_customize->add_setting(
		'cta_contents'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'cta_contents',
		array(
			'type' => 'hidden',
			'label' => __('Right Content','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
	
	// icon // 
	$wp_customize->add_setting(
    	'cta_right_icon',
    	array(
	        'default' => 'fa-phone',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 4,
		)
	);	

	$wp_customize->add_control(new Medazin_Icon_Picker_Control($wp_customize, 
		'cta_right_icon',
		array(
		    'label'   		=> __('Icon','clever-fox'),
		    'section' 		=> 'cta_setting',
			'iconset' => 'fa',
			
		))  
	);	
	
	
	// CTA Title // 
	$wp_customize->add_setting(
    	'cta_title',
    	array(
	        'default'			=> __('Need An Emergency help?','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
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
	
	// CTA Description // 
	$wp_customize->add_setting(
    	'cta_description',
    	array(
	        'default'			=> __('We Care About Your Health!','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
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
		'cta_btn'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'cta_btn',
		array(
			'type' => 'hidden',
			'label' => __('Button','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
	$wp_customize->add_setting(
    	'cta_call_title',
    	array(
			'default' 			=> esc_html__('Make Appointment','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_url',
			'priority' => 9,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_call_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	$wp_customize->add_setting(
    	'cta_btn_link',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_url',
			'priority' => 9,
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
	
	
	// CTA Background // 	
	$wp_customize->add_setting(
		'cta_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 13,
		)
	);

	$wp_customize->add_control(
	'cta_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','clever-fox'),
			'section' => 'cta_setting',
		)
	);
	
    $wp_customize->add_setting( 
    	'cta_bg_setting' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL. 'inc/medazin/images/cta/section-bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_url',	
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
			'sanitize_callback' => 'medazin_sanitize_select',
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

add_action( 'customize_register', 'medazin_cta_setting' );

// CTA selective refresh
function medazin_ata_section_partials( $wp_customize ){
	
	// cta_right_icon
	$wp_customize->selective_refresh->add_partial( 'cta_right_icon', array(
		'selector'            => '.cta-section-1 .cta-content .cta-info-wrap .widget-contact .contact-icon ',
		'settings'            => 'cta_right_icon',
		'render_callback'  => 'medazin_cta_call_title_render_callback',
	) );
	
	// cta_call_title
	$wp_customize->selective_refresh->add_partial( 'cta_call_title', array(
		'selector'            => '.cta-section-1 .cta-btn a span',
		'settings'            => 'cta_call_title',
		'render_callback'  => 'medazin_cta_call_title_render_callback',
	) );
	
	// cta_call_text
	$wp_customize->selective_refresh->add_partial( 'cta_call_text', array(
		'selector'            => '.cta-section-1 .cta-content .cta-info-wrap .widget-contact .contact-info p a',
		'settings'            => 'cta_call_text',
		'render_callback'  => 'medazin_cta_call_text_render_callback',
	) );
	
	// cta_title
	$wp_customize->selective_refresh->add_partial( 'cta_title', array(
		'selector'            => '.cta-section-1 .cta-content-box .cta-content .cta-text-wrap > h2',
		'settings'            => 'cta_title',
		'render_callback'  => 'medazin_cta_title_render_callback',
	) );
	
	// cta_description
	$wp_customize->selective_refresh->add_partial( 'cta_description', array(
		'selector'            => '.cta-section-1 .cta-content-box .cta-content .cta-text-wrap > span',
		'settings'            => 'cta_description',
		'render_callback'  => 'medazin_cta_description_render_callback',
	) );
	}

add_action( 'customize_register', 'medazin_ata_section_partials' );

// cta_title
function medazin_cta_title_render_callback() {
	return get_theme_mod( 'cta_title' );
}


// cta_description
function medazin_cta_description_render_callback() {
	return get_theme_mod( 'cta_description' );
}

// cta_call_title
function medazin_cta_call_title_render_callback() {
	return get_theme_mod( 'cta_call_title' );
}

// cta_call_text
function medazin_cta_call_text_render_callback() {
	return get_theme_mod( 'cta_call_text' );
}
