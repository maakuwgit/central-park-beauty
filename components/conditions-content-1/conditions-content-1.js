/**
* Conditions Content JS
* -----------------------------------------------------------------------------
*
* All the JS for the Conditions Content component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-conditions-content-1',


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
  app.registerComponent( 'conditions-content-1', COMPONENT );
} )( app );
