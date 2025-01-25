<section class="page-header">
    <?php
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $default_image = get_template_directory_uri() . '/assets/images/backgrounds/page-header-bg.jpg';
    $page_title = get_the_title();
    ?>
    <div class="page-header-bg"
        style="background-image: url(<?php echo $featured_image ? esc_url($featured_image) : esc_url($default_image); ?>)">
    </div>
    <div class="page-header-bubble">
        <img src="assets/images/shapes/page-header-bubble.png" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><span>/</span></li>
                <?php if(is_404()): ?>
                    <li>404</li>
                <?php else: ?>
                    <li><?php echo esc_html($page_title); ?></li>
                <?php endif; ?>
            </ul>
            <h2>
                <?php if(is_404()): ?>
                    404
                <?php else: ?>
                    <?php echo esc_html($page_title); ?>
                <?php endif; ?>
            </h2>
        </div>
    </div>
</section>