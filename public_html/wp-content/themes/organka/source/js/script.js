var $ = jQuery;

jQuery(document).ready(function($){
    $('.js-toogle').on('click', function () {
        $(this).toggle('nav__btn-toogle--open');
        $(this).closest('.nav__menu-wrap').toggle('.nav__menu-wrap--open')
    });
});