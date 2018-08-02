/**
* location-map JS
* -----------------------------------------------------------------------------
*
* All the JS for the location-map component.
*/
( function( app ) {

  var COMPONENT = {

    defaultCoordinates: {
      lat: '40.7653794',
      lng: '-73.98068330000001'
    },
    className: 'll-location-map',
    mapPinIcon: 'M12 11.484q1.031 0 1.758-0.727t0.727-1.758-0.727-1.758-1.758-0.727-1.758 0.727-0.727 1.758 0.727 1.758 1.758 0.727zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z',
    address: site_info.address.street + ' ' + site_info.address.city + ' ' + site_info.address.state + ' ' + site_info.address.zip,
    pinColor: '#ffffff',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;
      var address = _this.address;

      $('.ll-location-map .location-map__googlemap').each( function(index, el) {

        var map;
        var markers = [];
        var locations = $(el).data('locations');
        var bounds = new google.maps.LatLngBounds();
        var mapId = $(el).attr('id');

        function initialize_map() {
          var center_coordinates = new google.maps.LatLng('40.7653794', '-73.98068330000001');
          var mapOptions = {
            zoom: 15,
            maxZoom: 15,
            scrollwheel: false,
            draggable: true,
            center: center_coordinates,
            disableDefaultUI: true,
            styles: [
              {
                  "featureType": "all",
                  "elementType": "labels.text.fill",
                  "stylers": [
                      {
                          "saturation": 36
                      },
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 40
                      }
                  ]
              },
              {
                  "featureType": "all",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                      {
                          "visibility": "on"
                      },
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 16
                      }
                  ]
              },
              {
                  "featureType": "all",
                  "elementType": "labels.icon",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative",
                  "elementType": "geometry.fill",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 20
                      }
                  ]
              },
              {
                  "featureType": "administrative",
                  "elementType": "geometry.stroke",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 17
                      },
                      {
                          "weight": 1.2
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 20
                      }
                  ]
              },
              {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 21
                      }
                  ]
              },
              {
                  "featureType": "road.highway",
                  "elementType": "geometry.fill",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 17
                      }
                  ]
              },
              {
                  "featureType": "road.highway",
                  "elementType": "geometry.stroke",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 29
                      },
                      {
                          "weight": 0.2
                      }
                  ]
              },
              {
                  "featureType": "road.arterial",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 18
                      }
                  ]
              },
              {
                  "featureType": "road.local",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 16
                      }
                  ]
              },
              {
                  "featureType": "transit",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 19
                      }
                  ]
              },
              {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "color": "#000000"
                      },
                      {
                          "lightness": 17
                      }
                  ]
              }
            ]
          };

          map = new google.maps.Map(document.getElementById( mapId ), mapOptions);

          $.each( locations, function() {
            var newMarker = this;
            var geocoder = new google.maps.Geocoder();
            var latLng = {lat: parseFloat( newMarker['lat'] ), lng: parseFloat( newMarker['lng'] )};

            var icon = {
              path: _this.mapPinIcon,
              fillColor: _this.pinColor,
              fillOpacity: 1,
              anchor: new google.maps.Point( 12, 16 ),
              strokeWeight: 0,
              scale: 1.5
            };

            var marker = new google.maps.Marker({
              position: latLng,
              map: map,
              icon: icon
            });
/*
            var infoContent = '<div class="infowindow"><span class="infowindow__title">Locate</span>'+
                              '<address>'+site_info.address.street+'<br>'+site_info.address.city+', '+site_info.address.state+' '+site_info.address.zip+'</address>'+
                              '<a class="primary-hover" href="https://www.google.com/maps/place/'+_this.address+'" target="_blank">Get Directions</a></div>';

            var infowindow = new google.maps.InfoWindow({
              content: infoContent,
            });*/

          bounds.extend(marker.position);

          marker.addListener('click', function() {
            console.log(map.lat());
           // infowindow.open(map, marker);
          });

          });

          map.fitBounds(bounds);

        }

        if ( typeof $(el) !== 'undefined' && $( el ).length > 0 ) {
          google.maps.event.addDomListener(window, 'load', initialize_map);
        }
        /* Dev Note: this was here a second time. Seems like it should be nested in an "else"?
        //initialize_map();
        */

      });

    },


    finalize: function() {

      var _this = this;
    }
  };
  // Hooks the component into the app
  app.registerComponent( 'location-map', COMPONENT );
} )( app );
