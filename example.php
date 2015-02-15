<?php

	require("libantixss.php");
	
	$var = new libantixss;

	//Use flag "1" if you need to start a string with a capital letter. 
	echo $var->xss_sanitized($_GET['t'],1);
	//Use flag "0" if you need to sanitize any kind of input value. 
	echo $var->xss_sanitized($_GET['t'],0);

?>
