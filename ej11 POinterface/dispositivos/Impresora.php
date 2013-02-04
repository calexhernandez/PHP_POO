<?php
require_once 'EscritorInterface.php';

class Impresora implements Escritor
{
	function escribir($texto)
	{
		echo $texto;
	}
}