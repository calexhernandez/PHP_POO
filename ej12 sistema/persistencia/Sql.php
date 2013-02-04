<?php 
class Sql 
{ 
	private $_colWhere = array(); 
	private $_colSelect = array('*'); 
	private $_colInsert = array(); 
	private $_colFrom = array(); 
	private $_colFuncion = array();
	private $_colValue = array();
	
	public function addTable($table) 
	{ 
		$this->_colFrom[] = $table; 
	} 
	public function addWhere($where) 
	{ 
		$this->_colWhere[] = $where; 
	} 

	public function addFuncion($funcion)
	{
		$this->_colFuncion[] = $funcion;

	}
	
	public function addSelect($select)
	{
		$this->_colSelect[] = $select;

	}

	public function addInsert($insert)
	{
		$this->_colInsert[] = $insert;

	}
	public function addValue($value)
	{
		$this->_colValue[] = $value;
	}

	private function _generar() 
	{ 

		$funcion = implode(',',array_unique($this->_colFuncion)); 



		

switch ($funcion){ 
			case 'listado': 
			
//INSERT INTO cliente(nombreCliente,apellidosCliente) VALUES('Cesar','Lopez');

		$select = implode(',',array_unique($this->_colSelect)); 
		$from = implode(',',array_unique($this->_colFrom)); 
		$where = implode(' AND ',array_unique($this->_colWhere)); 
		
//return 'SELECT '.$select.' FROM '.$from.' WHERE '.$where; 		
		return 'INSERT INTO '.$from.' ('. $select; 
		

			break; 
			case 'insert': 
			
//INSERT INTO cliente(nombreCliente,apellidosCliente) VALUES('Cesar','Lopez');

		$select = implode(',',array_unique($this->_colSelect)); 
		$from = implode(',',array_unique($this->_colFrom)); 
		$where = implode(' AND ',array_unique($this->_colWhere)); 
		
//return 'SELECT '.$select.' FROM '.$from.' WHERE '.$where; 				

		$cadena = 'INSERT INTO '.$from.' (';

		for ($i=0; $i < count($this->_colInsert ); $i++) { 
			
			$arreglo = $this->_colInsert;
			
			if($i > 0){
				$cadena = $cadena . ',' . $arreglo[$i];	
			} 
			else
			{
				$cadena = $cadena . $arreglo[$i];	
			}

		}

		$cadena = $cadena . ') values (';

		for ($i=0; $i < count( $this->_colValue ); $i++) { 

			$arregloValues = $this->_colValue;

			if($i > 0){
				$cadena = $cadena . ",'" . $arregloValues[$i] . "'";	
			} 
			else
			{
				$cadena = $cadena . "'" . $arregloValues[$i] . "'";	
			}
			
		}
		
			
		$cadena = $cadena . ')';

		return $cadena; 
		

			break; 


			case '': 

		$select = implode(',',array_unique($this->_colSelect)); 
		$from = implode(',',array_unique($this->_colFrom)); 
		$where = implode(' AND ',array_unique($this->_colWhere)); 
		
		//return 'SELECT '.$select.' FROM '.$from.' WHERE '.$where; 
		return 'SELECT '.$select.' FROM '.$from;

			break; 

}
	
	} 
	
	public function __toString() 
	{ 
		return $this->_generar(); 
	} 
}