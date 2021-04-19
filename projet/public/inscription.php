<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | connexion</title>
    </head>
    <body class='multianimebg'>
        <?php require "../composant/Menu.php" ?>
        <br><br><br> 
      <div class="row center" >

        <form class="center" action='../actions/register.php' method='post'>

          <div class="center row">
            <div class="col s3"></div> 
            
            <div class= "col s6 white">
              <h2 class="white">Inscription</h2>      
            <div class="input-field ">
          
            <h6 class="left">Email</h6>
            <input placeholder="Votre Email" type="email" name="email"  class="validate">
          </div>

          <div class="input-field">
            <h6 class="left">Mot de passe</h6>
            <input placeholder="Ecrivez votre mot de passe..." type="password" name='password' class="validate">
          </div>
          
          <div class="input-field">
            <h6 class="left">Confirmation Mot de Passe</h6>
            <input placeholder="Ecrivez votre mot de passe..." type="password" name='rePassword' class="validate">
            <br><br><br>
            <input class="waves-effect waves-light btn-small red accent-4 " type='submit' value='inscrire'>
          </div>

          </div>
            <div class="col s3"></div>
          </div>
        </form>
      </div>

    </body>
</html>