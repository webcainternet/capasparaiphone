<?php
//incluindo a classe de conexão com o facebook
require '../src/facebook.php';

 
/*
* ID da App, vocé obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_ID = '576622305778855';
/*
* App Secret, você obteve isso na ultima
* página de geração do seu aplicativo no facebook
*/
$App_Secret = 'f1beb40d642113d50a911f79fa2866b9';
 
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
    $url = $facebook->getLoginUrl(array('scope' => array('user_about_me','user_hometown','user_photos','friends_photos','read_stream','friends_likes','photo_upload','publish_stream','status_update','video_upload')));
    header("Location:".$url);
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
    }
}
 
?>
 
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
   <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
  </head>
  <body>


<script type="text/javascript">
function selecionaalbum(salbum) {
	alert(salbum.value);
	window.location="photos.php?idalbum="+salbum.value;
}
</script>

<select  onchange="selecionaalbum(this)">

<?php
foreach($albums['data'] as $album) 
{
print ('<option value="'.$album['id'].'">'.$album['name'].'</option>' ) ;
}
?>

</select>

</body>
</html>
