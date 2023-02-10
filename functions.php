<?php
/**
 * shoplux-cstm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shoplux-cstm
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shoplux_cstm_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on shoplux-cstm, use a find and replace
	 * to change 'shoplux-cstm' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('shoplux-cstm', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__('Primary', 'shoplux-cstm'),
			'mobile' => esc_html__('Mobile', 'shoplux-cstm'),
			'topbar' => esc_html__('Top Bar', 'shoplux-cstm'),
			'footer-1' => esc_html__('Footer 1', 'shoplux-cstm'),
			'footer-2' => esc_html__('Footer 2', 'shoplux-cstm'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'shoplux_cstm_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'shoplux_cstm_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shoplux_cstm_content_width()
{
	$GLOBALS['content_width'] = apply_filters('shoplux_cstm_content_width', 640);
}
add_action('after_setup_theme', 'shoplux_cstm_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shoplux_cstm_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'shoplux-cstm'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'shoplux-cstm'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'shoplux_cstm_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function shoplux_cstm_scripts()
{
	wp_enqueue_style('shoplux-cstm-style', get_stylesheet_uri(), array(), _S_VERSION);

	/**
	 * Enqueue styles
	 * */
	wp_enqueue_style('shoplux-poppins-font', "https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap", array(), _S_VERSION);
	wp_enqueue_style('shoplux-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), _S_VERSION);
	wp_enqueue_style('shoplux-owlcarousel', get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.carousel.min.css", array(), _S_VERSION);
	wp_enqueue_style('shoplux-style', get_template_directory_uri() . "/assets/css/style.css", array(), _S_VERSION);


	wp_style_add_data('shoplux-cstm-style', 'rtl', 'replace');


	// wp_enqueue_script('shoplux-cstm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	// wp_enqueue_script('shoplux-cstm-resp-menu', get_template_directory_uri() . '/assets/js/responsive_menu.js', array(), _S_VERSION);

	wp_enqueue_script('shoplux-cstm-jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true);
	wp_enqueue_script('shoplux-cstm-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array(), '4.4.1', true);

	wp_enqueue_script('shoplux-cstm-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('shoplux-cstm-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('shoplux-cstm-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_woocommerce() || is_cart() || is_checkout()) {
		wp_enqueue_script('qty-cstm-btn', get_template_directory_uri() . '/assets/js/qty-adjust.js', array(), _S_VERSION, true);
	}

}
add_action('wp_enqueue_scripts', 'shoplux_cstm_scripts');

/**
 * Add class to link of navigation menu
 * Example: <a href="" class="the classes go here">Menu Item</a>
 */
function add_menu_link_class($atts, $item, $args)
{
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

/**
 * Add class to list items of navigation menu
 * Example: <a href="" class="the classes go here">Menu Item</a>
 */
function add_menu_list_item_class($classes, $item, $args)
{
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Theme Standard UI Files
 */
require get_template_directory() . '/inc/social-media.php';
require get_template_directory() . '/inc/get_header_custom_content.php';
require get_template_directory() . '/template-parts/extra_hp_section.php';
require get_template_directory() . '/template-parts/woocommerce/wc_cart_total.php';
require get_template_directory() . '/template-parts/woocommerce/get_featured_with_filter.php';
// require get_template_directory() . '/template-parts/woocommerce/extra_page_contents.php';
// require get_template_directory() . '/template-parts/woocommerce/product_details_page_contents.php';
// require get_template_directory() . '/template-parts/woocommerce/contact_page_contents.php';
// require get_template_directory() . '/template-parts/woocommerce/checkout_page_contents.php';
// require get_template_directory() . '/template-parts/woocommerce/cart_page_contents.php';
