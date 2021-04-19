<?php 

    if(isset($episodes[0])){
        foreach($episodes as $episode){
            ?>
                <li>
                    <?php echo $episode['nb_episode'] ?>
                    <a href="../prive/episode.php?id=<?php echo $episode['id'] ?>">Modifier</a>
                    <a href="../actions/deleteEpisode.php?id=<?php echo $episodes[0]['id'] ?>">Supprimer</a>
                </li>
            <?php

        }
    }else{
        echo 'NOP';
    }
?>