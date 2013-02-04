<?php 

require_once './configuracion.php'; 
require_once PER . DIRECTORY_SEPARATOR . 'BaseDeDatos.php'; 
require_once PER . DIRECTORY_SEPARATOR . 'MySQL.php'; 
require_once PER . DIRECTORY_SEPARATOR . 'Sql.php'; 

/*
require_once  'BaseDeDatos.php'; 
require_once  'MySQL.php'; 
require_once  'Sql.php'; 
*/

class UsuarioPersistencia 
{ 
	public function getAll() 
	{ 

		$bd = new BaseDeDatos(new MySQL()); //interface
		$sql = new Sql(); 
		$sql->addTable('cliente'); 

		echo $sql;
		return $bd->ejecutar($sql); 
	} 

	public static function load($id) 
	{ 
		$bd = new BaseDeDatos(new MySQL()); 
		$sql = new Sql(); 
		$sql->addTable('cliente'); 
		$sql->addWhere("idCliente = ".$id); 
		return $bd->ejecutar($sql); 
	}
	public function guardarUsuario($nombre, $apellido) 
	{ 
		$bd = new BaseDeDatos(new MySQL()); 
		$sql = new Sql(); 
		$sql->addFuncion("insert"); 

		$sql->addTable("cliente"); 
		$sql->addInsert("nombreCliente"); 
		$sql->addInsert("apellidosCliente"); 
		$sql->addValue($nombre); 
		$sql->addValue($apellido); 
		echo $sql; 
		return $bd->ejecutar($sql); 
	}

	public function modificarUsuario($id, $nombre, $apellido) 
	{ 
		$bd = new BaseDeDatos (new MySQL()); 
		$sql = new SQL(); $sql->addFuncion("update"); 
		$sql->addTable("usuarios"); 
		$sql->addSelect("nombre='".$nombre."'"); 
		$sql->addSelect("apellido='".$apellido."'"); 
		$sql->addWhere("id=".$id); 
		return $bd->ejecutar($sql); 
	} 

	public function eliminarUsuario($id) 
	{ 
		$bd = new BaseDeDatos (new MySQL()); 
		$sql = new SQL(); 
		$sql->addFuncion("delete"); 
		$sql->addTable("usuarios"); 
		$sql->addWhere("id=".$id); 
		return $bd->ejecutar($sql); 
	} 
}