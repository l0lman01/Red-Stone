<?php 
    require '../actions/config.php';

    $sql = 'UPDATE user SET profil_picture=:image, pseudo=:pseudo WHERE id=:id';
    $dataBinded=array(
        ':image'   => $_POST['group3'],
        ':id'   => $_POST['id'], 
        ':pseudo'   => $_POST['newPseudo'], 
    );
    $_SESSION['user']['profil_picture'] = $_POST['group3'];
    $_SESSION['user']['pseudo'] = $_POST['newPseudo'];

    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    header('Location: ../prive/profil.php')
?>