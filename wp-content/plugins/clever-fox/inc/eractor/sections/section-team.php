<?php  
	$team_subtitle		= get_theme_mod('team_subtitle', __('<h2>Outstanding</h2><div class="animation"><div class="first"><div>Team</div></div></div>','clever-fox'));
	$team_description	= get_theme_mod('team_description', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','clever-fox')); 
	$team_contents		= get_theme_mod('team_contents',renoval_get_team_default());
	$team_bg_image		= get_theme_mod('team_bg_image',esc_url(CLEVERFOX_PLUGIN_URL .'inc/eractor/images/team/team-bg.jpg'));
?>
	<!-- Start: Team Section
	=======================-->
	<section id="team-section" class="team-section team-home team-one wow fadeInUp" <?php if(!empty($team_bg_image)){ ?> style="background-image:url('<?php echo esc_url($team_bg_image); ?>');" <?php } ?>>
		<div class="container">
			<?php if(!empty($team_subtitle) || !empty($team_description)): ?>
				<div class="row">
					<div class="section-title text-center">
						
						<?php if(!empty($team_subtitle)): ?>
							<div>
								<?php echo wp_kses_post($team_subtitle); ?>
							</div>
						<?php endif; ?>
						
						<?php if(!empty($team_description)): ?>
							<p>
								<?php echo wp_kses_post($team_description); ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
			
			<div class="row justify-content-center">
				<?php
					$team_contents = json_decode($team_contents);
					if( $team_contents!='' )
					{
					foreach($team_contents as $team_item){
					$image    = ! empty( $team_item->image_url ) ? apply_filters( 'renoval_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$title    = ! empty( $team_item->title ) ? apply_filters( 'renoval_translate_single_string', $team_item->title, 'Team section' ) : '';
					$subtitle = ! empty( $team_item->subtitle ) ? apply_filters( 'renoval_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
					$link = ! empty( $team_item->link ) ? apply_filters( 'renoval_translate_single_string', $team_item->link, 'Team section' ) : '';
					
				?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="team-member">
							<?php if(!empty($image)): ?>
								<div class="team-image">
									<a href="#">
										<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
									</a>
								</div>
							<?php endif; ?>	
							
							<?php if(!empty($title) || !empty($subtitle)): ?>
								<div class="team-content">
									<h5>
										<?php echo esc_html($title); ?>
									</h5>
									<p>
										<?php echo esc_html($subtitle); ?>
									</p>
									<div class="section-element-team">
										<img src="<?php echo esc_url(CLEVERFOX_PLUGIN_URL .'inc/eractor/images/section-bg.png'); ?>" alt="<?php echo esc_attr($title); ?>"> 
									</div>
								</div>
							<?php endif; ?>
							
							<div class="section-element-team">
								<img src="<?php echo esc_url(CLEVERFOX_PLUGIN_URL .'inc/eractor/images/section-bg.png'); ?>" alt="<?php echo esc_attr($title); ?>"> 
							</div>
							<aside class="widget widget-social-widget">
								<ul>
									<?php if ( ! empty( $team_item->social_repeater ) ) :
										$icons         = html_entity_decode( $team_item->social_repeater );
										$icons_decoded = json_decode( $icons, true );
										if ( ! empty( $icons_decoded ) ) : ?>
										<?php
											foreach ( $icons_decoded as $value ) {
												$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'renoval_translate_single_string', $value['icon'], 'Team section' ) : '';
												$social_link = ! empty( $value['link'] ) ? apply_filters( 'renoval_translate_single_string', $value['link'], 'Team section' ) : '';
												if ( ! empty( $social_icon ) ) {
										?>
											<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
									<?php	} } endif; endif; ?>								
								</ul>
						   </aside>
						</div>
					</div>
				<?php } } ?>
			</div>
		</div>
	</section>
	<!-- End: Team Section
	=======================-->