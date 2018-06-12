<?php

require_once 'model/users.php';

$users = getUsers();

include 'views/showuserstable.php';
?>
