<?php 
    require 'config.php';

    //Rajout d'un manga

    $destination = "../img/imgManga/".$_FILES['image']['name']; //cherche les images dans le dossier "upload"
    move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    
    $fichier = $_FILES['image']['name'];

    //Insère les éléments dans la base de donnée 

    $sql = "INSERT INTO manga(name,image) VALUES (:name, :image)";
    $dataBinded=array(
        ':name'   => $_POST['name'],
        ':image'   => $_FILES['image']['name'], 
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/panel.php');
?>