<h4>Liste des animes :</h4>

<?php 
    $sql = 'SELECT * FROM animes';
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $animes = $pre->fetchAll(PDO::FETCH_ASSOC);

    if($animes){
        foreach($animes as $anime){
            ?>
            <div class='row'>
                <img src="<?php echo $anime['image'] ?>" style='max-width:30px'>
                <h6><?php echo $anime['anime'] ?></h6>
            </div>
            <?php
        }
    }else{
        echo "Pas d'animes enregistrer";
    }
?>