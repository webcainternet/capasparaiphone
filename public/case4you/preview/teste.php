<?php

$filec = "fernando-passaro.jpg";

$image = imagecreatefromjpeg("$filec");
imagefilter($image, IMG_FILTER_CONTRAST, -40);
imagepng($image, $filec.'40.png');
imagedestroy($image);



$image = imagecreatefromjpeg("$filec");
imagefilter($image, IMG_FILTER_GRAYSCALE);
imagepng($image, $filec.'pb.png');
imagedestroy($image);


echo "<img src='".$filec."40.png' width=350><br>";
echo "<img src='".$filec."pb.png' width=350><br>";


?>

