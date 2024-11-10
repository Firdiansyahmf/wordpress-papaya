<?php
function corpex_team_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Team  Section
	=========================================*/
	$wp_customize->add_section(
		'team_setting', array(
			'title' => esc_html__( 'Team Section', 'clever-fox' ),
			'priority' => 9,
			'panel' => 'corpex_frontpage_sections',
		)
	);

	//Team Documentation Link
	class WP_team_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('How to add team section :','clever-fox'); ?></h3>
			<p><?php esc_html_e('Frontpage Section > team Section','clever-fox'); ?> <br><br> <?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:rgba(223, 69, 44, 1); color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
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
			'sanitize_callback' => 'corpex_sanitize_text',
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
	        'default'			=> 'Our <span>Team</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
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
	
	// Team Description // 
	$wp_customize->add_setting(
    	'team_description',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_html',
			'priority' => 5,
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

	// Team content Section // 
	
	$wp_customize->add_setting(
		'team_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
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
			 'sanitize_callback' => 'corpex_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => corpex_get_team_default()
			)
		);
		
		$wp_customize->add_control( 
			new corpex_Repeater( $wp_customize, 
				'team_contents', 
					array(
						'label'   => esc_html__('Team','clever-fox'),
						'section' => 'team_setting',
						'add_field_label'                   => esc_html__( 'Add New Team', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Team', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_repeater_control' => true,
					) 
				) 
			);
	// team column // 
	$wp_customize->add_setting(
    	'team_sec_column',
    	array(
	        'default'			=> '3',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'team_sec_column',
		array(
		    'label'   		=> __('Team Column','clever-fox'),
		    'section' 		=> 'team_setting',
			'settings'   	 => 'team_sec_column',
			'type'			=> 'select',
			'choices'        => 
			array(
				'6' => __( '2 Column', 'clever-fox' ),
				'4' => __( '3 Column', 'clever-fox' ),
				'3' => __( '4 Column', 'clever-fox' ),
			) 
		) 
	);
	
	$wp_customize->add_setting( 
    	'team_bg_image' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/team/team-bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_url',	
			'priority' => 14,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'team_bg_image' ,
		array(
			'label'          => __( 'Background Image', 'clever-fox' ),
			'section'        => 'team_setting',
		) 
	));
	
	$wp_customize->add_setting( 
		'team_bg_position' , 
			array(
			'default' => 'fixed',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_select',
			'priority' => 15,
		) 
	);
	
	$wp_customize->add_control(
		'team_bg_position' , 
			array(
				'label'          => __( 'Image Position', 'clever-fox' ),
				'section'        => 'team_setting',
				'type'           => 'radio',
				'choices'        => 
				array(
					'fixed'=> __( 'Fixed', 'clever-fox' ),
					'scroll' => __( 'Scroll', 'clever-fox' )
			)  
		) 
	);
	
	//Pro feature
		class Corpex_team__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_team_upgrade_section up-to-pro" href="https://www.nayrathemes.com/corpex-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'team_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'corpex_sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Corpex_team__section_upgrade(
			$wp_customize,
			'team_upgrade_to_pro',
				array(
					'section'	=> 'team_setting',
				)
			)
		);
}

add_action( 'customize_register', 'corpex_team_setting' );

// team selective refresh
function corpex_home_team_section_partials( $wp_customize ){	
	// team title
	$wp_customize->selective_refresh->add_partial( 'team_title', array(
		'selector'            => '.team-home .section-title h2',
		'settings'            => 'team_title',
		'render_callback'  => 'corpex_team_title_render_callback',
	
	) );
	
	// team description
	$wp_customize->selective_refresh->add_partial( 'team_description', array(
		'selector'            => '.team-home .section-title p',
		'settings'            => 'team_description',
		'render_callback'  => 'corpex_team_description_render_callback',
	
	) );
	
	// team content
	$wp_customize->selective_refresh->add_partial( 'team_contents', array(
		'selector'            => '.team-home .team-content h4'
	
	) );
	
	}

add_action( 'customize_register', 'corpex_home_team_section_partials' );

// team title
function corpex_team_title_render_callback() {
	return get_theme_mod( 'team_title' );
}

// team description
function corpex_team_desc_render_callback() {
	return get_theme_mod( 'team_description' );
}