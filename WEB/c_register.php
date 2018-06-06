<?php

require_once 'model/users.php';
require_once 'model/functions.php';

$msg = "";
$type = "danger";
$email = (empty($_POST['email'])) ? '' : $_POST['email'];
$username = (empty($_POST['username'])) ? '' : $_POST['username'];



if (filter_has_var(INPUT_POST, 'submitRegister')) {
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];

    if ($email == "") {
        $msg = "L'email ne peut pas être vide";
    } elseif ($pwd1 != $pwd2) {
        $msg = "Les mots de passe sont différents";
    } elseif (strlen($pwd1) < 8) {
        $msg = "Le mot de passe est trop court";
    } elseif (UserExsist($username)) {
        $msg = "Le pseudo n'est pas disponible";
    } else {
        addUser($username, $email, $pwd1);
        $username = "";
        $email = "";
        $msg = "Votre compte a été créer vous pouvez vous <a href=\"c_login.php\">connecter</a>";
        $type = "success";
    }
    $msg = DisplayError($msg, $type);
}

include './view/v_register.php';
