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

        <?php require '../composant/listEpisode.php' ?>

        

        <hr />
        <a href="">Ajoutez une saison</a>

    </body>
</html>