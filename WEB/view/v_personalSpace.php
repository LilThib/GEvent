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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/style.css"> <!-- General style -->
        <link rel="stylesheet" href="css/chip.css"> <!-- Specific style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"> <!-- Custom scroll-bar style -->
        <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>
        <style>body{background-image: url("img/kaleb-nimz-904-unsplash.jpg")}</style>
    </head>
    <body>
        <?php include 'v_nav.php'; ?>
        <div class="row">
            <div class="col-md-3">
                <div class="white-transparent-box ml-4" id="panel-search-friend" style="height: 80px; margin-top: 20%;">
                    <div class="input-group mb-3 mx-auto mt-4 col-md-10">
                        <input type="text" class="form-control" placeholder="Nom de l'ami" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary" ><img src="img/glyphicons/glyphicons/png/glyphicons-28-search.png"></button>
                        </div>
                    </div>
                </div>
                <div data-simplebar id="panel-display-friend" class="white-transparent-box mt-2 ml-4 pt-2" style="min-height: 400px; max-height: 700px;">
                    <?php
                    while ($friend = $friends->fetch()) {
                        ?>
                    <div class="chip">
                            <img src="img/img_avatar.png" class="avatar-img" alt="Person" width="96" height="96">
                            <?= $friend['username'] ?>
                            <button type="button" class="btn deleteCross" data-toggle="modal" data-target="#modalDelete<?= $friend['idUser'] ?>">
                                <img src="img/icons8-delete-filled-50.png" width="30" height="30">
                            </button>   
                        </div> 
                        <div class="modal" id="modalDelete<?= $friend['idUser'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="modal-title" id="exampleModalLabel">Confirmer</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <?php echo "Voulez-vous vraiment supprimer"; ?><br>
                                            Cette action est irréversible. 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                                            <a href="deleteuser.php?id=<?php echo $donnees['idUser']; ?>">
                                                <button type="button" class="btn btn-primary">Supprimer</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $friends->closeCursor();
                        ?>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="white-transparent-box" id="panel-search-friend" style="height: 80px; margin-top: 20%;">
                    <div class="input-group mb-3 mx-auto mt-4 col-md-10">
                        <h4 style="color: white">Vos demandes d'amitié</h4>
                    </div>
                </div>
                <div data-simplebar id="panel-display-friend" class="white-transparent-box mt-2 pt-2" style="min-height: 400px; max-height: 700px;">
                    <?php
                    while ($friend = $friends->fetch()) {
                        ?>
                    <div class="chip">
                            <img src="img/img_avatar.png" class="avatar-img" alt="Person" width="96" height="96">
                            <?= $friend['username'] ?>
                            <button type="button" class="btn deleteCross" data-toggle="modal" data-target="#modalDelete<?= $friend['idUser'] ?>">
                                <img src="img/icons8-delete-filled-50.png" width="30" height="30">
                            </button>   
                        </div> 
                        <div class="modal" id="modalDelete<?= $friend['idUser'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="modal-title" id="exampleModalLabel">Confirmer</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <?php echo "Voulez-vous vraiment supprimer"; ?><br>
                                            Cette action est irréversible. 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                                            <a href="deleteuser.php?id=<?php echo $donnees['idUser']; ?>">
                                                <button type="button" class="btn btn-primary">Supprimer</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $friends->closeCursor();
                        ?>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="white-transparent-box" id="panel-search-friend" style="margin-top: 20%;">
                    <div class="input-group mb-3 mx-auto mt-4 col-md-10">
                        <h4 style="color: white">Ajouter un ami</h4>
                        <div class="input-group mb-3 mx-auto mt-2">
                            <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary" ><img src="img/glyphicons/glyphicons/png/glyphicons-28-search.png"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div data-simplebar id="panel-display-friend" class="white-transparent-box mt-4 ml-4 pt-2" style="height: 300px; max-height: 700px;">
                    <div class="input-group mb-3 mx-auto mt-4 col-md-10">
                        <h4 style="color: white">Vos évènements (...)</h4>
                    </div>
                </div> 
            </div>
            <div class="col-md-6">
                <div data-simplebar id="panel-display-friend" class="white-transparent-box mt-4 pt-2" style="height: 300px; max-height: 700px;">

                </div> 
            </div>
        </div>
    </body>
</html>

