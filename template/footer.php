	</div>
	<div class="close-search-nav"></div>
</div>
<footer class="footer">
	<div class="container">
		<?php wp_menu('primary-menu'); ?>
		<div class="bottom-footer">
			<?php
                global $tp_options;
                if($tp_options['logo-on'] == 1) {
            ?>
                <a href="<?php get_site_url();?>">
                    <img src="<?php echo $tp_options['logo-image']['url']; ?>">
                </a>
                <a href="https://osaka-info.jp/en/" target="_blank">
                	<img src="<?php echo $tp_options['footer-image']['url']; ?>" class="img-right-footer">
                </a>
            <?php } ?>
            <div class="text-footer">
            	 <?php echo $tp_options['text-footer']; ?>
            </div>
		</div>
	</div>
</footer>

<div class="to-top">
	<i class="icon-to-top"></i>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.border-fillter>label').click(function(){
			$(this).parent().toggleClass('out');
		})

		$('#cmf-radio-2 label input').after('<span class="mark-checked"></span>');
		$('#cmf-radio-2 input[value="uwpqsfcmfall"]').prop('checked', true);

		$('#cmf-radio-2 .cmflabel-2').click(function(){
			$(this).parent().find('label').toggleClass('hide');
		})

		$('.header ul.sf-menu li a').each(function(){
			$(this).html('<span>'+$(this).text().substr(0,1)+'</span>'+$(this).text().substr(1,100));
		})

		$('.search-toggle').click(function(){
			$('body').toggleClass('search-show');
			$('body').removeClass('nav-show');
		})

		$('.bars-toggle-nav').click(function(){
			$('body').toggleClass('nav-show');
			$('body').removeClass('search-show');
		})

		$('.close-search-nav').click(function(){
			$('body').removeClass('nav-show');
			$('body').removeClass('search-show');
		})
	})

	jQuery(document).ready(function ($) {
		if ($(window).scrollTop() > 600) {
			$('.to-top').fadeIn();
		} else {
			$('.to-top').fadeOut();
		}

		$(window).scroll(function () {
			if ($(this).scrollTop() > 10) {
				$('.header').addClass('header-fixed');
			} else {
				$('.header').removeClass('header-fixed');
			}

			if ($(this).scrollTop() > 600) {
				$('.to-top').fadeIn();
			} else {
				$('.to-top').fadeOut();
			}
		});

		$('.to-top').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});
</script>
</body>
</html>
