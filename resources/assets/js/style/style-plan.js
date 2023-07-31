$('a[href]:not([href^="mailto\\:"], [href$="\\#"], [href$="\\#."])').on('click', function () {
    $(this).addClass('sb-click');
});
$('.sb-breadcrumbs a[href]:not([href^="mailto\\:"], [href$="\\#"], [href$="\\#."])').on('click', function () {
    $('.sb-breadcrumbs').addClass('sb-click');
});

/***************************

 click effect

 ***************************/
// const cursor = document.querySelector('.sb-click-effect')
// document.addEventListener('mousemove', (e) => {
//     cursor.setAttribute('style', "top:" + (e.pageY - 15) + "px; left:" + (e.pageX - 15) + "px;")
// });
// document.addEventListener('click', () => {
//     cursor.classList.add('sb-click')
//     setTimeout(() => {
//         cursor.classList.remove('sb-click')
//     }, 600)
// });

document.addEventListener('DOMContentLoaded', function () {
    const cursor = document.querySelector('.sb-click-effect');

    document.addEventListener('mousemove', (e) => {
        cursor.setAttribute('style', "top:" + (e.pageY - 15) + "px; left:" + (e.pageX - 15) + "px;");
    });

    document.addEventListener('click', () => {
        cursor.classList.add('sb-click');
        setTimeout(() => {
            cursor.classList.remove('sb-click');
        }, 600);
    });
});

var counter = $('.sb-cart-number').text();

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


var sticky = new Sticky('.sb-sticky');
if ($(window).width() < 992) {
    sticky.destroy();
}