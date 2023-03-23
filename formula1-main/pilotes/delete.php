<?php require("../head.php"); ?>

<center><br><br><br>

    <form action="delete_post.php" method="post">

      <?php ?>
      <p> Confirm delete ? </p>
      <p><a class="cmd_button" href="delete_get.php?id=<?= $_GET["id"] ?>">YES</a>
      <a class="cmd_button" href="index.php">NO </a>
    </form>



    <a href="../pilotes/index.php">Tableaux des pilotes</a>
</center>
  </body>

</html>