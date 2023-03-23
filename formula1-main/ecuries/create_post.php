
<?php
	
  require("../db_req.php");
  $conn = GetConnection();
	
	  $sanitized_name =mysqli_real_escape_string($conn, $_POST["name"]);
      $img =mysqli_real_escape_string($conn, $_POST["img_url"]);

	
    $sql = "INSERT INTO ecuries (name,img_url) VALUES ('".$sanitized_name."','".$img."')";
	
    if ($conn->query($sql) ===True)  {
        echo "<strong>Création et Ajout réussis</strong>";
        header("Location: index.php");
        die();
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
