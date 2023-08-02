/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/js/style/chat.js":
/*!*******************************************!*\
  !*** ./resources/assets/js/style/chat.js ***!
  \*******************************************/
/***/ (() => {

$(function () {
  var animate = document.querySelectorAll(".animate");
  var submit = document.querySelector(".submit");
  var text = document.querySelector(".sendbox input");
  var chatbox = document.querySelector(".chatbox");
  submit.addEventListener("click", sendmessage);
  text.addEventListener("keyup", function (e) {
    console.log(e);
    if (e.key === 'Enter' || e.keyCode === 13) sendmessage();
  });
  start_animation();
  function start_animation() {
    var _loop = function _loop(i) {
      setTimeout(function () {
        animate[i].classList.add("animated");
      }, 300 * i + 300);
    };
    for (var i = 0; i < animate.length; i++) {
      _loop(i);
    }
  }
  function sendmessage() {
    data = text.value.trim();
    if (data != "") chatbox.innerHTML += '<div class="eachmessage sent animated"><p>' + data + '</p></div>';
    text.value = "";
    chatbox.scrollTop = chatbox.scrollHeight;
  }
});

/***/ }),

/***/ "./resources/assets/js/style/graph.js":
/*!********************************************!*\
  !*** ./resources/assets/js/style/graph.js ***!
  \********************************************/
/***/ (() => {

var _smoothGraph;
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
var smoothGraph = (_smoothGraph = {
  container: null,
  svg: null,
  defs: null,
  width: null,
  height: null,
  dataHeight: null,
  xSpacing: null,
  ySpacing: null,
  pathSmoothing: null
}, _defineProperty(_smoothGraph, "defs", null), _defineProperty(_smoothGraph, "new", function _new(_ref) {
  var _ref$container = _ref.container,
    container = _ref$container === void 0 ? null : _ref$container,
    _ref$heightInPx = _ref.heightInPx,
    heightInPx = _ref$heightInPx === void 0 ? 100 : _ref$heightInPx,
    _ref$dataHeight = _ref.dataHeight,
    dataHeight = _ref$dataHeight === void 0 ? 100 : _ref$dataHeight;
  this.errorCondition(container === null, 'No target container was specified.\n Use querySelector syntax to target a container element:\n smoothGraph.new({container: "#my-container"});\n');
  this.setContainer(container);
  this.setDimensions(heightInPx, dataHeight);
  var svg = this.createSVG(this.width, this.height);
  this.svg = this.container.appendChild(svg);
  this.appendMaskToSvg();
}), _defineProperty(_smoothGraph, "draw", function draw(_ref2) {
  var _this = this;
  var _ref2$dataPoints = _ref2.dataPoints,
    dataPoints = _ref2$dataPoints === void 0 ? null : _ref2$dataPoints,
    _ref2$color = _ref2.color,
    color = _ref2$color === void 0 ? 'black' : _ref2$color,
    _ref2$strokeWidth = _ref2.strokeWidth,
    strokeWidth = _ref2$strokeWidth === void 0 ? 1 : _ref2$strokeWidth,
    _ref2$pathSmoothing = _ref2.pathSmoothing,
    pathSmoothing = _ref2$pathSmoothing === void 0 ? 0 : _ref2$pathSmoothing;
  this.errorCondition(dataPoints === null, 'No data points were entered for the graph.\n Specify the data points in an array:\n smoothGraph.draw({dataPoints: [1, 2, 3, 4]});\n');
  this.setXSpacing(dataPoints.length);
  this.setPathSmoothing(pathSmoothing);
  ['fill', 'stroke'].forEach(function (drawType) {
    var attributeLabel = drawType === 'fill' ? 'mask' : 'stroke-width';
    var attributeValue = drawType === 'fill' ? 'url(#gradient-mask)' : strokeWidth;
    var d = _this.createPathPoints(dataPoints, drawType);
    var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttributeNS(null, 'd', d);
    path.setAttributeNS(null, "".concat(drawType), color);
    path.setAttributeNS(null, attributeLabel, attributeValue);
    _this.svg.appendChild(path);
  });
}), _defineProperty(_smoothGraph, "createSVG", function createSVG(width, height) {
  var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
  svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
  svg.setAttribute('fill', 'none');
  svg.setAttribute('viewBox', "0 0 ".concat(this.width, " ").concat(this.height));
  return svg;
}), _defineProperty(_smoothGraph, "appendMaskToSvg", function appendMaskToSvg() {
  this.appendDefsToSvg();
  this.defs.innerHTML = "<linearGradient id=\"gradient\" gradientTransform=\"rotate(90)\"><stop offset=\"0\" stop-color=\"white\" stop-opacity=\"0.35\" /><stop offset=\"1\" stop-color=\"white\" stop-opacity=\"0\" /></linearGradient><mask id=\"gradient-mask\"><rect x=\"0\" y=\"0\" width=\"".concat(this.width, "\" height=\"").concat(this.height, "\" fill=\"url(#gradient)\" /></mask>");
}), _defineProperty(_smoothGraph, "appendDefsToSvg", function appendDefsToSvg() {
  var defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
  this.defs = this.svg.appendChild(defs);
}), _defineProperty(_smoothGraph, "createPathPoints", function createPathPoints(dataPoints, drawType) {
  var d = '';
  for (var i = 0; i < dataPoints.length; i++) {
    var marker = i === 0 ? 'M' : 'L';
    var x1 = i * this.xSpacing;
    var y1 = this.height - dataPoints[i] * this.ySpacing;
    var x2 = (i + 1) * this.xSpacing;
    var y2 = this.height - dataPoints[i + 1] * this.ySpacing;
    if (i !== dataPoints.length - 1) {
      d += "".concat(marker, " ").concat(x1, " ").concat(y1, " C ").concat(x1 + this.pathSmoothing, " ").concat(y1, " ").concat(x2 - this.pathSmoothing, " ").concat(y2, " ").concat(x2, " ").concat(y2, " ");
    }
  }
  if (drawType === 'fill') {
    d += "L ".concat(this.width, " ").concat(this.height, " L 0 ").concat(this.height, " L 0 ").concat(this.height - dataPoints[0] * this.ySpacing);
  }
  return d;
}), _defineProperty(_smoothGraph, "setContainer", function setContainer(container) {
  this.container = document.querySelector(container);
}), _defineProperty(_smoothGraph, "setDimensions", function setDimensions(heightInPx, dataHeight) {
  this.width = this.container.offsetWidth;
  this.height = heightInPx;
  this.dataHeight = dataHeight;
  this.ySpacing = heightInPx / dataHeight;
}), _defineProperty(_smoothGraph, "setXSpacing", function setXSpacing(dataPointsLength) {
  this.xSpacing = this.width / (dataPointsLength - 1);
}), _defineProperty(_smoothGraph, "setPathSmoothing", function setPathSmoothing(smoothingAmount) {
  this.pathSmoothing = this.xSpacing / 10 * smoothingAmount;
}), _defineProperty(_smoothGraph, "errorCondition", function errorCondition(condition, errorMessage) {
  if (condition) {
    throw new Error(errorMessage);
  }
}), _smoothGraph);

// Function to initialize the smoothGraph after the DOM is fully loaded
function initializeSmoothGraph() {
  smoothGraph["new"]({
    container: '#graph-container',
    heightInPx: 350,
    dataHeight: 100
  });
  smoothGraph.draw({
    dataPoints: [20, 60, 40, 10, 80, 50, 10],
    color: '#f99048',
    strokeWidth: 1,
    pathSmoothing: 5
  });
  smoothGraph.draw({
    dataPoints: [10, 40, 20, 10, 70, 90, 10],
    color: '#f99048',
    strokeWidth: 4,
    pathSmoothing: 5
  });
}

// Attach the initializeSmoothGraph function to the window.onload event
window.onload = initializeSmoothGraph;

/***/ }),

/***/ "./resources/assets/js/style/style-common.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/style/style-common.js ***!
  \***************************************************/
/***/ (() => {

$(document).ready(function () {
  $('.plan-link').on('click', function (e) {
    e.preventDefault();
    var planId = $(this).data('plan-id');
    console.log('Plan link clicked! Plan ID: ' + planId);

    // Show the plan details in the pop-up dialog
    showPlanDetails(planId);
  });
});
function showPlanDetails(planId) {
  // Fetch the plan details using AJAX or any other method
  $.ajax({
    url: '/plans/' + planId,
    type: 'GET',
    success: function success(response) {
      // Update the pop-up dialog with the retrieved HTML content
      var planDialogContent = $('.sb-plan-body');
      planDialogContent.html(response);

      // Show the pop-up dialog
      $('.sb-plan-frame').addClass('sb-active');
    },
    error: function error(xhr, status, _error) {
      console.log('AJAX request error:', _error);
    }
  });
}
$('.sb-close-plan').on('click', function () {
  // Hide the pop-up dialog when the close button is clicked
  $('.sb-plan-frame').removeClass('sb-active');
});
$('a[href]:not([href^="mailto\\:"], [href$="\\#"], [href$="\\#."])').on('click', function () {
  $(this).addClass('sb-click');
});
$('#customers-testimonials').owlCarousel({
  loop: true,
  center: true,
  items: 3,
  margin: 0,
  autoplay: true,
  dots: true,
  autoplayTimeout: 8500,
  smartSpeed: 450,
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    1170: {
      items: 3
    }
  }
});

/***/ }),

/***/ "./resources/assets/js/style/style-initialize.js":
/*!*******************************************************!*\
  !*** ./resources/assets/js/style/style-initialize.js ***!
  \*******************************************************/
/***/ (() => {

document.addEventListener("swup:contentReplaced", function () {
  $('.sb-info-btn , .sb-info-bar , .sb-minicart , .sb-menu-btn , .sb-navigation').removeClass('sb-active');
  $('.sb-top-bar-frame').removeClass('sb-scroll');
  $('a').removeClass('sb-click');
  if ($('html').hasClass('is-rendering')) {
    $("html, body").animate({
      scrollTop: 0
    }, {
      duration: 0,
      complete: function complete() {}
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
    transitionDuration: 1200
  });
  $('[data-fancybox="gallery"]').fancybox({
    animationEffect: "zoom-in-out",
    animationDuration: 600,
    transitionDuration: 1200
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
    setTimeout(function () {
      $('.sb-cart-number').removeClass('sb-added');
    }, 600);
    setTimeout(function () {
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
    $(".sb-has-children > a").attr("href", "#.");
  }
  $(window).resize(function () {
    if ($(window).width() < 992) {
      $(".sb-has-children > a").attr("href", "#.");
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
      nextEl: '.sb-short-menu-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper = new Swiper('.sb-short-menu-slider-2-3i', {
    slidesPerView: 3,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev-2',
      nextEl: '.sb-short-menu-next-2'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper = new Swiper('.sb-short-menu-slider-4i', {
    slidesPerView: 4,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev',
      nextEl: '.sb-short-menu-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper = new Swiper('.sb-short-menu-slider-2-4i', {
    slidesPerView: 4,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev-2',
      nextEl: '.sb-short-menu-next-2'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper = new Swiper('.sb-reviews-slider', {
    slidesPerView: 2,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-reviews-prev',
      nextEl: '.sb-reviews-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper = new Swiper('.sb-blog-slider-2i', {
    slidesPerView: 2,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-blog-prev',
      nextEl: '.sb-blog-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper = new Swiper('.sb-blog-slider-3i', {
    slidesPerView: 3,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-blog-prev',
      nextEl: '.sb-blog-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
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
    minDate: new Date()
  });
});

/***/ }),

/***/ "./resources/assets/js/style/style-loader.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/style/style-loader.js ***!
  \***************************************************/
/***/ (() => {

$(document).ready(function () {
  $(".sb-loading").animate({
    opacity: 1
  }, {
    duration: 500
  });
  setTimeout(function () {
    $('.sb-preloader-number').each(function () {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
        countNum: countTo
      }, {
        duration: 1000,
        easing: 'swing',
        step: function step() {
          $this.text(Math.floor(this.countNum));
        }
      });
    });
    $(".sb-bar").animate({
      height: '100%'
    }, {
      duration: 1000,
      complete: function complete() {
        $(".sb-preloader").addClass('sb-hidden');
      }
    });
  }, 400);
});
$(document).ready(function () {
  $('.btn-start').click(function () {
    $('.step-wrapper').toggleClass('move-line');
  });
});

/***/ }),

/***/ "./resources/assets/js/style/style-menu.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/style/style-menu.js ***!
  \*************************************************/
/***/ (() => {

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
  $(".sb-has-children > a").attr("href", "#.");
}
$(window).resize(function () {
  if ($(window).width() < 992) {
    $(".sb-has-children > a").attr("href", "#.");
  }
});

/***/ }),

/***/ "./resources/assets/js/style/style-owl.js":
/*!************************************************!*\
  !*** ./resources/assets/js/style/style-owl.js ***!
  \************************************************/
/***/ (() => {

$(document).ready(function () {
  $('#customers-testimonials').owlCarousel({
    loop: true,
    center: true,
    items: 3,
    margin: 0,
    autoplay: true,
    dots: false,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1170: {
        items: 3
      }
    }
  });
});

/***/ }),

/***/ "./resources/assets/js/style/style-plan.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/style/style-plan.js ***!
  \*************************************************/
/***/ (() => {

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
  var cursor = document.querySelector('.sb-click-effect');
  document.addEventListener('mousemove', function (e) {
    cursor.setAttribute('style', "top:" + (e.pageY - 15) + "px; left:" + (e.pageX - 15) + "px;");
  });
  document.addEventListener('click', function () {
    cursor.classList.add('sb-click');
    setTimeout(function () {
      cursor.classList.remove('sb-click');
    }, 600);
  });
});
var counter = $('.sb-cart-number').text();
$('.sb-atc').on('click', function () {
  counter++;
  $('.sb-cart-number').addClass('sb-added');
  $(this).addClass('sb-added');
  setTimeout(function () {
    $('.sb-cart-number').removeClass('sb-added');
  }, 600);
  setTimeout(function () {
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

/***/ }),

/***/ "./resources/assets/js/style/style-swipe.js":
/*!**************************************************!*\
  !*** ./resources/assets/js/style/style-swipe.js ***!
  \**************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var swiper1 = new Swiper('.sb-short-menu-slider-3i', {
    slidesPerView: 3,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev',
      nextEl: '.sb-short-menu-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper2 = new Swiper('.sb-short-menu-slider-2-3i', {
    slidesPerView: 3,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev-2',
      nextEl: '.sb-short-menu-next-2'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper3 = new Swiper('.sb-short-menu-slider-4i', {
    slidesPerView: 4,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev',
      nextEl: '.sb-short-menu-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper4 = new Swiper('.sb-short-menu-slider-2-4i', {
    slidesPerView: 4,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-short-menu-prev-2',
      nextEl: '.sb-short-menu-next-2'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper5 = new Swiper('.sb-reviews-slider', {
    slidesPerView: 2,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-reviews-prev',
      nextEl: '.sb-reviews-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper6 = new Swiper('.sb-blog-slider-2i', {
    slidesPerView: 2,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-blog-prev',
      nextEl: '.sb-blog-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
  var swiper7 = new Swiper('.sb-blog-slider-3i', {
    slidesPerView: 3,
    spaceBetween: 30,
    parallax: true,
    speed: 1000,
    navigation: {
      prevEl: '.sb-blog-prev',
      nextEl: '.sb-blog-next'
    },
    breakpoints: {
      992: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 1
      }
    }
  });
});

/***/ }),

/***/ "./resources/assets/js/style/style-third.js":
/*!**************************************************!*\
  !*** ./resources/assets/js/style/style-third.js ***!
  \**************************************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function () {
  //SWUP
  var options = {
    containers: ['#sb-dynamic-content', '#sb-dynamic-menu'],
    animateHistoryBrowsing: true,
    linkSelector: '.sb-navigation a:not([data-no-swup]) , a:not([data-no-swup])'
  };
  var swup = new Swup(options);

  // FANCY BOX
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
  $('[data-fancybox="menu"]').fancybox({
    animationEffect: "zoom-in-out",
    animationDuration: 600,
    transitionDuration: 1200
  });
  $('[data-fancybox="gallery"]').fancybox({
    animationEffect: "zoom-in-out",
    animationDuration: 600,
    transitionDuration: 1200
  });
  $.fancybox.defaults.hash = false;

  //STICKY

  var sticky = new Sticky('.sb-sticky');
  if ($(window).width() < 992) {
    sticky.destroy();
  }
});

/***/ }),

/***/ "./resources/assets/scss/main.scss":
/*!*****************************************!*\
  !*** ./resources/assets/scss/main.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/style": 0,
/******/ 			"assets/css/public": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/chat.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/graph.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-common.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-loader.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-menu.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-swipe.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-third.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-plan.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-initialize.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/js/style/style-owl.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/public"], () => (__webpack_require__("./resources/assets/scss/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;