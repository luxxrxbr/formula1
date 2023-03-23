<?php require("../head.php"); ?>

<?php
require("../db_req.php");
$conn = GetConnection();
?>


<center><br><br><br>

<form action="create_post.php" method="post">

<label>Ajouter un Palmares : </label>

<input type="text" name="name">

<br><br>

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
<button type="submit" id="submit" name="submit">Soumettre</button>	

</form>



<a href="../palmares/index.php">Tableaux des palmares</a>
</center>

<?php mysqli_close($conn); ?>

</body>

</html>