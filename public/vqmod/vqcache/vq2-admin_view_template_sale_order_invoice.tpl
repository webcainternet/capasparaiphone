<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $direction; ?>" lang="<?php echo $language; ?>" xml:lang="<?php echo $language; ?>">
<head>
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<link rel="stylesheet" type="text/css" href="view/stylesheet/invoice.css" />

			<script type="text/javascript" src="view/javascript/jquery/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="view/javascript/jquery/jquery-barcode.js"></script>
			
</head>
<body>

				<?php
				
				define("LATIN1_UC_CHARS", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝ");
				define("LATIN1_LC_CHARS", "àáâãäåæçèéêëìíîïðñòóôõöøùúûüý");
				
				function uc_latin1 ($str) {
					$str = strtoupper(strtr($str, LATIN1_LC_CHARS, LATIN1_UC_CHARS));
					return strtr($str, array("ß" => "SS"));
				}
				
				$i = 1;
				$cont = 1;
				
				?>
				
				<table width="765" border="0" cellpadding="14" cellspacing="0">
  					<tr>

				
			
<?php foreach ($orders as $order) { ?>
 <?php if(isset($_GET['p'])=='slabel')
{
?>

    <script type="text/javascript">
	
	$(document).ready(function(){
    
			$("#barcodeTarget<?php echo $cont; ?>").barcode("<?php echo str_replace('-','',$order['shipping_cep']); ?>", "code128",{barWidth:2, barHeight:90});
			
	});

			    
    </script>

    <td width="50%" height="300" valign="top" >
	
	<table width="100%" border="0">
		<tr><td align="left"><img src="view/image/destinatario_peq.gif" border="0"></td>
		<td align="right"><img src="view/image/logo_correios_peq.gif" border="0"></td>
		</tr>
	</table>	
	
	<table border="0" cellpadding="0" cellspacing="0" height="140">
	<tr>
	<td valign="top">
	<?php 
		echo "<span style='font-family: Arial, Helvetica, sans-serif;font-size:13px;'>" . uc_latin1($order['shipping_address_etiqueta']) . "</span>";
	?>
	</td>
	</tr>
	</table>               
    <div id="barcodeTarget<?php echo $cont; ?>" class="barcodeTarget" style="margin-left:-18px;"></div>
    <br />
    <br />
    <br />
    <hr align="center" width="100%" color="silver" size="1">
	<p style="font-family: Arial, Helvetica, sans-serif;font-size:10px;">
	<b><u>REMETENTE</u></b><br />
	THIAGO TORRES<br />
	RUA GUILHERME VALENTE, 07<br />
	JARDIM VERGUEIRO<br />
	05818-280 SÃO PAULO/SP<br />
	</p>
	</td>
	<?php if ($i == 2) { echo "</tr><tr><td colspan='2'><br /><br /><br /><br /><br /><br /></td></tr>"; $i = 0; } ?>






<?php
$i = $i + 1;
$cont = $cont + 1;
}
else
{
?>

</tr>
</table>


<div style="page-break-after: always;">
  <h1><?php echo $text_invoice; ?></h1>
  <table class="store">
    <tr>
      
			<td><img src='https://www.capasparaiphone.com.br/loja/image/data/logo/logo-capasparaiphone.png' width='270' /><br /><br /><!--<?php echo $order['store_name']; ?><br />
			<?php echo $order['store_address']; ?><br />
			<?php echo $text_telephone; ?> <?php echo $order['store_telephone']; ?><br />
			<?php if ($order['store_fax']) { ?>
			<?php echo $text_fax; ?> <?php echo $order['store_fax']; ?><br />
			<?php } ?>-->
			<?php echo $order['store_email']; ?><br />
			<?php echo $order['store_url']; ?></td>
		  







      <td align="right" valign="top"><table>
          <tr>
            <td><b><?php echo $text_date_added; ?></b></td>
            <td><?php echo $order['date_added']; ?></td>
          </tr>
          <?php if ($order['invoice_no']) { ?>
          <tr>
            <td><b><?php echo $text_invoice_no; ?></b></td>
            <td><?php echo $order['invoice_no']; ?></td>
          </tr>
          <?php } ?>
          <tr>
            <td><b><?php echo $text_order_id; ?></b></td>
            <td><?php echo $order['order_id']; ?></td>
          </tr>
          <tr>
            <td><b><?php echo $text_payment_method; ?></b></td>
            <td><?php echo $order['payment_method']; ?></td>
          </tr>
          <?php if ($order['shipping_method']) { ?>
          <tr>
            <td><b><?php echo $text_shipping_method; ?></b></td>
            <td><?php echo $order['shipping_method']; ?></td>
          </tr>
          <?php } ?>
        </table></td>
    </tr>
  </table>
  <table class="address">
    <tr class="heading">
      <td width="50%"><b><?php echo $text_to; ?></b></td>
      <td width="50%"><b><?php echo $text_ship_to; ?></b></td>
    </tr>
    <tr>
      
			<td><?php echo uc_latin1($order['payment_address']); ?><br/>
		  
        
			<!-- <?php echo $order['email']; ?><br/> -->
		  
        
			<!-- <?php echo $order['telephone']; ?> -->
		  
        <?php if ($order['payment_company_id']) { ?>
        <br/>
        <br/>
        <?php echo $text_company_id; ?> <?php echo $order['payment_company_id']; ?>
        <?php } ?>
        <?php if ($order['payment_tax_id']) { ?>
        <br/>
        <?php echo $text_tax_id; ?> <?php echo $order['payment_tax_id']; ?>
        <?php } ?></td>
      
		    <td><?php echo uc_latin1($order['shipping_address_etiqueta']); ?></td>
		  
    </tr>
  </table>
  <table class="product">
    <tr class="heading">
      <td><b><?php echo $column_product; ?></b></td>
      <td><b><?php echo $column_model; ?></b></td>
      <td align="right"><b><?php echo $column_quantity; ?></b></td>
      <td align="right"><b><?php echo $column_price; ?></b></td>
      <td align="right"><b><?php echo $column_total; ?></b></td>
    </tr>
    <?php foreach ($order['product'] as $product) { ?>
    <tr>
      <td><?php echo $product['name']; ?>
        <?php foreach ($product['option'] as $option) { ?>
        <br />
        &nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
        <?php } ?></td>
      <td><?php echo $product['model']; ?></td>
      <td align="right"><?php echo $product['quantity']; ?></td>
      <td align="right"><?php echo $product['price']; ?></td>
      <td align="right"><?php echo $product['total']; ?></td>
    </tr>
    <?php } ?>
    <?php foreach ($order['voucher'] as $voucher) { ?>
    <tr>
      <td align="left"><?php echo $voucher['description']; ?></td>
      <td align="left"></td>
      <td align="right">1</td>
      <td align="right"><?php echo $voucher['amount']; ?></td>
      <td align="right"><?php echo $voucher['amount']; ?></td>
    </tr>
    <?php } ?>
    <?php foreach ($order['total'] as $total) { ?>
    <tr>
      <td align="right" colspan="4"><b><?php echo $total['title']; ?>:</b></td>
      <td align="right"><?php echo $total['text']; ?></td>
    </tr>
    <?php } ?>
  </table>
  <?php if ($order['comment']) { ?>
  <table class="comment">
    <tr class="heading">
      <td><b><?php echo $column_comment; ?></b></td>
    </tr>
    <tr>
      <td><?php echo $order['comment']; ?></td>
    </tr>
  </table>
  <?php } ?>
</div>
<?php } ?>
 </div>
<?php } ?> 
</html>