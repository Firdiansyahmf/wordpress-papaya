<?php  
	$info_hs 						= get_theme_mod('info_hs','1');
	$info		= get_theme_mod('info',giant_get_info_default());	
	$info_column		= get_theme_mod('info_column','3');
	if($info_hs=='1'){
	$settings               = array('items'=>$info_column);
    wp_register_script('giant-info',get_template_directory_uri().'/assets/js/homepage/info.js',array('jquery'));
	wp_localize_script('giant-info','info_setting',$settings);
    wp_enqueue_script('giant-info');
		if ( ! empty( $info ) ) {
			$info = json_decode( $info );
?>
<!-- Info section -->
<div class="info-section giant-info">
    <div class="container">
        <div class="info-contents owl-carousel">
				<?php
					foreach ( $info as $info_item ) {
						$title = ! empty( $info_item->title ) ? apply_filters( 'translate_single_string', $info_item->title, 'Info section' ) : '';
						$text2 = ! empty( $info_item->text2 ) ? apply_filters( 'translate_single_string', $info_item->text2, 'Info section' ) : '';
						$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'translate_single_string', $info_item->icon_value, 'Info section' ) : '';
						$choice = ! empty( $info_item->choice ) ? apply_filters( 'translate_single_string	', $info_item->choice, 'Info section' ) : '';
				?>
            <div class="">
                <div class="info-first ">
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon">
                                <i class="fas <?php echo esc_attr($icon); ?>"></i>
                            </div>
                            <div class="contact-info">
								<?php if(!empty($title)): ?>
									<h4>
										<?php if($title): esc_html(printf(/* translators: %s: title */__( '%s','clever-fox' ),$title)); endif; ?>									
									</h4>
								<?php endif; ?>	
								<?php if(!empty($text2)): ?>
									<span><?php if($text2): esc_html(printf(/* translators: %s: text2 */__( '%s','clever-fox' ),$text2)); endif; ?></span>
								<?php endif; ?>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
			<?php } ?>
        </div>
    </div>
</div>
	<?php } }?>
<!-- Info Section end -->