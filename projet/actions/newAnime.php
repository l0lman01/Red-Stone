<?php 
    $destination = "../img/upload/".$_FILES['image']['name']; //dossier "upload"
    move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    
    $sql = "INSERT INTO animes(name,image) VALUES (:name, :image)";
    $dataBinded=array(
        ':name'   => $_POST['name'],
        ':image'   => $_POST['image'], 
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../pages/adminPanel.php');
?>