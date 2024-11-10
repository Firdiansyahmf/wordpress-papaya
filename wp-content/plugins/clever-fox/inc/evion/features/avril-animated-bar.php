<?php
function avril_animate_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	animate  Section
	=========================================*/
	$wp_customize->add_section(
		'animate_setting', array(
			'title' => esc_html__( 'Animate Section', 'clever-fox' ),
			'priority' => 1,
			'panel' => 'avril_frontpage_sections',
		)
	);
	

	// animate content Section // 
	
	$wp_customize->add_setting(
		'animate_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'avril_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'animate_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','clever-fox'),
			'section' => 'animate_setting',
		)
	);
	
	$wp_customize->add_setting( 
		'hs_animate' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'avril_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_animate', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'clever-fox' ),
			'section'     => 'animate_setting',
			'type'        => 'checkbox'
		) 
	);
	/**
	 * Customizer Repeater for add animate
	 */
	
		$wp_customize->add_setting( 'animate_contents', 
			array(
			 'sanitize_callback' => 'avril_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => avril_get_animate_default()
			)
		);
		
		$wp_customize->add_control( 
			new Avril_Repeater( $wp_customize, 
				'animate_contents', 
					array(
						'label'   => esc_html__('animate','clever-fox'),
						'section' => 'animate_setting',
						'add_field_label'                   => esc_html__( 'Add New Animate', 'clever-fox' ),
						'item_name'                         => esc_html__( 'Animate', 'clever-fox' ),
						'customizer_repeater_icon_control' => true,
						//'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						//'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
	//Pro feature
		class Avril_animate__section_upgrade extends WP_Customize_Control {
			public function render_content() { 
				$theme = wp_get_theme(); // gets the current theme
				if ( 'Avtari' == $theme->name){
			?>
				<a class="customizer_team_upgrade_section up-to-pro" href="https://www.nayrathemes.com/avtari-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
			
			<?php }elseif ( 'Avitech' == $theme->name){ ?>	
				
				<a class="customizer_team_upgrade_section up-to-pro" href="https://www.nayrathemes.com/avitech-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php }elseif ( 'Varuda' == $theme->name){ ?>	
				
				<a class="customizer_team_upgrade_section up-to-pro" href="https://www.nayrathemes.com/varuda-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>	
				
			<?php }else{ ?>	
			
				<a class="customizer_animate_upgrade_section up-to-pro" href="https://www.nayrathemes.com/evion-pro/" target="_blank" style="display: none;"><?php esc_html_e('Upgrade to Pro','clever-fox'); ?></a>
				
			<?php
				}
			}
		}
		
		$wp_customize->add_setting( 'avril_animate_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 9,
		));
		$wp_customize->add_control(
			new Avril_animate__section_upgrade(
			$wp_customize,
			'avril_animate_upgrade_to_pro',
				array(
					'section'		=> 'animate_setting',
					'settings'				=> 'avril_animate_upgrade_to_pro',
					
				)
			)
		);
}

add_action( 'customize_register', 'avril_animate_setting' );

// animate selective refresh
function avril_home_animate_section_partials( $wp_customize ){	
	// animate title
	$wp_customize->selective_refresh->add_partial( 'animate_title', array(
		'selector'            => '.animate-home .heading-default .ttl',
		'settings'            => 'animate_title',
		'render_callback'  => 'avril_animate_title_render_callback',
	
	) );
	
	// animate subtitle
	$wp_customize->selective_refresh->add_partial( 'animate_subtitle', array(
		'selector'            => '.animate-home .heading-default h3',
		'settings'            => 'animate_subtitle',
		'render_callback'  => 'avril_animate_subtitle_render_callback',
	
	) );
	
	// animate description
	$wp_customize->selective_refresh->add_partial( 'animate_description', array(
		'selector'            => '.animate-home .heading-default p',
		'settings'            => 'animate_description',
		'render_callback'  => 'avril_animate_desc_render_callback',
	
	) );
	// animate content
	$wp_customize->selective_refresh->add_partial( 'animate_contents', array(
		'selector'            => '.animate-home .animates-carousel'
	
	) );
	
	}

add_action( 'customize_register', 'avril_home_animate_section_partials' );

// animate title
function avril_animate_title_render_callback() {
	return get_theme_mod( 'animate_title' );
}

// animate subtitle
function avril_animate_subtitle_render_callback() {
	return get_theme_mod( 'animate_subtitle' );
}

// animate description
function avril_animate_desc_render_callback() {
	return get_theme_mod( 'animate_description' );
}