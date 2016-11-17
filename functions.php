<?php
	require("../../config.php");
	
	session_start();
	
	$database = "if16_stivsire_4";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
?>