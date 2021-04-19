<nav>
    <div class="navbar white">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="../public/index.php"><img src="../img/logo_redstone.png" alt="Red Stone"></a>
        <ul id="nav" class="right hide-on-med-and-down">
            <li><div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div></li>
            <?php 
              if(empty($_SESSION['user'])){ 
            ?>
              <li><a href="../public/inscription.php" class="button">S'inscrire</a></li>
              <li><a href="../public/connexion.php" class="button">Se Connecter</a></li>
            <?php }else{
              $user = $_SESSION['user'];
              if($user['statut'] == 'admin'){  
            ?>
                <li><a href="../prive/panel.php" class="button">Panel Animes</a></li>
            <?php } ?>                
              <li><a href="../prive/profil.php" class="button">Mon Profile</a></li>
              <li><a href="../actions/logout.php" class="button">Déconnexion</a></li>
              <?php } ?>

        </ul>
    </div>
</nav>


<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background">
      <img src="images/office.jpg">
    </div>
    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
    <a href="#name"><span class="white-text name">John Doe</span></a>
    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>

 
