<?php

	require_once("sql.php");

	function getMattonellaElements($id_mattonella){
		$db = connect();

		$id_mattonella = $db->real_escape_string($id_mattonella);
		$sql = "SELECT n_poligoni FROM mattonelle WHERE ID = $id_mattonella";
		if(!$result = $db->query($sql)){
			die("Errore query " . $db->error);
		}
		$db->close();

		if($result->num_rows != 1){
			die("Errore Strutturale");
		}

		$row = $result->fetch_assoc();

		return $row['n_poligoni'];


	}

	function getMattonellaColors($codice_mattonella){
		$db = connect();
		$codice_mattonella = $db->real_escape_string($codice_mattonella);

		$sql = "SELECT codice_colore FROM colori_disponibili WHERE codice_mattonella = $codice_mattonella";
		if(!$result = $db->query($sql)){
			die("Errore query " . $db->error);
		}
		$db->close();
		$row = $result->fetch_array();

		while ($row=mysqli_fetch_row($result)){
	    	$colors[] += $row[0];
	    }

		return $colors;
	}


	function getColorInfo($id_color){
		$db = connect();
		$id_color = $db->real_escape_string($id_color);

		$sql = "SELECT name, filename, alias FROM colors WHERE ID = $id_color";
		if(!$result = $db->query($sql)){
			die("Errore query " . $db->error);
		}
		$db->close();
		
		$row = $result->fetch_assoc();

		return $row;

	}

?>