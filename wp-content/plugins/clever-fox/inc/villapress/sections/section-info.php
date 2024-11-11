<?php  
if ( ! function_exists( 'cleverfox_aravalli_lite_info' ) ) :
	function cleverfox_aravalli_lite_info() {
	$info_hs 		= get_theme_mod('info_hs','1');	
	$info_contents 			= get_theme_mod('info_contents',aravalli_get_info_default());
	$info_sec_column			= get_theme_mod('info_sec_column');
	if($info_hs =='1'){
?>
<section id="info-fact" class="info-fact">
	<div class="container">
		<div class="row info-content wow fadeInUp">
			<?php
				if ( ! empty( $info_contents ) ) {
				$info_contents = json_decode( $info_contents );
				foreach ( $info_contents as $info_item ) {
					$title = ! empty( $info_item->title ) ? apply_filters( 'aravalli_translate_single_string', $info_item->title, 'info section' ) : '';
					
					$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'aravalli_translate_single_string', $info_item->icon_value, 'info section' ) : '';
					$image = ! empty( $info_item->image_url ) ? apply_filters( 'aravalli_translate_single_string', $info_item->image_url, 'info section' ) : '';
			?>
			<div class="col-lg<?php echo esc_attr($info_sec_column); ?> col-md-4 col-sm-6 col-12 mb-4">
				<div class="info-box">
					<?php if(!empty($image)): ?>
						<div class="nt-circle"><img src="<?php echo esc_url($image); ?>"></div>
					<?php else: ?>	
						<div class="nt-circle"><i class="fa <?php echo esc_attr($icon); ?>"></i></div>
					<?php endif; ?>	
					<div class="singlefact">  
					<?php if(!empty($title)): ?>
						<h5><span class="counter"><?php echo esc_html($title); ?></h5>
					<?php endif; ?>				
					</div>
				</div>
			</div>
			<?php } } ?>
		</div>
	</div>
</section>

<?php
}}

endif;
if ( function_exists( 'cleverfox_aravalli_lite_info' ) ) {
	$section_priority = apply_filters( 'aravalli_section_priority', 12, 'cleverfox_aravalli_lite_info' );
	add_action( 'aravalli_sections', 'cleverfox_aravalli_lite_info', absint( $section_priority ) );
	}