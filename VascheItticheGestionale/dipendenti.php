<?php 
session_start();
include 'libs/util.php';
include 'libs/db_connect.php';
?>
<html>
<head>
	<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(ZG52MF.png);">
<?php 
include 'menu1.php';
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script> 
<center>
<div class="w-75 p-3" style="background-color: #e3f2fd;">
<?php
	$query = "select * from dipendenti";
	try{
		$res=$con->query($query);
	}catch(PDOException $ex) {
	    include '';
	} 
	    echo "<table id=\"example\" class=\"display\" style=\"width:100%\">";
	        echo "<thead><tr>";
				echo "<th>nome</th>";
				echo "<th>cognome</th>";
				echo "<th>codice fiscale</th>";
				echo "<th>data di nascita</th>";
				echo "<th>ruolo</th>";
				echo "<th></th>";
	        echo "</tr></thead><tbody>";
	  
			foreach ($res as $row) {
				$idDipendente=$row['idDipendente'];
				$nomeDipendente=$row['nomeDipendente'];
				$cognomeDipendente=$row['cognomeDipendente'];
				$mailDipendente=$row['mailDipendente'];
				$telefonoDipendente=$row['telefonoDipendente'];
				$codFiscDipendente=$row['codFiscDipendente'];
				$dataNDipendente=$row['dataNDipendente'];
				$ruoloDipendente=$row['ruoloDipendente'];
				$indirizzoDipendente=$row['indirizzoDipendente'];
	            echo "<tr>";
					echo "<td>".$nomeDipendente."</td>";
					echo "<td>".$cognomeDipendente."</td>";
					echo "<td>".$codFiscDipendente."</td>";
					echo "<td>".$dataNDipendente."</td>";
					echo "<td>".$ruoloDipendente."</td>";
					echo "<td><form method=\"POST\" action=\"modificaDipendente.php\">
					<input type=\"hidden\" name=\"id\" value=\"$idDipendente\"/>
					<input type=\"hidden\" name=\"nome\" value=\"$nomeDipendente\"/>
					<input type=\"hidden\" name=\"cognome\" value=\"$cognomeDipendente\"/>
					<input type=\"hidden\" name=\"mail\" value=\"$mailDipendente\"/>
					<input type=\"hidden\" name=\"telefono\" value=\"$telefonoDipendente\"/>
					<input type=\"hidden\" name=\"codfisc\" value=\"$codFiscDipendente\"/>
					<input type=\"hidden\" name=\"data\" value=\"$dataNDipendente\"/>
					<input type=\"hidden\" name=\"ruolo\" value=\"$ruoloDipendente\"/>
					<input type=\"hidden\" name=\"indirizzo\" value=\"$indirizzoDipendente\"/>
					<input type=\"submit\" value=\"modifica\"/>
					</form></td>";
	            echo "</tr>";
	        }
	    echo "</tbody></table>";
?> 
</div>
<br><br><br>
</center>
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