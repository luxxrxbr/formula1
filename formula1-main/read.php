<?php require("head.php"); ?>
<br><br>


<center>

<?php
session_start();

if (! isset ($_SESSION["email"])){

?>
<a href="./users/inscription.php"><button>Inscription</button></a>
<a href="./users/login.php"><button>Connexion</button></a>

<form action="validate.php" method="post">
    <table>
    <tr>
      <td>
        <label>Entrer le texte dans l'image</label>
        <input name="captcha" type="text">
        <img src="captcha.php" style="vertical-align: middle;"/>
      </td>
    </tr>
    <tr>
      <td><input name="submit" type="submit" value="Submit"></td>
    </tr>
    </table>
    </form>
<?php
}
else{
?>

<body>
  <header>
    <div class="menu-haut">
      <div class="usa">
        <a href="./read.php"><img src="https://cdn.shopify.com/s/files/1/0010/7167/7500/t/13/assets/french_flag.png?9485744168629531854" alt=""></a>
      </div>
      <div class="shipping">
        <a href="#">REALISATION FORMATION PHP</a>
      </div>
      <div class="icons">
        <nav>
          <a href="./users/logout.php"><img style=margin-left:92% src="resource/se-deconnecter.png" height="20" width="20" /></i></a>
        </nav>
      </div>
    </div>
    <div class="menu-bas">
      <div class="premier">
        <a href="ecuries/index.php">ECURIES</a>
        <a href='pilotes/index.php'>PILOTES</a>
        <a href="palmares/index.php">PALMARES</a>
      </div>
      <div class="titre">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/1280px-F1.svg.png" alt="">
      </div>
      <div class="deuxieme">
        <a href="info/index.php">INFORMATION</a> <a href="courses.php">COURSES</a>
        <a href="#"><i class="fas fa-search"></i></a>
      </div>

    </div>
  </header>

  <main>
    <div class="bloc-texte">
      <div class="texte">
      <h2>PALMARES<br> ECURIES <br> PILOTES</h2>
      <p>Possibilté de <strong>visualisation, ajout, modification</strong> & <strong>supression</strong></p>
      <a href="courses.php">VOIR LES DERNIERES COURSES</a>
    </div>
      </div>

    <div class="bloc-image">
      <img src="https://cdn-2.motorsport.com/images/amp/0rGy9mW2/s1000/fernando-alonso-aston-martin-f.webp" alt="">
    </div>

  </main>



<?php
}
?>
</body>
</html>