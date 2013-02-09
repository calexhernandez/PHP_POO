<?php 

require_once './configuracion.php'; 
require_once PER . DIRECTORY_SEPARATOR . 'UsuarioPersistencia.php'; 
/** * Description of Usuario * * @author Pc */ 
class Usuario 
{ 
	private $_id; 
	private $_nombre; 
	private $_apellido; 
	public function __construct($id = "", $nombre = "", $apellido = "") 
	{ 
		$this->_id = $id; 
		$this->_nombre = $nombre; 
		$this->_apellido = $apellido; 
	} 

	public function getId() 
	{ 
		return $this->_id; 
	} 

	public function getNombre() 
	{ 
		return $this->_nombre; 
	} 

	public function getApellido() 
	{ 
		return $this->_apellido; 
	} 

	public static function getAll() 
	{ 
		$usuarioPersistencia = new UsuarioPersistencia(); 
		$datos_array = $usuarioPersistencia->getAll(); 

		foreach($datos_array as $usuario_array){ 
			$id = $usuario_array['idCliente']; 
			$nombre = $usuario_array['nombreCliente']; 
			$apellido = $usuario_array['apellidosCliente']; 
			$retorno[] = new Usuario($id, $nombre, $apellido); 
		} 

		return $retorno; 
	}

	public static function load($id) 
	{ 
		//echo $id;
		$usuarioPersistencia = new UsuarioPersistencia(); 
		$datos_array = $usuarioPersistencia->load($id); 
		foreach($datos_array as $usuario_array){ 
			$usuario = new Usuario( $id, $usuario_array['nombreCliente'], $usuario_array['apellidosCliente'] ); 
		} 

		return $usuario; 
	} 

	public function guardarUsuario() 
	{ 
		$usuarioPersistencia = new UsuarioPersistencia(); 
		$guardo = $usuarioPersistencia->guardarUsuario( $this->_nombre, $this->_apellido ); 
		return $guardo; 
	} 

	public function modificarUsuario() 
	{ 
		$usuarioPersistencia = new UsuarioPersistencia(); 
		$modificar = $usuarioPersistencia->modificarUsuario( $this->_id, $this->_nombre, $this->_apellido ); 
		return $modificar; 
	} 

	public function eliminarUsuario() 
	{ 
		$usuarioPersistencia = new UsuarioPersistencia(); 
		$eliminar = $usuarioPersistencia->eliminarUsuario($this->_id); 
		return $eliminar; 
	} 

	public function __toString() 
	{ 
		return $this->_id." ".$this->_nombre." ".$this->_apellido; 
	} 
}