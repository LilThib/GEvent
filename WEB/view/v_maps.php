<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
        <link rel="stylesheet" href="css/style.css"> <!-- General style -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">

        <title>gEvent</title>
    </head>
    <body style="overflow-x: hidden">
        <?php include 'view/v_nav.php'; ?>
        <main>
            <div class="row">
                <div class="col-md-9 pl-5">             
                    <div id="map" style="margin-top: 7%"></div>
                </div>
                <div class="col-md-3 pr-5" style="margin-top: 5%">
                    <div class="card">
                        <div class="card-body">
                            <h1>Tous les évènements (<?= $nbEvents ?>)</h1>
                        </div>
                    </div>
                    <div class="Events">
                        <div class="card text-center mt-2 mb-2 pt-2 pb-2" style="font-size: medium">
                            <h3><b>Évènements privés</b></h3>
                        </div>
                        <?php
                        while ($privateEvent = $privateEvents->fetch()) {
                            ?>
                            <div class="card" style="font-size: medium; margin-bottom: 5px;">
                                <div class="card-body">
                                    <h2 class="card-title"><?= $privateEvent['name'] ?></h2>
                                    <h3 class="card-subtitle mb-2 text-muted"><?= $privateEvent['date'] ?></h3>
                                    <p class="card-text"><?= $privateEvent['description'] ?></p>
                                    <a href="#" class="card-link">Détails de l'évènements</a>
                                    <button type="button" class="btn btn-lg btn-primary ml-5" onclick="showEvent(<?= $privateEvent['lat'] ?>, <?= $privateEvent['lng'] ?>)">Voir sur la carte</button>
                                </div>
                            </div>
                            <?php
                        }
                        $privateEvents->closeCursor();
                        ?>
                        <div class="card text-center mt-2 mb-2 pt-2 pb-2" style="font-size: medium">
                            <h3><b>Évènements publics</b></h3>
                        </div>
                        <?php
                        while ($publicEvent = $publicEvents->fetch()) {
                            ?>                      
                            <div class="card" style="font-size: medium; margin-bottom: 5px;">
                                <div class="card-body">
                                    <h2 class="card-title"><?= $publicEvent['name'] ?></h2>
                                    <h3 class="card-subtitle mb-2 text-muted"><?= $publicEvent['date']; ?></h3>
                                    <p class="card-text"><?= $publicEvent['description'] ?></p>
                                    <a href="#" class="card-link">Détails de l'évènements</a>
                                    <button type="button" class="btn btn-lg btn-primary ml-5" onclick="showEvent(<?= $publicEvent['lat'] ?>, <?= $publicEvent['lng'] ?>)">Voir sur la carte</button>
                                </div>
                            </div>
                            <?php
                        }
                        $privateEvents->closeCursor();
                        ?>
                    </div>
                </div>
            </div>
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

                function showEvent(newLat, newLng) {
                    var point = new google.maps.LatLng(newLat,newLng)
                    map.setCenter(point);
                }

                function initMap() {

                    var geneva = {lat: 46.2, lng: 6.1667};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 11,
                        center: geneva,
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                            position: google.maps.ControlPosition.TOP_BOTTOM
                        },
                        zoomControl: true,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.LEFT_CENTER
                        },
                        scaleControl: true,
                        streetViewControl: true,
                        streetViewControlOptions: {
                            position: google.maps.ControlPosition.RIGHT_CENTER
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
        </main>
        <script src="js/main.js"></script> <!-- Resource JavaScript -->
    </body>
</html>