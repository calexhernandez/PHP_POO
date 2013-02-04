<?php
require_once 'dispositivos/LectorInterface.php';
require_once 'dispositivos/EscritorInterface.php';

abstract class MaquinaDeEscribir
{
	static public function run(Lector $lector, Escritor $escritor)
	{
		$escritor->escribir($lector->leer());
	}
}
