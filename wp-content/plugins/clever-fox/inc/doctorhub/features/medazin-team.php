<?php
function medazin_team_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Team  Section
	=========================================*/
	$wp_customize->add_section(
		'team_setting', array(
			'title' => esc_html__( 'Team Section', 'clever-fox' ),
			'priority' => 9,
			'panel' => 'medazin_frontpage_sections',
		)
	);

	//Team Documentation Link
	class WP_team_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('How to add team section :','clever-fox'); ?></h3>
			<p><?php esc_html_e('Frontpage Section > team Section','clever-fox'); ?> <br><br> <?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:#21CDC0; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
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
			'sanitize_callback' => 'medazin_sanitize_text',
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
	
	// Team Title // 
	$wp_customize->add_setting(
    	'team_title',
    	array(
	        'default'			=> __('Our Doctors','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'team_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'team_setting',
			'type'           => 'text',
		)  
	);
	
	// Team Subtitle // 
	$wp_customize->add_setting(
    	'team_subtitle',
    	array(
	        'default'			=> __('Doctors','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'team_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'team_setting',
			'type'           => 'text',
		)  
	);

	// Team content Section // 
	
	$wp_customize->add_setting(
		'team_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
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
			 'sanitize_callback' => 'medazin_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => medazin_get_team_default()
			)
		);
		
		$wp_customize->add_control( 
			new Medazin_Repeater( $wp_customize, 
				'team_contents', 
					array(
						'label'   => esc_html__('Team','clever-fox'),
						'section' => 'team_setting',
						'add_field_label'                   => esc_html__( 'Add New Team', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Team', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_repeater_control' => true,
					) 
				) 
			);
			
			
	//Pro feature
		class Medazin_team__section_upgrade extends WP_Customize_Control {
		public function render_content() { 
			$theme = wp_get_theme(); // gets the current theme	
			
		?>
			<a class="customizer_team_upgrade_section up-to-pro" href="https://www.nayrathemes.com/medazin-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'medazin_team_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 5,
	));
	$wp_customize->add_control(
		new Medazin_team__section_upgrade(
		$wp_customize,
		'medazin_team_upgrade_to_pro',
			array(
				'section'				=> 'team_setting',
			)
		)
	);
		
}

add_action( 'customize_register', 'medazin_team_setting' );

// team selective refresh
function medazin_home_team_section_partials( $wp_customize ){	
	// team title
	$wp_customize->selective_refresh->add_partial( 'team_title', array(
		'selector'            => '.team-home .section-title h5',
		'settings'            => 'team_title',
		'render_callback'  => 'medazin_team_title_render_callback',
	
	) );
	
	// team subtitle
	$wp_customize->selective_refresh->add_partial( 'team_subtitle', array(
		'selector'            => '.team-home .section-title span.subtitle',
		'settings'            => 'team_subtitle',
		'render_callback'  => 'medazin_team_subtitle_render_callback',
	
	) );
	
	// team content
	$wp_customize->selective_refresh->add_partial( 'team_contents', array(
		'selector'            => '.team-home .content-box'
	
	) );
	
	}

add_action( 'customize_register', 'medazin_home_team_section_partials' );

// team title
function medazin_team_title_render_callback() {
	return get_theme_mod( 'team_title' );
}

// team subtitle
function medazin_team_subtitle_render_callback() {
	return get_theme_mod( 'team_subtitle' );
}

// team description
function medazin_team_desc_render_callback() {
	return get_theme_mod( 'team_description' );
}