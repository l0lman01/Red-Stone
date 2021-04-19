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

        <form action="../actions/newEpisode.php" method="post">
            <input type="hidden" name="anime_id" value='<?php echo $anime_id ?>'>
            <div>
                <label for="">episode nb</label>
                <input type="number" name="nb_episode">
            </div>
            <div>
                <label for="">iFrame</label>
                <input type="text" name='link'>
            </div>
            <div>
                <label for="">Saison :</label>
                <input type="number" name="saison">
            </div>
            <input type="submit">
        </form>

    </body>
</html>