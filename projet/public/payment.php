<!-- Page de payment -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Payment</title>
    </head>
    <body>
        <?php require '../composant/Menu.php' ?>

        <div class="payementbg">
            <div class="rowflex" >
                <div class="cols-xs-12 cols-md-6 " >

                    <div class="box white payement" >
                        <h5>1. Votre compte</h5>
                        <p style="padding-left: 30px;"><?php echo $_SESSION['user']['email'] ?></p>
                    </div> 

                    <div class="box white payement" >
                        <h5>2. Adresse de facturation</h5>
                        <input name="adresse" id="adresse" placeholder="Adresse" cols="50" rows="10"></input>
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



                <div class="cols-xs-12 cols-md-6">
                    <div class="box white payement">
                        <h3>Montant:</h3>
                        
                        <?php  
                            if($_GET['offre'] == 1){
                                $offre = 'Mensuel';
                                $prix = 'xx.xx';
                                $reduction = 'xx.xx';
                                $total = 'xx.xx';
                            } else if ($_GET['offre'] == 2){
                                $offre = '3 Mois';
                                $prix = 'xx.xx';
                                $reduction = 'xx.xx';
                                $total = 'xx.xx';
                            } else if ($_GET['offre'] == 3){
                                $offre = 'Annuel';
                                $prix = 'xx.xx';
                                $reduction = 'xx.xx';
                                $total = 'xx.xx';
                            }
                        ?>

                        <div class="rowflex">
                            <h6 class="col-xs-8">Abonnement VIP <?php echo $offre ?> :</h6>
                            <h6 class="col-xs-4"><?php echo $prix ?>€</h6>
                        </div>
                        <hr/>
                        <div class="rowflex">
                            <p class="col-xs-8">Sous-total :</p>
                            <p class="col-xs-4"><?php echo $prix ?>€</p>
                        </div>
                        <div class="rowflex">
                            <p class="col-xs-8">Réduction</p>
                            <p class="col-xs-4">-<?php echo $reduction ?>€</p>
                        </div>
                        <hr/>
                        <div class="rowflex">
                            <h3 class="col-xs-8"> <strong> Total </strong></h3>
                            <h3 class="col-xs-4"><strong><?php echo $total ?>€</strong></h3>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <?php require '../composant/footer.php' ?>
    </body>
</html>