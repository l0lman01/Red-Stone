<?php 
    $sql = "SELECT * FROM episodes WHERE anime_id=:anime_id";
    $dataBinded=array(
        ':anime_id'   => $anime_id,
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $episodes = $pre->fetchAll(PDO::FETCH_ASSOC);
?>