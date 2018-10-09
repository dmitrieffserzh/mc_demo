/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/* ==========================================================================
    >>
   ========================================================================== */
window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');


/* ==========================================================================
   HEADER ON SCROLL >>
   ========================================================================== */

$(function () {

    function setHeaderColor() {
        $('body').addClass('scroll');
    }

    function removeHeaderColor() {
        $('body').removeClass('scroll');
    }

    function updateScrollHeader() {
        if ($(window).scrollTop() > 3) {
            setHeaderColor()
        } else {
            removeHeaderColor()
        }
    }

    updateScrollHeader();
    $(window).scroll(updateScrollHeader);

});

/* ==========================================================================
   HEADER MENU >>
   ========================================================================== */

$(function () {

    function openMenu() {
        $('body, .main-menu').addClass('main-menu--open');
    }
    function closeMenu() {
        $('body, .main-menu').removeClass('main-menu--open');
    }

    $(document).on('click', '#button-menu', function () {

        if ($('.main-menu').hasClass('main-menu--open')) {
            closeMenu();
        } else {
            openMenu();
        }

    });

});




/* ==========================================================================
   CALL WIDGET >>
   ========================================================================== */

$(function () {

    function visibleWidget() {
        if ($(window).scrollTop() > $(window).height() / 3 && $(window).width() <= 768) {
            $('.call-widget').css({'bottom': 0})
        } else {
            $('.call-widget').removeAttr('style');
        }
    }

    visibleWidget();
    $(window).scroll(visibleWidget);

});