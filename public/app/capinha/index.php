<?php
session_start();

if (isset($_SESSION["userid"])) {
  $idcsession = $_SESSION["userid"];
}
else {
  header('Location: /app/');
}

    $gmodelo = $_GET["m"];
    $glayout = $_GET["l"];
?>

<?php include 'var.tamanhos.php'; ?>

<!-- ddx.jscript -->
<?php include 'ddx.jscript.php'; ?>
<!-- ddx.jscript fim -->

<!-- ddx.layoyt -->
    <?php include 'ddx.layout.php'; ?>
<!-- ddx.layout fim -->