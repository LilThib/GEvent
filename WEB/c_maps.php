<?php
require_once './model/googleMaps.php';
require_once './model/events.php';

ExtractEventsFromBDD();
$nbEvents = countValidateEvents();

if (isset($_SESSION['logged'])) {
    $userLoggedId = $_SESSION['UserLogged']['idUser'];
    $privateEvents = getEventsFromSpecificUser($userLoggedId);
    $publicEvents = getPublicEvents();
} else {
    header("location: index.php");
    exit();
}

include './view/v_maps.php';


