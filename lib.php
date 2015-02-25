<?php

	require_once("sql.php");

	function getMattonellaElements($id_mattonella){
		$db = connect();

		$id_mattonella = $db->real_escape_string($id_mattonella);
		$sql = "SELECT n_poligoni FROM mattonelle WHERE ID = $id_mattonella";
		if(!$result = $db->query($sql)){
			die("Errore query " . $db->error);
		}

		if($result->num_rows != 1){
			die("Errore Strutturale");
		}

		$row = $result->fetch_assoc();

		return $row['n_poligoni'];


	}




?>