<!-- Page de payment -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Payment</title>
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
                        <input name="adresse" id="adresse" placeholder="Adresse" cols="15" rows="5"></input>
                        <input name="adresse" id="" placeholder="Ville"></input>
                        <input name="adresse" id="" placeholder="Code Postale"></input>
                    </div>

                    <div class="box white payement">
                        <h5>1. Payement</h5>
                        <form action="">
                            <input type="number" placeholder="Numéro de carte" required ></input>
                            <input type="text" placeholder="Date d'expiration" required></input>
                            <input type="number" placeholder="Code de carte" required></input>
                        </form>
                        </br>
                        <button>Payer</button>
                    </div>                
                </div>



                <div class="cols-xs-12 cols-md-5 white" style="margin: 20px;">
                    <div class="box">
                        <h3>Montant:</h3>
                        
                    </div>
                </div>

            </div>
        </div>

        <?php require '../composant/footer.php' ?>
    </body>
</html>