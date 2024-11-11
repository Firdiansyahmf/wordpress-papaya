<?php 
function medazin_info_setting( $wp_customize ) {

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Info
	=========================================*/
		$wp_customize->add_section(
			'info_setting', array(
				'title' => esc_html__( 'Info Section', 'clever-fox' ),
				'panel' => 'medazin_frontpage_sections',
				'priority' => 2,
			)
		);
		
		
	//Info Documentation Link
	class WP_info_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   ?>
			<h3><?php esc_html_e('Section Documentation','clever-fox'); ?></h3>
			<p><?php /* Translators: 1: anchor 2: end */printf(esc_html__('%1$s Click Here %2$s','clever-fox'),'<a href="#" style="background-color:#21CDC0; color:#fff;display: flex;align-items: center;justify-content: center;text-decoration: none;   font-weight: 600;padding: 15px 10px;">','</a>'); ?></p>
			
		<?php
	   }
	}
	
	// Info Doc Link // 
	$wp_customize->add_setting( 
		'info_doc_link' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control(new WP_info_Customize_Control($wp_customize,
	'info_doc_link' , 
		array(
			'label'          => __( 'Info Documentation Link', 'clever-fox' ),
			'section'        => 'info_setting',
			'type'           => 'radio',
			'description'    => __( 'Info Documentation Link', 'clever-fox' ), 
		) 
	) );
	
	/*=========================================
	Info contents 
	=========================================*/
	
	// Content
	$wp_customize->add_setting(
		'info_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'info_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'info_setting',
		)
	);
	
	// Info Title // 
	$wp_customize->add_setting(
    	'info_title',
    	array(
	        'default'			=> __('Departments','clever-fox'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'medazin_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'info_title',
		array(
		    'label'   => __('Title','clever-fox'),
		    'section' => 'info_setting',
			'type'           => 'text',
		)  
	);
	
	/**
	 * Customizer Repeater for add info
	 */
	
		$wp_customize->add_setting( 'info_contents', 
			array(
			 'sanitize_callback' => 'medazin_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => medazin_get_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Medazin_Repeater( $wp_customize, 
				'info_contents', 
					array(
						'label'   => esc_html__('Info','clever-fox'),
						'section' => 'info_setting',
						'add_field_label'                   => esc_html__( 'Add New Info', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Info', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
					) 
				) 
			);
	
	//Pro feature
		class Medazin_info__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme	
				
			?>
				<a class="customizer_info_upgrade_section up-to-pro" href="https://www.nayrathemes.com/medazin-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }
		}
		
		$wp_customize->add_setting( 'medazin_info_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new Medazin_info__section_upgrade(
			$wp_customize,
			'medazin_info_upgrade_to_pro',
				array(
					'section'				=> 'info_setting',
				)
			)
		);
}
add_action( 'customize_register', 'medazin_info_setting' );

// features selective refresh
function medazin_info_section_partials( $wp_customize ){	
	// features title
	$wp_customize->selective_refresh->add_partial( 'info_title', array(
		'selector'            => '.info-section .toggle-btn button#toggle-btn ',
		'settings'            => 'info_title',
		'render_callback'  => 'medazin_info_title_render_callback',
	
	) );
	
	
	// features content
	$wp_customize->selective_refresh->add_partial( 'info_contents', array(
		'selector'            => '.info-section .info-carousel .title-box span',
		'settings'            => 'info_contents',
	) );
	
	}

add_action( 'customize_register', 'medazin_info_section_partials' );

// info_title
function medazin_info_title_render_callback() {
	return get_theme_mod( 'info_title' );
}