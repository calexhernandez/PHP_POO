<?php
require_once "logica/MaquinaDeEscribir.php";
abstract class Index
{
	static public function run()
	{
		echo 'Ejecuto maquina de escribir->';
		MaquinaDeEscribir::run();

	}
}

Index::run();