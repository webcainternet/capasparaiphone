<?php
session_start();
$session_id='1'; //$session id
$path = "uploads/";

function getExtension($str) 
{

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

	$valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					 $ext = getExtension($name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024*5))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$actual_image_name = str_replace(".", "", $actual_image_name);
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{ 					
									//echo "<img src='uploads/".$actual_image_name."'  class='preview'>";
									?>	

									<div id="div<?php echo $actual_image_name; ?>" style="background-color: #FFFFFF; width: 50px; float: left; overflow: hidden; height: 50px;
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
									"><img src="uploads/<?php echo $actual_image_name; ?>" id="<?php echo $actual_image_name; ?>" draggable="true" ondragstart="drag(event)" style="max-width:100%; max-height:100%;">
									</div>

									<?php
									
								}
							else
								echo "Fail upload folder with read access.";
						}
						else
						echo "Image file size max 5 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>