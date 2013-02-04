<?php 
require_once 'BaseDeDatos.php'; 
require_once 'MySQL.php'; 
require_once 'Sql.php'; 

abstract class Index 
{ 

	public function run() { 

		$bd = new BaseDeDatos(new MySQL()); 
		$sql = new Sql(); 
		$sql->addTable('cliente'); 
		//$sql->addWhere('idCliente = 1'); 
		
		$sql->addWhere("nombreCliente = 'Carlos' "); 
		echo "<br>";
		echo $sql; 
		$usuario = $bd->ejecutar($sql); 
		
		echo highlight_string(var_export($usuario, true)); 

		$sql2 = new sql();
		$sql2->addTable('cliente');
		$sql2->addWhere("nombreCliente = 'Miguel'" );
		$usuario2 = $bd->ejecutar($sql2);
		echo highlight_string(var_export($usuario2, true)); 



		$sql3 = new sql();
		$sql3->addTable('cliente');
		$sql3->addWhere("nombreCliente = 'Pepe'" );
		$usuario3 = $bd->ejecutar($sql3);
		echo highlight_string(var_export($usuario3, true)); 

	} 
} 

Index::run();