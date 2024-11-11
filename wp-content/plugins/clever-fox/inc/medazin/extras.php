<?php
/*
 *
 * Info Default
 */
 function medazin_get_info_default() {
	return apply_filters(
		'medazin_get_info_default', wp_json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Surgery', 'clever-fox' ),
					'icon_value'       => 'fa-medkit',
					'id'              => 'customizer_repeater_info_001',					
				),
				array(
					'title'           => esc_html__( 'Gynocology', 'clever-fox' ),
					'icon_value'       => 'fa-female',
					'id'              => 'customizer_repeater_info_002',				
				),
				array(
					'title'           => esc_html__( 'Optometry', 'clever-fox' ),
					'icon_value'       => 'fa-eye',
					'id'              => 'customizer_repeater_info_003',
				),
				array(
					'title'           => esc_html__( 'Orthopedics', 'clever-fox' ),
					'icon_value'       => 'fa-wheelchair',
					'id'              => 'customizer_repeater_info_004',
				),
				array(
					'title'           => esc_html__( 'Child', 'clever-fox' ),
					'icon_value'       => 'fa-child',
					'id'              => 'customizer_repeater_info_005',
				),
				array(
					'title'           => esc_html__( 'Cardiology', 'clever-fox' ),
					'icon_value'       => 'fa-heartbeat',
					'id'              => 'customizer_repeater_info_006',
				),
			)
		)
	);
}


/*
 *
 * Service Default
 */
function medazin_get_service_default() {
	return apply_filters(
		'medazin_get_service_default', wp_json_encode(
			array(
				array(
					'icon_value'   => 'fa-brain',	
					'title'        => esc_html__( 'Neuro Surgery', 'clever-fox' ),
					'text'         => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, eius!', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_001',
				),
				array(
					'icon_value'   => 'fa-tooth',	
					'title'        => esc_html__( 'Dental Surgery', 'clever-fox' ),
					'text'         => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, eius!', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_002',
				),
				array(
					'icon_value'   => 'fa-cut',	
					'title'        => esc_html__( 'Plastic Surgery', 'clever-fox' ),
					'text'         => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, eius!', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_003',
				),
				array(
					'icon_value'   => 'fa-heartbeat',	
					'title'        => esc_html__( 'Heart Surgery', 'clever-fox' ),
					'text'         => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, eius!', 'clever-fox' ),
					'text2'        => esc_html__( 'Read More', 'clever-fox' ),
					'link'         => '#',
					'id'           => 'customizer_repeater_service_004',
				)
			)
		)
	);
}

/*
 *
 * Testimonial Default
 */
 function medazin_get_testimonial_default() {
	return apply_filters(
		'medazin_get_testimonial_default', wp_json_encode(
				 array(
				array(
					'image_url'      => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/testimonial/testimonial-img1.jpg'),
					'title'          => esc_html__( 'Jordi Parker', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Hr Manager', 'clever-fox' ),
					'text'           => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit', 'clever-fox' ),
					'id'             => 'customizer_repeater_testimonial_001',
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/testimonial/testimonial-img2.jpg'),
					'title'          => esc_html__( 'Leela Rogers ', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Manager', 'clever-fox' ),
					'text'           => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit', 'clever-fox' ),
					'id'              => 'customizer_repeater_testimonial_002',
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/testimonial/testimonial-img3.jpg'),
					'title'          => esc_html__( 'Allie Grater', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Therapist', 'clever-fox' ),
					'text'           => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit', 'clever-fox' ),
					'id'              => 'customizer_repeater_testimonial_003',
				),
			)
		)
	);
}


/*
 *
 */

// meadzin features
function medazin_get_features_default() {
	return apply_filters(
		'medazin_get_features_default', wp_json_encode(
				 array(
				array(
					'icon_value'        => 'fa-brain',	
					'title'           	=> esc_html__( 'Neurology', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_001',
				),
				array(
					'icon_value'        => 'fa-user-md',	
					'title'           	=> esc_html__( 'Orthopaedics', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_002',				
				),
				array(
					'icon_value'       	=> 'fa-eye',	
					'title'            	=> esc_html__( 'Eyecare', 'clever-fox' ),
					'link'       	  	=> '#',
					'id'               	=> 'customizer_repeater_features_003',
				),
				array(
					'icon_value'        => 'fa-briefcase-medical',	
					'title'           	=> esc_html__( 'Endocrinology', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_004',
				),
				array(
					'icon_value'        => 'fa-virus',	
					'title'           	=> esc_html__( 'Immunology', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_005',
				),
				array(
					'icon_value'        => 'fa-deaf',	
					'title'           	=> esc_html__( 'Otolayngology', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_006',
				),
				array(
					'icon_value'        => 'fa-lungs-virus',	
					'title'           	=> esc_html__( 'CysticFibrosis', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_007',
				),
				array(
					'icon_value'        => 'fa-flask',	
					'title'           	=> esc_html__( 'Hematology', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_008',
				),
				array(
					'icon_value'        => 'fa-tooth',	
					'title'           	=> esc_html__( 'Dental Care', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_009',
				),
				array(
					'icon_value'        => 'fa-wheelchair',	
					'title'           	=> esc_html__( 'Podiatry', 'clever-fox' ),
					'link'       		=> '#',
					'id'              	=> 'customizer_repeater_features_0010',
				),
				
			)
		)
	);
}

// medazin-work-process

function medazin_get_process_default() {
	return apply_filters(
		'medazin_get_process_default', wp_json_encode(
			array(
				array(
					'title'           => esc_html__( 'Emergency case', 'clever-fox' ),
					'id'              => 'customizer_repeater_process_001',					
				),
				array(
					'title'           => esc_html__( 'Opertaion Theatre', 'clever-fox' ),
					'id'              => 'customizer_repeater_process_002',
				),
				array(
					'title'           => esc_html__( 'Blood Test', 'clever-fox' ),
					'id'              => 'customizer_repeater_process_003',
				),
				array(
					'title'           => esc_html__( 'Outdoor Checkup', 'clever-fox' ),
					'id'              => 'customizer_repeater_process_004',
				)
			)
		)
	);
}


/*
 *
 * Team Default
 */
 function medazin_get_team_default() {
	return apply_filters(
		'medazin_get_team_default', wp_json_encode(
			array(
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/team/img1.jpg'),
					'title'           => esc_html__( 'Dr. Marlie Varga', 'clever-fox' ),
					'subtitle'        => esc_html__( 'General Doctor','clever-fox' ),
					'subtitle2'        => esc_html__( '50','clever-fox' ),
					'subtitle3'        => esc_html__( 'Consultation Done','clever-fox' ),
					'id'              => 'customizer_repeater_team_0001',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_001',
								'link' => 'https://www.facebook.com',
								'icon' => 'fa-facebook-f',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_002',
								'link' => 'https://www.twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_003',
								'link' => 'https://www.instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_004',
								'link' => 'https://www.google.com',
								'icon' => 'fa-google-plus-g',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_005',
								'link' => 'https://www.linkedin.com',
								'icon' => 'fa-linkedin-in',
							)
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/team/img2.jpg'),
					'title'           => esc_html__( 'Dr. Clarke Pugh', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Cardiology', 'clever-fox' ),
					'subtitle2'        => esc_html__( '50','clever-fox' ),
					'subtitle3'        => esc_html__( 'Consultation Done','clever-fox' ),
					'id'              => 'customizer_repeater_team_0002',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0011',
								'link' => 'https://www.facebook.com',
								'icon' => 'fa-facebook-f',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0012',
								'link' => 'https://www.twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0013',
								'link' => 'https://www.instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0014',
								'link' => 'https://www.google.com',
								'icon' => 'fa-google-plus-g',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0015',
								'link' => 'https://www.linkedin.com',
								'icon' => 'fa-linkedin-in',
							),
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/team/img3.jpg'),
					'title'           => esc_html__( 'Dr. Ela Sharpe', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Dentist', 'clever-fox' ),
					'subtitle2'        => esc_html__( '50','clever-fox' ),
					'subtitle3'        => esc_html__( 'Consultation Done','clever-fox' ),
					'id'              => 'customizer_repeater_team_0003',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0021',
								'link' => 'https://www.facebook.com',
								'icon' => 'fa-facebook-f',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0022',
								'link' => 'https://www.twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0023',
								'link' => 'https://www.instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0024',
								'link' => 'https://www.google.com',
								'icon' => 'fa-google-plus-g',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0025',
								'link' => 'https://www.linkedin.com',
								'icon' => 'fa-linkedin-in',
							),
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/medazin/images/team/img4.jpg'),
					'title'           => esc_html__( 'Dr. Ayda Ortega', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Gynecology', 'clever-fox' ),
					'subtitle2'        => esc_html__( '50','clever-fox' ),
					'subtitle3'        => esc_html__( 'Consultation Done','clever-fox' ),
					'id'              => 'customizer_repeater_team_0004',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0031',
								'link' => 'https://www.facebook.com',
								'icon' => 'fa-facebook-f',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0032',
								'link' => 'https://www.twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0033',
								'link' => 'https://www.instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0034',
								'link' => 'https://www.instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0035',
								'link' => 'https://www.linkedin.com',
								'icon' => 'fa-linkedin-in',
							),
						)
					),
				),
			)
		)
	);
}

?>