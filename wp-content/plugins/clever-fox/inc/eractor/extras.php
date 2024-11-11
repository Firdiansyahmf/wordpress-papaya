<?php
/*
 *
 * Funfact Default
 */
function renoval_get_funfact_default() {
	return apply_filters(
		'renoval_get_funfact_default', wp_json_encode(
			array(
				array(
					'icon_value'    => 'fa-smile-o',	
					'title'         => esc_html__( '4590', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'          => esc_html__( 'Happy Clients', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_003',
				),
				array(
					'icon_value'    => 'fa-globe',	
					'title'         => esc_html__( '7800', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'          => esc_html__( 'Awards Winner', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_001',
				),
				array(
					'icon_value'    => 'fa-cogs',	
					'title'        	=> esc_html__( '2390', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'         	=> esc_html__( 'Active Projects', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_002',				
				),
				array(
					'icon_value'    => 'fa-users',	
					'title'        	=> esc_html__( '4390', 'clever-fox' ),
					'subtitle'      => esc_html__( '+', 'clever-fox' ),
					'text'         	=> esc_html__( 'Eng. Members', 'clever-fox' ),
					'id'            => 'customizer_repeater_funfact_002',				
				),
				
			)
		)
	);
}

/*
 *
 * Team Default
 */
 function renoval_get_team_default() {
	return apply_filters(
		'renoval_get_team_default', wp_json_encode(
			array(
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/eractor/images/team/team-1.jpg'),
					'title'           => esc_html__( 'Philip Wilson', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Engineer','clever-fox' ),
					'id'              => 'customizer_repeater_team_0001',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_001',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_003',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_004',
								'link' => 'instagram.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_005',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							)
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/eractor/images/team/team-2.jpg'),
					'title'           => esc_html__( 'Stock Home', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Builder', 'clever-fox' ),
					'id'              => 'customizer_repeater_team_0002',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0011',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0012',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0013',
								'link' => 'pinterest.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0014',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/eractor/images/team/team-3.jpg'),
					'title'           => esc_html__( 'Tokyo Stark', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Engineer', 'clever-fox' ),
					'id'              => 'customizer_repeater_team_0003',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0021',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0022',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0023',
								'link' => 'linkedin.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0024',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						)
					),
				),
				array(
					'image_url'       => esc_url(CLEVERFOX_PLUGIN_URL . 'inc/eractor/images/team/team-4.jpg'),
					'title'           => esc_html__( 'Surgio', 'clever-fox' ),
					'subtitle'        => esc_html__( 'Builder', 'clever-fox' ),
					'id'              => 'customizer_repeater_team_0004',
					'social_repeater' => wp_json_encode(
						array(
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0031',
								'link' => 'facebook.com',
								'icon' => 'fa-facebook',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0032',
								'link' => 'twitter.com',
								'icon' => 'fa-twitter',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0033',
								'link' => 'linkedin.com',
								'icon' => 'fa-instagram',
							),
							array(
								'id'   => 'customizer-repeater-social-repeater-team_0034',
								'link' => 'linkedin.com',
								'icon' => 'fa-linkedin',
							),
						)
					),
				),
			)
		)
	);
}

?>