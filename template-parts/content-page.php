<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shoplux-cstm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header woocommerce-products-header container-fluid bg-secondary p-3">
		<div class="d-flex flex-column align-items-center justify-content-center">
			<div class="d-inline-flex">
				<?php $args = array(
                	'delimiter' => ' / ',
                	'before' => '<span class="breadcrumb-title m-0">' . __('', 'shoplux') . '</span>'
                );
                woocommerce_breadcrumb($args);
                ?>
			</div>
		</div>
	</header> <!-- .entry-header -->

	<?php shoplux_cstm_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        the_content();

        wp_link_pages(
        	array(
        		'before' => '<div class="page-links">' . esc_html__('Pages:', 'shoplux-cstm'),
        		'after' => '</div>',
        	)
        );
        ?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()): ?>
	<footer class="entry-footer text-center">
		<?php
	    edit_post_link(
	    	sprintf(
	    		wp_kses(
	    			/* translators: %s: Name of current post. Only visible to screen readers */
	    			__('Edit <span class="screen-reader-text">%s</span>', 'shoplux-cstm'),
	    			array(
	    				'span' => array(
	    					'class' => array(),
	    				),
	    			)
	    		),
	    		wp_kses_post(get_the_title())
	    	),
	    	'<span class="edit-link">',
	    	'</span>'
	    );
        ?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->