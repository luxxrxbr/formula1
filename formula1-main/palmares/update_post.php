
<?php

require("../db_req.php");
$conn = GetConnection();

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$id_pilotes =mysqli_real_escape_string($conn, $_POST["id_pilotes"]);
$id_ecuries =mysqli_real_escape_string($conn, $_POST["id_ecuries"]);

$id = mysqli_real_escape_string($conn, $_GET["id"]);



$sql = "UPDATE palmares SET fullname='$name',id_pilotes=$id_pilotes,id_ecuries=$id_ecuries WHERE id_palmares='$id'";


if ($conn->query($sql) === TRUE) {

  echo "Record updated successfully";
  header("Location: index.php");
  die();
} 
else {

  echo "Error updating record: " . $conn->error;

}

echo "<p><a href='index.php'>Return to index</p>";



$conn->close();

?>
