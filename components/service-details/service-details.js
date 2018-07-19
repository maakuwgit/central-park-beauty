/**
* Service Details JS
* -----------------------------------------------------------------------------
*
* All the JS for the Service Details component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-service-details',


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
  app.registerComponent( 'service-details', COMPONENT );
} )( app );
