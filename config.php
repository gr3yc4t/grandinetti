<?php
	//Abilitazione error reporting per debug
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	//connessione al db
	define("MYSQL_HOST", "localhost");
	define("MYSQL_USERNAME", "grandinetti");
	define("MYSQL_PASSWORD", "grandinetti");
	define("MYSQL_DB", "grandinetti");
	$db = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DB);
	if($db->connect_errno){
		die("Errore connessione al database");
	}
	
	
	function dbg($text){
		if(isset($_GET['d']))
			echo "<p><b>DEBUG</b> $text </p>";
	}
