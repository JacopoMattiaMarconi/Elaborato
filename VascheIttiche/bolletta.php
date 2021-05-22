<html>
<head>
<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(SfondiAPP/sergio-capuzzimati-SITwDBhar6w-unsplash.jpg);">
<?php 
include 'menuCliente4.php';
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script> 
<center>
<div class="w-75 p-3" style="background-color: #eee;">

<?php
include 'libs/db_connect.php';
$mail=getArr($_SESSION,'mail');
$nome=getArr($_SESSION,'nome');

$query = "SELECT m.nomeModello, m.costoH, n.dataInizio, n.energia FROM modelli m JOIN vasche v ON 
v.idModello=m.idModello JOIN noleggi n ON n.idVasca=v.idVasca JOIN clienti c ON c.idCliente=n.idCliente 
WHERE c.mailCliente='$mail'";
	try{
		$res=$con->query($query);
	}catch(PDOException $ex) {
	    include '';
	}
	$tot=0;
	echo "<table id=\"example\" class=\"display\" style=\"width:100%\">";
	    echo "<thead><tr>";
		echo "<th>modello</th>";
		echo "<th>costo orario</th>";
		echo "<th>data inizio</th>";
		echo "<th>energia consumata</th>";
		echo "<th>costo energia</th>";
		echo "<th><b style=\"color:red;\">totale bolletta €</b></th>";
	echo "</tr></thead><tbody>";
	foreach ($res as $row) {
		$modello=$row['nomeModello'];
		$costoH=$row['costoH'];
		$dataInizio=$row['dataInizio'];
		$energia=$row['energia'];
		echo "<tr>";
			echo "<td>".$modello."</td>";
			echo "<td>".$costoH."</td>";
			echo "<td>".$dataInizio."</td>";
			echo "<td>".$energia."</td>";
			echo "<td>0.23</td>";
			$dataOdierna=date('Y/m/d');
			$data1 = strtotime($dataInizio);
			$data2 = strtotime($dataOdierna);
			$parziale = ((($data2-$data1)/3600)/1)*$costoH+$energia*0.23;
			echo"<td><b style=\"color:red;\">$parziale</b></td>";
			$tot=$tot+$parziale;
		echo"</tr>";
	}
	echo "</tbody></table>";
	echo"<center><h3 style=\"color:red;\">Il totale ammonta a € $tot.</h3></center>"
?>

</div>
</center>
<br><br><br>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     false
    } );
} );
</script>
</body>
</html>