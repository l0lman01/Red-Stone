<!-- Page d'inscription -->

<html lang="fr">
  <head>
    <?php require "../composant/head.php" ?>
    <title>Red Stone | Inscription</title>
  </head>
  <body class='multianimebg'>
    <?php require "../composant/Menu.php" ?>
    </br>
    </br>
    </br> 

    <div class="row center" >
      <form class="center" action='../actions/register.php' method='post'>
        <div class="center row">
          <div class="col s3"></div> 
            <div class= "col s6 white">
              <h2 class="white">Inscription</h2>

              <div>
                <h6 class="left">Email</h6>
                <input placeholder="Votre Email" type="email" name="email"  class="validate" required>
              </div>

              <div>
                <h6 class="left">Nom d'utilisateur</h6>
                <input placeholder="Votre nom d'utilisateur" type="text" name="username"  class="validate" required>
              </div>

              <div>
                <h6 class="left">Mot de passe</h6>
                <input placeholder="Ecrivez votre mot de passe..." type="password" name='password' class="validate" required>
              </div>
        
              <div>
                <h6 class="left">Confirmation Mot de Passe</h6>
                <input placeholder="Ecrivez votre mot de passe..." type="password" name='rePassword' class="validate" required>
                </br>
                </br>
                </br>
                <button class="waves-effect waves-light btn-small red accent-4 ">S'inscrire</button>
                </br>
                </br>
                <h5>inscrivez-vous avec :</h5>
                <div>
                  <div class='size'>  
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-google"></i>
                  </div>
                  <h6>déjà inscrits ?</h6>
                  <a href="../public/connexion.php">Connectez-vous maintenant</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col s3"></div>
        </div>
      </form>
    </div>
    <?php require '../composant/footer.php' ?>
  </body>
</html>