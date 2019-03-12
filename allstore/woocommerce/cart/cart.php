<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>



<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

	<?php do_action( 'woocommerce_before_cart_table' ); ?>


	<div class="cart-items-wrap">
		<table class="cart-items">
			<thead>
			<tr>
				<td class="cart-image"><?php esc_html_e('ảnh', 'allstore'); ?></td>
				<td class="cart-ttl"><?php esc_html_e('tên', 'allstore'); ?></td>
				<td class="cart-price"><?php esc_html_e('giá', 'allstore'); ?></td>
				<td class="cart-quantity"><?php esc_html_e('số lượng', 'allstore'); ?></td>
				<td class="cart-summ"><?php esc_html_e('tổng tiền', 'allstore'); ?></td>
				<td class="cart-del">&nbsp;</td>
			</tr>
			</thead>
			<tbody>

			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr data-id="<?php echo intval($product_id); ?>" class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
						<td class="cart-image">
							<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $product_permalink ) {
								echo $thumbnail;
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
							}
							?>
						</td>
						<td class="cart-ttl" data-title="<?php esc_html_e( 'Product', 'allstore' ); ?>">
							<?php
							if ( ! $product_permalink ) {
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;';
							} else {
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key );
							}

							// Meta data
							echo wc_get_formatted_cart_item_data( $cart_item );

                            // Backorder notification.
                            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
                            }
							?>
						</td>
						<td class="cart-price" data-title="<?php esc_html_e( 'Price', 'allstore' ); ?>">
							<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
							?>
						</td>
						<td class="cart-quantity" data-title="<?php esc_html_e( 'Quantity', 'allstore' ); ?>">
							<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->get_max_purchase_quantity(),
									'min_value'   => '0',
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
							?>
						</td>
						<td class="product-subtotal cart-summ" data-title="<?php esc_html_e( 'Total', 'allstore' ); ?>">
							<p class="cart-forone">
								<?php esc_html_e('unit price', 'allstore'); ?> <b><?php
									echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
									?></b>
							</p>
							<?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>
						</td>
						<td class="cart-del">
							<?php
							// @codingStandardsIgnoreLine
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
								'<a href="%s" class="cart-remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"></a>',
								esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
								__( 'Remove this item', 'allstore' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							), $cart_item_key );
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>

			</tbody>
		</table>
	</div>
	<div class="cart-submit">
		<!-- <?php if ( wc_coupons_enabled() ) { ?>
			<div class="cart-coupon">
				<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'allstore' ); ?>">
				<button type="submit" class="cart-coupon-btn" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'allstore' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ok.png" alt="<?php esc_attr_e( 'Coupon code', 'allstore' ); ?>"></button>
				<?php do_action( 'woocommerce_cart_coupon' ); ?>
			</div>
		<?php } ?> -->

		<input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Cập nhật giỏ hàng', 'allstore' ); ?>" />

		<?php do_action( 'woocommerce_cart_actions' ); ?>

        <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

	</div>

	<?php do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

</div>

<?php do_action( 'woocommerce_after_cart' ); ?>