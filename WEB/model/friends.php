<?php
require_once 'dbUtil.php';

function getFriendsOf($idUser) {
    $db = myPdo();
    $request = $db->prepare("SELECT `idUser`, `username`, `email`, `password` "
            . "             FROM `t_friendship`, `t_users` "
            . "             WHERE `user_receive` = :idUser "
            . "             AND `user_ask` = `idUser`");
    $request->execute(array(
        'idUser' => $idUser
    ));

    return array($request->rowCount(),$request);
}

function getFriendRequest($idUser) {
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

function deleteFriend($idUser, $idFriend) {
    $db = myPdo();
    $request = $db->prepare("DELETE FROM `t_friendship` WHERE `user_ask` = :idFriend AND `user_receive` = :idUser");
    $request->execute(array(
        'idUser' => $idUser,
        'idFriend' => $idFriend
    ));
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

function countFriends() {
    $db = myPdo();
    $request = $db->prepare("SELECT idEvent FROM t_friends");
    $request->execute();
    return $request->rowCount();
}