<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone</title>
    </head>
    <body>
        <?php require '../composant/Menu.php' ?>

        <div>
            <div class="rowflex arround-md">

                <div class="cols-xs-12 cols-md-5 " >

                    <div class="box white payement" >
                        <h5>1. Votre compte</h5>
                        <p style="padding-left: 30px;"><?php echo $_SESSION['user']['email'] ?></p>
                    </div> 

                    <div class="box white payement" >
                        <h5>2. Adresse de facturation</h5>
                        <p style="padding-left: 30px;"><?php echo $_SESSION['user']['email'] ?></p>
                    </div>

                    <div class="box white payement">
                        <h5>1. Payement</h5>
                        <p style="padding-left: 30px;"><?php echo $_SESSION['user']['email'] ?></p>
                    </div>                
                </div>



                <div class="cols-xs-12 cols-md-5 white" style="margin: 20px;">
                    <div class="box">
                        <h3>fsdsdvbqbd</h3>
                    </div>
                </div>

            </div>
        </div>

        <?php require '../composant/footer.php' ?>
    </body>
</html>