

document.addEventListener('DOMContentLoaded', function () {

  //SWUP
  const options = {
    containers: ['#sb-dynamic-content', '#sb-dynamic-menu'],
    animateHistoryBrowsing: true,
    linkSelector: '.sb-navigation a:not([data-no-swup]) , a:not([data-no-swup])',
  };
  const swup = new Swup(options);

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
    transitionDuration: 1200,
  });
  $('[data-fancybox="gallery"]').fancybox({
    animationEffect: "zoom-in-out",
    animationDuration: 600,
    transitionDuration: 1200,
  });
  $.fancybox.defaults.hash = false;

  //STICKY

  var sticky = new Sticky('.sb-sticky');
  if ($(window).width() < 992) {
    sticky.destroy();
  }
});



