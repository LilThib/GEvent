<?php
require_once 'dbUtil.php';

function getFriendOf($idUser) {
    $db = myPdo();
    $request = $db->prepare("SELECT `idUser`, `username`, `email`, `password` "
            . "             FROM `t_friendship`, `t_users` "
            . "             WHERE `user_receive` = :idUser "
            . "             AND `user_ask` = `idUser`");
    $request->execute(array(
        'idUser' => $idUser
    ));

    return $request;
}

function getFriendRequest($idUser) {
    
}

function addFriend($idUser, $idFriend) {
    $db = myPdo();
    $request = $db->prepare("INSERT INTO `t_friendship`(`user_ask`, `user_receive`) VALUES (:idUser,:idFriend)");
    $request->execute(array(
        'idUser' => $idUser,
        'idFriend' => $idFriend
    ));
}

function addGuestOnEvent($idEvent, $idUser) {
    $db = myPdo();
    $request = $db->prepare("INSERT INTO `t_invite`(`idUser`, `idEvent`) VALUES (:idUser, :idEvent)");
    $request->execute(array(
        'idUser' => $idEvent,
        'idEvent' => $idUser
    ));
}
