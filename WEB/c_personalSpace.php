<?php

require_once 'model/users.php';
require_once 'model/events.php';
require_once 'model/friends.php';
require_once 'model/functions.php';

$msgAddFriend = "";
$typeAddFriend = "danger";

if (isset($_SESSION['logged'])) {
    $userLoggedId = $_SESSION['UserLogged']['idUser'];
    $Getfriends = getFriendsOf($userLoggedId);
    $nbFriends = $Getfriends[0];
    $friends = $Getfriends[1];
    $GetEvents = getEventsOrganizedByUser($userLoggedId);
    $nbEvents = $GetEvents[0];
    $events = $GetEvents[1];   
} else {
    header("location: index.php");
    exit();
}

if (isset($_POST['addFriend'])) {
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    var_dump($username);
    if (UserExsist($username)) {
        addFriend($userLoggedId, getId($username));
        $typeAddFriend = "success";
        $msgAddFriend = DisplayError("L'ami a bien été ajouté", $typeAddFriend);
    } else {
        $msgAddFriend = DisplayError("Cet utilisateur n'existe pas", $typeAddFriend);
    }
}

include './view/v_personalSpace.php';

