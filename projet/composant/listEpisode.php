<?php 

    if(isset($episodes[0])){
        foreach($episodes as $episode){
            ?>
                <li>
                    <?php echo $episode['name'] ?>
                </li>
            <?php

        }
    }else{
        echo 'NOP';
    }
?>