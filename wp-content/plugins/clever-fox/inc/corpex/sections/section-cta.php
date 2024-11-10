<?php  
	$cta_hs				= get_theme_mod('cta_hs','1'); 
	$cta_title			= get_theme_mod('cta_title',__('Word We Love & Work Everyday','clever-fox')); 
	$cta_description	= get_theme_mod('cta_description',__('Inspiration Is The One','clever-fox'));
	$cta_bg_setting		= get_theme_mod('cta_bg_setting',esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/cta/ctabg.jpg')); 
	$cta_client_image	= get_theme_mod('cta_client_image',esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/cta/image-1.png')); 
	$cta_bg_position	= get_theme_mod('cta_bg_position','fixed');
	if($cta_hs == 1) {
?>
<!-- cta -->
    <section class="cta-section cta-section-home" <?php if(!empty($cta_bg_setting)){ ?> style="background:url('<?php echo esc_url($cta_bg_setting); ?>'); background-repeat:no-repeat;background-size:cover; background-attachment:<?php echo esc_attr($cta_bg_position); ?>" <?php } ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-content">
                        <h3><?php echo esc_html($cta_description); ?> 
							<span class="primary_color"><?php echo esc_html($cta_title); ?></span>
						</h3>
                    </div>
                </div>
                <div class="col-lg-6">
					<?php if(!empty($cta_client_image)){ ?>
						<div class="cta-image">
							<img src="<?php echo esc_url($cta_client_image); ?>" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
						</div>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->
<?php } ?>