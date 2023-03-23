<?php require("../head.php"); ?>
<?php require("../db_req.php") ?>

<body>
  <header>
    <div class="menu-haut">
      <div class="usa">
        <a href="./read.php"><img src="https://cdn.shopify.com/s/files/1/0010/7167/7500/t/13/assets/french_flag.png?9485744168629531854" alt=""></a>
      </div>
      <div class="shipping">
        <a href="#">REALISATION FORMATION PHP</a>
      </div>
      <div class="icons">
        <nav>
          <a href="./users/logout.php"><img style=margin-left:92% src="../resource/se-deconnecter.png" height="20" width="20" /></i></a>
        </nav>
      </div>
    </div>
    <div class="menu-bas">
      <div class="premier">
        <a href="../ecuries/index.php">ECURIES</a>
        <a href='../pilotes/index.php'>PILOTES</a>
        <a href="../palmares/index.php">PALMARES</a>
      </div>
      <div class="titre">
      <a href="../read.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/1280px-F1.svg.png" alt=""></a>
      </div>
      <div class="deuxieme">
        <a class="add"><img style="margin-right:90%" src="../resource/add.png" height="40" width="40"/></a> 
        <a href="../info/index.php">INFORMATION</a>
        <a href="../courses.php">COURSES</a>
        
      </div>

    </div>
  </header>

  <main>
    <div >
      <div class="texte">


  <center>
     <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover table-mc-light-blue" style="margin-top:10% margin-right:20%" border=1 >
        <?php
      $conn = GetConnection();
      $result = $conn->query("select * from pilotes");
      while ($row = $result->fetch_assoc()) {
      ?>
        <tr>
          <td><?= $row["fullname"] ?>
          <td><a href="<?= $row["img_url"] ?>"><img width="100" height="70" src="<?= $row["img_url"] ?>" />

          <!-- <td><a href="delete.php?id=<?= $row["id_pilotes"] ?>"><img style="max-width: 30px" src="poubelle.png" /></a> -->
          <td><img class="delete" style="max-width: 30px" src="poubelle.png" data-rowid="<?= $row["id_pilotes"] ?>" /></a>
            ---
            <a href="update.php?id=<?= $row["id_pilotes"] ?>"><img style="max-width: 30px" src="refresh.png" /></a>
        </tr>
      <?php
      }
      ?>
      </table>
</div>
</div>
    </div>
      </div>

    <div class="bloc-image">
      <img src="https://cdn-9.motorsport.com/images/amp/2QzWKXAY/s1000/the-cars-in-parc-ferme-after-t.jpg" alt="">
    </div>

  </main>

<!-- <h1>------------------------------------------------------------------------------------------------------</h1> -->



















<div class="form-popup-create" id="myFormCreate">
    <form action="create_post.php" method="post" class="form-container">
      <h1>Ajouter un pilote</h1>

      <label for="email"><b></b></label>
      <input type="text" id="ecuries" placeholder="Entrer un nom de Pilote" name="name" required>
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


  <!-- End page content -->
<!-- </div> -->

<script src="../js/jquery.js"></script>
<script src="../js/index.js"></script>

</body>

</html>