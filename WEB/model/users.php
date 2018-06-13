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

function UpdatePwd($pwd, $id) {
    $db = myPdo();
    $salt = sha1(rand(1, 1000));
    $password = sha1(sha1($pwd) . $salt);
    $request = $db->prepare("UPDATE users SET Pwd = :Pwd, Sel = $salt WHERE idUser = :id");
    $request->execute(array(
        'id' => $id,
        'Pwd' => $password
    ));
}

function GetSalt($pseudo) {
    $db = myPdo();
    $request = $db->prepare("SELECT Sel FROM users WHERE Pseudo = :pseudo");
    $request->execute(array(
        'pseudo' => $pseudo
    ));
    return $request->fetch()[0];
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

function CheckReinitEmail($pseudo, $email) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM users WHERE Pseudo = :pseudo AND Email = :email");
    $request->execute(array("pseudo" => $pseudo, "email" => $email));
    return ($request->rowCount() > 0);
}

function CheckReinitNum($pseudo, $num) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM users WHERE Pseudo = :pseudo AND Num = :num");
    $request->execute(array("pseudo" => $pseudo, "num" => $num));
    return ($request->rowCount() > 0);
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

function StartPwdReinitialisation($pseudo) {
    $db = myPdo();
    $key = uniqid();
    $idUser = GetIdUserFromPseudo($pseudo);
    $ExpirationDate = date('h:i:s A', time() + 10800); // La clé est valable 3h
    $request = $db->prepare("INSERT INTO `reinitkeys`(`ReinitKey`, `ExpirationDate`, `idUser`)"
            . " VALUES (:key,:date,:id)");
    $request->execute(array(
        'key' => $key,
        'date' => $ExpirationDate,
        'id' => $idUser
    ));
}

function CheckKey($key) {
    $db = myPdo();
    $request = $db->prepare("SELECT `ReinitKey` ,`ExpirationDate` FROM `reinitkeys` WHERE `ReinitKey` = :key");
    $request->execute(array(
        'key' => $key
    ));
    if ($request->rowCount() > 0) {
        $expirationDate = $request->fetch()[1];
        $actualTime = time();

        return $request->fetch()[0];
    } else {
        return false;
    }
}

function CheckKeyWithPseudo($pseudo) {
    
}

function SendReinitMessage($email, $url) {
    
}

function SendReinitSMS($num, $url) {
    
}

function PutCSV($param) {
    
}
