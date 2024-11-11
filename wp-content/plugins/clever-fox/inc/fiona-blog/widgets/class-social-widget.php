<?php
if ( ! class_exists( 'fiona_blog_social_icon_widget' ) ) :

	class fiona_blog_social_icon_widget extends WP_Widget{
			// Construct
			public function __construct() {
			
				parent::__construct(
					"Social_Widget", 
					"Fiona Social Widget",
					array("description" => __( 'Social Icon Widgets', 'clever-fox' ), ) 
				);	
				
				$this->defaults = array(
					'title' => __( 'Social Icon', 'fiona_blog_social_icon_widget' ),				
					'social' => array()
				);
			
			add_action( 'wp esc_html_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'admin esc_html_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
			}
			function enqueue_scripts() {
				
				wp_enqueue_style( 'clever-fox' );
			}
			function enqueue_admin_scripts() {
				
			}

			
	// Widget Form Section  
	function form( $instance ) {
		 
		$instance = wp_parse_args( (array) $instance, $this->defaults );
		$instance['social_style'] = isset($instance['social_style']) ? $instance['social_style'] : '';
		//$social_links = $this->get_social();
		$social_links = get_social();
	?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php  esc_html_e( 'Title', 'clever-fox' ); ?>:</label>
				<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" type="text" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" class="widefat" />
			</p>
			<ul class="mks_social_container mks-social-sortable">
			  <?php foreach ( $instance['social'] as $link ) : ?>
				  <li>
					<?php $this->draw_social( $this, $social_links, $link ); ?>
				  </li>
				<?php endforeach; ?>
			</ul>
			<p>
				<a href="#" class="mks_add_social button"><?php  esc_html_e( 'Add Icon', 'clever-fox' ); ?></a>
			</p>

		  <div class="mks_social_clone" style="display:none">
				<?php $this->draw_social( $this, $social_links ); ?>
		  </div>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'social_style' )); ?>"><?php  esc_html_e('Select Style Style','clever-fox'); ?></label> 
			<select class="widefat" id="<?php echo esc_attr($this->get_field_id( 'social_style' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'social_style' )); ?>">
				<option value>--<?php echo esc_html__('Select','clever-fox'); ?>--</option>
				<?php
					$social_style = $instance['social_style'];
					$users =array("style1","style3","style4");
					foreach ($users as $user) { 
						$option = '<option value="' . $user . '" ';
						$option .= ( $user == $social_style  ) ? 'selected="selected"' : '';
						$option .= '>';
						$option .= $user;
						$option .= '</option>';
						echo esc_html($option);
					}
				?>	
			</select>
			<br/>
		</p>
			
	<?php
		}

		function draw_social( $widget, $social_links, $selected = array( 'icon' => '', 'url' => '' ) ) { ?>

					<label class="mks-sw-icon"><?php  esc_html_e( 'Icon', 'clever-fox' ); ?> :</label>
					<select type="text" class="iconPicker" name="<?php echo esc_attr($widget->get_field_name( 'social_icon' )); ?>[]" value="<?php echo esc_attr($selected['icon']); ?>" style="font-family: 'FontAwesome', Arial; width: 82%">
						<?php foreach ( $social_links as $key => $link ) : ?>
							<option value="<?php echo esc_attr($key); ?>" <?php selected( $key, $selected['icon'] ); ?>><?php echo esc_html($link); ?></option>
						<?php endforeach; ?>
					</select>
					</br>
					<label class="mks-sw-icon"><?php  esc_html_e( 'Url', 'meks-smart-social-widget' ); ?> :</label>
					<input type="text" name="<?php echo esc_attr($widget->get_field_name( 'social_url' )); ?>[]" value="<?php echo esc_attr($selected['url']); ?>" placeholder="Example.com" style="width: 82%">


					<span class="mks-remove-social dashicons dashicons-no-alt"></span>

		<?php }
		
		// Upadte data
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['title'] = wp_strip_all_tags( $new_instance['title'] );	
			$instance['social'] = array();
			if ( !empty( $new_instance['social_icon'] ) ) {
				$protocols = wp_allowed_protocols();
				$protocols[] = 'skype'; 
				for ( $i=0; $i < ( count( $new_instance['social_icon'] ) - 1 ); $i++ ) {
					$temp = array( 'icon' => $new_instance['social_icon'][$i], 'url' => esc_url( $new_instance['social_url'][$i], $protocols ) );
					$instance['social'][] = $temp;
				}
			}
			$instance['social_style'] 	= ( ! empty( $new_instance['social_style'] ) ) ? $new_instance['social_style'] : '';
			return $instance;
		}
		
		// Front page data
		function widget( $args, $instance ) {

			extract( $args );

			$instance = wp_parse_args( (array) $instance, $this->defaults );
			
			$title 			= apply_filters( 'widget_title', $instance['title'] );
			$social_style 	= isset($instance['social_style']) ? $instance['social_style'] : null;
			
			$escaped_before_widget = htmlspecialchars($args['before_widget']);
			echo esc_html($escaped_before_widget);

			if ( !empty( $title ) ) {
				echo esc_html($before_title) . esc_html($title) . esc_html($after_title);
			}
	?>
			
			
			<ul class="<?php echo esc_attr($social_style)?>">
			  <?php foreach ( $instance['social'] as $item ) : ?>
					<li><a href="<?php echo esc_url($item['url']); ?>" class="socicon-<?php echo esc_attr( $item['icon'] ); ?>">
					<i class="fa <?php echo esc_attr($item['icon']); ?>"></i>
					
					<?php 
					$result = substr($item['icon'], 3, 15);
					$result = str_replace("-"," ",$result);
					if($social_style =='style3'){ ?>
					
							<div class="socialText">
								<span>Follow Us</span>
							</div>
							
					<?php }elseif($social_style =='style4'){ ?>
					
						<div class="socialText">
							<h6><?php echo esc_html(ucwords($result)); ?></h6>
						</div>
							
					<?php }else{ ?>
					
						<svg class="round-svg-circle"><circle cx="50%" cy="50%" r="49%"></circle><circle cx="50%" cy="50%" r="49%"></circle></svg>
						
					<?php } ?>
				</a></li>
				<?php endforeach; ?>
			</ul>
			


			<?php
			$escaped_after_widget = htmlspecialchars($args['after_widget']);			
			echo esc_html($escaped_after_widget);
		}
		
		
		
		// Define social icon List
		protected function get_social_title( $social_name ) {
			$items = $this->get_social();
			return $items[$social_name];
		}
	}
endif;
?>