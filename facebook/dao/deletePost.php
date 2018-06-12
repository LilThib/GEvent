/**
* Projet : Projet Blog M152
* Auteur : Thibaut Michaud
* Version 09.04.2018 / PC / Codage initial
*/

<?php
require_once './dao.php';

if (isset($_GET['id'])) {
    deletePost($_GET['id']);
}

header("location: ../index.php");
exit();

