<?php
session_start();
include 'libs/util.php';
include 'libs/db_connect.php';
$mail=getArr($_SESSION,'mail');
$nome=getArr($_SESSION,'nome');
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<br><br><br>
<?php
if ($nome=="" && $mail==""){
	header('Location: login.php');
}
echo"<a class=\"navbar-brand\" href=\"#\" style=\"font-size:30;\">Ciao, $nome!</a>";
?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="acquista.php" style="font-size:25;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acquista&nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noleggi.php" style="font-size:25;">I miei noleggi&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prenotazione.php" style="font-size:25; color:red;">Richiedi visita&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size:25;">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="cerca" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
    </form>
  </div>
</nav>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<br><br><br><br><br><br><br>
</body>
</html>