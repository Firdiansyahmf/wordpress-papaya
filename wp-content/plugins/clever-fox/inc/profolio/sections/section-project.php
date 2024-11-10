<?php
$hs_project_tab = get_theme_mod('hs_project_tab', '1');
$hs_portfolio = get_theme_mod('hs_portfolio', '1');
$project_title = get_theme_mod('project_title', 'Our <span>Portfolio</span>');
$project_desc = get_theme_mod('project_desc', 'There are many variations of passages of Lorem Ipsum available.');
$project_display_num = get_theme_mod('project_display_num', '10');
$post_type = 'corpex_project';
$tax = 'project_categories';
$tax_terms = get_terms($tax);

if($hs_portfolio =='1'){
?>
<!-- Portfolio -->
<section class="portfolio-home portfolio-section">
	<div class="container">
		<?php if (!empty($project_title) || !empty($project_desc)): ?>
			<div class="section-title">
				<?php if (!empty($project_title)): ?>
					<h2>
						<?php echo wp_kses_post($project_title); ?>
					</h2>
				<?php endif; ?>

				<?php if (!empty($project_desc)): ?>
					<p>
						<?php echo wp_kses_post($project_desc); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php
		if (!$tax_terms) { ?>
			<div class="st-filter-wrapper">
				<div class="st-tab-filter text-center">
					<a href="#" data-filter="*" class="active">All</a>
					<a href="#" data-filter=".design" class="">Design</a>
					<a href="#" data-filter=".development" class="">Development</a>
					<a href="#" data-filter=".marketing">Marketing</a>
					<a href="#" data-filter=".support">Support</a>
				</div>
				<div id="st-filter-init" class="row st-filter-init" style="position: relative; height: 1039.38px;">
					<div class="col-lg-4 col-md-6 st-filter-item all development support"
						style="position: absolute; left: 0%; top: 0px;">
						<figure class="projects-item">
							<div class="image">
								<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
									class="projects-link-icon">
									<img src="https://www.nayrathemes.com/demo/pro/corpex/wp-content/uploads/2024/04/image-6.jpg"
										class="card-img-top" alt="Project Image">
								</a>
								<div class="projects-link">
									<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
										class="projects-link-icon"><i class="fa fa-angle-double-right"
											aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<figcaption class="projects-caption">
								<div class="projects-heading">
									<p>Development</p>
									<h4>
										A Dynamic Portfolio Showcase </h4>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 st-filter-item all design support"
						style="position: absolute; left: 33.3333%; top: 0px;">
						<figure class="projects-item">
							<div class="image">
								<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
									class="projects-link-icon">
									<img src="https://www.nayrathemes.com/demo/pro/corpex/wp-content/uploads/2024/04/image-5.jpg"
										class="card-img-top" alt="Project Image">
								</a>
								<div class="projects-link">
									<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
										class="projects-link-icon"><i class="fa fa-angle-double-right"
											aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<figcaption class="projects-caption">
								<div class="projects-heading">
									<p>Digital Marketing</p>
									<h4>
										A Portfolio of Business Brilliance </h4>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 st-filter-item all marketing"
						style="position: absolute; left: 66.6667%; top: 0px;">
						<figure class="projects-item">
							<div class="image">
								<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
									class="projects-link-icon">
									<img src="https://www.nayrathemes.com/demo/pro/corpex/wp-content/uploads/2024/04/image-4.jpg"
										class="card-img-top" alt="Project Image">
								</a>
								<div class="projects-link">
									<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
										class="projects-link-icon"><i class="fa fa-angle-double-right"
											aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<figcaption class="projects-caption">
								<div class="projects-heading">
									<p>Development</p>
									<h4>
										Power of Strategic Initiatives </h4>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 st-filter-item all development marketing"
						style="position: absolute; left: 0%; top: 519px;">
						<figure class="projects-item">
							<div class="image">
								<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
									class="projects-link-icon">
									<img src="https://www.nayrathemes.com/demo/pro/corpex/wp-content/uploads/2024/04/image-3-1.jpg"
										class="card-img-top" alt="Project Image">
								</a>
								<div class="projects-link">
									<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
										class="projects-link-icon"><i class="fa fa-angle-double-right"
											aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<figcaption class="projects-caption">
								<div class="projects-heading">
									<p>Development Strategy</p>
									<h4>
										Winning Work </h4>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 st-filter-item all design development"
						style="position: absolute; left: 33.3333%; top: 519px;">
						<figure class="projects-item">
							<div class="image">
								<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
									class="projects-link-icon">
									<img src="https://www.nayrathemes.com/demo/pro/corpex/wp-content/uploads/2024/04/image-2-1.jpg"
										class="card-img-top" alt="Project Image">
								</a>
								<div class="projects-link">
									<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
										class="projects-link-icon"><i class="fa fa-angle-double-right"
											aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<figcaption class="projects-caption">
								<div class="projects-heading">
									<p>Development Strategy</p>
									<h4>
										Winning Work </h4>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 st-filter-item all design"
						style="position: absolute; left: 66.6667%; top: 519px;">
						<figure class="projects-item">
							<div class="image">
								<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
									class="projects-link-icon">
									<img src="https://www.nayrathemes.com/demo/pro/corpex/wp-content/uploads/2024/04/image-1-1.jpg"
										class="card-img-top" alt="Project Image">
								</a>
								<div class="projects-link">
									<a href="https://www.nayrathemes.com/demo/pro/corpex/?post_type=page&amp;p=16"
										class="projects-link-icon"><i class="fa fa-angle-double-right"
											aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<figcaption class="projects-caption">
								<div class="projects-heading">
									<p>Free Consulting</p>
									<h4>
										Business Consulting </h4>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>

		<?php } else { ?>
			<div class="st-filter-wrapper">
				<?php if ($hs_project_tab == '1') { ?>
					<div class="st-tab-filter text-center">
						<?php
						foreach ($tax_terms as $tax_term) {
							$terms = get_the_terms($tax_term->term_id, 'project_categories');
							$cat_post_count = $tax_term->count;
							if ($tax_term->slug == 'all') {
								?>
								<a href="#" data-filter="*" class="active"><?php echo esc_html__('All', 'clever-fox'); ?></a>
							<?php } else { ?>
								<a href="#"
									data-filter=".<?php echo esc_attr($tax_term->slug); ?>"><?php echo esc_html($tax_term->name); ?></a>
							<?php }
						} ?>
					</div>
				<?php } ?>

				<div id="st-filter-init" class="row st-filter-init">
					<?php
					$project_link = sanitize_text_field(get_post_meta(get_the_ID(), 'project_button_link', true));
					$project_button_link_target = sanitize_text_field(get_post_meta(get_the_ID(), 'project_button_link_target', true));

					if ($project_link) {
						$project_link;
					} else {
						$project_link = get_post_permalink();
					}
					$args = array('post_type' => 'corpex_project', 'posts_per_page' => $project_display_num);
					$project = new WP_Query($args);
					if ($project->have_posts()) {
						while ($project->have_posts()):
							$project->the_post();

							$terms = get_the_terms($project->ID, 'project_categories');

							if ($terms && !is_wp_error($terms)):
								$links = array();

								foreach ($terms as $term) {
									$links[] = $term->slug;
								}

								$tax = join(' ', $links);
							else:
								$tax = '';
							endif;
							$tax = strtolower($tax);
							?>
							<div class="col-lg-4 col-md-6 st-filter-item <?php echo esc_attr($tax); ?>">
								<figure class="projects-item">
									<div class="image">
										<a href="<?php echo esc_url($project_link); ?>" class="projects-link-icon" <?php if ($project_button_link_target) {
											   echo "target='_blank'";
										   } ?>>
											<?php if (has_post_thumbnail()) { ?>
												<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="card-img-top"
													alt="<?php echo esc_attr__('Project Image', 'clever-fox'); ?>">
											<?php } ?>
										</a>
										<div class="projects-link">
											<a href="<?php echo esc_url($project_link); ?>" class="projects-link-icon" <?php if ($project_button_link_target) {
												   echo "target='_blank'";
											   } ?>><i
													class="fa fa-angle-double-right"></i>
											</a>
										</div>
									</div>
									<figcaption class="projects-caption">
										<div class="projects-heading">
											<p><?php echo esc_html(get_the_excerpt()); ?></p>
											<h4>
												<?php the_title(); ?>
											</h4>
										</div>
									</figcaption>
								</figure>
							</div>
						<?php
						endwhile;
					}
					?>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
<?php } ?>
<!-- Portfolio end -->