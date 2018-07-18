/**
* Staggered Content JS
* -----------------------------------------------------------------------------
*
* All the JS for the Staggered Content component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-staggered-content',


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
  app.registerComponent( 'staggered-content', COMPONENT );
} )( app );
