<header class="cd-main-header">
    <div class="cd-main-header__logo"><a href="index.php"><img src="img/logo_gevent_inlin.png" alt="Logo"></a></div>
    <nav class="cd-main-nav js-main-nav">
        <ul class="cd-main-nav__list">
            <?php if (isset($_SESSION['logged'])) {
                ?>
            <li><a href="index.php"></a></li>
                <li><a href="c_maps.php">La carte</a></li>
                <li><a href="c_CRUD-Event.php">Créer un évènement</a></li>
                <li><a href="c_personalSpace.php">Espace Personnel</a></li>
                <li><a href="c_logout.php">Déconnexion</a></li>
                    <li style="font-size: medium">Bienvenue, <?= $_SESSION['UserLogged']['username'] ?></li>

                <?php } else { ?>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="c_maps.php">La carte</a></li>
                    <li><a href="c_login.php">Connexion</a></li>
                    <?php
                }
                ?>
        </ul>
    </nav> <!-- cd-main-nav -->
</header>

