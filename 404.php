<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codextheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<section class="error-page">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="error-page__inner">
							<!-- <div class="error-page__title-box">
								<h2 class="error-page__title">404</h2>
							</div> -->
							<h3 class="error-page__tagline">Sorry we can't find that page!</h3>
							<p class="error-page__text">The page you are looking for was never existed.</p>
							<form class="error-page__form">
								<div class="error-page__form-input">
									<input type="search" placeholder="Search here">
									<button type="submit"><i class="icon-magnifying-glass"></i></button>
								</div>
							</form>
							<a href="/" class="thm-btn error-page__btn">
								Back to Home <i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="error-page__img float-bob-x">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/error-page-img.png"
								alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();
