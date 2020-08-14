var $ = jQuery;

jQuery(document).ready(function($){
    $('.js-toggle').on('click', function () {
        $(this).toggleClass('nav__btn-toggle--open');
        $(this).closest('.nav').find('.nav__menu-wrap').toggleClass('nav__menu-wrap--open');
    });
});