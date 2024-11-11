<?php
function evita_service_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service  Section
	=========================================*/
	$wp_customize->add_section(
		'service_setting', array(
			'title' => esc_html__( 'Service Section', 'clever-fox' ),
			'priority' => 3,
			'panel' => 'evita_frontpage_sections',
		)
	);

	// Setting Head
	$wp_customize->add_setting(
		'service_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'service_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','clever-fox'),
			'section' => 'service_setting',
		)
	);

	// Hide / Show 
	$wp_customize->add_setting(
		'service_hs'
			,array(
			'default'     	=> '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'service_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','clever-fox'),
			'section' => 'service_setting',
		)
	);

	//Service Documentation Link
	class WP_service_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add service section :</h3>
			<p>Frontpage Section > service Section <br><br> <a href="#" style="background-color:#4bffa5; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Service Doc Link // 
	$wp_customize->add_setting( 
		'service_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_service_Customize_Control($wp_customize,
	'service_doc_link' , 
		array(
			'label'          => __( 'Service Documentation Link', 'clever-fox' ),
			'section'        => 'service_setting',
			'type'           => 'radio',
			'description'    => __( 'Service Documentation Link', 'clever-fox' ), 
		) 
	) );

	// Service Section // 
	$wp_customize->add_setting(
		'service_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'service_headings',
		array(
			'type' => 'hidden',
			'label' => __('Services','clever-fox'),
			'section' => 'service_setting',
		)
	);
	
	// Service Title // 
	$wp_customize->add_setting(
    	'service_title',
    	array(
	        'default'			=> __('What I am Doing','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'service_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'service_setting',
			'type'           => 'text',
		)  
	);
	
	// Service Subtitle // 
	$wp_customize->add_setting(
    	'service_subtitle',
    	array(
	        'default'			=> __('<span class="primary_color">Service</span> For You','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'service_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'service_setting',
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'service_desc',
    	array(
	        'default'			=> __('There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'service_desc',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'service_setting',
			'type'           => 'text',
		)  
	);

	// Service content Section // 
	
	$wp_customize->add_setting(
		'service_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'service_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'service_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add service
	 */
	
		$wp_customize->add_setting( 'service_contents', 
			array(
			 'sanitize_callback' => 'evita_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => evita_get_service_default()
			)
		);
		
		$wp_customize->add_control( 
			new Evita_Repeater( $wp_customize, 
				'service_contents', 
					array(
						'label'   => esc_html__('Service','clever-fox'),
						'section' => 'service_setting',
						'add_field_label'                   => esc_html__( 'Add New Service', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Service', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);

			//Pro feature
	class Evita_service__section_upgrade extends WP_Customize_Control {
		public function render_content() { 
		?>
			<a class="customizer_service_upgrade_section up-to-pro" href="https://www.nayrathemes.com/evita-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
		<?php
		}
	}
	
	$wp_customize->add_setting( 'evita_service_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 8,
	));
	$wp_customize->add_control(
		new Evita_service__section_upgrade(
		$wp_customize,
		'evita_service_upgrade_to_pro',
			array(
				'section'				=> 'service_setting',
				'settings'				=> 'evita_service_upgrade_to_pro',
			)
		)
	);	

	// service column // 
	$wp_customize->add_setting(
    	'service_sec_column',
    	array(
	        'default'			=> '4',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'service_sec_column',
		array(
		    'label'   		=> __('Service Column','clever-fox'),
		    'section' 		=> 'service_setting',
			'settings'   	 => 'service_sec_column',
			'type'			=> 'select',
			'choices'        => 
			array(
				'6' => __( '2 Column', 'clever-fox' ),
				'4' => __( '3 Column', 'clever-fox' ),
				'3' => __( '4 Column', 'clever-fox' ),
			) 
		) 
	);
	
}

add_action( 'customize_register', 'evita_service_setting' );

// service selective refresh
function evita_home_service_section_partials( $wp_customize ){	
	// service title
	$wp_customize->selective_refresh->add_partial( 'service_title', array(
		'selector'            => '.service-home .section-title h2',
		'settings'            => 'service_title',
		'render_callback'  	  => 'evita_service_title_render_callback',
	) );
	
	// service title
	$wp_customize->selective_refresh->add_partial( 'service_subtitle', array(
		'selector'            => '.service-home .section-title h5',
		'settings'            => 'service_subtitle',
		'render_callback'     => 'evita_service_subtitle_render_callback',
	) );
	
	// service_desc
	$wp_customize->selective_refresh->add_partial( 'service_desc', array(
		'selector'            => '.service-home .section-title p',
		'settings'            => 'service_desc',
		'render_callback'     => 'evita_service_desc_render_callback',
	) );

	// service content
	$wp_customize->selective_refresh->add_partial( 'service_contents', array(
		'selector'            => '.service-home .service'
	) );
}

add_action( 'customize_register', 'evita_home_service_section_partials' );

// service title
function evita_service_title_render_callback() {
	return get_theme_mod( 'service_title' );
}

// service subtitle
function evita_service_subtitle_render_callback() {
	return get_theme_mod( 'service_subtitle' );
}