<?php 


require_once 'Persona.php';
require_once 'Encuesta.php';

class Empresa
{
	private $_colPersonas = array();
	private $_colEncuestas = array();
	
	public function __construct()
	{
		$encuesta = new Encuesta('masculino');
		$encuesta->addPregunta("Tienes Conocimientos de POO");
		$encuesta->addPregunta("Tienes Conocimientos de Bases de datos");
		
		$this->_colEncuestas[] = $encuesta;
				
	}
	
	public function addPersona(Persona $persona)
	{
		$this->_colPersonas[] = $persona;
	}
	
	public function addEncuesta(Encuesta $encuesta)
	{
		$this->_colEncuestas[]=$encuesta;
		
	}
	
	public function getEncuesta($nombre)
	{
		foreach ($this->_colEncuestas as $encuesta){
			if($encuesta->getNombre() == $nombre){
				return $encuesta;
			}
		}
	}
	
}