<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoplux-cstm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<!-- Topbar Start -->
		<div class="container-fluid">
			<div class="row bg-secondary py-2 px-xl-5">
				<?php
            $menu_locations = get_nav_menu_locations();
            if (is_user_logged_in()) {
            ?>
				<div class="col-lg-6 d-none d-lg-block">
					<div class="d-inline-flex align-items-center">
						<?php

	            $topbar_menu_id = $menu_locations['topbar'];
	            $topbar_menu = wp_get_nav_menu_items($topbar_menu_id);
	            $menu_divider_count = 0;

	            foreach ($topbar_menu as $topbar_menu_item) {
		            echo '<a class="text-dark" href="' . $topbar_menu_item->url . '" title="' . $topbar_menu_item->title . '">' . $topbar_menu_item->title . '</a>';
		            $menu_divider_count++;
		            if ($menu_divider_count < 3) {
			            echo '<span class="text-muted px-2">|</span>';
		            }
	            }

                    ?>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<?php my_social_media_icons(); ?>
				</div>
				<?php
            } else {
            ?>
				<div class="col-lg-12 text-center text-dark">
					<p class="topbar guest">Als lid verdien je punten en exclusieve beloningen elke keer dat je winkelt.
						<a href="<?php echo esc_url(wp_registration_url()); ?>">
							<?php _e('Account Maken', 'textdomain'); ?>
						</a> </p>
				</div>
				<?php
            }

            ?>
			</div>
			<div class="row align-items-center py-3 px-xl-5">
				<div class="col-lg-3 d-none d-lg-block">
					<a href="<?php echo home_url(); ?>" class="text-decoration-none" id="cstm-logo-header">
						<?php
                    get_custom_def_logo();
                    ?>
					</a>
				</div>
				<div class="col-lg-6 col-6 text-left">
					<?php
                get_search_form();
                ?>
				</div>
				<div class="col-lg-3 col-6 text-right">
					<!-- <a href="" class="btn border">
					<i class="fas fa-heart text-primary"></i>
					<span class="badge">0</span>
				</a> -->
					<?php

                if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
	                $count = WC()->cart->cart_contents_count;
                ?>

					<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-contents btn border"
						title="<?php _e('View Shopping Cart', 'woothemes'); ?>">
						<i class="fas fa-shopping-cart text-primary"></i>
						<span class="badge">
							<?php echo esc_html($count); ?>
						</span>
					</a>

					<?php }

                ?>
				</div>
			</div>
		</div>
		<!-- Topbar End -->

		<!-- Navbar Start -->
		<div class="container-fluid">
			<div class="row border-top px-xl-5">
				<div class="col-lg-3 d-none d-lg-block">
					<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
						data-toggle="collapse" href="#navbar-vertical"
						style="height: 65px; margin-top: -1px; padding: 0 30px;">
						<h6 class="m-0">Alle Categorie&euml;n</h6>
						<i class="fa fa-angle-down text-dark"></i>
					</a>
					<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
						id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1000;">
						<div class="navbar-nav w-100 overflow-hidden" style="height: 410px;">

							<?php

                        $args = array(
                        	'taxonomy' => 'product_cat',
                        	'hide_empty' => false,
                        	'parent' => 0
                        );
                        $product_cat = get_terms($args);

                        foreach ($product_cat as $parent_product_cat) {

	                        $child_args = array(
	                        	'taxonomy' => 'product_cat',
	                        	'hide_empty' => false,
	                        	'parent' => $parent_product_cat->term_id
	                        );
	                        $child_product_cats = get_terms($child_args);
	                        if (count($child_product_cats) !== 0) {
		                        echo '<div class="nav-item dropdown"><a href="' . get_term_link($parent_product_cat->term_id) . '"  class="nav-link" data-toggle="dropdown">' . $parent_product_cat->name . '<i
                            class="fa fa-angle-down float-right mt-1"></i></a><div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">';
		                        foreach ($child_product_cats as $child_product_cat) {
			                        echo '<a href="' . get_term_link($child_product_cat->term_id) . '"  class="dropdown-item">' . $child_product_cat->name . '</a>';
		                        }
		                        echo '</div></div>';
	                        } else {
		                        echo '<a href="' . get_term_link($parent_product_cat->term_id) . '" class="nav-item nav-link">' . $parent_product_cat->name . '</a>';
	                        }
                        }

                        ?>

						</div>
					</nav>
				</div>
				<div class="col-lg-9">
					<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
						<a href="" class="text-decoration-none d-block d-lg-none">
							<?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo_img = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
	                        echo '<img src="' . $logo_img[0] . '" alt="' . get_bloginfo('name') . '" width="150">';
                        } else {
	                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                        } ?>
						</a>
						<button type="button" class="navbar-toggler" data-toggle="collapse"
							data-target="#navbarCollapse">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
							<?php

                        wp_nav_menu([
                        	'theme_location' => 'primary',
                        	'menu_class' => 'navbar-nav mr-auto py-0',
                        	'list_item_class' => 'list-unstyled',
                        	'link_class' => 'nav-item nav-link'
                        ]);

                        ?>
							<div class="navbar-nav ml-auto py-0">

								<?php
                            if (is_user_logged_in()) {
	                            $current_user = wp_get_current_user();
                            ?>
								<a href="<?php echo wc_get_page_permalink('myaccount') ?>" alt="My Account"
									class="nav-item nav-link">
									<?php echo 'Hello, ' . esc_html($current_user->user_firstname) . ' ' . esc_html($current_user->user_lastname); ?>
								</a>
								<a href="<?php echo wp_logout_url(get_permalink()); ?>"
									class="nav-item nav-link">Uitloggen</a>
								<?php
                            } else {
                            ?>
								<a href="<?php echo esc_url(wp_registration_url()); ?>" class="nav-item nav-link">
									<?php _e('Account Maken', 'textdomain'); ?>
								</a>
								<a href="<?php echo esc_url(wp_login_url(get_permalink())); ?>"
									alt="<?php esc_attr_e('Login', 'textdomain'); ?>" class="nav-item nav-link">
									<?php _e('Inloggen', 'textdomain'); ?>
								</a>
								<?php
                            }
                            ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- Navbar End -->
	</header>