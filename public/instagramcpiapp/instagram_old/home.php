<script type="text/javascript" src="/catalog/view/javascript/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#clickinsta").click();
  });
</script> 

<style>

    @font-face {
          font-family: "c4y1";
          src: url(/catalog/view/theme/dilecta/stylesheet/alrightsans-regularitalic-v3.ttf);
    }
    @font-face {
          font-family: "c4y2";
          src: url(/catalog/view/theme/dilecta/stylesheet/alrightsans-bolditalic-v3.ttf);
    }
    .fontc4y1 { 
          font-family: "c4y1", Arial, Verdana;
          font-size: 12px;
    }

    .fontc4y2 { 
          font-family: "c4y2", Arial, Verdana;
          font-size: 14px;
          color: #6aa11a;
    }
    body, p {
        font-family: "c4y1", Arial, Verdana;
        margin:0px; padding:0px;
        background-color: transparent;
    }

    .botaof {
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
        background: url('/app/img/button.png') repeat-x left top;
        font-size: 12px;
        line-height: 18px;
        border-radius: 5px;
        color: #fff;
        display: inline-block;
        padding: 4px 10px;
        white-space: nowrap;
        font-size: 12px;
        line-height: 19px;
        text-transform: uppercase;
        font-weight: normal;
        margin: 30px;
    }
</style>
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
    ?>
    <div style="text-align: center;margin: 30px;">Autentica&ccedil;&atilde;o efetuada. Esta janela pode ser fechada!</div>
    <?php
}
else
{
    //header('Location: /instagramcpiapp/instagram/index.php');
  // Display the login button
  $loginUrl = $instagram->getLoginUrl();
  echo "<a id=\"clickinsta\" class=\"button\" href=\"$loginUrl\">Entrar com Instagram</a>";

  //Script refresh
}
?>


<?php
/*
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

<?php  echo "<img src=\"{$data->images->thumbnail->url}\""; ?>
 id="drag<?php echo $ic; ?>" draggable="true"
  ondragstart="drag(event)" style="max-width:100%; max-height:100%;">
                </div>

<?php
}
*/
?>

