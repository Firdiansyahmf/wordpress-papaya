<?php
function corpex_features_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Features  Section
	=========================================*/
	$wp_customize->add_section(
		'features_setting', array(
			'title' => esc_html__( 'Features Section', 'clever-fox' ),
			'priority' => 4,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	// Features Header Section // 
	$wp_customize->add_setting(
		'features_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'features_headings',
		array(
			'type' => 'hidden',
			'label' => __('Features','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	// Hide / Show 
	$wp_customize->add_setting(
		'feature_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'corpex_sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'feature_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','clever-fox'),
			'section' => 'features_setting',
		)
	);
	
	// Features Title // 
	$wp_customize->add_setting(
    	'features_title',
    	array(
	        'default'			=> __('Our <span>Feature</span>','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
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
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'features_desc',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'features_setting',
			'type'           => 'text',
		)  
	);
	
	
	$wp_customize->add_setting( 
    	'features_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/feature.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'features_image' ,
		array(
			'label'          => __( 'Feature Image', 'clever-fox' ),
			'section'        => 'features_setting',
		) 
	));

	// Features content Section // 
	
	$wp_customize->add_setting(
		'features_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
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
			 'sanitize_callback' => 'corpex_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => corpex_get_features_default()
			)
		);
		
		$wp_customize->add_control( 
			new corpex_Repeater( $wp_customize, 
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
		class Corpex_features__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_feature_upgrade_section up-to-pro" href="https://www.nayrathemes.com/corpex-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'corpex_features_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'corpex_sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Corpex_features__section_upgrade(
			$wp_customize,
			'corpex_features_upgrade_to_pro',
				array(
					'section'		=> 'features_setting',
				)
			)
		);
}
add_action( 'customize_register', 'corpex_features_setting' );

// features selective refresh
function corpex_home_features_section_partials( $wp_customize ){	
	// features title
	$wp_customize->selective_refresh->add_partial( 'features_title', array(
		'selector'            => '.features-home .section-title h2 span',
		'settings'            => 'features_title',
		'render_callback'  	  => 'corpex_features_title_render_callback',
	) );
	
	// features description
	$wp_customize->selective_refresh->add_partial( 'features_desc', array(
		'selector'            => '.features-home .section-title p',
		'settings'            => 'features_desc',
		'render_callback'     => 'corpex_features_desc_render_callback',
	) );
	
	// features content
	$wp_customize->selective_refresh->add_partial( 'features_contents', array(
		'selector'            => '.features-home .feature-list h5'
	) );
	
	}

add_action( 'customize_register', 'corpex_home_features_section_partials' );

// features title
function corpex_features_title_render_callback() {
	return get_theme_mod( 'features_title' );
}

// features description
function corpex_features_desc_render_callback() {
	return get_theme_mod( 'features_desc' );
}