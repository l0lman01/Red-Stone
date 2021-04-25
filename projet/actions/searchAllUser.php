<?php 
    //Recherche tous les users dans la BDD

    $sql = "SELECT * FROM user WHERE statut='admin'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $allAdminUser = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM user WHERE statut='client'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $allClientUser = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM user WHERE statut='host'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $allHostUser = $pre->fetchAll(PDO::FETCH_ASSOC);
?>