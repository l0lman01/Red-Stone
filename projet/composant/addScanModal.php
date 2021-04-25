<div id="modal1" class="modal">
    <div class="modal-content">
    <form action="../actions/newScan.php" method="post">
        <input type="hidden" id='manga_id' name="manga_id" value='<?php echo $manga_id ?>'>
        <div class="row">
            <div class="col s6">
                <label for="">Scan nb</label>
                <input type="number"  name="nb_scan">
            </div>

        </div>
        <div>
            <label for="">lien du scan</label>
            <input type="url"  name='link'>
        </div>
        
        <input type="submit">
    </form>
    </div>
</div>
