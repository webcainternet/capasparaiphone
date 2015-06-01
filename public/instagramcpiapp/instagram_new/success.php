<?php
require '../src/Instagram.php';
use MetzWeb\Instagram\Instagram;

// initialize class
$instagram = new Instagram(array(
'apiKey'      => '8de0dedcca0f40618752cb632802949b',
'apiSecret'   => 'a5b54552673047f793702a066d3e48fb',
'apiCallback' => 'https://www.capasparaiphone.com.br/instagramcpiapp/instagram/success.php' // must point to success.php
));

// Receive OAuth code parameter
$code = $_GET['code'];

// Check whether the user has granted access
if (true === isset($code)) {

  // Receive OAuth token object
  $data = $instagram->getOAuthToken($code);
  // Take a look at the API response
   
if(empty($data->user->username))
{
header('Location: index.php');

}
else
{
	session_start();
	$_SESSION['userdetails']=$data;
	$user=$data->user->username;
	$fullname=$data->user->full_name;
	$bio=$data->user->bio;
	$website=$data->user->website;
	$id=$data->user->id;
	$token=$data->access_token;

$id=mysql_query("select instagram_id from instagram_users where instagram_id='$id'");

if(mysql_num_rows($id) == 0)
{	
mysql_query("insert into instagram_users(username,Name,Bio,Website,instagram_id,instagram_access_token) values('$user','$fullname','$bio','$website','$id','$token')");
}

header('Location: home.php');
}
} 
else 
{
// Check whether an error occurred
if (true === isset($_GET['error'])) 
{
    echo 'An error occurred: '.$_GET['error_description'];
}

}

?>
