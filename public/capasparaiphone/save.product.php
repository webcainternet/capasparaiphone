<?php
$idcsession = $_GET["idcsession"];
$qm = $_GET["m"];
$ql = $_GET["l"];
$qf = $_GET["f"];

include '../config.php';

$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
mysql_select_db(DB_DATABASE,$dblink);

$result = mysql_query("select product_id from oc_product order by product_id desc limit 1");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $ultimoid = $row["product_id"];
}

mysql_free_result($result);



$novoid = $ultimoid+1;

if (isset($novoid)) {

	$iquery1 = "INSERT INTO  `capasparaiphone`.`oc_product` (
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
	VALUES ('".$novoid."',  'Customizada',  '',  '',  '',  '',  '',  'idcsession=".$idcsession."&m=".$qm."&l=".$ql."&f=".$qf."',  '',  '10000',  '5', NULL ,  '0',  '1',  '59.0000',  '0',  '0',  '2013-11-01',  '0.85000000',  '1',  '6.00000000', '11.00000000',  '1.00000000',  '1',  '1',  '1',  '1',  '1',  '2013-11-01 00:00:00',  '2013-11-01 00:00:00',  '0')";


	$rquery1 = mysql_query($iquery1,$dblink);

	if (!$rquery1) {
	    die('Invalid query: ' . mysql_error());
	}
	else {
		$iquery2 = "INSERT INTO  `capasparaiphone`.`oc_product_description` (
			`product_id` ,
			`language_id` ,
			`name` ,
			`description` ,
			`meta_description` ,
			`meta_keyword` ,
			`tag`
			)
			VALUES ('".$novoid."',  '2',  'Capinha 3D Personalizada',  'A capinha com a sua cara',  '',  '',  '')";

		$rquery2 = mysql_query($iquery2,$dblink);

		if (!$rquery2) {
		    die('Invalid query: ' . mysql_error());
		}
		else {
			$iquery3 = "INSERT INTO  `capasparaiphone`.`oc_product_to_layout` (
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
				$iquery4 = "INSERT INTO  `capasparaiphone`.`oc_product_to_store` (
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
					header('Location: http://capasparaiphone.com.br/index.php?route=product/productcustom&product_id='.$novoid);
				}
			}
		}
	}

}

?>