/**
* Image With Button JS
* -----------------------------------------------------------------------------
*
* All the JS for the Image With Button component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-image-with-button',


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
  app.registerComponent( 'image-with-button', COMPONENT );
} )( app );
