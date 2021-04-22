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
        
        if(empty($user)){
            $passwordhash = password_hash(($_POST['password'] ), PASSWORD_DEFAULT);
            $date = date("Y-m-j");

            $sql = "INSERT INTO user(email,password,creation_account) VALUES (:email, :password, :creation_account)";
            $dataBinded=array(
                ':email'   => $_POST['email'],
                ':password'=> $passwordhash,
                ':creation_account'=> $date,
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