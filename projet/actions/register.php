<?php 
    require "config.php";

    echo $_POST['password'];
    echo $_POST['rePassword'];

    if($_POST['password'] == $_POST['rePassword']){     //Vérifie si le mot de passe est tapé correctement 2 fois
        
        $sql = "SELECT * FROM user WHERE email=:email";
        $dataBinded=array(
            ':email'   => $_POST['email'],
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
        
        if(empty($user)){
            $passwordhash = password_hash(($_POST['password'] ), PASSWORD_DEFAULT); //Hasher le mot de passe 
            $date = date("Y-m-j");
            
            //Insértion du user dans la BDD

            $sql = "INSERT INTO user(email,password,pseudo,creation_account) VALUES (:email, :password, :pseudo, :creation_account)";
            $dataBinded=array(
                ':email'   => $_POST['email'],
                ':password'=> $passwordhash,
                ':creation_account'=> $date,
                ':pseudo'=>$_POST['username'],
            );
            $pre = $pdo->prepare($sql);
            $pre->execute($dataBinded);

            header('Location: ../public/index.php');
        }else{
        }
    }else{
        header('Location: ../public/subscription.php');
    }
?>