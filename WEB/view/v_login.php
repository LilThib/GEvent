<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <?php include 'v_nav.php'; ?>
            <div class="row justify-content-center" style="margin-top: 10%">
                <div class="col-md-8">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="card-title mt-2">Connectez-vous</h2>
                        </header>
                        <article class="card-body">
                            <form action="c_login.php" method="POST" class="col-md-10" style="margin-left: 8%">
                                <div class="form-group">
                                    <label>Nom d'utilisateur</label>
                                    <input type="username" class="form-control" placeholder="" name="username" value="<?= $username ?>">
                                </div>

                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="form-control" name="password" type="password">
                                </div> <!-- form-group end.// -->
                                <div class="form-group">
                                    <button type="submit" name="submitLogin" class="btn btn-lg btn-primary btn-block">Se connecter</button>
                                </div> <!-- form-group// --> 
                                <?php echo $msg; ?>
                                <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
                            </form>
                        </article> <!-- card-body end .// -->
                        <div class="border-top card-body text-center">Pas encore de compte ? <a href="c_register.php">Inscrivez-vous dès maintenant</a></div>
                    </div> <!-- card.// -->
                </div> <!-- col.//-->

            </div> <!-- row.//-->
        </div>
    </body>
</html>
