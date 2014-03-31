<script type="text/javascript" src="/catalog/view/javascript/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#clickface").click();
  });
</script> 

<style>

    @font-face {
          font-family: "c4y1";
          src: url(/catalog/view/theme/theme254/stylesheet/alrightsans-regularitalic-v3.ttf);
    }
    @font-face {
          font-family: "c4y2";
          src: url(/catalog/view/theme/theme254/stylesheet/alrightsans-bolditalic-v3.ttf);
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
//incluindo a classe de conexão com o facebook
require '../facebook-php-sdk/src/facebook.php';

 
/*
* ID da App, vocé obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_ID = '533870426700085';
/*
* App Secret, você obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_Secret = 'd61ec652232c75af2667e8a2f5c2ba88';
 
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
    ?>
    
    <div style="text-align: center;margin: 30px;">Voc&ecirc; precisa estar logado no facebook para conseguir utilizar suas fotos!</div>
    <?php
    echo "<div style='text-align: right;margin-left: 30px;'><a id=\"clickface\" class=\"botaof button\" href=\"$url\">Entrar com Facebook</a></div>";
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
            <div style="text-align: center;margin: 30px;">Autentica&ccedil;&atilde;o efetuada. Esta janela pode ser fechada!</div>
        <?php


    }
}
 
?>