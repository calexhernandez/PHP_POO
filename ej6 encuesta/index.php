<?php 

require_once 'Empresa.php';
require_once 'Persona.php';
require_once 'Respuesta.php';

abstract class Index
{
	
	static function run()
	{
		$empresa = new Empresa();
		$persona = new Persona('masculino');
		
		/*defino la encuesta en base al sexo*/
		$sexo = $persona->getSexo();
		$encuesta = $empresa->getEncuesta($sexo);
		
		$persona->setEncuesta($encuesta);
		$preguntas = $encuesta->getPreguntas();
		
		/*respondo las preguntas de la encuesta*/
		foreach ($preguntas as $pregunta){
			echo $pregunta."<br>";
			$persona->addRespuesta(new Respuesta($pregunta,"Si"));
		}
		
		/*Puedo preguntarle a la persona sus respuestas*/
		echo $persona->getResumenPreguntasRespondidas();
		/*Si la Empresa tubiera muchas Personas, seria el proceso similar
		 * al caso anterior, solo que la empresa recorre todas las personas 
		 * encuestas de una encuesta determinada
		 */
	}
}
Index::run();