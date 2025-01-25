<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codextheme
 */
?>

<?php
$logo_image = get_field('logo_image', 'option');
$email_address = get_field('email_address', 'option');
$phone_number = get_field('phone_number', 'option');
$office_address = get_field('office_address', 'option');
$google_map_iframe = get_field('google_map_iframe', 'option')
	?>

<!--Google Map Start-->
<section class="google-map">
	<iframe src="<?php echo esc_html($google_map_iframe); ?>" class="google-map__one" allowfullscreen></iframe>
</section>
<!--Google Map End-->

<!--Information Start-->
<section class="information">
	<div class="container">
		<div class="information__inner">
			<div class="information__logo-box">
				<div class="information__border-1"></div>
				<div class="information__border-2"></div>
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo esc_html($logo_image['url']); ?>"
						alt="<?php echo esc_html($logo_image['alt']); ?>">
				</a>
			</div>
			<ul class="list-unstyled information__list">
				<li>
					<div class="information__icon">
						<span class="icon-phone"></span>
					</div>
					<div class="information__content">
						<p class="information__sub-title">Call anytime</p>
						<h5 class="information__number">
							<a
								href="tel:<?php echo esc_html($phone_number); ?>"><?php echo esc_html($phone_number); ?></a>
						</h5>
					</div>
				</li>
				<li>
					<div class="information__icon">
						<span class="icon-envelope"></span>
					</div>
					<div class="information__content">
						<p class="information__sub-title">Send email</p>
						<h5 class="information__number">
							<a
								href="mailto:<?php echo esc_html($email_address) ?>"><?php echo esc_html($email_address) ?></a>
						</h5>
					</div>
				</li>
				<li>
					<div class="information__icon">
						<span class="icon-location-1"></span>
					</div>
					<div class="information__content">
						<p class="information__sub-title">Visit office</p>
						<h5 class="information__number"><?php echo $office_address; ?></h5>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--Information End-->

<!--Site Footer Start-->
<footer class="site-footer">
	<div class="site-footer-shape-1"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/site-footer-shape-1.png);">
	</div>
	<div class="site-footer-shape-two">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/site-footer-shape-2.png" alt="">
	</div>
	<div class="site-footer__top">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="footer-widget__column footer-widget__about">
						<h3 class="footer-widget__title">Explore</h3>
						<div class="footer-widget__about-text-box">
							<p class="footer-widget__about-text"> Discover insightful articles, stay updated with the
								latest trends, and explore a wealth of resources designed to enrich your knowledge and
								understanding. Join us on a journey of continuous learning and inspiration.
							</p>
						</div>
						<?php if (have_rows('social_media_url', 'option')): ?>
							<div class="site-footer__social">
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
				<div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
					<div class="footer-widget__column footer-widget__links clearfix">
						<h3 class="footer-widget__title">Links</h3>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footer-menu',
							'menu_class' => 'footer-widget__links-list list-unstyled clearfix'
						));
						?>
					</div>
				</div>
				<!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
					<div class="footer-widget__column footer-widget__articles clearfix">
						<h3 class="footer-widget__title">Articles</h3>
						<ul class="footer-widget__articles-list list-unstyled clearfix">
							<li>
								<div class="footer-widget__articles-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/footer-widget-articles-img-1.jpg"
										alt="">
									<a href="blog-details.html"><span class="fa fa-link"></span></a>
								</div>
								<div class="footer-widget__articles-content">
									<p class="footer-widget__articles-date">26 Jan, 2022</p>
									<h5 class="footer-widget__articles-sub-title"><a href="blog-details.html">6
											Cleaning Hacks
											that will Blow your Mind!</a></h5>
								</div>
							</li>
							<li>
								<div class="footer-widget__articles-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/footer-widget-articles-img-2.jpg"
										alt="">
									<a href="blog-details.html"><span class="fa fa-link"></span></a>
								</div>
								<div class="footer-widget__articles-content">
									<p class="footer-widget__articles-date">26 Jan, 2022</p>
									<h5 class="footer-widget__articles-sub-title"><a href="blog-details.html">6
											Cleaning Hacks
											that will Blow your Mind!</a></h5>
								</div>
							</li>
						</ul>
					</div>
				</div> -->
				<div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="footer-widget__column footer-widget__newsletter">
						<h3 class="footer-widget__title">Newsletter</h3>
						<p class="footer-widget__newsletter-text">Subscribe our newsletter to get <br> our
							latest update & news</p>
						<form class="footer-widget__newsletter-form">
							<div class="footer-widget__newsletter-input-box">
								<input type="email" placeholder="Email address" name="email">
								<button type="submit" class="footer-widget__newsletter-btn"><i
										class="far fa-paper-plane"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="site-footer__bottom-inner">
						<p class="site-footer__bottom-text">© Copyright 2025 by <a href="#">scalelabz.com</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--Site Footer End-->

</div><!-- /.page-wrapper -->

<?php
$logo_image = get_field('logo_image', 'option');
$email_address = get_field('email_address', 'option');
$phone_number = get_field('phone_number', 'option');
?>
<style>
	.logo-box img {
		width: 50%;
		background: #fff;
		border-radius: 50%;
	}
</style>
<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

		<div class="logo-box">
			<a href="<?php echo site_url(); ?>" aria-label="logo image">
				<img src="<?php echo esc_html($logo_image['url']); ?>"
					alt="<?php echo esc_html($logo_image['alt']); ?>">
			</a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->

		<ul class="mobile-nav__contact list-unstyled">
			<li>
				<i class="fa fa-envelope"></i>
				<a href="mailto:<?php echo esc_html($email_address); ?>">
					<?php echo esc_html($email_address) ?>
				</a>
			</li>
			<li>
				<i class="fa fa-phone-alt"></i>
				<a href="tel:<?php echo esc_html($phone_number); ?>">
					<?php echo esc_html($phone_number); ?>
				</a>
			</li>
		</ul><!-- /.mobile-nav__contact -->
		<div class="mobile-nav__top">
			<?php if (have_rows('social_media_url', 'option')): ?>
				<div class="mobile-nav__social">
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
			<!-- /.mobile-nav__social -->
		</div>
		<!-- /.mobile-nav__top -->
	</div>
	<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
	<div class="search-popup__overlay search-toggler"></div>
	<!-- /.search-popup__overlay -->
	<div class="search-popup__content">
		<form action="#">
			<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
			<input type="text" id="search" placeholder="Search Here..." />
			<button type="submit" aria-label="search submit" class="thm-btn">
				<i class="icon-magnifying-glass"></i>
			</button>
		</form>
	</div>
	<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>

</body>

</html>