<?php if (have_rows('feature_services')): ?>
    <section class="feature-one">
        <div class="container">
            <div class="row">
                <?php while (have_rows('feature_services')):
                    the_row();
                    $background_image = get_sub_field('background_image')['url'];
                    $icon_image = get_sub_field('icon_image')['url'];
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $button_text = get_sub_field('button_text');
                    $button_link = get_sub_field('button_link');
                    ?>
                    <!--Feature One single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one-single-bg"
                                style="background-image: url(<?php echo esc_url($background_image); ?>);">
                            </div>
                            <div class="feature-one__icon">
                                <img src="<?php echo esc_url($icon_image); ?>" alt="">
                                <div class="feature-one__icon-shape">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/feature-one-icon-shape.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="feature-one__title-box">
                                <div class="feature-one__title-border"></div>
                                <h3 class="feature-one__title">
                                    <a href="<?php echo esc_url($button_link); ?>">
                                        <?php echo esc_html($title); ?>
                                    </a>
                                </h3>
                            </div>
                            <p class="feature-one__text">
                                <?php echo esc_html($description); ?>
                            </p>
                            <div class="feature-one__btn-box">
                                <a href="<?php echo esc_url($button_link); ?>" class="feature-one__btn">
                                    <?php echo esc_html($button_text); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Feature One single End-->
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <p>No services found.</p>
<?php endif; ?>