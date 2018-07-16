/**
* Hero 1 JS
* -----------------------------------------------------------------------------
*
* All the JS for the Hero 1 component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-hero-1',


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
  app.registerComponent( 'hero-1', COMPONENT );
} )( app );
