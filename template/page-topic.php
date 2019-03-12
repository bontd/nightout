<?php
	/*
	  Template Name: Topic
	*/
	get_header();
?>
	<div class="banner">
		<?php
			global $tp_options;
	    ?>
	    <img src="<?php echo $tp_options['banner-image-topic']['url']; ?>" class="img-pc" alt="banner topic">
	    <img src="<?php echo $tp_options['banner-image-topic-sp']['url']; ?>" class="img-sp" alt="banner topic">
	    <div class="title-page"><?php wp_entry_header(); ?></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="page-topic topics-list">
					<?php
						$get_post = new WP_Query(array(
						'post_type'=>'topic',
						'order' => 'DESC',
						'posts_per_page'=> 20,
						'paged' => stheme_get_paged()));
					?>
		      		<div id="accordion">
		      			<div class="card">
		      				<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
			      				<div class="card-header" id="heading-<?php echo get_the_ID(); ?>">
			      					<h5 class="mb-0">
			      						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo get_the_ID(); ?>" aria-expanded="true" aria-controls="collapse-<?php echo get_the_ID(); ?>">
			      							<div class="date-topic"><?php echo get_the_date( 'Y.m.d' ); ?></div>
			      							<div class="link-topic"><?php the_title();?></div>
			      						</button>
			      					</h5>
			      				</div>
			      				<div id="collapse-<?php echo get_the_ID(); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
			      					<div class="card-body">
										<?php the_content();?>
			      					</div>
			      				</div>
		      				<?php endwhile ; wp_reset_query() ;?>
		      			</div>
		      		</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-12">
						<?php stheme_paginate(array('query' => $get_post)); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3 siderbar-pc">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>