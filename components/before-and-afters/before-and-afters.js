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
        adaptiveHeight: true
      })

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'before-and-afters', COMPONENT );
} )( app );
