/**
* link list JS
* -----------------------------------------------------------------------------
*
* All the JS for the link list component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-link-list',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

      $('.cp-ll__link').mouseover(function() {
        var target = $(this).data('target');
        $('.cp-ll__link').removeClass('active');
        $(this).addClass('active');
        $('.cp-ll__li.active').removeClass('active');
        $(this).parent('.cp-ll__li').addClass('active');
        $('.cp-ll__img.active').removeClass('active');
        $(target).addClass('active');
      });

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'link-list', COMPONENT );
} )( app );
