<?php

require_once 'model/events.php';
require_once 'model/functions.php';
require_once 'model/friends.php';

if (isset($_SESSION['logged'])) {
    $userLoggedId = $_SESSION['UserLogged']['idUser'];
    $friends = getFriendOf($userLoggedId);
} else {
    header("location: index.php");
    exit();
}


$msg = "";
$type = "danger";

$name = (empty($_POST['name'])) ? '' : $_POST['name'];
$description = (empty($_POST['description'])) ? '' : $_POST['description'];
$date = (empty($_POST['date'])) ? '' : $_POST['date'];
$adress = (empty($_POST['adress'])) ? '' : $_POST['adress'];
$place_name = (empty($_POST['place_name'])) ? '' : $_POST['place_name'];

var_dump($_POST['guest']);

if (filter_has_var(INPUT_POST, 'submitAddEvent')) {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
    $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
    $adress = trim(filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING));
    $place_name = trim(filter_input(INPUT_POST, 'place_name', FILTER_SANITIZE_STRING));

    if ($_POST['public'] == 'private') {
        $private = true;
        foreach ($_POST['guest'] as $value) {
            
        }
    } else {
        $private = false;
    }

    if ($name == "" || $description == "" || $date == "" || $adress = "" || $place_name == "") {
        $msg = "Tous les champs doivent être remplis";
    } else {
        addEvent($name, $description, $date, $private, $lat, $lng, $place_name, $adress, $idUser, $validate);

        $msg = "Votre compte a été créer vous pouvez vous <a href=\"c_login.php\">connecter</a>";
        $type = "success";
    }
    $msg = DisplayError($msg, $type);
}

include './view/v_CRUD-Event.php';
