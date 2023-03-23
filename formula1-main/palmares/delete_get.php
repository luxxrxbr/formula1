
<?php
	
  require("../db_req.php");
  $conn = GetConnection();
	
	$id =mysqli_real_escape_string($conn, $_GET["id"]);
	
    $sql = "DELETE from palmares WHERE id_palmares = ".$id." ";
	
echo $sql;

    if ($conn->query($sql) ===True)  {
        echo "<strong>Suppression réussi</strong>";
        header("Location: index.php");
        die();
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

    <a href="../palmares/index.php">Nos palmares</a>
