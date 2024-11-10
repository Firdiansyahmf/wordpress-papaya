<?php
function medazin_logo_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'medazin'),
		) 
	);
	
	/*=========================================
	Medazin Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','medazin'),
			'panel'  		=> 'header_section',
		)
    );


	//Logo Width 
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
		$wp_customize->add_setting(
			'logo_width',
			array(
				'default'			=> '220',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'medazin_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'logo_width', 
			array(
				'label'      => __( 'Logo Width', 'clever-fox' ),
				'section'  => 'title_tagline',
				'input_attrs' => array(
					'min'    => 0,
					'max'    => 500,
					'step'   => 1,
					// 'suffix' => 'px', //optional suffix
				),
			) ) 
		);
	}
	
	

}
add_action( 'customize_register', 'medazin_logo_header_settings' );
