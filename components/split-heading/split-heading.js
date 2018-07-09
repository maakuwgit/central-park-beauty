/**
* split heading JS
* -----------------------------------------------------------------------------
*
* All the JS for the split heading component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-split-heading',


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
  app.registerComponent( 'split-heading', COMPONENT );
} )( app );
