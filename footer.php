<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoplux-cstm
 */

?>

<!-- Footer Start -->
<footer class="container-fluid bg-secondary text-dark mt-0 pt-5">
	<div class="row px-xl-5 pt-5">
		<div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
			<a href="<?php echo home_url(); ?>" class="text-decoration-none" id="cstm-logo-footer">
				<?php
                get_custom_def_logo();
                ?>
			</a>
			<p style="margin-top: 20px;">Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat
				lorem et magna ipsum
				dolore amet erat.</p>
			<?php my_social_media_icons(); ?>
			<!-- <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p> -->
			<!-- <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@shopluxurant.nl</p> -->
			<!-- <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p> -->
		</div>
		<div class="col-lg-8 col-md-12">
			<div class="row">
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Snelle Links</h5>
					<div class="d-flex flex-column justify-content-start">
						<?php

                        $menu_locations = get_nav_menu_locations();
                        $footer_first_menu_id = $menu_locations['footer-1'];
                        $footer_first_menu = wp_get_nav_menu_items($footer_first_menu_id);

                        foreach ($footer_first_menu as $footer_first_menu_item) {
	                        echo '<a class="text-dark mb-2" href="' . $footer_first_menu_item->url . '" title="' . $footer_first_menu_item->title . '"><i class="fa fa-angle-right mr-2"></i>' . $footer_first_menu_item->title . '</a>';
                        }

                        ?>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Categorie&euml;n</h5>
					<div class="d-flex flex-column justify-content-start">
						<?php
                        $footer_second_menu_id = $menu_locations['footer-2'];
                        $footer_second_menu = wp_get_nav_menu_items($footer_second_menu_id);

                        foreach ($footer_second_menu as $footer_second_menu_item) {
	                        echo '<a class="text-dark mb-2" href="' . $footer_second_menu_item->url . '" title="' . $footer_second_menu_item->title . '"><i class="fa fa-angle-right mr-2"></i>' . $footer_second_menu_item->title . '</a>';
                        }
                        ?>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Meld je aan om 20% korting te krijgen op je eerste
						bestelling.</h5>
					<form action="">
						<div class="form-group">
							<input type="email" class="form-control border-0 py-4" placeholder="Your Email"
								required="required" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="d-flex justify-content-between align-items-center border-top border-light mx-xl-5 py-4"
		style="gap: 20px;">
		<div class="d-flex flex-column">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'shoplux-cstm')); ?>">
				<?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Mogelijk gemaakt door %s', 'shoplux-cstm'), 'WordPress');
                ?>
			</a>
			<p>© 2022 Shopluxurant</p>
		</div>
		<div class="">
			<img class="img-fluid" src="https://www.shopluxurant.nl/wp-content/uploads/2023/02/payments.png"
				alt="">
		</div>
	</div>
</footer>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>