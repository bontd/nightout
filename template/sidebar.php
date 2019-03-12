<?php
	global $tp_options;
?>
<!-- <?php echo do_shortcode('[ULWPQSF id=66]'); ?> -->
<?php get_template_part('templates/form-search', get_post_format()); ?>
<div class="mt-3">
	<a href="<?php echo esc_url(home_url('/')); 
	if(get_locale() == 'zh_CN'){
		echo 'howto-cn';
		}else if(get_locale() == 'zh_TW'){
			echo 'howto-tw';
			}else if(get_locale() == 'ko_KR'){
				echo 'howto-kr';
				}else if(get_locale() == 'ja'){
				echo 'howto-ja';
				}else{
					echo 'howto';
				}?>">
		<img src="<?php echo $tp_options['how-to-enjoy']['url']; ?>" alt="how to enjoy">
	</a>
</div>