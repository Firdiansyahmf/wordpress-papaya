<?php  
	$team_title			= get_theme_mod('team_title','Our Doctors');
	$team_subtitle		= get_theme_mod('team_subtitle','Doctors');
	$team_contents			= get_theme_mod('team_contents',medazin_get_team_default());	
?>
	<!-- ================================- Doctors Section ======================== -->
    <section class="doctors-section team-home" id="doctors-section">
        <div class="bg-elements ">
			<img src="<?php echo esc_url(CLEVERFOX_PLUGIN_URL .'/inc/medazin/images/elements/element4.png'); ?>" class="element1 " alt="<?php echo esc_attr__('Image','clever-fox'); ?>">
        </div>
        <div class="container ">
            <?php if(!empty($team_title)  || !empty($team_subtitle)): ?>
				<div class="section-title text-center wow slideInDown">
					<?php if(!empty($team_subtitle)): ?>
						<span class="subtitle">
							<?php echo wp_kses_post($team_subtitle); ?>
						</span>
						<span class="title-element"> <i class="fa fa-heartbeat"></i></span>
					<?php endif; ?>
					
					<?php if(!empty($team_title)): ?>
						<h5>
							<?php echo wp_kses_post($team_title); ?>
						</h5>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
            <div class=" doctors-carousel owl-carousel ">
				<?php
					$team_contents = json_decode($team_contents);
					if( $team_contents!='' )
					{
					foreach($team_contents as $team_item){
					$image    = ! empty( $team_item->image_url ) ? apply_filters( 'medazin_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$title    = ! empty( $team_item->title ) ? apply_filters( 'medazin_translate_single_string', $team_item->title, 'Team section' ) : '';
					$subtitle = ! empty( $team_item->subtitle ) ? apply_filters( 'medazin_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
					$subtitle2 = ! empty( $team_item->subtitle2 ) ? apply_filters( 'medazin_translate_single_string', $team_item->subtitle2, 'Team section' ) : '';
					$subtitle3 = ! empty( $team_item->subtitle3 ) ? apply_filters( 'medazin_translate_single_string', $team_item->subtitle3, 'Team section' ) : '';
					$link = ! empty( $team_item->link ) ? apply_filters( 'medazin_translate_single_string', $team_item->link, 'Team section' ) : '';
					
				?>
					<div class="content-box wow flipInY ">
						<div class="main-wrap ">
							<?php if(!empty($image)): ?>
								<div class="image-wrap ">
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
								</div>
							<?php endif; ?>	
							
							<?php if(!empty($title) || !empty($subtitle)): ?>
								<div class="text-wrap ">
									<a href="#">
										<h4 class="title">
											<?php echo esc_html($title); ?>
										</h4>
									</a>
									<p class="desc">
										<?php echo esc_html($subtitle); ?>
									</p>
								</div>
							<?php endif; ?>
							
							<aside class="widget widget_social_widget ">
								<ul>
									<?php if ( ! empty( $team_item->social_repeater ) ) :
										$icons         = html_entity_decode( $team_item->social_repeater );
										$icons_decoded = json_decode( $icons, true );
										if ( ! empty( $icons_decoded ) ) : ?>
										<?php
											foreach ( $icons_decoded as $value ) {
												$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'medazin_translate_single_string', $value['icon'], 'Team section' ) : '';
												$social_link = ! empty( $value['link'] ) ? apply_filters( 'medazin_translate_single_string', $value['link'], 'Team section' ) : '';
												if ( ! empty( $social_icon ) ) {
										?>
											<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fab <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
									<?php	} } endif; endif; ?>
								</ul>
							</aside>
						</div>					
						<div class="detail-wrap ">
							<?php if(!empty($image)): ?>
								<div class="circle-image ">
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
								</div>
							<?php endif; ?>	
							
							<?php if(!empty($title) || !empty($subtitle)): ?>
								<div class="text-wrap ">
									<a href="#">
										<h4 class="title">
											<?php echo esc_html($title); ?>
										</h4>
									</a>
									<p class="desc">
										<?php echo esc_html($subtitle); ?>
									</p>
								</div>
							<?php endif; ?>
							<p class="achive "><span><?php echo esc_html($subtitle2); ?>+</span><?php echo esc_html($subtitle3); ?></p>
							<div class="link-wrap ">
								<a href="<?php echo esc_url($link); ?>"><?php echo esc_html__('Read More','clever-fox'); ?></a>
							</div>
							<aside class="widget widget_social_widget ">
								<ul>
									<?php if ( ! empty( $team_item->social_repeater ) ) :
										$icons         = html_entity_decode( $team_item->social_repeater );
										$icons_decoded = json_decode( $icons, true );
										if ( ! empty( $icons_decoded ) ) : ?>
										<?php
											foreach ( $icons_decoded as $value ) {
												$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'medazin_translate_single_string', $value['icon'], 'Team section' ) : '';
												$social_link = ! empty( $value['link'] ) ? apply_filters( 'medazin_translate_single_string', $value['link'], 'Team section' ) : '';
												if ( ! empty( $social_icon ) ) {
										?>
											<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fab <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
									<?php	} } endif; endif; ?>
								</ul>
							</aside>
						</div>
					</div>
				<?php } } ?>
            </div>
        </div>
    </section>
    <!-- ================================- End ======================== -->