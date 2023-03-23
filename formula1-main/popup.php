<div class="form-popup-create" id="myFormCreate">
  <form action="create_post.php" method="post" class="form-container">
    <h1>Créer une ecuries</h1>

    <label for="email"><b></b></label>
    <input type="text" id="ecuries" placeholder="Entrer un nom de ecuries" name="name" required>
    <input type="text" id="img" placeholder="Entrer l'url de l'image" name="img_url" required>

    <button type="submit" class="btn">Envoyer</button>
    <button type="button" id="submit" name="submit" class="btn cancel" onclick="closeFormCreate()">Close</button>
  </form>
</div>

<div class="form-popup-delete" id="myFormDelete">
  <form action="delete_get.php?id=AUTO" method="post" class="form-container">
    <h1>Etes vous sur ?</h1>
    <button type="submit" class="btn">Oui</button>
    <button type="button" id="submit" name="submit" class="btn cancel" onclick="closeFormDelete()">Non</button>
  </form>
</div>

<div class="form-popup-update" id="myFormUpdate">
  <form action="update_post.php?id=AUTO" method="post" class="form-container">
    <h1>Modifier une ecuries</h1>
    <input type="text" id="ecuries" placeholder="Entrer un nom de ecuries" name="name" >
    <input type="text" id="img" placeholder="Entrer l'url de l'image" name="img_url" >
    <button type="submit" class="btn">Envoyer</button>
    <button type="button" id="submit" name="submit" class="btn cancel" onclick="closeFormUpdate()">Close</button>
  </form>
</div>

