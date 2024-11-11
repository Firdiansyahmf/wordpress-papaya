<?php
function evita_about_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	About  Section
	=========================================*/
	$wp_customize->add_section(
		'about_setting', array(
			'title' => esc_html__( 'About Section', 'clever-fox' ),
			'priority' => 4,
			'panel' => 'evita_frontpage_sections',
		)
	);

	// Setting Head
	$wp_customize->add_setting(
		'about_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'about_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','clever-fox'),
			'section' => 'about_setting',
		)
	);

	// Hide / Show 
	$wp_customize->add_setting(
		'about_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'about_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','clever-fox'),
			'section' => 'about_setting',
		)
	);

	// About Header Section // 
	$wp_customize->add_setting(
		'about_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'about_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'about_setting',
		)
	);
	
	// About Title // 
	$wp_customize->add_setting(
    	'about_title',
    	array(
	        'default'			=> __('All World Leading Best UI/UX Designer','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'about_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'about_setting',
			'type'           => 'text',
		)  
	);
	
	// About Subtitle // 
	$wp_customize->add_setting(
    	'about_subtitle',
    	array(
	        'default'			=> __('About Us','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'about_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'about_setting',
			'type'           => 'text',
		)  
	);
	
	// About Subtitle 2 // 
	$wp_customize->add_setting(
    	'about_subtitle2',
    	array(
	        'default'			=> __('A Passionet UI/UX Designer And Web Developer Based in NYC, USA','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'about_subtitle2',
		array(
		    'label'   => __('Subtitle 2','clever-fox'),
		    'section' => 'about_setting',
			'type'           => 'text',
		)  
	);
	
	// About Description // 
	$wp_customize->add_setting(
    	'about_description',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'about_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'about_setting',
			'type'           => 'textarea',
		)  
	);
	
	// About page Button Label // 
	$wp_customize->add_setting(
    	'about_btn_lbl',
    	array(
	        'default'			=> __('Read More','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'about_btn_lbl',
		array(
		    'label'   => __('Button Label','clever-fox'),
		    'section' => 'about_setting',
			'type'           => 'text',
		)  
	);
	
	// About page Button Link // 
	$wp_customize->add_setting(
    	'about_btn_link',
    	array(
	        'default'			=> __('#','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'about_btn_link',
		array(
		    'label'   => __('Button Link','clever-fox'),
		    'section' => 'about_setting',
			'type'           => 'text',
		)  
	);
	
	// Image // 
    $wp_customize->add_setting( 
    	'about_left_img' , 
    	array(
			'default' 			=> CLEVERFOX_PLUGIN_URL .'/inc/evita/images/about/abt01.png',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_url',	
			'priority' => 35,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'about_left_img' ,
		array(
			'label'          => esc_html__( 'Image', 'clever-fox'),
			'section'        => 'about_setting',
		) 
	));
	
	// Signature Image // 
    $wp_customize->add_setting( 
    	'about_signature_img' , 
    	array(
			'default' 			=> CLEVERFOX_PLUGIN_URL .'/inc/evita/images/about/sign.png',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_url',	
			'priority' => 35,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'about_signature_img' ,
		array(
			'label'          => esc_html__( 'Signature Image', 'clever-fox'),
			'section'        => 'about_setting',
		) 
	));
	
	
	
	/*=========================================
	Author Achivement Section
	=========================================*/
	$wp_customize->add_setting(
		'about_author_achivement_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 38,
		)
	);

	$wp_customize->add_control(
	'about_author_achivement_head',
		array(
			'type' => 'hidden',
			'label' => __('Author Achivement Section','clever-fox'),
			'section' => 'about_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add client
	 */
	
		$wp_customize->add_setting( 'achivement_contents', 
			array(
			 'sanitize_callback' => 'evita_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 39,
			 'default' => evita_get_achivement_default()
			)
		);
		
		$wp_customize->add_control( 
			new Evita_Repeater( $wp_customize, 
				'achivement_contents', 
					array(
						'label'   => esc_html__('Client','clever-fox'),
						'section' => 'about_setting',
						'add_field_label'                   => esc_html__( 'Add New Achivement', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Achivement', 'clever-fox' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
					) 
				) 
			);


	//Pro feature
	class Evita_achivement__section_upgrade extends WP_Customize_Control {
		public function render_content() { 
		?>
			<a class="customizer_achivement_upgrade_section up-to-pro" href="https://www.nayrathemes.com/evita-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
		<?php
		}
	}
	
	$wp_customize->add_setting( 'evita_achivement_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 39,
	));
	$wp_customize->add_control(
		new Evita_achivement__section_upgrade(
		$wp_customize,
		'evita_achivement_upgrade_to_pro',
			array(
				'section'				=> 'about_setting',
				'settings'				=> 'evita_achivement_upgrade_to_pro',
			)
		)
	);
	
}

add_action( 'customize_register', 'evita_about_setting' );

// about selective refresh
function evita_home_about_section_partials( $wp_customize ){	
	// about title
	$wp_customize->selective_refresh->add_partial( 'about_title', array(
		'selector'            => '.about-home .section-title h2',
		'settings'            => 'about_title',
		'render_callback'  => 'evita_about_title_render_callback',
	
	) );
	
	// about subtitle
	$wp_customize->selective_refresh->add_partial( 'about_subtitle', array(
		'selector'            => '.about-home .section-title h5',
		'settings'            => 'about_subtitle',
		'render_callback'  => 'evita_about_subtitle_render_callback',
	
	) );
	
	// about subtitle2
	$wp_customize->selective_refresh->add_partial( 'about_subtitle2', array(
		'selector'            => '.about-home .about-content p.about_subtitle2 a',
		'settings'            => 'about_subtitle2',
		'render_callback'  => 'evita_about_subtitle2_render_callback',
	
	) );
	
	// about_description
	$wp_customize->selective_refresh->add_partial( 'about_description', array(
		'selector'            => '.about-home .about-content p.about-p',
		'settings'            => 'about_description',
		'render_callback'  => 'evita_about_description_render_callback',
	
	) );
	
	// about_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'about_btn_lbl', array(
		'selector'            => '.about-home .about-content a.main-btn',
		'settings'            => 'about_btn_lbl',
		'render_callback'  => 'evita_about_btn_lbl_render_callback',
	
	) );
	// about_signature_img
	$wp_customize->selective_refresh->add_partial( 'about_signature_img', array(
		'selector'            => '.about-home .about-content .signature img',
		'settings'            => 'about_signature_img',
		'render_callback'  => 'evita_about_signature_img_render_callback',
	
	) );
	
	// about social contents
	$wp_customize->selective_refresh->add_partial( 'social_contents', array(
		'selector'            => '.about-home .about-social .social-accounts'
	) );
	
	// about achivement contents
	$wp_customize->selective_refresh->add_partial( 'achivement_contents', array(
		'selector'            => '.about-home ul.about-funfact li'
	) );
	
	}

add_action( 'customize_register', 'evita_home_about_section_partials' );

// about title
function evita_about_title_render_callback() {
	return get_theme_mod( 'about_title' );
}

// about_subtitle
function evita_about_subtitle_render_callback() {
	return get_theme_mod( 'about_subtitle' );
}

// about_subtitle2
function evita_about_subtitle2_render_callback() {
	return get_theme_mod( 'about_subtitle2' );
}

// about_description
function evita_about_description_render_callback() {
	return get_theme_mod( 'about_description' );
}

// about_btn_lbl
function evita_about_btn_lbl_render_callback() {
	return get_theme_mod( 'about_btn_lbl' );
}
// about_signature_img
function evita_about_signature_img_render_callback() {
	return get_theme_mod( 'about_signature_img' );
}
// author_button_text
function evita_author_button_text_render_callback() {
	return get_theme_mod( 'author_button_text' );
}