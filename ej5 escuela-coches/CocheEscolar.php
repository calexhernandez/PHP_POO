<?php 
class CocheEscolar
{

	private $_barrio;
	private $_matricula;
	private $_conductor;
	private $_ayudante;
	
	private $_ninos = array(); 
	
	public function __construct($barrio,$matricula,$conductor,$ayudante)
	{
	
	$this->_barrio = $barrio;
	$this->_matricula = $matricula;
	$this->_conductor = $conductor;
	$this->_ayudante = $ayudante;
	

	}
	
	public function addNino(Nino $nino) 
	{ 
	$this->_ninos[] = $nino; 
	} 
	
	public function getNinos()
	{
	
		foreach ($this->_ninos as $nino)
		{			 
			 	echo $nino->getNombre();			 	
		}	
		
	}

	public function getMatricula(){
		return $this->_matricula;
	}


	public function buscaNino($nombre)
	{
		
		foreach ($this->_ninos as $nino)
		{
			
			 if($nino->getNombre() == $nombre)
			 {
			 	return $this->getMatricula();
			 }
			
		 }	
		
	 }
	
	

}