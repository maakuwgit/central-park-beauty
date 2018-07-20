/**
* Info Boxes JS
* -----------------------------------------------------------------------------
*
* All the JS for the Info Boxes component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-info-boxes',


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
  app.registerComponent( 'info-boxes', COMPONENT );
} )( app );
