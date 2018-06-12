<?php

require_once 'model/users.php';

if (isset($_GET['id'])) {
    deleteUser($_GET['id']);
}

header("location: showusers.php");
exit();
