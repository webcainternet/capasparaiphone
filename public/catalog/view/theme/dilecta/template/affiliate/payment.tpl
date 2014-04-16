<?php echo $header; ?>
<?php $grid = 12; if($column_left != '') { $grid = $grid-3; } if($column_right != '') { $grid = $grid-3; } ?>

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
		
		<?php if($column_left != '') { echo '<div class="grid-3 float-left">'.$column_left.'</div>'; } ?>
		
		<div class="grid-<?php echo $grid; ?> float-left" id="content_content" style="padding-top:30px !important">


  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <h2><?php echo $text_your_payment; ?></h2>
    <div class="content">
      <table class="form">
        <tbody>
          <tr>
            <td><?php echo $entry_tax; ?></td>
            <td><input type="text" name="tax" value="<?php echo $tax; ?>" /></td>
          </tr>
          <tr>
            <td><?php echo $entry_payment; ?></td>
            <td><?php if ($payment == 'cheque') { ?>
              <input type="radio" name="payment" value="cheque" id="cheque" checked="checked" />
              <?php } else { ?>
              <input type="radio" name="payment" value="cheque" id="cheque" />
              <?php } ?>
              <label for="cheque"><?php echo $text_cheque; ?></label>
              <?php if ($payment == 'paypal') { ?>
              <input type="radio" name="payment" value="paypal" id="paypal" checked="checked" />
              <?php } else { ?>
              <input type="radio" name="payment" value="paypal" id="paypal" />
              <?php } ?>
              <label for="paypal"><?php echo $text_paypal; ?></label>
              <?php if ($payment == 'bank') { ?>
              <input type="radio" name="payment" value="bank" id="bank" checked="checked" />
              <?php } else { ?>
              <input type="radio" name="payment" value="bank" id="bank" />
              <?php } ?>
              <label for="bank"><?php echo $text_bank; ?></label></td>
          </tr>
        </tbody>
        <tbody id="payment-cheque" class="payment">
          <tr>
            <td><?php echo $entry_cheque; ?></td>
            <td><input type="text" name="cheque" value="<?php echo $cheque; ?>" /></td>
          </tr>
        </tbody>
        <tbody class="payment" id="payment-paypal">
          <tr>
            <td><?php echo $entry_paypal; ?></td>
            <td><input type="text" name="paypal" value="<?php echo $paypal; ?>" /></td>
          </tr>
        </tbody>
        <tbody id="payment-bank" class="payment">
          <tr>
            <td><?php echo $entry_bank_name; ?></td>
            <td><input type="text" name="bank_name" value="<?php echo $bank_name; ?>" /></td>
          </tr>
          <tr>
            <td><?php echo $entry_bank_branch_number; ?></td>
            <td><input type="text" name="bank_branch_number" value="<?php echo $bank_branch_number; ?>" /></td>
          </tr>
          <tr>
            <td><?php echo $entry_bank_swift_code; ?></td>
            <td><input type="text" name="bank_swift_code" value="<?php echo $bank_swift_code; ?>" /></td>
          </tr>
          <tr>
            <td><?php echo $entry_bank_account_name; ?></td>
            <td><input type="text" name="bank_account_name" value="<?php echo $bank_account_name; ?>" /></td>
          </tr>
          <tr>
            <td><?php echo $entry_bank_account_number; ?></td>
            <td><input type="text" name="bank_account_number" value="<?php echo $bank_account_number; ?>" /></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="buttons">
      <div class="left"><a href="<?php echo $back; ?>" class="button"><?php echo $button_back; ?></a></div>
      <div class="right"><input type="submit" value="<?php echo $button_continue; ?>" class="button" /></div>
    </div>
  </form>
<script type="text/javascript"><!--
$('input[name=\'payment\']').bind('change', function() {
	$('.payment').hide();
	
	$('#payment-' + this.value).show();
});

$('input[name=\'payment\']:checked').trigger('change');
//--></script> 
				
		</div>
		
		<!-- End Column center -->
	  
		<?php if($column_right != '') { echo '<div class="grid-3 float-left">'.$column_right.'</div>'; } ?>

	  <div class="clears"></div>
	  
	  <?php echo $content_bottom; ?>
  
  </section>
  
  <!-- End Content -->

<?php echo $footer; ?>