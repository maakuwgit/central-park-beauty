/**
* Conditions Content 3 JS
* -----------------------------------------------------------------------------
*
* All the JS for the Conditions Content 3 component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-conditions-content-3',


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
  app.registerComponent( 'conditions-content-3', COMPONENT );
} )( app );
