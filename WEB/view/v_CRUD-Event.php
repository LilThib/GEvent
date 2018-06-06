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
                            <form class="col-md-10" style="margin-left: 8%">
                                <div class="form-group">
                                    <label>Nom de l'évènement</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input id="datepicker" width="300" />
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
                                    <label class="control-label">Place</label>
                                    <div class="">
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
                                        <fieldset class="disabled" hidden>

                                            <div class="form-group">
                                                <label class=" control-label"><code>street_number</code></label>
                                                <div class="">
                                                    <input id="street_number" name="street_number" disabled="true" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label"><code>route</code></label>
                                                <div class="">
                                                    <input id="route" name="route" disabled="true" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label"><code>locality</code></label>
                                                <div class="">
                                                    <input id="locality" name="locality" disabled="true" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label"><code>administrative_area_level_1</code></label>
                                                <div class="">
                                                    <input id="administrative_area_level_1" name="administrative_area_level_1" disabled="true" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"><code>postal_code</code></label>
                                                <div class="">
                                                    <input id="postal_code" name="postal_code" disabled="true" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"><code>country</code></label>
                                                <div class="">
                                                    <input id="country" name="country" disabled="true" class="form-control">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submitAddEvent" class="btn btn-lg btn-primary btn-block">Créer l'évènement</button>
                                </div> <!-- form-group// -->      
                                <small class="text-muted">Tous les paramètres de l'évènement peuvent être modifié ultérieurement</small>                                          
                            </form>
                        </article> <!-- card-body end .// -->
                        <div class="border-top card-body text-center">Vous avez un compte ? <a href="v_login.php">Connectez-vous</a></div>
                    </div> <!-- card.// -->
                </div> <!-- col.//-->
            </div> <!-- row.//-->
        </div>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDSom_03mhi45ixDwuHHibM9ZsoCyHrMs0"></script>
        <script type="text/javascript" src="assets/js/autocompleteform.js"></script>
    </body>
</html>
