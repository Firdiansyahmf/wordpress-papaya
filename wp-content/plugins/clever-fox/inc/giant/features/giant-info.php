<?php 
function giant_info_setting( $wp_customize ) {

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Info
	=========================================*/
		$wp_customize->add_section(
			'info_setting', array(
				'title' => esc_html__( 'Info Section', 'clever-fox' ),
				'panel' => 'giant_frontpage_sections',
				'priority' => 2,
			)
		);
	
	/*=========================================
	Info contents 
	=========================================*/
	
	// Content
	$wp_customize->add_setting(
		'info_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
			'priority' => 3,
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
	
	// Hide / Show 
	$wp_customize->add_setting(
		'info_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'giant_sanitize_callback' => 'giant_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'info_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','clever-fox'),
			'section' => 'info_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add info
	 */
	
		$wp_customize->add_setting( 'info', 
			array(
			 'sanitize_callback' => 'giant_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => giant_get_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Giant_Repeater( $wp_customize, 
				'info', 
					array(
						'label'   => esc_html__('Info','clever-fox'),
						'section' => 'info_setting',
						'add_field_label'                   => esc_html__( 'Add New Info', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Info', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text2_control' => true,
					) 
				) 
			);
			
			
		//Pro feature
		class Giant_info__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_info_upgrade_section up-to-pro" href="https://www.nayrathemes.com/giant-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'giant_info_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Giant_info__section_upgrade(
			$wp_customize,
			'giant_info_upgrade_to_pro',
				array(
					'section'				=> 'info_setting',
				)
			)
		);
	
}
add_action( 'customize_register', 'giant_info_setting' );

// features selective refresh
function giant_info_section_partials( $wp_customize ){	
	// features title
	$wp_customize->selective_refresh->add_partial( 'info', array(
		'selector'            => '.info-section .contact-area .contact-info h4 ',
		'settings'            => 'info',
		'render_callback'  => 'giant_info_render_callback',
	
	) );
	
	
	// features content
	$wp_customize->selective_refresh->add_partial( 'info_contents', array(
		'selector'            => '.info-section .info-carousel .title-box'
	) );
	
	}

add_action( 'customize_register', 'giant_info_section_partials' );

// info_title
function giant_info_title_render_callback() {
	return get_theme_mod( 'info_title' );
}