<?php
	Class Categoria{
		public $id_categoria;
		public $nome;
		public $subcategoria;
		public $superCategoria;
		public $subcategorias = array();

		public function addSubcategoria($valor){
			$subcategorias.array_unshift($subcategorias, $valor);
		}

		public function isSubcategoria(){
			return $this->subcategoria;
		}

		public function setSubcategoria($valor){
			$this->subcategoria = $valor;
		}
		
		public function setSupercategoria($valor){
			$this->supercategoria=$valor;
		}

		public function getSuperCategoria(){
			return $this->supercategoria;
		}

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