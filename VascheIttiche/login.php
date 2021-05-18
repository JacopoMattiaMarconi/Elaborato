<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="StiliLogin.css" type="text/css">
</head>
<body style="background-color:#eee;">
<?php 
include 'menu3.php';
?>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Area riservata<br> Portale di accesso</h2>
            <p>Accedi o registrati all'area riservata.</p>
         </div>
    </div>
	
      <div class="main">
         <div class="col-md-5 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>Mail</label>
                     <input type="text" class="form-control" placeholder="Mail">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Accedi</button>
                  <button type="submit" class="btn btn-secondary">Registrati</button>
               </form>
            </div>
         </div>
      </div>
	  
</body>
</html>