<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codextheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container my-5">
		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', 'page');
		endwhile; // End of the loop.
		?>

		<?php if (is_page(16)): ?>
			<?php if (have_rows('services')): ?>
				<section class="services-page-1">
					<div class="container">
						<div class="row">
							<?php
							// Loop through the rows in the repeater field
							while (have_rows('services')):
								the_row();

								// Fetch subfield values
								$service_image = get_sub_field('service_image');
								$service_icon = get_sub_field('service_icon');
								$service_title = get_sub_field('service_title');
								$service_description = get_sub_field('service_description');
								$service_link = get_sub_field('service_link');
								?>
								<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
									<div class="services-two__single">
										<div class="services-two__img-box">
											<div class="services-two__img">
												<!-- Display the service image -->
												<?php if ($service_image): ?>
													<img src="<?php echo esc_url($service_image['url']); ?>"
														alt="<?php echo esc_attr($service_image['alt']); ?>">
												<?php endif; ?>
											</div>
											<div class="services-two__icon">
												<!-- Display the service icon -->
												<?php if ($service_icon): ?>
													<span class="<?php echo esc_attr($service_icon); ?>"></span>
												<?php endif; ?>
											</div>
										</div>
										<div class="services-two__content">
											<h3 class="services-two__title">
												<!-- Display the service title -->
												<?php if ($service_link): ?>
													<a
														href="<?php echo esc_url($service_link); ?>"><?php echo esc_html($service_title); ?></a>
												<?php else: ?>
													<?php echo esc_html($service_title); ?>
												<?php endif; ?>
											</h3>
											<p class="services-two__text"><?php echo ($service_description); ?></p>
											<!-- Display the read more button -->
											<?php if ($service_link): ?>
												<a href="<?php echo esc_url($service_link); ?>" class="services-two__btn">read more</a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php else: ?>
				<p>No services found.</p>
			<?php endif; ?>
		<?php endif; ?>

	</div>
</main>
<!-- #main -->

<?php
get_footer();
