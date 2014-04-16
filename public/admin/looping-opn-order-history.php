<?php
/**
 * PHP e MySQL para iniciantes
 *
 * Arquivo que faz a conexão com o banco de dados utilizando MySQLi
 *
 * PHP 5+, MySQL 4.1+
 *
 * @author Thiago Belem <contato@thiagobelem.net>
 * @link http://blog.thiagobelem.net/mysql/php-e-mysql-para-iniciantes-consulta-simples/
 */

// Dados de acesso ao servidor MySQL
$MySQL = array(
	'servidor' => 'localhost',	// Endereço do servidor
	'usuario' => 'thiagott_ope1',		// Usuário
	'senha' => 'kDBwdi13',				// Senha
	'banco' => 'thiagott_ope1'		// Nome do banco de dados
);

$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

// Verifica se ocorreu um erro e exibe a mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);
	
//$charset = mysqli_character_set_name($MySQLi);
//printf ("Current character set is %s\n",$charset);

if (!mysqli_set_charset($MySQLi, "utf8")) {
    //printf("Error loading character set utf8: %s\n", mysqli_error($MySQLi));
} else {
    //printf("Current character set: %s\n", mysqli_character_set_name($MySQLi));
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	//$sql = "SELECT shipping_zone FROM `sea_order` WHERE `shipping_zone` = 'Sao Paulo' AND `order_status_id` <> 0 ORDER by order_id ASC";
	
	//$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
?> 
        
        
                <?php
					//while ($registro = $resultado->fetch_object()) {
						
						//echo $registro->order_id;
						//$row_cnt = mysqli_num_rows($registro);
						
						//echo $row_cnt;
						
						//echo "INSERT INTO `thiagott_pnc1`.`opn_order_history` (`order_id`, `order_status_id`, `notify`, `date_added`) VALUES ('".$registro->order_id."', '5', '0', '2013-03-25 23:40:00');<br />"
						//echo "UPDATE `thiagott_pnc1`.`opn_order` SET `order_status_id`='5' WHERE `order_id`='".$registro->order_id."';<br />"
						
						
				?>
                
<?php
// Make a MySQL Connection

$sql = "SELECT shipping_zone, COUNT(*) AS contador FROM sea_order GROUP BY shipping_zone ORDER BY contador DESC "; 
//$query = "SELECT shipping_zone, COUNT(shipping_zone_id) FROM sea_order GROUP BY shipping_zone"; 
	 
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

//$result = mysql_query($query) or die(mysql_error());

// Print out result
while ($registro = $resultado->fetch_object()) {
//while($row = mysql_fetch_array($result)){
	echo $registro->contador ." vendas para ". $registro->shipping_zone ."<br />";
	
		$sql2 = "SELECT shipping_zone, shipping_city, COUNT(*) AS contador2 FROM sea_order WHERE shipping_zone = '$registro->shipping_zone' GROUP BY shipping_city ORDER BY contador2 DESC "; 
		
		$resultado2 = $MySQLi->query($sql2) OR trigger_error($MySQLi->error, E_USER_ERROR);
	
		while ($registro2 = $resultado2->fetch_object()) {

			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $registro2->contador2 ." vendas para ". $registro2->shipping_city ." <br /> ";

		}
	
//	echo "There are ". $row['COUNT(shipping_zone_id)'] ." ". $row['shipping_zone'] ." items.";
	echo "<br />";
//	echo "<br />";
}
?>                
                
                
<?php
	//} 
	//$resultado->free();
?>                
                
 </body>
</html>       