
<?php
	
  require("../db_req.php");
  $conn = GetConnection();
	
	$name =mysqli_real_escape_string($conn, $_POST["name"]);
    $id_pilotes =mysqli_real_escape_string($conn, $_POST["id_pilotes"]);
    $id_ecuries =mysqli_real_escape_string($conn, $_POST["id_ecuries"]);
	
    $sql = "INSERT INTO palmares (fullname,id_pilotes,id_ecuries) VALUES ('".$name."',$id_pilotes,$id_ecuries)";

    if ($conn->query($sql) ===True)  {
        echo "<strong>Création et Ajout réussis</strong>";
        header("Location: index.php");
        die();
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
