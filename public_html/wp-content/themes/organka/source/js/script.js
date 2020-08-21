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
});