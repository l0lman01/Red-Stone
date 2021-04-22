<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            require "../composant/head.php" ;
        ?>
        <title>Red Stone | Admin</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php";
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'];
                if($user['statut'] == 'admin'){
                ?>
                
              <div class="row adminTab">
                <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#anime">anime</a></li>
                    <li class="tab col s3 disabled" ><a href="#manga">manga</a></li>
                    <li class="tab col s3 disabled" ><a href="#musique">musique</a></li>
                    <li class="tab col s3"><a href="#user">user</a></li>
                </ul>
                </div>
                <div id="anime" class="col s12 grey lighten-2">
                        <?php require '../composant/listAnime.php'?>
                        <?php require '../composant/addAnimeModal.php' ?>
                </div>


                <div id="user" class="col s12 grey lighten-2">
                    <?php require '../composant/listUser.php' ?>
                </div>
            </div>


  
                <?php
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
            require '../composant/footer.php'
        ?>

            </script>
    </body>
</html>