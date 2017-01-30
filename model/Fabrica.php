<?php
	Class Fabrica{
		public $id;
		public $nome;
		public $ativo;

		function getId(){
			return $this->id;
		}	

		public function setId($value){
			$this->id= $value;
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