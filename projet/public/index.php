<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone</title>
    </head>
    <body>
    <?php require "../composant/Menu.php" ?>
    </br></br>
    <?php require '../composant/carouselAccueil.php' ?>

    <!-- SECTION ANIMES -->
    <section>
        <div class='container'>
            <h2>ANIMES</h2>
            <?php 
                require '../actions/searchAllAnime.php';
                require '../composant/carouselPopAnime.php';
            ?>      
        </div>
    </section>
    <div class="divider"></div>

    <!-- SECTION MANGA -->
    <section>
        <div class='container'>
            <h2>MANGA</h2>
            <div class="carousel" style="height: 550px;">
                <a class="carousel-item" href="https://scansmangas.xyz/manga/kimetsu-no-yaiba/">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/demon_slayer_scan.jpg">
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="https://scansmangas.xyz/manga/the-promised-neverland/">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/neverland.jpg">
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="https://scansmangas.xyz/manga/kaguya-sama-love-is-war/">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/kaguya.jpg">
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="https://scansmangas.xyz/manga/haikyuu/">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/Haikyu.jpg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <div class="divider"></div>

    <!-- SECTION MUSIQUE -->
    <section>
        <div class="container">
            <h2>MUSIQUE</h2>
            <div class="carousel">
                <a class="carousel-item" href="https://www.youtube.com/watch?v=TMwOfz77D4U&list=PL1-dQ5pjD94QnPmwsBTAjq5yWAIcret0Z">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/Lisa.jpg">
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="https://www.youtube.com/watch?v=gdZLi9oWNZg&ab_channel=LiSAOfficialYouTubeLiSAOfficialYouTubeCha%C3%AEned%27artisteofficielle">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/bts.jpg">
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="https://www.youtube.com/watch?v=LlQEKB2H7z4&ab_channel=LiSAOfficialYouTubeLiSAOfficialYouTubeCha%C3%AEned%27artisteofficielle">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/x.jpg">
                        </div>
                    </div>
                </a>
                <a class="carousel-item" href="https://www.youtube.com/watch?v=KH6ZwnqZ7Wo&ab_channel=SMTOWN">
                    <div class="card">
                        <div class="card-image">
                            <img src="../img/mama.jpg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <?php require '../composant/footer.php' ?>
    </body>  
</html>