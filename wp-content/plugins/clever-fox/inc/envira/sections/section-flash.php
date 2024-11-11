<?php
if ( ! function_exists( 'startkit_info_plu' ) ) :

	function startkit_info_plu() {
	$hide_show_info			= get_theme_mod('hide_show_info','1');
	$info_icons				= get_theme_mod('info_icons','fa-envelope');
	$info_title				= get_theme_mod('info_title',__('Design For Business','clever-fox'));
	$info_description		= get_theme_mod('info_description',__('The chunk standard of Lorem Ipsum used it','clever-fox'));
	$info_icons2			= get_theme_mod('info_icons2','fa-cart-plus');
	$info_title2			= get_theme_mod('info_title2',__('Develop For Work','clever-fox'));
	$info_description2		= get_theme_mod('info_description2',__('The chunk standard of Lorem Ipsum used it','clever-fox'));  
	$info_icons3			= get_theme_mod('info_icons3','fa-life-saver'); 
	$info_title3			= get_theme_mod('info_title3',__('Maketing For Blast','clever-fox'));
	$info_description3		= get_theme_mod('info_description3',__('The chunk standard of Lorem Ipsum used it','clever-fox')); 
	$info_contact_icon		= get_theme_mod('info_contact_icon','fa-phone');
	$info_contact_title		= get_theme_mod('info_contact_title',__('Contact Us Today!','clever-fox'));
	$info_contact_desc		= get_theme_mod('info_contact_desc',__('+85-852-654','clever-fox'));
?>
<!-- Start: Features List
    ============================= -->
<?php if($hide_show_info == '1') { ?>
    <section id="features-list">
        <div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="row featured-row">
						<div class="col-lg-4 col-md-12 p-lg-0 mt-lg-0 mt-4">
							<div class="featured-box wow fadeInUp first" data-wow-delay="0.1s">
								<div class="featured-box-item">
									<div class="icon">
										<i class="fa <?php echo esc_attr( $info_icons ); ?>"></i>
									</div>
									<div class="featured-content">
										<h5 class="title"><?php echo esc_html( $info_title ); ?></h5>
										<p><?php echo wp_kses_post( $info_description ); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 p-lg-0 mt-lg-0 mt-4">
							<div class="featured-box wow fadeInUp second" data-wow-delay="0.1s">
								<div class="featured-box-item">
									<div class="icon">
										<i class="fa <?php echo esc_attr( $info_icons2 ); ?>"></i>
									</div>
									<div class="featured-content">
										<h5 class="title"><?php echo esc_html( $info_title2 ); ?></h5>
										<p><?php echo wp_kses_post( $info_description2 ); ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 p-lg-0 mt-lg-0 mt-4">
							<div class="featured-box wow fadeInUp third" data-wow-delay="0.1s">
								<div class="featured-box-item">
									<div class="icon">
										<i class="fa <?php echo esc_attr( $info_icons3 ); ?>"></i>
									</div>
									<div class="featured-content">
										<h5 class="title"><?php echo esc_html( $info_title3 ); ?></h5>
										<p><?php echo wp_kses_post( $info_description3 ); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 mt-lg-0 mt-5">
					<div class="featured-box featured-contact wow fadeInUp fourth" data-wow-delay="0.1s">
						<div class="featured-box-item">
							<div class="icon"><i class="fa <?php echo esc_attr( $info_contact_icon ); ?>"></i></div>
							<div class="featured-content">
								<h4 class="title"><?php echo esc_html( $info_contact_title ); ?></h4>
								<h3><?php echo wp_kses_post( $info_contact_desc ); ?></h3>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
<?php } 
 }

endif;
    
	
if ( function_exists( 'startkit_info_plu' ) ) {
$section_priority = apply_filters( 'startkit_section_priority', 12, 'startkit_info_plu' );
add_action( 'startkit_sections', 'startkit_info_plu', absint( $section_priority ) );

}
?>