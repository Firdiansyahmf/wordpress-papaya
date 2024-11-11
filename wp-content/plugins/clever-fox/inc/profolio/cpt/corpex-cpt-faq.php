<?php
// code for custom post type  FAQ
		function corpex_faq() {
	
			$faq_slug = get_theme_mod('faq_slug','faq'); 
			register_post_type( 'corpex_faq',
				array(
					'labels' => array(
						'name' => __('FAQ', 'clever-fox'),
						'singular_name' => __('FAQ', 'clever-fox'),
						'add_new' => __('Add New', 'clever-fox'),
						'add_new_item' => __('Add New FAQ','clever-fox'),
						'edit_item' => __('Edit FAQ','clever-fox'),
						'new_item' => __('New Facebook link ','clever-fox'),
						'all_items' => __('All FAQ','clever-fox'),
						'view_item' => __('View Link','clever-fox'),
						'search_items' => __('Search Links','clever-fox'),
						'not_found' =>  __('No Links found','clever-fox'),
						'not_found_in_trash' => __('No Links found in Trash','clever-fox'), 
						
					),
						'supports' => array('title','thumbnail','comments','editor'),
						'show_in_nav_menus' => false,
						'public' => true,
						'menu_position' => 20,
						'rewrite' => array('slug' => $faq_slug),
						'menu_icon' => 'dashicons-schedule',
					
				)
			);
		}
		add_action( 'init', 'corpex_faq' );


		// FAQ Meta Box

		function corpex_faq_init()
		{
							
			// add_meta_box('faq_all_meta', 'FAQ Description', 'corpex_meta_faq','corpex_faq', 'normal', 'high');
			
			// add_action('save_post','corpex_meta_faq_save');
		}


		add_action('admin_init','corpex_faq_init');		
						

						
		function corpex_meta_faq()
		{
			global $post;
			wp_nonce_field( 'corpex_meta_faq_nonce', 'corpex_meta_faq_nonce' );
			
		?>					
			
		<?php 	
		}


		function corpex_meta_faq_save($post_id) 
		{
		
		 // Check if nonce is set and valid
			if ( !isset($_POST['corpex_meta_faq_nonce']) || !wp_verify_nonce($_POST['corpex_meta_faq_nonce'], 'corpex_meta_faq_nonce') ) {
				return;
			}
			
			if(isset( $_POST['post_ID']))
			{ 	
				$post_ID = $_POST['post_ID'];				
				$post_type=get_post_type($post_ID);
				if($post_type=='corpex_faq')
				{	
					
				}
			}
		}
		
		// FAQ Category Texonomy
		
		function corpex_faq_taxonomy() {
		
		$texo_faq_slug = get_theme_mod('texo_faq_slug','faq_category'); 
		register_taxonomy('faq_categories', 'corpex_faq',
			array(
				'hierarchical' => true,
				'label' => 'FAQ Categories',
				'show_in_nav_menus' => true,
				'query_var' => true,
				'rewrite' => array('slug' => $texo_faq_slug )
			)
		);
	
	
		//Default category id		
		$defualt_tex_id = get_option('custom_texo_faq_id');
		//quick update category
		if (isset($_POST['action'])) {
        // Verify nonce
			if (!isset($_POST['corpex_taxonomy_nonce']) || !wp_verify_nonce($_POST['corpex_taxonomy_nonce'], 'corpex_taxonomy_nonce')) {
				return;
			}

			// Update or insert term based on action
			if ($_POST['action'] === 'update-tag' && isset($_POST['taxonomy']) && $_POST['taxonomy'] === 'faq_categories') {
				wp_update_term($_POST['tag_ID'], 'faq_categories', array(
					'name' => sanitize_text_field($_POST['name']),
					'slug' => sanitize_title($_POST['slug']),
					'description' => sanitize_text_field($_POST['description'])
				));
			} elseif ($_POST['action'] === 'add-tag' && empty($default_tex_id)) {
				$term = wp_insert_term('All', 'faq_categories', array(
					'description' => 'Default Category',
					'slug' => 'all' // Ensure lowercase slug
				));
				if (!is_wp_error($term)) {
					update_option('custom_texo_faq_id', $term['term_id']);
				}
			}
		}

		// Delete default category if requested
		if (isset($_POST['action']) && $_POST['action'] === 'delete-tag' && isset($_POST['tag_ID']) && $_POST['tag_ID'] == $default_tex_id) {
			delete_option('custom_texo_faq_id');
		}
	}
	add_action( 'init', 'corpex_faq_taxonomy' );


function corpex_faq_cpt_admin_columns( $columns ) {
	$columns = array(
		'cb' 			=> '<input type="checkbox" />',
		'title' 		=> __( 'Title','clever-fox' ),
		'shortcode' 	=> __( 'Shortcode','clever-fox' ),
		'date' 			=> __( 'Date','clever-fox' ),
	);
	return $columns;
}
add_filter( 'manage_edit-corpex_faq_columns', 'corpex_faq_cpt_admin_columns' ) ;

//Add content to colum
function corpex_faq_manage_points_pin_columns( $column, $post_id ) {
	global $post;
	$terms = get_the_terms( $post->ID, 'faq_categories' );
									
	if ( $terms && ! is_wp_error( $terms ) ) : 
		$links = array();

		foreach ( $terms as $term ) 
		{
			$links[] = $term->slug;
		}
		
		$tax = join( ',', $links );		
	else :	
		$tax = '';	
	endif;
	//echo $tax;
				
	switch( $column ) {
		case 'shortcode' :
			echo '[corpex_faq id="'.esc_html($post->ID).'"]';
			break;
		default :
			break;
	}
}
add_action( 'manage_corpex_faq_posts_custom_column', 'corpex_faq_manage_points_pin_columns', 10, 2 );

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    corpex_faq();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );