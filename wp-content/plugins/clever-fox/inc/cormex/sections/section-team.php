<?php  
	$team_title				= get_theme_mod('team_title','Our <span class="primary-color">Team</span>');
	$team_description		= get_theme_mod('team_description','There are many variations of passages of Lorem Ipsum available.');
	$team_contents			= get_theme_mod('team_contents',corpex_get_team_default());
	$team_sec_column		= get_theme_mod('team_sec_column','3');  
	$team_bg_image			= get_theme_mod('team_bg_image',esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/team/team-bg.jpg'));
	$team_bg_position		= get_theme_mod('team_bg_position','fixed');
?>
<!-- team  -->
    <section class="team-section team-home" <?php if(!empty($team_bg_image)){ ?> style="background:url('<?php echo esc_url($team_bg_image); ?>'); background-repeat:no-repeat;background-size:cover;background-attachment:<?php echo esc_attr($team_bg_position); ?>" <?php } ?>>
        <div class="container">
            <?php if(!empty($team_title) || !empty($team_description)): ?>
				<div class="section-title">
					<?php if(!empty($team_title)): ?>
						<h2>
							<?php echo wp_kses_post($team_title); ?>
						</h2>
					<?php endif; ?>
					
					<?php if(!empty($team_description)): ?>
						<p>
							<?php echo esc_html($team_description); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
            <div class="row">
				<?php
					$team_contents = json_decode($team_contents);
					if( $team_contents!='' )
					{
					foreach($team_contents as $team_item){
					$image    = ! empty( $team_item->image_url ) ? apply_filters( 'corpex_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$title    = ! empty( $team_item->title ) ? apply_filters( 'corpex_translate_single_string', $team_item->title, 'Team section' ) : '';
					$subtitle = ! empty( $team_item->subtitle ) ? apply_filters( 'corpex_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
				?>			
					<div class="col-lg-3 col-md-6">
						<div class="team">
							<?php if(!empty($image)): ?>
								<div class="team-image">
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
								</div>
							<?php endif; ?>	
							
							
							<div class="team-content">
								<?php if(!empty($title) || !empty($subtitle)): ?>
									<h4>
										<?php echo esc_html($title); ?>
									</h4>
									<span>
										<?php echo esc_html($subtitle); ?>
									</span>
								<?php endif; ?>
								
								<aside class="widget widget_social_widget">
									<ul>
										<?php if ( ! empty( $team_item->social_repeater ) ) :
											$icons         = html_entity_decode( $team_item->social_repeater );
											$icons_decoded = json_decode( $icons, true );
											if ( ! empty( $icons_decoded ) ) : ?>
											<?php
												foreach ( $icons_decoded as $value ) {
													$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'corpex_translate_single_string', $value['icon'], 'Team section' ) : '';
													$social_link = ! empty( $value['link'] ) ? apply_filters( 'corpex_translate_single_string', $value['link'], 'Team section' ) : '';
													if ( ! empty( $social_icon ) ) {
											?>
												<li><a href="<?php echo esc_url( $social_link ); ?>"><i class=" fab <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
										<?php	} } endif; endif; ?>
									</ul>
								</aside>
							</div>								
						</div>
					</div>
				<?php } } ?>	
            </div>
        </div>
    </section>
    <!-- team end -->