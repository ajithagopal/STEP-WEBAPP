$(document).ready(function() {

    // static navigationbar
    var changeStyle = $('#navigation-bar');

    function scroll() {
        if ($(window).scrollTop() > 300) {
            changeStyle.addClass('navbar-fixed-top');
            changeStyle.addClass('one-page-nav');
        } else {
            changeStyle.removeClass('navbar-fixed-top');
            changeStyle.removeClass('one-page-nav');
        }
    }

    document.onscroll = scroll;

});