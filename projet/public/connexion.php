<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | connexion</title>
    </head>
    <body class='multianimebg'>
        <?php require "../composant/Menu.php" ?>
        <br><br><br>
      <div class="row center" >

        <form class="center" action='../actions/login.php' method='post'>

          <div class="center row">
            <div class="col s3"></div> 
            
            <div class= "col s6 white">
              <h2 class="white">Login</h2>      
            <div class="input-field ">
          
            <h6 class="left">Nom d'utilisateur</h6>
            <input placeholder="Ecrivez votre Nom..." type="email" name="email"  class="validate">
          </div>

          <div class="input-field">
            <h6 class="left">Mot de passe</h6>
            <input placeholder="Ecrivez votre mot de passe..." type="password" name='password' class="validate">
            
            <a href="" class="right">Mot de passe oublier ?</a>
            <br><br><br>
            <input class="waves-effect waves-light btn-small red accent-4 " type='submit' value='Login'>
          </div>
          </div>
          <div class="col s3"></div>
        </div>
        </form>
      </div>

    </body>
</html>