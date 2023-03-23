
<?php

require("../db_req.php");
$conn = GetConnection();

$name = mysqli_real_escape_string($conn, $_POST["name"]);

$id = mysqli_real_escape_string($conn, $_POST["id"]);



$sql = 'UPDATE pilotes SET fullname="'.$name.'" WHERE id_pilotes="'.$id.'"';



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
