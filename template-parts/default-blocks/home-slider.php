<!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
                "slidesPerView": 1,          
                "loop": true, 
                "effect": "fade", 
                "pagination": { 
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            <?php
            if (have_rows('home_banner_slides', 'option')): // Use 'option' for options page
                while (have_rows('home_banner_slides', 'option')):
                    the_row();

                    $slides_image = get_sub_field('slides_image'); // Returns an array
                    $slides_title = get_sub_field('slides_title');
                    $slides_description = get_sub_field('slides_description');
                    $slides_cta = get_sub_field('slides_cta');
                    $slides_cta_link = get_sub_field('slides_cta_link');

                    // Extract URL from image field
                    $slides_image_url = $slides_image ? $slides_image['url'] : '';

                    // Debugging
                    echo '<pre>';
                    echo 'Image URL: ' . esc_url($slides_image_url) . "\n";
                    echo 'Title: ' . esc_html($slides_title) . "\n";
                    echo 'Description: ' . esc_html($slides_description) . "\n";
                    echo 'CTA: ' . esc_html($slides_cta) . "\n";
                    echo 'CTA Link: ' . esc_url($slides_cta_link) . "\n";
                    echo '</pre>';
                    ?>

                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(<?php echo esc_url($slides_image_url); ?>);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">
                                            <?php echo esc_html($slides_title); ?>
                                        </p>
                                        <h2 class="main-slider__title">
                                            <?php echo esc_html($slides_description); ?>
                                        </h2>
                                        <div class="main-slider__btn-box">
                                            <a href="<?php echo esc_url($slides_cta_link); ?>" class="thm-btn main-slider__btn">
                                                <?php echo esc_html($slides_cta); ?>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;
            else:
                // Debugging: No rows found
                echo '<p>No slides found. Check if "home_banner_slides" contains data in the options page.</p>';
            endif;
            ?>

        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->