<?php 


require_once 'CocheEscolar.php';
require_once 'Nino.php';
require_once 'Escuela.php';

abstract class Index {
	function ejecutar() {
		
		$escuela = new Escuela('Dos Corazones','ignacio media 1212');
		$coche1 = new CocheEscolar('Barrio1','Matricula1','Conductor1','Ayudante1');
		
		$coche1->addNino(new Nino('Micaela', 'Direccion1'));
		$coche1->addNino(new Nino('Micaela2', 'Direccion2'));
		
		$ninoEncontrado = $coche1->buscaNino('Micaela');
		
		//busca niño en carro
		
		
		
		echo $ninoEncontrado;
		
		$nino1 = new Nino('Carlos','Casa');
		$nino2 = new Nino('Juan','Casa1');
		
		$escuela->addNino($nino1);
		$escuela->addNino($nino2);
		
		//busca niño en escuela
		//$escuela->buscaNino('Juan');
		
	}
}

Index::ejecutar();

