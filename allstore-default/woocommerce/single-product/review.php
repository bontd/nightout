<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


$comment_class = array('reviews-i');
$ava_exist = allstore_validate_gravatar($comment->comment_author_email);
if ($ava_exist) {
	$comment_class[] = 'existimg';
}
?>
<li <?php comment_class($comment_class); ?> id="li-comment-<?php comment_ID() ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment_container">

		<?php if ($ava_exist) : ?>
			<div class="reviews-i-img">
				<?php
				/**
				 * The woocommerce_review_before hook
				 *
				 * @hooked woocommerce_review_display_gravatar - 10
				 */
				do_action( 'woocommerce_review_before', $comment );
				?>
				<?php
				/**
				 * The woocommerce_review_before_comment_meta hook.
				 *
				 * @hooked woocommerce_review_display_rating - 10
				 */
				do_action( 'woocommerce_review_before_comment_meta', $comment );
				?>
				<time class="reviews-i-date" datetime="<?php echo get_comment_date( 'c' ); ?>"><?php echo get_comment_date( wc_date_format() ); ?></time>
			</div>
		<?php endif; ?>


		<div class="reviews-i-cont">

			<?php if (!$ava_exist) : ?>
				<time class="reviews-i-date" datetime="<?php echo get_comment_date( 'c' ); ?>"><?php echo get_comment_date( wc_date_format() ); ?></time>
				<?php
				/**
				 * The woocommerce_review_before_comment_meta hook.
				 *
				 * @hooked woocommerce_review_display_rating - 10
				 */
				do_action( 'woocommerce_review_before_comment_meta', $comment );
				?>
			<?php endif; ?>

			<?php

			do_action( 'woocommerce_review_before_comment_text', $comment );

			/**
			 * The woocommerce_review_comment_text hook
			 *
			 * @hooked woocommerce_review_display_comment_text - 10
			 */
			do_action( 'woocommerce_review_comment_text', $comment );

			do_action( 'woocommerce_review_after_comment_text', $comment );

			/**
			 * The woocommerce_review_meta hook.
			 *
			 * @hooked woocommerce_review_display_meta - 10
			 */
			do_action( 'woocommerce_review_meta', $comment );

			?>

		</div>

	</div>
