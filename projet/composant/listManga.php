<!-- Liste de manga sur le panel admin -->

</br>
<a class=" waves-effect waves-light btn modal-trigger " href="#modal2">Ajouter un manga</a>
<div class='row'>
    <h4 class='col s8'>Liste des mangas :</h4>
</div>
<div class='rowflex center-xs'>
    <?php 
        $sql = 'SELECT * FROM manga';
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $mangas = $pre->fetchAll(PDO::FETCH_ASSOC);

        if($mangas){
            foreach($mangas as $manga){
    ?>
                <div class='col-xs-12 col-md-4 col-lg-3' style="margin-bottom: 10px;">
                    <a href='manga.php?id=<?php echo $manga['id'] ?>' > 
                            <img src="../img/imgManga/<?php echo $manga['image'] ?>" style="max-width:60%">
                            <h6><?php echo $manga['name'] ?></h6>                   
                    </a> 
                </div>
    <?php
            }
        }else{
            echo "Pas de manga enregistrer";
        }
    ?>
</div> 