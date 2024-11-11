<?php

/*
 *
 * info Default
 */
function aravalli_get_info_default() {
	return apply_filters(
		'aravalli_get_info_default', wp_json_encode(
				 array(
				array(
					'title'           => esc_html__( 'Guests', 'clever-fox' ),
					 'icon_value'       => 'fa-users ',
					'id'              => 'customizer_repeater_info_001',
					
				),
				array(
					'title'           => esc_html__( 'Wi-Fi', 'clever-fox' ),
					 'icon_value'       => ' fa-wifi',
					'id'              => 'customizer_repeater_info_002',			
				),
				array(
					'title'           => esc_html__( 'Location', 'clever-fox' ),
					'icon_value'       => 'fa-map-marker',
					'id'              => 'customizer_repeater_info_003',
				),
				array(
					'title'           => esc_html__( 'Check-In', 'clever-fox' ),
					 'icon_value'       => 'fa-calendar',
					'id'              => 'customizer_repeater_info_004',
				),
				array(
					'title'           => esc_html__( 'Check-Out', 'clever-fox' ),
					 'icon_value'       => 'fa-sign-out',
					'id'              => 'customizer_repeater_info_005',
				)
			)
		)
	);
}