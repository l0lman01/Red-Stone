<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | inscription</title>
    </head>
    <body>
        <?php require "../composant/Menu.php" ?>
<br><br><br>
    <div class="row center" >

      <form class="center" action="../actions/login.php" method='post'>

        <div class="center row">
          <div class="col s3"></div> <div class= "col s6 white">
            <h2 class="white">Login</h2>      
            <div>
            <h6 class="left">Email</h6>
            <input  placeholder="Ecrivez votre Email..." type="email" class="validate" name='email' required>
            </div>
          <div>
            <h6 class="left">Mot de passe</h6>
            <input  placeholder="Ecrivez votre mot de passe..." type="password" class="validate" name='password' required>

            <a href="" class="right">Mot de passe oublier ?</a>
            <br><br><br>
            <button class="waves-effect waves-light btn-small red accent-4 ">Login</button>
            <br><br>
            <h5>Connectez vous avec</h5>
            <div>
              <div class='size'>  
                <i class="fab fa-facebook"></i>
                <i class="fab fa-google"></i>
              </div>
              <h6>deja inscrits ?</h6><a href="">connectez vous maintenant</a>              </div>
            </div>
          </div>
        </div>
      </form>
    </div>



      <?php require '../composant/footer.php' ?>
   </body>
</html>