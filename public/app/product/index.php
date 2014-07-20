<body style="margin: 0px; padding: 0px;">
<?php
	include '../../config.php';

	$gidcsession = $_GET["idcsession"];
	$gmodelo = $_GET["m"];
	$glayout = $_GET["l"];
	$gposicao = $_GET["posicao"];
	$gimagem = $_GET["imagem"];
	$qnheight = $_GET["nheight"];
	$qnwidth = $_GET["nwidth"];
	$qnleft = $_GET["nleft"];
	$qntop = $_GET["ntop"];

	$dblink = mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
	mysql_select_db(DB_DATABASE,$dblink);

	include("../config-modelos.php");
?>
<?php //Layout 1 Foto
	if ($layout == 0) { 
	$sql_statement1  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 1  order by datainsert desc limit 1";
	$result1 = mysql_query($sql_statement1);
	if (!$result1) { 
		die('Invalid query: ' . mysql_error()); 
	}
	else { 
		while ($row1 = mysql_fetch_array($result1, MYSQL_ASSOC)) { 
			$imagemurl[1] 	= $row1["imagem"];
			$nheight[1] 	= $row1["nheight"];
			$nwidth[1] 		= $row1["nwidth"];
			$nleft[1] 		= $row1["nleft"];
			$ntop[1] 		= $row1["ntop"];
		}
	} ?>
	<table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<div id="divl1" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[1]; ?>" 
						 id="imgl1" 
						 style="margin-top: <?php echo $ntop[1]; ?>px;
						 		margin-left: <?php echo $nleft[1]; ?>px;
						 		width: <?php echo $nwidth[1]; ?>px;
						 		height: <?php echo $nheight[1]; ?>px;" 
						 width="<?php echo $nwidth[1]; ?>" 
						 height="<?php echo $nheight[1]; ?>">
				</div>
			</td>
		</tr>
	</table>
<?php } ?>
<?php //Layout 2 Foto
	if ($layout == 1) { 
	$sql_statement1  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 1  order by datainsert desc limit 1";
	$result1 = mysql_query($sql_statement1);
	if (!$result1) { 
		die('Invalid query: ' . mysql_error()); 
	}
	else { 
		while ($row1 = mysql_fetch_array($result1, MYSQL_ASSOC)) { 
			$imagemurl[1] 	= $row1["imagem"];
			$nheight[1] 	= $row1["nheight"];
			$nwidth[1] 		= $row1["nwidth"];
			$nleft[1] 		= $row1["nleft"];
			$ntop[1] 		= $row1["ntop"];
		}
	}
	$sql_statement2  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 2  order by datainsert desc limit 1";
	$result2 = mysql_query($sql_statement2);
	if (!$result2) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row2 = mysql_fetch_array($result2, MYSQL_ASSOC)) { 
            $imagemurl[2]   = $row2["imagem"];
            $nheight[2]     = $row2["nheight"];
            $nwidth[2]      = $row2["nwidth"];
            $nleft[2]       = $row2["nleft"];
            $ntop[2]        = $row2["ntop"];
    	}
	}
?>
	<table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<div id="divl2a" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[1]; ?>" 
						 id="imgl2a" 
						 style="margin-top: <?php echo $ntop[1]; ?>px;
						 		margin-left: <?php echo $nleft[1]; ?>px;
						 		width: <?php echo $nwidth[1]; ?>px;
						 		height: <?php echo $nheight[1]; ?>px;" 
						 width="<?php echo $nwidth[1]; ?>" 
						 height="<?php echo $nheight[1]; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="divl2b" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[2]; ?>" 
						 id="imgl2b" 
						 style="margin-top: <?php echo $ntop[2]; ?>px;
						 		margin-left: <?php echo $nleft[2]; ?>px;
						 		width: <?php echo $nwidth[2]; ?>px;
						 		height: <?php echo $nheight[2]; ?>px;" 
						 width="<?php echo $nwidth[2]; ?>" 
						 height="<?php echo $nheight[2]; ?>">
				</div>
			</td>
		</tr>
	</table>
<?php } ?>
<?php //Layout 6 Foto
	if ($layout == 2) { 
	$sql_statement1  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 1  order by datainsert desc limit 1";
	$result1 = mysql_query($sql_statement1);
	if (!$result1) { 
		die('Invalid query: ' . mysql_error()); 
	}
	else { 
		while ($row1 = mysql_fetch_array($result1, MYSQL_ASSOC)) { 
			$imagemurl[1] 	= $row1["imagem"];
			$nheight[1] 	= $row1["nheight"];
			$nwidth[1] 		= $row1["nwidth"];
			$nleft[1] 		= $row1["nleft"];
			$ntop[1] 		= $row1["ntop"];
		}
	}
	$sql_statement2  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 2  order by datainsert desc limit 1";
	$result2 = mysql_query($sql_statement2);
	if (!$result2) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row2 = mysql_fetch_array($result2, MYSQL_ASSOC)) { 
            $imagemurl[2]   = $row2["imagem"];
            $nheight[2]     = $row2["nheight"];
            $nwidth[2]      = $row2["nwidth"];
            $nleft[2]       = $row2["nleft"];
            $ntop[2]        = $row2["ntop"];
    	}
	}
	$sql_statement3  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 3  order by datainsert desc limit 1";
	$result3 = mysql_query($sql_statement3);
	if (!$result3) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row3 = mysql_fetch_array($result3, MYSQL_ASSOC)) { 
            $imagemurl[3]   = $row3["imagem"];
            $nheight[3]     = $row3["nheight"];
            $nwidth[3]      = $row3["nwidth"];
            $nleft[3]       = $row3["nleft"];
            $ntop[3]        = $row3["ntop"];
    	}
	}
	$sql_statement4  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 4  order by datainsert desc limit 1";
	$result4 = mysql_query($sql_statement4);
	if (!$result4) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row4 = mysql_fetch_array($result4, MYSQL_ASSOC)) { 
            $imagemurl[4]   = $row4["imagem"];
            $nheight[4]     = $row4["nheight"];
            $nwidth[4]      = $row4["nwidth"];
            $nleft[4]       = $row4["nleft"];
            $ntop[4]        = $row4["ntop"];
    	}
	}
	$sql_statement5  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 5  order by datainsert desc limit 1";
	$result5 = mysql_query($sql_statement5);
	if (!$result5) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row5 = mysql_fetch_array($result5, MYSQL_ASSOC)) { 
            $imagemurl[5]   = $row5["imagem"];
            $nheight[5]     = $row5["nheight"];
            $nwidth[5]      = $row5["nwidth"];
            $nleft[5]       = $row5["nleft"];
            $ntop[5]        = $row5["ntop"];
    	}
	}
	$sql_statement6  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 6  order by datainsert desc limit 1";
	$result6 = mysql_query($sql_statement6);
	if (!$result6) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row6 = mysql_fetch_array($result6, MYSQL_ASSOC)) { 
            $imagemurl[6]   = $row6["imagem"];
            $nheight[6]     = $row6["nheight"];
            $nwidth[6]      = $row6["nwidth"];
            $nleft[6]       = $row6["nleft"];
            $ntop[6]        = $row6["ntop"];
    	}
	}
?>
	<table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<div id="divl6a" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[1]; ?>" 
						 id="imgl6a" 
						 style="margin-top: <?php echo $ntop[1]; ?>px;
						 		margin-left: <?php echo $nleft[1]; ?>px;
						 		width: <?php echo $nwidth[1]; ?>px;
						 		height: <?php echo $nheight[1]; ?>px;" 
						 width="<?php echo $nwidth[1]; ?>" 
						 height="<?php echo $nheight[1]; ?>">
				</div>
			</td>
			<td>
				<div id="divl6b" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[2]; ?>" 
						 id="imgl6b" 
						 style="margin-top: <?php echo $ntop[2]; ?>px;
						 		margin-left: <?php echo $nleft[2]; ?>px;
						 		width: <?php echo $nwidth[2]; ?>px;
						 		height: <?php echo $nheight[2]; ?>px;" 
						 width="<?php echo $nwidth[2]; ?>" 
						 height="<?php echo $nheight[2]; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="divl6c" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[3]; ?>" 
						 id="imgl6c" 
						 style="margin-top: <?php echo $ntop[3]; ?>px;
						 		margin-left: <?php echo $nleft[3]; ?>px;
						 		width: <?php echo $nwidth[3]; ?>px;
						 		height: <?php echo $nheight[3]; ?>px;" 
						 width="<?php echo $nwidth[3]; ?>" 
						 height="<?php echo $nheight[3]; ?>">
				</div>
			</td>
			<td>
				<div id="divl6d" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[4]; ?>" 
						 id="imgl6d" 
						 style="margin-top: <?php echo $ntop[4]; ?>px;
						 		margin-left: <?php echo $nleft[4]; ?>px;
						 		width: <?php echo $nwidth[4]; ?>px;
						 		height: <?php echo $nheight[4]; ?>px;" 
						 width="<?php echo $nwidth[4]; ?>" 
						 height="<?php echo $nheight[4]; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="divl6e" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[5]; ?>" 
						 id="imgl6e" 
						 style="margin-top: <?php echo $ntop[5]; ?>px;
						 		margin-left: <?php echo $nleft[5]; ?>px;
						 		width: <?php echo $nwidth[5]; ?>px;
						 		height: <?php echo $nheight[5]; ?>px;" 
						 width="<?php echo $nwidth[5]; ?>" 
						 height="<?php echo $nheight[5]; ?>">
				</div>
			</td>
			<td>
				<div id="divl6f" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[6]; ?>" 
						 id="imgl6f" 
						 style="margin-top: <?php echo $ntop[6]; ?>px;
						 		margin-left: <?php echo $nleft[6]; ?>px;
						 		width: <?php echo $nwidth[6]; ?>px;
						 		height: <?php echo $nheight[6]; ?>px;" 
						 width="<?php echo $nwidth[6]; ?>" 
						 height="<?php echo $nheight[6]; ?>">
				</div>
			</td>
		</tr>
	</table>
<?php } ?>
<?php //Layout 8 Foto
	if ($layout == 3) { 
	$sql_statement1  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 1  order by datainsert desc limit 1";
	$result1 = mysql_query($sql_statement1);
	if (!$result1) { 
		die('Invalid query: ' . mysql_error()); 
	}
	else { 
		while ($row1 = mysql_fetch_array($result1, MYSQL_ASSOC)) { 
			$imagemurl[1] 	= $row1["imagem"];
			$nheight[1] 	= $row1["nheight"];
			$nwidth[1] 		= $row1["nwidth"];
			$nleft[1] 		= $row1["nleft"];
			$ntop[1] 		= $row1["ntop"];
		}
	}
	$sql_statement2  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 2  order by datainsert desc limit 1";
	$result2 = mysql_query($sql_statement2);
	if (!$result2) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row2 = mysql_fetch_array($result2, MYSQL_ASSOC)) { 
            $imagemurl[2]   = $row2["imagem"];
            $nheight[2]     = $row2["nheight"];
            $nwidth[2]      = $row2["nwidth"];
            $nleft[2]       = $row2["nleft"];
            $ntop[2]        = $row2["ntop"];
    	}
	}
	$sql_statement3  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 3  order by datainsert desc limit 1";
	$result3 = mysql_query($sql_statement3);
	if (!$result3) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row3 = mysql_fetch_array($result3, MYSQL_ASSOC)) { 
            $imagemurl[3]   = $row3["imagem"];
            $nheight[3]     = $row3["nheight"];
            $nwidth[3]      = $row3["nwidth"];
            $nleft[3]       = $row3["nleft"];
            $ntop[3]        = $row3["ntop"];
    	}
	}
	$sql_statement4  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 4  order by datainsert desc limit 1";
	$result4 = mysql_query($sql_statement4);
	if (!$result4) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row4 = mysql_fetch_array($result4, MYSQL_ASSOC)) { 
            $imagemurl[4]   = $row4["imagem"];
            $nheight[4]     = $row4["nheight"];
            $nwidth[4]      = $row4["nwidth"];
            $nleft[4]       = $row4["nleft"];
            $ntop[4]        = $row4["ntop"];
    	}
	}
	$sql_statement5  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 5  order by datainsert desc limit 1";
	$result5 = mysql_query($sql_statement5);
	if (!$result5) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row5 = mysql_fetch_array($result5, MYSQL_ASSOC)) { 
            $imagemurl[5]   = $row5["imagem"];
            $nheight[5]     = $row5["nheight"];
            $nwidth[5]      = $row5["nwidth"];
            $nleft[5]       = $row5["nleft"];
            $ntop[5]        = $row5["ntop"];
    	}
	}
	$sql_statement6  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 6  order by datainsert desc limit 1";
	$result6 = mysql_query($sql_statement6);
	if (!$result6) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row6 = mysql_fetch_array($result6, MYSQL_ASSOC)) { 
            $imagemurl[6]   = $row6["imagem"];
            $nheight[6]     = $row6["nheight"];
            $nwidth[6]      = $row6["nwidth"];
            $nleft[6]       = $row6["nleft"];
            $ntop[6]        = $row6["ntop"];
    	}
	}
	$sql_statement7  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 7  order by datainsert desc limit 1";
	$result7 = mysql_query($sql_statement7);
	if (!$result7) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row7 = mysql_fetch_array($result7, MYSQL_ASSOC)) { 
            $imagemurl[7]   = $row7["imagem"];
            $nheight[7]     = $row7["nheight"];
            $nwidth[7]      = $row7["nwidth"];
            $nleft[7]       = $row7["nleft"];
            $ntop[7]        = $row7["ntop"];
    	}
	}
	$sql_statement8  = "SELECT * FROM cpi_capasconstrucao WHERE idcsession = $gidcsession AND modelo = $gmodelo AND layout = $glayout AND posicao = 8  order by datainsert desc limit 1";
	$result8 = mysql_query($sql_statement8);
	if (!$result8) { 
	        die('Invalid query: ' . mysql_error()); 
	}
	else { 
	        while ($row8 = mysql_fetch_array($result8, MYSQL_ASSOC)) { 
            $imagemurl[8]   = $row8["imagem"];
            $nheight[8]     = $row8["nheight"];
            $nwidth[8]      = $row8["nwidth"];
            $nleft[8]       = $row8["nleft"];
            $ntop[8]        = $row8["ntop"];
    	}
	}
?>
	<table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<div id="divl8a" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[1]; ?>" 
						 id="imgl8a" 
						 style="margin-top: <?php echo $ntop[1]; ?>px;
						 		margin-left: <?php echo $nleft[1]; ?>px;
						 		width: <?php echo $nwidth[1]; ?>px;
						 		height: <?php echo $nheight[1]; ?>px;" 
						 width="<?php echo $nwidth[1]; ?>" 
						 height="<?php echo $nheight[1]; ?>">
				</div>
			</td>
			<td>
				<div id="divl8b" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[2]; ?>" 
						 id="imgl8b" 
						 style="margin-top: <?php echo $ntop[2]; ?>px;
						 		margin-left: <?php echo $nleft[2]; ?>px;
						 		width: <?php echo $nwidth[2]; ?>px;
						 		height: <?php echo $nheight[2]; ?>px;" 
						 width="<?php echo $nwidth[2]; ?>" 
						 height="<?php echo $nheight[2]; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="divl8c" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[3]; ?>" 
						 id="imgl8c" 
						 style="margin-top: <?php echo $ntop[3]; ?>px;
						 		margin-left: <?php echo $nleft[3]; ?>px;
						 		width: <?php echo $nwidth[3]; ?>px;
						 		height: <?php echo $nheight[3]; ?>px;" 
						 width="<?php echo $nwidth[3]; ?>" 
						 height="<?php echo $nheight[3]; ?>">
				</div>
			</td>
			<td>
				<div id="divl8d" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[4]; ?>" 
						 id="imgl8d" 
						 style="margin-top: <?php echo $ntop[4]; ?>px;
						 		margin-left: <?php echo $nleft[4]; ?>px;
						 		width: <?php echo $nwidth[4]; ?>px;
						 		height: <?php echo $nheight[4]; ?>px;" 
						 width="<?php echo $nwidth[4]; ?>" 
						 height="<?php echo $nheight[4]; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="divl8e" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[5]; ?>" 
						 id="imgl8e" 
						 style="margin-top: <?php echo $ntop[5]; ?>px;
						 		margin-left: <?php echo $nleft[5]; ?>px;
						 		width: <?php echo $nwidth[5]; ?>px;
						 		height: <?php echo $nheight[5]; ?>px;" 
						 width="<?php echo $nwidth[5]; ?>" 
						 height="<?php echo $nheight[5]; ?>">
				</div>
			</td>
			<td>
				<div id="divl8f" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[6]; ?>" 
						 id="imgl8f" 
						 style="margin-top: <?php echo $ntop[6]; ?>px;
						 		margin-left: <?php echo $nleft[6]; ?>px;
						 		width: <?php echo $nwidth[6]; ?>px;
						 		height: <?php echo $nheight[6]; ?>px;" 
						 width="<?php echo $nwidth[6]; ?>" 
						 height="<?php echo $nheight[6]; ?>">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="divl8g" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[7]; ?>" 
						 id="imgl8g" 
						 style="margin-top: <?php echo $ntop[7]; ?>px;
						 		margin-left: <?php echo $nleft[7]; ?>px;
						 		width: <?php echo $nwidth[7]; ?>px;
						 		height: <?php echo $nheight[7]; ?>px;" 
						 width="<?php echo $nwidth[7]; ?>" 
						 height="<?php echo $nheight[7]; ?>">
				</div>
			</td>
			<td>
				<div id="divl8h" style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
					<img src="<?php echo $imagemurl[8]; ?>" 
						 id="imgl8h" 
						 style="margin-top: <?php echo $ntop[8]; ?>px;
						 		margin-left: <?php echo $nleft[8]; ?>px;
						 		width: <?php echo $nwidth[8]; ?>px;
						 		height: <?php echo $nheight[8]; ?>px;" 
						 width="<?php echo $nwidth[8]; ?>" 
						 height="<?php echo $nheight[8]; ?>">
				</div>
			</td>
		</tr>
	</table>
<?php } ?>

<!-- Mascaras -->
<div style="position: absolute; top: 0px; left: 0px; margin-left: 0px; padding: 0px; height: 570px; width: 330px; background-image: url(https://www.capasparaiphone.com.br/app/img/mask-<?php echo $_GET["m"]; ?>.png); background-repeat: no-repeat no-repeat;">&nbsp;</div>







