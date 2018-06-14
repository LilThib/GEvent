<?php

require_once 'model/events.php';
require_once 'model/functions.php';
require_once 'model/friends.php';
require_once 'model/googleMaps.php';

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

if (filter_has_var(INPUT_POST, 'submitAddEvent')) {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
    $date = $_POST['date    '];
    $adress = trim(filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING));
    $place_name = trim(filter_input(INPUT_POST, 'place_name', FILTER_SANITIZE_STRING));

    $xml = geocode($adress);
    $lat = $xml->result[0]->geometry[0]->location[0]->lat;
    $lng = $xml->result[0]->geometry[0]->location[0]->lng;

    if ($_POST['public'] == 'private') {
        $private = true;
    } else {
        $private = false;
    }


    if ($name == "" || $description == "" || $date == "" || $adress = "" || $place_name == "") {
        $msg = "Tous les champs doivent être remplis";
    } else {
        $idEvent = addEvent($name, $description, $date, $private, $lat, $lng, $place_name, $adress, $userLoggedId, 1);
        echo $idEvent;
        if ($_POST['public'] == 'private') {
            foreach ($_POST['guest'] as $idGuest) {
                AddGuestOnEvent($idGuest, $idEvent);
            }
        }
        $msg = "L'évènement a bien été créé";
        $type = "success";
    }


    $msg = DisplayError($msg, $type);
}

include './view/v_CRUD-Event.php';
