<?php


	define("MYSQL_USERNAME", "grandinetti");
	define("MYSQL_PASSWORD", "grandinetti");
	define("MYSQL_DB", "grandinetti");


	function connect(){
		$db = new mysqli("localhost", constant("MYSQL_USERNAME"), constant("MYSQL_PASSWORD"), constant("MYSQL_DB"));
		if($db->connect_errno > 0){
			die("Errore connessione al database");
		}
		return $db;
	}





?>