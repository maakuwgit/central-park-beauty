/**
* image content cluster JS
* -----------------------------------------------------------------------------
*
* All the JS for the image content cluster component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-image-content-cluster',


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
  app.registerComponent( 'image-content-cluster', COMPONENT );
} )( app );
