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

	$qm=$_GET["m"];
	$ql=$_GET["l"];

	include("../config-modelos.php");
?>

<!-- ddx.jscript -->
	<?php include 'ddx.jscript.php'; ?>
<!-- ddx.jscript fim -->

<!-- ddx.layoyt -->
    <?php include 'ddx.layout_new.php'; ?>
<!-- ddx.layout fim -->