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
		
		echo $libro->getA�o();
		if($libro->getA�o() == $this->_ano){
			$encontrado = true;
		}
		/*foreach($libro->getA�o() as $anio){
			echo "<br>";
			$anio;
			if($anio == $this->_ano){ 
				$encontrado = true; 
			} 
		} */
		return $encontrado; 
	
	}
}

