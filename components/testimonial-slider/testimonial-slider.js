/**
* testimonial slider JS
* -----------------------------------------------------------------------------
*
* All the JS for the testimonial slider component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'cp-testimonial-slider',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

      $('.cp-testimonial-slider__slider').slick({
        centerMode: false,
        dots: false,
        arrows: false,
        fade: true,
        cssEase: 'easeInOutSine',
        speed: 0,
        infinite: false,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              draggable: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
              prevArrow: '<button class="slider-button cp-testimonial-slider__chev-left"><svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"></use></svg></button>',
        nextArrow: '<button class="slider-button cp-testimonial-slider__chev-right"><svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg></button>'
            }
          }
        ]
      }).on('afterChange', function(event, slick, currentSlide){
        $('.cp-testimonial-slider__number').removeClass('active');
        $('.cp-testimonial-slider__number[data-index="'+currentSlide+'"]').addClass('active');
      })

      $('.cp-testimonial-slider__number').mouseover(function() {
        var target = $(this).data('index');
        $('.cp-testimonial-slider__slider').slick("goTo", target);
      });

    },

    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'testimonial-slider', COMPONENT );
} )( app );
