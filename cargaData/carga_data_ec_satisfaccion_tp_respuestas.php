<?php
include("lib/funciones.php");
require_once '../src/SimpleXLSX.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	try 
	{
		// Undefined | Multiple Files | $_FILES Corruption Attack If this request falls under any of them, treat it invalid.
		if (!isset($_FILES['archivo']['error']) ||
			is_array($_FILES['archivo']['error'])) 
		{
			throw new RuntimeException('Invalid parameters.');
		}

		// Check $_FILES['archivo']['error'] value.
		switch ($_FILES['archivo']['error']) {
			case UPLOAD_ERR_OK:
				break;
			case UPLOAD_ERR_NO_FILE:
				throw new RuntimeException('No file sent.');
			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				throw new RuntimeException('Exceeded filesize limit.');
			default:
				throw new RuntimeException('Unknown errors.');
		}

		// You should also check filesize here.
		if ($_FILES['archivo']['size'] > 1000000) {
			throw new RuntimeException('Exceeded filesize limit.');
		}

		//obtenemos el archivo a subir
		$file = $_FILES['archivo']['name'];
		
		//comprobamos si el archivo ha subido
		if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"uploads/".$file))
		{
			sleep(3);//retrasamos la petición 3 segundos			
			if ( $xlsx = SimpleXLSX::parse("uploads/".$file))
			{	
				$dim = $xlsx->dimension();
				$cols = $dim[0];	
				foreach ( $xlsx->rows() as $k => $r ) 
				{
					if ($k == 0) continue;
					for ( $i = 0; $i < $cols; $i ++ ) 
					{

						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipoEstudiante = $_POST["tipoEstudiante"];
						$tipo           = $_POST["tipo"];						
						$archivo        = $file;
						
						if (isset($r[0]))  $numPregunta  = quitar_tildes($r[0]);   else	$numPregunta  = 0; 
						if (isset($r[1]))  $numRespuesta = quitar_tildes($r[1]);   else	$numRespuesta = 0; 
						if (isset($r[2]))  $pregunta     = quitar_tildes($r[2]);   else	$pregunta     = ''; 
						if (isset($r[3]))  $literal      = quitar_tildes($r[3]);   else	$literal      = '';
						if (isset($r[4]))  $codigo_a     = quitar_tildes($r[4]);   else	$codigo_a     = ''; 
						if (isset($r[5]))  $opcion_a     = quitar_tildes($r[5]);   else	$opcion_a     = '';
						if (isset($r[6]))  $codigo_b     = quitar_tildes($r[6]);   else	$codigo_b     = ''; 
						if (isset($r[7]))  $opcion_b     = quitar_tildes($r[7]);   else	$opcion_b     = '';
						if (isset($r[8]))  $codigo_c     = quitar_tildes($r[8]);   else	$codigo_c     = ''; 
						if (isset($r[9]))  $opcion_c     = quitar_tildes($r[9]);   else	$opcion_c     = '';
						if (isset($r[10])) $codigo_d     = quitar_tildes($r[10]);  else	$codigo_d     = ''; 
						if (isset($r[11])) $opcion_d     = quitar_tildes($r[11]);  else	$opcion_d     = '';
						if (isset($r[12])) $codigo_e     = quitar_tildes($r[12]);  else	$codigo_e     = ''; 
						if (isset($r[13])) $opcion_e     = quitar_tildes($r[13]);  else	$opcion_e     = '';
						if (isset($r[14])) $codigo_f     = quitar_tildes($r[14]);  else	$codigo_f     = ''; 
						if (isset($r[15])) $opcion_f     = quitar_tildes($r[15]);  else	$opcion_f     = '';						
										

					}

					if ($tipoEstudiante !== '') {
						guardarRespuestasEncuestaSatisfaccion($numPregunta,$numRespuesta,$pregunta,$literal,$codigo_a,$opcion_a,$codigo_b,$opcion_b,$codigo_c,$opcion_c,$codigo_d,$opcion_d,$codigo_e,$opcion_e,$codigo_f,$opcion_f,$termino,$anio,$sistema,$tipo,$tipoEstudiante);

					} 

					if ($tipoEstudiante == '') {
						guardarRespuestasEncuestaSatisfaccion($numPregunta,$numRespuesta,$pregunta,$literal,$codigo_a,$opcion_a,$codigo_b,$opcion_b,$codigo_c,$opcion_c,$codigo_d,$opcion_d,$codigo_e,$opcion_e,$codigo_f,$opcion_f,$termino,$anio,$sistema,$tipo,'ADMISION');
						guardarRespuestasEncuestaSatisfaccion($numPregunta,$numRespuesta,$pregunta,$literal,$codigo_a,$opcion_a,$codigo_b,$opcion_b,$codigo_c,$opcion_c,$codigo_d,$opcion_d,$codigo_e,$opcion_e,$codigo_f,$opcion_f,$termino,$anio,$sistema,$tipo,'ESPOL');
					}			
				} 
			} else {
			  echo SimpleXLSX::parseError();
			}
		} 	
	} catch (RuntimeException $e) {
		echo $e->getMessage();	
	}	
}			