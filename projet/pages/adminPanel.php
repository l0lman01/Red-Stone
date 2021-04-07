<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Admin</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php";
            $user = $_SESSION['user'];
            if(isset($user)){
                if($user['statut'] == 'admin'){
                    
                }else{
                    ?>
                    <h2>Vous n'avez pas accès à cette page</h2>
                    <?php
                }
            }else{
                ?>
                <h2>Connecter vous pour accédé a cette page</h2>
                <?php
            }
        ?>
    </body>
</html>