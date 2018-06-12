/**
* Projet : Projet Blog M152
* Auteur : Thibaut Michaud
* Version 09.04.2018 / PC / Codage initial
*/
<?php
require_once './dao.php';

if (isset($_GET['idMedia'])) {
    deleteMedia($_GET['idMedia']);
}

$idPost = trim(filter_input(INPUT_GET, 'idPost', FILTER_SANITIZE_STRING));
header("location: ../post.php?id=" . $idPost . "");
exit();

