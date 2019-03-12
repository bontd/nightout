<div class="col-md-12 col-sm-12 col-xs-12">
	<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
		<div class="entry-thumbnail">
			<?php wp_thumbnail('thumbnail'); ?>
		</div>
		<div id="content">
			<div class="entry-content">
				<?php wp_entry_content(); ?>
				<?php ( is_single() ? wp_entry_tag() : '' ); ?>
			</div>
		</div>
	</article>
</div>
