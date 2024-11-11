<?php
// code for custom post type  Pricing
		function corpex_pricing() {
	
			$corpex_pricing_slug = get_theme_mod('pricing_slug','pricing'); 
			register_post_type( 'corpex_pricing',
				array(
				'labels' => array(
						'name' => __('Pricing', 'clever-fox'),
						'singular_name' => __('Pricing', 'clever-fox'),
						'add_new' => __('Add New', 'clever-fox'),
						'add_new_item' => __('Add New Price Table','clever-fox'),
						'edit_item' => __('Add New Pricing','clever-fox'),
						'new_item' => __('New link ','clever-fox'),
						'all_items' => __('All Pricing','clever-fox'),
						'view_item' => __('View Link','clever-fox'),
						'search_items' => __('Search Links','clever-fox'),
						'not_found' =>  __('No Links found','clever-fox'),
						'not_found_in_trash' => __('No Links found in Trash','clever-fox'), 
						
					),
						'supports' => array('title','thumbnail','comments','editor'),
						'show_in_nav_menus' => false,
						'public' => true,
						'menu_position' => 20,
						'rewrite' => array('slug' => $corpex_pricing_slug),
						'menu_icon' => 'dashicons-list-view',
					
				)
			);
		}
		add_action( 'init', 'corpex_pricing' );


		// Portfolio Meta Box

		function corpex_pricing_init()
		{
							
			add_meta_box('pricing_all_meta', 'Price Table', 'corpex_meta_pricing','corpex_pricing', 'normal', 'high');
			
			add_action('save_post','pricing_meta_save');
			
		}


		add_action('admin_init','corpex_pricing_init');		
						

						
		function corpex_meta_pricing()
		{
			global $post;
			wp_nonce_field('pricing_meta_nonce', 'pricing_meta_nonce');
			
			$plans_currency 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_currency', true ));
			$plans_price 			= sanitize_text_field( get_post_meta( get_the_ID(),'plans_price', true ));
			$price_content 			=   get_post_meta($post->ID, 'price_content', true);
			$plans_button_label 	= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_label', true ));
			$price_recomended 		= sanitize_text_field( get_post_meta( get_the_ID(),'price_recomended', true ));
			$plans_button_link 		= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_link', true ));
			$plans_button_link_target 	= sanitize_text_field( get_post_meta( get_the_ID(),'plans_button_link_target', true ));
		?>	
			
			<div class="inside">
				
				<p><label><?php esc_html_e('Plans Currency','clever-fox');?></label></p>
				<p><input style="width:40%; height:40px; padding: 10px;" name="plans_currency" placeholder="<?php esc_attr_e('Plans Currency','clever-fox');?>" type="text" value="<?php if (!empty($plans_currency)) echo esc_attr($plans_currency);?>"> </input></p>

				<p><label><?php esc_html_e('Plans Price','clever-fox');?></label></p>
				<p><input style="width:40%; height:40px; padding: 10px;" name="plans_price" placeholder="<?php esc_attr_e('Plans Price','clever-fox');?>" type="text" value="<?php if (!empty($plans_price)) echo esc_attr($plans_price);?>"> </input></p>
				
			</div>
			
			<div class="inside">	
				<div class="input_fields_wrap">
				<p><label><?php esc_html_e('Pricing Content','clever-fox');?></label></p>
					<?php
					if(isset($price_content) && is_array($price_content)) {
						$i = 1;
						$output = '';
						
						foreach($price_content as $text){
							$output = '<div><input style="width:40%; height:40px; padding: 10px;margin-bottom:20px;" type="text" name="price_content[]" value="' . $text . '">';
							if( $i !== 1 && $i > 1 ) $output .= '<a href="#" class="remove_field">✘</a></div>';
							else $output .= '</div>';
							
							echo esc_html($output);
							$i++;
						}
					} else {
						echo '<div><input style="width:40%; height:40px; padding: 10px;margin-bottom:20px;" type="text" name="price_content[]"></div>';
					}
					?>
					<div style="margin: 20px 0;"><a class="add_field_button button button-primary"><?php esc_html_e('Add Field','clever-fox');?></a></div>
			</div>
			
			<div class="inside">
				
				<p><label><?php esc_html_e('Plans Button Label','clever-fox');?></label></p>
				<p><input style="width:100%; height:40px; padding: 10px;" name="plans_button_label" placeholder="<?php esc_attr_e('Plans Button Label','clever-fox');?>" type="text" value="<?php if (!empty($plans_button_label)) echo esc_attr($plans_button_label);?>"> </input></p>
				
				<p><label><?php esc_html_e('recommend','clever-fox');?></label></p>
				<p><input style="width:40%; height:40px; padding: 10px;" name="price_recomended" placeholder="<?php esc_attr_e('recommend','clever-fox');?>" type="text" value="<?php if (!empty($price_recomended)) echo esc_attr($price_recomended);?>"> </input></p>
			
				<p><label><?php esc_html_e('Plans Custom URL','clever-fox');?></label></p>
				<p><input style="width:100%; height:40px; padding: 10px;"  name="plans_button_link" placeholder="<?php esc_attr_e('Plans Custom URL','clever-fox');?>" type="text" value="<?php if (!empty($plans_button_link)) echo esc_attr($plans_button_link);?>">&nbsp;</input></p>
				<p> <input name="plans_button_link_target" type="checkbox" <?php if(!empty($plans_button_link_target)) echo "checked"; ?> > </input>
				<label><?php esc_html_e(' Open link in a new tab','clever-fox'); ?> </label> </p>
				
				
				
			</div>
			
							
			
		<?php 	
		}


		function pricing_meta_save($post_id) 
		{
			// Verify nonce
			if (!isset($_POST['pricing_meta_nonce']) || !wp_verify_nonce($_POST['pricing_meta_nonce'], 'pricing_meta_nonce')) {
				return;
			}
			
			if((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
				return;
			
			if ( ! current_user_can( 'edit_page', $post_id ) )
			{     return ;	} 

			if(isset( $_POST['post_ID']))
			{ 	
				$post_ID = $_POST['post_ID'];				
				$post_type=get_post_type($post_ID);
				if($post_type=='corpex_pricing')
				{	
					update_post_meta($post_ID, 'plans_currency', sanitize_text_field($_POST['plans_currency']));
					update_post_meta($post_ID, 'plans_price', sanitize_text_field($_POST['plans_price']));
					update_post_meta( $post_id, 'price_content', $_POST['price_content'] );
					update_post_meta($post_ID, 'plans_button_label', sanitize_text_field($_POST['plans_button_label']));
					update_post_meta($post_ID, 'plans_button_link', sanitize_text_field($_POST['plans_button_link']));
					update_post_meta($post_ID, 'price_recomended', sanitize_text_field($_POST['price_recomended']));
					update_post_meta($post_ID, 'plans_button_link_target', sanitize_text_field($_POST['plans_button_link_target']));					
				}
			}
		}

add_action('admin_footer', 'corpex_pricing_script');
 
function corpex_pricing_script() {
    global $post;
	
    $price_content			  =   get_post_meta(get_the_ID(), 'price_content', true);   
    
    $x = 1;
    if(is_array($price_content)) {
        $x = 0;
        foreach($price_content as $text){
            $x++;
        }
    }
    
	if(  'corpex_pricing' == get_post_type() ) {	
        echo '<script type="text/javascript">
				jQuery(document).ready(function($) {
					// Dynamic input fields ( Add / Remove input fields )
					var max_fields      = 10; //maximum input boxes allowed
					var wrapper         = $(".input_fields_wrap"); //Fields wrapper
					var add_button      = $(".add_field_button"); //Add button ID
					
					var x = '.esc_html($x).'; //initlal text box count
					$(add_button).click(function(e){ //on add input button click
						e.preventDefault();
						if(x < max_fields){ //max input box allowed
							x++; //text box increment
							$(wrapper).append(\'<div><input style="width:40%; height:40px; padding: 10px;margin-bottom:20px;" type="text" name="price_content[]"/><a href="#" class="remove_field">Remove</a></div>\');
						}
					});
					
					$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
						e.preventDefault(); $(this).parent(\'div\').remove(); x--;
					})
				});
				</script>';
		}
	}
	

	// Pricing Category Texonomy

		function corpex_pricing_taxonomy() 
		{	
			$corpex_pricing_category_slug = get_theme_mod('texo_pricing_slug','pricing_category'); 
			register_taxonomy(
				'pricing_categories',
				'corpex_pricing',
				array(
					'hierarchical' => true,
					'label' => 'Pricing Categories',
					'show_in_nav_menus' => true,
					'query_var' => true,
					'rewrite' => array('slug' => $corpex_pricing_category_slug )
					)
			);
			
		}
		add_action( 'init', 'corpex_pricing_taxonomy' );
		

?>