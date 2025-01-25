<?php
// Register Shortcode for Call to Action
function cta_shortcode($atts)
{
    ?>
    <style>
        /* Call to Action Section */
        .cta-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border-top: 2px solid var(--brote-primary);
            border-bottom: 2px solid var(--brote-primary);
            text-align: center;
            margin: 20px 0;
        }

        .cta-text {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cta-text a {
            color: var(--brote-primary);
            text-decoration: none;
        }

        .cta-text a:hover {
            color: var(--brote-primary);
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--brote-primary);
            color: #fff !important;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: var(--brote-primary);
        }

        .icon-phone {
            font-size: 1.5rem;
            color: var(--brote-primary);
        }
    </style>
    <?php
    // Attributes with default values
    $atts = shortcode_atts(
        array(
            'phone' => '123-456-7890', // Default phone number
            'button_text' => 'Contact Us', // Default button text
            'button_link' => '#', // Default button link
            'heading' => 'Get in Touch Today!', // Default heading text
            'subtext' => 'We’re here to help you achieve your goals. Contact us now to learn more.', // Default subtext
        ),
        $atts,
        'cta'
    );

    // HTML Output
    return '
    <div class="cta-section">
        <h2 class="cta-heading">' . esc_html($atts['heading']) . '</h2>
        <p class="cta-subtext">' . esc_html($atts['subtext']) . '</p>
        <p class="cta-text"><span class="icon-phone"></span> Call us today: <a href="tel:' . esc_attr($atts['phone']) . '">' . esc_html($atts['phone']) . '</a></p>
        <a href="' . esc_url($atts['button_link']) . '" class="cta-button">' . esc_html($atts['button_text']) . '</a>
    </div>';
}
add_shortcode('cta', 'cta_shortcode');


function feature_services()
{
    // Check if there are rows in the ACF repeater field
    if (have_rows('services')): ?>
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
                                            <a href="<?php echo esc_url($service_link); ?>"><?php echo esc_html($service_title); ?></a>
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
    <?php endif;
}

add_shortcode('feature-services', 'feature_services');



function contact_page()
{
    ?>
    <section class="contact-page-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page-two__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Contact Now</span>
                            <h2 class="section-title__title">Feel Free to Write us</h2>
                        </div>
                        <ul class="list-unstyled contact-page-two__info">
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:brote@company.com">brote@company.com</a></p>
                                    <h5>Send mail</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="text">
                                    <p>Call Anytime</p>
                                    <h5><a href="tel:2300068603">+23 (000) 68 603</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-location-1"></span>
                                </div>
                                <div class="text">
                                    <p>88 Kilda Broklyn Road</p>
                                    <h5>New York, USA</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page-two__right">
                        <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a Message <i
                                                class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

add_shortcode('contact-block-shortcode', 'contact_page');

