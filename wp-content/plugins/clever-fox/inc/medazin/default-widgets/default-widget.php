<?php
$theme = wp_get_theme(); // gets the current theme
$footer_logo_default = CLEVERFOX_PLUGIN_URL .'inc/'.strtolower($theme->name).'/images/lightlogo.png';
	
$activate = array(
        'medazin-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'medazin-footer-1' => array(
			 'text-1',
        ),
		'medazin-footer-2' => array(
			  'archives-1',
        ),
		'medazin-footer-3' => array(
			 'search-1',
        ),
		'medazin-footer-4' => array(
			 'calendar-1',
        )
    );
    /* the default titles will appear */
   update_option('widget_text', array(  
		1 => array('title' => 'About '.$theme->name,
				'text'=>'<aside class="widget widget-text ">
				<div class="widget-content ">
					<div class="footer-logo ">
						<a href="https://nayrathemes.com/demo/lite/'.strtolower($theme->name).'/" class="custom-logo-link" rel="home">
							<img src="'.esc_url($footer_logo_default).'" class="custom-logo" alt="Medazin">
						</a>
					</div>
					<div class="footer-content ">
						<p>'.sprintf(/* translators: %s: Description */esc_html__( '%s.', 'clever-fox' ),CLEVERFOX_FOOTER_ABOUT).'</p>
					</div>
				</div>
			</aside>
			<aside class="widget widget-contact ">
				<div class="contact-area ">
					<div class="contact-icon ">
						<i class="fas fa-map-marker-alt "></i>
					</div>
					<div class="contact-info ">
						<p><a href="# ">Address :- 50-A, Nayra House, India</a></p>
					</div>
				</div>

				<div class="contact-area ">
					<div class="contact-icon ">
						<i class="far fa-clock "></i>
					</div>
					<div class="contact-info ">
						<p><a href="# ">US +12 345 678 90</a></p>
					</div>
				</div>

				<div class="contact-area ">
					<div class="contact-icon ">
						<i class="fas fa-envelope "></i>
					</div>
					<div class="contact-info ">
						<p><a href="# ">info@example.com</a></p>
					</div>
				</div>
			</aside>
                 '),		
		2 => array('title' => 'Recent Posts'),
		3 => array('title' => 'Categories'), 
        ));
		 update_option('widget_archives', array(
			1 => array('title' => 'Archives'), 
			2 => array('title' => 'Archives')));

		update_option('widget_calendar', array(
			1 => array('title' => 'Calendar'), 
			2 => array('title' => 'Calendar')));
			
		update_option('widget_search', array(
			1 => array('title' => 'Search'), 
			2 => array('title' => 'Search')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('medazin_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('nav_btn_lbl','Book Now');
?>