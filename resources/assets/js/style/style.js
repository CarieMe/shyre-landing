$('.sb-faq li .sb-question').on('click', function () {
  $(this).find('.sb-plus-minus-toggle').toggleClass('sb-collapsed');
  $(this).parent().toggleClass('sb-active');
});

