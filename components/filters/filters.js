/**
* filters JS
* -----------------------------------------------------------------------------
*
* All the JS for the filters component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-filters',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

      var search_str = window.location.search;

      $(_this.selector()).find(' .card-grid__select').on('change', function(e){
        var value = $(this)[0].selectedOptions[0].value;

        window.location.href = './?'+value;
      });

      if( search_str ) {
        $('.card__wrapper').hide();
        $('.card-grid__select').find('option[value="'+search_str.substr(1)+'"]').attr('selected', 'selected');
        $('.card__wrapper[data-terms="'+search_str.substr(1)+'"]').show();
      }

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'filters', COMPONENT );
} )( app );
