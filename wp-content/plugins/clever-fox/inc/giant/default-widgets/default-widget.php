<?php
$theme = wp_get_theme(); // gets the current theme
$theme_name = strtolower($theme->name);

$footer_logo_default = CLEVERFOX_PLUGIN_URL .'inc/'.$theme_name.'/images/logo.png';
	
$activate = array(
        'giant-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'giant-footer-widget' => array(
			 'text-1',
			 'categories-1',
			 'text-2',
			 'text-3',
        )
    );
    /* the default titles will appear */
   update_option('widget_text', array(  
		1 => array('title' => 'About Giant',
				'text'=>'<aside class="widget widget_text">
                            <div class="textwidget">
                                <div class="logo">
                                    <a href="#"><img src="'.esc_url($footer_logo_default).'" alt="giant" width="212" height="65"></a>
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
                                <dt><i class="far fa-clock"></i>Mon:</dt><dd>10:00 - 7:00</dd>
                                <dt><i class="far fa-clock"></i>Tue:</dt><dd>10:00 - 7:00</dd>
                                <dt><i class="far fa-clock"></i>Wed:</dt><dd>10:00 - 7:00</dd>
                                <dt><i class="far fa-clock"></i>Thu:</dt><dd>10:00 - 7:00</dd>
                                <dt><i class="far fa-clock"></i>Fri:</dt><dd>10:00 - 7:00</dd>
                                <dt><i class="far fa-clock"></i>Sat:</dt><dd>Closed</dd>
                                <dt><i class="far fa-clock"></i>Sun:</dt><dd>Closed</dd>
                            </dl>
                        </div>  
            '),
			3 => array('title' => '',
				'text'=>'<div class="custom-html-widget widget widget_pages">
						<h2 class="widget-title">Quick Links</h2>
						<ul>
							<li class="menu-item"><a title="Home" href="#" class="nav-link"><i class="fa fa-angle-double-right"></i> Home</a></li>
							<li class="menu-item"><a title="Home" href="#" class="nav-link"><i class="fa fa-angle-double-right"></i> About</a></li>
							<li class="menu-item"><a title="Home" href="#" class="nav-link"><i class="fa fa-angle-double-right"></i> Service</a></li>
							<li class="menu-item"><a title="Home" href="#" class="nav-link"><i class="fa fa-angle-double-right"></i> FAQ</a></li>
							<li class="menu-item"><a title="Home" href="#" class="nav-link"><i class="fa fa-angle-double-right"></i> Blog</a></li>
							<li class="menu-item"><a title="Home" href="#" class="nav-link"><i class="fa fa-angle-double-right"></i> Contact</a></li>
						</ul>
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
	$MediaId = get_option('giant_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('nav_btn_lbl','Book Now');
?>