<?php

require_once './model/users.php';
require_once './model/functions.php';

$msg = "";
$type = "danger";

$username = (empty($_POST['pseudo'])) ? '' : $_POST['pseudo'];
$pwd = "";


if (filter_has_var(INPUT_POST, 'submitLogin')) {
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $pwd = filter_input(INPUT_POST, 'password');
    if (CheckLogin($username, $pwd)) {
        $_SESSION['UserLogged'] = getUser($username);
        $_SESSION['logged'] = true;

        header("location: index.php");
        exit();
    } else {
        $msg = "Le pseudo et / ou le mot de passe sont incorrect";
    }
    $msg = DisplayError($msg, $type);
}

include './view/v_login.php';
