<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>

<li <?php wc_product_class('product-layout-box', $product); ?>>
	<div class="card product-item border-0 mb-4">
		<?php

        /**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
        do_action('woocommerce_before_shop_loop_item');

        ?>
		<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
			<?php

            /**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
            do_action('woocommerce_before_shop_loop_item_title');

            ?>
		</div>
		<div class="d-flex justify-content-between gap-10 border-left border-right pt-3 pb-2 px-3">
			<h6 class="text-truncate mb-0">
				<?php echo get_the_title(); ?>
			</h6>
		</div>
		<div class="d-flex justify-content-between border-left border-right py-2 px-3 m-0">
			<?php

            /**
			 * Hook: woocommerce_after_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
            do_action('woocommerce_after_shop_loop_item_title');

            ?>
		</div>
		<?php

        /**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
        do_action('woocommerce_after_shop_loop_item');
        ?>
	</div>
</li>