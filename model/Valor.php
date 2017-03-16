<?php
	Class Valor{
		public $id_valor;
		public $nome;
		public $caracteristica;
		
		function getId(){
			return $this->id_valor;
		}	

		public function setId($value){
			$this->id_valor= $value;
		}	

		public function setNome($value){
			$this->nome= $value;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setCaracteristica($value){
			$this->caracteristica= $value;
		}

		
		public function getCaracteristica(){
			return $this->caracteristica;
		}


	}

?>