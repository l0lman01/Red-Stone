<?php 
    $sql = 'SELECT * FROM animes';
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $animes = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    $sql = 'SELECT * FROM animes ORDER BY date_created DESC LIMIT 10' ;
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $animesResc = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = 'SELECT * FROM animes ORDER BY nb_folo DESC LIMIT 10';
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $animesPop = $pre->fetchAll(PDO::FETCH_ASSOC);

?>