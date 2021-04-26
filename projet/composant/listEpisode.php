<!-- Liste d'episodes sur le panel admin -->
<div class="rowflex">

    
    <?php 
        if(isset($episodes[0])){
            foreach($episodes as $episode){
                ?>
                    <div class='col-xs-12 col-md-4 col-lg-2' style="margin-bottom: 10px;">
                        <div class="card ">
                            <div class="card-image ">
                                <img src="../img/imgAnime/<?php echo $anime['image'] ?>" >
                            </div>
                            
                            <div class="card-action">
                                <?php require '../composant/voirEpisodeModal.php' ?>

                            </div>
                        </div> 
                        <?php if($_SESSION['user']['statut'] == 'admin'){ ?> 
                            <a href="../prive/episode.php?id=<?php echo $episode['id'] ?>">Modifier </a> |
                            <a href="../actions/deleteEpisode.php?id=<?php echo $episode['id'] ?>&idAnime=<?php echo $anime['id'] ?>">Supprimer</a>
                        <?php } ?>
                    </div>

                    <?php
            }
        }else{
            echo 'NOP';
        }
        ?>
</div>