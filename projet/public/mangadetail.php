<!-- Page manga en détail -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Manga</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php" ;

            
            if(empty($_SESSION['user'])){
                header('Location:../public/connexion.php');
            }else if($_SESSION['user']['statut']=='host'){
                header('Location:../public/subscription.php');
            }

            $manga_id = $_GET['id'];
            require "../actions/searchManga.php";
        ?>
        </br></br>
        <div class="row">
            <div class="en-tete">
                <div class="col m1"></div>
                <div class="col s12 m3">
                    <img class="couverture" src="../img/imgManga/<?php echo $manga['image']  ?>" alt="">
                </div>

                <div class= "col m8 center" >
                    <div class= "col m12 center" >
                        <img class="logoAnime" src="../img/logo/<?php echo $manga['logo']  ?>" alt="">
                    </div>
                    <div class="col m2"></div>

                    <div class="col m10 glip">
                        <div class="black bubble center">
                            <li class="tab"><a class="white-text" href="#animess">INFOS</a></li>
                        </div>
                        <div class="fru"></div>

                        <div class="black bubble center">
                            <li class="tab"><a class="white-text" href="#animess">CHAPITRE</a></li>
                        </div>
                        <div class="fru"></div>

                        <div class="black bubble center">
                            <li class="tab"><a class="white-text" href="#animess">AVIS</a></li>
                        </div>
                    <div class="col m2"></div>
                </div>

                <div class="col m12 mt"></div>
                <div class="col m1"></div>

                <div class="col m10 black cloud">
                    <p class="white-text"><?php echo $manga['description'] ?></p>
                </div>
                <div class="col m1"></div>
            </div>
        </div>


        <style>
            .en-tete{
                background: url("../img/background/<?php echo $manga['background']  ?>") no-repeat;
                background-color: black;
                background-position: center;
                background-size: auto 100%;
                height: 650px;
                width: auto;
            }
        </style>
        <?php require '../composant/footer.php' ?>
    </body>
</html>