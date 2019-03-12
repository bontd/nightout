<?php get_header(); ?>
<div class="banner">
	<?php
		global $tp_options;
    ?>
    <img src="<?php echo $tp_options['banner-image-detail']['url']; ?>">
    <div class="title-page"><h2><?php echo  __('TOPICS', 'wp'); ?></h2></div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
	        <div class="ttl-3">
    			<h3><?php the_title();?></h3>
    		</div>
    		<?php the_content(); ?>
		</div>
		<div class="col-lg-3 siderbar-pc"><?php get_sidebar(); ?></div>	
	</div>
</div>
<?php get_footer(); ?>