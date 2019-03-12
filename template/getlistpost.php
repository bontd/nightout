<div class="post-list row">
	<?php
		$get_post = new WP_Query(array(
		'post_type'		=>'post',
		'meta_key'		=> 'number',
		'orderby'		=> 'meta_value',
		'order' 		=> 'ASC',
		'posts_per_page'=> 18,
		'paged' 		=> stheme_get_paged()));
	?>
	<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
		<div class="col-lg-4 col-md-6">
			<div class="item-list">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<div class="top-item-list">
						<i class="fa fa-map-marker color-red"></i>
						<?php echo get_field('location') ?>
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
	<?php endwhile ; wp_reset_query() ;?>
</div>
<div class="row">
	<div class="col-lg-12">
		<?php stheme_paginate(array('query' => $get_post)); ?>
	</div>
</div>