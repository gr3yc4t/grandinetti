<?php
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
	}