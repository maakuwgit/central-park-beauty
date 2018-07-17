/**
* Hero 3 JS
* -----------------------------------------------------------------------------
*
* All the JS for the Hero 3 component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-hero-3',


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
  app.registerComponent( 'hero-3', COMPONENT );
} )( app );
