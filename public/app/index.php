<?php
ini_set("display_errors", 0);

include("config-modelos.php");

session_start();
/*
if (isset($_SESSION["userid"])) {
  $idcsession = $_SESSION["userid"];
  $idsession = $idcsession;
}
else {*/
  //Randomiza nome do arquivo
  $date1 = date_create();
  $timestamp1 = date_timestamp_get($date1);
  $ramdomico4 = rand(1000,9999);
  $idsession = $timestamp1."".$ramdomico4;
  $_SESSION["userid"] = $idsession;
  $idcsession = $idsession;
//}
?>

<html>

<head>
	<meta charset="utf-8" />
	<title>Capas Personalizadas</title>

	<!-- libs -->
	<link rel="stylesheet" href="lib/jquery-ui.css" />
	<script src="/app/js/1.7.2.jquery.min.js" type="text/javascript"></script>
	<script src="/app/js/1.8.jquery-ui.min.js" type="text/javascript"></script>


	<!-- capasparaiphone -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/acordion.js"></script>
	<script src="js/montacapa.js"></script>
	<script src="js/montapreview.js"></script>

	<!-- upload -->
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

	<!-- Ferramenta -->
	<script>
	function hiddeall() {
		document.getElementById("optionupload").style.display="none";
		document.getElementById("optionface").style.display="none";
		document.getElementById("optioninsta").style.display="none";
	}
	function showcomputador() {
		hiddeall();
   		document.getElementById("optionupload").style.display="block";
	}
	function showfacebook() {
		hiddeall();
   		document.getElementById("optionface").style.display="block";
   		getalbum();
	}
	function getalbum() {
		$(document).ready(function(){
	   	var response = '';
	   	$.ajax({ type: "GET",
	            url: "https://www.capasparaiphone.com.br/capasparaiphoneapp/1/index2.php",
	            async: false,
	            success : function(text)
	            {
	                response = text;
	            }
	   	});

		var myNode = document.getElementById("optionface");
		while (myNode.firstChild) {
		   myNode.removeChild(myNode.firstChild);
		}

	   	$('#optionface').prepend(response);
	   	});
	}
	function getphoto(albumid) {
		$(document).ready(function(){
	   	var response = '';
	   	$.ajax({ type: "GET",
	            url: "https://www.capasparaiphone.com.br/capasparaiphoneapp/2/index.php?idalbum="+albumid,
	            async: false,
	            success : function(text)
	            {
	                response = text;
	            }
	   	});

		var myNode = document.getElementById("preview");
		while (myNode.firstChild) {
		   myNode.removeChild(myNode.firstChild);
		}

	   	$('#preview').prepend(response);
	   	});
	}
	function showinstagram() {
		hiddeall();
   		document.getElementById("optioninsta").style.display="block";
   		getinstagram();
	}
	function getinstagram() {
	
		$(document).ready(function(){

	   	var response = '';
	   	$.ajax({ type: "GET",
	            url: "https://www.capasparaiphone.com.br/instagramcpiapp/instagram/home2.php",
	            async: false,
	            success : function(text)
	            {
	                response = text;
	            }
	   	});

	   	if (response.indexOf("Entrar") == -1 ) {
			var myNode = document.getElementById("preview");
			while (myNode.firstChild) {
			   myNode.removeChild(myNode.firstChild);
			}
	   		
		   	$('#preview').prepend(response);
		   	
	   	}
	   	else {
			var myNode = document.getElementById("optioninsta");
			while (myNode.firstChild) {
			   myNode.removeChild(myNode.firstChild);
			}

		   	$('#optioninsta').prepend(response);
		   	
	   	}

		});
	}


	
	</script>


</head>

<body>

	<div class="wrap-app">
		
		

		<div id="divcapinha" onmouseout="mostramascarasup()" style="width: 360px;
			height: 564px;
			float: right;
			margin-left: 10px;
			border: 1px solid #FFFFFF;
			border-radius: 5px;

			padding-bottom: 10px;
			margin-top: 2px;">




			&nbsp;
		</div>






		<div id="divlistitens" onmouseout="mostramascarasup()" style="width: 335px;
			height: 564px;
			float: left;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: 2px;">
			
			<h3 class="passall">
    			<div id="stepitemcirc1" class="c4ystepnumber" style="color: #FFFFFF; background-color: #aee5ff;">1</div>
  				<div id="stepitemtitle1" class="fontc4y2 c4ysteptitle  pass1i">MODELO DE SEU CELULAR</div>
  			</h3>

  			<h3 class="passall">
    			<div id="stepitemcirc2" class="c4ystepnumber" style="color: #FFFFFF; background-color: #DDDDDD;">2</div>
  				<div id="stepitemtitle2" class="fontc4y2 c4ysteptitle  pass2i">TIPO DE LAYOUT</div>
  			</h3>

  			<h3 class="passall">
    			<div id="stepitemcirc3" class="c4ystepnumber" style="color: #FFFFFF; background-color: #DDDDDD;">3</div>
  				<div id="stepitemtitle3" class="fontc4y2 c4ysteptitle  pass3i">SELECIONE SUAS FOTOS</div>
  			</h3>

  			<h3 class="passall">
    			<div id="stepitemcirc4" class="c4ystepnumber" style="color: #FFFFFF; background-color: #DDDDDD;">4</div>
  				<div id="stepitemtitle4" class="fontc4y2 c4ysteptitle  pass4i">FINALIZAR CONSTRUÇÃO</div>
  			</h3>

		</div>



		<div id="divcapinhapreview" style="width: 360px;
			height: 564px;
			float: right;
			margin-left: 10px;
			border: 1px solid #FFFFFF;
			border-radius: 5px;
			padding-bottom: 10px;
			margin-top: 2px;
			padding-left: 10px;
			display: none;">
			<iframe name="previewframe" id="previewframe" src=""  width="340" height="564" scrolling="no" frameborder="0"></iframe>
		</div>





		<div id="accordion" style="text-align: left; height: 615px; width: 400px; float: right;">
			<!-- passo 1 -->
			<h3 class="passall pass1">
  				<div class="fontc4y2 c4ysteptitle">SELECIONE O MODELO DE SEU CELULAR!</div>
  			</h3>

  			<div class="passall pass1">

  				<div>
  					Selecione seu modelo abaixo:<br />&nbsp;<br><center><select onChange="javascript:doModelo(this);" style="display: inline-block;
											height: 40px;
											width: 300px;
											line-height: 28px;
											border: 1px solid #aaa;
											padding: 4px;
											color: #555;
											border: 1px solid #000;
											font-size: 14px;
											color: #fff;
											background: #444;
											padding: 5px;">
						  <option value="0">-- Selecione --</option>
						  <option value="0">Iphone 4/4S</option>
						  <option value="1">Iphone 5/5S</option>
						  <option value="7">Iphone 5C</option>
						  <option value="2">Samsung Galaxy S3</option>
						  <option value="3">Samsung Galaxy S4</option>
						  <option value="4">Galaxy S5</option>
						  <option value="5">Samsung Galaxy S3 Mini</option>
						  <option value="6">Samsung Galaxy S4 Mini</option>
						</select></center>
				</div>

				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
						<div style="float: left; text-align: left">
							<input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="miphone3" value="4">
						</div>
			          	<div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
							<img style="width: 39px;" src="./img/iphone4.png" alt="">
			          	</div>
			          	<div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
								Galaxy S5
						</div>
				</div>

  				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
						<div style="float: left; text-align: left">
							<input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="miphone4" value="0">
						</div>
			          	<div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
							<img style="width: 39px;" src="./img/iphone4.png" alt="">
			          	</div>
			          	<div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
								Iphone4/4S
						</div>
				</div>

				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="miphone5" value="1">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 49px;" src="./img/iphone5.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Iphone5/5S
				        </div>
				</div>

				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="miphone5c" value="7">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 49px;" src="./img/iphone5.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Iphone5C
				        </div>
				</div>

				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxy3" value="2">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 45px;" src="./img/galaxys3.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Galaxy S3
				        </div>
				</div>

				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxy4" value="3">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 45px;" src="./img/galaxys4.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Galaxy S4
				        </div>
				</div>

				<div style="display: none; float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxy3m" value="5">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 45px;" src="./img/galaxys2.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Galaxy S3 Mini
				        </div>
				</div>

				<div style="display: none; float: left; text-align: left; width: 100px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxyn4m" value="6">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 45px;" src="./img/galaxynote2.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Galaxy S4 Mini
				        </div>
				</div>
			</div>











			<!-- passo 2 -->
			<h3 class="passall pass2">
  				<div class="fontc4y2 c4ysteptitle">ESCOLHA O TIPO DE LAYOUT!</div>
  			</h3>

  			<div class="passall pass2">

				<div style="float: left; margin-left: 20px;">
			      <p>
			        Selecione o layout de sua capinha: <br />&nbsp;<br />
			        
			        <input onChange="selecionalayout(this)" type="radio" name="layout" value="0" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-1.png" alt="">
			        
			        <input onChange="selecionalayout(this)" type="radio" name="layout" value="1" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-2.png" alt="">
			        
			        <input onChange="selecionalayout(this)" type="radio" name="layout" value="2" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-3.png" alt="">

			          <input onChange="selecionalayout(this)" type="radio" name="layout" value="3" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-4.png" alt="">
			      </p>
			    </div>

			</div>





			<!-- passo 3 -->
			<h3 class="passall pass3">
  				<div class="fontc4y2 c4ysteptitle">OBTENHA SUAS FOTOS!</div>
  			</h3>

  			<div class="passall pass3" style="overflow: hidden;">

				<div style="float: left; margin-left: 20px; width: 360px; background-image: url('/app/img/setaarraste.png'); background-repeat: no-repeat; background-size: 110px; background-position-x: 245px;">
					<input onchange="showcomputador()" type="radio" name="modelo" id="ishowcomp" value="" style="display: inline; float: none;position: relative; top: -23px;">
			          <img style="margin-left: 2px; margin-right: 15px; width: 35px;" src="./img/computador.png" alt="">
			        
			        <input onchange="showfacebook()" type="radio" name="modelo" id="ishowface" value="" style="display: inline; float: none;position: relative; top: -23px;">
			          <img style="margin-left: 2px; margin-right: 15px; width: 35px;" src="./img/facebook.png" alt="">
			        
			        <input onchange="showinstagram()" type="radio" name="modelo" id="ishowinst" value="" style="display: inline; float: none;position: relative; top: -23px;">
			          <img style="margin-left: 2px; margin-right: 15px; width: 35px;" src="./img/instagram.png" alt="">
				</div>

				<div style="float: left; width: 360px;">


					<!-- Opção computador -->
					<div id="optionupload" class="fontc4y1" style="float: left; width: 320px; margin-left: 20px; margin-top: 0px; display: none;">
						<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
						<div id='imageloadstatus' style='display:none'>
							<img src="loader.gif" alt="Uploading...."/>
						</div>
						<div id='imageloadbutton' style="background-image: url('/app/img/button-upload.png'); background-repeat: no-repeat;border-radius: 5px; width: 123px; height: 34px;cursor: pointer;">
							<input type="file" name="photoimg" id="photoimg" style="-moz-opacity:0 ; filter:alpha(opacity: 0); opacity: 0; z-index: 2;width: 123px; height: 34px;cursor: pointer;" />
						</div>
						</form>
					</div>


					<!-- Opção Facebook -->
					<div id="optionface" class="fontc4y1" style="float: left; width: 320px; margin-left: 20px; margin-top: 0px; display: none;">
						
					</div>


					<!-- Opção Instagram -->
					<div id="optioninsta" class="fontc4y1" style="float: left; width: 320px; margin-left: 20px; margin-top: 0px; display: none;">
						
					</div>


					<!-- Local imagens -->
					<div style="height: 180px; float: left; width: 385px; overflow-x: hidden; margin-top: 10px;">
						<div id='preview'>
						</div>
					</div>


				</div>

			</div>





			<!-- passo 4 -->
			<h3 class="passall pass4">
  				<div class="fontc4y2 c4ysteptitle">CONSTRUÇÃO FINALIZADA!</div>
  			</h3>

  			<div class="passall pass4">

				<div class="fontc4y1 c4ysteptext">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos
				</div>
		</div>






		

		<div id="ircheckout1"  style="width: 350px;
			float: right;
			margin-left: 10px;
			border: 1px solid #FFFFFF;
			border-radius: 5px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: 2px;
			padding-left: 10px;
			padding-right: 10px;
			display: none;
			text-align: right;
			font-size: 11px;">
			
			<a href="#"><img border="0" src="img/comprar2.png" onclick="comprar()" style="margin-top: 10px;"></a>
		</div>

		<div id="ircheckout2"  style="width: 360px;
			float: right;
			margin-right: 10px;
			border: 1px solid #FFFFFF;
			border-radius: 5px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: 2px;
			padding-left: 10px;
			padding-right: 10px;
			display: none;
			text-align: right;
			font-size: 11px;">
			
			<div style="margin: 0px; padding: 0px; float: left; display: none;">
				<a href="/app"><div style="color: #fff;
display: inline-block;
padding: 4px 10px;
white-space: nowrap;
font-size: 12px;
line-height: 19px;
text-transform: uppercase;
font-weight: normal;
display: inline-block;
text-decoration: none;
cursor: pointer;
background: url('/app/img/button.png') repeat-x left top;
font-size: 12px;
line-height: 18px;
border-radius: 5px;
background-position-y: -28;
margin-top: 23px;">
					
						<a href="/app" id="button-confirmorder" class="button" style="white-space: nowrap;
color: #fff;
font-size: 12px;
line-height: 19px;
text-transform: uppercase;
font-weight: normal;
display: inline-block;
text-decoration: none;
cursor: pointer;"><span>Reiniciar</span></a>
				</div></a>
			</div>

			<div style="margin: 0px; padding: 0px; float: right;">
				<a href="#" onclick="finalizar()">
					<img border="0" src="img/proximo2.png" style="margin-top: 5px;">
				</a>
			</div>
		</div>


	</div>

<script>
	MontaCapa(0,0);
</script>

<input type="hidden" name="modelodocelular" id="modelodocelular" value="">
<input type="hidden" name="layoutdacapinha" id="layoutdacapinha" value="">
<input type="hidden" name="filtrocapinha" id="filtrocapinha" value="">
<input type="hidden" name="idsession" id="idsession" value="<?php echo $idcsession; ?>">
<input type="hidden" name="rotdivl1" id="rotdivl1" value="0">
<input type="hidden" name="rotdivl2a" id="rotdivl2a" value="0">
<input type="hidden" name="rotdivl2b" id="rotdivl2b" value="0">


<style type="text/css">
	.mascarasuperior { width: <?php echo $larguramaior+10; ?>px; height: <?php echo $alturamaior+10; ?>px; }
</style>

<div class="mascarasuperior" id="mascarasuperior" onmouseover="escondemascarasup()">
	&nbsp;
</div>

</body>

</html>
