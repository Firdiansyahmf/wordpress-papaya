<?php
function medazin_testimonial_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Team  Section
	=========================================*/
	$wp_customize->add_section(
		'testimonial_setting', array(
			'title' => esc_html__( 'Testimonial Section', 'clever-fox' ),
			'priority' => 15,
			'panel' => 'medazin_frontpage_sections',
		)
	);

	//Testimonial Documentation Link
	class WP_testimonial_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('Section Documentation','clever-fox'); ?></h3>
			<p><?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:#21CDC0; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
		<?php
	   }
	}
	
	// Testimonial Doc Link // 
	$wp_customize->add_setting( 
		'testimonial_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_testimonial_Customize_Control($wp_customize,
	'testimonial_doc_link' , 
		array(
			'label'          => __( 'Testimonial Documentation Link', 'clever-fox' ),
			'section'        => 'testimonial_setting',
			'type'           => 'radio',
			'description'    => __( 'Testimonial Documentation Link', 'clever-fox' ), 
		) 
	) );

	/*=========================================
	Testimonial Section
	=========================================*/
	// Head
	$wp_customize->add_setting(
		'testimonial_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 31,
		)
	);

	$wp_customize->add_control(
	'testimonial_headings',
		array(
			'type' => 'hidden',
			'label' => __('Testimonial Section','clever-fox'),
			'section' => 'testimonial_setting',
		)
	);
	
	// Hide/ Show  // 
	$wp_customize->add_setting( 
		'hs_testimonial' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'medazin_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 32,
		) 
	);
	
	$wp_customize->add_control(
	'hs_testimonial', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'clever-fox' ),
			'section'     => 'testimonial_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Title // 
	$wp_customize->add_setting(
    	'testimonial_ttl',
    	array(
	        'default'			=> __('Our Testimonial','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 33,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_ttl',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	
	// Testimonial Subtitle // 
	$wp_customize->add_setting(
    	'testimonial_subttl',
    	array(
	        'default'			=> __('Testimonial','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'testimonial_subttl',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'testimonial_setting',
			'type'           => 'text',
		)  
	);
	
	/**
	 * Customizer Repeater for add Testimonial
	 */
	
		$wp_customize->add_setting( 'testimonial_contents', 
			array(
			 'sanitize_callback' => 'medazin_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 35,
			 'default' => medazin_get_testimonial_default()
			)
		);
		
		$wp_customize->add_control( 
			new Medazin_Repeater( $wp_customize, 
				'testimonial_contents', 
					array(
						'label'   => esc_html__('Testimonial','clever-fox'),
						'section' => 'testimonial_setting',
						'add_field_label'                   => esc_html__( 'Add New Testimonial', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Testimonial', 'clever-fox' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);
			
		//Pro feature
		class Medazin_testimonial__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_testimonial_upgrade_section up-to-pro" href="https://www.nayrathemes.com/medazin-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'medazin_testimonial_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Medazin_testimonial__section_upgrade(
			$wp_customize,
			'medazin_testimonial_upgrade_to_pro',
				array(
					'section'				=> 'testimonial_setting',
				)
			)
		);
}

add_action( 'customize_register', 'medazin_testimonial_setting' );

// team selective refresh
function medazin_home_testimonial_section_partials( $wp_customize ){	
	// testimonial_ttl
	$wp_customize->selective_refresh->add_partial( 'testimonial_ttl', array(
		'selector'            => '.home-testimonial .section-title h5',
		'settings'            => 'testimonial_ttl',
		'render_callback'  => 'medazin_testimonial_ttl_render_callback',	
	) );
	
	// testimonial_subttl
	$wp_customize->selective_refresh->add_partial( 'testimonial_subttl', array(
		'selector'            => '.home-testimonial .section-title span.subtitle',
		'settings'            => 'testimonial_subttl',
		'render_callback'  => 'medazin_testimonial_subttl_render_callback',	
	) );
	
	
	 // testimonial_contents
	$wp_customize->selective_refresh->add_partial( 'testimonial_contents', array(
		'selector'            => '.testimonial-items h4',
	) );
	
}

add_action( 'customize_register', 'medazin_home_testimonial_section_partials' );

// pg_testimonial_ttl
function medazin_testimonial_ttl_render_callback() {
	return get_theme_mod( 'testimonial_ttl' );
}

// testimonial_subttl
function medazin_testimonial_subttl_render_callback() {
	return get_theme_mod( 'testimonial_subttl' );
}