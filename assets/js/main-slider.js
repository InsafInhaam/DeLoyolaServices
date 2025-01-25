document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.thm-swiper__slider', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        pagination: {
            el: '#main-slider-pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '#main-slider__swiper-button-next',
            prevEl: '#main-slider__swiper-button-prev'
        },
        autoplay: {
            delay: 5000
        }
    });
});
