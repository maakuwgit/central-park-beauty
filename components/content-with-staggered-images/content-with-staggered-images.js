/**
* content with staggered images JS
* -----------------------------------------------------------------------------
*
* All the JS for the content with staggered images component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-content-with-staggered-images',


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
  app.registerComponent( 'content-with-staggered-images', COMPONENT );
} )( app );
