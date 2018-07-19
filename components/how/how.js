/**
* How JS
* -----------------------------------------------------------------------------
*
* All the JS for the How component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-how',


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
  app.registerComponent( 'how', COMPONENT );
} )( app );
