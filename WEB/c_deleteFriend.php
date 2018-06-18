<?php

require_once'model/friends.php';

deleteFriend((int)$_GET['idUser'],(int)$_GET['idFriend']);


header('Location: c_personalSpace.php');

