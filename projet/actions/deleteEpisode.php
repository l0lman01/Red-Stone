<?php 
    require 'config.php';

    $sql = "DELETE FROM episodes WHERE episodes.id = :id";
    $dataBinded=array(
        ':id' => $_GET['id'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');
?>