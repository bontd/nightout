<?php
	/*
	  Template Name: Shop list
	*/
	get_header();
?>
	<div class="banner">
		<?php
			global $tp_options;
	    ?>
	    <img src="<?php echo $tp_options['banner-image-detail']['url']; ?>" class="img-pc" alt="banner">
	    <img src="<?php echo $tp_options['banner-image-detail-sp']['url']; ?>" class="img-sp" alt="banner">
	    <div class="title-page"><?php wp_entry_header(); ?></div>
	</div>
	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-9 append-item">
				<?php get_template_part('getlistpost'); ?>
			</div>
			<div class="col-lg-3 siderbar-pc">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>