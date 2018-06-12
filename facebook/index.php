<?php
/*
 * Projet : Projet Blog M152
 * Auteur : Thibaut Michaud
 * Version 09.04.2018 / PC / Codage initial
 */
require_once './dao/dao.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <!-- head -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>MyBlog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="assets/css/facebook.css" rel="stylesheet">
    </head>
    <!-- head -->
    <body>
        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">
                    <!-- main right col -->
                    <div class="column col-sm-12 col-xs-12" id="main">
                        <?php DisplayNav(); ?>
                        <!-- /top nav -->
                        <div class="padding">
                            <div class="full col-sm-10 col-sm-offset-1">

                                <!-- content -->
                                <div class="row">
                                    <?php
                                    if (Logged()) {
                                        ?>

                                    <!--main col left -->
                                        <div class = "col-sm-5 ">
                                            <!--profile picture -->
                                            <div class = "panel panel-default">
                                                <div class = "panel-thumbnail"><img src = "assets/img/bg_5.jpg" class = "img-responsive"></div>
                                                <div class = "panel-body">
                                                    <p class = "lead"><?php echo $_SESSION['user_info']['Pseudo']; ?></p>
                                                    <p>10M Followers, XXX Posts</p>
                                                    <p><img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px" width="28px"></p>

                                                    <button type="button" class="btn btn-default btn-md pull-right"  name="modify" id="modify">
                                                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                    </button>
                                                        <label for="modify" class="pull-right" style="margin: 1% 1% 0 0;">Profile settings</label>
                                                    </div>
                                            </div>
                                            <!-- profile picture -->
                                        </div>                                      
                                    <?php } ?>
                                    <!-- main col left -->
                                    <div class="col-sm-6 <?php echo Logged() ? "" : "col-sm-offset-3"; ?>">
                                        <div class="panel text-center">
                                            <h1> Welcome </h1>
                                        </div> <!-- Welcome div -->
                                        <?php
                                        $reponse = getPosts();
                                        $cptPost = 0;
                                        while ($result = $reponse->fetch()) {
                                            $cptPost = $cptPost + 1;
                                            ?>
                                        <div class="panel panel-default">
                                                <!-- panel heading -->
                                                <div class="panel-heading">
                                                    <h4>
                                                        <?php
                                                        echo Time_ago($result['datePost']);

                                                            if (Logged()) {
                                                                ?>
                                                                <button type="button" class="btn btn-default btn-md pull-right"  data-toggle="modal" data-target="#modalDelete<?= $result['idPost'] ?>">
                                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                </button>
                                                                <a href="post.php?id=<?= $result['idPost'] ?>">
                                                                    <button type="button" class="btn btn-default btn-md pull-right"  name="modify" id="modify">
                                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                    </button>
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>     
                                                        </h4>
                                                    </div>
                                                    <!-- panel heading -->

                                                    <div class="panel-body">
                                                        <div class="clearfix">
                                                            <?php
                                                            if (NbOfImageInPost($result['idPost']) > 1) {
                                                                ?>
                                                                <div id="myCarousel<?php echo $cptPost; ?>" class="carousel" data-ride="carousel<?php echo $cptPost; ?>">                                         
                                                                    <div class="carousel-inner">
                                                                        <?php
                                                                        // On récupère les images de la base
                                                                        $medias = getImagesOfPost($result['idPost']);
                                                                        $active = true;
                                                                        while ($result1 = $medias->fetch()) {
                                                                            ?>                                                           
                                                                            <div class="item <?php
                                                                            if ($active) {
                                                                                $active = FALSE;
                                                                                echo 'active';
                                                                            }
                                                                            ?>">                 
                                                                                     <?php
                                                                                     if (strpos($result1['typeMedia'], "video") !== FALSE) {
                                                                                         DisplayVideo($result1['typeMedia'], $result1['media']);
                                                                                     } else if (strpos($result1['typeMedia'], "image") !== FALSE) {
                                                                                         DisplayImage($result1['typeMedia'], $result1['media']);
                                                                                     }
                                                                                     ?>
                                                                            </div>                                                       
                                                                        <?php } $active = TRUE ?>

                                                                        </div>
                                                                        <!-- Left and right controls -->
                                                                        <a class="left carousel-control" href="#myCarousel<?php echo $cptPost; ?>" data-slide="prev">
                                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="right carousel-control" href="#myCarousel<?php echo $cptPost; ?>" data-slide="next">
                                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                    <?php
                                                                } else {
                                                                    $media = getImagesOfPost($result['idPost']);
                                                                    $result2 = $media->fetch();
                                                                    if (strpos($result2['typeMedia'], "video") !== FALSE) {
                                                                        DisplayVideo($result2['typeMedia'], $result2['media']);
                                                                    } else if (strpos($result2['typeMedia'], "image") !== FALSE) {
                                                                        DisplayImage($result2['typeMedia'], $result2['media']);
                                                                    } else if (strpos($result2['typeMedia'], "audio") !== FALSE) {
                                                                        DisplaySound($result2['typeMedia'], $result2['media']);
                                                                    }
                                                                }
                                                        ?>
                                                        </div>
                                                        <hr>
                                                        <div class="col-md-12"><?php echo $result['commentaire'] ?></div>

                                                        <div class="modal fade" id="modalDelete<?= $result['idPost'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        <h3 class="modal-title" id="exampleModalLabel">Confirmer</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group" style="margin-left: 3%; margin-top: 1%;">
                                                                            <?php
                                                                            echo "Voulez-vous vraiment supprimer ce post ?";
                                                                            ?><br>
                                                                            Cette action est irréversible. 
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                                                                        <a href="dao/deletePost.php?id=<?php echo $result['idPost']; ?>">
                                                                            <button type="button" class="btn btn-primary">Supprimer</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            $reponse->closeCursor();
                                            ?>
                                    </div>
                                </div><!--/row-->
                            </div><!-- /col-10 -->
                        </div><!-- /padding -->
                    </div>
                    <!-- /main -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle=offcanvas]').click(function () {
                $(this).toggleClass('visible-xs text-center');
                $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
                $('.row-offcanvas').toggleClass('active');
                $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
                $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
                $('#btnShow').toggle();
            });
        });
    </script>
</body>
</html>