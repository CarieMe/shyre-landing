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
    success: function (response) {
      // Update the pop-up dialog with the retrieved HTML content
      var planDialogContent = $('.sb-plan-body');
      planDialogContent.html(response);

      // Show the pop-up dialog
      $('.sb-plan-frame').addClass('sb-active');
    },
    error: function (xhr, status, error) {
      console.log('AJAX request error:', error);
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
