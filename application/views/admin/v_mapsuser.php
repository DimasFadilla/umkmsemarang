<!DOCTYPE html>
<html>

<head>


    <style>
    #map-canvas {
        width: 2000px;
        height: 1000px;
    }

    <?php function limit_words($string, $word_limit) {
        $words=explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>
    </style>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOVYRIgupAurZup5y1PRh8Ismb1A3lLao&libraries=places&callback=initMap">
    </script>
    <script>
    <?php

    $no = 0;
    foreach ($data->result_array() as $d) :
      $no++;
      $id = $d['id_user'];
      $nim = $d['nim'];
      $nama = $d['nama_user'];
      $email = $d['email'];
      $latitude = $d['latitude'];
      $longtitude = $d['longtitude'];
    ?>
    var markers = [
        ['<?php echo $d['nama_user']; ?>', <?php echo $d['latitude']; ?>, <?php echo $d['longtitude']; ?>]
    ];

    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)

        var infowindow = new google.maps.InfoWindow(),
            marker, i;
        var bounds = new google.maps.LatLngBounds(); // diluar looping
        for (i = 0; i < markers.length; i++) {
            pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(pos); // di dalam looping
            marker = new google.maps.Marker({
                position: pos,
                map: map,
                animation: google.maps.Animation.BOUNCE
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(markers[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
            map.fitBounds(bounds); // setelah looping
        }

    }


    google.maps.event.addDomListener(window, 'load', initialize);
    <?php endforeach; ?>
    </script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        <body>
            <div id="map-canvas"></div>
        </body>

</html>