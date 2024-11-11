<?php
$hs_pricing = get_theme_mod('hs_pricing', '1');
$pricing_title = get_theme_mod('pricing_title', __('Our <span>Pricing</span>','clever-fox'));
$pricing_description = get_theme_mod('pricing_description', __('There are many variations of passages of Lorem Ipsum available.','clever-fox'));
$pricing_display_num = get_theme_mod('pricing_display_num', '10');
$pricing_image = get_theme_mod('pricing_image', esc_url(CLEVERFOX_PLUGIN_URL . 'inc/corpex/images/shapes/shape2.png'));
$post_type = 'corpex_pricing';
$tax = 'pricing_categories';
$tax_terms = get_terms($tax);

if($hs_pricing == '1') {
?>
<!-- Pricing -->
<section class="pricing-section pricing-home" <?php if (!empty($pricing_image)) { ?>
		style="background-image: url('<?php echo esc_url($pricing_image); ?>');" <?php } ?>>
	<div class="container">
		<?php if (!empty($pricing_title) || !empty($pricing_description)): ?>
			<div class="section-title">
				<?php if (!empty($pricing_title)): ?>
					<h2>
						<?php echo wp_kses_post($pricing_title); ?>
					</h2>
				<?php endif; ?>

				<?php if (!empty($pricing_description)): ?>
					<p>
						<?php echo wp_kses_post($pricing_description); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="row">
			<?php
			if (!$tax_terms) { ?>
				<div class="col-lg-4 col-md-6">
					<div class="pricing-item ">
						<div class="price-heading">
							<h2>Standard Pack </h2>
						</div>
						<div class="pricing-list">
							<ul>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Five Brand Monitors</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Full Social Profiles</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Basic Quota</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>PDF Report</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Custom Service</li>
							</ul>
						</div>
						<div class="pricing-rate">
							<span class="pricing"><sup>$</sup>149.00<small>/Month</small></span>
						</div>
						<a href="#" class="main-btn"> Buy Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="pricing-item ">
						<div class="price-heading">
							<h2>
								Business Pack </h2>
						</div>
						<div class="pricing-list">
							<ul>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Five Brand Monitors</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Full Social Profiles</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i> Basic Quota</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>PDF Report</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Custom Service</li>
							</ul>
						</div>
						<div class="pricing-rate">
							<span class="pricing"><sup>$</sup>99.00<small>/Month</small></span>
						</div>
						<a href="#" class="main-btn"> Buy Now</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="pricing-item ">
						<div class="price-heading">
							<h2>
								Personal Pack </h2>
						</div>
						<div class="pricing-list">
							<ul>
								<li><i class="fa fab fa-check" aria-hidden="true"></i> Five Brand Monitors</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Full Social Profiles</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Basic Quota</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>PDF Report</li>
								<li><i class="fa fab fa-check" aria-hidden="true"></i>Custom Service</li>
							</ul>
						</div>
						<div class="pricing-rate">
							<span class="pricing"><sup>$</sup>49.00<small>/Month</small></span>
						</div>
						<a href="#" class="main-btn"> Buy Now</a>
					</div>
				</div>
			</div>
		<?php } else {
				foreach ($tax_terms as $tax_term) {
					$args = array(
						'post_type' => 'corpex_pricing',
						'posts_per_page' => $pricing_display_num,
						'tax_query' => array(
							array(
								'taxonomy' => 'pricing_categories',
								'field' => 'slug',
								'terms' => $tax_term->slug
							)
						),
					);
					$plan = new WP_Query($args);
					if ($plan->have_posts()) {
						$count = 1;
						while ($plan->have_posts()) {
						$plan->the_post();
						$plans_currency = sanitize_text_field( get_post_meta( get_the_ID(),'plans_currency', true ));
						$plans_price    = sanitize_text_field( get_post_meta( get_the_ID(),'plans_price', true ));
						$price_content 	= get_post_meta(get_the_ID(), 'price_content', true);
						$plans_button_label = sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_label', true ));
						$plans_button_link 	= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_link', true ));
						$plans_button_link_target = sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_link_target', true ));
						$price_recomended 		= sanitize_text_field( get_post_meta( get_the_ID(),'price_recomended', true ));

							$terms = get_the_terms($plan->ID, 'pricing_categories');

							if ($terms && !is_wp_error($terms)):
								$links = array();

								foreach ($terms as $term) {
									$links[] = $term->slug;
								}

								$tax = join(' ', $links);
							else:
								$tax = '';
							endif;

							$recommended = ($price_recomended == 'recommend') ? 'recommend' : '';
							?>
						<div class="col-lg-4 col-md-6">
							<div class="pricing-item <?php echo esc_attr($recommended); ?>">
								<div class="price-heading">
									<h2>
										<?php the_title(); ?>
									</h2>
								</div>
								<div class="pricing-list">
									<?php
									if (isset($price_content) && is_array($price_content)) {
										echo '<ul>';
										foreach ($price_content as $price_content) {
											echo '<li><i class="fa fab fa-check"></i>' . wp_kses_post($price_content) . '</li>';
										}
										echo '</ul>';
									}
									?>
								</div>

								<?php if (!empty($plans_price)) { ?>
									<div class="pricing-rate">
										<span
											class="pricing"><sup><?php echo esc_html($plans_currency); ?></sup><?php echo esc_html($plans_price); ?>.00<small>/Month</small></span>
									</div>
								<?php } ?>

								<?php if (!empty($plans_button_label)) { ?>
									<a href="<?php echo esc_url($plans_button_link); ?>" class="main-btn" <?php if ($plans_button_link_target) {
										   echo "target='_blank'";
									   } ?>>
										<?php echo esc_html($plans_button_label); ?></a>
								<?php } ?>
							</div>
						</div>
						<?php $count++;
						}
					}
				}
			} ?>
	</div>
	</div>
</section>
<?php } ?>
<!-- Pricing end -->