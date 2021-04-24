<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone</title>
    </head>
    <body>
    <?php require "../composant/Menu.php" ?>
    </br></br>
    <section>
        <div class="carousel carousel-slider">                  
            <div class="carousel-item" href="">
                <div class='row'>
                    <div class='col s12'>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="../img/kny_bg.jpg" alt="Red Stone KnY">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Demon Slayer</span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis id facilis adipisci incidunt velit ex, debitis recusandae harum laboriosam atque tempore temporibus nisi ab, reiciendis dolore, laborum similique deserunt reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" href="">
                <div class='row'>
                    <div class='col s12'>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="../img/violet.jpg" alt="Red Stone Violet Evergarden">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Violet Evergarden</span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis id facilis adipisci incidunt velit ex, debitis recusandae harum laboriosam atque tempore temporibus nisi ab, reiciendis dolore, laborum similique deserunt reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" href="">
                <div class='row'>
                    <div class='col s12'>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="../img/imgAnime/BOFURI.jpg" alt="Red Stone Bofuri">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Bofuri</span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis id facilis adipisci incidunt velit ex, debitis recusandae harum laboriosam atque tempore temporibus nisi ab, reiciendis dolore, laborum similique deserunt reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" href="">
                <div class='row'>
                    <div class='col s12'>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="../img/knb.jpg" alt="Red Stone KnB">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Kuroko no Basket</span>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis id facilis adipisci incidunt velit ex, debitis recusandae harum laboriosam atque tempore temporibus nisi ab, reiciendis dolore, laborum similique deserunt reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION ANIMES -->
    <section>
        <div class='container'>
            <h2>ANIMES</h2>
            <?php require '../actions/searchAllAnime.php' ?>
            <?php require '../composant/carouselPopAnime.php' ?>       
        </div>
    </section>
    <div class="divider"></div>

    <!-- SECTION MANGA -->
    <section>
        <div class='container'>
            <h2>MANGA</h2>
            <!-- <?php // require '../composant/carouselManga.php' ?> -->
            <div class="carousel " style="height: 550px;">
                <div class="carousel-item carouselAnimeItem">
                    <div class="row">
                        <div class="col s12">
                            <div class="card large">
                                <div class="card-image">
                                    <img src="../img/demon_slayer_scan.jpg">
                                </div>

                                <div class="card-content">
                                    <span class="card-title">Demon Slayer</span>
                                </div>

                                <div class="card-action">
                                    <a href="https://scansmangas.xyz/manga/kimetsu-no-yaiba/">Lire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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