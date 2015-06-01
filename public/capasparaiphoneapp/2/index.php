<?php
//incluindo a classe de conexão com o facebook

require '../facebook-php-sdk/src/facebook.php';

/*
* ID da App, vocé obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_ID = '417509841755213';
/*
* App Secret, você obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_Secret = '33fa7913fc9ff06df746819f507ab7c3';
 
//Instanciando o Objeto da classe do facebook
$facebook = new Facebook(array(
        'appId'  => $App_ID ,
        'secret' => $App_Secret
));
 
//Pegando Id do usuário Logado
$o_user = $facebook->getUser();
 
/*
* Verificando se está conectado
*/
if($o_user == 0)
{
 
    //Envia para a página de permissão do facebook, nela voce irá dar permissão ao aplicativo
    //acessar dados da sua conta
    $url = $facebook->getLoginUrl(array('scope' => array('user_about_me','user_hometown','user_photos','read_stream')));
    //header("Location:".$url);
    echo "<div>App error</div>";
}
else
{
    //Verificando se o comando de logout foi enviado
    if($_GET['action'] == 'finish' )
    {
        //Retirando a permissão do Aplicativo à sua conta no facebook
        session_destroy();
        header('Location: '.$facebook->getLogoutUrl());
    }
    else
    {
        //pegando as publicações do seu mural
        //$feed = $facebook->api('/me/feed');
        //Use var_dump($feed) ou print_r($feed)
        //para ver todos os campos retornados
 
        //pegando as informações do usuário conectado
        //$me = $facebook->api('/me');
        //Use var_dump($me) ou print_r($me)
        //para ver todos os campos retornados
 
        //pegando as publicações da sua home
        //$home = $facebook->api('/me/home');
        //Use var_dump($home) ou print_r($home)
        //para ver todos os campos retornados
        $albums = $facebook->api('/me/albums');


        //$album_id = $_GET['idalbum'];
        //$photos = $facebook->api("/{$album_id}/photos");
    }
}
?>
 
<?php
session_start();

if (isset($_SESSION["userid"])) {
  $idcsession = $_SESSION["userid"];
}
else {
  //Randomiza nome do arquivo
  $date1 = date_create();
  $timestamp1 = date_timestamp_get($date1);
  $ramdomico4 = rand(1000,9999);
  $idsession = $timestamp1."".$ramdomico4;
  $_SESSION["userid"] = $idsession;

  //echo "Nao logado:" . $_SESSION["userid"];
}

    $idcsession = $idcsession;
    $gmodelo = $_GET["m"];
    $glayout = $_GET["l"];
?>


<?php
    

      $album_id = $_GET["idalbum"];
      $photos = $facebook->api("/{$album_id}/photos?limit=1000&offset=0");

    $adate1 = date_create();
    $atimestamp1 = date_timestamp_get($adate1);
    $aramdomico4 = rand(1000,9999);
    $ic = $atimestamp1.$aramdomico4;

      foreach($photos['data'] as $photo)
      {
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
                <?php echo "<img src='{$photo['source']}' "; ?>
                id="drag<?php echo $ic; ?>" draggable="true"
                ondragstart="drag(event)" style="max-width:100%; max-height:100%;">
        </div>
<?php
      }

?>
