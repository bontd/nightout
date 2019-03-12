<?php 
/*
  Template Name: Custom search
*/
get_header(); 
?>
<div class="banner">
	<?php
		global $tp_options;
    ?>
    <img src="<?php echo $tp_options['banner-image-detail']['url']; ?>" class="img-pc" alt="banner">
    <img src="<?php echo $tp_options['banner-image-detail-sp']['url']; ?>" class="img-sp" alt="banner">
    <div class="title-page">
    	<h2><?php echo __('SEARCH','wp') ?></h2>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<div class="row post-list">
				<?php
					$cate = $_GET['cate'];
					$areas = $_GET['area'];
					$prices = $_GET['price'];
					$details = $_GET['detail'];
					if($cate && $areas && $prices && $details){

						$meta_query = array('relation' => 'OR');
						foreach( $details as $item ){
							$meta_query[] = array(
								'key'     => 'detail',
								'value'   => $item,
								'compare' => 'LIKE',
							);
						}

						$get_post = new WP_Query(array(
							'post_type'			=> 'post',
							'cat'				=> $cate,
							'meta_query'		=> array(
								'relation'		=> 'AND',
								array(
									'key'		=> 'location',
									'value'		=>  $areas,
									'compare'	=> 'IN'
								),
								array(
									'key'		=> 'price',
									'value'		=>  $prices,
									'compare'	=> 'IN'
								),
								$meta_query
							),
						    'posts_per_page'	=> 12,
						    'meta_key'		=> 'number',
							'orderby'		=> 'meta_value_num',
							'order' 		=> 'ASC',
						    'paged' 		=> stheme_get_paged()
						));
					}else if($cate){
						$get_post = new WP_Query(array(
							'post_type'			=> 'post',
							'cat'				=> $cate,
						    'posts_per_page'	=> 12,
						    'meta_key'		=> 'number',
							'orderby'		=> 'meta_value_num',
							'order' 		=> 'ASC',
						    'paged' 		=> stheme_get_paged()
						));
					}else if($areas){
						$get_post = new WP_Query(array(
							'post_type'			=> 'post',
							'meta_query'		=> array(
								'relation'		=> 'OR',
								array(
									'key'		=> 'location',
									'value'		=>  $areas,
									'compare'	=> 'IN'
								)
							),
						    'posts_per_page'	=> 12,
						    'meta_key'		=> 'number',
							'orderby'		=> 'meta_value_num',
							'order' 		=> 'ASC',
						    'paged' 		=> stheme_get_paged()
						));
					}else if($prices){
						$get_post = new WP_Query(array(
							'post_type'			=> 'post',
							'meta_query'		=> array(
								'relation'		=> 'AND',
								array(
									'key'		=> 'price',
									'value'		=>  $prices,
									'compare'	=> 'IN'
								)
							),
						    'posts_per_page'	=> 12,
						    'meta_key'		=> 'number',
							'orderby'		=> 'meta_value_num',
							'order' 		=> 'ASC',
						    'paged' 		=> stheme_get_paged()
						));
					}else if($details){
						$meta_query = array('relation' => 'OR');
						foreach( $details as $item ){
							$meta_query[] = array(
								'key'     => 'detail',
								'value'   => $item,
								'compare' => 'LIKE',
							);
						}
						$args = array(
							'numberposts'	=> -1,
							'post_type'		=> 'post',
							'meta_query' => $meta_query,
							'meta_key'		=> 'number',
							'orderby'		=> 'meta_value_num',
							'order' 		=> 'ASC',
						    'paged' 		=> stheme_get_paged()
						);

						$get_post = new WP_Query( $args );
					}else {
						$get_post = new WP_Query(array(
							'post_type'			=> 'post',
						    'posts_per_page'	=> 12,
						    'meta_key'		=> 'number',
							'orderby'		=> 'meta_value_num',
							'order' 		=> 'ASC',
						    'paged' 		=> stheme_get_paged()
						));
					}
					// echo '<pre>';
					// echo print_r($query);die;
				?>
				<?php if ( $get_post->have_posts() ) : while( $get_post->have_posts() ) : $get_post->the_post(); ?>
					<div class="col-lg-4 col-md-6 order-<?php echo get_field('number'); ?>">
						<div class="item-list">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="top-item-list">
									<i class="fa fa-map-marker color-red"></i>
									<?php echo __(get_field('location'),'wp'); ?>
									<i class="fa fa-home color-yellow"></i>
									<?php
										$category_detail=get_the_category(get_the_ID());
										foreach($category_detail as $cd){
											echo $cd->cat_name;
										}
									?>
								</div>
								<div class="i-thumbnail"><?php echo the_post_thumbnail();?></div>
								<div class="title-post">
									<span class="number-view"><?php echo get_field('number'); ?>.</span>
									<h5><?php the_title();?></h5>
								</div>
							</a>
			        	</div>
					</div>
				<?php endwhile ?>
				<?php else: ?>
					<?php echo __("We’re sorry. We cannot find any matches for your search terms.",'wp'); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-12">
				<?php stheme_paginate(array('query' => $get_post)); ?>
			</div>
		</div>
		<div class="col-lg-3 siderbar-pc">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>