<?php
//incluindo a classe de conexão com o facebook
require '../facebook-php-sdk/src/facebook.php';

 
/*
* ID da App, vocé obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_ID = '576622305778855';
/*
* App Secret, você obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_Secret = 'd5fa3ee39357eb566807b7b742b7323e';
 
//Instanciando o Objeto da classe do facebook
$facebook = new Facebook(array(
        'appId'  => $App_ID ,
        'secret' => $App_Secret
));
 
//Pegando Id do usuário Logado
$o_user = $facebook->getUser();

//echo $o_user; 
/*
* Verificando se está conectado
*/
if($o_user == 0)
{
    //Envia para a página de permissão do facebook, nela voce irá dar permissão ao aplicativo
    //acessar dados da sua conta
    $url = $facebook->getLoginUrl(array('scope' => array('user_about_me','user_hometown','user_photos','friends_photos','read_stream','friends_likes','photo_upload','publish_stream','status_update','video_upload')));
    //header("Location:".$url);
    //echo "<script language=javascript>location.href ='".$url."'</script>";
    //$url = str_replace($url, 'index2.php', 'index.php');
    $url = "/capasparaiphoneapp/1/index.php";
    echo "<a class=\"button\" onclick=\"window.open('$url','_blank','toolbar=no, scrollbars=no, resizable=yes, top=400, left=500, width=850, height=600');\" href=\"#\">Entrar com Facebook</a>";
    ?> 
    <script>
        setTimeout("getalbum()", 2000);
    </script>
    <?php

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
        ?>

        <script type="text/javascript">
        function selecionaalbum(salbum) {
                getphoto(salbum.value);
                //window.location="http://capasparaiphone.com.br/capasparaiphoneapp/2/?idalbum="+salbum.value;
        }
        </script>

        <select  onchange="selecionaalbum(this)">
          <?php
          $tfirsti = 0;
          $tfirst = '';
          foreach($albums['data'] as $album) 
          {
          $tfirst = $album['id'];
          print ('<option value="'.$album['id'].'">'.$album['name'].'</option>' ) ;
          $tfirsti++;
          }
          ?>

          </select>
          <script>
            getphoto('<?php echo $tfirst; ?>');
          </script>
        <?php


    }
}
 
?>