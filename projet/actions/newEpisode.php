<?php 
    require 'config.php';

    $sql = "INSERT INTO episodes(nb_episode,anime_id,link,saison) VALUES (:nb_episode, :anime_id,:link,:saison)";
    $dataBinded=array(
        ':nb_episode'   => $_POST['nb_episode'],
        ':anime_id'   => $_POST['anime_id'],
        ':link'   => $_POST['link'],
        ':saison' => $_POST['saison']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');

?>