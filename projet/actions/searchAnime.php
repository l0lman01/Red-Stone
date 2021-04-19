<?php 
    if(isset($anime_id)){
        $sql = "SELECT * FROM animes WHERE id=:anime_id";
        $dataBinded=array(
            ':anime_id'   => $anime_id,
        );
    }else if(isset($episodes[0])){
        $sql = "SELECT * FROM animes WHERE id=:anime_id";
        $dataBinded=array(
            ':anime_id'   => $episodes[0]['anime_id'],
        );
    };
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $anime = current($pre->fetchAll(PDO::FETCH_ASSOC));

?>