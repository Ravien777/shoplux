<?php

function debug_to_console($data)
{
	$output = $data;
	if (is_array($output))
		$output = implode(',', $output);

	echo "<script>console.log($output);</script>";
}

function get_product_overview_and_filters()
{
?>

<!-- Products Start -->
<div class="container-fluid pt-5 text-center">
	<div class="text-center mb-4">
		<h2 class="section-title px-5"><span class="px-2">Uitgelichte Producten</span></h2>
	</div>

	<div id="filterBtns">
		<button class="btn active" onclick="filterSelection('speelgoed')">Speelgoed</button>
		<button class="btn" onclick="filterSelection('keuken')">Keuken</button>
		<button class="btn" onclick="filterSelection('geschenken-geschenken')">Geschenken</button>
		<button class="btn" onclick="filterSelection('auto-accessoires')">Auto Accessoires</button>
		<button class="btn" onclick="filterSelection('licht')">Licht</button>
	</div>
	<div class="product-layout-grid" id="productContainerHP">

		<?php

		$catgories_cstm = ['speelgoed', 'keuken', 'geschenken-geschenken', 'auto-accessoires', 'licht'];

		foreach ($catgories_cstm as $cat) {

			$args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => $cat, 'orderby' => 'rand' );
		
			$loop = new WP_Query($args);
		
			while ($loop->have_posts()):
				$loop->the_post();
				global $product;
				?>
		
				<div class="product-layout-box <?php echo $cat; ?>">
					<div class="card product-item border-0 mb-4">
						<a href="<?php echo get_the_permalink(); ?>" class="text-dark">
							<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
		
								<?php echo woocommerce_get_product_thumbnail(); ?>
		
							</div>
							<div class="d-flex justify-content-between gap-10 border-left border-right pt-3 pb-2 px-3">
								<h6 class="text-truncate mb-0">
									<?php echo get_the_title(); ?>
								</h6>
		
							</div>
							<div class="d-flex justify-content-between border-left border-right py-2 px-3 m-0">
								<?php if ($price_html = $product->get_price_html()): ?>
								<h6 class="price">
									<?php echo $price_html; ?>
								</h6>
								<?php endif; ?>
							</div>
						</a>
						<div class="d-flex justify-content-left bg-light border px-3 py-2">
							<a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn btn-sm text-dark p-0"><i
									class="fas fa-shopping-cart text-primary mr-1"></i>
								<?php echo esc_html($product->add_to_cart_text()); ?>
							</a>
						</div>
					</div>
				</div>
		
				<?php
			endwhile;
		
			wp_reset_query();


		}




	
        ?>

	</div>
	<div class="text-center"> <a href="<?php echo wc_get_page_permalink('shop') ?>" class="btn btn-primary px-4"
			id="meer-laden-filter-prod">Doorgaan met winkelen</a></div>
</div>
<!-- Products End -->

<?php
}



?>