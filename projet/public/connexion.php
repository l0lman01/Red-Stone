<html lang="fr">
<<<<<<< HEAD
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | inscription</title>
    </head>
    <body>
        <?php require "../composant/Menu.php" ?>
<br><br><br>
    <div class="row center" >
      <form class="center">
        <div class="center row">
          <div class="col s3"></div> <div class= "col s6 white">
            <h2 class="white">Login</h2>      
            <div>
            <h6 class="left">Nom d'utilisateur</h6>
            <input id="icon_telephone" placeholder="Ecrivez votre Nom..." type="tel" class="validate">
            </div>
          <div>
            <h6 class="left">Mot de passe</h6>
            <input id="icon_telephone" placeholder="Ecrivez votre mot de passe..." type="tel" class="validate">
            <a href="" class="right">Mot de passe oublier ?</a>
            <br><br><br>
            <a class="waves-effect waves-light btn-small red accent-4 ">Login</a>
            <br><br>
            <h5>Connectez vous avec</h5>
            <div>
              <div class='size'>  
                <i class="fab fa-facebook"></i>
                <i class="fab fa-google"></i>
              </div>
              <h6>pas encore inscrits ?</h6><a href="">Inscrivez-vous maintenant</a>
            </div>
          </div>
        </div>
      </form>
    </div>

=======
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
>>>>>>> 7c81f7b5f5990954303e3d9fd4612c6ac641e8f9


      <?php require '../composant/footer.php' ?>
   </body>
</html>