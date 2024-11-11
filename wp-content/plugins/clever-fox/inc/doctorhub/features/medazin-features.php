<?php
function medazin_features_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Features  Section
	=========================================*/
	$wp_customize->add_section(
		'features_setting', array(
			'title' => esc_html__( 'Features Section', 'clever-fox' ),
			'priority' => 4,
			'panel' => 'medazin_frontpage_sections',
		)
	);

	// Features Header Section // 
	$wp_customize->add_setting(
		'features_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'features_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	// Features Title // 
	$wp_customize->add_setting(
    	'features_title',
    	array(
	        'default'			=> "What's Our Speciality",
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'features_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'features_setting',
			'type'           => 'text',
		)  
	);
	
	// Features Description // 
	$wp_customize->add_setting(
    	'features_desc',
    	array(
	        'default'			=> __('Feature','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'features_desc',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'features_setting',
			'type'           => 'text',
		)  
	);

	// Features content Section // 
	
	$wp_customize->add_setting(
		'features_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'features_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add features
	 */
	
		$wp_customize->add_setting( 'features_contents', 
			array(
			 'sanitize_callback' => 'medazin_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => medazin_get_features_default()
			)
		);
		
		$wp_customize->add_control( 
			new medazin_Repeater( $wp_customize, 
				'features_contents', 
					array(
						'label'   => esc_html__('Features','clever-fox'),
						'section' => 'features_setting',
						'add_field_label'                   => esc_html__( 'Add New Feature', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Features', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);

	
	//Pro feature
	class Medazin_feature__section_upgrade extends WP_Customize_Control {
		public function render_content() { 
			$theme = wp_get_theme(); // gets the current theme	
			
		?>
			<a class="customizer_feature_upgrade_section up-to-pro" href="https://www.nayrathemes.com/medazin-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'medazin_feature_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 5,
	));
	$wp_customize->add_control(
		new Medazin_feature__section_upgrade(
		$wp_customize,
		'medazin_feature_upgrade_to_pro',
			array(
				'section'				=> 'features_setting',
			)
		)
	);

	
}

add_action( 'customize_register', 'medazin_features_setting' );

// features selective refresh
function medazin_home_features_section_partials( $wp_customize ){	
	// features title
	$wp_customize->selective_refresh->add_partial( 'features_title', array(
		'selector'            => '.features-home .section-title h5',
		'settings'            => 'features_title',
		'render_callback'  => 'medazin_features_title_render_callback',
	
	) );
	
	// features description
	$wp_customize->selective_refresh->add_partial( 'features_desc', array(
		'selector'            => '.features-home .section-title span.subtitle',
		'settings'            => 'features_desc',
		'render_callback'  => 'medazin_features_desc_render_callback',
	
	) );
	// features content
	$wp_customize->selective_refresh->add_partial( 'features_contents', array(
		'selector'            => '.features-home .features-contents'
	) );
	
	}

add_action( 'customize_register', 'medazin_home_features_section_partials' );

// features title
function medazin_features_title_render_callback() {
	return get_theme_mod( 'features_title' );
}

// features description
function medazin_features_desc_render_callback() {
	return get_theme_mod( 'features_desc' );
}