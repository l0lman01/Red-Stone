<!-- Carrousel avec des cartes -->

<div class="carousel carouselAnime">             
    <?php 
    // Vérifie si c'est un manga ou un anime
        if($where == 'anime'){
            $image = 'imgAnime/';
            $link = 'animedetails.php';
        }else{
            $image = 'imgManga/';
            $link = 'manga.php';           
        }
        
        foreach($typeCarousel as $type){ 
    ?>
    <div class="carousel-item carouselAnimeItem">
        <div class="row">
            <div class="col s12">
                <div class="card large">
                    <div class="card-image">
                        <img src="../img/<?php echo $image ; echo $type['image'] ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo $type['name'] ?></span>
                        <p><?php echo $type['description'] ?></p>
                    </div>
                    <div class="card-action">
                        <a href="../public/<?php echo $link ?>?id=<?php echo $type['id'] ?>">Voir l'anime/Lire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }; $where = NULL; ?>
</div>