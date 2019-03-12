<?php get_header(); ?>
<div class="banner">
	<?php
		global $tp_options;
    ?>
    <img src="<?php echo $tp_options['banner-image-detail']['url']; ?>" class="img-pc" alt="banner">
    <img src="<?php echo $tp_options['banner-image-detail-sp']['url']; ?>" class="img-sp" alt="banner">
    <div class="title-page">
    	<h2>SEARCH</h2>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<div class="row post-list">
				<?php
					$search_query = new WP_Query('s='.$s.'&showpost=-1');
					$search_keyword = wp_specialchars($s, 1);
					$search_count = $search_query->post_count;
					// printf(__('検索クエリに %1$s 件の記事が見つかりました。', 'wp'), $search_count);
					// echo '<pre>';
					// echo print_r($search_query);die;
				?>
				<!-- <div class="col-lg-12">
					<h3> Showing results for “<?php echo $s; ?>”</h3>
				</div> -->
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<div class="col-lg-4 order-<?php echo get_field('number'); ?>">
						<div class="item-list">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="top-item-list">
									<i class="fa fa-map-marker color-red"></i>
									<?php echo __(get_field('location'),'wp') ?>
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
				<?php wp_pagination(); ?>
				<?php stheme_paginate(array('query' => $search_query->post_count)); ?>
			</div>
		</div>
		<div class="col-lg-3 siderbar-pc">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>