/**
 * Debounce event
 * @author David Walsh
 * @see http://davidwalsh.name/javascript-debounce-function
 * @param func
 * @param wait
 * @param immediate
 * @returns {Function}
 */
function debounce(func, wait, immediate) {
  'use strict';

  var timeout;

  return function() {
    var context = this;
    var args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) {
        func.apply(context, args);
      }
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) {
      func.apply(context, args);
    }
  };
}
// TODO: Single file with JS [Mateusz]
// TODO: Contact form support [Mateusz]
$(document).ready(function(){
  'use strict';

  //
  // Properties
  // --------------------------------------------------
  var $window = $(window);
  var $body = $('body');

  //
  // Menu Nav
  // --------------------------------------------------
  $('.menu-toggle').click(function(){
    var className = this.getAttribute('data-toggle');
    var selector  = this.getAttribute('data-target');

    $(selector).toggleClass(className);
  });

  $('.has-dropdown').find('span:first').click(function(e){
    e.preventDefault();

    $(this)
      .parent()
        .toggleClass('dropdown-open');
  });

  //
  // Hackathon Page
  // --------------------------------------------------
  if ($body.hasClass('hackathon-page')){

    var navHeight = 235;

    // bind scrolling to the events"
    $('.secondary-nav').find('a').click(function(e){
      e.preventDefault();

      var sectionSelector = this.getAttribute('href');
      var elementPosition = $(sectionSelector).position();
      $window.scrollTop(elementPosition.top - navHeight);
    });

    // debounce scroll event - make it trigger less times
    var scrollEvt = debounce(function(){
      'use strict';

      $body[($window.scrollTop()>navHeight?'add':'remove')+'Class']('sticky');
    }, 250);
    // bind "make a sticky .secondary-nav" event
    $window.on('scroll', scrollEvt);
  }

});