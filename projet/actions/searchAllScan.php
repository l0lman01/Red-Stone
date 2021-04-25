<?php
    //Recherche tous les scans du manga dans la BDD

    if(isset($scan_id)){
        $sql = "SELECT * FROM scan WHERE id=:scan_id ";
        $dataBinded=array(
            ':scan_id'   => $scan_id,
        );
    }else if(isset($manga_id)){
        $sql = "SELECT * FROM scan WHERE manga_id=:manga_id ORDER BY nb_scan";
        $dataBinded=array(
            ':manga_id'   => $manga_id,
        );
    }
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $scans= $pre->fetchAll(PDO::FETCH_ASSOC);
?>