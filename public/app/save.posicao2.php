<?php
ini_set("memory_limit","128M");

  $idcsession = $_GET["idcsession"];

    include '../config.php';

    $gidcsession = $idcsession;
    $gmodelo = $_GET["modelo"];
    $glayout = $_GET["layout"];
    $gposicao = $_GET["posicao"];
    $gimagem = $_GET["imagem"];
    $qnheight = $_GET["nheight"];
    $qnwidth = $_GET["nwidth"];
    $qnleft = $_GET["nleft"];
    $qntop = $_GET["ntop"];


	//Corrigir problema SSL
	$gimagem = str_replace('https://www.capasparaiphone.com.br','http://www.capasparaiphone.com.br', $gimagem);
	$gimagem = str_replace('https://capasparaiphone.com.br','http://capasparaiphone.com.br', $gimagem);

        //Recebe imagem do cliente
        $clienteimagem = $gimagem;

        //Randomiza nome do arquivo
        $idsession = $idcsession;
        $date1 = date_create();
        $timestamp1 = date_timestamp_get($date1);
        $ramdomico4 = rand(1000,9999);
        $novoarq = "imagesuso/img-".$idsession."-".$timestamp1."-".$ramdomico4;

        //Faz download da imagem
        function GetImageFromUrl($link)
        {
                $ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 0);
                curl_setopt($ch,CURLOPT_URL,$link);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $result=curl_exec($ch);
                curl_close($ch);
                return $result;
        }
        $sourcefile = $clienteimagem;
        $sourcecode = GetImageFromUrl($sourcefile);

        //Salva imagem como .tmp
        $newfile = $novoarq.".tmp";
        $savefile = fopen('' . $newfile, 'w');
        fwrite($savefile, $sourcecode);
        fclose($savefile);

        //Descobre o tipo da imagem
        $imagemtipo = exif_imagetype('/var/www/capasparaiphone.com.br/capasparaiphone/public/app/'.$novoarq.'.tmp');

        switch ($imagemtipo) {
            case 1:
        //Arquivo normal
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';
                break;

            case 2:
        //Arquivo normal
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';
                break;

            case 3:
        //Arquivo normal
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';
                break;

            case 6:
        //Arquivo normal
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';
                break;

        }

$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
mysql_select_db(DB_DATABASE,$dblink);

$sql_statement0 = "REPLACE INTO cpi_capasconstrucao_girar (idsession, posicao, angulo)
                VALUES(".$gidcsession.", ".$gposicao.", 0)";

$result0 = mysql_query($sql_statement0,$dblink);

$sql_statement = "INSERT INTO  `capasparaiphone`.`cpi_capasconstrucao` (
`idcsession` ,
`modelo` ,
`layout` ,
`posicao` ,
`imagem` ,
`nheight` ,
`nwidth` ,
`nleft` ,
`ntop`
)
VALUES (
'$gidcsession',  '$gmodelo',  '$glayout',  '$gposicao',  'https://www.capasparaiphone.com.br/app/$gimagem2',  '$qnheight',  '$qnwidth',  '$qnleft',  '$qntop'
)
";

$result = mysql_query($sql_statement,$dblink);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
else {
    ?>
        <img src="https://www.capasparaiphone.com.br/app/<?php echo "$novoarq"; ?>.png">

<?php } ?>


