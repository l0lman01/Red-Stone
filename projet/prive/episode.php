<!-- L'episode d'un anime -->

<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Episode</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php";
            $episode_id = $_GET['id'];
            require "../actions/searchAllEpisode.php";
            require "../actions/searchAnime.php";
        ?>
        <h1><?php echo $anime['name'] ?></h1>
        <h3>Episode <?php echo $episodes[0]['nb_episode'] ?></h1>

        <div>
            <?php echo $episodes[0]['link'] ?>
        </div>
        <div>
            <a href="../actions/deleteEpisode.php?id=<?php echo $episodes[0]['id'] ?>">Supprimer</a>
        </div>
    </body>
</html>