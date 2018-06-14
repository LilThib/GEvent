<?php
require_once './model/googleMaps.php';
require_once './model/events.php';

ExtractEventsFromBDD();

if (isset($_SESSION['logged'])) {
    $userLoggedId = $_SESSION['UserLogged']['idUser'];
    $events = getEventsFromSpecificUser($userLoggedId);
} else {
    header("location: index.php");
    exit();
}

include './view/v_maps.php';


