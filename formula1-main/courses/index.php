<?php require("../head.php"); ?>
<div class="colonne-gauche">
    <?php require("../menu.php") ?>
</div>
<div class="colonne-centrale">
  <h1 style="margin-left:15%">courses</h1>

  <?php
  require("../db_req.php");
  $conn = GetConnection();
  $sql = "select * from courses";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

  ?>
      <table style="margin-top:10%" border=1>
          <?php 
          while ($row = $result->fetch_assoc()) {
              ?>
                  <tr><td><?= $row["fullname"] ?>
                  <td><a href="<?= $row["img_url"] ?>"><img width="70" height="70" src= "<?= $row["img_url"] ?>" />
                  <td><?= $row["id_pilotes"] ?>
                  <td><?= $row["id_ecuries"] ?>
                      <td><img class="delete" style="max-width: 30px" src="../resource/poubelle.png" data-rowid="<?= $row["id_palmares"] ?>" /></a>
                      ---
                      <img class="update" style="max-width: 30px" src="../resource/refresh.png" data-rowid="<?= $row["id_palmares"] ?>" /></a>
              <?php
              // echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
          }
          ?>
      </table>
  <?php
  } else {
      echo "0 results";
  }

  ?>
</div>
<div class="colonne-droite">
  <h2 style="margin-right:75%">Ajout</h2>
    <img style="margin-right:90%" src="../resource/add.png" class="add" height="100" width="100" /><span style="margin-left:1em"></span>

  <br><br><br><br>
  <div class="container">
  <h2 style="margin-right:100%">Nos Palmares les plus connues</h2>  
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../resource/lewis.jfif" alt="Palmares" style="width:20%;">
      </div>

      <div class="item">
        <img src="../resource/charles.jfif" alt="Palmares" style="width:20%;">
      </div>
    
      <div class="item">
        <img src="../resource/max.jfif" alt="Palmares" style="width:20%;">
      </div>

      <div class="item">
        <img src="../resource/pierre.jfif" alt="Palmares" style="width:20%;">
      </div>
    </div>
  </div>
</div>
<?php mysqli_close($conn); ?>
<script src="../js/jquery.js"></script>
<script src="../js/index.js"></script>
    </body>

</html>
</div>





























<div class="form-popup-create" id="myFormCreate">
  <form action="create_post.php" method="post" class="form-container">
    <h1>Créer une ecuries</h1>
    <select name="id_pilotes">
      <?php
        $sql1 = "select id_pilotes as id, fullname as name from pilotes";
        $authorResult = $conn->query($sql1);
        while ($row = $authorResult->fetch_assoc()) {
          ?>
          <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
          <?php
        }
      ?>
    </select>
    <br><br>
    <select name="id_ecuries">
      <?php
        $sql2 = "select id_ecuries as id, name from ecuries";
        $categoryResult = $conn->query($sql2);
        while ($row = $categoryResult->fetch_assoc()) {
          ?>
          <option value="<?= $row["id"] ?>"><?= $row["name"] ?></option>
          <?php
        }
      ?>
    </select>
    <br><br>

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









