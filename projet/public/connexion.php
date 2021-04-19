<html lang="fr">
   <head>
      <?php require "../composant/head.php" ?>
      <title>Red Stone | inscription</title>
   </head>
   <body>
      <?php require "../composant/Menu.php" ?>
      <br><br><br>
      <div class="row center" >


         <form class="center" method='POST' action="../actions/login.php">
            <div class="center row">
               <div class="col s3"></div>
               <div class= "col s6 white">
                  <h2 class="white">Login</h2>
                  <div>
                     <h6 class="left">Email</h6>
                     <input type="email" class="validate" name='email'>
                  </div>

                  <div>
                     <h6 class="left">Mot de passe</h6>
                     <input type="password" class="validate" name='password'>
                  </div>
                     
                     
                     
                     <a href="" class="right">Mot de passe oublier ?</a>

                     <br><br><br>

                     <input type='submit' value='Login' class="waves-effect waves-light btn-small red accent-4 ">

                     <br><br>
                     
                     <h5>Connectez vous avec</h5>
                     <div>
                        <img src="../img/logo-fb.png" alt="" with=150px height=150px>
                        <img src="../img/logo-google.png" alt="" with=150px height=150px>
                        <h6>pas encore inscrits ?</h6>
                        <a href="">Inscrivez-vous maintenant</a>
                     </div>
                  </div>
               </div>
               <div class="col s3"></div>
            </div>
         </form>
      </div>
   </body>
</html>