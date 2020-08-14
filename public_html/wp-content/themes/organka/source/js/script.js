var $ = jQuery;

jQuery(document).ready(function($){
    $('.js-toogle').on('click', function () {
        $(this).toggle('nav__btn-toggle--open');
        $('.nav__menu-wrap').toggle('nav__menu-wrap--open')
    });
});