<!DOCTYPE html>
<html lang="da">
<head>
  <?php include 'includes/favicons.php';?>
  <title>Status  - DoggyCraft</title>
  <?php include 'includes/bootstrap.php';?>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <style>


  </style>
</head>
<body>
<?php include 'includes/facebook.php';?>
<div class="row">
<?php include 'includes/header.php';?>
<?php include 'includes/menu.php';?>
<div class="col-6">

<?php

	include_once 'MinecraftServerStatus/status.class.php';
	$status = new MinecraftServerStatus();
	$response = $status->getStatus('doggycraft.dk');
	if(!$response) {
		echo"DoggyCraft er nede... Prøv igen senere! \n
		Ellers er der bare fejl i koden!";
	} else {
		echo nl2br ("
		Serveren DoggyCraft kører på Minecraft version ".$response['version'].", og er oppe og køre. \n
		Lige nu er der ".$response['players']." spillere online, ud af en maximum af ".$response['maxplayers']." spillere.
		DoggyCraft's motd er: ".$response['motd'].". \n 
		Serverens ping er ".$response['ping']." milisekunder.");
	}

?>

</div>
<?php include 'includes/aside.php';?>
</div>
<?php include 'includes/footer.php';?>
</body>
</html>