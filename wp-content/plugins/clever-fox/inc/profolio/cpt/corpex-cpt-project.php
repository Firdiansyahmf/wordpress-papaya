<?php
// code for custom post type  Project
		function corpex_project() {
	
			$project_slug = get_theme_mod('project_slug','project'); 
			register_post_type( 'corpex_project',
				array(
					'labels' => array(
						'name' => __('Project', 'clever-fox'),
						'singular_name' => __('Project', 'clever-fox'),
						'add_new' => __('Add New', 'clever-fox'),
						'add_new_item' => __('Add New Project','clever-fox'),
						'edit_item' => __('Edit Project','clever-fox'),
						'new_item' => __('New Facebook link ','clever-fox'),
						'all_items' => __('All Project','clever-fox'),
						'view_item' => __('View Link','clever-fox'),
						'search_items' => __('Search Links','clever-fox'),
						'not_found' =>  __('No Links found','clever-fox'),
						'not_found_in_trash' => __('No Links found in Trash','clever-fox'), 						
					),
						'supports' => array('title','excerpt','thumbnail','comments'),
						'show_in_nav_menus' => false,
						'public' => true,
						'menu_position' => 20,
						'rewrite' => array('slug' => $project_slug),
						'menu_icon' => 'dashicons-schedule',
					
				)
			);
		}
		add_action( 'init', 'corpex_project' );


		// Project Meta Box

		function corpex_project_init()
		{
							
			add_meta_box('project_all_meta', 'Project Description', 'corpex_meta_project','corpex_project', 'normal', 'high');
			
			add_action('save_post','corpex_meta_project_save');
		}


		add_action('admin_init','corpex_project_init');		
						

						
		function corpex_meta_project()
		{
			global $post;
			
			$project_button_link 			= sanitize_text_field( get_post_meta( get_the_ID(),'project_button_link', true ));
			$project_button_link_target 	= sanitize_text_field( get_post_meta( get_the_ID(),'project_button_link_target', true ));
		?>	
			
			<h3><i><?php esc_html_e('Project Single View Detail','clever-fox'); ?></i></h3>

			
			<div class="inside">	
				<p><label><?php esc_html_e('Project URL','clever-fox');?></label></p>
				<p><input style="width:100%; height:40px; padding: 10px;"  name="project_button_link" placeholder="<?php esc_attr_e('Project URL','clever-fox');?>" type="text" value="<?php if (!empty($project_button_link)) echo esc_attr($project_button_link);?>">&nbsp;</input></p>
				<p> <input name="project_button_link_target" type="checkbox" <?php if(!empty($project_button_link_target)) echo "checked"; ?> > </input>
				<label><?php esc_html_e('Open link in a new tab','clever-fox'); ?> </label> </p>
			</div>				
			
		<?php 	
		}


		function corpex_meta_project_save($post_id) 
		{
			// Verify nonce
			if (!isset($_POST['corpex_meta_project_nonce']) || !wp_verify_nonce($_POST['corpex_meta_project_nonce'], 'corpex_meta_project_nonce')) {
				return;
			}
			
			if(isset( $_POST['post_ID']))
			{ 	
				$post_ID = $_POST['post_ID'];				
				$post_type=get_post_type($post_ID);
				if($post_type=='corpex_project')
				{	
					update_post_meta($post_ID, 'project_button_link', sanitize_text_field($_POST['project_button_link']));
					update_post_meta($post_ID, 'project_button_link_target', sanitize_text_field($_POST['project_button_link_target']));
				}
			}
		}
		
		// Project Category Texonomy
		
		function corpex_project_taxonomy() {
		
		$texo_project_slug = get_theme_mod('texo_project_slug','project_category'); 
		register_taxonomy('project_categories', 'corpex_project',
			array(
				'hierarchical' => true,
				'label' => 'Project Categories',
				'show_in_nav_menus' => true,
				'query_var' => true,
				'rewrite' => array('slug' => $texo_project_slug )
			)
		);
	
	
		//Default category id		
		$defualt_tex_id = get_option('custom_texo_project_id');
		//quick update category
		if (isset($_POST['action'])) {
        // Verify nonce
			if (!isset($_POST['corpex_taxonomy_nonce']) || !wp_verify_nonce($_POST['corpex_taxonomy_nonce'], 'corpex_taxonomy_nonce')) {
				return;
			}

			// Update or insert term based on action
			if ($_POST['action'] === 'update-tag' && isset($_POST['taxonomy']) && $_POST['taxonomy'] === 'project_categories') {
				wp_update_term($_POST['tag_ID'], 'project_categories', array(
					'name' => sanitize_text_field($_POST['name']),
					'slug' => sanitize_title($_POST['slug']),
					'description' => sanitize_text_field($_POST['description'])
				));
			} elseif ($_POST['action'] === 'add-tag' && empty($default_tex_id)) {
				$term = wp_insert_term('All', 'project_categories', array(
					'description' => 'Default Category',
					'slug' => 'all' // Ensure lowercase slug
				));
				if (!is_wp_error($term)) {
					update_option('custom_texo_project_id', $term['term_id']);
				}
			}
		}

		// Delete default category if requested
		if (isset($_POST['action']) && $_POST['action'] === 'delete-tag' && isset($_POST['tag_ID']) && $_POST['tag_ID'] == $default_tex_id) {
			delete_option('custom_texo_project_id');
		}
	}
	add_action( 'init', 'corpex_project_taxonomy' );
?>