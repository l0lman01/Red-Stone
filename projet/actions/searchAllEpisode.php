<?php
    //Recherche tous les épisodes de l'anime dans la BDD

    if(isset($episode_id)){
        $sql = "SELECT * FROM episodes WHERE id=:episode_id ";
        $dataBinded=array(
            ':episode_id'   => $episode_id,
        );
    }else if(isset($anime_id)){
        $sql = "SELECT * FROM episodes WHERE anime_id=:anime_id ORDER BY nb_episode";
        $dataBinded=array(
            ':anime_id'   => $anime_id,
        );
    }
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $episodes = $pre->fetchAll(PDO::FETCH_ASSOC);
?>