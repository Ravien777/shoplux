<?php

/**
 * Front page
 */

?>

<?php get_header(); ?>

<?php wp_enqueue_script('shoplux-cstm-filter-prod', get_template_directory_uri() . '/assets/js/filter-products.js', array(), _S_VERSION, true); ?>

<main>
    <?php get_home_carousel(); ?>

    <?php follow_us_on_social(); ?>

    <?php get_product_overview_and_filters(); ?>

    <?php get_collection_divs(); ?>

    <?php get_subscription_sctn(); ?>

    <?php get_parallax_section(); ?>

    <?php get_about_us_section(); ?>
</main>

<?php get_footer(); ?>