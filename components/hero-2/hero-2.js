/**
* Hero 2 JS
* -----------------------------------------------------------------------------
*
* All the JS for the Hero 2 component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-hero-2',


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
  app.registerComponent( 'hero-2', COMPONENT );
} )( app );
