<?php
	if ( ! function_exists( 'fiona_blog_below_header' ) ) :
	function fiona_blog_below_header() {?>	
		<div class="header-below d-none d-md-block">
			<div class="av-container">
				<div class="av-columns-area">
					<?php
						$bh_latest_news_hs	= get_theme_mod('bh_latest_news_hs','1');
						$bh_latest_news_ttl	= get_theme_mod('bh_latest_news_ttl',__('Latest News','clever-fox')); 
						$bh_latest_news_cat_id 	= get_theme_mod('bh_latest_news_cat_id');
					?>
					<div class="av-column-8 av-md-column-7">
						<div class="widget-left text-md-left text-center">
							<?php if($bh_latest_news_hs =='1'){ ?>
								<aside class="widget widget_breakingNews">
									<div class="breakingNews-box">
										<div class="breakingNews" id="breakingNews">
											<?php if(!empty($bh_latest_news_ttl)){ ?>
												<div class="bn-title"><h5><?php echo wp_kses_post($bh_latest_news_ttl); ?></h5><span></span></div>
											<?php } ?>	
											<div class="breakingNewss marquee">
												<?php
													$fiona_blog_args = array( 'post_type' => 'post', 'category_name' => $bh_latest_news_cat_id,'posts_per_page' => 4,'ignore_sticky_posts' => true );
													$fiona_blog_wp_query = new WP_Query($fiona_blog_args);
													if($fiona_blog_wp_query)
													{	
													while($fiona_blog_wp_query->have_posts()):$fiona_blog_wp_query->the_post();
												?>		
													<a href="<?php echo esc_url(the_permalink()); ?>"><span><?php the_title(); ?></span></a>
											   <?php endwhile; } wp_reset_postdata(); ?>
											</div>
										</div>
									</div>
								</aside>
							<?php } ?>
						</div>
					</div>
					<div class="av-column-4 av-md-column-5">
						<div class="widget-right text-md-right text-center">
							<aside class="widget widget_weather_date">
								<div class="trending-box">
									<?php
										$bh_temp_hs	 = get_theme_mod('bh_temp_hs','1');
										$bh_temp_api = get_theme_mod('bh_temp_api','http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=66078b6cc6f4a920e0e653b41e1cb6ee');
										if($bh_temp_hs =='1' && !empty($bh_temp_api)){
										// $json = file_get_contents($bh_temp_api);
										// $weather = json_decode($json);
										// $kelvin = $weather->main->temp;
										// $celcius = $kelvin - 273.15;
										// $city =  $weather->name;										
										
										$response = wp_remote_get( $bh_temp_api, array(
											'sslverify' => false,
										) );
										if ( ! is_wp_error( $response ) && wp_remote_retrieve_response_code( $response ) === 200 ) :
										$body = wp_remote_retrieve_body( $response );
										$weather = json_decode($body);
										$currentTime = time();
										if(!empty($weather->main->temp) && !empty($weather->name)){
											$kelvin = $weather->main->temp;
											$celcius = $kelvin - 273.15;
											$city =  $weather->name;
										?>
										<div class="trending-weather is-animated">
											<i class="fa fa-sun-o"></i>
											<span class="city"><?php echo esc_html($city); ?></span>
											<span class="weather-current-temp"> <?php echo esc_html(substr($celcius,0,3)); ?> <sup>℃</sup> </span>
										</div>
									<?php
										}else{ echo esc_html__('Please Enter Valid API Key','clever-fox');}
										else :
											echo esc_html__( 'Failed to fetch weather data', 'clever-fox' );
										endif;
										}
										$bh_date_hs	= get_theme_mod('bh_date_hs','1');
										if($bh_date_hs =='1'){
									?>
										<div class="trending-date">
											<?php  echo '<span class="t-day">'. esc_html(date_i18n('j', 	strtotime(current_time("d"))) ).'</span>';
											echo '<span class="t-all">'. esc_html(date_i18n('M Y', strtotime(current_time("Y-m"))) ).'</span>';
											?>
										</div>
									<?php } ?>
							    </div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php 
} endif;
add_action('fiona_blog_below_header', 'fiona_blog_below_header');
