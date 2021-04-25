<!-- Créer un modal pour rajouter un épisode -->

<div id="modal1" class="modal">
    <div class="modal-content">
        <form action="../actions/newEpisode.php" method="post">
            <input type="hidden" id='anime_id' name="anime_id" value='<?php echo $anime_id ?>'>
            <div class="row">
                <div class="col s6">
                    <label for="">episode nb</label>
                    <input type="number"  name="nb_episode">
                </div>

                <div class="col s6">
                    <label for="">Saison :</label>
                    <input type="number"  name="saison">
                </div>
            </div>

            <div>
                <label for="">iFrame</label>
                <input type="text"  name='link'>
            </div>

            <select multiple id='test'>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        
            <input type="submit">
        </form>
    </div>
</div>