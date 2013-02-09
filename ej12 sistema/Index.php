<?php 
require_once 'configuracion.php'; 
require_once PRE . DIRECTORY_SEPARATOR . 'UsuarioPresentacion.php'; 

echo HOME;
abstract class Index 
{ 
	const SIN_PARAMETROS = 0; 
	static public function run($get) 
	{ 
		//DEBUG ? var_dump($get) : null; 
		if(count($get) != self::SIN_PARAMETROS){ 
			self::_procesarModulo(); 
		}else{ 
			self::_porDefecto(); 
		} 
	} 

	static private function _porDefecto() { 
		echo 'Pagina por Defecto'; 
		echo '<ul>'; 
		echo '<li><a href="?modulo=listado">listado</li>'; 
		echo '</ul>'; 
	} 

	static private function _moduloNoExiste() 
	{ 
		echo 'Modulo no Existe'; 
	}

	static private function _procesarModulo() 
	{ 
		switch ($_GET['modulo']){ 
			case 'listado': 
			if (isset($_GET['mensage']) && $_GET['mensaje'] != "") { 
				echo "El Usuario ha sido ".$_GET['mensaje']." correctamente";
			} 

			echo UsuarioPresentacion::listadoUsuarios(); 
			break; 

			case 'detalle': 
			echo "<h1>".UsuarioPresentacion::detalle($_GET['id']). "</h1>"; 
			break; 

			case 'nuevousuario': 
			echo UsuarioPresentacion::mostrarFormNuevoUsuario(); 
			break; 

			case 'insertar': 

			if(UsuarioPresentacion::guardarUsuario( $_POST['nombre'], $_POST['apellido'])) { 
				header("Location:index.php?modulo=listado&mensaje=guardado"); 
			} 
			break; 

			case 'modificarusuario': echo UsuarioPresentacion::mostrarFormModificarUsuario($_GET['id']); 
			break; 

			case 'modificar': 

			if(UsuarioPresentacion::modificarUsuario( $_POST['id'], $_POST['nombre'], $_POST['apellido'])){ 

				header("Location:index.php?modulo=listado&mensaje=modificado"); 
			} 

			break; 

			case 'eliminar': 
			if(UsuarioPresentacion::eliminarUsuario($_GET['id'])) { 
				header("Location:index.php?modulo=listado&mensaje=eliminado"); 
			} 

			break; 
			default: self::_moduloNoExiste(); 

			break; 
		} 
	} 
} 



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">



<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          

<?php
Index::run($_GET);
?>          

          
          <div class="row-fluid">
            
          </div><!--/row-->
          <div class="row-fluid">
            
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

     
    </div> <!-- /container -->



 <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

      </body>
</html>
