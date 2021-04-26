<?php 

    require '../actions/config.php';

    $user = $_SESSION['user'];
    if($user['statut'] == 'host'){
        $sql = 'UPDATE user SET statut=:statut WHERE id=:id';
        $dataBinded=array(
            ':statut'   => 'client',
            ':id'   => $user['id'], 
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $_SESSION['user']['statut'] = 'client';
        header('Location:../public/index.php');
    }else{
        header('Location:../public/index.php');
    };
?>