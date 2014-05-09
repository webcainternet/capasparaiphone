<?php
/**
 * Instagram PHP API example usage.
 * This script must be the one receiving the response from
 * instagram's servers after requesting an access token.
 * 
 * For example, if the redirect URI that you set up with instagram
 * is http://example.com/callback.php, this script must be named
 * callback.php and put at the root of your server so the access token
 * can be processed and all the actions executed.
 * 
 * http://example.com/callback.php must be replaced for REDIRECT-URI
 * in the following URI, along with your CLIENT-ID:
 * https://instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=token
 * https://api.instagram.com/oauth/authorize/?client_id=e8d6b06f7550461e897b45b02d84c23e&redirect_uri=http://mauriciocuenca.com/qnktwit/confirm.php&response_type=code
 */
session_start();
require_once 'Instagram.php';
error_reporting(E_ERROR | E_PARSE);

/**
 * Configuration params, make sure to write exactly the ones
 * instagram provide you at http://instagr.am/developer/
 */
$config = array(
        'client_id' => '187f060b348a4ba595ec022fde275450', // Your client id
        'client_secret' => '415cbd15c8f14800a910a9e0adfe897e', // Your client secret
        'grant_type' => 'authorization_code',
        'redirect_uri' => 'https://webca.com.br/instagramcpiapp/instagram-api/instagammy.php', // The redirect URI you provided when signed up for the service
     );

// Instantiate the API handler object
$instagram = new Instagram($config);
$accessToken = $instagram->getAccessToken();
$_SESSION['InstagramAccessToken'] = $accessToken;

$instagram->setAccessToken($_SESSION['InstagramAccessToken']);
$popular = $instagram->getPopularMedia();
$userinfo = $instagram->getUser($_SESSION['InstagramAccessToken']);



/*
echo "<ul>\n";

$response = json_decode($popular, true);
foreach ($response['data'] as $data) {
$link = $data['link'];
$caption = $data['caption']['text'];
$author = $data['caption']['from']['username'];
$thumbnail = $data['images']['thumbnail']['url'];


?>
<li><a href="<?= $link ?>"><img title="<?= $caption ?>" src="<?= $thumbnail ?>"border="0" alt="" width="150" height="150"
align="absmiddle" /></a>
</li>

<?php

}
echo "</ul>\n";
*/





// After getting the response, let's iterate the payload
$response = json_decode($popular, true);
$ures     = json_decode($userinfo, true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Instagram Script - Display User API Data</title>
</head>

<body>
<h1>User Profile</h1>

	<?php var_dump($ures); ?>
	<div class="username"><strong><?= $ures['data']['username'] ?>(<?= $ures['data']['full_name'] ?>)</strong> - <img src="<?= $ures['data']['profile_picture'] ?>" />
	<p><a href="<?= $ures['data']['website'] ?>"><?= $ures['data']['website'] ?></a></p>
	<ul>
		<li>Total Photos: <?= $ures['data']['counts']['media'] ?></li>
		<li>Following: <?= $ures['data']['counts']['follows'] ?></li>
		<li>Followers: <?= $ures['data']['counts']['followed_by'] ?></li>
		<li>User ID: <?= $ures['data']['id'] ?></li>
	</ul>
	</div>
	<hr>




</body>
</html>
