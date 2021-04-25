<!-- Page de l'anime dans le panel admin -->

<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Animes (Admin)</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php";
            $anime_id = $_GET['id'];
            require "../actions/searchAllEpisode.php";
            require "../actions/searchAnime.php";
        ?>

        <div class="row">
            <div class="en-tete">
                <div class="col m1"></div>
                <div class="col s12 m3">
                    <br><br>
                    <img class="couverture" src="../img/imgAnime/<?php echo $anime['image']  ?>" alt="">
                </div>

                <div class= "col m8 center" >
                    <div class= "col m12 center" >
                        <img class="logoAnime" src="../img/logo/<?php echo $anime['logo']  ?>" alt="">
                    </div>
                    <div class="col m2"></div>
                    <div class="col m10 glip">

                        <div class="black bubble center">
                            <li class="tab"><a class="white-text" href="#animess">INFOS</a></li>
                        </div>
                        <div class="fru"></div>

                        <div class="black bubble center">
                            <li class="tab"><a class="white-text" href="#animess">EPISODES</a></li>
                        </div>
                        <div class="fru"></div>

                        <div class="black bubble center">
                            <li class="tab"><a class="white-text" href="#animess">AVIS</a></li>
                        </div>
                    <div class="col m2"></div>
                </div>

                <div class="col m12 mt"></div>
                <div class="col m1"></div>

                <div class="col m10 black cloud" >
                    <textarea id="description" onchange="send_description()" name="description" style="height: 200px;" class="white-text"><?php echo $anime['description'] ?></textarea>
                </div>
                <div class="col m1"></div>
            </div>
        </div>
        <style>
            .en-tete{
                background: url("../img/background/<?php echo $anime['background']  ?>") no-repeat;
                background-color: black;
                background-position: center;
                background-size: auto 100%;
                height: 650px;
                width: auto;
            }
        </style>

        <h1><?php echo $anime['name'] ?></h1>
        <a href="../actions/deleteAnime.php?id=<?php echo $anime['id'] ?>">Supprimer l'anime <i class="fas fa-trash-alt"></i></a>
        <br>
        <?php require '../composant/listEpisode.php' ?>

        <hr/>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="fas fa-plus"></i></a>
        
        <?php 
            require '../composant/addEpisodeModal.php';
            require '../composant/footer.php' 
        ?>

        <!-- Appel ajax -->
        <script src="../js/jquery.min.js"></script>
        <script type="text/javascript">
            function send_description(){
                $.ajax({
                    url : '../actions/updateDescriptionAnime.php',
                    type : 'POST',
                    data : {
                        description : $('#description').val(),
                        id : <?php echo $anime_id ?> 
                    }
                })
            }
        </script>
    </body>
</html>
