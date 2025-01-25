<?php
/**
 * The main template file
 *
 * @package codextheme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/images/blog/default.jpg';
                        $post_date = get_the_date('d M');
                        $author = get_the_author();
                        $comments_count = get_comments_number();
                        $categories = get_the_category();
                        $category_name = $categories ? esc_html($categories[0]->name) : 'Uncategorized';
                        ?>
                        <!-- Blog Page Single Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <a href="<?php the_permalink(); ?>">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date">
                                        <p>
                                            <?php echo $post_date; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li>
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <i class="far fa-user-circle"></i> by <?php echo esc_html($author); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php the_permalink(); ?>#comments">
                                                <i class="far fa-comments"></i> <?php echo $comments_count; ?> Comments
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="blog-one__btn-box">
                                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="blog-one__tag">
                                        <p><?php echo esc_html($category_name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Page Single End -->
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php
                        // Pagination
                        the_posts_pagination(array(
                            'mid_size' => 2,
                            'prev_text' => __('&laquo; Previous', 'codextheme'),
                            'next_text' => __('Next &raquo;', 'codextheme'),
                        ));
                        ?>
                    </div>
                <?php else: ?>
                    <p><?php esc_html_e('No posts found.', 'codextheme'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
