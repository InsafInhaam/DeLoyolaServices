<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package codextheme
 */

get_header();
?>

<style>
	.single-blog p {
		margin-bottom: 20px;
	}

	/* Sidebar Container */
	.sidebar {
		/* padding: 20px; */
		/* background-color: #f8f9fa; */
		/* border: 1px solid #ddd; */
		/* border-radius: 8px; */
		/* box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); */
		/* margin-bottom: 20px; */
	}

	/* Widget Area */
	#secondary .widget {
		margin-bottom: 20px;
		padding: 15px;
		background-color: #ffffff;
		border: 1px solid #e0e0e0;
		border-radius: 8px;
		box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
	}

	/* Widget Headings */
	#secondary .widget h2 {
		font-size: 1.25rem;
		font-weight: bold;
		color: #333;
		margin-bottom: 15px;
		border-bottom: 2px solid var(--brote-primary);
		padding-bottom: 5px;
	}

	/* Search Form */
	.widget_search .wp-block-search__input {
		width: 100%;
		padding: 10px;
		border: 1px solid #ddd;
		border-radius: 4px;
		font-size: 1rem;
		/* margin-bottom: 10px; */
	}

	.widget_search .wp-block-search__button {
		display: inline-block;
		padding: 8px;
		background-color: var(--brote-primary);
		color: #fff;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		font-size: 1rem;
		text-transform: uppercase;
	}

	.widget_search .wp-block-search__button:hover {
		background-color: var(--brote-primary);
	}

	/* Latest Posts List */
	.wp-block-latest-posts__list {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.wp-block-latest-posts__list li {
		margin-bottom: 10px;
	}

	.wp-block-latest-posts__list a {
		text-decoration: none;
		color: var(--brote-primary);
		font-weight: 500;
	}

	.wp-block-latest-posts__list a:hover {
		color: var(--brote-primary);
	}

	/* Categories List */
	.wp-block-categories-list {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.wp-block-categories-list li {
		margin-bottom: 10px;
	}

	.wp-block-categories-list a {
		text-decoration: none;
		color: var(--brote-primary);
		font-weight: 500;
	}

	.wp-block-categories-list a:hover {
		color: var(--brote-primary);
	}
</style>

<main id="primary" class="single-blog site-main mt-5">
	<div class="container">
		<div class="row">
			<!-- Main Content Area -->
			<div class="col-md-9">
				<?php
				while (have_posts()):
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-wrapper mb-5'); ?>>
						<!-- Featured Image -->
						<?php if (has_post_thumbnail()): ?>
							<div class="single-post-image mb-4">
								<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>"
									class="img-fluid rounded shadow-sm">
							</div>
						<?php endif; ?>

						<!-- Post Title -->
						<header class="single-post-header mb-4">
							<h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
							<ul class="list-inline text-muted">
								<li class="list-inline-item">
									<i class="far fa-user"></i> By <?php the_author_posts_link(); ?>
								</li>
								<li class="list-inline-item">
									<i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?>
								</li>
								<li class="list-inline-item">
									<i class="far fa-comments"></i>
									<?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
								</li>
							</ul>
						</header>

						<!-- Post Content -->
						<div class="single-post-content">
							<?php the_content(); ?>
						</div>

						<!-- Post Tags -->
						<?php if (has_tag()): ?>
							<div class="single-post-tags mt-4">
								<h5>Tags:</h5>
								<ul class="list-inline">
									<?php the_tags('<li class="list-inline-item badge bg-primary">', '</li><li class="list-inline-item badge bg-primary">', '</li>'); ?>
								</ul>
							</div>
						<?php endif; ?>

						<!-- Navigation -->
						<nav class="single-post-navigation my-5">
							<?php
							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">Previous:</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">Next:</span> <span class="nav-title">%title</span>',
								)
							);
							?>
						</nav>
					</article>
					<?php

					// Comments Section
					// if (comments_open() || get_comments_number()):
					?>
					<!-- <div class="comments-section">
							<?php //comments_template(); ?>
						</div> -->
					<?php
					// endif;
				
				endwhile;
				?>
			</div>

			<!-- Sidebar Area -->
			<div class="col-md-3">
				<aside class="sidebar">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</div>
</main>
<!-- #main -->

<?php
get_footer();
