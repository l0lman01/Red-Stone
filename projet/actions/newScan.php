<?php 
    require 'config.php';

    $sql = "INSERT INTO scan(nb_scan,manga_id,link) VALUES (:nb_scan, :manga_id,:link)";
    $dataBinded=array(
        ':nb_scan'   => $_POST['nb_scan'],
        ':manga_id'   => $_POST['manga_id'],
        ':link'   => $_POST['link'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $id= $_POST['manga_id'];

    header("Location: ../prive/manga.php?id=$id");

?>