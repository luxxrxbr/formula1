
<?php
	
  require("../db_req.php");
  $conn = GetConnection();
	
	$name =mysqli_real_escape_string($conn, $_POST["name"]);
    $img =mysqli_real_escape_string($conn, $_POST["img_url"]);
	
    $sql = "INSERT INTO pilotes (fullname,img_url) VALUES ('".$name."','".$img."')";
	
    if ($conn->query($sql) ===True)  {
        echo "<strong>Création et Ajout réussis</strong>";
        header("Location: index.php");
        die();
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
