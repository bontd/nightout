<?php
/*
  Template Name: coupon
*/
    global $tp_options;
	get_header(); 
?>
<div class="banner">
    <img src="<?php echo $tp_options['banner-image-howto']['url']; ?>" class="img-pc" alt="banner">
    <img src="<?php echo $tp_options['banner-image-howto-sp']['url']; ?>" class="img-sp" alt="banner">
    <div class="title-page"><?php wp_entry_header(); ?></div>
</div>
<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="title-howto icon mt-4 mb-4">
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
				<?php
					$post = get_post( $_GET['coupon_id'] );
					$coupon_type = $_GET['coupon_number'];
					// echo '<pre>';
					// echo print_r($post);die;
				?>
				<div class="use-coupon">
					<div class="top-use-coupon">
						<img src="<?php echo $tp_options['burlesque-osaka']['url']; ?>" alt="burlesque osaka">
					</div>
					<div class="mid-use-coupon">
						<?php if($coupon_type == 1){ ?>
							<span style="color:#ff2b71;"><?php echo $post->number_free_tick;?></span>
							<p class="p-descript-coupon"><?php echo $post->description_coupon; ?></p>
						<?php }else if($coupon_type == 2) { ?>
							<span style="color:#ff2b71;"><?php echo $post->number_free_tick_2;?></span>
							<p class="p-descript-coupon"><?php echo $post->description_coupon_2; ?></p>
						<?php }else {?>
							<span style="color:#ff2b71;"><?php echo $post->number_free_tick_3;?></span>
							<p class="p-descript-coupon"><?php echo $post->description_coupon_3; ?></p>
						<?php } ?>
					</div>

					<div class="bot-use-coupon js-show-coupon-staff">
						<div class="text-use-coupon">
							<?php echo __('Unused.','wp'); ?>
						</div>
						<?php if($coupon_type == 1){ ?>
							<?php if($post->date_coupon){ ?>
		        				<div class="date-free-ticket">
		        					<?php echo __('Until','wp'); ?> ~ <?php echo _mb_substr($post->date_coupon, 0,4).'.'._mb_substr($post->date_coupon, 4,2).'.'._mb_substr($post->date_coupon, 6,2); ?>
		        				</div>
	        				<?php } ?>
						<?php }else if($coupon_type == 2) { ?>
							<?php if($post->date_coupon_2){ ?>
		        				<div class="date-free-ticket">
		        					<?php echo __('Until','wp'); ?> ~ <?php echo _mb_substr($post->date_coupon_2, 0,4).'.'._mb_substr($post->date_coupon_2, 4,2).'.'._mb_substr($post->date_coupon_2, 6,2); ?>
		        				</div>
	        				<?php } ?>
						<?php }else {?>
							<?php if($post->date_coupon_3){ ?>
		        				<div class="date-free-ticket">
		        					<?php echo __('Until','wp'); ?> ~ <?php echo _mb_substr($post->date_coupon_3, 0,4).'.'._mb_substr($post->date_coupon_3, 4,2).'.'._mb_substr($post->date_coupon_3, 6,2); ?>
		        				</div>
	        				<?php } ?>
						<?php } ?>
					</div>

					<div class="bot-use-coupon active-coupon">
						<div class="text-use-coupon">
							<?php echo __('Used','wp'); ?>
						</div>
						<?php if($post->date_coupon){ ?>
	        				<div class="date-free-ticket">
	        					<?php echo __('Until','wp'); ?> ~ <?php echo _mb_substr($post->date_coupon, 0,4).'.'._mb_substr($post->date_coupon, 4,2).'.'._mb_substr($post->date_coupon, 6,2); ?>
	        				</div>
        				<?php } ?>
					</div>
					<input type="hidden" value="<?php echo _mb_substr($post->date_coupon, 0,4).'/'._mb_substr($post->date_coupon, 4,2).'/'._mb_substr($post->date_coupon, 6,2); ?>" class="date-end-coupon">
				</div>

				<div class="title-howto icon mb-4">
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
				<figure>
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
					" alt="how to">
				</figure>
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
					<div class="step-item mb-0">
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

				<div class="col-lg-12 mt-4 img-sp text-center">
					<a href="https://osaka-info.jp/en/" target="_blank">
						<img src="<?php echo $tp_options['osaka-convention-tourism']['url']; ?>" class="mw-70" alt="how to enjoy">
					</a>
				</div>
			</div>
			<div class="col-lg-3 siderbar-pc">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	<div class="modal" id="modal-coupon-staff">
		<div class="modal-dialog coupon-staff">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="/wp-content/themes/template/assets/images/icon-howto.png" alt="icon">
						</div>
						<div class="w-100 text-center mt-3">
							<h3><?php echo  __('Please be sure to show coupons to the shop staff.', 'wp')?></h3>
						</div>
						<div class="w-100 mt-3 text-center">
							<button type="button" class="btn btn-success-coupon" id="buy-now-below" data-id="<?php echo $_GET['coupon_id'] ?>">
								<?php echo __('OK','wp') ?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="wp-content/themes/template/assets/web/assets/jquery/moment.min.js"></script> -->
	<script>
		$(document).ready(function(){

			var pathname = window.location.href;
			if(pathname.split('?')[1]){
			}else {
				window.location.href = "<?php echo esc_url(home_url('/')); ?>";
			}

			$('.js-show-coupon-staff').click(function(){
				$('#modal-coupon-staff').modal({
					backdrop: 'static',
                    keyboard: false
				});
			})

			$('.btn-success-coupon').click(function(event){
				$('#modal-coupon-staff').modal('hide');
				$('.use-coupon').addClass('in');
			})

			$('.btn-success-coupon').on('click', function(event, slick, direction) {
				$('#modal-coupon-staff').modal('hide');
				$('.use-coupon').addClass('in');
				ga('send', 'event', {
					eventCategory: 'coupon',
					eventAction: 'click',
      				eventLabel: '<?php echo $post->post_title ?>',
      				eventValue: $(this).data('id')
  				});
				var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
				var day = currentDate.getDate()
				var month = currentDate.getMonth() + 1
				var year = currentDate.getFullYear()
				var tomorrow = month + "/" + day + "/" + year + ", <?php echo $tp_options['hour-reset-coupon']; ?>:00:00";

				setCookie('<?php echo $post->post_title ?>-<?php echo $coupon_type; ?>',1, tomorrow);
			});

			function setCookie(c_name,c_value,exdays) {
				var exdate=new Date(exdays);
				document.cookie=encodeURIComponent(c_name) + "=" + encodeURIComponent(c_value) + (!exdays ? "" : "; expires="+exdate.toGMTString());
			}

			function checkCookie(interval){
				if($.cookie("<?php echo $post->post_title ?>-<?php echo $coupon_type; ?>")){
					$('.use-coupon').addClass('in');
					$('#modal-coupon-staff').modal('hide');
				}else {
					$('.use-coupon').removeClass('in');
					if(interval == 1){
						$('#modal-coupon-staff').modal({
							backdrop: 'static',
							keyboard: false
						});
					}
				}
			}

			setInterval(function(){
				checkCookie(2)
			},500)

			// function checkDate(){
			// 	var currentDate = new Date();
			// 	var inputdate = $('.date-end-coupon').val();
			// 	var start = moment(currentDate);
			// 	var end = moment(inputdate);
			// 	if(end.diff(start, "days") < 0) {
			// 		$('.use-coupon').addClass('in');
			// 	}else {
			// 		checkCookie(1);

			// 		setInterval(function(){
			// 			checkCookie(2)
			// 		},1000)
			// 	}
			// }

			// checkDate();
		})
	</script>
<?php get_footer(); ?>