(function ($) {
    //    "use strict";

    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'c',
            success: function (weather) {

                html = '<i class="wi wi-yahoo-' + weather.code + '"></i><h2> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
                html += '<div class="city">' + weather.city + ', ' + weather.region + '</div>';
                html += '<div class="currently">' + weather.currently + '</div>';
                html += '<div class="celcious">' + weather.alt.temp + '&deg;C</div>';

                $("#weather-one").html(html);
            },
            error: function (error) {
                $("#weather-one").html('<p>' + error + '</p>');
            }
        });

        /* Where in the world are you? */
        $('.js-geolocation').on('click', function() {
          navigator.geolocation.getCurrentPosition(function(position) {
            loadWeather(position.coords.latitude + ',' + position.coords.longitude); //load weather using your lat/lng coordinates
          });
        });
    }


    // init
    loadWeather('Rouen', '12597115');

})(jQuery);
