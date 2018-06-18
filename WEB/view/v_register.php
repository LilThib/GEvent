<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"> <!-- General style -->
        <link rel="stylesheet" href="css/log_style.css"> <!-- Specific style -->
    </head>
    <body>
        <div class="container">
            <?php include 'view/v_nav.php'; ?>
            <div class="row justify-content-center" style="margin-top: 10%">
                <div class="col-md-8">
                    <div class="card">
                        <header class="card-header">
                            <a href="c_login.php" class="float-right btn btn-lg  btn-outline-primary">Connexion</a>
                            <h2 class="card-title mt-2">Inscrivez-vous</h2>
                        </header>
                        <article class="card-body">
                            <form class="col-md-10" style="margin-left: 8%" action="c_register.php" method="POST">
                                <div class="form-group">
                                    <label>Nom d'utilisateur</label>
                                    <input type="username" class="form-control" placeholder="" name="username" value="<?= $username ?>">
                                </div>
                                <div class="form-group">
                                    <label>Adresse mail</label>
                                    <input type="email" class="form-control" placeholder="" name="email" value="<?= $email ?>">                                   
                                    <small class="form-text text-muted">Votre email restera confidentiel</small>
                                </div> <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="form-control" type="password" name="pwd1">
                                    <small class="form-text text-muted">Longueur minimum: 8 caractères</small>
                                </div> <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Répeter le mot de passe</label>
                                    <input class="form-control" type="password" name="pwd2">
                                </div> <!-- form-group end.// -->  
                                <div class="form-group">
                                    <button type="submit" name="submitRegister" class="btn btn-lg btn-primary btn-block">S'inscrire</button>
                                </div> <!-- form-group// -->
                                <?php echo $msg; ?>
                                <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
                            </form>
                        </article> <!-- card-body end .// -->
                        <div class="border-top card-body text-center">Vous avez un compte ? <a href="v_login.php">Connectez-vous</a></div>
                    </div> <!-- card.// -->
                </div> <!-- col.//-->

            </div> <!-- row.//-->
        </div>
    </body>
</html>
