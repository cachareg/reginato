<?php
	Class Produto{
		public $id;
		public $nome;
		public $fabrica;
		public $ativo;
		public $lancamento;

		function getId(){
			return $this->id;
		}	

		public function setId($value){
			$this->id= $value;
		}	

		public function setNome($value){
			$this->nome= $value;
		}

		public function setLancamento($value){
			$this->lancamento= $value;
		}

		public function setAtivo($value){
			$this->ativo= $value;
		}

		public function setFabrica($value){
			$this->fabrica= $value;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getFabrica(){
			return $this->fabrica;
		}

		public function getAtivo(){
			return $this->ativo;
		}

		public function getLancamento(){
			return $this->lancamento;
		}

	}

?>