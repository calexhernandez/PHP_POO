<?php 
require_once 'Autor.php'; 
class Libro 
{ 
	private $_titulo; 
	private $_tema; 
	private $_a�o; 
	private $_colAutores = array(); 
	public function __construct($titulo,$tema,$a�o) 
	{ 
		$this->_titulo = $titulo; 
		$this->_tema = $tema; 
		$this->_a�o = $a�o; 
	} 
	
	public function addAutor($nombre,$apellido) 
	{ 
		$this->_colAutores[] = new Autor($nombre,$apellido); 
	} 
	
	public function getTitulo() 
	{ 
		return $this->_titulo; 
	} 
	
	public function getTema() 
	{ 
		return $this->_tema; 
	} 
	
	public function getA�o() 
	{ 
		return $this->_a�o; 
	} 
	
	public function getAutores() 
	{ 
		return $this->_colAutores; 
	} 
	
	public function __toString() { 
		return $this->_titulo; 
	} 
}