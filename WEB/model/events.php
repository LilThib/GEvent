<?php
require_once 'dbUtil.php';

session_start();

function getEvents() {
    $db = myPdo();
    $sql = "SELECT * FROM events, users WHERE events.idUser = users.idUser";
    $reponse = $db->query($sql);
    return $reponse;
}

function getEvent($idEvent) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM events WHERE idEvent = :idEvent");
    $reponse = $request->execute(array(
        'idEvent' => $idEvent
    ));
    if ($reponse) {
        return $request->fetch(PDO::FETCH_ASSOC); // Retourne un tableau associatif  
    } else {
        return array();
    }
}

function getEventsOrganizedByUser($idUser) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM `t_events` WHERE `idUser` = :idUser");
    $request->execute(array(
        'idUser' => $idUser
    ));

    return $request;
}

function getEventsFromSpecificUser($idUser) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_events e, t_invite i WHERE i.idEvent = e.idEvent AND i.idUser = :idUser and e.validate = 2");
    $request->execute(array(
        'idUser' => $idUser
    ));

    return $request;
}

function getPublicEvents() {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_events e, t_invite i WHERE i.idEvent = e.idEvent AND i.idUser = :idUser and e.validate = 2");
    $request->execute(array(
        'idUser' => $idUser
    ));

    return $request;
}

function addEvent($name, $description, $date, $private, $lat, $lng, $place_name, $adress, $idUser, $validate = NULL) {
    $db = myPdo();
    $request = $db->prepare("INSERT INTO `t_events`(`name`, `description`,`date`"
            . ", `private`, `validate`,`lat`, `lng`, `place_name`, `adress`, `idUser`)"
            . " VALUES (:name, :description, :date, :private, :validate, :lat, :lng,"
            . "         :place_name, :adress, :idUser)");
    $request->execute(array(
        'name' => $name,
        'date' => $date,
        'description' => $description,
        'idUser' => $idUser,
        'private' => $private,
        'validate' => $validate,
        'lat' => $lat,
        'lng' => $lng,
        'place_name' => $place_name,
        'adress' => $adress,
    ));
    return $db->lastInsertId();
}

function deleteEvent($idEvent) {
    $db = myPdo;
    $request = $db->prepare("DELETE FROM events WHERE idEvent = :idEvent");
    $request->execute(array(
        'idEvent' => $idEvent
    ));
}

function getUsersNames() {
    $db = myPdo;
    $sql = "SELECT idUser, CONCAT(FirstName, ' ', LastName) FROM users";
    $request = $db->prepare($sql);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_KEY_PAIR);
}

function UpdateEvents($id, $titre, $date, $description, $utilisateur) {
    $db = myPdo;
    $request = $db->prepare("UPDATE Events 
                            SET Title = :title,
                            DateEvent = :date,
                            Description = :description,   
                            idUser = :utilisateur
                            WHERE idEvent = :idEvent");
    $request->execute(array(
        'idEvent' => $id,
        'title' => $titre,
        'date' => $date,
        'description' => $description,
        'utilisateur' => $utilisateur
    ));
}


function EventExsist($title) {
    $db = myPdo;
    $request = $db->prepare("SELECT * FROM events WHERE title = :title");
    $request->execute(array("title" => $title));
    return ($request->rowCount() > 0);
}

function DateEU($date)
{
   $jour = substr($date, 8, 9);
   $mois = substr($date, 5, -3);
   $annee = substr($date, 0, 4);
   
return "$jour.$mois.$annee";
}
