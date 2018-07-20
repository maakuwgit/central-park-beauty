/**
* Before and Afters JS
* -----------------------------------------------------------------------------
*
* All the JS for the Before and Afters component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-before-and-afters',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

      $('.cp-before-and-afters__slick').slick({
        // centerMode: true,
        dots: true,
        arrows: true,
        infinite: false,
        adaptiveHeight: true,
        prevArrow: '<button class="slider-button cp-before-and-afters__prev">Previous</button>',
        nextArrow: '<button class="slider-button cp-before-and-afters__next">Next</button>',
        dotsClass: 'cp-before-and-afters__dots',
        responsive: [
          {
            breakpoint: 768,
            settings: {
              draggable: true,
              arrows: false
            }
          }
        ]
      })

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'before-and-afters', COMPONENT );
} )( app );
