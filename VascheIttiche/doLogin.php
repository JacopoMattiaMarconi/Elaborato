<?php
session_start();
include 'libs/util.php';
include 'libs/db_connect.php';

$mail=getArr($_POST,"mail");
$pw=getArr($_POST,"password");

//--------------------------------------------------------------------//
	$dataOra=date('Y/m/d H:i:s');
	$azione="tentativo di login";
	$ipAddress=$_SERVER['REMOTE_ADDR'];
	$macAddr=false;
	
	$arp='arp -a $ipAddress';
	$lines=explode("\n", $arp);
	foreach($lines as $line)
	{
	   $cols=preg_split('/\s+/', trim($line));
	   if ($cols[0]==$ipAddress)
	   {
		   $macAddr=$cols[1];
		   echo $macAddr;
	   }
	}
	if($macAddr==""){
		$macAddr="MAC";
	}

	if (!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	$query="INSERT INTO log(username,dataOra,azione,ip,MAC) VALUES (?,?,?,?,?)";
	$stmt=$con->prepare($query);
	$stmt->execute(array($mail, $dataOra, $azione, $ip, $macAddr));
//-------------------------------------------------------------------------------------//

	try {
		$query = "select * from accessi where mailAccesso= ? and password= PASSWORD(?)";
		$stmt = $con->prepare( $query );
		$stmt->bindParam(1, $mail);
		$stmt->bindParam(2, $pw);  
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		if ($row){  // password coincide 
			$mail=$row['mailAccesso'];
			$_SESSION['mail']=$mail;
			if (stripos($mail, 'allevamentoittico.com') != false) {
				header('Location: prodottiTecnico.php');
			}
			else{
				$query = "select nomeCliente from clienti where mailCliente='$mail'";
				$stmt = $con->prepare( $query );
				$stmt->execute();
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				
				if ($row){
					$nome=$row['nomeCliente'];
					$_SESSION['nome']=$nome;
				}
				header('Location: acquista.php');
			}
		}
		else{
			$user="";
			header('Location: login.php');
			session_destroy();
		}
	
	}catch(PDOException $exception){
		$user="";
		session_destroy();
		echo"Riprova più tardi";
	}
?>

   
