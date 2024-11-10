<?php
function medazin_process_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Process  Section
	=========================================*/
	$wp_customize->add_section(
		'process_setting', array(
			'title' => esc_html__( 'Process Section', 'clever-fox' ),
			'priority' => 14,
			'panel' => 'medazin_frontpage_sections',
		)
	);

	//Process Documentation Link
	class WP_process_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html__('How to add process section :','clever-fox'); ?></h3>
			<p><?php esc_html_e('Frontpage Section > process Section','clever-fox'); ?> <br><br> <?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:#21CDC0; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>');?></p>
			
		<?php
	   }
	}
	
	// Process Doc Link // 
	$wp_customize->add_setting( 
		'process_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_process_Customize_Control($wp_customize,
	'process_doc_link' , 
		array(
			'label'          => __( 'Process Documentation Link', 'clever-fox' ),
			'section'        => 'process_setting',
			'type'           => 'radio',
			'description'    => __( 'Process Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	// Process Header Section // 
	$wp_customize->add_setting(
		'process_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'process_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'process_setting',
		)
	);
	
	// Process Title // 
	$wp_customize->add_setting(
    	'process_title',
    	array(
	        'default'			=> __('Our Work Process','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'process_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'process_setting',
			'type'           => 'text',
		)  
	);
	
	// Process Subtitle // 
	$wp_customize->add_setting(
    	'process_subtitle',
    	array(
	        'default'			=> __('Process','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'process_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'process_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Fetaures content Section // 
	
	$wp_customize->add_setting(
		'feature_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'feature_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'process_setting',
		)
	);
	
	//  Image // 
    $wp_customize->add_setting( 
    	'process_bg_img' , 
    	array(
			'default' 			=> esc_url(CLEVERFOX_PLUGIN_URL . '/inc/medazin/images/work-process/bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_url',	
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'process_bg_img' ,
		array(
			'label'          => esc_html__( 'Image', 'clever-fox'),
			'section'        => 'process_setting',
		) 
	));
	
	/**
	 * Customizer Repeater for add Processs
	 */
	
		$wp_customize->add_setting( 'process_contents', 
			array(
			 'sanitize_callback' => 'medazin_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 9,
			 'default' => medazin_get_process_default()
			)
		);
		
		$wp_customize->add_control( 
			new Medazin_Repeater( $wp_customize, 
				'process_contents', 
					array(
						'label'   => esc_html__('Processs','clever-fox'),
						'section' => 'process_setting',
						'add_field_label'                   => esc_html__( 'Add New Process', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Process', 'clever-fox' ),
						'customizer_repeater_title_control' => true,
						
					) 
				) 
			);



	//Pro feature
	class Medazin_process__section_upgrade extends WP_Customize_Control {
		public function render_content() { 
			$theme = wp_get_theme(); // gets the current theme	
			
		?>
			<a class="customizer_process_upgrade_section up-to-pro" href="https://www.nayrathemes.com/clever-fox/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
		<?php }
	}
	
	$wp_customize->add_setting( 'medazin_process_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 5,
	));
	$wp_customize->add_control(
		new Medazin_process__section_upgrade(
		$wp_customize,
		'medazin_process_upgrade_to_pro',
			array(
				'section'				=> 'process_setting',
			)
		)
	);	
}

add_action( 'customize_register', 'medazin_process_setting' );

// process selective refresh
function medazin_process_section_partials( $wp_customize ){	
	// process_title
	$wp_customize->selective_refresh->add_partial( 'process_title', array(
		'selector'            => '.home-process .section-title h5',
		'settings'            => 'process_title',
		'render_callback'  => 'medazin_process_title_render_callback',
	
	) );
	
	// process_subtitle
	$wp_customize->selective_refresh->add_partial( 'process_subtitle', array(
		'selector'            => '.home-process .section-title span.subtitle',
		'settings'            => 'process_subtitle',
		'render_callback'  => 'medazin_process_subtitle_render_callback',
	
	) );
	
	// process
	$wp_customize->selective_refresh->add_partial( 'process', array(
		'selector'            => '.home-process .item-wrap'
	
	) );
	
	}

add_action( 'customize_register', 'medazin_process_section_partials' );

// process_title
function medazin_process_title_render_callback() {
	return get_theme_mod( 'process_title' );
}

// process_subtitle
function medazin_process_subtitle_render_callback() {
	return get_theme_mod( 'process_subtitle' );
}