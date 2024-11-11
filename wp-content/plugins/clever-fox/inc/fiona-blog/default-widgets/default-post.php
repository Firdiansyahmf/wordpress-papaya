<?php
$MediaId = get_option('fiona_blog_media_id');
$title = __('Spending a day in Paris, The best place to go','clever-fox');
$content=__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever.','clever-fox');
$title2 = __('A New Age For Trade & Supply Chain Finance','clever-fox');
$title3 = __('Ranking for keywords around the products','clever-fox');

$postData = array(
				array(
					'post_title' => $title,
					'post_status' => 'publish',
					'post_content' => '<p>'.$content.'</p>',
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array(),
					'tax_input'    => array(
						'post_tag' => array('Tech','News')
					),
				),
				array(
					'post_title' => $title2,
					'post_status' => 'publish',
					'post_content' => '<p>'.$content.'</p>',
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array(),
					'tax_input'    => array(
						'post_tag' => array('Trending', 'Latest')
					),
				),
				array(
					'post_title' => $title3,
					'post_status' => 'publish',
					'post_content' => '<p>'.$content.'</p>',
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array(),
					'tax_input'    => array(
						'post_tag' => array('News','Trending')
					),
				),
			);

kses_remove_filters();
//foreach ( $MediaId as $media) :
foreach ( $postData as $i => $postData1) : 
	$id = wp_insert_post($postData1);
	set_post_thumbnail( $id, $MediaId[$i + 1] );
endforeach;
//endforeach;
kses_init_filters();