<?php
session_start();
if($_GET['id']=='logout')
{
	unset($_SESSION['userdetails']);
	session_destroy();
}

require '../instagram.class.php';
require '../instagram.config.php';

if (!empty($_SESSION['userdetails'])) 
{
	$data=$_SESSION['userdetails'];
/*
	echo "<div style='float:left;margin-right:10px'><img src=\"{$data->user->profile_picture}\" ></div><div style='float:left'>";  
	echo '<b>Name:</b> '.$data->user->full_name.'</br>';
	echo '<b>Username:</b> '.$data->user->username.'</br>';
	echo '<b>User ID:</b> '.$data->user->id.'</br>';
	echo '<b>Bio:</b> '.$data->user->bio.'</br>';
	echo '<b>Website:</b> '.$data->user->website.'</br>';
	echo '<b>Profile Pic:</b> '.$data->user->profile_picture.'</br>';
	echo '<b>Access Token:</b> '.$data->access_token.'</br></div>';
*/
	// Store user access token
	$instagram->setAccessToken($data);
}
else
{
	header('Location: index.php');
}

?>


<?php



$mh2=0;
$mw2=0;
$mh15a=0;
$mw15a=0;
$mh15b=0;
$mw15b=0;

$qm=$_GET["m"];
$ql=$_GET["l"];

switch ($qm) {
    //IPHONE4 IPHONE4S
    case 0:
        $mimage = "mask-iphone4.png";
        $mw = "340";
        $mh = "490";
        break;

    //IPHONE5
    case 1:
        $mimage = "mask-iphone5.png";
        $mw = "340";
        $mh = "538";
        break;

    //GALAXYS3
    case 2:
        $mimage = "mask-galaxy3.png";
        $mw = "340";
        $mh = "527";
        break;

    //GALAXYS4
    case 3:
        $mimage = "mask-galaxy4.png";
        $mw = "340";
        $mh = "499";
        break;
}

switch ($ql) {
    //Layout 2 fotos
    case 1:
			switch ($qm) {
			    //IPHONE4 IPHONE4S
			    case 0:
			        $mw2 = "338";
			        $mh2 = "243";
			        break;

			    //IPHONE5
			    case 1:
			        $mw2 = "338";
			        $mh2 = "267";
			        break;

			    //GALAXYS3
			    case 2:
			        $mw2 = "338";
			        $mh2 = "261";
			        break;

			    //GALAXYS4
			    case 3:
			        $mw2 = "338";
			        $mh2 = "247";
			        break;
			}
        break;

    //Layout 15 fotos
    case 2:
                        switch ($qm) {
                            //IPHONE4 IPHONE4S
                            case 0:
                                $mw15a = "168";
                                $mh15a = "161";
                                $mw15b = "83";
                                $mh15b = "79";
                                break;

                            //IPHONE5
                            case 1:
                                $mw15a = "168";
                                $mh15a = "177";
                                $mw15b = "83";
                                $mh15b = "87";
                                break;

                            //GALAXYS3
                            case 2:
                                $mw15a = "168";
                                $mh15a = "173";
                                $mw15b = "83";
                                $mh15b = "85";
                                break;

                            //GALAXYS4
                            case 3:
                                $mw15a = "168";
                                $mh15a = "164";
                                $mw15b = "83";
                                $mh15b = "81";
                                break;
			}
        break;
    }

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />

  <link rel="stylesheet" href="../0/jquery-ui.css" />
  <script src="../0/jquery-1.9.1.js"></script>
  <script src="../0/jquery-ui.js"></script>
  <link rel="stylesheet" href="../0/style.css" />

<script>
function allowDrop(ev)
{
	ev.preventDefault();
}

function drag(ev)
{
	ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
	ev.preventDefault();
	var data=ev.dataTransfer.getData("Text");
	//ev.target.appendChild(document.getElementById(data));
	document.getElementById(data).style.opacity='0.75';
	document.getElementById(data).style.filter='alpha(opacity=75)';

	iwidth=document.getElementById(data).width;
	iheight=document.getElementById(data).height;

	// --- Variaveis ---
	pheight=527;
	pwidth=340;
	// -----------------

	idiff=iheight/iwidth;
	iprop=pheight/pwidth;
	if (idiff<iprop) {
		document.getElementById(data).height=pheight;
		nwidth=pheight/iheight*iwidth;
		document.getElementById(data).width=nwidth;

		nleft=(pwidth-nwidth)/2;
		document.getElementById(data).style.marginLeft=nleft+'px';
	} else {
	        document.getElementById(data).width=pwidth;
		nheight=pwidth/iwidth*iheight;
		document.getElementById(data).height=nheight;

		ntop=(pheight-nheight)/2;
		document.getElementById(data).style.marginTop=ntop+'px';
	}
	document.getElementById(data).style.maxHeight='5000%';
	document.getElementById(data).style.maxWidth='5000%';

	document.getElementById("div"+data).style.display='none';
	ev.target.appendChild(document.getElementById(data));
}

function dropl2(ev)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=<?php echo $mh2; ?>;
        pwidth=<?php echo $mw2; ?>;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));
}

function dropl15a(ev)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=<?php echo $mh15a; ?>;
        pwidth=<?php echo $mw15a; ?>;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));
}

function dropl15b(ev)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=<?php echo $mh15b; ?>;
        pwidth=<?php echo $mw15b; ?>;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));
}

</script>
</head>

<body style="margin: 0px; padding: 0px;font-family: Arial, Helvetica, sans-serif; color: #222222;line-height: 1.3;font-size: 12px; ">

<div id="div1" ondrop="drop(event)"
ondragover="allowDrop(event)"></div>


<div style="height: 475px; float: left; width: 320px; overflow-x: hidden">


      <div style="float: left; width: 320px;">
        AJUDA: Ipsum é simplesmente uma simulação de<br /> blabla blablba bla
      </div>


<?php
    $ic = 0;
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
&nbsp;
</div>


<?php
switch ($ql) {
    //Layout 1 foto
    case 0: ?>

<!-- LAYOUT 1 -->
<div style="display: block; float: left; width: 350px; border-left-style: solid; border-left-width: 1px; border-left-color: rgb(204, 204, 204); height: 540px; text-align: center; background-position: 15px 10px; background-repeat: no-repeat no-repeat;">
    	<div id="divmask" style="padding: 0px; height: <?php echo $mh; ?>px; width: 340px; margin-left: 10px; background-size: 340px; background-repeat: no-repeat no-repeat;">
    		<div id="divl1" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 100%; height: 100%; overflow: hidden;text-align: center;
	align: middle; border: solid 1px #4faad6;"></div>
  	</div>
    </div>
<!-- FIM LAYOUT 1 -->

    <?php break;
    case 1: ?>

<!-- LAYOUT 2 -->
<div style="display: block; float: left; width: 350px; border-left-style: solid; border-left-width: 1px; border-left-color: rgb(204, 204, 204); height: 540px; text-align: center; background-position: 15px 10px; background-repeat: no-repeat no-repeat;">
        <div id="divmask" style="padding: 0px; height: <?php echo $mh; ?>px; width: 340px; margin-left: 10px; background-size: 340px; background-repeat: no-repeat no-repeat;">
                <div id="divl2a" ondrop="dropl2(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw2; ?>px; height: <?php echo $mh2; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

		<div id="divl2b" ondrop="dropl2(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw2; ?>px; height: <?php echo $mh2; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>
        </div>
    </div>
<!-- FIM LAYOUT 2 -->

    <?php break;
    case 2: ?>

<!-- LAYOUT 3 -->
<div style="display: block; float: left; width: 350px; border-left-style: solid; border-left-width: 1px; border-left-color: rgb(204, 204, 204); height: 540px; text-align: center; background-position: 15px 10px; background-repeat: no-repeat no-repeat;">
        <div id="divmask" style="padding: 0px; height: <?php echo $mh; ?>px; width: 340px; margin-left: 10px; background-size: 340px; background-repeat: no-repeat no-repeat;">

                <div id="divl15b1" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

		<div id="divl15b2" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15a1" ondrop="dropl15a(event)" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15a; ?>px; height: <?php echo $mh15a; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b3" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b4" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>



		<div id="divl15a2" ondrop="dropl15a(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15a; ?>px; height: <?php echo $mh15a; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b5" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b6" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b7" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b8" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>



                <div id="divl15b9" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b10" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15a3" ondrop="dropl15a(event)" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15a; ?>px; height: <?php echo $mh15a; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b11" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>

                <div id="divl15b12" ondrop="dropl15b(event)" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center;
        align: middle;"></div>
</div>

        </div>
    </div>
<!-- FIM LAYOUT 3 -->

    <?php break;
} ?>






</body>
</html>
