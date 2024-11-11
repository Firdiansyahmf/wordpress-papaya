<?php
$activate = array(
        'evita-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'evita-footer-widget-area' => array(
			 'text-1',
            'categories-1',
            'archives-1',
			'search-1',
        )
    );
    /* the default titles will appear */
   update_option('widget_text', array(
        1 => array('title' => '',
        'text'=>'
		<div class="widget-content">
                                <div class="logo">
                                    <a href=""><img src="'.CLEVERFOX_PLUGIN_URL.'inc/evita/images/logo.png"></a>
                                </div>
                                <p>'.sprintf(/* translators: %s: Description */esc_html__( '%s.', 'clever-fox' ),CLEVERFOX_FOOTER_ABOUT).'</p>
                            </div>
		'),        
		2 => array('title' => 'Recent Posts'),
		3 => array('title' => 'Categories'), 
        ));
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories'), 
			2 => array('title' => 'Categories')));

		update_option('widget_archives', array(
			1 => array('title' => 'Archives'), 
			2 => array('title' => 'Archives')));
			
		update_option('widget_search', array(
			1 => array('title' => 'Search'), 
			2 => array('title' => 'Search')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('evita_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );

    set_theme_mod( 'footer_get_in_touch_title', 'Call Us Now' );
    set_theme_mod( 'footer_get_in_touch_number', '+12 345 678 90' );
    
    set_theme_mod( 'footer_email_title', 'Email' );
    set_theme_mod( 'footer_email', 'example@gmail.com' );
    
    set_theme_mod( 'footer_address_title', 'Location' );
    set_theme_mod( 'footer_address', 'St Klida Main Road' );