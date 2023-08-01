/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************************!*\
  !*** ./resources/assets/js/email_sub/email-sub.js ***!
  \****************************************************/
listen('click', '.email-subscribe-delete-btn', function (event) {
  var deleteEmailId = $(event.currentTarget).data('id');
  var url = route('email.sub.destroy', {
    emailSubscription: deleteEmailId
  });
  deleteItem(url, Lang.get('messages.subscriptions'));
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************************!*\
  !*** ./resources/assets/js/enquiry/enquiry.js ***!
  \************************************************/
listenClick('.view-btn', function (event) {
  var frontEnquiryTestimonialsId = $(event.currentTarget).data('id');
  renderDataShow(frontEnquiryTestimonialsId);
});
function renderDataShow(id) {
  $.ajax({
    url: route('enquiry.show', id),
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        $('#showName').text(result.data.name);
        $('#showEmail').text(result.data.email);
        if (result.data.phone != null) {
          $('#showPhone').text(result.data.phone);
        } else {
          $('#showPhone').text("N/A");
        }
        $('#showMessage').text(result.data.message);
        $('#showEnquiryModal').modal('show');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
}
listenClick('.enquiries-view-btn', function (event) {
  var viewId = $(event.currentTarget).data('id');
  $.ajax({
    url: route('enquiry.show', viewId),
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        $('#vcardName').text(result.data.vcard.name);
        $('#showName').text(result.data.name);
        $('#showEmail').text(result.data.email);
        if (result.data.phone != null) {
          $('#showPhone').text(result.data.phone);
        } else {
          $('#showPhone').text("N/A");
        }
        $('#showMessage').text(result.data.message);
        $('#showEnquiriesModal').modal('show');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
listenClick('.enquiries-delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(route('enquiry.destroy', recordId), 'Enquiry');
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************************!*\
  !*** ./resources/assets/js/languages/languages.js ***!
  \****************************************************/
listen('click', '#addLanguage', function () {
  $('#addLanguageModal').appendTo('body').modal('show');
  resetModalForm('#addLanguageForm');
});
listen('click', '.language-delete-btn', function (event) {
  var languageId = $(event.currentTarget).attr('data-id');
  deleteItem(route('languages.destroy', languageId), 'Language');
});
listen('hidden.bs.modal', '#addLanguageModal', function () {
  resetModalForm('#addLanguageForm', '#languageValidationErrorsBox');
});
listen('hidden.bs.modal', '#editLanguageModal', function () {
  resetModalForm('#editLanguageForm', '#editValidationErrorsBox');
});
listen('submit', '#addLanguageForm', function (e) {
  e.preventDefault();
  processingBtn('#addLanguageForm', '#languageBtnSave', 'loading');
  $.ajax({
    url: route('languages.store'),
    type: 'POST',
    data: $(this).serialize(),
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#addLanguageModal').modal('hide');
        window.livewire.emit('refresh');
        setTimeout(function () {
          $('#languageBtnSave').button('reset');
        }, 1000);
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
      setTimeout(function () {
        $('#languageBtnSave').button('reset');
      }, 1000);
    },
    complete: function complete() {
      setTimeout(function () {
        processingBtn('#addLanguageForm', '#languageBtnSave');
      }, 1000);
    }
  });
});
listen('click', '.edit-language-btn', function (event) {
  var languageId = $(event.currentTarget).data('id');
  renderLanguageData(languageId);
});
function renderLanguageData(id) {
  $.ajax({
    url: route('languages.edit', id),
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        $('#languageId').val(result.data.id);
        $('#editLanguage').val(result.data.name);
        $('#editIso').val(result.data.iso_code);
        $('#editLanguageModal').appendTo('body').modal('show');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
}
listen('submit', '#editLanguageForm', function (event) {
  event.preventDefault();
  processingBtn('#editLanguageForm', '#btnEditSave', 'loading');
  var id = $('#languageId').val();
  $.ajax({
    url: route('languages.update', id),
    type: 'put',
    data: $(this).serialize(),
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#editLanguageModal').modal('hide');
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    },
    complete: function complete() {
      processingBtn('#editLanguageForm', '#btnEditSave');
    }
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!****************************************************!*\
  !*** ./resources/assets/js/home_page/home_page.js ***!
  \****************************************************/


listenSubmit('#addEmail', function (e) {
  e.preventDefault();
  $.ajax({
    url: route('email.sub'),
    type: 'POST',
    data: $(this).serialize(),
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        document.getElementById('addEmail').reset();
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
listenClick('.navbar-nav .nav-item .nav-link', function () {
  $('.navbar-collapse').collapse('hide');
});
listenClick('.js-cookie-consent-declined', function () {
  $('.js-cookie-consent').addClass('d-none');
  $.ajax({
    url: route('declineCookie'),
    type: 'GET',
    success: function success(result) {},
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
listenClick('.js-cookie-consent-agree', function () {
  $('.js-cookie-consent').addClass('d-none');
});
listenClick('.fa-scroll-torah-custom', function () {
  $('html, body').animate({
    scrollTop: $('html, body').offset().top
  });
});
listenClick(".nav-link", function () {
  $(".navbar-toggler ").removeClass("open");
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/assets/js/home/contact.js ***!
  \*********************************************/
function displayError(selector, msg) {
  var selectorAttr = $(selector);
  selectorAttr.removeClass('d-none');
  selectorAttr.show();
  selectorAttr.text(msg);
  setTimeout(function () {
    $(selector).slideUp();
  }, 3000);
}
listenSubmit('#myForm', function (event) {
  event.preventDefault();
  $.ajax({
    url: route('contact.store'),
    type: 'POST',
    data: $(this).serialize(),
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#myForm')[0].reset();
      }
    },
    error: function error(result) {
      displayError('#contactError', result.responseJSON.message);
    }
  });
});
})();

/******/ })()
;