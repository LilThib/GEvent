<?php

require_once 'model/events.php';

$msg = "";
$modify = false;

$title = "";
$description = "";
$date = "";
$user = "";

if (isset($_GET['id'])) {
    $modify = true;
    $eventlogin = getEvent($_GET['id']);
    $title = $eventlogin['Title'];
    $description = $eventlogin['Description'];
    $date = $eventlogin['DateEvent'];
    $user = $eventlogin['idUser'];
} else {
    $modify = false;
}

if ($modify) {
    $titre = "Modifier un évenement";
    $idEvent = $_GET['id'];
    if (filter_has_var(INPUT_POST, 'submit')) {
        $titleCandidat = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
        $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
        $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
        $user = trim(filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING));
        if (!EventXsist($titleCandidat) || ($title == $titleCandidat)) {
            $title = $titleCandidat;
            UpdateEvents($idEvent, $titleCandidat, $date, $description, $user);
            $msg = "L'évenement a été modifié avec succès";
            header("location: showevents.php");
        } else {
            $msg = "L'évenement ne peut pas être modifié";
        }
    }
} else {
    $titre = "Ajouter un évenement";
    if (filter_has_var(INPUT_POST, 'submit')) {
        $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
        $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
        $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
        $user = trim(filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING));
        if (!EventXsist($title)) {
            addEvent($title, $description, $date, $user);
            $msg = "L'évenement a été ajouté avec succès";
            header("location: showevents.php");
        } else {
            $msg = "Le titre d'évenement n'est pas disponible";
        }
    }
}
include 'views/eventform.php';

