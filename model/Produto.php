<?php
	Class Produto{
		public $id_produto;
		public $nome;
		public $fabrica;
		public $ativo;
		public $lancamento;
		public $categorias=array();
		public $caracteristicas=array();
		public $fotos=array();
		public $fotosCaracteristicas=array();
		public $valores=array();

		public function getId(){
			return $this->id_produto;
		}	

		public function getCategorias(){
			return $this->categorias;
		}

		public function addCategoria($value){
			array_unshift($this->categorias,$value);
		}
		public function getCaracteristicas(){
			return $this->caracteristicas;
		}

		public function addFoto($value){
			array_unshift($this->fotos,$value);
		}
		public function getFotos(){
			return $this->fotos;
		}

		public function addValor($value){
			array_unshift($this->valores,$value);
		}
		public function getValores(){
			return $this->valores;
		}

		public function addFotoCaracteristica($value){
			array_unshift($this->fotosCaracteristicas,$value);
		}
		public function getFotosCaracteristica(){
			return $this->fotosCaracteristicas;
		}

		public function addCaracteristica($value){
			array_unshift($this->caracteristicas,$value);
		}

		public function setId($value){
			$this->id_produto= $value;
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