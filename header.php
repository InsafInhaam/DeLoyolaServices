<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codextheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>


<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
		if (is_home()) {
			echo get_bloginfo('name') . ' || ' . get_bloginfo('description');
		} elseif (is_single()) {
			wp_title('') . ' || ' . get_bloginfo('name');
		} elseif (is_page()) {
			wp_title('') . ' || ' . get_bloginfo('name');
		} else {
			wp_title('') . ' || ' . get_bloginfo('name');
		}
		?>
	</title>

	<?php wp_head(); ?>

	<?php include_once get_template_directory() . '/assets/css/brote.css.php'; ?>
	<?php include_once get_template_directory() . '/assets/css/brote-responsive.css.php'; ?>

	<script>
		var themeDirectory = "<?php echo get_template_directory_uri(); ?>";
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- <div class="custom-cursor__cursor"></div> -->
	<!-- <div class="custom-cursor__cursor-two"></div> -->

	<!-- <div class="preloader">
		<div class="preloader__image"></div>
	</div> -->
	<!-- /.preloader -->

	<style>
		.main-menu__main-menu-box ul#menu-main-menu {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 15px;
			/* height: 100%; */
		}

		.main-menu__main-menu-box ul#menu-main-menu li {
			list-style: none;
			padding-top: 20px;
			padding-bottom: 20px;
			margin: 0 5px;
			/* color: #fff; */
		}

		.main-menu__main-menu-box ul#menu-main-menu li a {
			color: #fff;
		}

		@media screen and (max-width: 1199px) {
			.main-menu__main-menu-box ul#menu-main-menu {
				display: none;
			}
		}
	</style>
	<?php
	$site_name = get_field('site_name', 'option');
	$email_address = get_field('email_address', 'option');
	$phone_number = get_field('phone_number', 'option');
	$office_address = get_field('office_address', 'option');
	$logo_image = get_field('logo_image', 'option');
	$office_hours = get_field('office_hours', 'option');
	$social_media_urls = get_field('social_media_url', 'option');

	// if ($site_name) {
	// 	echo esc_html($site_name);
	// } else {
	// 	echo 'Site name not found.';
	// }
	
	?>
	<div class="page-wrapper">
		<header class="main-header clearfix">
			<div class="main-header__top">
				<div class="main-header__top-social-box">
					<div class="container">
						<div class="main-header__top-social-box-inner">
							<p class="main-header__top-social-text">
								Welcome to our <?php echo esc_html($site_name); ?>!
							</p>
							<?php if (have_rows('social_media_url', 'option')): ?>
								<div class="main-header__top-social">
									<?php while (have_rows('social_media_url', 'option')):
										the_row();
										// Get subfield values
										$social_media_name = get_sub_field('social_media_name', 'option');
										$social_media_links = get_sub_field('social_media_links', 'option');
										$social_media_icon = get_sub_field('social_media_icon', 'option');
										?>
										<a href="<?php echo esc_url($social_media_links) ?>">
											<i class="<?php echo ($social_media_icon) ?>"></i>
										</a>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
				<div class="main-header__top-details">
					<div class="container">
						<div class="main-header__top-details-inner">
							<div class="main-header__logo">
								<a href="/">
									<img src="<?php echo esc_html($logo_image['url']); ?>"
										alt="<?php echo esc_html($logo_image['alt']); ?>">
								</a>
							</div>
							<ul class="list-unstyled main-header__top-details-list">
								<li>
									<div class="icon">
										<span class="icon-message"></span>
									</div>
									<div class="text">
										<h5>
											<a href="mailto:<?php echo esc_html($email_address); ?>">
												<?php echo esc_html($email_address) ?>
											</a>
										</h5>
										<p>Send mail</p>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="icon-time"></span>
									</div>
									<div class="text">
										<h5>Mon to Sun</h5>
										<p>9am - 6pm</p>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="icon-phone-call"></span>
									</div>
									<div class="text">
										<h5>Call Anytime</h5>
										<p>
											<a href="tel:<?php echo esc_html($phone_number); ?>">
												<?php echo esc_html($phone_number); ?>
											</a>
										</p>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="icon-location"></span>
									</div>
									<div class="text">
										<h5><?php echo $office_address; ?></h5>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<nav class="main-menu clearfix">
				<div class="main-menu__wrapper clearfix">
					<div class="container">
						<div class="main-menu__wrapper-inner clearfix">
							<div class="main-menu__left">
								<div class="main-menu__main-menu-box">
									<a href="#" class="mobile-nav__toggler">
										<i class="fa fa-bars"></i>
									</a>
									<?php
									wp_nav_menu([
										'theme_location' => 'primary_menu',
										'menu_class' => 'main-menu__list',
										'container' => false
									]);
									?>
								</div>
							</div>
							<div class="main-menu__right">
								<div class="main-menu__search-box">
									<a href="#" class="main-menu__search search-toggler">
									<svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div>
			<!-- /.sticky-header__content -->
		</div>
		<!-- /.stricky-header -->

		<?php if (is_front_page()): ?>
			<?php include get_template_directory() . '/template-parts/default-blocks/home-slider.php'; ?>
		<?php else: ?>
			<?php include get_template_directory() . '/template-parts/default-blocks/inner-banner.php'; ?>
		<?php endif; ?>