<?php

if ( ! function_exists( 'orbital_render_block_core_latest_posts' ) ) :

	function orbital_render_block_core_latest_posts( $attributes ) {

		$output = '';
		$settings = json_decode($attributes['settings'], true);


		// Start Output

		$output .= '<div class="post-list">';

		if($attributes['display'] == 'custom-links'){

			for ($entry=1; $entry <= $attributes['rows'] ; $entry++) {

				if(isset($settings[$entry])) {
					$linkUrl = isset($settings[$entry]['link']) ? $settings[$entry]['link'] : '#';
					$heading = isset($settings[$entry]['heading']) ? $settings[$entry]['heading'] : '';
					$textButton =  '';

					if(empty($settings[$entry]['button']) && isset($attributes['button'])) {
						$textButton = $attributes['button'];
					}elseif(!empty  ($settings[$entry]['button'])){
						$textButton = $settings[$entry]['button'];
					}

					$enableButton = isset($settings[$entry]['enableButton']) ? $settings[$entry]['enableButton'] : true;
					$image = '';
					$nofollow = '';
					$openlink = '';

					if($attributes['links'] == 'nofollow') $nofollow = 'rel="nofollow"';
					if($attributes['target'] == '_blank') $openlink = 'target="_blank"';

					if(isset($settings[$entry]['nofollow'])) {
						$nofollow = $settings[$entry]['nofollow'] ? 'rel="nofollow"':'';
					}

					if(isset($settings[$entry]['target'])) {
						$openlink = $settings[$entry]['target'] ? 'target="_blank"':'';
					}


					if(isset($settings[$entry]['idThumbnail'])) {
						$image =  wp_get_attachment_image(
							$settings[$entry]['idThumbnail'],
							$attributes['thumbnailSize'],
							false,
							['class' => 'lazy wp-post-image']);
					}

					if($attributes['featured'] >= $entry) {
						$output .= '<article class="featured-item custom-link">';
						$output .= '<div class="featured-wrapper">';
						$output .= '<a href="'. $linkUrl  .'" ' . $nofollow . '" '. $openlink .'>';
						$output .= $image;
						$output .= '<h3 class="entry-title">'.$heading.'</h3>';
						$output .= '</a>';
						$output .= '</div>';
						$output .= '</article>';
					}else{
						$output .= '<article class="entry-item custom-link">';
						$output .= '<div class="entry-wrapper">';
						$output .= '<header class="entry-header">';
						$output .= '<a href="'. $linkUrl .'" ' . $nofollow . '" '. $openlink .'>';
						$output .= $image;
						$output .= '<h3 class="entry-title">'.$heading.'</h3>';
						$output .= '</a>';
						$output .= '</header>';
						if($enableButton) {
							$output .= '<a href="'. $linkUrl .'" class="btn btn-block" ' . $nofollow . '" '. $openlink .'>'. $textButton . '</a>';
						}
						$output .= '</div>';
						$output .= '</article>';
					}

				}

			}

		}else {

			// Cook Args
			$args = array(
				'post_type'		=> array( 'page', 'post' ), 		// Only Pages and Posts
				'post__not_in'  => array(get_the_ID()),				// Exclude actual Post
				'posts_per_page'       	=> -1, 						// By Default Illimited
			);

			// Define Orderby
			$args['orderby'] = str_replace(array('_asc', '_desc'), '', $attributes['orderby']);

			// Define Order
			if (strpos($attributes['orderby'], 'desc')) {
				$args['order'] = 'DESC';
			}elseif(strpos($attributes['orderby'], 'asc')){
				$args['order'] = 'ASC';
			}



			// Define  Display Settings
			if($attributes['display'] == 'tag') {
				$args['post_type'] = array( 'post' );
				$args['tag__in'] = $attributes['display_setting'];
				$args['posts_per_page'] = $attributes['rows'];
			}elseif($attributes['display'] == 'category'){
				$args['cat'] = $attributes['display_setting'];
				$args['post_type'] = array( 'post' );
				$args['posts_per_page'] = $attributes['rows'];
			}elseif($attributes['display'] !== 'pilar'){
				$args['post__in'] = $attributes['display_setting'];
			}



			//Pilar Options
			if($attributes['display'] === 'pilar'){
				$args['post_type'] = array( 'post', 'page' );
				$args['ignore_sticky_posts'] = 1;
				$args['meta_key'] = 'option_page_pilar';
				$args['meta_value'] = '1';
			}






			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {

				$featured = 0;

				while ( $query->have_posts() ) :

					$query->the_post();

					$setting = array();

					if( array_key_exists(get_the_ID(), $settings )){
						$setting = $settings[ get_the_ID() ];
					}

					$nofollow = '';
					$openlink = '';


					// Set links options
					if($attributes['links'] == 'nofollow') $nofollow = $attributes['links'];
					if($attributes['target'] == '_blank') $openlink = 'target="_blank"';


					if(isset($setting['nofollow'])) {
						$nofollow = $setting['nofollow'] ? 'nofollow':'';
					}

					if(isset($setting['target'])) {
						$openlink = $setting['target'] ? 'target="_blank"':'';
					}

					if( empty($setting['heading']) ) {
						$setting['heading'] = get_the_title();
					}

					if( empty($setting['link'])  ) {
						$setting['link'] = get_the_permalink();
					}

					if( ! isset($setting['idThumbnail']) && has_post_thumbnail()) {
						$image =  get_the_post_thumbnail(get_the_ID(), $attributes['thumbnailSize'], ['class' => 'lazy']);
					}elseif(isset($setting['idThumbnail'])) {
						$image =  wp_get_attachment_image($setting['idThumbnail'], $attributes['thumbnailSize'], false, ['class' => 'lazy wp-post-image']);
					}else {
						$image = '';
					}

					if($featured < $attributes['featured']) {
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						$output .= '
						<article class="post-card ">
						<a href="'. $setting["link"] . '" class="post-card-link" tabindex="-1" rel="bookmark ' . $nofollow . '" '. $openlink .'>'.$setting['heading'].'</a>
						<div class="post-card-body">
						<h2 class="post-card-title"><a href="'. $setting['link'] . '">'.$setting['heading'].'</a></h2>
						<div class="post-card-category">'. orbital_the_category_link(). '</div>
						<div class="post-card-date"><!-- Tiene flex -->
						<time>' . get_the_date(). '</time>
						</div>
						</div>
						<div class="post-card-background" style="z-index:-1; background-image:url(\''.$feat_image.'\');"></div>
						</article>
						';
							

					} else {
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						$output .= '
						<article class="post-card ">
						<a href="'. $setting["link"] . '" class="post-card-link" tabindex="-1" rel="bookmark ' . $nofollow . '" '. $openlink .'>'.$setting['heading'].'</a>
						<div class="post-card-body">
						<h2 class="post-card-title"><a href="'. $setting['link'] . '">'.$setting['heading'].'</a></h2>
						<div class="post-card-category">'. orbital_the_category_link(). '</div>
						<div class="post-card-date"><!-- Tiene flex -->
						<time>' . get_the_date(). '</time>
						</div>
						</div>
						<div class="post-card-background" style=" background-image:url(\''.$feat_image.'\');"></div>
						</article>
						';
												

					}

					$featured++;
				endwhile;

			}
			wp_reset_postdata();
		}

		// End Output
		$output .= '</div>';
		return $output;
	}

endif;


if ( ! function_exists( 'orbital_register_block_core_latest_posts' ) ) :

	function orbital_register_block_core_latest_posts() {
		register_block_type(
			'orbital/cluster',
			array(
				'attributes' => array(
					'columns' => array(
						'type' => 'number',
						'default' => 3,
					),
					'rows' => array(
						'type' => 'number',
						'default' => 9,
					),
					'display' => array(
						'type' => 'string',
						'default' => '',
					),
					'display_setting' => array(
						'type' => null,
						'default' => '',
					),
					'orderby' => array(
						'type' => 'string',
						'default' => 'date',
					),
					'excerpt' => array(
						'type' => 'string',
						'default' => 'default',
					),
					'links' => array(
						'type' => 'string',
						'default' => 'follow',
					),
					'target' => array(
						'type' => 'string',
						'default' => '_self',
					),
					'thumbnailSize' => array(
						'type' => 'string',
						'default' => 'thumbnail-center',
					),
					'featured' => array(
						'type' => 'number',
						'default' => 0,
					),
					'settings' => array(
						'type' => 'string',
						'default' => '{}',
					),
					'edit_mode' => array(
						'type' => 'boolean',
						'default' => true,
					),
				),

				'render_callback' => 'orbital_render_block_core_latest_posts',
			)
		);
	}
	add_action( 'init', 'orbital_register_block_core_latest_posts' );

endif;