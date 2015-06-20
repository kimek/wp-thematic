jQuery(document).ready(function($) {
    // mobile menu show hide
    $('.js-nav-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('.header-nav').toggleClass('is-active');
    });
});