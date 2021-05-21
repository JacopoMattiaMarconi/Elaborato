<?php 
session_start();
include 'libs/util.php';
include 'libs/db_connect.php';
?>
<html>
<head>
<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(SfondiAPP/sergio-capuzzimati-SITwDBhar6w-unsplash.jpg);">
<?php 
include 'menuTecnico2.php';
?>
<center>
<div class="w-50 p-3" style="background-color: #eee;">

<?php
$query = "select * from modelli";
	try{
		$res=$con->query($query);
	}catch(PDOException $ex) {
	    include '';
	}
	$i=0;
	echo"<center><table>";
	foreach ($res as $row) {
		$i=$i+1;
		$idModello=$row['idModello'];
		$descrizioneModello=$row['descrizioneModello'];
		$nomeModello=$row['nomeModello'];
		if($i==1){
			echo"<tr>";
		}
		echo"<td>";
		echo"<div class=\"row\">";
		echo"  	<div class=\"col-sm-6\">";
		echo"   <div class=\"card\" style=\"heigth:250; width:300;\">";
		echo"<center>";
		echo'	<img src="data:image/jpeg;base64,'.base64_encode($row['fotoModello'] ).'" style="heigth:200; width:250;""/>';
		echo"   <div class=\"card-body\">";
		echo"   <h5 class=\"card-title\">$nomeModello</h5>";
		echo"   <p class=\"card-text\">$descrizioneModello</p>";
		echo"   <form method=\"POST\" action=\"#\">
					<input type=\"hidden\" name=\"id\" value=\"$idModello\"/>
					<input type=\"submit\" value=\"maggiori informazioni\"/>
				</form>";
		echo"</center>";
		echo"   </div>";
		echo"   </div>";
		echo"</div>";
		if($i==2){
			echo"</td></tr>";
			$i=0;
		}
		else{
			echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></td>";
		}
	}
	echo"</table></center>";
?>

</div>
</center>
<br><br><br>
</body>
</html>