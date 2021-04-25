<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <?php require "../composant/head.php" ?>
    <title>Red Stone-Animes</title>
</head>

<body>
    <?php require "../composant/Menu.php" ?>
    <br<br>
    <?php require '../composant/carouselAccueil.php' ?>

    <?php require '../actions/searchAllAnime.php' ?>


    <!-- les plus populaires --> 
            <div class="row">
                <div>
                    <div class="col s1 m1"></div>
                    <div>
                        <h2 class="red-text text-accent-4">Anime</h2>
                    </div>
                    <div class="row">
                        <div class="col s1 m1 "></div>
                        <div class="col s8 m8 divider"></div>
                        <div class="col s3 m3"></div>
                    </div>
                    <div class="col s1 m1 "></div><div class=subverse>
                        <h5 class="red-text text-accent-4">LES PLUS POPULAIRES...</h5> <a class="CI" href="">voir tout le catalogue</a>
                    </div>
                </div>
                <?php 
                    $typeCarousel = $animesPop;
                    $where = 'anime';
                    require '../composant/carouselAnimeManga.php' 
                    ?>
            </div>
            
            
            <div class="row">
                <div>
                    <div class="col s1 m1"></div>
                    <div>
                        <h2 class="red-text text-accent-4">Anime</h2>
                    </div>
                    <div class="row">
                        <div class="col s1 m1 "></div>
                        <div class="col s8 m8 divider"></div>
                        <div class="col s3 m3"></div>
                    </div>
                    <div class="col s1 m1 "></div><div class=subverse>
                        <h5 class="red-text text-accent-4">LES PLUS SORTIES...</h5> <a class="CI" href="">voir tout le catalogue</a>
                    </div>
                </div>
                <?php 
                    $typeCarousel = $animesResc;
                    $where = 'anime';
                    require '../composant/carouselAnimeManga.php' 
                ?>
            </div>
            <div class="row">
                <div>
                    <div class="col s1 m1"></div>
                    <div>
                        <h2 class="red-text text-accent-4">Anime</h2>
                    </div>
                    <div class="row">
                        <div class="col s1 m1 "></div>
                        <div class="col s8 m8 divider"></div>
                        <div class="col s3 m3"></div>
                    </div>
                    <div class="col s1 m1 "></div><div class=subverse>
                        <h5 class="red-text text-accent-4">SUGGESTIONS...</h5> <a class="CI" href="">voir tout le catalogue</a>
                    </div>
                </div>
            </div>
        



        <?php require '../composant/footer.php' ?>
</body>

</html>