<?php get_header(); ?>
<div class="banner">
	<?php
		global $tp_options;
    ?>
    <img src="<?php echo $tp_options['banner-image-detail']['url']; ?>" class="img-pc" alt="banner">
    <img src="<?php echo $tp_options['banner-image-detail-sp']['url']; ?>" class="img-sp" alt="banner">
    <div class="title-page">
    	<h2><?php echo __('SHOP INFOMATION', 'wp'); ?></h2>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9">
	        <div class="row">
	        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	        	<div class="col-lg-12">
	        		<div class="slick-js">
	        			<?php if(get_field('image_gallery_1')){ ?>
							<div>
	        					<img src="<?php echo get_field('image_gallery_1'); ?>" alt="gallery" />
	        				</div>
						<?php } ?>
						<?php if(get_field('image_gallery_2')){ ?>
							<div>
	        					<img src="<?php echo get_field('image_gallery_2'); ?>" alt="gallery" />
	        				</div>
						<?php } ?>
						<?php if(get_field('image_gallery_3')){ ?>
							<div>
	        					<img src="<?php echo get_field('image_gallery_3'); ?>" alt="gallery" />
	        				</div>
						<?php } ?>
						<?php if(get_field('image_gallery_4')){ ?>
							<div>
	        					<img src="<?php echo get_field('image_gallery_4'); ?>" alt="gallery" />
	        				</div>
						<?php } ?>
						<?php if(get_field('image_gallery_5')){ ?>
							<div>
	        					<img src="<?php echo get_field('image_gallery_5'); ?>" alt="gallery" />
	        				</div>
						<?php } ?>
	        		</div>
	        	</div>
	        	<div class="col-lg-12">
	        		<div class="ttl-3 infomation-title">
	        			<h3><?php the_title();?></h3>
	        			<div class="ml-auto sp-infomation-category">
	        				<i class="fa fa-map-marker color-red"></i>
							<?php echo get_field('location') ?>
							<i class="fa fa-home color-yellow ml-2"></i>
							<?php
								$category_detail=get_the_category(get_the_ID());
								foreach($category_detail as $cd){
									echo $cd->cat_name;
								}
							?>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="col-lg-12 mt-3 mb-4 content-infomation">
					<?php the_content(); ?>
	        	</div>
	        	<div class="col-md-6">
	        		<?php 
	        			$id = get_the_ID();
	        			$tags = get_the_tags($id);
	        			if($tags){
	        		?>
	        		<ul class="tag-infomation">
	        			<?php foreach ($tags as $tag) { ?>
		        			<li><?php echo $tag->name ?></li>
			        	<?php } ?>
	        		</ul>		
	        		<?php } ?>
	        	</div>
	        	<div class="col-md-6">
	        		<table class="table table-infomation">
	        			<tr>
	        				<td width="40%">
	        					<div class="w-icon-infomation"><img src="/wp-content/themes/template/assets/images/icon-yen.png" alt="$"></div>
	        					<?php echo __('Price', 'wp'); ?>
	        				</td>
	        				<td>
	        					<?php if(get_field('price')) { 
	        						echo '$'.get_field('price');
	        					}?>
	        					<?php if(get_field('Price')) { 
	        						echo '$'.get_field('Price');
	        					}?>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<div class="w-icon-infomation"><img src="/wp-content/themes/template/assets/images/icon-language.png" alt="Language"></div>
	        					<?php echo __('Language', 'wp'); ?>
	        				</td>
	        				<td>
	        					<?php 
	        					if(get_field('language')){
	        						$languages = get_field('language'); 
	        						$count = count($languages);
									$i=0;
	        						foreach($languages as $language){
	        							echo $language;
	        							 $i++;
									    if($i<$count){ echo ', '; }
	        						}
	        					}
	        					?>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<div class="w-icon-infomation"><img src="/wp-content/themes/template/assets/images/icon-smoking.png" alt="Smoking"></div>
	        					<?php echo __('Smoking', 'wp'); ?>
	        				</td>
	        				<td>
	        					<?php if(get_field('smoking')){ echo get_field('smoking'); } ?>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<div class="w-icon-infomation"><img src="/wp-content/themes/template/assets/images/icon-payment.png" alt="Payment"></div>
	        					<?php echo __('Payment', 'wp'); ?>
	        				</td>
	        				<td>
	        					<?php if(get_field('main_visiter')){ 
									$payment = get_field('main_visiter');
									$count = count($payment);
									$i=0;
									foreach($payment as $key => $val) {
									    echo $val;
									    $i++;
									    if($i<$count){ echo ', '; }
									}
	        					} ?>
	        				</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<div class="w-icon-infomation"><img src="/wp-content/themes/template/assets/images/icon-access.png" alt="Access"></div>
	        					<?php echo __('Access', 'wp'); ?>
	        				</td>
	        				<td>
	        					<?php echo get_field('access'); ?>
	        				</td>
	        			</tr>
	        		</table>
	        	</div>
	        	<div class="col-md-12">
	        		<div class="discount-coupon">
		        		<div class="left-coupon">
		        			<div class="free-ticket">
		        				<img src="<?php echo $tp_options['text-discount-coupon']['url']; ?>" class="img-discount-coupon img-pc" alt="discount coupon">
		        				<img src="<?php echo $tp_options['text-discount-coupon-sp']['url']; ?>" class="img-discount-coupon img-sp" alt="discount coupon">
		        				<?php if(get_field('date_coupon')){ ?>
			        				<div class="date-free-ticket">
			        					~ <?php echo get_field('date_coupon'); ?>
			        				</div>
		        				<?php } ?>
		        				<div class="number-free-ticket">
		        					<span><?php if(get_field('number_free_tick')){ echo get_field('number_free_tick');}?> </span>
		        				</div>
		        				<div class="text-description-coupon">
		        					<?php if(get_field('description_coupon')){ echo get_field('description_coupon');} ?>
		        				</div>
		        				<div class="logo-coupon mt-auto ml-auto img-pc">
		        					<img src="<?php echo $tp_options['logo-in-coupon']['url']; ?>" alt="logo">
		        				</div>
		        			</div>
		        		</div>
		        		<div class="right-coupon">
		        			<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="img-pc p-4">
		        				<img src="<?php echo $tp_options['click-to-get']['url']; ?>" alt="click to get">
		        			</a>
		        			<a href="<?php echo esc_url(home_url('/')); if(get_locale() == 'ko_KR') {
								echo 'coupon-kr';
							}else if(get_locale() == 'zh_CN') {
								echo 'coupon-cn';
							}else if(get_locale() == 'zh_TW') {
								echo 'coupon-tw';
							}else if(get_locale() == 'ja') {
								echo 'coupon-ja';
							}else {
								echo 'coupon';
							} ?>?coupon_id=<?php echo get_the_ID() ?>&coupon_number=1" class="img-sp">
	        					<img src="<?php echo $tp_options['click-to-get-sp']['url']; ?>" alt="tab to get">
		        			</a>

		        		</div>
		        	</div>
					<?php if(get_field('date_coupon_2') || get_field('number_free_tick_2') || get_field('description_coupon_2')){ ?>
						<div class="discount-coupon mt-3">
			        		<div class="left-coupon">
			        			<div class="free-ticket">
			        				<img src="<?php echo $tp_options['text-discount-coupon']['url']; ?>" class="img-discount-coupon img-pc" alt="discount coupon">
			        				<img src="<?php echo $tp_options['text-discount-coupon-sp']['url']; ?>" class="img-discount-coupon img-sp" alt="discount coupon">
			        				<?php if(get_field('date_coupon_2')){ ?>
				        				<div class="date-free-ticket">
				        					~ <?php echo get_field('date_coupon_2'); ?>
				        				</div>
			        				<?php } ?>
			        				<div class="number-free-ticket">
			        					<span><?php if(get_field('number_free_tick_2')){ echo get_field('number_free_tick_2');}?> </span>
			        				</div>
			        				<div class="text-description-coupon">
			        					<?php if(get_field('description_coupon_2')){ echo get_field('description_coupon_2');} ?>
			        				</div>
			        				<div class="logo-coupon mt-auto ml-auto img-pc">
			        					<img src="<?php echo $tp_options['logo-in-coupon']['url']; ?>" alt="logo">
			        				</div>
			        			</div>
			        		</div>
			        		<div class="right-coupon">
			        			<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="img-pc p-4">
			        				<img src="<?php echo $tp_options['click-to-get']['url']; ?>" alt="click to get">
			        			</a>
			        			<a href="<?php echo esc_url(home_url('/')); if(get_locale() == 'ko_KR') {
									echo 'coupon-kr';
								}else if(get_locale() == 'zh_CN') {
									echo 'coupon-cn';
								}else if(get_locale() == 'zh_TW') {
									echo 'coupon-tw';
								}else if(get_locale() == 'ja') {
									echo 'coupon-ja';
								}else {
									echo 'coupon';
								} ?>?coupon_id=<?php echo get_the_ID() ?>&coupon_number=2" class="img-sp">
		        					<img src="<?php echo $tp_options['click-to-get-sp']['url']; ?>" alt="tab to get">
			        			</a>

			        		</div>
			        	</div>
		        	<?php } ?>

		        	<?php if(get_field('date_coupon_3') || get_field('number_free_tick_3') || get_field('description_coupon_3')){ ?>
						<div class="discount-coupon mt-3">
			        		<div class="left-coupon">
			        			<div class="free-ticket">
			        				<img src="<?php echo $tp_options['text-discount-coupon']['url']; ?>" class="img-discount-coupon img-pc" alt="discount coupon">
			        				<img src="<?php echo $tp_options['text-discount-coupon-sp']['url']; ?>" class="img-discount-coupon img-sp" alt="discount coupon">
			        				<?php if(get_field('date_coupon_3')){ ?>
				        				<div class="date-free-ticket">
				        					~ <?php echo get_field('date_coupon_3'); ?>
				        				</div>
			        				<?php } ?>
			        				<div class="number-free-ticket">
			        					<span><?php if(get_field('number_free_tick_3')){ echo get_field('number_free_tick_3');}?> </span>
			        				</div>
			        				<div class="text-description-coupon">
			        					<?php if(get_field('description_coupon_3')){ echo get_field('description_coupon_3');} ?>
			        				</div>
			        				<div class="logo-coupon mt-auto ml-auto img-pc">
			        					<img src="<?php echo $tp_options['logo-in-coupon']['url']; ?>" alt="logo">
			        				</div>
			        			</div>
			        		</div>
			        		<div class="right-coupon">
			        			<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="img-pc p-4">
			        				<img src="<?php echo $tp_options['click-to-get']['url']; ?>" alt="click to get">
			        			</a>
			        			<a href="<?php echo esc_url(home_url('/')); if(get_locale() == 'ko_KR') {
									echo 'coupon-kr';
								}else if(get_locale() == 'zh_CN') {
									echo 'coupon-cn';
								}else if(get_locale() == 'zh_TW') {
									echo 'coupon-tw';
								}else if(get_locale() == 'ja') {
									echo 'coupon-ja';
								}else {
									echo 'coupon';
								} ?>?coupon_id=<?php echo get_the_ID() ?>&coupon_number=3" class="img-sp">
		        					<img src="<?php echo $tp_options['click-to-get-sp']['url']; ?>" alt="tab to get">
			        			</a>

			        		</div>
			        	</div>
		        	<?php } ?>

		        	<p class="img-pc mt-3 text-center w-100"><?php 
		        			if(get_locale() == 'ko_KR') {
								echo $tp_options['text-coupon-single-ko'];
							}else if(get_locale() == 'zh_CN') {
								echo $tp_options['text-coupon-single-cn'];
							}else if(get_locale() == 'zh_TW') {
								echo $tp_options['text-coupon-single-tw'];
							}else if(get_locale() == 'ja') {
								echo $tp_options['text-coupon-single-ja'];
							}else {
								echo $tp_options['text-coupon-single'];
							}?></p>
	        	</div>
				<div class="col-md-12 mt-4">
					<div class="title">
						<i class="icon-brower"></i>
						<?php if(get_locale() == 'ko_KR'){
							echo '<span class="color-red">공</span>지사항';
						}else if(get_locale() == 'zh_CN'){
							echo '<span class="color-red">资</span>讯';
						}else if(get_locale() == 'zh_TW'){
							echo '<span class="color-red">資</span>訊';
						}else if(get_locale() == 'ja'){
							echo '<span class="color-red">お</span>知らせ';
						}else {
							echo '<span class="color-red">I</span>NFOMATION';
						}
						?>
					</div>
					<div class="form-group">
						<table class="table table-infomation-2">
							<tr>
								<td width="15%"><?php echo __('Address','wp'); ?></td>
								<td><?php echo get_field('address'); ?></td>
							</tr>
							<tr>
								<td><?php echo __('Hours','wp'); ?></td>
								<td>
									<?php if(get_field('open_hour')){ echo 'PM '.get_field('open_hour').'～'; } ?><?php if(get_field('close_hour')){ echo 'AM '.get_field('close_hour').' / '; } ?> <?php echo get_field('text_open'); ?>
								</td>
							</tr>
							<tr>
								<td><?php echo __('Tel','wp'); ?></td>
								<td><?php echo get_field('tel'); ?></td>
							</tr>
							<tr>
								<td><?php echo __('Website','wp'); ?></td>
								<td><a href="<?php echo get_field('url_website'); ?>" target="_blank"><?php echo get_field('url_website'); ?></a></td>
							</tr>
						</table>
					</div>
	        	</div>
	        	<div class="col-md-12 mt-2">
	        		<div class="title">
						<i class="icon-brower"></i>
						<?php if(get_locale() == 'ko_KR'){
							echo '<span class="color-red">지</span>도';
						}else if(get_locale() == 'zh_CN'){
							echo '<span class="color-red">地</span>图';
						}else if(get_locale() == 'zh_TW'){
							echo '<span class="color-red">地</span>圖';
						}else if(get_locale() == 'ja'){
							echo '<span class="color-red">地</span>図';
						}else {
							echo '<span class="color-red">M</span>AP';
						}
						?>
					</div>
					<div class="form-group map-infomation">
						<iframe src="<?php echo get_field('map_url'); ?>" width="100%" height="380"></iframe>
						<div class="w-100 text-center p-15-0">
							<a href="javascript:void(0)" target="_blank" class="btn btn-bigger-map js-show-big-map" rel="<?php echo get_field('map_url'); ?>">
								<?php echo __('Show on the bigger map','wp'); ?>
							</a>
						</div>
					</div>
	        	</div>

	        	<div class="col-lg-12 mt-3 img-sp text-center">
					<a href="https://osaka-info.jp/en/" target="_blank">
						<img src="<?php echo $tp_options['osaka-convention-tourism']['url']; ?>" class="mw-70" alt="how to enjoy">
					</a>
				</div>

			<?php endwhile ?>
			<?php else: ?>
				<?php get_template_part('content', 'none'); ?>
			<?php endif; ?>
	    	</div>
		</div>
		<div class="col-lg-3 siderbar-pc"><?php get_sidebar(); ?></div>	
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.slick-js').slick({
			infinite: true,
			slidesToShow: 1,
  			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
		});

		$('.js-show-big-map').click(function(){
			var rel = $(this).attr('rel');
			if ((navigator.platform.indexOf("iPhone") != -1) || (navigator.platform.indexOf("iPad") != -1) || (navigator.platform.indexOf("iPod") != -1)){
				window.open("maps://"+rel.split('https://www.')[1]);
			}
			else{
				window.open(rel);
			}
		})

		
			function datalyer(){
				dataLayer.push({
					'area': ['<?php echo get_field('location') ?>'],
					'genre': [<?php $category_detail=get_the_category(get_the_ID());$count = count($category_detail);$i=0;foreach($category_detail as $cd){echo "'".$cd->cat_name."'";$i++;if($i<$count){ echo ', '; }}?>],
					'smoking': ['<?php if(get_field('smoking')){ echo get_field('smoking'); } ?>'],
					'language':[<?php if(get_field('language')){$languages = get_field('language'); $count = count($languages);$i=0;foreach($languages as $language){echo "'".$language."'";$i++;if($i<$count){ echo ', '; }}} ?>],
					'payment':[<?php if(get_field('main_visiter')){ 
									$payment = get_field('main_visiter');
									$count = count($payment);
									$i=0;
									foreach($payment as $key => $val) {
									    echo "'".$val."'";
									    $i++;
									    if($i<$count){ echo ', '; }
									}
	        					} ?>],
					'price':[<?php if(get_field('price')) { echo "'".get_field('price')."'";}?><?php if(get_field('Price')) { echo "'".get_field('Price')."'";}?>],
					'feature':[<?php $detail =  get_field('detail'); $count = count($detail);$i=0;foreach($detail as $key => $value) {echo "'".$value."'";$i++;if($i<$count){ echo ', '; }}?>]
				});
				console.log(dataLayer);
			}

			datalyer();
	})
</script>
<?php get_footer(); ?>