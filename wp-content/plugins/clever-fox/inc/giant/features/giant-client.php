<?php
function giant_client_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Client  Section
	=========================================*/
	$wp_customize->add_section(
		'client_setting', array(
			'title' => esc_html__( 'Client Section', 'clever-fox' ),
			'priority' => 8,
			'panel' => 'giant_frontpage_sections',
		)
	);

	//Client Documentation Link
	class WP_client_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add client section :</h3>
			<p>Frontpage Section > Client Section <br><br> <a href="#" style="background-color:#03c281; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Client Doc Link // 
	$wp_customize->add_setting( 
		'cl_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_client_Customize_Control($wp_customize,
	'cl_doc_link' , 
		array(
			'label'          => __( 'Client Documentation Link', 'clever-fox' ),
			'section'        => 'client_setting',
			'type'           => 'radio',
			'description'    => __( 'Client Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	// Client Header Section // 
	$wp_customize->add_setting(
		'client_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'client_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'client_setting',
		)
	);
	
	// Client Title // 
	$wp_customize->add_setting(
    	'client_title',
    	array(
	        'default'			=> __('Sponsors','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'client_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'client_setting',
			'type'           => 'text',
		)  
	);
	
	// Client Description // 
	$wp_customize->add_setting(
    	'client_description',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'client_description',
		array(
		    'label'   => __('Description','clever-fox'),
		    'section' => 'client_setting',
			'type'           => 'textarea',
		)  
	);

	// Client content Section // 
	
	$wp_customize->add_setting(
		'client_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'giant_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'client_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'client_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add client
	 */
	
		$wp_customize->add_setting( 'client_contents', 
			array(
			 'sanitize_callback' => 'giant_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => giant_get_client_default()
			)
		);
		
		$wp_customize->add_control( 
			new Giant_Repeater( $wp_customize, 
				'client_contents', 
					array(
						'label'   => esc_html__('Client','clever-fox'),
						'section' => 'client_setting',
						'add_field_label'                   => esc_html__( 'Add New Client', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Client', 'clever-fox' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
			
			//Pro feature
		class Giant_client__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_client_upgrade_section up-to-pro" href="https://www.nayrathemes.com/giant-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'giant_client_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Giant_client__section_upgrade(
			$wp_customize,
			'giant_client_upgrade_to_pro',
				array(
					'section'				=> 'client_setting',
				)
			)
		);
	
	
}

add_action( 'customize_register', 'giant_client_setting' );

// client selective refresh
function giant_home_client_section_partials( $wp_customize ){	
	// client title
	$wp_customize->selective_refresh->add_partial( 'client_title', array(
		'selector'            => '.sponsor-home .section-title h2',
		'settings'            => 'client_title',
		'render_callback'  => 'giant_client_title_render_callback',
	
	) );
	
	// client_subtitle
	$wp_customize->selective_refresh->add_partial( 'client_subtitle', array(
		'selector'            => '.sponsor-home .section-title span.sub-title',
		'settings'            => 'client_subtitle',
		'render_callback'  => 'giant_client_subtitle_render_callback',
	
	) );
	
	// client description
	$wp_customize->selective_refresh->add_partial( 'client_description', array(
		'selector'            => '.sponsor-home .section-title p',
		'settings'            => 'client_description',
		'render_callback'  => 'giant_client_desc_render_callback',
	
	) );
	// client content
	$wp_customize->selective_refresh->add_partial( 'client_contents', array(
		'selector'            => '.sponsor-home .sponsor-item'
	
	) );
	
	}

add_action( 'customize_register', 'giant_home_client_section_partials' );

// client title
function giant_client_title_render_callback() {
	return get_theme_mod( 'client_title' );
}
// client_subtitle
function giant_client_subtitle_render_callback() {
	return get_theme_mod( 'client_subtitle' );
}

// client description
function giant_client_desc_render_callback() {
	return get_theme_mod( 'client_description' );
}