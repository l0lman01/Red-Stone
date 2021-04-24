<!-- FAIRE TABLE MANGA -->

<div class="carousel carouselAnime">             
    <?php foreach($manga as $scan){ ?>
        <div class="carousel-item carouselAnimeItem">
            <div class="row">
                <div class="col s12">
                    <div class="card large">
                        <div class="card-image">
                            <img src="../img/imgManga/<?php echo $scan['image'] ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?php echo $scan['name'] ?></span>
                            <p><?php echo $scan['description'] ?></p>
                        </div>
                        <div class="card-action">
                            <a href="<?php echo $scan['id'] ?>">Voir l'anime</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>