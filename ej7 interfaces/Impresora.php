<?php 

require_once 'ImprimibleInterface.php';

class Impresora
{
	public function imprimir(Imprimible $algo)
	{
		echo $algo->imprime();
	}
}

