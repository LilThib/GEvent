<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Space</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"> <!-- General style -->
        <link rel="stylesheet" href="css/chip.css"> <!-- Specific style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"> <!-- Custom scroll-bar style -->
        <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>
        <style>body{background-image: url("img/kaleb-nimz-904-unsplash.jpg")}</style>
    </head>
    <body>

        <?php include 'v_nav.php'; ?>
        <div class="col-md-4">
            <div class="white-transparent-box" id="panel-search-friend" style="height: 80px; margin-top: 15%; margin-left: 5%;">
                <input placeholder="Search.." type="text">
                <button type="button" class="btn btn-primary" ><img src="img/glyphicons/glyphicons/png/glyphicons-28-search.png"></button>
            </div>

            <div data-simplebar id="panel-display-friend" class="white-transparent-box" style="min-height: 400px; max-height: 700px; margin-top: 10px; margin-left: 5%;">
                <div class="chip">
                    <img src="img/img_avatar.png" alt="Person" width="96" height="96">
                    John Doe <?= $userLoggedId ?>
                </div>
                <div class="chip">
                    <img src="img/img_avatar.png" alt="Person" width="96" height="96">
                    John Doe
                </div>
                <div class="chip">
                    <img src="img/img_avatar.png" alt="Person" width="96" height="96">
                    John Doe
                </div>
                <div class="chip">
                    <img src="img/img_avatar.png" alt="Person" width="96" height="96">
                    Johasddsarerzuzutz
                </div>
            </div>
        </div>
    </body>
</html>

