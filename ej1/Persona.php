<?php
error_reporting(0);
/**
* 
*/

class Persona
{
	private $_nombre;
	private $_apellido;
	private $fechaNacimiento = "";
	

	public function __construct($fechaNacimiento)
	{
		   

		$this->_fechaNacimiento = $fechaNacimiento;
		

	}


	public function decirEdad()
	{
		return $this->_calcularEdad();
	}

	private function _calcularEdad()
	{
		$diaActual = date(j);
		$mesActual = date(m);
		$a�oActual = date(Y);
		list($dia,$mes,$a�o) = explode("/", $this->_fechaNacimiento);
		
		$a�oActual;
		
		if (($mes == $mesActual ) && ($dia > $diaActual)) {
			$a�oActual = $a�oActual - 1;
		}
		
		if ($mes > $mesActual) {
			$a�oActual = $a�oActual - 1;
		} 
		// ya no habria mas condiciones, ahora simplemente 
		// restamos los a�os y mostramos el resultado como su edad 
		
		$edad = $a�oActual - $a�o; 
		
		return $edad;
		
	} 
	
	
}
