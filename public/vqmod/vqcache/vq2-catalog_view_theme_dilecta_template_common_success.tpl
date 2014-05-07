<?php echo $header; ?>

	<!-- Page Title -->
	
	<section id="page-title">
	
		<div class="set-size-grid">
			
			<?php foreach ($breadcrumbs as $breadcrumb) { ?>
			<?php if($breadcrumb['separator'] != '') { echo '/'; } ?> <a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
			<?php } ?>
			<h2><?php echo $heading_title; ?></h2>
		
		</div>
	
	</section>
	
	<!-- End Page Title -->
	
	<!-- Content -->
	
	<section id="content" class="set-size clearfix">

		<?php echo $content_top; ?>
		
		
		<div class="grid-12 float-left" id="content_content" style="padding-top:30px !important">


  <?php echo $text_message; ?>
  <div class="buttons">
    <div class="right"><a href="<?php echo $continue; ?>" class="button"><?php echo $button_continue; ?></a></div>
  </div>
				
		</div>

	  <div class="clears"></div>
	  
	  <?php echo $content_bottom; ?>
  
  </section>
  
  <!-- End Content -->


				<?php if (isset($ecommerce_tracking_status)) { ?>
					<?php if ($ecommerce_tracking_status && $order && $products) { ?>
						<?php echo $start_google_code; ?>

						_gaq.push(['_set', 'currencyCode', '<?php echo $order['currency_code']; ?>']);
						_gaq.push(['_addTrans',
							"<?php echo $order['order_id']; ?>",
							"<?php echo $order['store_name']; ?>",
							"<?php echo $order['order_total']; ?>",
							"<?php echo $order['order_tax']; ?>",
							"<?php echo $order['order_shipping']; ?>",
							"<?php echo $order['payment_city']; ?>",
							"<?php echo $order['payment_zone']; ?>",
							"<?php echo $order['payment_country']; ?>"
						]);

						<?php foreach($products as $product) { ?>
						_gaq.push(['_addItem',
							"<?php echo $product['order_id']; ?>",
							"<?php echo ($product['sku'] ? $product['sku'] : $product['product_id']); ?>",
							"<?php echo $product['name']; ?>",
							"<?php echo $product['category']; ?>",
							"<?php echo $product['price']; ?>",
							"<?php echo $product['quantity']; ?>"
						]);
						<?php } ?>

						_gaq.push(['_trackTrans']);

						<?php echo $end_google_code; ?>
					<?php } else { ?>
						<?php echo $google_analytics; ?>
					<?php } ?>
				<?php } ?>
			
<?php echo $footer; ?>
