<?php

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



$sourcefile = 'http://newevolutiondesigns.com/images/freebies/hd-wallpaper-41.jpg';
$sourcecode = GetImageFromUrl($sourcefile);

$newfile = 'filenovo.jpg';
$savefile = fopen('' . $newfile, 'w');
fwrite($savefile, $sourcecode);
fclose($savefile);

echo "<img src='".$newfile."' width=350><br>";

?>

