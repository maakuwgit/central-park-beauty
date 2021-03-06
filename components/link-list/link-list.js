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

      $('.cp-link-list__slick-container').slick({
        centerMode: true,
        dots: false,
        arrows: false,
        fade: true,
        speed: 100,
        infinite: false,
        draggable: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              draggable: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              prevArrow: '<button class="slider-button slider-chev-left"><svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"></use></svg></button>',
        nextArrow: '<button class="slider-button slider-chev-right"><svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg></button>'
            }
          }
        ]
      }).on('afterChange', function(event, slick, currentSlide){
        $('.cp-link-list__link').removeClass('active');
        $('.cp-link-list__link[data-index="'+currentSlide+'"]').addClass('active');
      })

      $('.cp-link-list__link').mouseover(function() {
        var target = $(this).data('index');
        $('.cp-link-list__slick-container').slick("goTo", target);
      });




    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'link-list', COMPONENT );
} )( app );
