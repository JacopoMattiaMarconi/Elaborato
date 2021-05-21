<?php 
session_start();
include 'libs/util.php';
include 'libs/db_connect.php';
//$mail=getArr($_SESSION,'mail');
?>
<html>
<head>
<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(SfondiAPP/insung-yoon-26VKCeAosV0-unsplash.jpg);">
<?php 
include 'menuCliente2.php';
?>
<center>
<div class="w-50 p-3" style="background-color: #eee;">

<?php
$query = "select * from modelli m join vasche v on v.idModello=m.idModello join noleggi n on n.idVasca=v.idVasca join clienti c on c.idCliente=n.idCliente where c.mailCliente='admin@alemar.com' group by (m.idModello)";
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
					<input type=\"submit\" value=\"vedi le tue vasche\"/>
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