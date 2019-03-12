<?php
	/*
	  Template Name: How to
	*/
	get_header();
?>
	<div class="banner">
		<?php
			global $tp_options;
	    ?>
	    <img src="<?php echo $tp_options['banner-image-howto']['url']; ?>" class="img-pc" alt="banner">
	    <img src="<?php echo $tp_options['banner-image-howto-sp']['url']; ?>" class="img-sp" alt="banner">
	    <div class="title-page"><?php wp_entry_header(); ?></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<figure>
					<img src="
					<?php 
						if(get_locale() == 'ko_KR') { 
							echo $tp_options['image-howto-1-korean']['url'];
						}else if(get_locale() == 'zh_CN') {
							echo $tp_options['image-howto-1-china']['url'];
						}else if(get_locale() == 'zh_TW') {
							echo $tp_options['image-howto-1-taiwan']['url'];
						}else if(get_locale() == 'ja') {
							echo $tp_options['image-howto-1-ja']['url'];
						}else {
							echo $tp_options['image-howto-1']['url'];
						}
					?>
					" class="img-pc">
					<img src="
					<?php 
						if(get_locale() == 'ko_KR') { 
							echo $tp_options['image-howto-1-korean-sp']['url'];
						}else if(get_locale() == 'zh_CN') {
							echo $tp_options['image-howto-1-china-sp']['url'];
						}else if(get_locale() == 'zh_TW') {
							echo $tp_options['image-howto-1-taiwan-sp']['url'];
						}else if(get_locale() == 'ja') {
							echo $tp_options['image-howto-1-ja-sp']['url'];
						}else {
							echo $tp_options['image-howto-1-sp']['url'];
						}
					?>
					" class="img-sp">
				</figure>
				<div class="h4">
					<?php if(get_locale() == 'ko_KR') {
						echo __($tp_options['title-howto-korean'], 'wp');
					}else if(get_locale() == 'zh_CN') {
						echo __($tp_options['title-howto-china'], 'wp');
					}else if(get_locale() == 'zh_TW') {
						echo __($tp_options['title-howto-tw'], 'wp');
					}else if(get_locale() == 'ja') {
						echo __($tp_options['title-howto-ja'], 'wp');
					}else {
						echo __($tp_options['title-howto'], 'wp');
					} ?>
				</div>
				<div class="step-hotow">
					<div class="step-item">
						<?php if(get_locale() == 'ko_KR') {
							echo __($tp_options['text-howto-1-korean'], 'wp');
						}else if(get_locale() == 'zh_CN') {
							echo __($tp_options['text-howto-1-china'], 'wp');
						}else if(get_locale() == 'zh_TW') {
							echo __($tp_options['text-howto-1-tw'], 'wp');
						}else if(get_locale() == 'ja') {
							echo __($tp_options['text-howto-1-ja'], 'wp');
						}else {
							echo __($tp_options['text-howto-1'], 'wp');
						} ?>
					</div>
					<div class="step-item">
						<?php if(get_locale() == 'ko_KR') {
							echo __($tp_options['text-howto-2-korean'], 'wp');
						}else if(get_locale() == 'zh_CN') {
							echo __($tp_options['text-howto-2-china'], 'wp');
						}else if(get_locale() == 'zh_TW') {
							echo __($tp_options['text-howto-2-tw'], 'wp');
						}else if(get_locale() == 'ja') {
							echo __($tp_options['text-howto-2-ja'], 'wp');
						}else {
							echo __($tp_options['text-howto-2'], 'wp');
						} ?>
					</div>
					<div class="step-item">
						<?php if(get_locale() == 'ko_KR') {
							echo __($tp_options['text-howto-3-korean'], 'wp');
						}else if(get_locale() == 'zh_CN') {
							echo __($tp_options['text-howto-3-china'], 'wp');
						}else if(get_locale() == 'zh_TW') {
							echo __($tp_options['text-howto-3-tw'], 'wp');
						}else if(get_locale() == 'ja') {
							echo __($tp_options['text-howto-3-ja'], 'wp');
						}else {
							echo __($tp_options['text-howto-3'], 'wp');
						} ?>
					</div>
				</div>

				<div class="title-howto icon">
					<h5>
						<?php if(get_locale() == 'ko_KR') {
							echo __($tp_options['text-howto-4-korean'], 'wp');
						}else if(get_locale() == 'zh_CN') {
							echo __($tp_options['text-howto-4-china'], 'wp');
						}else if(get_locale() == 'zh_TW') {
							echo __($tp_options['text-howto-4-tw'], 'wp');
						}else if(get_locale() == 'ja') {
							echo __($tp_options['text-howto-4-ja'], 'wp');
						}else {
							echo __($tp_options['text-howto-4'], 'wp');
						} ?>
					</h5>
				</div>
				<div class="w-100 text-center pt-5 pb-5">
					<a href="<?php echo esc_url(home_url('/'));
                            if(get_locale() == 'zh_CN'){
                                echo 'shop-list-tw';
                            }else if(get_locale() == 'zh_TW'){
                                echo 'shop-list-cn';
                            }else if(get_locale() == 'ko_KR'){
                                echo 'shop-list-kr';
                            }else if(get_locale() == 'ja'){
                                echo 'shop-list-ja';
                            }else {
                            	echo 'shop-list';
                            }?>" class="btn btn-bigger-map">
						<?php echo __('Find a shop', 'wp'); ?>
					</a>
				</div>

				<div class="caution-box">
					<div class="ttl-2"><h2 class="text-center"><?php echo __('CAUTION', 'wp');?></h2></div>
					<?php if(get_locale() == 'ko_KR') {
						echo __($tp_options['text-howto-5-korean'], 'wp');
					}else if(get_locale() == 'zh_CN') {
						echo __($tp_options['text-howto-5-china'], 'wp');
					}else if(get_locale() == 'zh_TW') {
						echo __($tp_options['text-howto-5-tw'], 'wp');
					}else if(get_locale() == 'ja') {
						echo __($tp_options['text-howto-5-ja'], 'wp');
					}else {
						echo __($tp_options['text-howto-5'], 'wp');
					} ?>
				</div>
			</div>
			<div class="col-lg-3 siderbar-pc">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>