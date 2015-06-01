



<html>
 
<head>
<meta charset="utf-8" />

  <link rel="stylesheet" href="../0/jquery-ui.css" />
  <script src="../0/jquery-1.9.1.js"></script>
  <script src="../0/jquery-ui.js"></script>
  <link rel="stylesheet" href="../0/style.css" />
 
	<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
	<script src="dropzone.min.js"></script>>
</head>
 
<body style="margin: 0px; padding: 0px;font-family: Arial, Helvetica, sans-serif; color: #222222;line-height: 1.3;font-size: 12px; ">
<div style="float: left; width: 350px; height: 550px;">


<div style="margin: 20px;">

<style type="text/css">
      * {
        margin: 0px;
        padding: 0px;
      }

      a.button {
        background: url(../instagram-login-button.png) no-repeat transparent;
        cursor: pointer;
        display: block;
        height: 29px;
        margin: 50px auto;
        overflow: hidden;
        text-indent: -9999px;
        width: 200px;
      }

      a.button:hover {
        background-position: 0 -29px;
      }
    </style>


  </head>
  <body>
	<div style='text-align:center'>

    <?php
        $ql = $_GET["l"];
        $qm = $_GET["m"];

session_start();
if (!empty($_SESSION['userdetails'])) 
{
	header("Location: ../home.php?l=$ql&m=$qm");
}
      require '../instagram.class.php';
      require '../instagram.config.php';
      
      // Display the login button
      $loginUrl = $instagram->getLoginUrl();
      echo "<a class=\"button\" href=\"$loginUrl&l=$ql&m=$qm\">Entrar com Instagram</a>";
    ?>


</div>
</div>

</div>


<div id="p1-dvfoto-img" style="float: left; width: 348px; border-left: solid 1px #CCC; height: 540px; text-align: left; background-repeat: no-repeat; background-position: 15px 10px;">
      <div style="float: left;
                  width: 15px;
                  height: 20px;
                  margin-left: 20px;
                  margin-top: 20px;
                  background-color: #6aa11a;
                  border-radius: 20px;
                  padding: 5px;
                  padding-left: 10px;
                  padding-top: 5px;
                  color: #FFFFFF;
                  font-size: 14px;
                  font-weight: bold;">3</div>

      <div style="float: left;
                  width: 260px;
                  margin-left: 10px;
                  margin-top: 13px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 14px;
                  font-weight: bold;">
ESCOLHA O ALBUM DE SEU FACEBOOK!
	</div>
      <div style="float: left; width: 320px; margin-left: 20px; margin-top: 20px;">
        AJUDA: Faça o login com o Facebook e escolha as fotos de seus albuns.
	</div>

    </div>



</body>
 
</html>

