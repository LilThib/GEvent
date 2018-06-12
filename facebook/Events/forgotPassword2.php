<?php

require_once 'model/users.php';

$msg = "";

$pseudo = (empty($_POST['pseudo'])) ? '' : $_POST['pseudo'];
$pwd = "";


if (filter_has_var(INPUT_POST, 'submit')) {
    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    $num = trim(filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING));
    
    if (empty($num) && !empty($email)) {
        
        if (CheckReinitEmail($pseudo, $email)) {
            StartPwdReinitialisation($pseudo);
        }
    }
    elseif (empty($email) && !empty($num)) {
        if (CheckReinitNum($pseudo, $num)) {
            StartPwdReinitialisation($pseudo);
        }
    } else {
        $msg = "L'email ou le n° de tel ne correspond pas au pseudo";
    }
}

include 'views/loginform.php';
