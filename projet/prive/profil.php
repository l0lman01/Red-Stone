<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Profile</title>
    </head>
    <body>
        <?php require "../composant/Menu.php" ?>
        <br><br><br>
        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img class="pp" src="../img/imgProfil/<?php echo $_SESSION['user']['profil_picture'] ?>">
              </div>
              <span class="card-title"><?php echo $_SESSION['user']['email'] ?></span>
              <div class="card-content">
                <p>Inscrit depuis le <?php echo $_SESSION['user']['creation_account'] ?></p> <!-- ajouter une colonne date inscription dans la BDD avec datetime -->
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