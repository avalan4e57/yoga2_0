<?php
	$link = $_GET[alias];  
	$query = "SELECT projectName FROM asanas.program_$link"; 
	include($_SERVER[DOCUMENT_ROOT]."/inc/functions.php");
	dayProgram($query);	
?>
