<?php 
    $sql = 'SELECT * FROM manga';
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $mangas = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    $sql = 'SELECT * FROM manga ORDER BY date_created DESC LIMIT 10' ;
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $mangasResc = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = 'SELECT * FROM manga ORDER BY nb_folo DESC LIMIT 10';
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $mangasPop = $pre->fetchAll(PDO::FETCH_ASSOC);

?>