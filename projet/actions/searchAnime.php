<?php 
    $sql = "SELECT * FROM animes WHERE id=:anime_id";
    $dataBinded=array(
        ':anime_id'   => $anime_id,
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $anime = current($pre->fetchAll(PDO::FETCH_ASSOC));
?>