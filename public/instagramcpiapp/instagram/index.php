<?php
session_start();
if (!empty($_SESSION['userdetails'])) 
{
	header('Location: home.php');
}
require 'instagram.class.php';
require 'instagram.config.php';

// Display the login button
$loginUrl = $instagram->getLoginUrl();
echo "<a target=\"_blank\" class=\"button\" href=\"$loginUrl\">Entrar com Instagram</a>";
?>