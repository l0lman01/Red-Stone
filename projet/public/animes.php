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
                <?php require '../composant/carouselPopAnime.php' ?>
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
                <?php require '../composant/carouselRecentAnime.php' ?>
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