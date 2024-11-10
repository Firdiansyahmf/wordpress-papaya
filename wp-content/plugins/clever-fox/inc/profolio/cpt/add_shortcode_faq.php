<?php
  add_shortcode( 'corpex_faq','corpex_faq_list' );
function corpex_faq_list ( $atts ) {
  $atts = shortcode_atts( array(
	 'id' => '',
    'category' => ''
  ), $atts );
  $idPost =  intval($atts['id']);
  if(get_post_status($atts) != "publish") return;
    $terms = get_terms('faq_categories');
    wp_reset_query();
    $args = array('post_type' => 'corpex_faq','p' => $idPost,
      'tax_query' => array(
        array(
          'taxonomy' => 'faq_categories',
          'field' => 'slug',
          'terms' => $atts,
        ),
      ),
     );
     $loop = new WP_Query($args);
     if($loop->have_posts()) {
        while($loop->have_posts()) : $loop->the_post();
	?>
		<div class="av-columns-area faq-type">
			<div class="av-column-12 faq-item <?php echo esc_attr($idPost);?>">
				<div class="accordion accordion-default">
					<div class="accordion-title"><button type="button" class="accordion-button"><span><?php the_title(); ?></span> <i class="fa fa-plus"></i></button></div>
					<div class="accordion-content"><?php the_content(); ?></div>
				</div>
			</div>
		</div>
	<?php
        endwhile;
		return ob_get_clean();
     }else{
            echo  'Sorry, no posts were found';
          }	  
}
