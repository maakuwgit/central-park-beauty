/**
* heading and text JS
* -----------------------------------------------------------------------------
*
* All the JS for the heading and text component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-heading-and-text',


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
  app.registerComponent( 'heading-and-text', COMPONENT );
} )( app );
