<?php

/*
 * Projet : Projet Blog M152
 * Auteur : Thibaut Michaud
 * Version 09.04.2018 / PC / Codage initial
 */
require_once 'dbUtil.php';

session_start();

/**
 * Créer un post dans la BDD
 * @param string $commentaire
 * @return int l'id du post créé
 */
function createPost($commentaire) {
    $db = myPdo();
    $request = $db->prepare("INSERT INTO t_posts(commentaire)
            VALUES(:comment)");
    $request->execute(array('comment' => $commentaire));
    return $db->lastInsertId();
}

/**
 * Créer un média dans la BDD
 * @param string $nom
 * @param string $type
 * @param blob $media
 * @param int $idPost
 */
function createMedia($nom, $type, $media, $idPost) {
    $db = myPdo();
    $request = $db->prepare("INSERT INTO t_media(nomFichierMedia, typeMedia, media, idPost)
            VALUES(:nom, :type, :media, :idPost)");
    $request->execute(array(
        'nom' => $nom,
        'type' => $type,
        'media' => $media,
        'idPost' => $idPost
    ));
}

function createMarker($nom, $adresse, $lat, $lng, $type, $idPost) {
    $db = myPdo();
    $request = $db->prepare("INSERT INTO `t_markers`(`name`, `address`, `lat`, `lng`, `type`, `idPost`) VALUES(:name, :adress, :lat, :lng, :type, :idPost)");
    $request->execute(array(
        'name' => $nom,
        'adress' => $adresse,
        'lat' => $lat,
        'lng' => $lng,
        'type' => $type,
        'idPost' => $idPost
    ));
}

function ExtractMarkerFromBDD() {

// Start XML file, create parent node
    $dom = new DOMDocument("1.0");
    $dom->formatOutput = true;
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);


// Opens a connection to a MySQL server
    $db = myPdo();

// Select all the rows in the markers table
    $sql = "SELECT * FROM `t_markers`";
    $reponse = $db->query($sql);

    echo 'requête effectuée';
// Iterate through the rows, adding XML nodes for each
    while ($row = $reponse->fetch()) {
        // Add to XML document node
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);
        $newnode->setAttribute("name", $row['name']);
        $newnode->setAttribute("address", $row['address']);
        $newnode->setAttribute("lat", $row['lat']);
        $newnode->setAttribute("lng", $row['lng']);
        $newnode->setAttribute("type", $row['type']);
        $newnode->setAttribute("content", "");
    }
    echo 'transcription xml effectuée';
    $dom->save('markers.xml');
    echo 'sauvegarde terminée';
}

function geocode($adress) {
    $json_adress = str_replace(" ", "+", $adress);
    $response = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address={$json_adress}&key=AIzaSyDSom_03mhi45ixDwuHHibM9ZsoCyHrMs0");
    return $response;
}

/**
 * Récupère tous les posts de la BDD
 * @return PDO object liste de tous les posts
 */
function getPosts() {
    $db = myPdo();
    $sql = "SELECT * FROM `t_posts` ORDER BY `datePost` desc";
    $reponse = $db->query($sql);
    return $reponse;
}

/**
 * Récupère le post correspondant à l'id passé en commentaire
 * @param int $idPost
 * @return array Détails du post
 */
function getPost($idPost) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_posts WHERE idpost = :idPost");
    $reponse = $request->execute(array(
        'idPost' => $idPost
    ));
    if ($reponse) {
        return $request->fetch(PDO::FETCH_ASSOC); // Retourne un tableau associatif  
    } else {
        return array();
    }
}

/**
 * Récupère le nombre de posts dans la BDD
 * @return int le nombre de posts
 */
function getNbPost() {
    $db = myPdo();
    $sql = "SELECT * FROM `t_posts`";
    $request = $db->query($sql);
    $count = $request->rowCount();
    return $count;
}

/**
 * Récupère le nombre de médias dans un post
 * @param int $idPost
 * @return int le nombre d'image dans le post passé en paramètre
 */
function NbOfImageInPost($idPost) {
    $db = myPdo();
    $request = $db->prepare("SELECT `idMedia` FROM `t_media` WHERE `idPost` = :idPost");
    $request->execute(array(
        'idPost' => $idPost
    ));
    $count = $request->rowCount();
    return $count;
}

/**
 * Récupère les médias d'un post
 * @param int $idPost
 * @return PDO Object 
 */
function getImagesOfPost($idPost) {
    $db = myPdo();
    $sql = "SELECT `idMedia`, `media`,`typeMedia` FROM `t_media` WHERE `idPost` = $idPost";
    $reponse = $db->query($sql);
    return $reponse;
}

/**
 * Supprime un post de la BDD
 * @param int $idPost
 */
function deletePost($idPost) {
    $db = myPdo();
    $request = $db->prepare("DELETE FROM `t_posts` WHERE `idPost` = :idPost");
    $request->execute(array(
        'idPost' => $idPost
    ));
}

/**
 * Supprime un média de la BDD
 * @param int $idMedia
 */
function deleteMedia($idMedia) {
    $db = myPdo();
    $request = $db->prepare("DELETE FROM `t_media` WHERE `idMedia` = :idMedia");
    $request->execute(array(
        'idMedia' => $idMedia
    ));
}

/**
 * Met à jour un post
 * @param int $idPost
 * @param string $comment
 */
function updatePost($idPost, $comment) {
    $db = myPdo();
    $request = $db->prepare("UPDATE `t_posts` SET `commentaire`= :comment WHERE `idPost` = :idPost");
    $request->execute(array(
        'idPost' => $idPost,
        'comment' => $comment
    ));
}

/**
 * Affiche une notification bootstrap
 * @param string $message
 * @param string error, alert, success
 */
function DisplayError($message, $type) {
    echo '<div class="alert alert-' . $type . '">'
    . $message .
    '</div>';
}

/**
 * Affiche le code html pour afficher une vidéo
 * @param MIME $type
 * @param BLOB $media
 */
function DisplayVideo($type, $media) {
    echo '<video width="75%" height="100%" poster="image" preload="metadata" class="center-block" controls autoplay loop>
                <source src="data:' . $type . ';base64,' . base64_encode($media) . '" type="' . $type . '"/>
          </video>';
}

/**
 * Affiche le code html pour afficher une image
 * @param MIME $type
 * @param BLOB $media
 */
function DisplayImage($type, $media) {
    echo '<img src="data:' . $type . ';base64,' . base64_encode($media) . '" class="img-responsive center-block"/>';
}

/**
 * Affiche le code html pour jouer un son
 * @param MIME $type
 * @param BLOB $media
 */
function DisplaySound($type, $media) {
    echo ' <audio controls class="col-sm-12 col-xs-12">
            <source src="data:' . $type . ';base64,' . base64_encode($media) . '" type="' . $type . '">
          Your browser does not support the audio element.
          </audio> ';
}

/**
 * Calcule de combien de temps la date est vieille
 * @param string $timestamp
 * @return string Date formatée
 */
function Time_ago($timestamp) {
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes = round($seconds / 60);           // value 60 is seconds  
    $hours = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
    $days = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
    $weeks = round($seconds / 604800);          // 7*24*60*60;  
    $months = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
    $years = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
    if ($seconds <= 60) {
        return "Just Now";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "one minute ago";
        } else {
            return "$minutes minutes ago";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
        } else {
            return "$hours hrs ago";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "yesterday";
        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4.3) { //4.3 == 52/12  
        if ($weeks == 1) {
            return "a week ago";
        } else {
            return "$weeks weeks ago";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "a month ago";
        } else {
            return "$months months ago";
        }
    } else {
        if ($years == 1) {
            return "one year ago";
        } else {
            return "$years years ago";
        }
    }
}

/**
 * Affiche le code html de la barre de navigation
 */
function DisplayNav() {
    echo
    '<div class = "navbar navbar-blue navbar-static-top">
    <div class = "navbar-header">
    <button class = "navbar-toggle" type = "button" data-toggle = "collapse" data-target = ".navbar-collapse">
    <span class = "sr-only">Toggle</span>
    <span class = "icon-bar"></span>
    <span class = "icon-bar"></span>
    <span class = "icon-bar"></span>
    </button>
    <a href = "index.php" class = "navbar-brand logo">b</a>
    </div>
    <nav class = "collapse navbar-collapse" role = "navigation">
    <form class = "navbar-form navbar-left">
    <div class = "input-group input-group-sm" style = "max-width:360px;">
    <input class = "form-control" placeholder = "Search" name = "srch-term" id = "srch-term" type = "text">
    <div class = "input-group-btn">
    <button class = "btn btn-default" type = "submit"><i class = "glyphicon glyphicon-search"></i></button>
    </div>
    </div>
    </form>
    <ul class = "nav navbar-nav">
    <li>
    <a href = "index.php"><i class = "glyphicon glyphicon-home"></i> Home</a>
    </li>';

    if (Logged()) {
        echo '<li>
            <a href="post.php"><i class="glyphicon glyphicon-export"></i> Post</a>
          </li>';
    }

    echo '
        <li>
            <a href="map.php"><i class="glyphicon glyphicon-globe"></i> Where are my friends ?</a>
        </li>
    </ul>
    <ul class = "nav navbar-nav navbar-right">
    <li><p class = "navbar-text"><?php echo Logged() ? "You\'re logged" : "Already have an account?";
    ?></p></li>';
    if (Logged()) {
        echo '<li>
            <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log out</a>
        </li>';
    } else {
        echo '<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="color: black">Login now !</h3>
                            <form class="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Email or username" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submitLogin" name="submitLogin" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                                <div class="text-center" style="margin-top: 10px;">';
        if (isset($msg)) {
            DisplayError($msg, "error");
        }
        echo '</div>
                            </form>
                        </div>
                        <div class="bottom text-center" style="color: black;">
                            New here ? <a href="signUp.php"><b>Join Us</b></a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>';
    }

    echo '</ul>
</nav>
</div>';
}

function CheckLogin($pseudo, $pwd) {
    $db = myPdo();
    $pwd = sha1(sha1($pwd) . GetSalt($pseudo));
    $request = $db->prepare("SELECT * FROM t_users WHERE Pseudo = :pseudo AND Pwd = :pwd");

    $request->execute(array('pseudo' => $pseudo, 'pwd' => $pwd));

    return ($request->rowCount() > 0);
}

function addUser($pseudo, $pwd, $num, $email) {
    $db = myPdo();
    $salt = sha1(rand(1, 1000));
    $password = sha1(sha1($pwd) . $salt);
    $request = $db->prepare("INSERT INTO t_users(Pseudo, Num, Email, Pwd, Sel)
VALUES(:Pseudo, :Num, :Email, :Pwd, :Sel)");
    $request->execute(array(
        'Pseudo' => $pseudo,
        'Num' => $num,
        'Email' => $email,
        'Pwd' => $password,
        'Sel' => $salt
    ));
}

function deleteUser($idUser) {
    $db = myPdo();
    $request = $db->prepare("DELETE FROM t_users WHERE idUser = :idUser");
    $request->execute(array(
        'idUser' => $idUser
    ));
}

function UpdateUser($pseudo, $num, $email, $id) {
    $db = myPdo();
    $request = $db->prepare("UPDATE t_users 
SET Pseudo = :Pseudo,
Email = :Email,
Num = :Num
WHERE idUser = :idUser");
    $request->execute(array(
        'Pseudo' => $pseudo,
        'Email' => $email,
        'Num' => $num,
        'idUser' => $id
    ));
}

function GetSalt($pseudo) {
    $db = myPdo();
    $request = $db->prepare("SELECT Sel FROM t_users WHERE Pseudo = :pseudo");
    $request->execute(array(
        'pseudo' => $pseudo
    ));
    return $request->fetch()[0];
}

function UserXsist($pseudo) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_users WHERE Pseudo = :pseudo");
    $request->execute(array("pseudo" => $pseudo));
    return ($request->rowCount() > 0);
}

function Logged() {
    if (isset($_SESSION['logged']) & isset($_SESSION['user_info'])) {
        if ($_SESSION["logged"] === true) {
            return true;
        } else
            return false;
    } else
        return false;
}

function getUser($pseudo) {
    $db = myPdo();
    $request = $db->prepare("SELECT * FROM t_users WHERE Pseudo = :pseudo");
    $reponse = $request->execute(array(
        'pseudo' => $pseudo
    ));
    if ($reponse) {
        return $request->fetch(PDO::FETCH_ASSOC); // Retourne un tableau associatif  
    } else {
        return array();
    }
}
