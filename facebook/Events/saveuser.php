<?php

require_once 'model/users.php';

$msg = "";
$modify = true;

$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
$pseudoCandidat = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
$pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
$num = trim(filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING));
$pwd = "";
$pwd2 = "";

if (isset($_GET['id'])) {
    $modify = true;
    $titre = "Modifier un utilisateur";
    $userlogin = getUser($_GET['id']);
    $idUser = $userlogin['idUser'];
    $firstname = $userlogin['FirstName'];
    $lastname = $userlogin['LastName'];
    $email = $userlogin['Email'];
    $num = $userlogin['Num'];
    $pseudo = $userlogin['Pseudo'];
    $Oldpwd = $userlogin['Pwd'];
} else {
    $modify = false;
    $titre = "Ajouter un utilisateur";
}

if (filter_has_var(INPUT_POST, 'submitModify')) {
    if (UserXsist($_POST['pseudo']) && $pseudoCandidat != $pseudo) {
        $msg = "Le pseudo n'est pas disponible";
    } else {
        UpdateUser($_POST['firstname'], $_POST['lastname'], $_POST['pseudo'], $_POST['num'], $_POST['email'], $idUser);
        $msg = "L'utilisateur a été modifié avec succès";
        header("location: showusers.php");
        exit();
    }
}
if (filter_has_var(INPUT_POST, 'submitPWD')) {
    if ($Oldpwd != sha1($_POST['OldPass'])) {
        $msg = "L'ancien mot de passe est incorrect";
    } elseif ($_POST['newPass'] != $_POST['repeatPass']) {
        $msg = "Les mots de passe sont différents";
    } elseif (strlen($_POST['newPass']) < 8) {
        $msg = "Le nouveau mot de passe est trop court";
    } else {
        UpdatePwd(sha1($_POST['newPass']), $idUser);
        $msg = "L'utilisateur a été modifié avec succès";
        header("location: saveuser.php?id=$idUser");
        exit();
    }
}
if (filter_has_var(INPUT_POST, 'submitAdd')) {
    if ($_POST['email'] == "" && $_POST['num'] == "") {
        $msg = "Il faut entrer soit un numéro de téléphone soit un email !";
    } elseif ($_POST['pwd'] != $_POST['pwd2']) {
        $msg = "Les mots de passe sont différents";
    } elseif (strlen($_POST['pwd']) < 8) {
        $msg = "Le mot de passe est trop court";
    } elseif (UserXsist($_POST['pseudo'])) {
        $msg = "Le pseudo n'est pas disponible";
    } else {
        addUser($_POST['firstname'], $_POST['lastname'], $_POST['pseudo'], $_POST['pwd'], $_POST['num'], $_POST['email']);
        $msg = "L'utilisateur a été ajouté avec succès";
        header("location: showusers.php");
        exit();
    }
}

include 'views/useform.php';

