<nav>
  <div class="navbar white">
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="../public/index.php"><img src="../img/logo_redstone.png" alt="Red Stone"></a>
      <ul id="nav" class="right hide-on-med-and-down">
          <li>
              <div class="input-field">
                <input id="search" type="search" required>
                <i class="material-icons">search</i>
              </div>
          </li>
      </ul>
  </div>
</nav>


<ul id="slide-out" class="sidenav">
  <li><a href="../public/index.php">Accueil</a></li>
  <li><div class="divider"></div></li>
  <li><a href="../public/animes.php">Animes</a></li>
  <li><div class="divider"></div></li>
  <li><a href="../public/manga.php">Manga</a></li>
  <li><div class="divider"></div></li>

  <?php 
    if(empty($_SESSION['user'])){ 
  ?>
    <li><a href="../public/inscription.php">S'inscrire</a></li>
    <li><div class="divider"></div></li>
    <li><a href="../public/connexion.php">Se Connecter</a></li>
  <?php }else{
    $user = $_SESSION['user'];
    if($user['statut'] == 'admin'){  
  ?>
    <li><a href="../prive/profil.php">Profile</a></li>
    <li><div class="divider"></div></li>
    <li><a href="../prive/panel.php">Panel Admin</a></li>
    <li><div class="divider"></div></li>
  <?php } ?>                
    <li><a href="../actions/logout.php">Déconnexion</a></li>
  <?php } ?>
</ul>