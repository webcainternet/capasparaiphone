<?php
	include '../config.php';

/*
echo DB_HOSTNAME;
echo DB_USERNAME;
echo DB_PASSWORD;
echo DB_DATABASE;
*/


	$gidcsession = $_GET["idcsession"];
	$gmodelo = $_GET["modelo"];
	$glayout = $_GET["layout"];
	$gposicao = $_GET["posicao"];
	$gimagem = $_GET["imagem"];


$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
mysql_select_db(DB_DATABASE,$dblink);

$sql_statement = "INSERT INTO  `capasparaiphone`.`c4y_capasconstrucao` (
`idcsession` ,
`modelo` ,
`layout` ,
`posicao` ,
`imagem`
)
VALUES (
'$gidcsession',  '$gmodelo',  '$glayout',  '$gposicao',  '$gimagem'
)
";

$result = mysql_query($sql_statement,$dblink);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
else {
	echo "OK";
}
