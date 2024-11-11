<?php  
	$hs_project_tab 		= get_theme_mod('hs_project_tab','1');
	$project_title			= get_theme_mod('project_title',__('Portfolio','clever-fox'));
	$project_desc			= get_theme_mod('project_desc',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!','clever-fox'));
	$project_display_num	= get_theme_mod('project_display_num','3');
	$post_type = 'giant_project';
	$tax = 'project_categories'; 
	$tax_terms = get_terms($tax);	
	if($hs_project_tab=='1'){
?>	
	<!-- portfolio start -->
<section class="portfolio-section">
    <div class="container">
        <?php if(!empty($project_title)  || !empty($project_subtitle) || !empty($project_desc)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($project_title)): ?>
					<h2 class="maintitle">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);" class="desg1"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
						
							<span><?php echo wp_kses_post($project_title); ?></span>
						
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
					</h2>
				<?php endif; ?>
				
				<?php if(!empty($project_desc)): ?>
					<p>
						<?php echo wp_kses_post($project_desc); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
		<div class="filter-wrapper">
			
			<div id="filter-init" class="row filter-init">
				<?php 
				
					$project_link 			= sanitize_text_field( get_post_meta( get_the_ID(),'project_button_link', true ));
					$project_button_link_target 	= sanitize_text_field( get_post_meta( get_the_ID(),'project_button_link_target', true ));

					if($project_link) { 
						$project_link; 
					}	
					else { 
						$project_link = get_post_permalink(); 
					} 
					$args = array( 'post_type' => 'giant_project','posts_per_page' => $project_display_num);  
					$project = new WP_Query( $args ); 
					if( $project->have_posts() )
					{
						while ( $project->have_posts() ) : $project->the_post();
				
					$terms = get_the_terms( $project->ID, 'project_categories' );
										
					if ( $terms && ! is_wp_error( $terms ) ) : 
						$links = array();

						foreach ( $terms as $term ) 
						{
							$links[] = $term->slug;
						}
						
						$tax = join( ' ', $links );		
					else :	
						$tax = '';	
					endif;
				?>
					<div class="col-lg-4 col-sm-6 filter-item  <?php echo strtolower($tax); ?>">
						<div class="portfolio">
							<div class="card-body">
								<figure class="image"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo esc_attr__('Project Image','clever-fox'); ?>">
									<div class="portfolio-content">
										 <a href="<?php echo esc_url($project_link); ?>" <?php  if($project_button_link_target) { echo "target='_blank'"; } ?>  ><i class="fa fa-search-plus" aria-hidden="true"></i></a>
									</div>
								</figure> 
							</div>
						</div>
					</div>
				<?php 	
					endwhile; 
					}
				?>                
			</div>
		</div>
    </div>
</section>
<?php }?>
<!-- portfolio end -->