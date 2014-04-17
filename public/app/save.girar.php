<?php  

	require "../config.php";

	$host = DB_HOSTNAME;
	$user = DB_USERNAME;
	$pass = DB_PASSWORD;
	$base = DB_DATABASE;

	$mysqli = new mysqli($host, $user, $pass, $base);

	if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}

	if (isset($_GET['idsession']) && isset($_GET['posicao']) && isset($_GET['angulo'])){

		$sql = "REPLACE INTO cpi_capasconstrucao_girar (idsession, posicao, angulo)
				VALUES(".$_GET['idsession'].", ".$_GET['posicao'].", ".$_GET['angulo'].")";

		$result = $mysqli->query($sql);

		echo "OK";
	}
?>