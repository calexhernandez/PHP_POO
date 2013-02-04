<?php 
require_once 'ImprimibleInterface.php';
class Curriculum implements Imprimible
{
	/* inmediatamente de hacer el implements,
	 * si intentamos ejecutar el sistema, nos dira
	 * que nos falta el metodo imprime, por lo tanto 
	 * lo agregamnos a continuacion
	 */
	
	public function imprime()
	{
		return 'El curriculum se imprime distinto que una hora comun';
	}
}