<?php

	require_once("sql.php");

	//error_reporting(E_ALL);
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);
	error_reporting(E_ERROR | E_PARSE);
	ini_set('display_errors', 1);

	/**
	**	dbg
	**	@param $text Il testo da visualizzare
	**
	**	Questa funzione serve per il debug : se allo script viene passato il 
	**	parametro GET 'd' essa stampa le stringhe inserite come parametro
	**/

	
	function dbg($text){
		if(isset($_GET['d'])){
			echo "<p>DEBUG : " . $text . "</p>";
		}
	}



	/**
	**	getMattonellaElements
	**	@param $id_mattonella ID della mattonella 
	**	@return (int) n_poligoni
	**	Questa funzione ritorna il numero di poligoni che ha la mattonella
	**	passata nel parametro (tramite l'ID)
	**/

	function getMattonellaElements($id_mattonella){
		global $db;

		$id_mattonella = mysqli_real_escape_string($db, $id_mattonella);

		$sql = "SELECT n_poligoni FROM mattonelle WHERE ID = $id_mattonella";
		if(!$result = $db->query($sql)){
			die("getMattonellaElements Errore query " . $db->error);
		}
		$db->close();

		if($result->num_rows != 1){
			die("Errore Strutturale");
		}

		$row = $result->fetch_object();

		return $row->n_poligoni;


	}

	/**
	**	getMattonellaColors
	**	@param $codice_mattonella	ID della mattonella
	**	@return (array)
	**
	**	Questa funzione ritorna un array contenente tutti i colori disponibili
	**	per la mattonalle (passata come parametro)
	**
	**	TODO Bug : la funzione restituisce un elemento in meno
	**/

	function getMattonellaColors($codice_mattonella){

		global $db;
		$codice_mattonella = mysqli_real_escape_string($codice_mattonella);

		$sql = "SELECT codice_colore FROM colori_disponibili WHERE codice_mattonella = $codice_mattonella";
		if(!$result = $db->query($sql)){
			die("getMattonellaColors Errore query " . $db->error);
		}

		$colors = array();
		while ($row = $result->fetch_object()){
	    	$colors[] = $row->codice_colore;
	    }

		return $colors;
	}

	/**
	**	getColorInfo
	**	@param $id_color
	**	@return (array)
	**
	**	Questa funzione ritorna un array associativo contenente le informazioni
	**	sul colore (passato come parametro)
	**
	**/
	function getColorInfo($id_color){
		global $db;
		$id_color = (int)$id_color;

		$sql = "SELECT name, filename, alias FROM colors WHERE ID = $id_color";
		if(!$result = $db->query($sql)){
			die("getColorInfo Errore query " . $db->error);
		}

		return $result->fetch_object();
	}
	

	
	/**
	**	Classe Mattonella
	**	
	**	Costruttore ($id_mattonella)
	**
	**/
	
	class Mattonella{
		
		private $ID=0;
		
		private $nome_mattonella = "";
		private $n_poligoni = 0;
		private $colors = array();
		private $svg_filename = "";
		
		/**
		**	Constructor 
		**	@param (int) $raw_id
		**	Il costruttore inizializza gli attributi della classe con i 
		**	dati relativi alla mattonella
		**
		**/
		
		public function __construct($raw_id){
			global $db;	//Connection to the database
			$ID = (int)$raw_id;
			
			$sql = "SELECT Nome, n_poligoni, svg  FROM mattonelle WHERE ID = $ID";
			if(!$result = $db->query($sql)){
				die("Errore query 1 " . $db->error . $sql);
			}
			if($result->num_rows != 1){
				die("Errore Strutturale");
			}
			$row = $result->fetch_object();
			
			$this->n_poligoni = $row->n_poligoni;
			$this->nome_mattonella = $row->Nome;
			$this->svg_filename = $row->svg;

			//Get the color Array
			$sql = "SELECT codice_colore FROM colori_disponibili WHERE codice_mattonella = $ID";
			if(!$result = $db->query($sql)){
				die("Errore query 2" . $db->error);
			}
			;

			while ($row = $result->fetch_object()){
				$this->colors[] = $row->codice_colore;
			}
		
		}
		
		public function getName(){
			return $this->nome_mattonella;
		}
		public function getNumeroPoligoni(){
			return $this->n_poligoni;
		}
		public function getSVGFilename(){
			return $this->svg_filename;
		}
		public function getColors(){
			return $this->colors;
		}
		

		public function generateSVG(){
			$col = getColorInfo($this->ID);	//Leggo i dati dei colori

			$content = file_get_contents($this->filename);	//Leggo il contenuto dell'SVG

			$pos = strpos($content, "<!-- Insert Trama Here -->");
			

			foreach($col as $val){



			}


		}

	}


	function getColorInfo($id_color){
		global $db;
		$id_color = $db->real_escape_string($id_color);

		$sql = "SELECT name, filename, alias FROM colors WHERE ID = $id_color";
		if(!$result = $db->query($sql)){
			die("getColorInfo Errore query " . $db->error);
		}
		
		$row = $result->fetch_assoc();

		return $row;
	}
	

	
	function injectSVGColors(){



	}
	
	

?>