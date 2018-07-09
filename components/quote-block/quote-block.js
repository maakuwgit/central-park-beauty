/**
* quote block JS
* -----------------------------------------------------------------------------
*
* All the JS for the quote block component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-quote-block',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'quote-block', COMPONENT );
} )( app );
