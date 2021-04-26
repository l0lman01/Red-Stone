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

        <div class="row">
            <div class="col s6">
                <div>
                <?php echo $episodes[0]['link'] ?>
                </div>
            </div>

            <div class="col s6">
                <div>
                    <textarea id="description"  name="description" style="height: 150px; width: 70%;"><?php echo $episodes[0]['link'] ?></textarea>
                    <button onchange="lien()">Modifier</button>
                </div>
            </div>
        </div>
        <div>
            <a href="../actions/deleteEpisode.php?id=<?php echo $episodes[0]['id'] ?>">Supprimer</a>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script type="text/javascript">
            function lien(){
                $.ajax({
                    url : '../actions/updateLink.php',
                    type : 'POST',
                    data : {
                        description : $('#link').val(),
                        id : <?php echo $anime_id ?> 
                    }
                })
            }
        </script>
    </body>
</html>