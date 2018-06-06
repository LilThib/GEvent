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
        <?php include 'v_nav.php'; ?>
        <main>
            <div class="cd-fixed-bg cd-fixed-bg--1">
                <div class="cd-fixed-bg__content">
                    <img src="img/logo_gevent_white_full.png"  alt="...">
                    <h1>Bienvenue ! Connectez-vous</h1>
                    <a href="v_login.php"><button type="button" class="btn btn-outline-light btn-lg">Connexion</button></a>
                </div>
            </div> <!-- cd-fixed-bg -->

            <div class="cd-scrolling-bg cd-scrolling-bg--color-1">
                <div class="cd-scrolling-bg__content">
                    <p>
                        GEvent est une application permettant d'organiser des évènements en quelques clics. <br /> 
                        Vous pouvez organiser des évènements avec seulement vos amis ou bien un évènement public.
                    </p>
                </div> <!-- cd-scrolling-bg__content -->
            </div> <!-- cd-scrolling-bg -->

            <div class="cd-fixed-bg cd-fixed-bg--2">
                <div class="cd-fixed-bg__content" style="background-color: rgba(0, 0, 0, 0.5);">
                    <h1>Un affichage innovant</h1>
                </div>
            </div> <!-- cd-fixed-bg -->

            <div class="cd-scrolling-bg cd-scrolling-bg--color-2">
                <div class="cd-scrolling-bg__content">
                    <p>
                        GEvent vous permet de visualiser plus simplement tous les évènements près de chez vous </br>
                        en les affichant sur une carte interactive.
                    </p>
                </div> <!-- cd-scrolling-bg__content -->
            </div> <!-- cd-scrolling-bg -->

            <div class="cd-fixed-bg cd-fixed-bg--3">
                <div class="cd-fixed-bg__content" style="background-color: rgba(0, 0, 0, 0.5);">
                    <h1>Voir la carte <img src="https://png.icons8.com/ios/50/ffffff/marker-filled.png"></h1>
                    <a href="v_maps.php"><button type="button" class="btn btn-outline-light btn-lg">Go !</button></a>
                </div>
            </div> <!-- cd-fixed-bg -->
        </main>
        <script src="js/main.js"></script> <!-- Resource JavaScript -->
    </body>
</html>