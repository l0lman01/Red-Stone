<div id="modal1" class="modal">
    <div class="modal-content">
      <form action="../actions/newAnime.php" method='post'enctype="multipart/form-data">
        <div>
            <label>Nom de l'anime</label>
            <input type="text" name='name' required>
        </div>
        <br/>
        <div>
            <label>Image</label>
            <br/>
            <input type="file" name="image" required>
        </div>
        <br/>
        <br/>
        <br/>
        <button class="btn waves-effect waves-light" type="submit" name="action" >
          <i class="far fa-plus-square"></i>
       </button>
      </form>
    </div>
  </div>