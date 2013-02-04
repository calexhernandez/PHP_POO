<?php

require_once 'LectorInterface.php'

class Teclado implements Lector
{
	public function leer()
	{
		return "texto ingresado";
	}
}