<?php
	global $tp_options;
?>
<div class="filter-search">
	<div class="title-filter-search">
		<i class="fa fa-search"></i>
		<?php echo __('SEARCH','wp') ?>
	</div>
	<form class="search" method="get" action="<?php echo esc_url(home_url('/')); 
			if(get_locale() == 'zh_CN'){
				echo 'filter-cn';
			}else if(get_locale() == 'zh_TW'){
				echo 'filter-tw';
			}else if(get_locale() == 'ko_KR'){
				echo '/filter-kr';
			}else if(get_locale() == 'ja'){
				echo '/filter-ja';
			}else{
				echo '/filter';
			}?>" role="search">
		<div class="form-group">
			<select name="cate" class="form-control js-example-basic-multiple">
				<option value=""><?php echo __('Category','wp') ?></option>
				<?php 
				$category = get_categories();
				foreach ($category as $key => $value) {
					echo '<option value="'.$value->term_id.'">'.$value->name.'</option>';
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<select name="area" class="form-control js-example-basic-multiple">
				<option value=""><?php echo __('Area','wp') ?></option>
				<?php 
					$area = $tp_options['area-search-filter']; 
					$area = explode('|',$area);
					foreach ($area as $key => $value) {
				?>
					<option value="<?php echo $value; ?>"><?php echo __($value, 'wp'); ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<select name="price" class="form-control js-example-basic-multiple">
				<option value=""><?php echo __('Price','wp') ?>($)</option>
				<?php 
					$price = $tp_options['price-search-filter']; 
					$price = explode('|',$price);
					foreach ($price as $key => $value) {
				?>
					<option value="<?php echo str_replace(",","",$value); ?>"><?php echo __($value, 'wp'); ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group border-fillter out">
			<label class="w-100"><?php echo __('Feature','wp') ?></label>
			<div class="checkbox-detail">
				<?php 
					$detail = $tp_options['detail-search-filter']; 
					$detail = explode('|',$detail);
					foreach ($detail as $key => $value) {
				?>
					<label class="w-100">
						<input type="checkbox" name="detail[]" value="<?php echo str_replace(" ","_",$value); ?>">
						<span class="mark-checked"></span>
						<?php echo __($value, 'wp'); ?>
					</label>
				<?php } ?>
			</div>
		</div>
		<button type="submit" role="button" class="btn"/><?php echo __('Search','wp') ?></button>
	</form>
</div>