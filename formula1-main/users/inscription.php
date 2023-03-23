<?php require("../head.php"); ?>

<center><br><br><br>

<html>
    <head>
    </head>
<body>


<h1>Inscription</h1>
    <form method="post" action="">
        <p>nom</p>
        <input type="text" name="name">
        <p>email</p>
        <input type="email" name="email">
        <p>Mot de Passe</p>
        <input type="password" name="mot_de_passe">
        <p>Répetez votre Mot de Passe</p>
        <input type="password" name="mot_de_passe2"><br><br>                        
        <input type="submit" name="submit" value="Valider">
    </form>
    <br>
    <a href="../read.php">Menu Principal</a>
<?php

if (isset($_POST['submit']))

{
   /* on test si les champ sont bien remplis */
    if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['mot_de_passe']) and !empty($_POST['mot_de_passe2']))
    {
        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['mot_de_passe'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['mot_de_passe']==$_POST['mot_de_passe2'])
            {
                // On crypte le mot de passe
                $_POST['mot_de_passe']= md5($_POST['mot_de_passe2']);
                // on se connecte à MySQL et on sélectionne la base

                require("../db_req.php");
                $conn = GetConnection();
                //On créé la requête
                $sql = "INSERT INTO users (name,email,mot_de_passe) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['mot_de_passe']."')";
                /* execute et affiche l'erreur mysql si elle se produit */
                if(!$conn->query($sql))
                {
                    printf("Message d'erreur : %s\n", $conn->error);
                }
            // on ferme la connexion
            mysqli_close($conn);
            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";
}
?>
</body>
</html>