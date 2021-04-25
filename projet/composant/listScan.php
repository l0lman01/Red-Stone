<?php 
    if(isset($scans[0])){
        foreach($scans as $scan){
            ?>
                <li>
                    <?php echo $scan['nb_scan'] ?>
                    <a href="../prive/scan.php?id=<?php echo $scan['id'] ?>">Modifier</a>
                    <a href="../actions/deleteScan.php?id=<?php echo $scan['id'] ?>&idManga=<?php echo $manga['id'] ?>">Supprimer</a>
                </li>
            <?php

        }
    }else{
        echo 'NOP';
    }
?>