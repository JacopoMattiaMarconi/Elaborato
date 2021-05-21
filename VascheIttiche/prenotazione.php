 <html>
<head>
<link rel="stylesheet" href="Stili.css" type="text/css">
</head>
<body style="background-image: url(SfondiAPP/insung-yoon-26VKCeAosV0-unsplash.jpg);">
<?php 
include 'menuCliente3.php';
?>
<center>
<div class="w-50 p-3" style="background-color: #eee;">
<form>
  <div class="align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Seleziona il motivo</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Scegli...</option>
        <option value="1">Sopraluogo</option>
        <option value="2">Assistenza tecnica</option>
        <option value="3">Collaborazione</option>
		<option value="4">Assistenza all'acquisto</option>
      </select>
    </div>
	<br><br>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Invia richiesta</button>
    </div>
  </div>
</form>
</div>
</center>
<br><br><br>
</body>
</html>