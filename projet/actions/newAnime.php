<?php 
    require 'config.php';

    $destination = "../img/upload/".$_FILES['image']['name']; //dossier "upload"
    move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    
    $fichier = $_FILES['image']['name'];

    $sql = "INSERT INTO animes(name,image) VALUES (:name, :image)";
    $dataBinded=array(
        ':name'   => $_POST['name'],
        ':image'   => $_FILES['image']['name'], 
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');
?>