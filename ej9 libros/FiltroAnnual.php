<?php 
require_once 'CriterioFiltro.php'; 
class FiltroAnnual implements CriterioFiltro 
{ 
	private $_ano; 
	
	
	public function __construct($ano) 
	{ 
		$this->_ano = $ano; 
		 
	} 
	
	public function esSeleccionable(Libro $libro) 
	{ 
		$encontrado = false; 
		
		echo $libro->getAño();
		if($libro->getAño() == $this->_ano){
			$encontrado = true;
		}
		/*foreach($libro->getAño() as $anio){
			echo "<br>";
			$anio;
			if($anio == $this->_ano){ 
				$encontrado = true; 
			} 
		} */
		return $encontrado; 
	
	}
}

