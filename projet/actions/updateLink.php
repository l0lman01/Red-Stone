<?php 
    // Modifie le lien de l'anime depuis le panel en temps réel

    require '../actions/config.php';
    $sql = 'UPDATE episodes SET link=:link WHERE id=:id';
    $dataBinded=array(
        ':link'   => $_POST['link'],
        ':id'   => $_POST['id'], 
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
?>