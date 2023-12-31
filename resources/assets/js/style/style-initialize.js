document.addEventListener("swup:contentReplaced", function () {
    $('.sb-info-btn , .sb-info-bar , .sb-minicart , .sb-menu-btn , .sb-navigation').removeClass('sb-active');
    $('.sb-top-bar-frame').removeClass('sb-scroll');
    $('a').removeClass('sb-click');
    if ($('html').hasClass('is-rendering')) {
        $("html, body").animate({
            scrollTop: 0
        }, {
            duration: 0,
            complete: function () { }
        });
    }
    /***************************

    faq

    ***************************/
    $('.sb-faq li .sb-question').on('click', function () {
        $(this).find('.sb-plus-minus-toggle').toggleClass('sb-collapsed');
        $(this).parent().toggleClass('sb-active');
    });
    /***************************

    isotope

    ***************************/
    $('.sb-filter a').on('click', function () {
        $('.sb-filter .sb-active').removeClass('sb-active');
        $(this).addClass('sb-active');

        var selector = $(this).data('filter');
        $('.sb-masonry-grid').isotope({
            filter: selector
        });
        return false;
    });
    $(document).ready(function () {
        $('.sb-masonry-grid').isotope({
            itemSelector: '.sb-grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.sb-grid-sizer'
            }
        });
    });
    $('.sb-tabs').isotope({
        filter: '.sb-ingredients-tab'
    });
    /***************************

    fancybox

    ***************************/
    $('[data-fancybox="menu"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
    });
    $('[data-fancybox="gallery"]').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        transitionDuration: 1200,
    });
    $.fancybox.defaults.hash = false;
    /***************************

    click effect

    ***************************/
    $('a[href]:not([href^="mailto\\:"], [href$="\\#"], [href$="\\#."])').on('click', function () {
        $(this).addClass('sb-click');
    });
    $('.sb-breadcrumbs a[href]:not([href^="mailto\\:"], [href$="\\#"], [href$="\\#."])').on('click', function () {
        $('.sb-breadcrumbs').addClass('sb-click');
    });
    /***************************

    add to cart

    ***************************/
    $('.sb-atc').on('click', function () {
        counter++;
        $('.sb-cart-number').addClass('sb-added');
        $(this).addClass('sb-added');
        setTimeout(() => {
            $('.sb-cart-number').removeClass('sb-added');
        }, 600);
        setTimeout(() => {
            $('.sb-cart-number').text(counter);
        }, 300);
    });
    /***************************

    menu

    ***************************/
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
    /***************************

    quantity

    ***************************/
    $('.sb-add').on('click', function () {
        if ($(this).prev().val() < 10) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sb-sub').on('click', function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });
    /***************************

    sticky

    ***************************/
    var sticky = new Sticky('.sb-sticky');
    if ($(window).width() < 992) {
        sticky.destroy();
    }
    /***************************

    contact form

    ***************************/
    $("#form").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function () {
            $('.sb-success-result').addClass('sb-active');
        });
        return false;
    });
    /***************************

    sliders

    ***************************/
    var swiper = new Swiper('.sb-short-menu-slider-3i', {
        slidesPerView: 3,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-short-menu-prev',
            nextEl: '.sb-short-menu-next',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    var swiper = new Swiper('.sb-short-menu-slider-2-3i', {
        slidesPerView: 3,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-short-menu-prev-2',
            nextEl: '.sb-short-menu-next-2',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    var swiper = new Swiper('.sb-short-menu-slider-4i', {
        slidesPerView: 4,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-short-menu-prev',
            nextEl: '.sb-short-menu-next',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    var swiper = new Swiper('.sb-short-menu-slider-2-4i', {
        slidesPerView: 4,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-short-menu-prev-2',
            nextEl: '.sb-short-menu-next-2',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    var swiper = new Swiper('.sb-reviews-slider', {
        slidesPerView: 2,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-reviews-prev',
            nextEl: '.sb-reviews-next',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    var swiper = new Swiper('.sb-blog-slider-2i', {
        slidesPerView: 2,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-blog-prev',
            nextEl: '.sb-blog-next',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    var swiper = new Swiper('.sb-blog-slider-3i', {
        slidesPerView: 3,
        spaceBetween: 30,
        parallax: true,
        speed: 1000,
        navigation: {
            prevEl: '.sb-blog-prev',
            nextEl: '.sb-blog-next',
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 1,
            },
        },
    });
    /***************************

    map

    ***************************/

    $(".sb-lock").on('click', function () {
        $('.sb-map').toggleClass('sb-active');
        $('.sb-lock').toggleClass('sb-active');
        $('.sb-lock .fas').toggleClass('fa-unlock');
    });
    /***************************

    datepicker

    ***************************/
    $('.sb-datepicker').datepicker({
        minDate: new Date(),
    });
});