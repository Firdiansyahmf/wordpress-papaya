<?php
function giant_funfact_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Funfact  Section
	=========================================*/
	$wp_customize->add_section(
		'funfact_setting', array(
			'title' => esc_html__( 'Funfact Section', 'clever-fox' ),
			'priority' => 7,
			'panel' => 'giant_frontpage_sections',
		)
	);

	//Funfact Documentation Link
	class WP_funfact_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add funfact section :</h3>
			<p>Frontpage Section > funfact Section <br><br> <a href="#" style="background-color:#03c281; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Funfact Doc Link // 
	$wp_customize->add_setting( 
		'funfact_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_funfact_Customize_Control($wp_customize,
	'funfact_doc_link' , 
		array(
			'label'          => __( 'Funfact Documentation Link', 'clever-fox' ),
			'section'        => 'funfact_setting',
			'type'           => 'radio',
			'description'    => __( 'Funfact Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	// Funfact content Section // 
	
	$wp_customize->add_setting(
		'funfact_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'funfact_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'funfact_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add funfact
	 */
	
		$wp_customize->add_setting( 'funfact_contents', 
			array(
			 'sanitize_callback' => 'giant_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => giant_get_funfact_default()
			)
		);
		
		$wp_customize->add_control( 
			new Giant_Repeater( $wp_customize, 
				'funfact_contents', 
					array(
						'label'   => esc_html__('Funfact','clever-fox'),
						'section' => 'funfact_setting',
						'add_field_label'                   => esc_html__( 'Add New Funfact', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Funfact', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
					) 
				) 
			);
	
	
	//Pro feature
		class Giant_funfact__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_funfact_upgrade_section up-to-pro" href="https://www.nayrathemes.com/giant-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'funfact_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'giant_sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Giant_funfact__section_upgrade(
			$wp_customize,
			'funfact_upgrade_to_pro',
				array(
					'section'				=> 'funfact_setting',
				)
			)
		);
}

add_action( 'customize_register', 'giant_funfact_setting' );

// funfact selective refresh
function giant_home_funfact_section_partials( $wp_customize ){	
	// funfact title
	$wp_customize->selective_refresh->add_partial( 'funfact_title', array(
		'selector'            => '.home-funfact .section-title h5',
		'settings'            => 'funfact_title',
		'render_callback'  => 'giant_funfact_title_render_callback',
	
	) );
	
	// funfact_subtitle
	$wp_customize->selective_refresh->add_partial( 'funfact_subtitle', array(
		'selector'            => '.home-funfact .section-title span.subtitle',
		'settings'            => 'funfact_subtitle',
		'render_callback'  => 'giant_funfact_subtitle_render_callback',
	
	) );
	
	// funfact content
	$wp_customize->selective_refresh->add_partial( 'funfact_contents', array(
		'selector'            => '.funfact-section .funfact'
	
	) );
	
	}

add_action( 'customize_register', 'giant_home_funfact_section_partials' );

// funfact title
function giant_funfact_title_render_callback() {
	return get_theme_mod( 'funfact_title' );
}

// funfact_subtitle
function giant_funfact_subtitle_render_callback() {
	return get_theme_mod( 'funfact_subtitle' );
}