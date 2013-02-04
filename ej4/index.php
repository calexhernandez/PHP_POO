<?php 

require_once 'Persona.php'; 
require_once 'Perro.php'; 
require_once 'Gato.php'; 
require_once 'Escuela.php'; 

/* Micaela tiene un perro */ 
$persona = new Persona('Micaela', 5); 
$perro = new Perro('Tito', 'blanco y negro'); 
$persona->setPerro($perro); 

/* Martina, due�a del mismo perro... */ 
$persona1 = new Persona('Martina', 3); 
$persona1->setPerro($perro); 
/* ... y hermana de Micaela */ 

$persona->setHermano($persona1); 
/* Marcos es due�o de un gato */ 

$persona2 = new Persona('Marcos', 6); 
$persona2->setGato(new Gato()); 

/* Escuela Dos Corazones */ 
$escuela = new Escuela('Dos Corazones'); 

/* ... Micaela va junto con 5 ni�os m�s ... */ 
$escuela->addAlumno($persona); 
$escuela->addAlumno($persona1); 
$escuela->addAlumno($persona2); 

$escuela->addAlumno(new Persona('Julio',5)); 
$escuela->addAlumno(new Persona('Mart�n',4)); 
$escuela->addAlumno(new Persona('Carla',4));
