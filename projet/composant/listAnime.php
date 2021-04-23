</br>
<a class=" waves-effect waves-light btn modal-trigger " href="#modal1">Ajouter un animé</a>
<div class='row'>
    <h4 class='col s8'>Liste des animes :</h4>
</div>
<div class='rowflex center-xs'>
    <?php 
        $sql = 'SELECT * FROM animes';
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $animes = $pre->fetchAll(PDO::FETCH_ASSOC);

        if($animes){
            foreach($animes as $anim){
                ?>
                <div class='col-xs-12 col-md-4 col-lg-3' style="margin-bottom: 10px;">
                    <a href='anime.php?id=<?php echo $anim['id'] ?>' > 
                            <img src="../img/imgAnime/<?php echo $anim['image'] ?>" style="max-width:60%">
                            <h6><?php echo $anim['name'] ?></h6>                   
                    </a> 
                </div>
                <?php
            }
        }else{
            echo "Pas d'animes enregistrer";
        }
    ?>
</div>