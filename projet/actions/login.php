<?php 
    require 'config.php';

    $sql = "SELECT * FROM user WHERE email=:email";
    $dataBinded=array(
        ':email'   => $_POST['email'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user = current($pre->fetchAll(PDO::FETCH_ASSOC));

    if(empty($user)){       //vérifie si le resultat est vide
        // Si user est non connecté
        $error = TRUE;
        header('Location: ../public/connexion.php');
    }else{
        if(password_verify($_POST['password'], $user['password'])){           //vérifie si le c'est le même mot de passe
            $_SESSION['user'] = $user;      //on enregistre que l'utilisateur est connecté
        }else{
            //Si le mot de passe est faux, le user sera non connecté
            $error = TRUE;
        }
    }

    header('Location: ../public/index.php');
?>