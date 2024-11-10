<?php  
	$client_title			= get_theme_mod('client_title',__('Sponsor','clever-fox'));
	$client_description	= get_theme_mod('client_description',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam saepe eveniet, cumque tempore veritatis!','clever-fox'));
	$client_contents		= get_theme_mod('client_contents',giant_get_client_default());
?>
	<!-- sponsors -->
<section class="sponsor-section pb-0">
    <div class="container">
		<?php if(!empty($client_title)  || !empty($client_description)): ?>
			<div class="section-title col-lg-6 mx-auto">
				<?php if(!empty($client_title)): ?>
				<h2 class="maintitle">
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);" class="desg1"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
						
							<span><?php echo wp_kses_post($client_title); ?></span>
						
						<svg xmlns="http://www.w3.org/2000/svg" width="54" height="27" viewBox="0 0 54 27" style="fill: var(--primary-color);"><path id="Rectangle_2_copy_3" data-name="Rectangle 2 copy 3" class="cls-1" d="M1156 147h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1156 147Zm7 0h5a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-5a2 2 0 0 1-2-2v-1A2 2 0 0 1 1163 147Zm3 13h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1A2 2 0 0 1 1166 160Zm7 0h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1A2 2 0 0 1 1173 160Zm-11.5 11a1.5 1.5 0 1 1-1.5 1.5A1.5 1.5 0 0 1 1161.5 171Zm4 0h3a1.5 1.5 0 0 1 0 3h-3A1.5 1.5 0 0 1 1165.5 171Zm7 0h7a1.5 1.5 0 0 1 0 3h-7A1.5 1.5 0 0 1 1172.5 171Zm16.5-11h17a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-17a2 2 0 0 1-2-2v-1A2 2 0 0 1 1189 160Z" transform="translate(-1154 -147)"/></svg>
					</h2>
					
				<?php endif; ?>
				
				<?php if(!empty($client_description)): ?>
					<p>
						<?php if($client_description): esc_html(printf(/* translators: %s: client_description */__( '%s','clever-fox' ),$client_description)); endif; ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
		<div class="row">				
	
			<?php
				if ( ! empty( $client_contents ) ) {
				$client_contents = json_decode( $client_contents );
			
				foreach ( $client_contents as $client_item ) {
					$link = ! empty( $client_item->link ) ? apply_filters( 'giant_pro_translate_single_string', $client_item->link, 'Client section' ) : '';
					$image = ! empty( $client_item->image_url ) ? apply_filters( 'giant_pro_translate_single_string', $client_item->image_url, 'Client section' ) : '';
					
				if(!empty($image) || !empty($link)):
			?>
				<div class="col-lg-3 col-6">
					<div class="sponsor">
						 <div class="sponsor-image">
							<a href="<?php echo esc_url($link); ?>">
								<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr__('Clients Image','clever-fox'); ?>">
							</a>
						</div>
					</div>
				</div>
				
			<?php endif; } } ?>
		</div>
    </div>
</section>
<!-- sponsors end -->