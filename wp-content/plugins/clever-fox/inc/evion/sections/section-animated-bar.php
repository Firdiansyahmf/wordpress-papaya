<?php 
if ( ! function_exists( 'cleverfox_evion_lite_animate' ) ) :
	function cleverfox_evion_lite_animate() {
	$animate_contents			= get_theme_mod('animate_contents',avril_get_animate_default());
	$hs_animate					= get_theme_mod('hs_animate','1');		
	if($hs_animate=='1'){
?>
    <section id="animate-section" class="animate-section animate-section-hover animate-home">
    	<div class="av-container ">
            <div class="animates-carousel owl-carousel owl-theme wow fadeInUp">
				<?php
					if ( ! empty( $animate_contents ) ) {
					$animate_contents = json_decode( $animate_contents );
					foreach ( $animate_contents as $animate_item ) {
						$avril_animate_title = ! empty( $animate_item->title ) ? apply_filters( 'avril_translate_single_string', $animate_item->title, 'animate section' ) : '';
						$icon = ! empty( $animate_item->icon_value) ? apply_filters( 'avril_translate_single_string', $animate_item->icon_value,'animate section' ) : '';
						$avril_animate_link = ! empty( $animate_item->link ) ? apply_filters( 'avril_translate_single_string', $animate_item->link, 'animate section' ) : '';
				?>
					<div class="animate-item">
						<div class="animate-icon">
							<?php if ( ! empty( $icon ) ) {?>
								<i class="fa <?php echo esc_html( $icon ); ?> txt-pink"></i>
							<?php } ?>
						</div>
						<div class="animate-content">
							<?php if ( ! empty( $avril_animate_title ) ) : ?>
								<h5 class="animate-title"><a href="<?php echo esc_url( $avril_animate_link ); ?>"><?php echo esc_html( $avril_animate_title ); ?></a></h5>
							<?php endif; ?>
							
						</div>
					</div>
				<?php }}?>
            </div>
    	</div>
    </section>
	<?php  
	}} endif; 
	if ( function_exists( 'cleverfox_evion_lite_animate' ) ) {
		$section_priority = apply_filters( 'avril_section_priority', 11, 'avril_lite_animate' );
		add_action( 'avril_sections', 'cleverfox_evion_lite_animate', absint( $section_priority ) );
	} ?>