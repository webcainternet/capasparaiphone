<?php
$idcsession = $_GET["idcsession"];
$qm = $_GET["m"];
$ql = $_GET["l"];
$qf = $_GET["f"];

include("config-modelos.php");
$textoprod = "Capinha personalizada ".$textmodelo." ".$textnomelayout;

include '../config.php';

$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
mysql_select_db(DB_DATABASE,$dblink);

$result = mysql_query("select product_id from sea_product order by product_id desc limit 1");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $ultimoid = $row["product_id"];
}

mysql_free_result($result);



$novoid = $ultimoid+1;

if (isset($novoid)) {

	$iquery1 = "INSERT INTO  `capasparaiphone`.`sea_product` (
	`product_id` ,
	`model` ,
	`sku` ,
	`upc` ,
	`ean` ,
	`jan` ,
	`isbn` ,
	`mpn` ,
	`location` ,
	`quantity` ,
	`stock_status_id` ,
	`image` ,
	`manufacturer_id` ,
	`shipping` ,
	`price` ,
	`points` ,
	`tax_class_id` ,
	`date_available` ,
	`weight` ,
	`weight_class_id` ,
	`length` ,
	`width` ,
	`height` ,
	`length_class_id` ,
	`subtract` ,
	`minimum` ,
	`sort_order` ,
	`status` ,
	`date_added` ,
	`date_modified` ,
	`viewed`
	)
	VALUES ('".$novoid."',  'Customizada',  '',  '',  '',  '',  '',  'idcsession=".$idcsession."&m=".$qm."&l=".$ql."&f=".$qf."',  '',  '10000',  '5', NULL ,  '0',  '1',  '59.9000',  '0',  '0',  '2013-11-01',  '0.12000000',  '1',  '24.00000000', '16.00000000',  '8.00000000',  '1',  '1',  '1',  '1',  '1',  '2013-11-01 00:00:00',  '2013-11-01 00:00:00',  '0')";


	$rquery1 = mysql_query($iquery1,$dblink);

	if (!$rquery1) {
	    die('Invalid query: ' . mysql_error());
	}
	else {
		$iquery2 = "INSERT INTO  `capasparaiphone`.`sea_product_description` (
			`product_id` ,
			`language_id` ,
			`name` ,
			`description` ,
			`meta_description` ,
			`meta_keyword` ,
			`tag`
			)
			VALUES ('".$novoid."',  '2',  '".$textoprod."',  'A capinha com a sua cara',  '',  '',  '')";

		$rquery2 = mysql_query($iquery2,$dblink);

		if (!$rquery2) {
		    die('Invalid query: ' . mysql_error());
		}
		else {
			$iquery3 = "INSERT INTO  `capasparaiphone`.`sea_product_to_layout` (
				`product_id` ,
				`store_id` ,
				`layout_id`
				)
				VALUES (
				'".$novoid."',  '0',  '13'
				)";

			$rquery3 = mysql_query($iquery3,$dblink);

			if (!$rquery3) {
			    die('Invalid query: ' . mysql_error());
			}
			else {
				$iquery4 = "INSERT INTO  `capasparaiphone`.`sea_product_to_store` (
					`product_id` ,
					`store_id`
					)
					VALUES (
					'".$novoid."',  '0'
					)";
				$rquery4 = mysql_query($iquery4,$dblink);

				if (!$rquery4) {
				    die('Invalid query: ' . mysql_error());
				}
				else {
					  $date2 = date_create();
					  $timestamp2 = date_timestamp_get($date2);
					  $ramdomico2 = rand(1000,9999);
					  $idsession = $timestamp2."".$ramdomico2;
					  $_SESSION["userid"] = $idsession;
					  $idcsession = $idsession;

					
					header('Location: https://www.capasparaiphone.com.br/index.php?route=product/product&product_id='.$novoid);
				}
			}
		}
	}

}

?>