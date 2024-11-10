<?php
	if ( ! function_exists( 'gradiant_header_contact' ) ) :
	function gradiant_header_contact() {
		$hdr_nav_contact_content = get_theme_mod( 'hdr_nav_contact_content',/* Translators: 1:P Tag Start 2: Strong Tag Start 3: Close Strong Tag 4: End P Tag */sprintf(__('%1$sAre you to grow up your business? %2$sJoin our team%3$s%4$s','clever-fox'),'<p>','<strong>','</strong>','</p>'));
		$hdr_nav_contact_content2 = get_theme_mod( 'hdr_nav_contact_content2',__('<div class="contact-icon"><i class="fa fa-wechat"></i></div><a href="#" class="contact-info"> <span class="title">Hotline Number</span><span class="text">0123-456-789</span></a>','clever-fox'));
			if(!empty($hdr_nav_contact_content) || !empty($hdr_nav_contact_content2)):
		?>	
	<li class="widget-wrap">
		<div class="widget-wrp">
			<?php if(!empty($hdr_nav_contact_content)): ?>
				<aside class="widget widget-contact">
					<div class="textwidget ct-area1">
						<?php echo wp_kses_post($hdr_nav_contact_content); ?>
					</div>
				</aside>
			<?php endif;
			 if(!empty($hdr_nav_contact_content2)): ?>
				<aside class="widget widget-contact">
					<div class="contact-area ct-area2">
						<?php echo wp_kses_post($hdr_nav_contact_content2); ?>
					</div>
				</aside>
			<?php endif; ?>
		</div>
	</li>
	<?php endif;  
} endif;
add_action('gradiant_header_contact', 'gradiant_header_contact');
?>
