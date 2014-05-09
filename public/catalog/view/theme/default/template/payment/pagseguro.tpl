<?php if ($text_information) { ?>
<div class="information"><?php echo $text_information; ?></div>
<?php } ?>
<div class="buttons">
  <div class="right"><a id="button-confirm" class="button"><span><?php echo $button_confirm; ?></span></a></div>   
</div>
<script type="text/javascript"><!--
$('#button-confirm').bind('click', function() {
	$.ajax({
		type: 'GET',
		url: 'index.php?route=payment/pagseguro/confirm',
		beforeSend: function() {
			$('#button-confirm').attr('disabled', true);
			
			$('#payment').before('<div class="attention"><img src="catalog/view/theme/default/image/loading.gif" alt="" /> <?php echo $text_wait; ?></div>');
		},
		success: function() {
			//	isOpenLightbox PagSeguroLightbox('<?php echo substr($url,59); ?>'); 
			PagSeguroLightbox({ 
			 code: '<?php echo substr($url,59); ?>'
			 }, { 
			 success : function(transactionCode) { 
			 	 location.href='<?php echo $this->url->link('checkout/success'); ?>';
			 }, 
			 abort : function() { 
			 alert("Pagamento incompleto!, efetue o Pedido Novamente e conclua o Pagamento."); 
			 } 
			 }); 
			if (!PagSeguroLightbox){ 
			 location.href='<?php echo $url; ?>';
			} 
		}
	});
});
//--></script>