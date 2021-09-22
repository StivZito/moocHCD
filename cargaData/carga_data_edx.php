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
						if (isset($r[0]))                               $idEstudiante = utf8_encode($r[0]);   else	$idEstudiante = ''; 
						if (isset($r[2]))                               $usuario      = utf8_encode($r[2]);   else	$usuario      = ''; 

						if (isset($r[3])  && $r[3]  != 'Not Available' && $r[3]  != '') $grado        = utf8_encode($r[3]);   else	$grado        = 0; 
						if (isset($r[10]) && $r[10] != 'Not Available' && $r[10] != '') $avm1         = utf8_encode($r[10]);  else	$avm1         = 0; 
						if (isset($r[17]) && $r[17] != 'Not Available' && $r[17] != '') $avm2         = utf8_encode($r[17]);  else	$avm2         = 0; 
						if (isset($r[26]) && $r[26] != 'Not Available' && $r[26] != '') $avm3         = utf8_encode($r[26]);  else	$avm3         = 0; 
						if (isset($r[36]) && $r[36] != 'Not Available' && $r[36] != '') $avm4         = utf8_encode($r[36]);  else	$avm4         = 0; 
						if (isset($r[45]) && $r[45] != 'Not Available' && $r[45] != '') $avm5         = utf8_encode($r[45]);  else	$avm5         = 0; 
						if (isset($r[52]) && $r[52] != 'Not Available' && $r[52] != '') $avm6         = utf8_encode($r[52]);  else	$avm6         = 0; 
						if (isset($r[53]) && $r[53] != 'Not Available' && $r[53] != '') $examen       = utf8_encode($r[53]);  else	$examen       = 0; 
						if (isset($r[1])  && $r[1]  != 'Not Available' && $r[1]  != '') $email        = strtolower(ltrim(rtrim(quitar_tildes($r[1]))));  else $email          = ''; 	
						if (isset($r[57]) && $r[57] != 'Not Available' && $r[57] != '') $cohorte      = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[57])))));  else	$cohorte      = ''; 											
												
						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipo           = $_POST["tipo"];
						$archivo        = $file;	
					}
						guardarDatosEdx($idEstudiante,$email,$usuario,$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$examen,$cohorte,$termino,$anio,$sistema,$tipo,$archivo);					
				} 
			} else {
			  echo SimpleXLSX::parseError();
			}
		} 	
	} catch (RuntimeException $e) {
		echo $e->getMessage();	
	}	
}			