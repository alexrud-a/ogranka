var $ = jQuery;

jQuery(document).ready(function($){
    $('.js-toogle').on('click', function () {
        $(this).toggleClass('nav__btn-toggle--open');
        $('.nav__menu-wrap').toggleClass('nav__menu-wrap--open')
    });
});