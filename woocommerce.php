<?php

/**
 * Shop Page
 */

?>

<?php get_header(); ?>

<?php

if (is_singular('product')) {
    woocommerce_get_template('single-product.php');
} elseif (is_archive()) {
    woocommerce_get_template('archive-product.php');
} else {
    woocommerce_content();
}

?>

<?php get_footer(); ?>