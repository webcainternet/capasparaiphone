<?php

$imagemtipo = exif_imagetype('filenovo.jpg');

switch ($imagemtipo) {
    case 1:
        echo "gif";
        break;
    case 2:
        echo "jpg";
        break;
    case 3:
        echo "png";
        break;

    case 6:
        echo "bmp";
        break;

    case 7:
	echo "tiff";
	break;

    case 8:
        echo "tiff";
        break;
}

?>
