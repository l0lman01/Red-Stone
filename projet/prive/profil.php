<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone-Profile</title>
    </head>
    <body>
        <?php require "../composant/Menu.php" ?>
        <br><br><br>
        <div class="row">
        <div class="col s12 m4">
        <div class="card">
        <div class="card-image">
        <img class="pp" src="../img/PP tanjiro.png">
        </div>
        <span class="card-title">VaeH</span>
        <div class="card-content">
        <h5>inscrit depuis le 4/20/2021</h5>
        </div>
        </div>
        </div>
    

        <div class="col s12 m8">
        <div class="card">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#animess">Animes suivis</a></li>
        <li class="tab"><a class="active" href="#scanss">Scans suivis</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="animess">Test 1</div>
      <div id="scanss">Test 2</div>
    </div>
 </div>
 </div>
</div>







        <?php require '../composant/footer.php' ?>
    </body>
</html>