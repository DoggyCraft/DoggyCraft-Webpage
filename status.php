<!DOCTYPE html>
<html lang="da">
<head>
  <?php include 'includes/favicons.php';?>
  <title>Status - DoggyCraft</title>
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
		echo"DoggyCraft is offline. Come back later! /n
		Else, there is something wrong in the code!";
	} else {
		echo nl2br ("
		The server DoggyCraft is running Minecraft version ".$response['version'].", and is up and running. \n
		Right now there is ".$response['players']." players online, out of a max. of ".$response['maxplayers']." players.
		DoggyCraft's motd is: ".$response['motd'].". \n 
		The server's ping is ".$response['ping']." milliseconds.");
	}

?>

</div>
<?php include 'includes/aside.php';?>
</div>
<?php include 'includes/footer.php';?>
</body>
</html>