<?php
	require("../../../config.php");
	
	session_start();
	
	$database = "if16_doitbodyweight";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
?>