<?php 
    require 'config.php';

    $sql = "INSERT INTO episodes(nb_episode,anime_id,link) VALUES (:nb_episode, :anime_id, link)";
    $dataBinded=array(
        ':nb_episode'   => $_POST['nb_episode'],
        ':anime_id'   => $_POST['anime_id'],
        ':link'   => $_POST['link'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');

?>