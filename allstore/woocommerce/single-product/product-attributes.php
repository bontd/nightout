<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$product_info = allstore_option('product_info', true);

if ($product_info == 'table') :
?>
<table class="shop_attributes">

	<?php if ( $display_dimensions && $product->has_weight() ) : ?>
		<tr>
			<th><?php esc_html_e( 'Khối lượng', 'allstore' ) ?></th>
			<td class="product_weight"><?php echo esc_html( wc_format_weight( $product->get_weight() ) ); ?></td>
		</tr>
	<?php endif; ?>

	<?php if ( $display_dimensions && $product->has_dimensions() ) : ?>
		<tr>
			<th><?php esc_html_e( 'Kích thước', 'allstore' ) ?></th>
			<td class="product_dimensions"><?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?></td>
		</tr>
	<?php endif; ?>

	<?php foreach ( $attributes as $attribute ) : ?>
		<tr>
			<th><?php echo wp_kses_post(wc_attribute_label( $attribute->get_name() )); ?></th>
			<td><?php
				$values = array();

				if ( $attribute->is_taxonomy() ) {
					$attribute_taxonomy = $attribute->get_taxonomy_object();
					$attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'all' ) );

					foreach ( $attribute_values as $attribute_value ) {
						$value_name = esc_html( $attribute_value->name );

						if ( $attribute_taxonomy->attribute_public ) {
							$values[] = '<a href="' . esc_url( get_term_link( $attribute_value->term_id, $attribute->get_name() ) ) . '" rel="tag">' . $value_name . '</a>';
						} else {
							$values[] = $value_name;
						}
					}
				} else {
					$values = $attribute->get_options();

					foreach ( $values as &$value ) {
						$value = make_clickable( $value );
					}
				}

				echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
			?></td>
		</tr>
	<?php endforeach; ?>

</table>

<?php else: ?>

<ul class="prod-props">

	<?php if ( $display_dimensions && $product->has_weight() ) : ?>
		<li>
			<span class="prod-propttl"><span><?php esc_html_e( 'Weight', 'allstore' ) ?></span></span>
			<span class="product_weight prod-propval"><?php echo esc_html( wc_format_weight( $product->get_weight() ) ); ?></span>
		</li>
	<?php endif; ?>

	<?php if ( $display_dimensions && $product->has_dimensions() ) : ?>
		<li>
			<span class="prod-propttl"><span><?php esc_html_e( 'Dimensions', 'allstore' ) ?></span></span>
			<span class="product_dimensions prod-propval"><?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?></span>
		</li>
	<?php endif; ?>

	<?php foreach ( $attributes as $attribute ) : ?>
		<li>
			<div class="prod-propttl"><span><?php echo wp_kses_post(wc_attribute_label( $attribute->get_name() )); ?></span></div>
			<div class="prod-propval"><?php
				$values = array();

				if ( $attribute->is_taxonomy() ) {
					$attribute_taxonomy = $attribute->get_taxonomy_object();
					$attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'all' ) );

					foreach ( $attribute_values as $attribute_value ) {
						$value_name = esc_html( $attribute_value->name );

						if ( $attribute_taxonomy->attribute_public ) {
							$values[] = '<a href="' . esc_url( get_term_link( $attribute_value->term_id, $attribute->get_name() ) ) . '" rel="tag">' . $value_name . '</a>';
						} else {
							$values[] = $value_name;
						}
					}
				} else {
					$values = $attribute->get_options();

					foreach ( $values as &$value ) {
						$value = make_clickable( $value );
					}
				}

				echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
			?></div>
		</li>
	<?php endforeach; ?>
</ul>

<?php endif; ?>
