<?php  
	$hs_funfact = get_theme_mod('hs_funfact', '1');
	$funfact_contents		= get_theme_mod('funfact_contents',corpex_get_funfact_default());  
	$funfact_bg_img			= get_theme_mod('funfact_bg_img',esc_url(CLEVERFOX_PLUGIN_URL .'inc/corpex/images/shapes/shape-1.png')); 
	
	if($hs_funfact == '1') {
?>	
<!-- funfact -->
    <section class="funfact-section home-funfact" <?php if(!empty($funfact_bg_img)){ ?> style="background-image:url(<?php echo esc_url($funfact_bg_img) ?>);" <?php } ?>>
        <div class="container">
            <div class="row">
				<?php
					if ( ! empty( $funfact_contents ) ) {
					$funfact_contents = json_decode( $funfact_contents );
					foreach ( $funfact_contents as $funfact_item ) {
						$title = ! empty( $funfact_item->title ) ? apply_filters( 'corpex_translate_single_string', $funfact_item->title, 'Funfact section' ) : '';
						$text = ! empty( $funfact_item->text ) ? apply_filters( 'corpex_translate_single_string', $funfact_item->text, 'Funfact section' ) : '';
				?>
					<div class="col-lg-3 col-md-6">
						<div class="funfact">
							<h5><span class="counter-count"><?php echo esc_html($text); ?></span>+</h5>
							<p><?php echo esc_html($title); ?></p>
						</div>
					</div>
				<?php } } ?>
            </div>
        </div>
    </section>
	<?php } ?>
<!-- funfact end -->