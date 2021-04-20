<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | inscription</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php";
            $anime_id = $_GET['id'];
            require "../actions/searchAllEpisode.php";
            require "../actions/searchAnime.php";
        ?>
        <h1><?php echo $anime['name'] ?></h1>
        <a href="../actions/deleteAnime.php?id=<?php echo $anime['id'] ?>">Supprimer l'anime <i class="fas fa-trash-alt"></i></a>
        <br>
        <?php require '../composant/listEpisode.php' ?>

        <hr />
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="fas fa-plus"></i></a>
        
        <?php 
            require '../composant/addEpisodeModal.php';
            require '../composant/footer.php' 
        ?>
    </body>
</html>
