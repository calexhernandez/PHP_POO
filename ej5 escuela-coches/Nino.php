<?php 

Require_once 'Casa.php';

class Nino {
	
	Private $_nombre;
	Private $_casa;
		
	public function __construct($nombre,$direccion) {
		
		$this->_nombre = $nombre;
		$this->_casa = new Casa($direccion);
					
	}
	
	
	public function getNombre()
	{
		return $this->_nombre;	
	}
	
}