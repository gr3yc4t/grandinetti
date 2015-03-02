<?php
	define("MYSQL_USERNAME", "grandinetti");
	define("MYSQL_PASSWORD", "grandinetti");
	define("MYSQL_DB", "grandinetti");

	$db = new mysqli("localhost", MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DB);
	if($db->connect_errno){
		die("Errore connessione al database");
	}