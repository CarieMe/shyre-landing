$(function () {
    $('.sb-menu-btn').on('click', function () {
        $('.sb-menu-btn , .sb-navigation').toggleClass('sb-active');
        $('.sb-info-btn , .sb-info-bar , .sb-minicart').removeClass('sb-active');
    });
    $('.sb-info-btn').on('click', function () {
        $('.sb-info-btn , .sb-info-bar').toggleClass('sb-active');
        $('.sb-menu-btn , .sb-navigation , .sb-minicart').removeClass('sb-active');
    });
    $('.sb-btn-cart').on('click', function () {
        $('.sb-minicart').toggleClass('sb-active');
        $('.sb-info-btn , .sb-info-bar , .sb-navigation , .sb-menu-btn , .sb-info-btn').removeClass('sb-active');
    });
});

$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $('.sb-top-bar-frame').addClass('sb-scroll');
    } else {
        $('.sb-top-bar-frame').removeClass('sb-scroll');
    }
    if (scroll >= 10) {
        $('.sb-info-bar , .sb-minicart').addClass('sb-scroll');
    } else {
        $('.sb-info-bar , .sb-minicart').removeClass('sb-scroll');
    }
});

$(document).on('click', function (e) {
    var el = '.sb-minicart , .sb-btn-cart , .sb-menu-btn , .sb-navigation , .sb-info-btn , .sb-info-bar';
    if (jQuery(e.target).closest(el).length) return;
    $('.sb-minicart , .sb-btn-cart , .sb-menu-btn , .sb-navigation , .sb-info-btn , .sb-info-bar').removeClass('sb-active');
});

if ($(window).width() < 992) {
    $(".sb-has-children > a").attr("href", "#.")
}
$(window).resize(function () {
    if ($(window).width() < 992) {
        $(".sb-has-children > a").attr("href", "#.")
    }
});

