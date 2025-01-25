<?php
/**
 * codextheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codextheme
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
function codextheme_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on codextheme, use a find and replace
	 * to change 'codextheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('codextheme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

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
			'primary_menu' => esc_html__('Primary', 'codextheme'),
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
			'codextheme_custom_background_args',
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
add_action('after_setup_theme', 'codextheme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codextheme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('codextheme_content_width', 640);
}
add_action('after_setup_theme', 'codextheme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codextheme_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'codextheme'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'codextheme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'codextheme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function codextheme_scripts()
{
	wp_enqueue_style('codextheme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('codextheme-style', 'rtl', 'replace');

	wp_enqueue_script('codextheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'codextheme_scripts');

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



// Function to enqueue all styles and scripts for the theme
function enqueue_theme_assets() {
    // Define the theme directory URI for assets
    $theme_directory = get_template_directory_uri();

    /**
     * Enqueue Styles
     */

    // Critical styles
    wp_enqueue_style('bootstrap', $theme_directory . '/assets/vendors/bootstrap/css/bootstrap.min.css', [], null);
    // wp_enqueue_style('main-style', $theme_directory . '/assets/css/brote.css.php', [], null);
    // wp_enqueue_style('responsive-style', $theme_directory . '/assets/css/brote-responsive.css', ['main-style'], null);

    // Slider-specific styles
    wp_enqueue_style('main-slider-animate', $theme_directory . '/assets/vendors/animate/animate.min.css', [], '1.0');
    wp_enqueue_style('main-slider-swiper', $theme_directory . '/assets/vendors/swiper/swiper.min.css', [], '1.0');
    wp_enqueue_style('main-slider-fontawesome', $theme_directory . '/assets/vendors/fontawesome/css/all.min.css', [], '1.0');
    // wp_enqueue_style('main-slider-custom', $theme_directory . '/assets/css/custom-slider.css', [], '1.0'); 


    // Preconnect for fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">';

    /**
     * Enqueue Scripts
     */

    // Critical scripts
    wp_enqueue_script('jquery', $theme_directory . '/assets/vendors/jquery/jquery-3.6.0.min.js', [], null, true);

    // Slider-specific scripts
    wp_enqueue_script('main-slider-swiper', $theme_directory . '/assets/vendors/swiper/swiper.min.js', [], '1.0', true);
    wp_enqueue_script('main-slider-init', $theme_directory . '/assets/js/main-slider.js', ['main-slider-swiper'], '1.0', true);

    wp_enqueue_script('bootstrap-js', $theme_directory . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', ['main-slider-swiper'], '1.0', true);

    // Custom scripts
    wp_enqueue_script('defer-scripts', $theme_directory . '/js/custom.js', [], null, true);
    // wp_enqueue_script('brote-scripts', $theme_directory . '/assets/js/brote.js', [], null, true); // Uncomment if needed

    // Inline script for Swiper initialization
    wp_add_inline_script('main-slider-init', "
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.thm-swiper__slider', {
                slidesPerView: 1,
                loop: true,
                effect: 'fade',
                pagination: {
                    el: '#main-slider-pagination',
                    type: 'bullets',
                    clickable: true
                },
                navigation: {
                    nextEl: '#main-slider__swiper-button-next',
                    prevEl: '#main-slider__swiper-button-prev'
                },
                autoplay: {
                    delay: 5000
                }
            });
        });
    ");
}


// Hook the function to enqueue scripts and styles
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Site Information',
        'menu_title'    => 'Site Info',
        'menu_slug'     => 'site-info',
        'capability'    => 'edit_posts',
        'redirect'      => false,
    ]);
}


// shortcode file
include get_template_directory() . '/inc/shortcodes.php';


// register footer menu 
function register_footer_menu() {
	register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', 'register_footer_menu');




// Assuming you're using Composer
// require get_template_directory() . '/settings/MobileDetect.php';

// Now you can instantiate Mobile_Detect
// $detect = new MobileDetect();


