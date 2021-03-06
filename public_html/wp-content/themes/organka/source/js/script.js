var $ = jQuery;

jQuery(document).ready(function($){
    $('.js-toggle').on('click', function () {
        $(this).toggleClass('nav__btn-toggle--open');
        $(this).closest('.nav').find('.nav__menu-wrap').toggleClass('nav__menu-wrap--open');
    });

    $('.js-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: false,
        arrows: true,
        dots: false,
        prevArrow: '<div class="slider__arrow slider__arrow--prev"><svg fill="#ffffff" width="15" viewBox="0 0 5 9"><path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z" /></svg></div>',
        nextArrow: '<div class="slider__arrow slider__arrow--next"><svg fill="#ffffff" width="15" viewBox="0 0 5 9"><path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z" /></svg></div>',
    });

    $('.js-products-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        arrows: true,
        dots: true,
        prevArrow: '<div class="slider__arrow slider__arrow--prev"><svg fill="#fff" width="15" viewBox="0 0 5 9"><path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z" /></svg></div>',
        nextArrow: '<div class="slider__arrow slider__arrow--next"><svg fill="#fff" width="15" viewBox="0 0 5 9"><path d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z" /></svg></div>',
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('.js-modal').fancybox({
        type: 'ajax',
        autoSize: false,
        width: 700,
        height: 650,
        openEffect: 'elastic'
    });

    $('.js-modal-form').fancybox({
        type: 'inline',
        autoSize: false,
        width: 400,
        height: 350,
        openEffect: 'elastic'
    });

    $('input[type="tel"]').mask('+7 (999) 999-99-99');
});