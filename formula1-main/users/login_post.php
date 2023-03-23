<html>
    <head>
    </head>
<body>
    <?php
    require("../db_req.php");
    $conn = GetConnection();
    if (!$conn) {
        die("Erreur Connection : " . mysqli_connect_error());
    }
    $sql = "SELECT mot_de_passe FROM users WHERE email='" . $_POST['email'] . "';";
    $result = mysqli_query($conn, $sql);
    $dbPass = "";
    echo $_POST['mot_de_passe'];
    while ($row = mysqli_fetch_assoc($result)) {
        $dbPass =  $row["mot_de_passe"];
    }
    if($dbPass == "")
        die("email non présent");
    $inEmail = $_POST['email'];
    $inPass = $_POST['mot_de_passe'];
    $cryptedPass = md5($inPass);
    // echo "<p>pass: ".$inPass. " - ".$cryptedPass;
    if ($cryptedPass == $dbPass) {
        session_start();
        // todo put in session the current user EMAIL and NAME
        $_SESSION["email"] = $inEmail;
        session_write_close();
        echo   $_SESSION["email"];
        echo "<p>BRAVO";
        if(! empty($_GET["back_url"])){
         header('Location: '. $_GET["back_url"]);
        }
        else
        {
        header('Location: ../read.php');
        }
        // die();
    } else {
        echo "<p>NON PAS MOYEN!!";
        // invalid PASSWORD OR LOGIN
    }
    mysqli_close($conn);
    ?>
    <br><br>
</body>
</html>