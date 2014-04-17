<?php
ini_set("display_errors", 0);

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
	            url: "http://www.capasparaiphone.com.br/capasparaiphoneapp/1/index2.php",
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
	            url: "http://www.capasparaiphone.com.br/capasparaiphoneapp/2/index.php?idalbum="+albumid,
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
	            url: "http://www.capasparaiphone.com.br/instagramcpiapp/instagram/home2.php",
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
			padding-top: 10px;
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
    			<div id="stepitemcirc1" class="c4ystepnumber" style="color: #FFFFFF; background-color: #53ccdd;">1</div>
  				<div id="stepitemtitle1" class="fontc4y2 c4ysteptitle  pass1i">SELECIONE O MODELO DE SEU CELULAR!</div>
  			</h3>

  			<h3 class="passall">
    			<div id="stepitemcirc2" class="c4ystepnumber" style="color: #FFFFFF; background-color: #DDDDDD;">2</div>
  				<div id="stepitemtitle2" class="fontc4y2 c4ysteptitle  pass2i">ESCOLHA O TIPO DE LAYOUT!</div>
  			</h3>

  			<h3 class="passall">
    			<div id="stepitemcirc3" class="c4ystepnumber" style="color: #FFFFFF; background-color: #DDDDDD;">3</div>
  				<div id="stepitemtitle3" class="fontc4y2 c4ysteptitle  pass3i">SELECIONE SUAS FOTOS!</div>
  			</h3>

  			<h3 class="passall">
    			<div id="stepitemcirc4" class="c4ystepnumber" style="color: #FFFFFF; background-color: #DDDDDD;">4</div>
  				<div id="stepitemtitle4" class="fontc4y2 c4ysteptitle  pass4i">APLICAR FILTRO DE CORES!</div>
  			</h3>

		</div>



		<div id="divcapinhapreview" style="width: 360px;
			height: 564px;
			float: right;
			margin-left: 10px;
			border: 1px solid #aaaaaa;
			border-radius: 5px;
			padding-top: 10px;
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

  				
				<div class="fontc4y1 c4ysteptext">AJUDA: Temos diversas opções como Iphone4/4S, Iphone5/5S, Galaxy S2, Galaxy S3, Galaxy S4, Samsung Note 2 e em breve outros modelos!</div>

				<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
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

				<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
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

				<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
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

				<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
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

				<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxy2" value="4">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 45px;" src="./img/galaxys2.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Galaxy S2
				        </div>
				</div>

				<div style="float: left; text-align: left; width: 100px; margin-bottom: 20px; margin-left: 15px;">
				        <div style="float: left; text-align: left">
				                <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxyn2" value="5">
				        </div>
				        <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
				                <img style="width: 45px;" src="./img/galaxynote2.png" alt="">
				        </div>
				        <div class="fontc4y1" style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
				                Galaxy Note 2
				        </div>
				</div>
			</div>











			<!-- passo 2 -->
			<h3 class="passall pass2">
  				<div class="fontc4y2 c4ysteptitle">ESCOLHA O TIPO DE LAYOUT!</div>
  			</h3>

  			<div class="passall pass2">

				<div class="fontc4y1 c4ysteptext">AJUDA: De acordo com o layout que for selecionado, você deverá escolher um determinado numero de fotos!<br />&nbsp;<br />Layout 1: 1 foto; <br />Layout 2: 2 fotos;<br />Layout 3: 15 fotos</div>

				<div style="float: left; margin-left: 20px;">
			      <p>
			        Selecione o layout de sua capinha: <br />&nbsp;<br />
			        
			        <input onChange="selecionalayout(this)" type="radio" name="layout" value="0" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-1.png" alt="">
			        
			        <input onChange="selecionalayout(this)" type="radio" name="layout" value="1" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-2.png" alt="">
			        
			        <input onChange="selecionalayout(this)" type="radio" name="layout" value="2" style="display: inline; float: none;position: relative; top: -50px;">
			          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-3.png" alt="">
			      </p>
			    </div>

			</div>





			<!-- passo 3 -->
			<h3 class="passall pass3">
  				<div class="fontc4y2 c4ysteptitle">SELECIONE SUAS FOTOS!</div>
  			</h3>

  			<div class="passall pass3">

				<div class="fontc4y1 c4ysteptext">AJUDA: Agora escolha de onde deseja buscar suas fotos: De seu computador, Facebook ou Instagram.</div>

				<div style="float: left; margin-left: 20px; width: 360px; background-image: url('/app/img/setaarraste.png'); background-repeat: no-repeat; background-size: 110; background-position-x: 245;">
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
					<div style="height: 200px; float: left; width: 320px; overflow-x: hidden; margin-top: 10px;">
						<div id='preview'>
						</div>
					</div>


				</div>

			</div>





			<!-- passo 4 -->
			<h3 class="passall pass4">
  				<div class="fontc4y2 c4ysteptitle">APLICAR FILTRO DE CORES!</div>
  			</h3>

  			<div class="passall pass4">

				<div class="fontc4y1 c4ysteptext">AJUDA: Clique no filtro para selecionar o efeito desejado!<br />&nbsp;<br />OBS: Para obter qualidade na impressão é importante o upload de imagens em alta qualidade. Recomendamos fotos com pelo menos 1900x1200 pixels e 300dpi.</div>

				<div style="float: left; margin-left: 20px; width: 250px;">
					<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
					        <div style="float: left; text-align: left">
					                <input onchange="selecionarfiltro('0')" onclick="selecionarfiltro('0')" type="radio" name="filtro" id="fsepia" value="-sp.png">
					        </div>
					        <div style="float: left; text-align: left;padding-left: 5px; height: 80px;">
					                <img src="img/pic-n.png" style="width: 65px;border:" alt="">
					        </div>
					</div>

					<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
					        <div style="float: left; text-align: left">
					                <input onchange="selecionarfiltro('2')" onclick="selecionarfiltro('2')" type="radio" name="filtro" id="fsepia" value="-sp.png">
					        </div>
					        <div style="float: left; text-align: left;padding-left: 5px; height: 80px;">
					                <img src="img/pic-s.png" style="width: 65px;border:" alt="">
					        </div>
					</div>

					<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
					        <div style="float: left; text-align: left">
					                <input onchange="selecionarfiltro('1')" onclick="selecionarfiltro('1')" type="radio" name="filtro" id="fsepia" value="-sp.png">
					        </div>
					        <div style="float: left; text-align: left;padding-left: 5px; height: 80px;">
					                <img src="img/pic-p.png" style="width: 65px;border:" alt="">
					        </div>
					</div>

					<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
					        <div style="float: left; text-align: left">
					                <input onchange="selecionarfiltro('3')" onclick="selecionarfiltro('3')" type="radio" name="filtro" id="fsepia" value="-sp.png">
					        </div>
					        <div style="float: left; text-align: left;padding-left: 5px; height: 80px;">
					                <img src="img/pic-c.png" style="width: 65px;border:" alt="">
					        </div>
					</div>
				</div>

			</div>
		</div>






		

		<div id="ircheckout1"  style="width: 350px;
			float: right;
			margin-left: 10px;
			border: 1px solid #aaaaaa;
			border-radius: 5px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: 2px;
			padding-left: 10px;
			padding-right: 10px;
			display: none;
			text-align: right;
			font-size: 11px;">
			<a href="#" onclick="VoltarEdicao()" style="color: #303030;">Voltar para a edição da capinha</a>
			<img src="img/price.png" style="margin-top: 5px;">
			<a href="#"><img border="0" src="img/comprar.png" onclick="comprar()" style="margin-top: 10px;"></a>
		</div>

		<div id="ircheckout2"  style="width: 360px;
			float: right;
			margin-right: 10px;
			border: 1px solid #53ccdd;
			border-radius: 5px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: 2px;
			padding-left: 10px;
			padding-right: 10px;
			display: block;
			text-align: right;
			font-size: 11px;">
			
			<div style="margin: 0px; padding: 0px; float: left;">
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
cursor: pointer;"><span>Reiniciar edição</span></a>
				</div></a>
			</div>

			<div style="margin: 0px; padding: 0px; float: right;">
				<a href="#" onclick="finalizar()">
					<img border="0" src="img/proximo.png" style="margin-top: 5px;">
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



<div class="mascarasuperior" id="mascarasuperior" onmouseover="escondemascarasup()">
	&nbsp;
</div>

</body>

</html>
