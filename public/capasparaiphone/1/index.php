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
}

</style>

  <link rel="stylesheet" href="../0/jquery-ui.css" />
  <script src="../0/jquery-1.9.1.js"></script>
  <script src="../0/jquery-ui.js"></script>
  <link rel="stylesheet" href="../0/style.css" />
 
	<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
	<script src="dropzone.min.js"></script>>
</head>
 
<body style="margin: 0px; padding: 0px;font-family: Arial, Helvetica, sans-serif; color: #222222;line-height: 1.3;font-size: 12px; ">
<div style="float: left; width: 350px; height: 550px;">
	<form action="upload.php" class="dropzone">
	</form> 
</div>


<div id="p1-dvfoto-img" style="float: left; width: 348px; border-left: solid 1px #CCC; height: 540px; text-align: left; background-repeat: no-repeat; background-position: 15px 10px;">
      <div style="float: left;
                  width: 15px;
                  height: 20px;
                  margin-left: 20px;
                  margin-top: 20px;
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
                  margin-left: 10px;
                  margin-top: 19px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 14px;
                  font-weight: bold;">
<?php
if ($_GET["l"] == "0") { echo "SELECIONE AO MENOS 1 IMAGEM!"; }
if ($_GET["l"] == "1") { echo "SELECIONE AO MENOS 2 IMAGENS!"; }
if ($_GET["l"] == "2") { echo "SELECIONE AO MENOS 15 IMAGENS!"; }
?>
	</div>
      <div class="fontc4y1" style="float: left; width: 320px; margin-left: 20px; margin-top: 20px;">
        AJUDA: Clique no quadrado ao lado para selecionar as fotos de seu computador. Você pode clicar quantas vezes quiser para adicionar mais fotos.
	<br /><br />
	OBS: Para obter qualidade na impressão é importante o upload de imagens em alta qualidade. Recomendamos fotos com pelo menos 1900x1200 pixels e 300dpi.
      </div>

	<div style="text-align: left; float: right;">
		<input style="margin-top: 20px;" type="submit" onclick="window.location='http://capasparaiphone.com.br/capasparaiphone/2/?m=<?php echo $_GET["m"]; ?>&l=<?php echo $_GET["l"]; ?>';" value="Terminei, próximo passo!">
	</div>

    </div>



</body>
 
</html>

