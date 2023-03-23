
<?php require("../head.php"); ?>

<center><br><br><br>
<html>
    <head> 

    </head>
    <body>
        <form action="login_post.php" method="post">
            <h1>Login</h1>
            <br>
            You mail
            <input type="email" name="email">
            <br><br>
            Password
            <input type="password" name="mot_de_passe">
            <br><br>
            <button id="submit" name="submit">Login</button>
        </form>
        
<form action="validate.php" method="post">
    <table>
    <tr>
      <td>
        <label>Entrer le texte dans l'image</label>
        <input name="captcha" type="text">
        <img alt="avion" src="../captcha.php" style="vertical-align: middle;"/>
      </td>
    </tr>
    <tr>
      <td><input name="submit" type="submit" value="Submit"></td>
    </tr>
    </table>
    </form>
        <br>
        <a href="../read.php">Menu Principal</a>
    </body>
</html>