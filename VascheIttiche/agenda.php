<?php 
session_start();
include 'libs/util.php';
include 'libs/db_connect.php';
$mail=getArr($_POST,"mail");
?>
<html>
<head>
<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(SfondiAPP/sergio-capuzzimati-SITwDBhar6w-unsplash.jpg);">
<?php 
include 'menuTecnico3.php';
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script> 
<center>
<div class="w-50 p-3" style="background-color: #eee;">

<?php
$query = "select p.dataVisita, c.nomeCliente, c.indirizzoCliente, c.citta, p.tipologiaPrenotazione 
from prenotazioni p join dipendenti d on d.idDipendente=p.idDipendente join clienti c on 
c.idCliente=p.idCliente where d.mailDipendente='$mail' order by dataVisita";
	try{
		$res=$con->query($query);
	}catch(PDOException $ex) {
	    include '';
	}
		echo "<table id=\"example\" class=\"display\" style=\"width:100%\">";
	        echo "<thead><tr>";
				echo "<th>data</th>";
				echo "<th>motivo</th>";
				echo "<th>cliente</th>";
				echo "<th>indirizzo</th>";
				echo "<th>citta</th>";
	        echo "</tr></thead><tbody>";
	  
			foreach ($res as $row) {
	            echo "<tr>";
					echo "<td>".$row['dataVisita']."</td>";
					echo "<td>".$row['tipologiaPrenotazione']."</td>";
					echo "<td>".$row['nomeCliente']."</td>";
					echo "<td>".$row['indirizzoCliente']."</td>";
					echo "<td>".$row['citta']."</td>";
	            echo "</tr>";
	        }
	    echo "</tbody></table>";
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