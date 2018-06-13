<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!-- Bootsrap style -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/style.css"> <!-- General style -->
        <link rel="stylesheet" href="css/v_CRUD-Event_style.css"> <!-- Specific style -->

        <!-- Date picker style -->
        <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"> <!-- Custom scroll-bar style -->
        <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>

        <link rel="stylesheet" href="css/chip.css"> <!-- Specific style -->
    </head>
</head>
<body>
    <div class="container">
        <?php include 'view/v_nav.php'; ?>
        <div class="row justify-content-center" style="margin-top: 10%">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <h2 class="card-title mt-2">Créer un évènement</h2>
                    </header>
                    <article class="card-body">
                        <form class="col-md-10" style="margin-left: 8%" method="POST" action="c_CRUD-Event.php">
                            <div class="form-group">
                                <label>Nom de l'évènement</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input id="datepicker" width="300" name="date"/>
                            </div>
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" placeholder=""></textarea>
                                <small class="form-text text-muted">N'hésitez-pas a mettre un maximum d'information</small>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Adresse</label>
                                <fieldset>
                                    <div class="form-group">
                                        <input name="adress" id="user_input_autocomplete_address" name="user_input_autocomplete_address"
                                               class="form-control" placeholder="Start typing your address...">
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">Nom de l'endroit</label>
                                        <div class="">
                                            <input id="place_name" name="place_name" type="text" placeholder="Parc de la grange" class="form-control">
                                        </div>
                                    </div>
                                </fieldset>                                      
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="public" id="public" value="public" checked>
                                    <label class="form-check-label" for="public">
                                        Public
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="public" id="private" value="private">
                                    <label class="form-check-label" for="private">
                                        Privé
                                    </label>
                                </div>
                            </div>
                            <div id="guestlist" hidden="">
                                <label class=" control-label">Invité(s)</label>
                                <div data-simplebar id="panel-display-friend" class="white-transparent-box" style="max-height: 300px; margin: 10px 0 20px 5%; background-color: rgba(255,255,255,0.5); border-radius: 5px; overflow-y: hidden ">
                                    <?php
                                    while ($friend = $friends->fetch()) {
                                        ?>
                                        <div class="chip">
                                            <img src="img/img_avatar.png" alt="Person" width="96" height="96">                                        
                                            <?= $friend['username'] ?>
                                            <input class="form-check-input" type="checkbox" value="guest_<?= $friend['idUser'] ?>" name="guest[]" id="defaultCheck1">
                                            </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submitAddEvent" class="btn btn-lg btn-primary btn-block">Créer l'évènement</button>
                            </div> <!-- form-group// -->
                            <?php echo $msg; ?>
                            <small class="text-muted">Tous les paramètres de l'évènement peuvent être modifié ultérieurement</small>                                          
                        </form>
                    </article> <!-- card-body end .// -->
                </div> <!-- card.// -->
            </div> <!-- col.//-->
        </div> <!-- row.//-->
    </div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSom_03mhi45ixDwuHHibM9ZsoCyHrMs0&libraries=places"></script>
    <script type="text/javascript" src="js/autocompleteform.js"></script>
</body>
</html>
