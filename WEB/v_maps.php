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
    <body>
        <?php include './nav.php'; ?>
        <main>
            <div id="map"></div>
            <script>
                function initMap() {
                    var geneva = {lat: 46.2, lng: 6.1667};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 11,
                        center: geneva
                    });
                    var marker = new google.maps.Marker({
                        position: geneva,
                        map: map
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