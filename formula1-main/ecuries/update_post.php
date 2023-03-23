

<?php

require("../db_req.php");
$conn = GetConnection();

$name = mysqli_real_escape_string($conn, $_POST["name"]);

$id = mysqli_real_escape_string($conn, $_GET["id"]);
$img =mysqli_real_escape_string($conn, $_POST["img_url"]);


$sql = 'UPDATE ecuries SET name="'.$name.'", img_url="'.$img.'" WHERE id_ecuries="'.$id.'"';



if ($conn->query($sql) === TRUE) {

  echo "Record updated successfully";
  header("Location: index.php");
  die();

} else {

  echo "Error updating record: " . $conn->error;

}

echo "<p><a href='index.php'>Return to index</p>";



$conn->close();

?>
