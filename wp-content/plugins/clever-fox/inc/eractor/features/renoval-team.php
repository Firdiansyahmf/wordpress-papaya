<?php
function renoval_team_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Team  Section
	=========================================*/
	$wp_customize->add_section(
		'team_setting', array(
			'title' => esc_html__( 'Team Section', 'clever-fox' ),
			'priority' => 9,
			'panel' => 'renoval_frontpage_sections',
		)
	);

	//Team Documentation Link
	class WP_team_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('Section Documentation','clever-fox'); ?></h3>
			<p><a href="#"  target="_blank"  style="background-color:#fcb900; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;"><?php esc_html_e('Click Here','clever-fox'); ?></a></p>
			
		<?php
	   }
	}
	
	// Team Doc Link // 
	$wp_customize->add_setting( 
		'team_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_team_Customize_Control($wp_customize,
	'team_doc_link' , 
		array(
			'label'          => __( 'Team Documentation Link', 'clever-fox' ),
			'section'        => 'team_setting',
			'type'           => 'radio',
			'description'    => __( 'Team Documentation Link', 'clever-fox' ), 
		) 
	) );

	// Team Header Section // 
	$wp_customize->add_setting(
		'team_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'team_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'team_setting',
		)
	);
	
	// Team Subtitle // 
	$wp_customize->add_setting(
    	'team_subtitle',
    	array(
	        'default'			=> __('<h2>Outstanding</h2><div class="animation"><div class="first"><div>Team</div></div></div>','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'team_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'team_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Team Description // 
	$wp_customize->add_setting(
    	'team_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'team_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'team_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Team Background // 
	$wp_customize->add_setting( 
    	'team_bg_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL . 'inc/eractor/images/team/team-bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'team_bg_image' ,
		array(
			'label'          => __( 'Background Image', 'clever-fox' ),
			'section'        => 'team_setting',
		) 
	));

	// Team content Section // 
	
	$wp_customize->add_setting(
		'team_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'renoval_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'team_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'team_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add team
	 */
	
		$wp_customize->add_setting( 'team_contents', 
			array(
			 'sanitize_callback' => 'renoval_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => renoval_get_team_default()
			)
		);
		
		$wp_customize->add_control( 
			new Renoval_Repeater( $wp_customize, 
				'team_contents', 
					array(
						'label'   => esc_html__('Team','clever-fox'),
						'section' => 'team_setting',
						'add_field_label'                   => esc_html__( 'Add New Team', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Team', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_repeater_control' => true,
					) 
				) 
			);
			
	//Pro feature
		class Renoval_team__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
			?>
				<a class="customizer_team_upgrade_section up-to-pro" href="https://www.nayrathemes.com/renoval-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			<?php
			}
		}
		
		$wp_customize->add_setting( 'renoval_team_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Renoval_team__section_upgrade(
			$wp_customize,
			'renoval_team_upgrade_to_pro',
				array(
					'section'				=> 'team_setting',
				)
			)
		);
	
	
}

add_action( 'customize_register', 'renoval_team_setting' );

// team selective refresh
function renoval_home_team_section_partials( $wp_customize ){	
	
	// team subtitle
	$wp_customize->selective_refresh->add_partial( 'team_subtitle', array(
		'selector'            => '.team-home .section-title div h2',
		'settings'            => 'team_subtitle',
		'render_callback'  => 'renoval_team_subtitle_render_callback',
	
	) );
	
	// team description
	$wp_customize->selective_refresh->add_partial( 'team_description', array(
		'selector'            => '.team-home .section-title p',
		'settings'            => 'team_description',
		'render_callback'  => 'renoval_team_desc_render_callback',
	
	) );
	// team content
	$wp_customize->selective_refresh->add_partial( 'team_contents', array(
		'selector'            => '.team-member'
	
	) );
	
	}

add_action( 'customize_register', 'renoval_home_team_section_partials' );

// team subtitle
function renoval_team_subtitle_render_callback() {
	return get_theme_mod( 'team_subtitle' );
}

// team description
function renoval_team_desc_render_callback() {
	return get_theme_mod( 'team_description' );
}