<?php 
/*
  Template Name: About
*/
get_header(); 
?>
<div class="banner">
	<?php
		global $tp_options;
    ?>
    <img src="<?php echo $tp_options['banner-image-about']['url']; ?>" class="img-pc" alt="banner">
    <img src="<?php echo $tp_options['banner-image-detail-sp']['url']; ?>" class="img-sp" alt="banner">
    <div class="title-page"><?php wp_entry_header(); ?></div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9" id="main-content">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile ?>
			<?php else: ?>
				<?php get_template_part('content', 'none'); ?>
			<?php endif; ?>
			<div class="col-lg-12 text-center pt-15">
				<a href="<?php echo esc_url(home_url('/')); 
					if(get_locale() == 'zh_CN'){
						echo 'shop-list-cn';
					}else if(get_locale() == 'zh_TW'){
						echo 'shop-list-tw';
					}else if(get_locale() == 'ko_KR'){
						echo 'shop-list-kr';
					}else if(get_locale() == 'ja'){
						echo 'shop-list-ja';
					}else{
						echo 'shop-list';
					}?>
					" class="btn btn-bigger-map">
					<?php echo __('Find shop', 'wp'); ?>
				</a>
			</div>
			<div class="w-100 mt-4 img-sp text-center">
				<a href="https://osaka-info.jp/en/" target="_blank">
					<img src="<?php echo $tp_options['osaka-convention-tourism']['url']; ?>" class="mw-70" alt="how to enjoy">
				</a>
			</div>
		</div>
		<div class="col-lg-3 siderbar-pc" id="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
