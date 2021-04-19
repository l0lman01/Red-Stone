<?php 
    require "config.php";

    echo $_POST['password'];
    echo $_POST['rePassword'];

    if($_POST['password'] == $_POST['rePassword']){
        
        $sql = "SELECT * FROM user WHERE email=:email";
        $dataBinded=array(
            ':email'   => $_POST['email'],
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
    
        if(isset($user)){
            $passwordhash = password_hash(($_POST['password'] ), PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO user(email,password) VALUES (:email, :password)";
            $dataBinded=array(
                ':email'   => $_POST['email'],
                ':password'=> $passwordhash,
            );
            $pre = $pdo->prepare($sql);
            $pre->execute($dataBinded);

            header('Location: ../public/index.php');
        }else{
        }
    }else{
        header('Location: ../public/inscription.php');
    }
?>