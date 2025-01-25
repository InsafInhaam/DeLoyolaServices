<?php get_header(); ?>
<!--Feature One Start-->
<?php //include get_template_directory() . '/template-parts/default-blocks/feature-services.php'; ?>
<!--Feature One End-->

<?php
	$phone_number = get_field('phone_number', 'option');
?>
<!--Welcome One Start-->
<section class="welcome-one pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="welcome-one__left">
                    <!-- <div class="welcome-one__bg"
                            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/welcome-one-bg.png);">
                        </div> -->
                    <div class="welcome-one__main-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="welcome-one__circle-one"></div>
                        <div class="welcome-one__img-1">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/welcome-one-img-1.webp" alt="">
                            <!-- <div class="welcome-one__small-img-1 float-bob-x">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/welcome-one-small-img-1.jpg"
                                        alt="">
                                </div> -->
                            <!-- <div class="welcome-one__small-img-2 float-bob-y">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/welcome-one-small-img-2.jpg"
                                        alt="">
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our Introduction</span>
                        <h2 class="section-title__title">Welcome to Prime Clean Services</h2>
                    </div>
                    <p class="welcome-one__text-1">At Prime Clean Services, we are dedicated to providing top-notch cleaning solutions tailored to meet your unique needs. Whether it's your home, office, or commercial space, we are here to help you maintain a clean and healthy environment.</p>
                    <p class="welcome-one__text-2">We pride ourselves on delivering exceptional services with a commitment to customer satisfaction. Our team of experienced professionals ensures that every corner sparkles with perfection, giving you peace of mind and more time to focus on what matters most.</p>
                    <div class="welcome-one__points-box">
                        <ul class="list-unstyled welcome-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>We are Committed</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Highly Rated Cleaning</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled welcome-one__points welcome-one__points-two">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Insured & Bonded</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Trusted Professionals</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="welcome-one__btn-call-box">
                        <div class="welcome-one__btn-box">
                            <a href="/contact" class="thm-btn welcome-one__btn">
                                Contact us <i
                                    class="fa fa-angle-right"></i>
                                </a>
                        </div>
                        <div class="welcome-one__call-box">
                            <div class="welcome-one__call-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="welcome-one__call-content">
                                <p class="welcome-one__call-sub-title">Call Anytime</p>
                                <h5 class="welcome-one__call-number">
                                    <a href="tel:<?php echo esc_html($phone_number); ?>">
                                        <?php echo esc_html($phone_number); ?>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Services One Start-->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">What We’re Offering</span>
            <h2 class="section-title__title">Providing the Best Services for Our Customers</h2>
        </div>

        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__single-top-bubble"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-top-bubble.png);">
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-plumbing"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <div class="services-one__title-box">
                            <h3 class="services-one__title"><a href="plumbing-services.html">Plumbing
                                    Service</a></h3>
                        </div>
                        <div class="services-one__text-box">
                            <p class="services-one__text">Our experienced plumbers are ready to tackle any plumbing issue, from leaks and blockages to installations and repairs, ensuring your system runs smoothly.</p>
                        </div>
                    </div>
                    <div class="services-one__overly-box"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-overlay-bg-1.png);">
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="services-one__single">
                    <div class="services-one__single-top-bubble"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-top-bubble.png);">
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-worker"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <div class="services-one__title-box">
                            <h3 class="services-one__title"><a href="office-cleaning.html">Office Cleaning</a>
                            </h3>
                        </div>
                        <div class="services-one__text-box">
                            <p class="services-one__text">Keep your workspace spotless with our professional office cleaning services, designed to create a clean and productive environment for your team.</p>
                        </div>
                    </div>
                    <div class="services-one__overly-box"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-overlay-bg-1.png);">
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="services-one__single">
                    <div class="services-one__single-top-bubble"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-top-bubble.png);">
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-laundry"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <div class="services-one__title-box">
                            <h3 class="services-one__title"><a href="laundry-services.html">Laundry Service</a>
                            </h3>
                        </div>
                        <div class="services-one__text-box">
                            <p class="services-one__text">Say goodbye to laundry stress with our reliable laundry service, offering pickup, cleaning, and delivery of your clothes, fresh and neatly folded.</p>
                        </div>
                    </div>
                    <div class="services-one__overly-box"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-overlay-bg-1.png);">
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="services-one__single">
                    <div class="services-one__single-top-bubble"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-top-bubble.png);">
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-washing-plate"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <div class="services-one__title-box">
                            <h3 class="services-one__title"><a href="kitchen-cleaning.html">Kitchen Cleaning</a>
                            </h3>
                        </div>
                        <div class="services-one__text-box">
                            <p class="services-one__text">Our kitchen cleaning experts will leave your cooking space sparkling, tackling everything from countertops to appliances for a hygienic and inviting kitchen.</p>
                        </div>
                    </div>
                    <div class="services-one__overly-box"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-overlay-bg-1.png);">
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="services-one__single">
                    <div class="services-one__single-top-bubble"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-top-bubble.png);">
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-window-cleaner"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <div class="services-one__title-box">
                            <h3 class="services-one__title"><a href="window-cleaning.html">Window Cleaning</a>
                            </h3>
                        </div>
                        <div class="services-one__text-box">
                            <p class="services-one__text">Let natural light shine through with our window cleaning service, removing dirt and streaks to give you crystal-clear views.</p>
                        </div>
                    </div>
                    <div class="services-one__overly-box"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-overlay-bg-1.png);">
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="services-one__single">
                    <div class="services-one__single-top-bubble"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-top-bubble.png);">
                    </div>
                    <div class="services-one__icon">
                        <span class="icon-sanitary"></span>
                    </div>
                    <div class="services-one__single-inner">
                        <div class="services-one__title-box">
                            <h3 class="services-one__title"><a href="toilet-cleaning.html">Toilet Cleaning</a>
                            </h3>
                        </div>
                        <div class="services-one__text-box">
                            <p class="services-one__text">Ensure your restrooms are always fresh and sanitary with our thorough toilet cleaning service, using effective techniques to maintain hygiene.</p>
                        </div>
                    </div>
                    <div class="services-one__overly-box"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/services-one-single-overlay-bg-1.png);">
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
        </div>

    </div>
</section>
<!--Services One End-->

<!--Counter One Start-->
<section class="counter-one">
    <div class="container">
        <div class="counter-one__inner wow fadeInUp" data-wow-delay="100ms">
            <div class="counter-one-bg-1"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/counter-one-bg-1.png);">
            </div>
            <div class="counter-one-bg-2"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/counter-one-bg-2.png);">
            </div>
            <ul class="list-unstyled counter-one__list">
                <li>
                    <div class="counter-one__icon">
                        <span class="icon-laundry-1"></span>
                    </div>
                    <div class="counter-one__count-box">
                        <div class="counter-one__count-box-inner">
                            <h3 class="odometer" data-count="2562">00</h3>
                            <span class="counter-one__plus">+</span>
                        </div>
                        <p class="counter-one__text">Satisfied Clients</p>
                    </div>
                </li>
                <li>
                    <div class="counter-one__icon">
                        <span class="icon-wipe"></span>
                    </div>
                    <div class="counter-one__count-box">
                        <div class="counter-one__count-box-inner">
                            <h3 class="odometer" data-count="562">00</h3>
                            <span class="counter-one__plus">+</span>
                        </div>
                        <p class="counter-one__text">Active Project</p>
                    </div>
                </li>
                <li>
                    <div class="counter-one__icon">
                        <span class="icon-trophy"></span>
                    </div>
                    <div class="counter-one__count-box">
                        <div class="counter-one__count-box-inner">
                            <h3 class="odometer" data-count="33">00</h3>
                            <span class="counter-one__plus">+</span>
                        </div>
                        <p class="counter-one__text">Winning Award</p>
                    </div>
                </li>
                <li>
                    <div class="counter-one__icon">
                        <span class="icon-teamwork"></span>
                    </div>
                    <div class="counter-one__count-box">
                        <div class="counter-one__count-box-inner">
                            <h3 class="odometer" data-count="552">00</h3>
                            <span class="counter-one__plus">+</span>
                        </div>
                        <p class="counter-one__text">Expert Teams</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Counter One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/testimonial-shape.png);">
    </div>
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">What They’re Saying</span>
            <h2 class="section-title__title">Some Feedbacks <br> from Our Customers</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-one__inner">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel" data-owl-options='{
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
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                        <!--Testimonial One Single Start-->
                        <?php if (have_rows('testimonials')): ?>
                            <?php
                            while (have_rows('testimonials')):
                                the_row();
                                $feedback_text = get_sub_field('feedback_text');
                                $client_name = get_sub_field('client_name');
                                $client_position = get_sub_field('client_position');
                                ?>
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text">
                                        <?php echo esc_html($feedback_text); ?>
                                    </p>
                                    <div class="testimonial-one__client-details">
                                        <h3 class="testimonial-one__client-name">
                                            <?php echo esc_html($client_name); ?>
                                        </h3>
                                        <p class="testimonial-one__client-sub-title">
                                            <?php echo esc_html($client_position); ?>
                                        </p>
                                    </div>
                                    <!-- <div class="testimonial-one__client-img">
                                            <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                            <div class="testimonial-one__client-img-boxs"></div>
                                        </div> -->
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No testimonials found.</p>
                        <?php endif; ?>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--Brand One Start-->
<!-- <section class="brand-one">
    <div class="container">
        <div class="brand-one__inner">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one__main-content">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                           "0": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "375": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "575": {
                               "spaceBetween": 30,
                               "slidesPerView": 3
                           },
                           "767": {
                               "spaceBetween": 50,
                               "slidesPerView": 4
                           },
                           "991": {
                               "spaceBetween": 50,
                               "slidesPerView": 5
                           },
                           "1199": {
                               "spaceBetween": 100,
                               "slidesPerView": 5
                           }
                       }}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-1.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-2.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-3.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-4.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-5.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-1.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-2.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-3.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-4.png"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/brand/brand-1-5.png"
                                        alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Brand One End-->

<!--Contact One Start-->
<section class="contact-one">
    <div class="contact-one-shape-4 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shapes/contact-one-shape-4.png" alt="">
    </div>
    <div class="contact-one__container">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="contact-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Get a Free Estimate</span>
                            <h2 class="section-title__title">Contact for Services</h2>
                        </div>
                        <form action="<?php echo get_template_directory_uri(); ?>/assets/inc/sendemail.php"
                            class="contact-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" placeholder="Full name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="email" placeholder="Your email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" placeholder="Phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected>Select service</option>
                                            <option value="1">service One</option>
                                            <option value="2">service Two</option>
                                            <option value="3">service Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__form-input-box text-message-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn contact-one__btn">Send a message <i
                                                class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-one__right">
                        <div class="contact-one-shape-1"></div>
                        <div class="contact-one-shape-2"></div>
                        <div class="contact-one-shape-3"></div>
                        <div class="contact-one__img">
                            <img src="https://eu-images.contentstack.com/v3/assets/blt10e444bce2d36aa8/blt00bc11b3553358e6/6524fe47c39fc890e2dd64e2/Call-Center.jpg?width=1280&auto=webp&quality=95&format=jpg&disable=upscale"
                                alt="">
                        </div>
                        <div class="contact-one__call">
                            <div class="contact-one__call-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-one__call-content">
                                <p class="contact-one__call-sub-title">Call Anytime</p>
                                <h5 class="contact-one__call-number"><a href="tel:2300068603">+23 (000) 68
                                        603</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->

<?php // include get_template_directory() . '/template-parts/sections/blog/block.php'; ?>




<?php get_footer() ?>