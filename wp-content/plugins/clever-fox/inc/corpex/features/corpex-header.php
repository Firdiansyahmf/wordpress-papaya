<?php
function cleverfox_corpex_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/

	// Project Doc Link // 
	$wp_customize->add_setting( 
		'title_tagline_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_title_tagline_Customize_Control($wp_customize,
	'title_tagline_doc_link' , 
		array(
			'label'          => __( 'Site identity Documentation Link', 'clever-fox' ),
			'section'        => 'title_tagline',
			'type'           => 'radio',
			'description'    => __( 'Site identity Documentation Link', 'clever-fox' ), 
		) 
	) );

	// Logo Width // 
	if ( class_exists( 'Corpex_Pro_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'logo_width',
			array(
				'default'			=> '140',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'corpex_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Corpex_Pro_Customizer_Range_Control( $wp_customize, 'logo_width', 
			array(
				'label'      => __( 'Logo Width', 'clever-fox' ),
				'section'  => 'title_tagline',
				 'media_query'   => true,
					'input_attr'    => array(
						'mobile'  => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
						'tablet'  => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
						'desktop' => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
					),
			) ) 
		);
	}
	
	// Typography
	$wp_customize->add_setting(
		'logo_typography'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'logo_typography',
		array(
			'type' => 'hidden',
			'label' => __('Typography','clever-fox'),
			'section' => 'title_tagline',
			'priority' => 100,
		)
	);
	
	// Site Title Font Size// 
	if ( class_exists( 'Corpex_Pro_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'site_ttl_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'corpex_sanitize_range_value',
				'transport'         => 'postMessage'
			)
		);
		$wp_customize->add_control( 
		new Corpex_Pro_Customizer_Range_Control( $wp_customize, 'site_ttl_size', 
			array(
				'label'      => __( 'Site Title Font Size', 'clever-fox' ),
				'section'  => 'title_tagline',
				'priority' => 101,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
                    'desktop' => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
                ),
			) ) 
		);

	// Site Description Font Size// 	
		$wp_customize->add_setting(
			'site_desc_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'corpex_sanitize_range_value',
				'transport'         => 'postMessage'
			)
		);
		$wp_customize->add_control( 
		new Corpex_Pro_Customizer_Range_Control( $wp_customize, 'site_desc_size', 
			array(
				'label'      => __( 'Site Description Font Size', 'clever-fox' ),
				'section'  => 'title_tagline',
				'priority' => 102,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 12,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 12,
                    ),
                    'desktop' => array(
                        'min'           => 0,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => 12,
                    ),
                ),
			) ) 
		);
	}
	
	
	/*=========================================
	Above Header Section
	=========================================*/
	$wp_customize->add_section(
        'above_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Above Header','clever-fox'),
			'panel'  		=> 'header_section',
		)
    );
	
	/*=========================================
	Mobile
	=========================================*/
	$wp_customize->add_setting(
		'hdr_top_mbl'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 16,
		)
	);

	$wp_customize->add_control(
	'hdr_top_mbl',
		array(
			'type' => 'hidden',
			'label' => __('Phone','clever-fox'),
			'section' => 'above_header',
			
		)
	);

	//Header Mobile Details Link Documentation Link
	class WP_mbl_details_section_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to Add Mobile Details section :</h3>
			<p>Customizer > Above Header > Phone <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Header Doc Link // 
	$wp_customize->add_setting( 
		'mbl_details_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_mbl_details_section_Customize_Control($wp_customize,
	'mbl_details_doc_link' , 
		array(
			'label'          => __( 'Mobile Details Documentation Link', 'clever-fox' ),
			'section'        => 'above_header',
			'type'           => 'radio',
			'description'    => __( 'Mobile Details Documentation Link', 'clever-fox' ), 
		) 
	) );


	$wp_customize->add_setting( 
		'hide_show_mbl_details' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 17,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_mbl_details', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);	
	// icon // 
	$wp_customize->add_setting(
    	'tlh_mobile_icon',
    	array(
	        'default' => 'fa-phone-alt',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Corpex_Icon_Picker_Control($wp_customize, 
		'tlh_mobile_icon',
		array(
		    'label'   		=> __('Icon','clever-fox'),
		    'section' 		=> 'above_header',
			'iconset' => 'fa',
			
		))  
	);
	
	// Mobile title // 
	$wp_customize->add_setting(
    	'tlh_mobile_title',
    	array(
	        'default'			=> __('24x7 Call Supports','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'tlh_mobile_title',
		array(
		    'label'   		=> __('Phone Title','clever-fox'),
		    'section' 		=> 'above_header',
			'type'		 =>	'text'
		)  
	);
	
	// Mobile Number // 
	$wp_customize->add_setting(
    	'tlh_mobile_number',
    	array(
	        'default'			=> '70 975 975 70',
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'tlh_mobile_number',
		array(
		    'label'   		=> __('Phone Number','clever-fox'),
		    'section' 		=> 'above_header',
			'type'		 =>	'text'
		)  
	);	
	
	
	/*=========================================
	Email
	=========================================*/
	$wp_customize->add_setting(
		'hdr_top_email'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 16,
		)
	);

	$wp_customize->add_control(
	'hdr_top_email',
		array(
			'type' => 'hidden',
			'label' => __('Email','clever-fox'),
			'section' => 'above_header',
			
		)
	);

	//Header Mobile Details Link Documentation Link
	class WP_email_details_section_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to Add Email Details section :</h3>
			<p>Customizer > Above Header > Email <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Header Doc Link // 
	$wp_customize->add_setting( 
		'email_details_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_email_details_section_Customize_Control($wp_customize,
	'email_details_doc_link' , 
		array(
			'label'          => __( 'Email Details Documentation Link', 'clever-fox' ),
			'section'        => 'above_header',
			'type'           => 'radio',
			'description'    => __( 'Email Details Documentation Link', 'clever-fox' ), 
		) 
	) );


	$wp_customize->add_setting( 
		'hide_show_email_details' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 17,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_email_details', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);	
	// icon // 
	$wp_customize->add_setting(
    	'tlh_email_icon',
    	array(
	        'default' => 'fa-envelope',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Corpex_Icon_Picker_Control($wp_customize, 
		'tlh_email_icon',
		array(
		    'label'   		=> __('Icon','clever-fox'),
		    'section' 		=> 'above_header',
			'iconset' => 'fa',
			
		))  
	);
	
	// Email title // 
	$wp_customize->add_setting(
    	'tlh_email_title',
    	array(
	        'default'			=> __('Write Us','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'tlh_email_title',
		array(
		    'label'   		=> __('Email Title','clever-fox'),
		    'section' 		=> 'above_header',
			'type'		 =>	'text'
		)  
	);
	
	// Mobile Number // 
	$wp_customize->add_setting(
    	'tlh_email',
    	array(
	        'default'			=> __('email@example.com','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'tlh_email',
		array(
		    'label'   		=> __('Email Address','clever-fox'),
		    'section' 		=> 'above_header',
			'type'		 =>	'text'
		)  
	);
	
	/**
	 * Customizer Repeater
	 */
	 
	 $wp_customize->add_setting( 
		'hide_show_social_icon' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 19,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_social_icon', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);	
		$wp_customize->add_setting( 'social_icons', 
			array(
			 'sanitize_callback' => 'Corpex_Repeater_sanitize',
			 'priority' => 2,
			 'default' => corpex_get_social_icon_default()
		)
		);
		
		$wp_customize->add_control( 
			new Corpex_Repeater( $wp_customize, 
				'social_icons', 
					array(
						'label'   => esc_html__('Social Icons','clever-fox'),
						'section' => 'above_header',
						'add_field_label'                   => esc_html__( 'Add New Social', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Social', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
	
	//Pro feature
		class Corpex_social_icon__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_social_upgrade_section up-to-pro" href="https://www.nayrathemes.com/corpex-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'social_icon_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'corpex_sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Corpex_social_icon__section_upgrade(
			$wp_customize,
			'social_icon_upgrade_to_pro',
				array(
					'section'	=> 'above_header',
				)
			)
		);
	
	/*=========================================
	Bottom Header Section
	=========================================*/
	$wp_customize->add_section(
        'bottom_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Bottom Header','clever-fox'),
			'panel'  		=> 'header_section',
		)
    );
	
	/*=========================================
	Office Hours
	=========================================*/
	$wp_customize->add_setting(
		'hdr_top_office_hours'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 16,
		)
	);

	$wp_customize->add_control(
	'hdr_top_office_hours',
		array(
			'type' => 'hidden',
			'label' => __('Office Hours','clever-fox'),
			'section' => 'bottom_header',
			
		)
	);

	//Header Address Details Link Documentation Link
	class WP_office_hours_details_section_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to Add Office Hours Details section :</h3>
			<p>Customizer > Above Header > Office Hours <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Header Doc Link // 
	$wp_customize->add_setting( 
		'office_hours_details_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_office_hours_details_section_Customize_Control($wp_customize,
	'office_hours_details_doc_link' , 
		array(
			'label'          => __( 'Office Hours Details Documentation Link', 'clever-fox' ),
			'section'        => 'bottom_header',
			'type'           => 'radio',
			'description'    => __( 'Office Hours Details Documentation Link', 'clever-fox' ), 
		) 
	) );


	$wp_customize->add_setting( 
		'hide_show_office_hours_details' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 17,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_office_hours_details', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'bottom_header',
			'type'        => 'checkbox'
		) 
	);	
	// icon // 
	$wp_customize->add_setting(
    	'tlh_office_hours_icon',
    	array(
	        'default' => 'fa-clock',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Corpex_Icon_Picker_Control($wp_customize, 
		'tlh_office_hours_icon',
		array(
		    'label'   		=> __('Icon','clever-fox'),
		    'section' 		=> 'bottom_header',
			'iconset' => 'fa',
			
		))  
	);
	
	// Address title // 
	$wp_customize->add_setting(
    	'tlh_office_hours_title',
    	array(
	        'default'			=> __('Opening Hour:','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'tlh_office_hours_title',
		array(
		    'label'   		=> __('Office Hours Title','clever-fox'),
		    'section' 		=> 'bottom_header',
			'type'		 =>	'text'
		)  
	);
	
	// Mobile Number // 
	$wp_customize->add_setting(
    	'tlh_office_hours',
    	array(
	        'default'			=> __('Mon-Sat 9:00am To 8:00pm','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'tlh_office_hours',
		array(
		    'label'   		=> __('Office Hours','clever-fox'),
		    'section' 		=> 'bottom_header',
			'type'		 =>	'text'
		)  
	);	
	
	
	/*=========================================
	Hiring Section
	=========================================*/
	$wp_customize->add_setting(
		'hdr_top_hiring'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'hdr_top_hiring',
		array(
			'type' => 'hidden',
			'label' => __('Hiring','clever-fox'),
			'section' => 'bottom_header',
		)
	);

		//Header Office Timing Link Documentation Link
	class WP_hiring_section_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to Add hiring Details section :</h3>
			<p>Customizer > Above Header > hiring <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Header Doc Link // 
	$wp_customize->add_setting( 
		'hiring_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_hiring_section_Customize_Control($wp_customize,
	'hiring_doc_link' , 
		array(
			'label'          => __( 'Hiring Documentation Link', 'clever-fox' ),
			'section'        => 'bottom_header',
			'type'           => 'radio',
			'description'    => __( 'Hiring Documentation Link', 'clever-fox' ), 
		) 
	) );


	$wp_customize->add_setting( 
		'hide_show_hiring_details' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 4,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_hiring_details', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'bottom_header',
			'type'        => 'checkbox'
		) 
	);	
	
	// Hiring Title // 
	$wp_customize->add_setting(
    	'tlh_hiring_title',
    	array(
	        'default'			=> __('Hiring','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 5,
		)
	);	

	$wp_customize->add_control( 
		'tlh_hiring_title',
		array(
		    'label'   		=> __('Hiring Title','clever-fox'),
		    'section' 		=> 'bottom_header',
			'type'		 	=>	'text'
		)  
	);
	
	// Hiring Slider Text // 
	$wp_customize->add_setting(
    	'tlh_hiring_text_slider',
    	array(
	        'default'			=> __('Lorem Ipsum is simply dummy text., Lorem Ipsum is simply dummy text., Lorem Ipsum is simply dummy text.','clever-fox'),
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 6,
		)
	);	

	$wp_customize->add_control( 
		'tlh_hiring_text_slider',
		array(
		    'label'   		=> __('Slider Text','clever-fox'),
		    'section' 		=> 'bottom_header',
			'type'		 	=>	'textarea'
		)  
	);

	/*=========================================
	Header Navigation
	=========================================*/	
	$wp_customize->add_section(
        'header_navigation',
        array(
        	'priority'      => 4,
            'title' 		=> __('Header Navigation','clever-fox'),
			'panel'  		=> 'header_section',
		)
    );

	//Header Navigation Documentation Link
	class WP_header_navigation_section_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to Use Header Navigation section :</h3>
			<p>Customizer > Header Navigation <br><br> <a href="#" style="background-color:rgba(223, 69, 44, 1);; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Header Navigation Doc Link // 
	$wp_customize->add_setting( 
		'header_navigation_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_header_navigation_section_Customize_Control($wp_customize,
	'header_navigation_doc_link' , 
		array(
			'label'          => __( 'Header Navigation Documentation Link', 'clever-fox' ),
			'section'        => 'header_navigation',
			'type'           => 'radio',
			'description'    => __( 'Header Navigation Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	// Header Toggle
	$wp_customize->add_setting(
		'hdr_nav_button'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 11,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_button',
		array(
			'type' => 'hidden',
			'label' => __('Button','clever-fox'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hs_nav_button' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 12,
		) 
	);
	
	$wp_customize->add_control(
	'hs_nav_button', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// Button Link // 
	$wp_customize->add_setting(
    	'tlh_btn_lbl',
    	array(
	        'default'			=> 'Get A Quote',
			'sanitize_callback' => 'corpex_sanitize_text',
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 5,
		)
	);	
	
	$wp_customize->add_control( 
		'tlh_btn_lbl',
		array(
		    'label'   		=> __('Button Label','clever-fox'),
		    'section' 		=> 'header_navigation',
			'type'		 	=>	'text'
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'tlh_btn_link',
    	array(
	        'default'			=> '#',
			'sanitize_callback' => 'corpex_pro_sanitize_url',
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 5,
		)
	);	

	$wp_customize->add_control( 
		'tlh_btn_link',
		array(
		    'label'   		=> __('Button Link','clever-fox'),
		    'section' 		=> 'header_navigation',
			'type'		 	=>	'text'
		)  
	);
	
	/*=========================================
	Sticky Header
	=========================================*/	
	$wp_customize->add_section(
        'sticky_header_set',
        array(
        	'priority'      => 4,
            'title' 		=> __('Sticky Header','clever-fox'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Heading
	$wp_customize->add_setting(
		'sticky_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'sticky_head',
		array(
			'type' => 'hidden',
			'label' => __('Sticky Header','clever-fox'),
			'section' => 'sticky_header_set',
		)
	);

	
	// Header Navigation Doc Link // 
	$wp_customize->add_setting( 
		'header_sticky_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_header_sticky_section_Customize_Control($wp_customize,
	'header_sticky_doc_link' , 
		array(
			'label'          => __( 'Header Sticky Documentation Link', 'clever-fox' ),
			'section'        => 'sticky_header_set',
			'type'           => 'radio',
			'description'    => __( 'Header Sticky Documentation Link', 'clever-fox' ), 
		) 
	) );

	$wp_customize->add_setting( 
		'hide_show_sticky' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'corpex_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_sticky', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'clever-fox' ),
			'section'     => 'sticky_header_set',
			'type'        => 'checkbox'
		) 
	);	
}
add_action( 'customize_register', 'cleverfox_corpex_header_settings' );

// Header selective refresh
function cleverfox_corpex_header_partials( $wp_customize ){
	
	// tlh_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'tlh_btn_lbl', array(
		'selector'            => '#navbarSupportedContent .button-area .main-btn',
		'settings'            => 'tlh_btn_lbl',
		'render_callback'  => 'corpex_pro_tlh_btn_lbl_render_callback',
	) );
	
	// tlh_hiring_title
	$wp_customize->selective_refresh->add_partial( 'tlh_hiring_title', array(
		'selector'            => '.header-bottom .widget-contact .contact-info .text span.title',
		'settings'            => 'tlh_hiring_title',
		'render_callback'  => 'corpex_pro_tlh_hiring_title_render_callback',
	) );
	
	// tlh_office_hours_title
	$wp_customize->selective_refresh->add_partial( 'tlh_office_hours_title', array(
		'selector'            => '.header-bottom .text-end .widget-contact .contact-info .text span',
		'settings'            => 'tlh_office_hours_title',
		'render_callback'  => 'corpex_pro_tlh_office_hours_title_render_callback',
	) );
	
	// tlh_email
	$wp_customize->selective_refresh->add_partial( 'tlh_email', array(
		'selector'            => '.main-header .widget-email .contact-area .contact-info p a',
		'settings'            => 'tlh_email',
		'render_callback'  => 'corpex_pro_tlh_email_render_callback',
	) );
	
	// tlh_email_title
	$wp_customize->selective_refresh->add_partial( 'tlh_email_title', array(
		'selector'            => '.main-header .widget-email .contact-area .contact-info p span',
		'settings'            => 'tlh_email_title',
		'render_callback'  => 'corpex_pro_tlh_email_title_render_callback',
	) );

	// tlh_mobile_title
	$wp_customize->selective_refresh->add_partial( 'tlh_mobile_title', array(
		'selector'            => '.main-header .widget-phone .contact-area .contact-info p span',
		'settings'            => 'tlh_mobile_title',
		'render_callback'  => 'corpex_pro_tlh_mobile_title_render_callback',
	) );
	
	// tlh_mobile_number
	$wp_customize->selective_refresh->add_partial( 'tlh_mobile_number', array(
		'selector'            => '.main-header .widget-phone .contact-area .contact-info p a',
		'settings'            => 'tlh_mobile_number',
		'render_callback'  => 'corpex_pro_tlh_mobile_number_render_callback',
	) );
	
	// tlh_email_icon
	$wp_customize->selective_refresh->add_partial( 'tlh_email_icon', array(
		'selector'            => '.author-popup .widget-contact .content-area .contact-icon i',
		'settings'            => 'tlh_email_icon',
		'render_callback'  => 'corpex_pro_tlh_email_icon_render_callback',
	) );
	
	// tlh_contct_icon
	$wp_customize->selective_refresh->add_partial( 'tlh_contct_icon', array(
		'selector'            => '.author-popup .widget-contact .content-area .contact-icon i',
		'settings'            => 'tlh_contct_icon',
		'render_callback'  => 'corpex_pro_tlh_contct_icon_render_callback',
	) );
	
	// tlh_contact_address
	$wp_customize->selective_refresh->add_partial( 'tlh_contact_address', array(
		'selector'            => '.author-popup .widget-contact .content-area .contact-info a span',
		'settings'            => 'tlh_contact_address',
		'render_callback'  => 'corpex_pro_tlh_contact_address_render_callback',
	) );
	}

add_action( 'customize_register', 'cleverfox_corpex_header_partials' );

// tlh_mobile_icon
function cleverfox_corpex_tlh_mobile_icon_render_callback() {
	return get_theme_mod( 'tlh_mobile_icon' );
}

// tlh_mobile_title
function cleverfox_corpex_tlh_mobile_title_render_callback() {
	return get_theme_mod( 'tlh_mobile_title' );
}

// tlh_mobile_number
function cleverfox_corpex_tlh_mobile_number_render_callback() {
	return get_theme_mod( 'tlh_mobile_number' );
}

// tlh_email_icon
function cleverfox_corpex_tlh_email_icon_render_callback() {
	return get_theme_mod( 'tlh_email_icon' );
}

// tlh_email
function cleverfox_corpex_tlh_email_render_callback() {
	return get_theme_mod( 'tlh_email' );
}

// tlh_contct_icon
function cleverfox_corpex_tlh_tlh_contct_icon_render_callback() {
	return get_theme_mod( 'tlh_contct_icon' );
}

// tlh_contact_address
function cleverfox_corpex_tlh_contact_address_render_callback() {
	return get_theme_mod( 'tlh_contact_address' );
}