<?php require("../head.php"); ?>

<?php
require("../db_req.php");
$conn = GetConnection();
$id = $_GET["id"];
$sql = "select fullname,img_url,id_ecuries,id_pilotes from palmares where id_palmares = ".$id;
$name = "";
$id_pilotes = "";
$id_ecuries = "";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $name = $row["fullname"];
    $id_pilotes = $row["id_pilotesr"];
    $id_ecuries = $row["id_ecuries"];
  }
} else {
  echo "0 results";
}

?>

<center><br><br><br>

    <form action="update_post.php" method="post">

      <label>Mettre à jour un palmares : </label>
      <label></label>
      <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
      <input autofocus type="text" id="palmares" name="name" value="<?= $name ?>">

      <br><br>

      <select name="id_pilotes">
      <?php
        $sql1 = "select id_pilotes as id, fullname as name from pilotes";
        $authorResult = $conn->query($sql1);
        while ($row = $authorResult->fetch_assoc()) {
          $selected = $row["id"] == $id_pilotes ? "selected" : "";
          ?>
          <option value="<?= $row["id"] ?>"<?=$selected ?>><?= $row["name"] ?></option>
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
          $selected = $row["id"] == $id_ecuries ? "selected" : "";
          ?>
          <option value="<?= $row["id"] ?>"<?=$selected ?>><?= $row["name"] ?></option>
          <?php
        }
      ?>
      </select>
      <br><br>

      <button type="submit" id="submit">Soumettre</button>	

    </form>



    <a href="../palmares/index.php">Nos Palmares ..</a>
</center>
  </body>
<?php 
mysqli_close($conn);
?>
</html>