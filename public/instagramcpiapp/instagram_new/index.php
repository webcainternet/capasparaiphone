<?php

session_start();
if (!empty($_SESSION['userdetails'])) 
{
        header('Location: home.php');
}

require '../src/Instagram.php';
use MetzWeb\Instagram\Instagram;

// initialize class
$instagram = new Instagram(array(
'apiKey'      => '8de0dedcca0f40618752cb632802949b',
'apiSecret'   => 'a5b54552673047f793702a066d3e48fb',
'apiCallback' => 'https://www.capasparaiphone.com.br/instagramcpiapp/instagram/success.php' // must point to success.php
));

// create login URL
$loginUrl = $instagram->getLoginUrl();

?>
            <a class="button" target="_blank" href="<?php echo $loginUrl ?>">Entrar com Instagram</a>
