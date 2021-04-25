<?php 
    require 'config.php';

    // Supprime le manga avec ses scans

    $sql = "DELETE FROM manga WHERE manga.id = :id";
    $dataBinded=array(
        ':id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    $sql = "DELETE FROM scan WHERE manga_id = :id";
    $dataBinded=array(
        ':manga_id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');
?>