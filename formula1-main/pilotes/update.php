<?php require("../head.php"); ?>

<center><br><br><br>

    <form action="update_post.php" method="post">

      <label>Mettre à jour un Pilote : </label>
      <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
	

      <input type="text" id="pilote" name="name">

      <button type="submit" id="submit" name="submit">Soumettre</button>	

    </form>



    <a href="../pilotes/index.php">Tableaux des pilotes</a>
</center>
  </body>

</html>