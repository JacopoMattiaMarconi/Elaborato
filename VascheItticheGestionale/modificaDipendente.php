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
<center>
<div class="w-50 p-3" style="background-color: #e3f2fd;">
<?php
	if ($_POST) {
		$idDipendente= getArr($_POST, "id");
        $nomeDipendente= getArr($_POST, "nome");
        $cognomeDipendente= getArr($_POST, "cognome");
        $mailDipendente= getArr($_POST, "mail");
		$telefonoDipendente= getArr($_POST, "telefono");
        $indirizzoDipendente= getArr($_POST, "indirizzo");
        $ruoloDipendente= getArr($_POST, "ruolo");
        $dataNDipendente= getArr($_POST, "data");
		$codFiscDipendente= getArr($_POST, "codfisc");

echo"<form action=\"doModificaDipendente.php\" method=\"POST\">";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Nome</label><div class=\"col-sm-10\"><input type=\"text\" class=\"form-control\" name=\"nome\" value=\"$nomeDipendente\"></div></div>";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Cognome</label><div class=\"col-sm-10\"><input type=\"text\" class=\"form-control\" name=\"cognome\" value=\"$cognomeDipendente\"></div></div>";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Codice fiscale</label><div class=\"col-sm-10\"><input type=\"text\" class=\"form-control\" name=\"codfisc\" value=\"$codFiscDipendente\"></div></div>";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Data di nascita</label><div class=\"col-sm-10\"><input type=\"text\" class=\"form-control\" name=\"data\" value=\"$dataNDipendente\"></div></div>";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Indirizzo</label><div class=\"col-sm-10\"><input type=\"text\" class=\"form-control\" name=\"indirizzo\" value=\"$indirizzoDipendente\"></div></div>";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Mail</label><div class=\"col-sm-10\"><input type=\"mail\" class=\"form-control\" name=\"mail\" value=\"$mailDipendente\"></div></div>";
echo"  <div class=\"form-group row\"><label class=\"col-sm-2 col-form-label\">Telefono</label><div class=\"col-sm-10\"><input type=\"text\" class=\"form-control\" name=\"telefono\" value=\"$telefonoDipendente\"></div></div>";
echo"  <fieldset class=\"form-group\">";
echo"    <div class=\"row\">";
echo"      <legend class=\"col-form-label col-sm-2 pt-0\">Ruolo</legend>";
echo"      <div class=\"col-sm-10\">";

			if ($ruoloDipendente=="Personale"){
echo"        <div class=\"form-check\">";
echo"          <input class=\"form-check-input\" type=\"radio\" name=\"ruolo\" value=\"Personale\" checked>";
echo"          <label class=\"form-check-label\">";
echo"            Personale";
echo"          </label>";
echo"        </div>";
			}
			else{
echo"        <div class=\"form-check\">";
echo"          <input class=\"form-check-input\" type=\"radio\" name=\"ruolo\" value=\"Personale\">";
echo"          <label class=\"form-check-label\">";
echo"            Personale";
echo"          </label>";
echo"        </div>";				
			}
			
			if($ruoloDipendente=="Amministrativo"){
echo"        <div class=\"form-check\">";
echo"          <input class=\"form-check-input\" type=\"radio\" name=\"ruolo\" value=\"Amministrativo\" checked>";
echo"         <label class=\"form-check-label\">";
echo"            Amministrativo";
echo"          </label>";
echo"        </div>";
			}
			else{
echo"        <div class=\"form-check\">";
echo"          <input class=\"form-check-input\" type=\"radio\" name=\"ruolo\" value=\"Amministrativo\">";
echo"         <label class=\"form-check-label\">";
echo"            Amministrativo";
echo"          </label>";
echo"        </div>";	
			}

			if($ruoloDipendente=="Tecnico"){
echo"        <div class=\"form-check\">";
echo"          <input class=\"form-check-input\" type=\"radio\" name=\"ruolo\" value=\"Tecnico\" checked>";
echo"          <label class=\"form-check-label\">";
echo"            Tecnico";
echo"          </label>";
echo"        </div>";
echo"      </div>";
			}
			else{
echo"        <div class=\"form-check\">";
echo"          <input class=\"form-check-input\" type=\"radio\" name=\"ruolo\" value=\"Tecnico\">";
echo"          <label class=\"form-check-label\">";
echo"            Tecnico";
echo"          </label>";
echo"        </div>";
echo"      </div>";				
			}

echo"    </div>";
echo"  </fieldset>";
echo"  <div class=\"form-group row\">";
echo"    <div class=\"col-sm-10\">";
echo"      <button type=\"submit\" class=\"btn btn-primary\">Modifica</button>";
echo"    </div>";
echo"  </div>";
echo"</form>";
	}
?>
</div>
<br><br><br>
</center>
</body>
</html>