<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Offre</title>
    </head>
    <body class="backgroundoffre">
        <?php 
            require '../composant/Menu.php'; 
            if(isset($_SESSION['user'])){
        ?>
        
            <h1 class='center titleoffre red-text text-darken-4'> Nos offres </h1>
            <div class="rowflex center-xs">
                <div class="col-xs-10 ">
                    <div class="rowflex center-xs">
                        <div class="col-xs-12 col-sm-4">
                            <div class="red darken-4">
                                <h3 class="white subtitleoffre">Mensuel</h3>
                                <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit, massa at rhoncus sagittis, quam risus euismod enim, a mattis neque justo ut odio. Donec at neque fermentum, hendrerit nibh scelerisque, finibus lectus. Phasellus tincidunt dui ut erat accumsan, sit amet pulvinar lorem faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vulputate quis sem sed cursus. Proin consequat bibendum leo quis imperdiet.</p>
                                <a class="btn btnoffre white red-text" href="./payment.php?offre=1" >Choisir cette offre</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 ">
                            <div class="red darken-4">
                                <h3 class="white subtitleoffre">3 Mois</h3>
                                <p class="  white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit, massa at rhoncus sagittis, quam risus euismod enim, a mattis neque justo ut odio. Donec at neque fermentum, hendrerit nibh scelerisque, finibus lectus. Phasellus tincidunt dui ut erat accumsan, sit amet pulvinar lorem faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vulputate quis sem sed cursus. Proin consequat bibendum leo quis imperdiet.</p>
                                <a class="btn btnoffre white red-text" href="./payment.php?offre=2" >Choisir cette offre</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 ">
                            <div class="red darken-4">
                                <h3 class="white subtitleoffre">Annuel</h3>
                                <p class="  white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit, massa at rhoncus sagittis, quam risus euismod enim, a mattis neque justo ut odio. Donec at neque fermentum, hendrerit nibh scelerisque, finibus lectus. Phasellus tincidunt dui ut erat accumsan, sit amet pulvinar lorem faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vulputate quis sem sed cursus. Proin consequat bibendum leo quis imperdiet.</p>
                                <a class="btn btnoffre white red-text text-darken-4" href="./payment.php?offre=3" >Choisir cette offre</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
            }else{
                header('Location:../public/index.php');
            }
            require '../composant/footer.php'; 
        ?>
    </body>
</html>