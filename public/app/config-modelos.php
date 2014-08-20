<?php
	$modelo = $_GET["m"];
	$layout = $_GET["l"];

	// ------------------------------------------------------------------------
	//Area editavel
	// ------------------------------------------------------------------------

	//Modelos
	switch ($modelo) {
	    case 0:
	    	//Iphone 4/4S
	    	$textmodelo = "Iphone 4/4S";
	    	$larguratotal = 361;
	    	$alturatotal = 560;
	    	$mimage = "m-0.png";
	    	break;

    	case 1:
	    	//Iphone 5/5S
    		$textmodelo = "Iphone 5/5S";
	    	$larguratotal = 282;
	    	$alturatotal = 560;
	    	$mimage = "m-1.png";
	    	break;

    	case 2:
	    	//Galaxy S3
    		$textmodelo = "Galaxy S3";
	    	$larguratotal = 302;
	    	$alturatotal = 560;
	    	$mimage = "m-2.png";
	    	break;

    	case 3:
	    	//Galaxy S4
    		$textmodelo = "Galaxy S4";
	    	$larguratotal = 290;
	    	$alturatotal = 560;
	    	$mimage = "m-3.png";
	    	break;

    	case 4:
	    	//Iphone 3/3G/3GS
    		$textmodelo = "Iphone 3/3G/3GS";
	    	$larguratotal = 320;
	    	$alturatotal = 560;
	    	$mimage = "m-4.png";
	    	break;

    	case 5:
	    	//Galaxy S3 Mini
    		$textmodelo = "Galaxy S3 Mini";
	    	$larguratotal = 300;
	    	$alturatotal = 560;
	    	$mimage = "m-5.png";
	    	break;

    	case 6:
	    	//Galaxy S4 Mini
    		$textmodelo = "Galaxy S4 Mini";
	    	$larguratotal = 280;
	    	$alturatotal = 560;
	    	$mimage = "m-6.png";
	    	break;

    	case 7:
	    	//Iphone 5C
    		$textmodelo = "Iphone 5C";
	    	$larguratotal = 282;
	    	$alturatotal = 560;
	    	$mimage = "m-7.png";
	    	break;
	}

	$alturamaior = 560;
	$larguramaior = 320;
	// ------------------------------------------------------------------------

	//Layout 1 Foto
	if ($layout == 0) {
		$larguraunitaria = $larguratotal;
		$alturaunitaria = $alturatotal;
		$textnomelayout = "com 1 foto";
	}

	//Layout 2 Foto
	if ($layout == 1) {
		$larguraunitaria = $larguratotal;
		$alturaunitaria = $alturatotal/2;
		$textnomelayout = "com 2 fotos";
	}

	//Layout 6 Foto
	if ($layout == 2) {
		$larguraunitaria = $larguratotal/2;
		$alturaunitaria = $alturatotal/3;
		$textnomelayout = "com 6 fotos";
	}

	//Layout 8 Foto
	if ($layout == 3) {
		$larguraunitaria = $larguratotal/2;
		$alturaunitaria = $alturatotal/4;
		$textnomelayout = "com 8 fotos";
	}

	$larguraunitaria = $larguraunitaria - 0.49999;
	$alturaunitaria = $alturaunitaria - 0.49999;
	$larguraunitaria = number_format($larguraunitaria,0);
	$alturaunitaria = number_format($alturaunitaria,0);

	$mw = 0;
	$mh = 0;
	$mw2 = 0;
	$mh2 = 0;
	$mw6 = 0;
	$mh6 = 0;
	$mw8 = 0;
	$mh8 = 0;
	$mh15a = 0;
	$mh15b = 0;
	$mw15a = 0;
	$mw15b = 0;

	$mw = $larguraunitaria;
	$mh = $alturaunitaria;
	$mw2 = $larguraunitaria;
	$mh2 = $alturaunitaria;
	$mw6 = $larguraunitaria;
	$mh6 = $alturaunitaria;
	$mw8 = $larguraunitaria;
	$mh8 = $alturaunitaria;
?>