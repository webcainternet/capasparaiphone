<?php
ini_set("memory_limit","128M");

$idcsession = $_GET["idcsession"];

include '../config.php';

$gidcsession = $idcsession;
$gmodelo = $_GET["modelo"];
$glayout = $_GET["layout"];
$gposicao = $_GET["posicao"];
$gimagem = $_GET["imagem"];
$qnheight = $_GET["nheight"];
$qnwidth = $_GET["nwidth"];
$qnleft = $_GET["nleft"];
$qntop = $_GET["ntop"];

$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
mysql_select_db(DB_DATABASE,$dblink);

$sql_statement = "UPDATE  `c4y_capasconstrucao` set 
`nheight` = ".$qnheight.",
`nwidth` = ".$qnwidth.",
`nleft` = ".$qnleft.",
`ntop`= ".$qntop."
WHERE 
`idcsession` = ".$gidcsession." AND
`posicao` = ".$gposicao."
";

/*
`modelo` = ".$gmodelo." AND
`layout` = ".$glayout." AND*/

$result = mysql_query($sql_statement,$dblink);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
else {
    echo "ok";    
}

?>

