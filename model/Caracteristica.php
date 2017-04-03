<?php
	Class Caracteristica{
		public $id_caracteristica;
		public $nome;
		public $valoresSelecionadosPorFoto;
		public $valores = array();
		public $fotos = array();

		public function getId(){
			return $this->id_caracteristica;
		}	

		public function isValoresSelecionadosPorFoto(){
			return $this->valoresSelecionadosPorFoto;
		}	

		public function setValoresSelecionadosPorFoto($value){
			$this->valoresSelecionadosPorFoto= $value;
		}	

		public function setId($value){
			$this->id_caracteristica= $value;
		}	

		public function setNome($value){
			$this->nome= $value;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getValores(){
			return $this->valores;
		}

		public function addValor($valor){
			array_unshift($this->valores, $valor);
		}

		public function getFotos(){
			return $this->fotos;
		}

		public function addFoto($valor){
			array_unshift($this->fotos, $valor);
		}

	}

?>