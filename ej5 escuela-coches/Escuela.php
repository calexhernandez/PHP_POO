<?php 


class Escuela 
{ 
	
private $_nombre; 
private $_direccion;

private $_ninos = array(); 
	
	public function __construct($nombre,$direccion) { 
		$this->_nombre = $nombre; 
		$this->_direccion = $direccion;
	} 
	
	public function addNino(Nino $nino) { 
		$this->_ninos[] = $nino; 
	} 


public function buscaNino($nombre)
{
	
	foreach ($this->_ninos as $nino)
	{
		
		 if($nino->getNombre() == $nombre)
		 {
		 	echo $nino->getNombre();
		 }
		
	}	
	
}

}
