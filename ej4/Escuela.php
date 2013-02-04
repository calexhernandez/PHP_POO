<?php 
class Escuela 
{ 
private $_nombre; 
private $_alumnos = array(); 

public function __construct($nombre) { 
	$this->_nombre = $nombre; 
} 

public function addAlumno(Persona $persona) { 
	$this->_alumnos[] = $persona; 
} 

public function __toString() { 
	$retorno = ''; 
	
	foreach ($this->_alumnos as $alumno) { 
		$retorno .= $alumno .' '; 
		
		/* * Es lo mismo que decir 
		 * * * $retorno .= $alumno->__toString() .' '; 
		 * * * solo que el objeto sabe c�mo convertirse en 
		 * * String, tema que detecta cuando se hace 
		 * * una operaci�n de suma de cadenas 
		 * * con el punto ".". 
		 * */ 
	
	} return $retorno; 
} 

}
}