<!--Blog One Start-->
<section class="blog-one">
    <div class="blog-one-shape"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/blog-one-shape.png);">
    </div>
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">Latest News & Articles</span>
            <h2 class="section-title__title">Learn More from Our <br> Blog Posts</h2>
        </div>
        <div class="owl-carousel owl-theme thm-owl__carousel blog-one__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": true,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>

            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/images/blog/default.jpg';
                    $post_date = get_the_author('d M');
                    $author = get_the_author();
                    $comments_count = get_comments_number();
                    $categories = get_the_category();
                    $category_name = $categories ? esc_html($categories[0]->name) : 'Uncategorized';
                    ?>
                    <!--Blog One Single Start-->
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-1-1.jpg" alt="">
                            <a href="<?php the_permalink(); ?>">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>
                                    <?php $post_date; ?>
                                </p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li>
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <i class="far fa-user-circle"></i> by <?php echo esc_html($author) ?> </a>
                                </li>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="far fa-comments"></i> <?php echo $comments_count; ?> Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="blog-one__btn-box">
                                <a href="<?php the_permalink(); ?>">
                                    Read More <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="blog-one__tag">
                                <p><?php echo esc_html($category_name) ?></p>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php ecs_html_e('No posts found.', 'codextheme') ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--Blog One End-->