 <!--===// Start: Slider
    =================================--> 
<?php  
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slider 						= get_theme_mod('slider',corpex_get_slider_default());
	$slider_autoplay				= get_theme_mod('slider_autoplay', 'true');
	$theme = wp_get_theme();
	if($theme -> name == 'Profolio'){
		wp_enqueue_script('corpex-slider',get_stylesheet_directory_uri().'/assets/js/slider.js',array('jquery'), '0.0', true);
	}
	
	if($slider_hs=='1'){
?>	
<!-- slider -->
    <section class="slider-section slider-one">
        <div id="main-slider" class="carousel slide main-slider" <?php if($slider_autoplay == 'true') {echo 'data-bs-ride="carousel"';} ?> >
            <div class="carousel-inner">
				<?php
					if ( ! empty( $slider ) ) {
					$slider = json_decode( $slider );
					$count = 1;
					foreach ( $slider as $slide_item ) {
						$title = ! empty( $slide_item->title ) ? apply_filters( 'corpex_translate_single_string', $slide_item->title, 'slider section' ) : '';
						$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'corpex_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
						$button = ! empty( $slide_item->text) ? apply_filters( 'corpex_translate_single_string', $slide_item->text,'slider section' ) : '';
						$link = ! empty( $slide_item->link ) ? apply_filters( 'corpex_translate_single_string', $slide_item->link, 'slider section' ) : '';
						$link2 = ! empty( $slide_item->link2 ) ? apply_filters( 'corpex_translate_single_string', $slide_item->link2, 'slider section' ) : '';
						$video_url = ! empty( $slide_item->video_url ) ? apply_filters( 'corpex_translate_single_string', $slide_item->video_url, 'slider section' ) : '';
						$image = ! empty( $slide_item->image_url2 ) ? apply_filters( 'corpex_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
						$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'corpex_translate_single_string',$slide_item->open_new_tab, 'slider section' ) : '';
						$link_follow_nofollow = ! empty( $slide_item->link_follow_nofollow ) ? apply_filters( 'corpex_translate_single_string',$slide_item->link_follow_nofollow, 'slider section' ) : '';
						$item_choice = ! empty( $slide_item->item_choice ) ? apply_filters( 'corpex_translate_single_string', $slide_item->item_choice, 'slider section' ) : '';
						$active_class = ($count==1)?'active':'';
				?>
					<div class="carousel-item <?php echo esc_attr($active_class); ?>">
						<div class="slide-main">
							<?php if($item_choice =='customizer_repeater_image2'): ?>
								<?php if ( ! empty( $image )  ) : ?>
									<img src="<?php echo esc_url($image); ?>" class="d-block w-100" alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
								<?php endif; ?>	
							<?php else: ?>	
								<?php if ( ! empty( $video_url )  ) : 
									//echo esc_url( $video_url ); 
									$parsedUrl  = wp_parse_url($video_url);										
								 
								if ( ! empty( $parsedUrl['host'] ) ) :
									//YouTube URL
									if($parsedUrl['host'] == 'www.youtube.com' || $parsedUrl['host'] == 'youtube.com' || $parsedUrl['host'] == 'youtu.be')	{
																		
									$video_id = '';
									// Define regex patterns to match different YouTube URL formats
									$patterns = [
										'/youtu\.be\/([a-zA-Z0-9_-]{11})/',                 // youtu.be/<id>
										'/youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/',       // youtube.com/embed/<id>
										'/youtube\.com\/v\/([a-zA-Z0-9_-]{11})/',           // youtube.com/v/<id>
										'/youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/',     // youtube.com/watch?v=<id>
										'/youtube\.com\/watch\?.*&v=([a-zA-Z0-9_-]{11})/',  // Other URL parameters
										'/youtube-nocookie\.com\/embed\/([a-zA-Z0-9_-]{11})/' // youtube-nocookie.com/embed/<id>
									];

									// Try each pattern to see if it matches the given URL
									foreach ($patterns as $pattern) {
										if (preg_match($pattern, $video_url, $matches)) {
											$video_id =  $matches[1]; // Return the video ID (first captured group)
										}
									}
										
									$embed_url = "https://www.youtube.com/embed/".$video_id;
									
									?>
									<div class="overframe" ><iframe class="yt" id="slider_youtube-<?php echo esc_attr($count); ?>"  src="<?php echo esc_url($embed_url); ?>?playlist=<?php echo esc_attr($video_id); ?>&loop=1&mute=1&autoplay=1&rel=0&showinfo=0&controls=0&enablejsapi=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe></div>								
									<?php
									} 
									
									 // vimeo URL
									if($parsedUrl['host'] == 'www.player.vimeo.com' || $parsedUrl['host'] == 'player.vimeo.com' || $parsedUrl['host'] == 'www.vimeo.com' || $parsedUrl['host'] == 'vimeo.com') {
										
									$pattern = '/vimeo\.com\/([a-zA-Z0-9_-]+)/';
									preg_match($pattern, $video_url, $matches);
									
									if (isset($matches[1])) {
										$video_id = $matches[1]; // Return the captured video ID
									} else {
										$video_id = ""; // Handle case where video ID is not found
									}
									?>
									
									<div class="overframe"><iframe class="vim" src="https://player.vimeo.com/video/<?php echo esc_attr($video_id); ?>?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1&controls=0" frameborder="0" allowfullscreen></iframe></div>
									<?php
									}
									endif;	
									?>						
									
								<?php endif; //endif; ?>	
							<?php endif; ?>	
							<div class="slider-content">
								<div class="container">
									<div class="content-inner">
										<div class="play-button">
											<a href="javascript:void(0)"><i  class="fa fa-play"></i></a>
										</div>
										
										<?php if ( ! empty( $title ) ) : ?>
											<h1 class="slide-title">
												<?php echo esc_html($title); ?>	
											</h1> 
										<?php endif; ?>
										
										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> <?php if($link_follow_nofollow=='nofollow') { echo "rel='nofollow'"; } ?> class="main-btn"> <?php echo esc_html( $button ); ?> </a>
										<?php endif; ?>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php $count++; } } ?>               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#main-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo esc_html__('Previous','corpex'); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#main-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo esc_html__('Next','corpex'); ?></span>
            </button>
        </div>
    </section>
    <!-- slider -->
	<?php } ?>