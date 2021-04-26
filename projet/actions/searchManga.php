<?php 
    //Recherche le manga dans la BDD

    if(isset($manga_id)){
        $sql = "SELECT * FROM manga WHERE id=:manga_id";
        $dataBinded=array(
            ':manga_id'   => $manga_id,
        );
    }else if(isset($scan[0])){
        $sql = "SELECT * FROM animes WHERE id=:manga_id";
        $dataBinded=array(
            ':manga_id'   => $scan[0]['manga_id'],
        );
    };
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $manga = current($pre->fetchAll(PDO::FETCH_ASSOC));

?>