<?php

require_once 'dbUtil.php';

session_start();

function getUsers() {
    $db = myPdo();
    $sql = "SELECT * FROM users";
    $reponse = $db->query($sql);
    return $reponse;
}

function getUserByUsername($uName) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM `t_users` WHERE `username` = :username");
    $request->execute(array(
        'username' => $uName
    ));

    return $request->fetch();
}



function getId($uName) {
    $db = myPdo();
    $request = $db->prepare("SELECT `idUser` FROM `t_users` WHERE `username` = :username");
    $request->execute(array(
        'username' => $uName
    ));

    return $request->fetch()[0];
}

function addUser($username, $email, $pwd) {
    $db = myPdo();
    $password = sha1($pwd);
    $request = $db->prepare("INSERT INTO t_users(username, email, password)
            VALUES(:username, :email, :pwd)");
    $request->execute(array(
        'username' => $username,
        'email' => $email,
        'pwd' => $password,
    ));
}

function deleteUser($idUser) {
    $db = myPdo();
    $request = $db->prepare("DELETE FROM users WHERE idUser = :idUser");
    $request->execute(array(
        'idUser' => $idUser
    ));
}

function UpdateUser($prenom, $nom, $pseudo, $num, $email, $id) {
    $db = myPdo();
    $request = $db->prepare("UPDATE users 
                            SET FirstName = :FirstName,
                                LastName = :LastName,
                                Pseudo = :Pseudo,
                                Email = :Email,
                                Num = :Num
                            WHERE idUser = :idUser");
    $request->execute(array(
        'FirstName' => $prenom,
        'LastName' => $nom,
        'Pseudo' => $pseudo,
        'Email' => $email,
        'Num' => $num,
        'idUser' => $id
    ));
}

function getUser($idUser) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_users WHERE idUser = :idUser");
    $reponse = $request->execute(array(
        'idUser' => $idUser
    ));
    if ($reponse) {
        return $request->fetch(PDO::FETCH_ASSOC); // Retourne un tableau associatif  
    } else {
        return array();
    }
}

function UserExsist($username) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_users WHERE username = :username");
    $request->execute(array("username" => $username));
    return ($request->rowCount() > 0);
}

function CheckLogin($username, $pwd) {
    $db = myPdo();
    $pwd = sha1($pwd);
    $request = $db->prepare("SELECT * FROM t_users WHERE username = :username AND password = :pwd");
    $request->execute(array("username" => $username, "pwd" => $pwd));
    if ($request->rowCount() > 0) {
        return $request->fetch()[0];
    } else {
        return false;
    }
}

function GetIdUserFromPseudo($pseudo) {
    $db = myPdo();
    $request = $db->prepare("SELECT idUser FROM users WHERE Pseudo = :pseudo");
    $request->execute(array(
        'pseudo' => $pseudo
    ));
    if ($request->rowCount() > 0) {
        return $request->fetch()[0];
    } else {
        return "";
    }
}

