<?php
	$imagem = $_GET["imagem"];
	//$imagem = "http://ambientalsustentavel.org/wp-content/uploads/2011/12/Praia.jpg";
?>

<html>

<style>

.image {
background: url(sombra.png) no-repeat bottom center; 
/* background-size: 250px; */
padding-bottom: 40px;
}
</style>

<body style="margin: 20px; padding: 20px;">

<div>
<form method="get">
URL da imagem: <input type="text" name="imagem" style="width: 300px;">
<input type="submit">
</form>
</div>

			<div style="width: 280px; float: left;">
				Iphone4/4S<br /><a href="mascara_iphone_4s.png">mascara</a><br />&nbsp;
				<div style="width:240px;">
                    <div class="image">
                        <div style="background: url('<?php echo $imagem; ?>') center; background-size: auto 100%; height: 468px; width: 240px;border-radius: 46px;"></div>
                    </div>
                    <img src="mascara_iphone_4s.png" style="height: 468px;width: 240px;position: relative;top: -508px;margin: 0 0 -254px;   border-radius: 44px!important;" alt="">
                </div>
            </div>


			<div style="width: 267px; float: left;">
				Iphone5/5S<br /><a href="mascara_iphone_5s.png">mascara</a><br />&nbsp;
				<div style="width:227px;">
                    <div class="image">
                        <div style="background: url('<?php echo $imagem; ?>') center; background-size: auto 100%; height: 468px; width: 227px;border-radius: 46px;"></div>
                    </div>
                    <img src="mascara_iphone_5s.png" style="height: 468px;width: 227px;position: relative;top: -508px;margin: 0 0 -254px;   border-radius: 44px!important;" alt="">
                </div>
            </div>


            <div style="width: 280px; float: left;">
				GalaxyS3<br /><a href="mascara_galaxy_s3.png">mascara</a><br />&nbsp;
				<div style="width:240px;">
                    <div class="image">
                        <div style="background: url('<?php echo $imagem; ?>') center; background-size: auto 100%; height: 468px; width: 240px;border-radius: 46px;"></div>
                    </div>
                    <img src="mascara_galaxy_s3.png" style="height: 468px;width: 240px;position: relative;top: -508px;margin: 0 0 -254px;   border-radius: 44px!important;" alt="">
                </div>
            </div>


            <div style="width: 280px; float: left;">
                GalaxyS4<br /><a href="mascara_galaxy_s4.png">mascara</a><br />&nbsp;
                <div style="width:240px;">
                    <div class="image">
                        <div style="background: url('<?php echo $imagem; ?>') center; background-size: auto 100%; height: 468px; width: 240px;border-radius: 46px;"></div>
                    </div>
                    <img src="mascara_galaxy_s4.png" style="height: 468px;width: 240px;position: relative;top: -508px;margin: 0 0 -254px;   border-radius: 44px!important;" alt="">
                </div>
            </div>

</body>



</html>
