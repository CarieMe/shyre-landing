document.addEventListener("DOMContentLoaded", function () {
  var swiper1 = new Swiper('.sb-short-menu-slider-3i', {
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

  var swiper2 = new Swiper('.sb-short-menu-slider-2-3i', {
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

  var swiper3 = new Swiper('.sb-short-menu-slider-4i', {
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

  var swiper4 = new Swiper('.sb-short-menu-slider-2-4i', {
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

  var swiper5 = new Swiper('.sb-reviews-slider', {
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

  var swiper6 = new Swiper('.sb-blog-slider-2i', {
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

  var swiper7 = new Swiper('.sb-blog-slider-3i', {
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
});
