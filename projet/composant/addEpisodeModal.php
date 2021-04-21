<div id="modal1" class="modal">
    <div class="modal-content">
    <form action="../actions/newEpisode.php" method="post">
        <input type="hidden" id='anime_id' name="anime_id" value='<?php echo $anime_id ?>'>
        <div class="row">
            <div class="col s6">
                <label for="">episode nb</label>
                <input type="number" id='nb_episode' name="nb_episode">
            </div>
            <div class="col s6">
                <label for="">Saison :</label>
                <input type="number" id='saison' name="saison">
            </div>
        </div>
        <div>
            <label for="">iFrame</label>
            <input type="text" id='link' name='link'>
        </div>
        <input type="submit">
    </form>
    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script type='text/javascript'>
  
    function send_episode(){
        $.ajax({
            url : '../actions/newEpisode.php',
            type : 'POST',
            data : {
                anime_id : $('#anime_id').val(),
                nb_episode : $('#nb_episode').val(),
                saison : $('#saison').val(),
                link : $('#link').val(),
            },
            success:function(){
                M.toast({html: "Episode ajouter normalement =D enfin je pense ..."})
            }
        });
    }
  
  </script>