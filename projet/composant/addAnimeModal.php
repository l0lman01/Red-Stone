<div id="modal1" class="modal">
    <div class="modal-content">
      <form action="../actions/newAnime.php" method='post'enctype="multipart/form-data">
        <div>
            <label>nom de l anime</label>
            <input type="text" name='name' required>
        </div>
        <div>
            <label>image</label>
            <input type="file" name="image" required>
        </div>
        <br />
        <input type="submit">
      </form>
    </div>
  </div>