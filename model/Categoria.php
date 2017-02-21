<?php
	Class Categoria{
		public $id_categoria;
		public $nome;
	
		public function getId(){
			return $this->id_categoria;
		}	

		public function setId($value){
			$this->id_categoria= $value;
		}	

		public function setNome($value){
			$this->nome= $value;
		}

		public function getNome(){
			return $this->nome;
		}

	}

?>