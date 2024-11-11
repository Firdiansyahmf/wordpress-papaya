<?php
$theme = wp_get_theme(); // gets the current theme
$theme_name = strtolower($theme->name);

$footer_logo_default = CLEVERFOX_PLUGIN_URL .'inc/'.$theme_name.'/images/logo.png';
	
$activate = array(
        'accron-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'accron-footer-widget' => array(
			 'text-1',
			 'categories-1',
			 'text-2',
			 'text-3',
        )
    );
    /* the default titles will appear */
   update_option('widget_text', array(  
		1 => array('title' => 'About Accron',
				'text'=>'<aside class="widget widget_text">
                            <div class="textwidget">
                                <div class="logo">
                                    <a href="#"><img src="'.esc_url($footer_logo_default).'" alt="Accron" width="212" height="65"></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sed, labore optio ab cum ducimus? Nulla aliquam voluptatibus laboriosam reprehenderit.</p>
                                <aside class="widget widget_social_widget">
                                    <ul>
                                        <li><a href="#" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </aside>
                            </div>
                        </aside>
             <div class="footer-active-shape"><span></span></div>    
                 '),
				 2 => array('title' => '',
				'text'=>'<div class="opening-hour">
                            <h2 class="widget-title">Office Hours</h2>
                            <dl class="grid-time">
                                <dt><i class="far fa-clock"></i>Mon:</dt> <dd>9:00 - 19:00</dd>
                                <dt><i class="far fa-clock"></i>Tue:</dt><dd>9:00 - 19:00</dd>
                                <dt><i class="far fa-clock"></i>Wed:</dt><dd>9:00 - 19:00</dd>
                                <dt><i class="far fa-clock"></i>Thu:</dt><dd>9:00 - 19:00</dd>
                                <dt><i class="far fa-clock"></i>Fri:</dt><dd>9:00 - 19:00</dd>
                                <dt><i class="far fa-clock"></i>Sat:</dt><dd>11:00 - 19:00</dd>
                                <dt><i class="far fa-clock"></i>Sun:</dt><dd>Closed</dd>
                            </dl>
                        </div>  
            '),
			3 => array('title' => '',
				'text'=>'<div class="custom-html-widget">
                            <h2 class="widget-title">We Accepted</h2>
                            <aside class="widget widget_payment_methods">
                                <ul class="payment_methods">
                                    <li><a href="#" aria-label="card"><i class="fab fa-cc-mastercard"></i></a></li>
                                    <li><a href="#" aria-label="card"><i class="fab fa-cc-visa"></i></a></li>
                                    <li><a href="#" aria-label="card"><i class="fab fa-cc-paypal"></i></a></li>
                                    <li><a href="#" aria-label="card"><i class="fab fa-cc-amex"></i></a></li>
                                    <li><a href="#" aria-label="card"><i class="fab fa-cc-jcb"></i></a></li>
                                </ul>
                            </aside>
                            <div class="our-rewards">
                                <div class="reward">
                                    <img src="'.esc_url(CLEVERFOX_PLUGIN_URL .'inc/accron/images/award/award1.png').'" alt="award1">
                                </div>
                                <div class="reward">
                                    <img src="'.esc_url(CLEVERFOX_PLUGIN_URL .'inc/accron/images/award/award2.png').'" alt="award2">
                                </div>
                                <div class="reward">
                                    <img src="'.esc_url(CLEVERFOX_PLUGIN_URL .'inc/accron/images/award/award3.png').'" alt="award3">
                                </div>
                                <div class="reward">
                                    <img src="'.esc_url(CLEVERFOX_PLUGIN_URL .'inc/accron/images/award/award4.png').'" alt="award4">
                                </div>
                            </div>
                            <aside class="widget widget-contact">
                                <div class="contact-area">
                                    <div class="contact-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p class="text">
                                            <span class="title">24/7 Support</span>
                                            <a href="#">Start Live Chat</a>
                                        </p>
                                    </div>
                                </div>
                            </aside>
                        </div> 
            ')
        ));
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories')));
		
		update_option('widget_search', array(
			1 => array('title' => 'Search')));
		
		update_option('widget_recent_entries', array(
			1 => array('title' => 'Recent Posts')));
		
		update_option('widget_archive', array(
			1 => array('title' => 'Archives')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('accron_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('nav_btn_lbl','Book Now');
?>