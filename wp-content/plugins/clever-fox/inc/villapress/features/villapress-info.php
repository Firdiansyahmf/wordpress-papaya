<?php
function aravalli_info_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	info Section
	=========================================*/
	$wp_customize->add_section(
		'info_setting', array(
			'title' => esc_html__( 'Info Section', 'clever-fox' ),
			'priority' => 8,
			'panel' => 'aravalli_frontpage_sections',
		)
	);
	
	// Content Head
	$wp_customize->add_setting(
		'info_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 11,
		)
	);

	$wp_customize->add_control(
	'info_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'info_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add info
	 */
	
		$wp_customize->add_setting( 'info_contents', 
			array(
			 'sanitize_callback' => 'aravalli_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			'default' => aravalli_get_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new ARAVALLI_Repeater( $wp_customize, 
				'info_contents', 
					array(
						'label'   => esc_html__('Info','clever-fox'),
						'section' => 'info_setting',
						'add_field_label'                   => esc_html__( 'Add New Info', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Infos', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => false,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => false,
						'customizer_repeater_text_control' => false,
					) 
				) 
			);
    
	//Pro info
	class VillaPress_info__section_upgrade extends WP_Customize_Control {
		public function render_content() { 		
		?>
			<a class="customizer_info_upgrade_section up-to-pro" href="https://www.nayrathemes.com/villapress-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
		<?php
		}
	}
	
	$wp_customize->add_setting( 'villapress_info_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 9,
	));
	$wp_customize->add_control(
		new VillaPress_info__section_upgrade(
		$wp_customize,
		'villapress_info_upgrade_to_pro',
			array(
				'section'				=> 'info_setting',
			)
		)
	);		
			
			
	// info column // 
	$wp_customize->add_setting(
    	'info_sec_column',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'info_sec_column',
		array(
		    'label'   		=> __('info Column','clever-fox'),
		    'section' 		=> 'info_setting',
			'type'			=> 'select',
			'choices'        => 
			array(
				'-12' => __( '1 column', 'clever-fox' ),
				'-6' => __( '2 column', 'clever-fox' ),
				'-4' => __( '3 column', 'clever-fox' ),
				'-3' => __( '4 column', 'clever-fox' ),
				'' => __( '5 column', 'clever-fox' ),
			) 
		) 
	);
}

add_action( 'customize_register', 'aravalli_info_setting' );

// info selective refresh
function aravalli_info_section_partials( $wp_customize ){
	// info content
	$wp_customize->selective_refresh->add_partial( 'info_contents', array(
		'selector'            => '.info-fact .info-content'
	) );
	}

add_action( 'customize_register', 'aravalli_info_section_partials' );
