<?php require("../head.php"); ?>

<body>
  <header>
    <div class="menu-haut">
      <div class="usa">
        <a href="./read.php"><img src="https://cdn.shopify.com/s/files/1/0010/7167/7500/t/13/assets/_flag.png?9485744168629531854" alt=""></a>
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

  <?php
  require("../db_req.php");
  $conn = GetConnection();
  $sql = "select * from ecuries";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

  ?>

  <center>
     <div class="table-responsive-vertical shadow-z-1">
        <table id="table" class="table table-hover table-mc-light-blue" style="margin-top:10% margin-right:20%" border=1 >
          <?php
          while ($row = $result->fetch_assoc()) {
              ?>
                  <tr><td><?= $row["name"] ?>
                  <td><a href="<?= $row["img_url"] ?>"><img width="70" height="70" src= "<?= $row["img_url"] ?>" />
                      <td><img class="delete" style="max-width: 30px" src="../resource/poubelle.png" data-rowid="<?= $row["id_ecuries"] ?>" /></a>
                      ---
                      <img class="update" style="max-width: 30px" src="../resource/refresh.png" data-rowid="<?= $row["id_ecuries"] ?>" /></a>
              <?php
              // echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
          }
          ?>
      </table>
  <?php
  } else {
      echo "0 results";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
    </div>
      </div>

    <div class="bloc-image">
      <img src="https://mobile-img.lpcdn.ca/lpca/924x/r3996/53e36cce-51a9-11ea-82bb-0eda3a42da3c.jpg" alt="">
    </div>

  </main>



<?php require("../popup.php") ?>

<script src="../js/jquery.js"></script>
<script src="../js/index.js"></script>
    </body>
</html>