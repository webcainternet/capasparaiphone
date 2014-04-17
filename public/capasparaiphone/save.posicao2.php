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
        $imagemtipo = exif_imagetype($novoarq.'.tmp');

        switch ($imagemtipo) {
            case 1:

        //Arquivo normal
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';

        //Contraste 40
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.png-40.png');
                imagedestroy($image);

        //Preto e Branco
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.png-pb.png');
                imagedestroy($image);

        //Sepia
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.png-sp.png');
                imagedestroy($image);
/*
        //Vermelho
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.png-red.png');
                imagedestroy($image);

        //Verde
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.png-verde.png');
                imagedestroy($image);

        //Azul
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.png-azul.png');
                imagedestroy($image);

        //Amarelo
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.png-amarelo.png');
                imagedestroy($image);

        //Roxo
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.png-roxo.png');
                imagedestroy($image);
*/
                break;
            case 2:

        //Arquivo normal
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';

        //Contraste 40
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.png-40.png');
                imagedestroy($image);

        //Preto e Branco
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.png-pb.png');
                imagedestroy($image);

        //Sepia
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.png-sp.png');
                imagedestroy($image);
/*
        //Vermelho
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.png-red.png');
                imagedestroy($image);

        //Verde
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.png-verde.png');
                imagedestroy($image);

        //Azul
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.png-azul.png');
                imagedestroy($image);

        //Amarelo
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.png-amarelo.png');
                imagedestroy($image);

        //Roxo
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.png-roxo.png');
                imagedestroy($image);
*/

                break;
            case 3:

        //Arquivo normal
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';

        //Contraste 40
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.png-40.png');
                imagedestroy($image);

        //Preto e Branco
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.png-pb.png');
                imagedestroy($image);

        //Sepia
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.png-sp.png');
                imagedestroy($image);
/*
        //Vermelho
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.png-red.png');
                imagedestroy($image);

        //Verde
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.png-verde.png');
                imagedestroy($image);

        //Azul
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.png-azul.png');
                imagedestroy($image);

        //Amarelo
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.png-amarelo.png');
                imagedestroy($image);

        //Roxo
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.png-roxo.png');
                imagedestroy($image);
*/
                break;

            case 6:

        //Arquivo normal
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);
                $gimagem2 = $novoarq.'.png';

        //Contraste 40
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.png-40.png');
                imagedestroy($image);

        //Preto e Branco
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.png-pb.png');
                imagedestroy($image);

        //Sepia
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.png-sp.png');
                imagedestroy($image);
/*
        //Vermelho
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.png-red.png');
                imagedestroy($image);

        //Verde
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.png-verde.png');
                imagedestroy($image);

        //Azul
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.png-azul.png');
                imagedestroy($image);

        //Amarelo
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.png-amarelo.png');
                imagedestroy($image);

        //Roxo
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.png-roxo.png');
                imagedestroy($image);
*/
                break;

        }



 

$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
mysql_select_db(DB_DATABASE,$dblink);

$sql_statement = "INSERT INTO  `capasparaiphone`.`c4y_capasconstrucao` (
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
'$gidcsession',  '$gmodelo',  '$glayout',  '$gposicao',  'http://capasparaiphone.webca.com.br/capasparaiphone/$gimagem2',  '$qnheight',  '$qnwidth',  '$qnleft',  '$qntop'
)
";

$result = mysql_query($sql_statement,$dblink);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
else {
    ?>
        <img src="http://capasparaiphone.webca.com.br/capasparaiphone/<?php echo "$novoarq"; ?>.png">
        <img src="http://capasparaiphone.webca.com.br/capasparaiphone/<?php echo "$novoarq"; ?>.png-40.png">
        <img src="http://capasparaiphone.webca.com.br/capasparaiphone/<?php echo "$novoarq"; ?>.png-pb.png">
        <img src="http://capasparaiphone.webca.com.br/capasparaiphone/<?php echo "$novoarq"; ?>.png-sp.png">
    <?php
}


?>

