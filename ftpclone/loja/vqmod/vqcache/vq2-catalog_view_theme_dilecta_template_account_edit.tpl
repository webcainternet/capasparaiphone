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

		<?php if ($error_warning) { ?>
		<div class="warning"><?php echo $error_warning; ?></div>
		<?php } ?>
		
		<?php echo $content_top; ?>
		
		<?php if($column_left != '') { echo '<div class="grid-3 float-left">'.$column_left.'</div>'; } ?>
		
		<div class="grid-<?php echo $grid; ?> float-left" id="content_content" style="padding-top:30px !important">



  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <h2><?php echo $text_your_details; ?></h2>
    <div class="content">
      
      <table class="form">
	  
        <tr>
          <td><span class="required">*</span> <?php echo $entry_firstname; ?></td>
          <td><input type="text" name="firstname" value="<?php echo $firstname; ?>" style="width:350px;" />
            <?php if ($error_firstname) { ?>
            <span class="error"><?php echo $error_firstname; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> <?php echo $entry_lastname; ?></td>
          <td><input type="text" name="lastname" value="<?php echo $lastname; ?>" style="width:350px;" />
            <?php if ($error_lastname) { ?>
            <span class="error"><?php echo $error_lastname; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> <?php echo $entry_email; ?></td>
          <td><input type="text" name="email" value="<?php echo $email; ?>" style="width:350px;" />
            <?php if ($error_email) { ?>
            <span class="error"><?php echo $error_email; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> <?php echo $entry_telephone; ?></td>
          <td><input type="text" name="telephone" value="<?php echo $telephone; ?>" />
            <?php if ($error_telephone) { ?>
            <span class="error"><?php echo $error_telephone; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> <?php echo $entry_fax; ?></td>
          <td><input type="text" name="fax" value="<?php echo $fax; ?>" />
			<?php if ($error_fax) { ?>
            <span class="error"><?php echo $error_fax; ?></span>
            <?php } ?></td>
        </tr>
		<?php if ($this->config->get('fields_register_brazil_status')){ ?>
        <tr>
          <td><span class="required">*</span> <?php echo $entry_cpf; ?></td>
          <td><input type="text" name="cpf" value="<?php echo $cpf; ?>" readonly="readonly"  />
			<?php if ($error_cpf) { ?>
            <span class="error"><?php echo $error_cpf; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
          <td><span class="required">*</span> <?php echo $entry_rg; ?></td>
          <td><input type="text" name="rg" value="<?php echo $rg; ?>" readonly="readonly" />
			<?php if ($error_rg) { ?>
            <span class="error"><?php echo $error_rg; ?></span>
            <?php } ?></td>
        </tr>
        <tr>
		<?php 
		$dataparts = explode("-",$data_nascimento);
		if (sizeof($dataparts) != '3'){
			$data = $data_nascimento;
		}else{
			$data = $dataparts[2]."/".$dataparts[1]."/".$dataparts[0]; 
		}
		$data = ($data != '00/00/0000') ? $data : '';
		?>		
          <td><span class="required">*</span> <?php echo $entry_data_nascimento; ?></td>
          <td><input type="text" name="data_nascimento" value="<?php echo $data; ?>" />
			<?php if ($error_data_nascimento) { ?>
            <span class="error"><?php echo $error_data_nascimento; ?></span>
            <?php } ?></td>
        </tr>
		<tr>
		  <td><span class="required">*</span> <?php echo $entry_sexo; ?></td>
		  <td>
			<?php if ($sexo == 'm'){ ?>
			<input type="radio" name="sexo" checked value="m">Masculino
			<input type="radio" name="sexo" value="f">Feminino
			<?php }else if($sexo == 'f'){ ?>
			<input type="radio" name="sexo" value="m">Masculino
			<input type="radio" name="sexo" checked value="f">Feminino
			<?php }else{ ?>
			<input type="radio" name="sexo" checked value="m">Masculino
			<input type="radio" name="sexo" value="f">Feminino
			<?php } ?>
		  </td>
		</tr>
		
		<?php } ?>
      </table>
				

































    </div>
    <div class="buttons">
      <div class="left"><a href="<?php echo $back; ?>" class="button"><?php echo $button_back; ?></a></div>
      <div class="right">
        <input type="submit" value="<?php echo $button_continue; ?>" class="button" />
      </div>
    </div>
  </form>
				
		</div>
		
		<!-- End Column center -->
	  
		<?php if($column_right != '') { echo '<div class="grid-3 float-left">'.$column_right.'</div>'; } ?>

	  <div class="clears"></div>
	  
	  <?php echo $content_bottom; ?>
  
  </section>
  
  <!-- End Content -->

<?php echo $footer; ?>
