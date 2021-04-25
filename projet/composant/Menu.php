<nav>
  <div class="navbar white">
    <ul>
      <li><a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a></li>
      <li><a href="../public/index.php"><img src="../img/logo_redstone.png" alt="Red Stone" style="max-height: 80px;"></a></li>
      <li>
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
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
  <li><a href="../public/subscription.php">Abonnement</a></li>
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