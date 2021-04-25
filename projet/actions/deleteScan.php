<?php 
    require 'config.php';

    $sql = "DELETE FROM scan WHERE scan.id = :id";
    $dataBinded=array(
        ':id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $id_manga=$_GET['idManga'];
    header("Location: ../prive/manga.php?id=$id_manga");
?>