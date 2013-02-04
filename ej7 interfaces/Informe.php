<?php 
require_once 'ImprimibleInterface.php';
class Informe implements Imprimible
{
	/* inmediatamente de hacer el implements,
	 * si intentamos ejecutar el sistema, nos dira
	 * que nos falta el metodo imprime, por lo tanto 
	 * lo agregamnos a continuacion
	 */
	
	public function imprime()
	{
		return 'El Informe se imprime distinto que una hora comun';
	}
	
}


