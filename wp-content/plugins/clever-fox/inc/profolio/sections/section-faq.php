<?php
$hs_faq = get_theme_mod('hs_faq', '1');
$faq_title = get_theme_mod('faq_title', "Our <span>FAQ'S</span>");
$faq_desc = get_theme_mod('faq_desc', 'There are many variations of passages of Lorem Ipsum available.');
$faq_display_num = get_theme_mod('faq_display_num', '10');
$post_type = 'corpex_faq';
$tax = 'faq_categories';
$tax_terms = get_terms($tax);

if($hs_faq == '1') {
?>
<section class="faq-section pricing-faq">
	<div class="container">
		<?php if (!empty($faq_title) || !empty($faq_desc)): ?>
			<div class="section-title">
				<?php if (!empty($faq_title)): ?>
					<h2>
						<?php echo wp_kses_post($faq_title); ?>
					</h2>
				<?php endif; ?>

				<?php if (!empty($faq_desc)): ?>
					<p>
						<?php echo esc_html($faq_desc); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="row">
			<?php
			if (!$tax_terms) { ?>

				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne1">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									How Can i Make A Change To My Application? </button>
							</h2>
							<div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the third item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne2">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
									How To Send Creative Portfolio Friends? </button>
							</h2>
							<div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the third item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne3">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
									What is The Minimum And Maximum Design? </button>
							</h2>
							<div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne3"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the third item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne4">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
									How Create Your Web Design Portfolio in PSD? </button>
							</h2>
							<div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne4"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the third item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne5">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
									How Create Your Web Design Portfolio in PSD? </button>
							</h2>
							<div id="collapseOne5" class="accordion-collapse collapse" aria-labelledby="headingOne5"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the third item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne6">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
									How Can i Make A Change To My Application? </button>
							</h2>
							<div id="collapseOne6" class="accordion-collapse collapse" aria-labelledby="headingOne6"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the third item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne7">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne7">
									Which One Need For Satisfying Growing Energy? </button>
							</h2>
							<div id="collapseOne7" class="accordion-collapse collapse" aria-labelledby="headingOne7"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the second item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne8">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne8" aria-expanded="false" aria-controls="collapseOne8">
									When I Receive The Invoice For My Order? </button>
							</h2>
							<div id="collapseOne8" class="accordion-collapse collapse" aria-labelledby="headingOne8"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the second item’s accordion body.</strong>&nbsp;It is hidden by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne9">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne9" aria-expanded="false" aria-controls="collapseOne9">
									What Will Happen If I Pick Wrong Plan? </button>
							</h2>
							<div id="collapseOne9" class="accordion-collapse collapse" aria-labelledby="headingOne9"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the first item’s accordion body.</strong>&nbsp;It is shown by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne10">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne10">
									What is The Minimum And Maximum Design? </button>
							</h2>
							<div id="collapseOne10" class="accordion-collapse collapse" aria-labelledby="headingOne10"
								data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p><strong>This is the first item’s accordion body.</strong>&nbsp;It is shown by
										default, until the collapse plugin adds the appropriate classes that we use to style
										each element. These classes control the overall appearance, as well as the showing
										and hiding via CSS transitions. You can modify any of this with custom CSS or
										overriding our default variables. It’s also worth noting that just about any HTML
										can go within the&nbsp;<code>.accordion-body</code>, though the transition does
										limit overflow.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php } else { ?>
				<?php
				$args = array('post_type' => 'corpex_faq', 'posts_per_page' => $faq_display_num);

				$faq = new WP_Query($args);
				if ($faq->have_posts()) {
					$count = 1;
					while ($faq->have_posts()):
						$faq->the_post();

						$terms = get_the_terms($faq->ID, 'faq_categories');

						if ($terms && !is_wp_error($terms)):
							$links = array();

							foreach ($terms as $term) {

								$term_id = $term->term_id;
								$links[] = $term->slug;
							}

							$tax = join(' ', $links);
						else:
							$tax = '';
						endif;
						?>
						<div class="col-lg-6">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne<?php echo esc_attr($count); ?>">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseOne<?php echo esc_attr($count); ?>" aria-expanded="false"
											aria-controls="collapseOne<?php echo esc_attr($count); ?>">
											<?php the_title(); ?>
										</button>
									</h2>
									<div id="collapseOne<?php echo esc_attr($count); ?>" class="accordion-collapse collapse"
										aria-labelledby="headingOne<?php echo esc_attr($count); ?>"
										data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						++$count;
					endwhile;
				}
			}
			?>
		</div>
	</div>
</section>
<?php } ?>