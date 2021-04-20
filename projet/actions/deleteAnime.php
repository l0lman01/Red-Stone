<?php 
    require 'config.php';

    $sql = "DELETE FROM animes WHERE animes.id = :id";
    $dataBinded=array(
        ':id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    $sql = "DELETE FROM episodes WHERE anime_id = :id";
    $dataBinded=array(
        ':anime_id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');
?>