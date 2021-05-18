<html>
<head>
<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(SfondiAPP/launde-morel-YYNLQhdGv7A-unsplash.jpg);">
<?php 
include 'menuTecnico.php';
?>
<center>
<div class="w-75 p-3" style="background-color: #eee;">

<?php
$i=5;
while($i!=0){
	echo"<div class=\"row\">";
	echo"  <div class=\"col-sm-6\">";
	echo"    <div class=\"card\">";
	echo"	<img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">";
	echo"      <div class=\"card-body\">";
	echo"        <h5 class=\"card-title\">Special title treatment</h5>";
	echo"        <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>";
	echo"        <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>";
	echo"      </div>";
	echo"    </div>";
	echo"  </div>";
	echo"  <div class=\"col-sm-6\">";
	echo"    <div class=\"card\">";
	echo"	<img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">";
	echo"      <div class=\"card-body\">";
	echo"        <h5 class=\"card-title\">Special title treatment</h5>";
	echo"        <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>";
	echo"        <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>";
	echo"      </div>";
	echo"    </div>";
	echo"  </div>";
	echo"</div>";
	echo"<br><br>";
	$i=$i-1;
}
?>

</div>
</center>
<br><br><br>
</body>
</html>