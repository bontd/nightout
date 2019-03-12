<?php
/**
 * The template for displaying the footer.
 */
global $allstore_options;
?>

</main><?php // #main ?>

<?php
if (!empty($allstore_options['footer_template'])) {
	$footer_template = $allstore_options['footer_template'];
	if (function_exists('icl_object_id')) {
		$footer_template = icl_object_id($allstore_options['footer_template'], 'page', false, ICL_LANGUAGE_CODE);
	}
	$content = get_post_field('post_content', $footer_template);
	if (!empty($content)) {
		echo '<footer class="stylization site-footer">'.do_shortcode( $content ).'</footer>';
	}
}
?>
<div class="hottle-fixed">
	<a href="tel:0983820046"><img src="<?php echo get_template_directory_uri(); ?>/img/hotline.png" alt="0983820046"></a>
</div>

<?php wp_footer(); ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bcedc94476c2f239ff59803/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

$(document).ready(function(){
	$('.vc_pageable-slide-wrapper').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			}
		}, {
			breakpoint: 500,
			settings: {
				slidesToShow: 1,
			}
		}]
	});
	$('.cat-item.has_child>a>.section-sb-toggle').addClass('opened');
	$('.cat-item.has_child>.children').show();
})
</script>
<!--End of Tawk.to Script-->
</body>
</html>
