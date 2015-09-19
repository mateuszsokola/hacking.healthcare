/**
 * Debounce event
 * @author David Walsh
 * @see http://davidwalsh.name/javascript-debounce-function
 * @param func
 * @param wait
 * @param immediate
 * @returns {Function}
 */
function debounce(func, wait, immediate){
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
/**
 * Initializes Google Maps on the hackathon pages
 */
function initMap(){
  var element = document.getElementById('map');
  var point = {
    lat: parseFloat(element.getAttribute('data-lat')),
    lng: parseFloat(element.getAttribute('data-lon'))
  };
  var map = new google.maps.Map(element, {
    center: point,
    zoom: parseInt(element.getAttribute('data-zoom'), 0),
    disableDefaultUI: true
  });
  var marker = new google.maps.Marker({
    position: point,
    map: map,
    title: 'It\'s here!'
  });
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
  var $cookie = $('.cookie');
  var COOKIE_COOKIE = 'hh_cookie=1';


  //
  // Cookie Policy
  // --------------------------------------------------
  if ($cookie.length) {
    var regexp = new RegExp(COOKIE_COOKIE, 'i');

    if ( ! regexp.test(document.cookie)) {
      // show cookie info
      $cookie.css('display', 'block');

      // bind cookie close button
      $cookie
        .find('span.button')
          .click(function(){
            // hide cookie info
            $cookie.css('display', 'none');
            // set up a cookie
            document.cookie = COOKIE_COOKIE;
        });
    }
  }

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