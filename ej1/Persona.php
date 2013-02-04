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
		$añoActual = date(Y);
		list($dia,$mes,$año) = explode("/", $this->_fechaNacimiento);
		
		$añoActual;
		
		if (($mes == $mesActual ) && ($dia > $diaActual)) {
			$añoActual = $añoActual - 1;
		}
		
		if ($mes > $mesActual) {
			$añoActual = $añoActual - 1;
		} 
		// ya no habria mas condiciones, ahora simplemente 
		// restamos los años y mostramos el resultado como su edad 
		
		$edad = $añoActual - $año; 
		
		return $edad;
		
	} 
	
	
}
