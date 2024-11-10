<?php
		if ( ! function_exists( 'conceptly_lite_info' ) ) :
		function conceptly_lite_info() {
		$hide_show_info			= get_theme_mod('hide_show_info','1');
		$info_title				= get_theme_mod('info_title',__('Email Address','clever-fox'));
		$info_description		= get_theme_mod('info_description',__('email@example.com','clever-fox'));
		$info_title2			= get_theme_mod('info_title2',__('Customer Support','clever-fox'));
		$info_description2		= get_theme_mod('info_description2',__('70 975 975 70','clever-fox'));	
		$info_title3			= get_theme_mod('info_title3',__('Office Address','clever-fox'));
		$info_description3		= get_theme_mod('info_description3',__('California Floor, USA 1208','clever-fox')); 
		$infos_first_icon_setting= get_theme_mod('infos_first_icon_setting','fa-envelope'); 
		$infos_second_icon_setting= get_theme_mod('infos_second_icon_setting','fa-life-ring'); 
		$infos_third_icon_setting= get_theme_mod('infos_third_icon_setting','fa-map-marker'); 
?>			
<!-- Start: Contact
    ============================= -->
<?php if($hide_show_info == '1') { ?>
    <section id="contact-info">
        <div class="container">
            <div class="contact-wrapper d-flex flex-wrap">
                <div class="single-contact info-first">
                	<div class="d-flex flex-column align-items-center">
                        <div class="single-icon">
							<i class="fa <?php echo esc_attr($infos_first_icon_setting);?>"></i>
						</div>
						<div class="text-center text-md-center">
	                    	<h5><?php echo wp_kses_post( $info_title ); ?></h5>
                    		<p class="info-first-desc"><?php echo wp_kses_post( $info_description );?></p> 
	                    </div>
	                </div>
                </div>
                <div class="single-contact info-second">
                	<div class="d-flex flex-column align-items-center">
                        <div class="single-icon">
							<i class="fa <?php echo esc_attr($infos_second_icon_setting);?>"></i>
						</div>
						<div class="text-center text-md-center">
	                    	<h5><?php echo wp_kses_post( $info_title2 ); ?></h5>
                    		<p class="info-second-desc"><?php echo wp_kses_post( $info_description2 );?></p> 
	                    </div>
	                </div>
                </div>
                <div class="single-contact info-third">
                	<div class="d-flex flex-column align-items-center">
                        <div class="single-icon">
							<i class="fa <?php echo esc_attr($infos_third_icon_setting);?>"></i>
						</div>
						<div class="text-center text-md-center">
	                    	<h5><?php echo wp_kses_post( $info_title3 ); ?></h5>
                    		<p class="info-third-desc"><?php echo wp_kses_post( $info_description3 );?></p> 
	                    </div>
	                </div>
                </div>
            </div>
        </div>
    </section>
<?php 
	}
} endif; ?>
	<?php
	if ( function_exists( 'conceptly_lite_info' ) ) {
		$section_priority = apply_filters( 'conceptly_section_priority', 12, 'conceptly_lite_info' );
		add_action( 'conceptly_sections', 'conceptly_lite_info', absint( $section_priority ) );
	}