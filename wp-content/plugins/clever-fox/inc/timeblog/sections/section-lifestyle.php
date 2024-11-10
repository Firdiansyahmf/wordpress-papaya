 <!--===// Start: Slider
    =================================--> 
<?php  
	$section4_hs 					= get_theme_mod('section4_hs','1');
	$section4_title 				= get_theme_mod('section4_title',__('Lifestyle','clever-fox'));
	$section4_category_id 			= get_theme_mod('section4_category_id');
	$section4_display_num 			= get_theme_mod('section4_display_num','3');
	if($section4_hs == '1'){
?>	

	<!--===// Start: Section 4
    =================================-->
    <div id="lifestyle-section" class="lifestyle-section av-pt-default av-pb-default home-trending">
		<div class="av-columns-area wow fadeInUp">
			<?php if(!empty($section4_title)){ ?>
				<div class="av-column-12">
					<div class="heading-default wow fadeInUp">
						<h3><?php printf(/* Translators: Heading */ esc_html__('%s.' ,'clever-fox'), esc_html($section4_title)); ?></h3>
					</div>
				</div>
			<?php } ?>	
            <div class="av-column-12">
            	<div class="lifestyle-slider">
            		<?php 	
						$args = array( 'post_type' => 'post', 'category_name' => $section4_category_id,'posts_per_page' => $section4_display_num,'ignore_sticky_posts' => true ) ; 	
							query_posts( $args );
							if(query_posts( $args ))
							{	
							while(have_posts()):the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('post-slider'); ?>>
				 		<?php if ( has_post_thumbnail() ) : ?>
						<figure class="post-image-figure">
							<div class="post-image">
								<?php the_post_thumbnail(); ?>
							</div>
						</figure>
						<?php endif; ?>
						<style>	.post-slider .post-content:before {background: #000; opacity: 0.3;} </style>
						<div class="post-content">
							<div class="post-slide">
								<div class="posto">
									<div class="post-meta">
										<span class="post-list">
											<ul class="post-categories">
												<li><a href="<?php esc_url(the_permalink()); ?>"><?php the_category(', '); ?></a></li>
											</ul>
										</span>
									</div>
									<?php     
										if ( is_single() ) :
										
										the_title('<h5 class="post-title">', '</h5>' );
										
										else:
										
										the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
										
										endif; 
										
										//content
										the_content(
											sprintf( 
												__( 'Read More', 'clever-fox' ), 
												'<span class="screen-reader-text">  '.get_the_title().'</span>' 
											)
										);
									?>
								</div>
							</div>
							<div class="post-meta">
								<span class="posted-on post-date">
									<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><i class="fa fa-calendar"></i> <?php echo the_date('d/m/Y'); ?></a>
								</span>
								<span class="author-name">
									<?php  $user = wp_get_current_user(); ?>
									<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>" title="Author: <?php esc_attr(the_author()); ?>" class="author meta-info hide-on-mobile"><i class="fa fa-user"></i><?php esc_html(the_author()); ?></a>
								</span>
							</div>
						</div>
					</article>						
		            <?php endwhile; } ?>
            	</div>
            </div>
        </div>
    </div>
    <!-- End: Slider
    =================================-->
	<?php } ?>	