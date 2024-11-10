<?php
function medazin_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Blog  Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'clever-fox' ),
			'priority' => 10,
			'panel' => 'medazin_frontpage_sections',
		)
	);

	//Blog Documentation Link
	class WP_blog_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('Section Documentation','clever-fox'); ?></h3>
			<p><?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:#21CDC0; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
		<?php
	   }
	}
	
	// Cta Doc Link // 
	$wp_customize->add_setting( 
		'blog_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_blog_Customize_Control($wp_customize,
	'blog_doc_link' , 
		array(
			'label'          => __( 'Blog Documentation Link', 'clever-fox' ),
			'section'        => 'blog_setting',
			'type'           => 'radio',
			'description'    => __( 'Blog Documentation Link', 'clever-fox' ), 
		) 
	) );

	// Blog Header Section // 
	$wp_customize->add_setting(
		'blog_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'blog_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','clever-fox'),
			'section' => 'blog_setting',
		)
	);
	
	// Blog Title // 
	$wp_customize->add_setting(
    	'blog_title',
    	array(
	        'default'			=> __('Our Blog','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);
	
	// Blog Subtitle // 
	$wp_customize->add_setting(
    	'blog_subtitle',
    	array(
	        'default'			=> __('Blog','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_subtitle',
		array(
		    'label'   => __('Subtitle','clever-fox'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);

	// Blog content Section // 
	
	$wp_customize->add_setting(
		'blog_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'blog_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'blog_setting',
		)
	);
	
	// Blog Category
	$wp_customize->add_setting(
    'blog_category_id',
		array(
		'capability' => 'edit_theme_options',
		'default' => 1,
		'priority' => 8,
		)
	);	
	$wp_customize->add_control( new Category_Dropdown_Custom_Control( $wp_customize, 
	'blog_category_id', 
		array(
		'label'   => __('Select category for Blog Section','clever-fox'),
		'section' => 'blog_setting',
		) 
	) );
	
	
	// Blog column // 
	$wp_customize->add_setting(
    	'blog_column',
    	array(
	        'default'			=> '3',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_select',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control(
		'blog_column',
		array(
		    'label'   		=> __('Blog Column','clever-fox'),
		    'section' 		=> 'blog_setting',
			'type'			=> 'select',
			'choices'        => 
			array(
				'6' => __( '2 column', 'clever-fox' ),
				'4' => __( '3 column', 'clever-fox' ),
				'3' => __( '4 column', 'clever-fox' ),
			) 
		) 
	);
	
	// blog_display_num
	if ( class_exists( 'Medazin_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'blog_display_num',
			array(
				'default' => '5',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'medazin_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Medazin_Customizer_Range_Control( $wp_customize, 'blog_display_num', 
			array(
				'label'      => __( 'No of Posts Display', 'clever-fox' ),
				'section'  => 'blog_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'    => 1,
							'max'    => 500,
							'step'   => 1,
							'default_value' => 5,
						),
					),
			) ) 
		);
	}
	
	
	// Enable Excerpt
	$wp_customize->add_setting(
		'enable_post_excerpt'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_checkbox',
			'priority'      => 9,
		)
	);

	$wp_customize->add_control(
	'enable_post_excerpt',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Excerpt','clever-fox'),
			'section' => 'blog_setting',
		)
	);
	
	
	// post Exerpt // 
	if ( class_exists( 'Medazin_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'medazin_post_excerpt',
			array(
				'default'     	=> '30',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'medazin_sanitize_range_value',
				'priority'      => 10,
			)
		);
		$wp_customize->add_control( 
		new Medazin_Customizer_Range_Control( $wp_customize, 'medazin_post_excerpt', 
			array(
				'label'      => __( 'Excerpt Length', 'clever-fox' ),
				'section'  => 'blog_setting',
				 'media_query'   => false,
                'input_attr'    => array(
                    'desktop' => array(
                       'min'           => 0,
                        'max'           => 1000,
                        'step'          => 1,
                        'default_value' => 30,
                    ),
				)	
			) ) 
		);
	}
	
	// excerpt more // 
	$wp_customize->add_setting(
    	'medazin_blog_excerpt_more',
    	array(
			'default'      => '...',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority'      => 11,
		)
	);	

	$wp_customize->add_control( 
		'medazin_blog_excerpt_more',
		array(
		    'label'   => esc_html__('Excerpt More','clever-fox'),
		    'section' => 'blog_setting',
			'type' => 'text',
		)  
	);
	
	
	// Enable Excerpt
	$wp_customize->add_setting(
		'enable_post_btn'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_checkbox',
			'priority'      => 12,
		)
	);

	$wp_customize->add_control(
	'enable_post_btn',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Read More Button','clever-fox'),
			'section' => 'blog_setting',
		)
	);
	
	// Readmore button
	$wp_customize->add_setting(
		'read_btn_txt'
			,array(
			'default' => __('Read more','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'priority'      => 13,
		)
	);

	$wp_customize->add_control(
	'read_btn_txt',
		array(
			'type' => 'text',
			'label' => __('Read More Button Text','clever-fox'),
			'section' => 'blog_setting',
		)
	);
	
	
	// blog After Before
	$wp_customize->add_setting(
		'blog_after_before'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'blog_after_before',
		array(
			'type' => 'hidden',
			'label' => __('Before / After Content','clever-fox'),
			'section' => 'blog_setting',
			'priority' => 21,
		)
	);
	
	// Before
	$wp_customize->add_setting(
	'blog_before_data',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'medazin_sanitize_number_absint',
		)
	);
		
	$wp_customize->add_control(
	'blog_before_data',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Before Content','clever-fox'),
			'section'	=> 'blog_setting',
			'priority'  => 22
		)
	);	
	
	// After
	$wp_customize->add_setting(
	'blog_after_data',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'medazin_sanitize_number_absint',
		)
	);
		
	$wp_customize->add_control(
	'blog_after_data',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for After Content','clever-fox'),
			'section'	=> 'blog_setting',
			'priority'  => 23
		)
	);
}

add_action( 'customize_register', 'medazin_blog_setting' );

// blog selective refresh
function medazin_home_blog_section_partials( $wp_customize ){	
	// blog title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.post-section .section-title h5',
		'settings'            => 'blog_title',
		'render_callback'  => 'medazin_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.post-section .section-title span.subtitle',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'medazin_blog_subtitle_render_callback',
	
	) );
	
	}

add_action( 'customize_register', 'medazin_home_blog_section_partials' );

// blog title
function medazin_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function medazin_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}