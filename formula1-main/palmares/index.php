<?php require("../head.php"); ?>

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
          <a href="./users/logout.php"><img style=margin-left:92% src="resource/se-deconnecter.png" height="20" width="20" /></i></a>
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
      <?php
  require("../db_req.php");
  $conn = GetConnection();
  $sql = "SELECT pa.id_palmares AS idp, pa.fullname AS paname , pil.fullname as pilname, e.name AS ename, e.img_url AS eimg, pil.img_url AS pimg
  FROM palmares pa
  INNER join pilotes pil ON pil.id_pilotes = pa.id_pilotes
  INNER join ecuries e ON e.id_ecuries = pa.id_ecuries
  
  
  ";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

  ?>
  <center>
     <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover table-mc-light-blue" style="margin-top:10% margin-right:20%" border=1 >
          <?php 
          while ($row = $result->fetch_assoc()) {
              ?>
                  <tr>
                    <td><?= $row["paname"] ?></td>
                    <td><?= $row["pilname"] ?></td>
                    <td><a href="<?= $row["pimg"] ?>"><img width="100" height="70" src="<?= $row["pimg"] ?>" />
                    <td><?= $row["ename"] ?></td>
                    <td><a href="<?= $row["eimg"] ?>"><img width="100" height="70" src="<?= $row["eimg"] ?>" />
                  <td><?= $row["idp"] ?>
                      <td><img class="delete" style="max-width: 30px" src="../resource/poubelle.png" data-rowid="<?= $row["idp"] ?>" /></a>
                      ---
                      <img class="update" style="max-width: 30px" src="../resource/refresh.png" data-rowid="<?= $row["idp"] ?>" /></a>
              <?php
              // echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
          }
          ?>
      </table>
    </div>
  </center>
  <?php
  } else {
      echo "0 results";
  }

  ?>
</div>
    </div>
      </div>

    <!-- <div class="bloc-image">
      <img src="https://cdn-2.motorsport.com/images/amp/0rGy9mW2/s1000/fernando-alonso-aston-martin-f.webp" alt="">
    </div> -->

  </main>

<div class="form-popup-create" id="myFormCreate">
    <form action="create_post.php" method="post" class="form-container">
      <h1>Ajouter un palmarès</h1>

      <label for="email"><b></b></label>
      <input type="text" id="palmares" placeholder="Entrer un nom de Palmarès" name="name" required>
      <br>
      <select id="ecuries" name="id_ecuries" placeholder="Veuillez selectionner l'écurie gagnante" style="width:100% ;"> 
        <?php
         $result = $conn->query("select name, id_ecuries from ecuries order by name");
        while ($row = $result->fetch_assoc()) {
        ?>
          <option value="<?= $row["id_ecuries"] ?>"><?= $row["name"] ?></option>
        <?php
        }
        ?>    
      </select>
      <br><br>
      <select id="pilotes" name="id_pilotes" placeholder="Veuillez selectionner le pilote gagnant" style="width:100% ;"> 
        <?php
         $result = $conn->query("select fullname, id_pilotes from pilotes order by fullname");
        while ($row = $result->fetch_assoc()) {
        ?>
          <option value="<?= $row["id_pilotes"] ?>"><?= $row["fullname"] ?></option>
        <?php
        }
        ?>    
      </select>
      <br><br>
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
    <h1>Modifier un palmarès</h1>
    <input type="text" id="ecuries" placeholder="Entrer un nom de ecuries" name="name" >
    <br>
      <select id="ecuries" name="id_ecuries" placeholder="Veuillez selectionner l'écurie gagnante" style="width:100% ;"> 
        <?php
         $result = $conn->query("select name, id_ecuries from ecuries order by name");
        while ($row = $result->fetch_assoc()) {
        ?>
          <option value="<?= $row["id_ecuries"] ?>"><?= $row["name"] ?></option>
        <?php
        }
        ?>    
      </select>
      <br><br>
      <select id="pilotes" name="id_pilotes" placeholder="Veuillez selectionner le pilote gagnant" style="width:100% ;"> 
        <?php
         $result = $conn->query("select fullname, id_pilotes from pilotes order by fullname");
        while ($row = $result->fetch_assoc()) {
        ?>
          <option value="<?= $row["id_pilotes"] ?>"><?= $row["fullname"] ?></option>
        <?php
        }
        ?>    
      </select>
      <br><br>
    <button type="submit" class="btn">Envoyer</button>
    <button type="button" id="submit" name="submit" class="btn cancel" onclick="closeFormUpdate()">Close</button>
  </form>
</div>



<?php mysqli_close($conn); ?>
<script src="../js/jquery.js"></script>
<script src="../js/index.js"></script>
    </body>

</html>
</div>





























<!--  -->









