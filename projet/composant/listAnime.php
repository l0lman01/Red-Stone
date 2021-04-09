<div class='row'>
    <h4 class='col s10'>Liste des animes :</h4>
    <a href="" class='col s2'>ajouter un anime</a>
</div>


<?php 
    $sql = 'SELECT * FROM animes';
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $animes = $pre->fetchAll(PDO::FETCH_ASSOC);

    if($animes){
        foreach($animes as $anim){
            ?>
            
            <a href='Anime.php?name=<?php echo $anim['name'] ?>' class='col s4 center'>
                <img src="../img/upload/<?php echo $anim['image'] ?>" style='max-width:150px'>
                <h6><?php echo $anim['name'] ?></h6>
            </a>
            <?php
        }
    }else{
        echo "Pas d'animes enregistrer";
    }
?>