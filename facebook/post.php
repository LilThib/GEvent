/**
* Projet : Projet Blog M152
* Auteur : Thibaut Michaud
* Version 09.04.2018 / PC / Codage initial
*/
<?php
include './dao/dao.php';
$erreurs = array();
$modify = false;
$titre = "Poster quelque chose sur votre mur";
$comment = "What's up ?";
$labelFichier = "Fichier";
$adress = "";

//on définit la taille maximale
define('MAXSIZE', 100000000);

if (isset($_GET['id'])) {
    $modify = true;
    $titre = "Modifier le post";
    $labelFichier = "Ajouter un fichier supplémentaire";
    $post = getPost($_GET['id']);
    $idPost = $post['idPost'];
    $comment = $post['commentaire'];
    $medias = getImagesOfPost($post['idPost']);
}

if (isset($_POST['submit'])) {
    $comment = trim(filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING));
    if ($modify) {
        updatePost($idPost, $comment);
        $OK = TRUE;
        $erreurs = array();
    } else {
        $idPost = createPost($comment);
        if (isset($_POST['mycxb'])) {
            $adress = trim(filter_input(INPUT_POST, 'user_input_autocomplete_address', FILTER_SANITIZE_STRING));
            $name = trim(filter_input(INPUT_POST, 'place_name', FILTER_SANITIZE_STRING));
            $json_adress = geocode($adress);
            $array_adress = json_decode($json_adress);
            $lat = $array_adress->results[0]->geometry->location->lat;
            $lng = $array_adress->results[0]->geometry->location->lng;
            createMarker($name, $adress, $lat, $lng, "post", $idPost);
        }
    }
    //echo "affichage" . var_dump($_FILES['image']) . "done";
    if ($_FILES['image']['size'] > 0 && $_FILES['image']['error'] > 0) {
        for ($i = 0; $i < count($_FILES['image']['name']); $i++) {

            //Indique si le fichier a été téléchargé
            if (is_uploaded_file($_FILES['image']['tmp_name'][$i])) {
                //liste des extensions possibles
                $extensions = array('image/png', 'image/jpg', 'image/jpeg', 'video/mp4', 'video/ogg', 'video/webm', 'audio/mpeg');

                //récupère la chaîne à partir du dernier / pour connaître l'extension
                $extension = $_FILES['image']['type'][$i];

                //vérifie si l'extension est dans notre tableau
                if (!in_array($extension, $extensions)) {
                    array_push($erreurs, 'Vous devez uploader un fichier de type png, jpg, jpeg.');
                } else {
                    if ($_FILES['image']['size'][$i] > MAXSIZE) {
                        array_push($erreurs, 'Votre image est supérieure à la taille maximale de ' . MAXSIZE . ' octets');
                    } else {
                        //Lecture du fichier
                        $image = file_get_contents($_FILES['image']['tmp_name'][$i]);
                        $nomImage = uniqid();
                        createMedia($nomImage, $extension, $image, $idPost);
                        $OK = TRUE;
                        $erreurs = array();
                    }
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>MyBlog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/ios_switch.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="assets/css/facebook.css" rel="stylesheet">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">       
    </head>
    <body>
        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">
                    <!-- main right col -->
                    <div class="column col-sm-12 col-xs-11" id="main">
                        <?php DisplayNav(true); ?>
                        <div class="padding">
                            <div class="col-sm-1"></div>
                            <div class="full col-sm-10">
                                <div class="row">
                                    <div class="panel panel-default col-sm-10">
                                        <div class="panel">
                                            <h3> <?php echo $titre; ?> </h3>
                                        </div> <!-- Welcome div -->
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <fieldset>
                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="commentaire">Comment</label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" id="commentaire" name="commentaire"><?php echo $comment; ?></textarea>
                                                    </div>
                                                </div>
                                                <?php if ($modify) { ?>
                                                <table class="table table-bordered table-hover table-fixed col-md-8">
                                                        <thead>
                                                        <th class="col-md-10">Média</th>
                                                        <th class="col-md-2">Supprimer</th>
                                                        </thead>
                                                        <?php while ($media = $medias->fetch()) { ?>
                                                            <tr>
                                                                <td class="col-md-10">
                                                                    <?php
                                                                    if (strpos($media['typeMedia'], "video") !== FALSE) {
                                                                        DisplayVideo($media['typeMedia'], $media['media']);
                                                                    } else if (strpos($media['typeMedia'], "image") !== FALSE) {
                                                                        DisplayImage($media['typeMedia'], $media['media']);
                                                                    } else if (strpos($media['typeMedia'], "audio") !== FALSE) {
                                                                        DisplaySound($media['typeMedia'], $media['media']);
                                                                    }
                                                                    ?>
                                                                        </td>
                                                                        <td class = "col-md-2">
                                                                            <a href="dao/deleteMedia.php?idPost=<?php echo $idPost . "&idMedia=" . $media['idMedia']; ?>">
                                                                                <button type="button" class="btn btn-default btn-lg">
                                                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                                </button>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                                ?>

                                                        </table>
                                                    <?php } ?>
                                                    <!-- File Button -->
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label" for="image"><?php echo $labelFichier; ?></label>
                                                        <div class="col-md-4">
                                                            <input id="image" name="image[]" class="input-file" type="file" multiple 
                                                                   accept=" image/png,
                                                                   image/jpeg,
                                                               image/jpg,
                                                               video/mp4,
                                                               video/webm,
                                                               video/ogg,
                                                               audio/mpeg">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="switch">Send as position</label>
                                                    <label class="switch">
                                                        <input name="mycxb" id="mycbx" type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div id="mydiv" hidden >
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Place</label>
                                                        <div class="col-sm-4">
                                                            <fieldset>
                                                                <div class="form-group">
                                                                <input id="user_input_autocomplete_address" name="user_input_autocomplete_address"
                                                                   class="form-control" placeholder="Start typing your address...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">Nom de l'endroit</label>
                                                                <div class="col-sm-8">
                                                                    <input id="place_name" name="place_name" type="text" placeholder="Parc de la grange" class="form-control">
                                                                </div>
                                                            </div>
                                                            </fieldset>
                                                            <fieldset class="disabled" hidden>

                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label"><code>street_number</code></label>
                                                                    <div class="col-sm-8">
                                                                        <input id="street_number" name="street_number" disabled="true" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label"><code>route</code></label>
                                                                    <div class="col-sm-8">
                                                                        <input id="route" name="route" disabled="true" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label"><code>locality</code></label>
                                                                    <div class="col-sm-8">
                                                                        <input id="locality" name="locality" disabled="true" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label"><code>administrative_area_level_1</code></label>
                                                                    <div class="col-sm-8">
                                                                        <input id="administrative_area_level_1" name="administrative_area_level_1" disabled="true" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label"><code>postal_code</code></label>
                                                                    <div class="col-sm-8">
                                                                        <input id="postal_code" name="postal_code" disabled="true" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label"><code>country</code></label>
                                                                    <div class="col-sm-8">
                                                                        <input id="country" name="country" disabled="true" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="submit"></label>
                                                    <div class="col-md-4">
                                                        <button id="submit" name="submit" class="btn btn-primary"><?php echo $modify ? "Modify" : "Post"; ?></button>
                                                    </div>
                                                </div>
                                                <?php
                                                foreach ($erreurs as $erreur) {
                                                    DisplayError($erreur, "danger");
                                                }
                                                if (empty($erreurs) && isset($OK)) {
                                                    DisplayError("Insertion réussie", "success");
                                                }
                                                ?>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /col-9 -->
                        </div><!-- /padding -->
                    </div>
                    <!-- /main -->
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDSom_03mhi45ixDwuHHibM9ZsoCyHrMs0"></script>
        <script type="text/javascript" src="assets/js/autocompleteform.js"></script>
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

            $('#mycbx').change(function () {
                if ($(this).prop("checked")) {
                    $('#mydiv').show();
                } else {
                    $('#mydiv').hide("slow");
                }
            });
        </script>
    </body>
</html>
