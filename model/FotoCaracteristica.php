<?php
	Class FotoCaracteristica{
		public $id_foto;
		public $caracteristica;
		public $nome;
		public $hint;

		public function getId(){
			return $this->id_foto;
		}	

		public function setId($value){
			$this->id_foto= $value;
		}	

		public function setCaracteristica($value){
			$this->caracteristica= $value;
		}

		public function getCaracteristica(){
			return $this->caracteristica;
		}
		public function getHint(){
			return $this->hint;
		}	

		public function setHint($value){
			$this->hint= $value;
		}
		public function getNome(){
			return $this->nome;
		}	

		public function setNome($value){
			$this->nome= $value;
		}

	}

?>