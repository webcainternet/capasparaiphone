<?php
session_start();
if($_GET['id']=='logout')
{
    unset($_SESSION['userdetails']);
    session_destroy();
}

require 'instagram.class.php';
require 'instagram.config.php';

if (!empty($_SESSION['userdetails'])) 
{
    $data=$_SESSION['userdetails'];
    $instagram->setAccessToken($data);
}
else
{
    //header('Location: /instagramcpiapp/instagram/index.php');
  // Display the login button
  $loginUrl = $instagram->getLoginUrl();
  echo "<a class=\"button\" onclick=\"window.open('$loginUrl','_blank','toolbar=no, scrollbars=no, resizable=yes, top=400, left=500, width=700, height=700');\" href=\"#\">Entrar com Instagram</a>";

  ?> 
  <script>
    setTimeout("getinstagram()", 2000);
  </script>
  <?php
}
?>


<?php
if (!empty($_SESSION['userdetails'])) 
{


    $ic = 0;
    $popular = $instagram->getUserMedia($data->user->id);

    foreach ($popular->data as $data) {
	$ic++;
?>
        <div id="divdrag<?php echo $ic; ?>" style="background-color: #FFFFFF; width: 50px; float: left; overflow: hidden; height: 50px;

      background: rgba(255,255,255,0.8);
      position: relative;
      display: inline-block;
      margin: 5px;
      vertical-align: top;
      border: 1px solid #acacac;
      padding: 6px 6px 6px 6px;
      -webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
      box-shadow: 1px 1px 4px rgba(0,0,0,0.16);
      font-size: 14px;
      ">

<?php  echo "<img src=\"{$data->images->standard_resolution->url}\""; ?>
 id="drag<?php echo $ic; ?>" draggable="true"
  ondragstart="drag(event)" style="max-width:100%; max-height:100%;">
                </div>

<?php
}

}
?>