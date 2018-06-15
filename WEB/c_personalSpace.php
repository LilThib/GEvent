<?php
session_start();
require_once 'model/friends.php';

if (isset($_SESSION['logged'])) {
    $userLoggedId = $_SESSION['UserLogged']['idUser'];
    $friends = getFriendOf($userLoggedId);
} else {
    header("location: index.php");
    exit();
}

include './view/v_personalSpace.php';

