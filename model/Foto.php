<?php
	Class Foto{
		public $id_foto;
		public $caminho;
		public $hint;
	
		public function getId(){
			return $this->id_foto;
		}	

		public function setId($value){
			$this->id_foto= $value;
		}	

		public function setCaminho($value){
			$this->caminho= $value;
		}

		public function getCaminho(){
			return $this->caminho;
		}
		public function setHint($value){
			$this->hint= $value;
		}

		public function getHint(){
			return $this->hint;
		}

	}

?>