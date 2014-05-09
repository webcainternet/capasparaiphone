<?php
session_start();

if (isset($_SESSION["userid"])) {
  //echo "Logado como:" . $_SESSION["userid"];
  $idcsession = $_SESSION["userid"];
}
else {
  //Randomiza nome do arquivo
  $date1 = date_create();
  $timestamp1 = date_timestamp_get($date1);
  $ramdomico4 = rand(1000,9999);
  $idsession = $timestamp1."".$ramdomico4;
  $_SESSION["userid"] = $idsession;

  header('location: /capasparaiphone/0/');
  //echo "Nao logado:" . $_SESSION["userid"];
}

    $gmodelo = $_GET["m"];
    $glayout = $_GET["l"];
?>

<?php include 'var.tamanhos.php'; ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />

<style type="text/css">
@font-face {
  font-family: "c4y1";
  src: url(/catalog/view/theme/theme254/stylesheet/alrightsans-regularitalic-v3.ttf);
}
@font-face {
  font-family: "c4y2";
  src: url(/catalog/view/theme/theme254/stylesheet/alrightsans-bolditalic-v3.ttf);
}
.fontc4y1 { 
  font-family: "c4y1", Arial, Verdana;
  font-size: 12px;
}

.fontc4y2 { 
  font-family: "c4y2", Arial, Verdana;
  font-size: 14px;
  color: #6aa11a;
}
body, p {
font-family: "c4y1", Arial, Verdana;
margin:0px; padding:0px;
background-color: transparent;
}

</style>

  <?php include 'ddx.jscript.php'; ?>

</head>

<script type="text/javascript" src="/capasparaiphone/4/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/capasparaiphone/4/scripts/jquery.wallform.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').die('click').live('change', function()			{ 
			           //$("#preview").html('');
			    
				$("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('v');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
					console.log('z');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
							console.log('d');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
					
		
			});
        }); 
</script>

<style>

body
{
margin: 0px; padding: 0px;font-family: Arial, Helvetica, sans-serif; color: #222222;line-height: 1.3;font-size: 12px; 
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>

<body>


<!-- DIREITA -->
<div style="float: left;width: 347px;height: 550px;">

<div style="height: 85px;float: left; width: 320px; overflow-x: hidden;">
  
    <div style="float: left;
                  width: 15px;
                  height: 20px;
                  background-color: #6aa11a;
                  border-radius: 20px;
                  padding: 5px;
                  padding-left: 10px;
                  padding-top: 5px;
                  color: #FFFFFF;
                  font-size: 14px;
                  font-weight: bold;">3</div>

      <div class="fontc4y2" style="float: left;
                  width: 260px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 13px;
                  margin-top: 3px;
                  margin-left: 2px;
                  font-weight: bold;">SELECIONE SUAS FOTOS!</div>
      <div class="fontc4y1" style="float: left; width: 295px; margin-top: 20px;">
        AJUDA: Clique no botão abaixo para selecionar as fotos de seu computador!
      </div>

</div>



<div class="fontc4y1" style="float: left; width: 320px; margin-left: 20px; margin-top: 0px;">
	<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
	<div id='imageloadstatus' style='display:none'>
		<img src="loader.gif" alt="Uploading...."/>
	</div>
	<div id='imageloadbutton'>
		<input type="file" name="photoimg" id="photoimg" />
	</div>
	</form>
</div>


<div style="height: 475px; float: left; width: 320px; overflow-x: hidden; margin-top: 10px;">
	<div id='preview'>
	</div>
</div>

</div>








<!-- ESQUERDA -->



<!-- ddx.layoyt -->
    <?php include 'ddx.layout.php'; ?>
<!-- ddx.layout fim -->






</body>
</html>