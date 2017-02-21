<?php
	Class Fabrica{
		public $id_fabrica;
		public $nome;
		public $ativo;

		function getId(){
			return $this->id_fabrica;
		}	

		public function setId($value){
			$this->id_fabrica= $value;
		}	

		public function setNome($value){
			$this->nome= $value;
		}

		
		public function setAtivo($value){
			$this->ativo= $value;
		}

		function getNome(){
			return $this->nome;
		}

		function getAtivo(){
			return $this->ativo;
		}

	}

?>