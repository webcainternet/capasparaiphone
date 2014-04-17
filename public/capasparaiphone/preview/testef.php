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

        //Recebe imagem do cliente
        $clienteimagem = 'http://upload.wikimedia.org/wikipedia/commons/3/36/Sunflower_as_GIF.gif';

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
                imagepng($image, $novoarq.'.gif');
                imagedestroy($image);

		//Contraste 40
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.gif-40.gif');
                imagedestroy($image);

		//Preto e Branco
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.gif-pb.gif');
                imagedestroy($image);

                //Sepia
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.gif-sp.gif');
                imagedestroy($image);

		//Vermelho
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.gif-red.gif');
                imagedestroy($image);

		//Verde
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.gif-verde.gif');
                imagedestroy($image);

                //Azul
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.gif-azul.gif');
                imagedestroy($image);

		//Amarelo
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.gif-amarelo.gif');
                imagedestroy($image);

		//Roxo
                $image = imagecreatefromgif($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.gif-roxo.gif');
                imagedestroy($image);

                echo "<img src='".$novoarq.".gif' width=300>";
                echo "<img src='".$novoarq.".gif-40.gif' width=300>";
                echo "<img src='".$novoarq.".gif-pb.gif' width=300>";
                echo "<img src='".$novoarq.".gif-sp.gif' width=300>";
                echo "<img src='".$novoarq.".gif-red.gif' width=300>";
                echo "<img src='".$novoarq.".gif-verde.gif' width=300>";
                echo "<img src='".$novoarq.".gif-azul.gif' width=300>";
                echo "<img src='".$novoarq.".gif-amarelo.gif' width=300>";
                echo "<img src='".$novoarq.".gif-roxo.gif' width=300>";
                break;
            case 2:

                //Arquivo normal
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.jpg');
                imagedestroy($image);

		//Contraste 40
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.jpg-40.jpg');
                imagedestroy($image);

		//Preto e Branco
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.jpg-pb.jpg');
                imagedestroy($image);

                //Sepia
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.jpg-sp.jpg');
                imagedestroy($image);

		//Vermelho
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.jpg-red.jpg');
                imagedestroy($image);

		//Verde
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.jpg-verde.jpg');
                imagedestroy($image);

                //Azul
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.jpg-azul.jpg');
                imagedestroy($image);

		//Amarelo
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.jpg-amarelo.jpg');
                imagedestroy($image);

		//Roxo
                $image = imagecreatefromjpeg($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.jpg-roxo.jpg');
                imagedestroy($image);

                echo "<img src='".$novoarq.".jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-40.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-pb.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-sp.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-red.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-verde.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-azul.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-amarelo.jpg' width=300>";
                echo "<img src='".$novoarq.".jpg-roxo.jpg' width=300>";

                break;
            case 3:

                //Arquivo normal
                $image = imagecreatefrompng($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.png');
                imagedestroy($image);

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

                echo "<img src='".$novoarq.".png' width=300>";
                echo "<img src='".$novoarq.".png-40.png' width=300>";
                echo "<img src='".$novoarq.".png-pb.png' width=300>";
                echo "<img src='".$novoarq.".png-sp.png' width=300>";
                echo "<img src='".$novoarq.".png-red.png' width=300>";
                echo "<img src='".$novoarq.".png-verde.png' width=300>";
                echo "<img src='".$novoarq.".png-azul.png' width=300>";
                echo "<img src='".$novoarq.".png-amarelo.png' width=300>";
                echo "<img src='".$novoarq.".png-roxo.png' width=300>";
                break;

            case 6:

                //Arquivo normal
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -0);
                imagepng($image, $novoarq.'.bmp');
                imagedestroy($image);

		//Contraste 40
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_CONTRAST, -40);
                imagepng($image, $novoarq.'.bmp-40.bmp');
                imagedestroy($image);

		//Preto e Branco
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_GRAYSCALE);
                imagepng($image, $novoarq.'.bmp-pb.bmp');
                imagedestroy($image);

                //Sepia
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 50, 0);
                imagepng($image, $novoarq.'.bmp-sp.bmp');
                imagedestroy($image);

		//Vermelho
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 0, 0);
                imagepng($image, $novoarq.'.bmp-red.bmp');
                imagedestroy($image);

		//Verde
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 100, 0);
                imagepng($image, $novoarq.'.bmp-verde.bmp');
                imagedestroy($image);

                //Azul
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 0, 0, 100);
                imagepng($image, $novoarq.'.bmp-azul.bmp');
                imagedestroy($image);

		//Amarelo
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 100, 100, -100);
                imagepng($image, $novoarq.'.bmp-amarelo.bmp');
                imagedestroy($image);

		//Roxo
                $image = imagecreatefrombmp($novoarq.'.tmp');
                imagefilter($image, IMG_FILTER_COLORIZE, 50, -50, 50);
                imagepng($image, $novoarq.'.bmp-roxo.bmp');
                imagedestroy($image);

                echo "<img src='".$novoarq.".bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-40.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-pb.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-sp.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-red.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-verde.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-azul.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-amarelo.bmp' width=300>";
                echo "<img src='".$novoarq.".bmp-roxo.bmp' width=300>";
                break;

        }
?>

