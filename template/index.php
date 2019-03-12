<?php
/*
  Template Name: home
*/
?>
<?php
    global $tp_options;
	// echo '<pre>';
	// echo print_r($tp_options);die;
?>
<div class="bg-home">
	<?php get_header(); ?>
	<div class="banner">
        <img src="<?php echo $tp_options['banner-image']['url']; ?>" class="img-pc" alt="banner">
        <img src="<?php echo $tp_options['banner-image-sp']['url']; ?>" class="img-sp" alt="banner">
	    <div class="discover-box">
	    	<div class="discover-nightout">
	    		<img src="<?php
	    			if(get_locale() == 'ko_KR'){
	    				echo $tp_options['banner-image-discover-ko']['url'];
	    			}else if(get_locale() == 'zh_CN'){
	    				echo $tp_options['banner-image-discover-cn']['url'];
	    			}else if(get_locale() == 'zh_TW'){
	    				echo $tp_options['banner-image-discover-tw']['url'];
	    			}else if(get_locale() == 'ja'){
	    				echo $tp_options['banner-image-discover-ja']['url'];
	    			}else {
	    				echo $tp_options['banner-image-discover']['url'];
	    			}
	    		?>" alt="discover">
	    		<!-- <img src="<?php echo $tp_options['banner-image-discover-sp']['url']; ?>" class="img-sp" alt="discover"> -->
	    		<div class="group-icon-discount">
		    		<div class="item-get-discount">
		    			<img src="<?php
		    				if(get_locale() == 'ko_KR'){
			    				echo $tp_options['banner-image-discover-get-ko']['url'];
			    			}else if(get_locale() == 'zh_CN'){
			    				echo $tp_options['banner-image-discover-get-cn']['url'];
			    			}else if(get_locale() == 'zh_TW'){
			    				echo $tp_options['banner-image-discover-get-tw']['url'];
			    			}else if(get_locale() == 'ja'){
			    				echo $tp_options['banner-image-discover-get-ja']['url'];
			    			}else {
			    				echo $tp_options['banner-image-discover-get']['url'];
			    			}
		    			?>" alt="get discount">
		    		</div>
		    		<div class="item-get-discount">
		    			<img src="<?php
		    				if(get_locale() == 'ko_KR'){
			    				echo $tp_options['banner-image-discover-safe-ko']['url'];
			    			}else if(get_locale() == 'zh_CN'){
			    				echo $tp_options['banner-image-discover-safe-cn']['url'];
			    			}else if(get_locale() == 'zh_TW'){
			    				echo $tp_options['banner-image-discover-safe-tw']['url'];
			    			}else if(get_locale() == 'ja'){
			    				echo $tp_options['banner-image-discover-safe-ja']['url'];
			    			}else {
			    				echo $tp_options['banner-image-discover-safe']['url'];
			    			}
		    			?>" alt="safe">
		    		</div>
		    		<div class="item-get-discount">
		    			<img src="<?php
		    				if(get_locale() == 'ko_KR'){
			    				echo $tp_options['banner-image-discover-nearby-ko']['url'];
			    			}else if(get_locale() == 'zh_CN'){
			    				echo $tp_options['banner-image-discover-nearby-cn']['url'];
			    			}else if(get_locale() == 'zh_TW'){
			    				echo $tp_options['banner-image-discover-nearby-tw']['url'];
			    			}else if(get_locale() == 'ja'){
			    				echo $tp_options['banner-image-discover-nearby-ja']['url'];
			    			}else {
			    				echo $tp_options['banner-image-discover-nearby']['url'];
			    			}
		    			?>" alt="nearby">
		    		</div>
		    	</div>
	    	</div>
	    </div>
	    <div class="check-it">
	    	<div class="img-building-checkit">
	    		<img src="/wp-content/themes/template/assets/images/icon-check-it.png" alt="building">
	    	</div>
	    	<figure>
	    		<div class="d-flex align-items-center">
	    			<img src="/wp-content/themes/template/assets/images/icon-osaka.png" alt="osaka">
					<?php echo __('There are only reliable facilities!', 'wp'); ?>
	    		</div>
	            <a href="<?php echo esc_url(home_url('/')); 
					if(get_locale() == 'zh_CN'){
						echo 'about-cn';
					}else if(get_locale() == 'zh_TW'){
						echo 'about-tw';
					}else if(get_locale() == 'ko_KR'){
						echo 'about-kr';
					}else if(get_locale() == 'ja'){
						echo 'about-ja';
					}else{
						echo 'about';
					}?>" 
				class="btn btn-checkit"><?php echo __('CHECK IT', 'wp'); ?></a>
	        </figure>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
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
		            <div class="right-title">
						<?php echo __('Search places around you!!', 'wp'); ?>
		            </div>
				</div>
				<div class="map-google">
					<iframe src="
						<?php
						if(get_locale() == 'zh_CN'){
							echo $tp_options['Map-cn'];
						}else if(get_locale() == 'zh_TW'){
							echo $tp_options['Map-tw'];
						}else if(get_locale() == 'ko_KR'){
							echo $tp_options['Map-ko'];
						}else if(get_locale() == 'ja'){
							echo $tp_options['Map-ja'];
						}else{
							echo $tp_options['Map'];
						}?>
					" width="100%" height="340"></iframe>
					<div class="w-100 text-center p-15">
						<a href="<?php
						if(get_locale() == 'zh_CN'){
							echo $tp_options['Map-cn'];
						}else if(get_locale() == 'zh_TW'){
							echo $tp_options['Map-tw'];
						}else if(get_locale() == 'ko_KR'){
							echo $tp_options['Map-ko'];
						}else if(get_locale() == 'ja'){
							echo $tp_options['Map-ja'];
						}else{
							echo $tp_options['Map'];
						}?>" target="_blank" class="btn btn-bigger-map">
							<?php echo __('Show on the bigger map','wp');?>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 pd-0-sp">
						<div class="bg-video-osaka">
							<img src="/wp-content/themes/template/assets/images/n01_osakanightout_top.png" class="img-pc">
							<img src="/wp-content/themes/template/assets/images/n01_osakanightout_top_sp.png" class="img-sp">
							<div class="youtube-box">
								<img src="/wp-content/themes/template/assets/images/bg-youtube.png" class="pc">
								<img src="/wp-content/themes/template/assets/images/bg-youtube-sp.png" class="sp">
								<div class="iframe-youtbe">
									<?php if($tp_options['youtube']) {?>
										<iframe src="<?php echo $tp_options['youtube']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" width="100%" height="100%"></iframe>
									<?php }else { ?>
										<img src="/wp-content/themes/template/assets/images/bg-video.png">
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb-3 img-sp">
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
							<img src="<?php echo $tp_options['how-to-enjoy']['url']; ?>" class="w-100" alt="how to enjoy">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<i class="icon-brower"></i>
							<?php if(get_locale() == 'ko_KR'){
								echo '<span class="color-red">숍</span> 리스트';
							}else if(get_locale() == 'zh_CN'){
								echo '<span class="color-red">店</span>铺名单';
							}else if(get_locale() == 'zh_TW'){
								echo '<span class="color-red">店</span>鋪名單';
							}else if(get_locale() == 'ja'){
								echo '<span class="color-red">シ</span>ョップリスト';
							}else {
								echo '<span class="color-red">S</span>HOP LIST';
							}
							?>
						</div>
						<div class="post-list row">
							<?php
								$get_post = new WP_Query(array(
								'post_type'     => 'post',
								'meta_key'		=> 'number',
								'orderby'		=> 'meta_value_num',
								'order' 		=> 'ASC',
								'posts_per_page'=> 12));
							?>
					      	<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
					        <div class="col-lg-4 col-md-6">
					        	<div class="item-list">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<div class="top-item-list">
											<i class="fa fa-map-marker color-red"></i>
											<?php echo get_field('location') ?>
											<i class="fa fa-home color-yellow"></i>
											<?php
												$category_detail=get_the_category(get_the_ID());
												foreach($category_detail as $cd){
													echo $cd->cat_name;
												}
											?>
										</div>
										<div class="i-thumbnail"><?php echo the_post_thumbnail();?></div>
										<div class="title-post">
											<span class="number-view"><?php echo get_field('number'); ?>.</span>
											<h5><?php the_title();?></h5>
										</div>
									</a>
					        	</div>
							</div>
					      	<?php endwhile ; wp_reset_query() ;?>
						</div>
						<div class="w-100 text-center pt-15 pb-50">
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
								<?php echo __('Show More', 'wp'); ?>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<i class="icon-brower"></i>
							<?php if(get_locale() == 'ko_KR'){
								echo '<span class="color-red">공</span>지';
							}else if(get_locale() == 'zh_CN'){
								echo '<span class="color-red">主</span>题';
							}else if(get_locale() == 'zh_TW'){
								echo '<span class="color-red">主</span>題';
							}else if(get_locale() == 'ja'){
								echo '<span class="color-red">ト</span>ピックス';
							}else {
								echo '<span class="color-red">T</span>OPICS';
							}
							?>
						</div>
						<div class="topics-list">
							<ul class="list">
								<?php
									$get_post = new WP_Query(array(
									'post_type'=>'topic',
									'order' => 'DESC',
									'posts_per_page'=> 3));

									// echo '<pre>';
		       // 						echo print_r($get_post);die;
								?>
						      	<?php while ($get_post->have_posts()) : $get_post->the_post(); ?>
						      		<li>
						      			<div class="date-topic"><?php echo get_the_date( 'Y.m.d' ); ?></div>
										<a href="<?php echo esc_url(home_url('/')); 
											if(get_locale() == 'zh_CN'){
												echo 'topics-cn';
											}else if(get_locale() == 'zh_TW'){
												echo 'topics-tw';
											}else if(get_locale() == 'ko_KR'){
												echo 'topics-kr';
											}else if(get_locale() == 'ja'){
												echo 'topics-ja';
											}else{
												echo 'topics';
										}?>" class="link-topic">
											<?php the_title();?>
										</a>
									</li>
					      		<?php endwhile ; wp_reset_query() ;?>
				      		</ul>
						</div>
					</div>
					<div class="col-lg-12 text-center pt-15 img-sp">
						<a href="<?php echo esc_url(home_url('/')); 
						if(get_locale() == 'zh_CN'){
							echo 'topics-cn';
						}else if(get_locale() == 'zh_TW'){
							echo 'topics-tw';
						}else if(get_locale() == 'ko_KR'){
							echo 'topics-kr';
						}else if(get_locale() == 'ja'){
							echo 'topics-ja';
						}else{
							echo 'topics';
						}?>
						" class="btn btn-bigger-map">
							<?php echo __('Show More', 'wp'); ?>
						</a>
					</div>
					<div class="col-lg-12 mt-4 img-sp text-center">
						<a href="https://osaka-info.jp/en/" target="_blank">
							<img src="<?php echo $tp_options['osaka-convention-tourism']['url']; ?>" class="mw-70" alt="how to enjoy">
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 siderbar-pc">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
