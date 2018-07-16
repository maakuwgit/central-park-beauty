/**
* Instagram Feed JS
* -----------------------------------------------------------------------------
*
* All the JS for the Instagram Feed component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-instagram-feed',


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
  app.registerComponent( 'instagram-feed', COMPONENT );
} )( app );
