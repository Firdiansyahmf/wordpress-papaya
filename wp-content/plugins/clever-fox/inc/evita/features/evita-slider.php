<?php
function evita_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
	$wp_customize->add_panel(
		'evita_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'clever-fox' ),
		)
	);
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'clever-fox' ),
			'panel' => 'evita_frontpage_sections',
			'priority' => 1,
		)
	);


	//Slider Documentation Link
	class WP_slider_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3>How to add slider section :</h3>
			<p>Frontpage Section > slider Section <br><br> <a href="#" style="background-color:#4bffa5; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">Click Here</a></p>
			
		<?php
	   }
	}
	
	// Slider Doc Link // 
	$wp_customize->add_setting( 
		'slider_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_slider_Customize_Control($wp_customize,
	'slider_doc_link' , 
		array(
			'label'          => __( 'Slider Documentation Link', 'clever-fox' ),
			'section'        => 'slider_setting',
			'type'           => 'radio',
			'description'    => __( 'Slider Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'evita_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','clever-fox'),
			'section' => 'slider_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add slides
	 */
	
		$wp_customize->add_setting( 'slider', 
			array(
			 'sanitize_callback' => 'evita_repeater_sanitize',
			 'priority' => 5,
			  'default' => evita_get_slider_default()
			)
		);
		
		$wp_customize->add_control( 
			new Evita_Repeater( $wp_customize, 
				'slider', 
					array(
						'label'   => esc_html__('Slide','clever-fox'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Slider', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Slider', 'clever-fox' ),			
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control'=> true,
						'customizer_repeater_link_control' => true,
						// 'customizer_repeater_button2_control' => true,
						// 'customizer_repeater_link2_control' => true,
						// 'customizer_repeater_slide_align' => true,
						// 'customizer_repeater_checkbox_control' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);


	//Pro feature
	class Evita_slider__section_upgrade extends WP_Customize_Control {
		public function render_content() { 
		?>
			<a class="customizer_slider_upgrade_section up-to-pro" href="https://www.nayrathemes.com/evita-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
		<?php
		}
	}
	
	$wp_customize->add_setting( 'evita_slider_upgrade_to_pro', array(
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		'priority' => 5,
	));
	$wp_customize->add_control(
		new Evita_slider__section_upgrade(
		$wp_customize,
		'evita_slider_upgrade_to_pro',
			array(
				'section'				=> 'slider_setting',
				'settings'				=> 'evita_slider_upgrade_to_pro',
			)
		)
	);	
	
}

add_action( 'customize_register', 'evita_slider_setting' );