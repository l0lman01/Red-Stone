<?php 
    // la déconnexion
    require 'config.php';

    $_SESSION['user'] = NULL;
    header('Location: ../public/index.php');
?>