<?php
	Class FotoCaracteristica{
		public $id_foto;
		public $caracteristica;

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
	

	}

?>