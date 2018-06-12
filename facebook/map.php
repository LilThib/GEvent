<?php
require_once './dao/dao.php';
ExtractMarkerFromBDD();

/*
 * Projet : Projet Blog M152
 * Auteur : Thibaut Michaud
 * Version 09.04.2018 / PC / Codage initial
 */
require_once './dao/dao.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <!-- head -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>MyBlog - carte</title>
        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                width: 100%;
                margin-top: 3%;
                height: 94%;
                background-color: grey;
            }

            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="assets/css/facebook.css" rel="stylesheet">
    </head>
    <!-- head -->
    <body>
        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">
                    <!-- main right col -->
                    <div class="column col-sm-12 col-xs-12" id="main">
                        <?php DisplayNav(); ?>
                        <!-- /top nav -->
                        <div id="map"></div>
                        <script>


                            function downloadUrl(url, callback) {
                                var request = window.ActiveXObject ?
                                        new ActiveXObject('Microsoft.XMLHTTP') :
                                        new XMLHttpRequest;

                                request.onreadystatechange = function () {
                                    if (request.readyState == 4) {
                                        request.onreadystatechange = doNothing;
                                        callback(request, request.status);
                                    }
                                };

                                request.open('GET', url, true);
                                request.send(null);
                            }

                            function doNothing() {}

                            function initMap() {
                              
                                var geneva = {lat: 46.2, lng: 6.1667};
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 11,
                                    center: geneva,
                                    mapTypeControl: true,
                                    mapTypeControlOptions: {
                                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                                        position: google.maps.ControlPosition.TOP_CENTER
                                    },
                                    zoomControl: true,
                                    zoomControlOptions: {
                                        position: google.maps.ControlPosition.LEFT_CENTER
                                    },
                                    scaleControl: true,
                                    streetViewControl: true,
                                    streetViewControlOptions: {
                                        position: google.maps.ControlPosition.LEFT_TOP
                                    },
                                    fullscreenControl: true

                                });
                              

                                var infoWindow = new google.maps.InfoWindow;

                                // Change this depending on the name of your PHP or XML file
                                downloadUrl('markers.xml', function (data) {
                                    var xml = data.responseXML;
                                    var markers = xml.documentElement.getElementsByTagName('marker');
                                    Array.prototype.forEach.call(markers, function (markerElem) {
                                        var name = markerElem.getAttribute('name');
                                        var address = markerElem.getAttribute('address');
                                        var type = markerElem.getAttribute('type');
                                        var point = new google.maps.LatLng(
                                                parseFloat(markerElem.getAttribute('lat')),
                                                parseFloat(markerElem.getAttribute('lng')));

                                        var infowincontent = document.createElement('div');
                                        var strong = document.createElement('strong');
                                        strong.textContent = name
                                        infowincontent.appendChild(strong);
                                        infowincontent.appendChild(document.createElement('br'));

                                        var text = document.createElement('text');
                                        text.textContent = address
                                        infowincontent.appendChild(text);
                                        var icon = {};
                                        var marker = new google.maps.Marker({
                                            map: map,
                                            position: point,
                                            label: icon.label
                                        });
                                        marker.addListener('click', function () {
                                            infoWindow.setContent(infowincontent);
                                            infoWindow.open(map, marker);
                                        });
                                    });
                                });
                            }
                        </script>
                        <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSom_03mhi45ixDwuHHibM9ZsoCyHrMs0&callback=initMap">
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript">
                            $(document).ready(function () {
                                $('[data-toggle=offcanvas]').click(function () {
                                    $(this).toggleClass('visible-xs text-center');
                                    $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
                                    $('.row-offcanvas').toggleClass('active');
                                    $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
                                    $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
                                    $('#btnShow').toggle();
                                });
                            });
        </script>
    </body>
</html>

