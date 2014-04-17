<?php
session_start();

if (isset($_SESSION["userid"])) {
  $idcsession = $_SESSION["userid"];
}
else {
  //Randomiza nome do arquivo
  $date1 = date_create();
  $timestamp1 = date_timestamp_get($date1);
  $ramdomico4 = rand(1000,9999);
  $idsession = $timestamp1."".$ramdomico4;
  $_SESSION["userid"] = $idsession;

  //echo "Nao logado:" . $_SESSION["userid"];
}

    $idcsession = $idcsession;
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

  <link rel="stylesheet" href="../0/jquery-ui.css" />
  <script src="../0/jquery-1.9.1.js"></script>
  <script src="../0/jquery-ui.js"></script>
  <link rel="stylesheet" href="../0/style.css" />

  <?php include 'ddx.jscript.php'; ?>
</head>

<body style="margin: 0px; padding: 0px;font-family: Arial, Helvetica, sans-serif; color: #222222;line-height: 1.3;font-size: 12px; ">

<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)"></div>



<div style="height: 475px; float: left; width: 320px; overflow-x: hidden; border-bottom: solid 1px #CCC;">

  <div style="height: 95px; float: left; width: 320px; overflow-x: hidden;">
  
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
                  font-weight: bold;">?</div>

      <div class="fontc4y2" style="float: left;
                  width: 260px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 13px;
                  margin-top: 3px;
                  margin-left: 2px;
                  font-weight: bold;">ARRASTE AS FOTOS ESCOLHIDAS!</div>
      <div class="fontc4y1" style="float: left; width: 295px; margin-top: 20px;">
        AJUDA: Arraste a foto abaixo para a capinha ao lado na posição em que será impressa!
      </div>

  </div>



<?php
    $ic = 0;
    $path    = '/Users/fernandomendes/gitproj/capasparaiphone/public/capasparaiphone/1/uploads';
    if ($handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") { 
		$ic++; ?>
		<div id="divdrag<?php echo $ic; ?>" style="background-color: #FFFFFF; width: 50px; float: left; overflow: hidden; height: 50px;

background: rgba(255,255,255,0.8);
position: relative;
display: inline-block;
margin: 5px;
vertical-align: top;
border: 1px solid #acacac;
padding: 6px 6px 6px 6px;
-webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
font-size: 14px;
">
			<img id="drag<?php echo $ic; ?>" src="http://capasparaiphone.webca.com.br/capasparaiphone/1/uploads/<?php echo "$entry";?>" draggable="true"
			ondragstart="drag(event)" style="max-width:100%; max-height:100%;">
		</div>

            <?php }
        }
        closedir($handle);
   }
?>

&nbsp;
</div>








<!-- ddx.layoyt -->
    <?php include 'ddx.layout.php'; ?>
<!-- ddx.layout fim -->




</body>
</html>
