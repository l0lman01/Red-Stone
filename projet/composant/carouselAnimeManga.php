<div class="carousel carouselAnime">             
    <?php foreach($typeCarousel as $anime){ ?>
        <div class="carousel-item carouselAnimeItem">
            <div class="row">
                <div class="col s12">
                    <div class="card large">
                        <div class="card-image">
                            <img src="../img/imgAnime/<?php echo $anime['image'] ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?php echo $anime['name'] ?></span>
                            <p><?php echo $anime['description'] ?></p>
                        </div>
                        <div class="card-action">
                            <a href="<?php echo $anime['id'] ?>">Voir l'anime</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
