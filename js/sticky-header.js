jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $(".container").addClass("header__sticky");
        } else {
            $(".container").removeClass("header__sticky");
        }
    });
});