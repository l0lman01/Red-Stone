<!-- Page de manga dans le panel admin -->

<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | Manga (Admin)</title>
    </head>
    <body>
        <?php 
            require "../composant/Menu.php";
            $manga_id = $_GET['id'];
            require "../actions/searchAllScan.php";
            require "../actions/searchManga.php";
        ?>
        <h1><?php echo $manga['name'] ?></h1>
        <a href="../actions/deleteManga.php?id=<?php echo $manga['id'] ?>">Supprimer le manga <i class="fas fa-trash-alt"></i></a>
        <br>
        <?php require '../composant/listScan.php' ?>

        <hr/>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="fas fa-plus"></i></a>
        
        <?php 
            require '../composant/addScanModal.php';
            require '../composant/footer.php' 
        ?>
    </body>
</html>
