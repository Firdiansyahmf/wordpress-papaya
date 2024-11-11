<?php function renoval_get_testimonial_default() {
	return apply_filters(
		'renoval_get_testimonial_default', wp_json_encode(
				 array(
				array(
					'image_url'      => CLEVERFOX_PLUGIN_URL . 'inc/builderse/images/testimonial/testimonial-1.jpg',
					'title'          => esc_html__( 'Elexander', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Engineer Manager', 'clever-fox' ),
					'subtitle2'      => esc_html__( 'Best Construction & Renovate Designer', 'clever-fox' ),
					'text'           => esc_html__( 'There are many variations of passages of Lorem Ipsum available on its but majority have suffered Phasellus suscipit volutpat lorem id semper molestie egestas eros vehicula Lorem Ipsum available on its but majority have suffered.', 'clever-fox' ),
					'text2'	  		 =>  esc_html__( 'View Reviews', 'clever-fox' ),
					'id'             => 'customizer_repeater_testimonial_001',
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL . 'inc/builderse/images/testimonial/testimonial-2.jpg',
					'title'          => esc_html__( 'James Juan', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Construction Simulator', 'clever-fox' ),
					'subtitle2'      => esc_html__( 'Engineer Very Hard Work For Design', 'clever-fox' ),
					'text'           => esc_html__( 'There are many variations of passages of Lorem Ipsum available on its but majority have suffered Phasellus suscipit volutpat lorem id semper molestie egestas eros vehicula Lorem Ipsum available on its but majority have suffered.', 'clever-fox' ),
					'text2'	  		 =>  esc_html__( 'View Reviews', 'clever-fox' ),
					'id'              => 'customizer_repeater_testimonial_002',
				),
				array(
					'image_url'       => CLEVERFOX_PLUGIN_URL . 'inc/builderse/images/testimonial/testimonial-3.jpg',
					'title'          => esc_html__( 'John Marsh', 'clever-fox' ),
					'subtitle'       => esc_html__( 'Engineer Manager', 'clever-fox' ),
					'subtitle2'      => esc_html__( 'Used Best Construction Mashinary', 'clever-fox' ),
					'text'           => esc_html__( 'There are many variations of passages of Lorem Ipsum available on its but majority have suffered Phasellus suscipit volutpat lorem id semper molestie egestas eros vehicula Lorem Ipsum available on its but majority have suffered.', 'clever-fox' ),
					'text2'	  		 =>  esc_html__( 'View Reviews', 'clever-fox' ),
					'id'              => 'customizer_repeater_testimonial_003',
				),
			)
		)
	);
}

?>