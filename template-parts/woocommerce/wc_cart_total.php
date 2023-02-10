<?php

/**
 * Show cart contents / total Ajax
 */

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments)
{

    ob_start();
    $count = WC()->cart->cart_contents_count;

?>
<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-contents btn border"
    title="<?php _e('View Shopping Cart', 'woothemes'); ?>">
    <i class="fas fa-shopping-cart text-primary"></i>
    <span class="badge">
        <?php echo esc_html($count); ?>
    </span>
</a>
<?php
    $fragments['a.cart-contents.btn.border'] = ob_get_clean();
    return $fragments;
}

?>