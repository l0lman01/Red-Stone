<!-- Créer un modal pour rajouter un Manga -->

<div id="modal2" class="modal">
  <div class="modal-content">
    <form action="../actions/newManga.php" method='post' enctype="multipart/form-data">
      <div>
        <label>Nom du manga</label>
        <input type="text" name='name' required>
      </div>
      <br/>
      <div>
        <label>Image</label>
        <br/>
        <input type="file" name="image" required>
      </div>
      <br/>
      <div>
        <textarea name="description" cols="30" rows="10" placeholder="Entrer une descritption..." ></textarea>
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