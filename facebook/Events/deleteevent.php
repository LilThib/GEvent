<?php

require_once 'model/events.php';

if (isset($_GET['id'])) {
    deleteEvent($_GET['id']);
}

header("location: showevents.php");
exit();

