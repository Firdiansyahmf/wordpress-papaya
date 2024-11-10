<?php 
function corpex_info_setting( $wp_customize ) {

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Info
	=========================================*/
		$wp_customize->add_section(
			'info_setting', array(
				'title' => esc_html__( 'Info Section', 'clever-fox' ),
				'panel' => 'corpex_frontpage_sections',
				'priority' => 2,
			)
		);
		
	//  Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hs_info' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_info', 
		array(
			'label'	      => esc_html__( 'Hide / Show Info', 'clever-fox' ),
			'section'     => 'info_setting',
			'type'        => 'checkbox'
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
			'sanitize_callback' => 'corpex_sanitize_text',
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
	
	/**
	 * Customizer Repeater for add info
	 */
	
		$wp_customize->add_setting( 'info_contents', 
			array(
			 'sanitize_callback' => 'corpex_repeater_sanitize',
			 'priority' => 8,
			 'default' => corpex_get_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new corpex_Repeater( $wp_customize, 
				'info_contents', 
					array(
						'label'   => esc_html__('Info','clever-fox'),
						'section' => 'info_setting',
						'add_field_label'                   => esc_html__( 'Add New Info', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Info', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
			//Pro feature
		class Corpex_info__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_info_upgrade_section up-to-pro" href="https://www.nayrathemes.com/corpex-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'info_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'corpex_sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Corpex_info__section_upgrade(
			$wp_customize,
			'info_upgrade_to_pro',
				array(
					'section'				=> 'info_setting',
				)
			)
		);
	
}
add_action( 'customize_register', 'corpex_info_setting' );

// info selective refresh
function corpex_info_section_partials( $wp_customize ){	
	
	// info content
	$wp_customize->selective_refresh->add_partial( 'info_contents', array(
		'selector'            => '.info-section .info-item .widget-contact .text a'
	) );
	
	}

add_action( 'customize_register', 'corpex_info_section_partials' );

// info_title
function corpex_info_title_render_callback() {
	return get_theme_mod( 'info_title' );
}