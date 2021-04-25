<?php 
    // Modifie la description de l'anime depuis le panel en temps réel

    require '../actions/config.php';
    $sql = 'UPDATE animes SET description=:description WHERE id=:id';
    $dataBinded=array(
        ':description'   => $_POST['description'],
        ':id'   => $_POST['id'], 
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
?>