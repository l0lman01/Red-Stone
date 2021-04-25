<?php 
    require 'config.php';

    //Supprime juste l'épisode

    $sql = "DELETE FROM episodes WHERE episodes.id = :id";
    $dataBinded=array(
        ':id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $id_anime=$_GET['idAnime'];
    header("Location: ../prive/anime.php?id=$id_anime");
?>