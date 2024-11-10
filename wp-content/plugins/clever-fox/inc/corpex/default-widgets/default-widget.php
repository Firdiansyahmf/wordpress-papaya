<?php
$theme = wp_get_theme(); // gets the current theme
$theme_name = strtolower($theme->name);

if($theme_name == 'profolio'){
	$footer_logo_default = CLEVERFOX_PLUGIN_URL .'inc/'.$theme_name.'/images/logo-light.png';
}else{	
	$footer_logo_default = CLEVERFOX_PLUGIN_URL .'inc/'.$theme_name.'/images/logo.png';
}
	
$activate = array(
        'corpex-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'corpex-footer-widget' => array(
			 'text-1',
			 'categories-1',
			 'tag_cloud-3',
			 'text-2',
        )
    );
    /* the default titles will appear */
   update_option('widget_text', array(  
		1 => array('title' => '',
				'text'=>'<aside class="widget widget_text">
                                <div class="textwidget">
                                    <div class="logo">
                                        <a href="#"><img src="'.esc_url($footer_logo_default).'" alt="Corpex"></a>
                                    </div>
                                    <p>corpex we talk destination we shine across your organization to fully understand.</p>
                                    <aside class="widget widget_social_widget">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </aside>
                                </div>
                            </aside>
             <div class="footer-active-shape"><span></span></div>    
                 '),
				 2 => array('title' => '',
				'text'=>'<aside class="widget widget-contact">
                                <h4 class="widget-title">Contact Us</h4>
                                <div class="contact-area">
                                    <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="contact-info">
                                        <p class="text">
                                            <span>Location</span>
                                            <a href="javascript:void(0)">32 Race, Beverly Hills, California, Us</a>
                                        </p>
                                    </div>
									</div>
                                <div class="contact-area">
                                    <div class="contact-icon"><i class="fa fa-phone"></i></div>
                                    <div class="contact-info">
                                        <p class="text">
                                            <span>Phone</span>
                                            <a href="javascript:void(0)">7097597570</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-area">
                                    <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                                    <div class="contact-info">
                                        <p class="text">
                                            <span>Email</span>
                                            <a href="javascript:void(0)">email@company.com</a>
                                        </p>
                                    </div>
                                </div>
                            </aside>
            ')
        ));
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories')));
			
		update_option('widget_tag_cloud', array(
			3 => array('title' => 'Tags')));	
		
		update_option('widget_search', array(
			1 => array('title' => 'Search')));
		
		update_option('widget_recent_entries', array(
			1 => array('title' => 'Recent Posts')));
		
		update_option('widget_archive', array(
			1 => array('title' => 'Archives')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('corpex_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('nav_btn_lbl','Book Now');
?>