<?php

require_once 'model/users.php';

$msg = "";

$pseudo = (empty($_POST['pseudo'])) ? '' : $_POST['pseudo'];
$pwd = "";


if (filter_has_var(INPUT_POST, 'submitLogin')) {
    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
    $pwd = filter_input(INPUT_POST, 'password');
    if (!CheckLogin($pseudo, $pwd)) {
        $msg = "Le pseudo et / ou le mot de passe sont incorrect";
    } else {
        $_SESSION['loggedUser'] = get;
        header("location: showusers.php");
        exit();
    }
}

include 'views/loginform.php';


