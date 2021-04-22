<?php 
    require '../actions/searchAllUser.php';
?>
    <h3>Administrateur</h3>
    <hr>
    <div>
        <?php
            foreach($allAdminUser as $adminUser){
                ?>
                <li>email : <?php echo $adminUser['email'] ?></li>
                <?php
            }
        ?>
    </div>
    
    <hr/>
    <h3>Client</h3>
    <hr/>
    <div>
        <?php
            foreach($allClientUser as $clientUser){
                ?>
                <li>email : <?php echo $clientUser['email'] ?></li>
                <?php
            }
        ?>
    </div>
    
    <hr/>
    <h3>Host</h3>
    <hr/>
    <div>
        <?php
            foreach($allHostUser as $hostUser){
                ?>
                <li>email : <?php echo $hostUser['email'] ?></li>
                <?php
            }
        ?>
    </div>
    <hr/>