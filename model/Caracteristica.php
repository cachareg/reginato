<?php
	Class Caracteristica{
		public $id_caracteristica;
		public $nome;
		public $valoresSelecionadosPorFoto;
	
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

	}

?>