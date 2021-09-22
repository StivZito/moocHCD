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

		//Check $_FILES['archivo']['error'] value.
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
						if (isset($r[0]))  $matricula      = utf8_encode($r[0]);                              else $matricula      = ''; 
						if (isset($r[1]))  $identificacion = utf8_encode($r[1]);                              else $identificacion = ''; 
						if (isset($r[6]))  $fecha_nac      = utf8_encode($r[6]);  				              else $fecha_nac      = ''; 
						if (isset($r[17])) $fechaExamen    = utf8_encode($r[17]);  				              else $fechaExamen    = ''; 
						if (isset($r[7]))  $edad           = utf8_encode($r[7]);  				              else $edad           =  0; 
						if (isset($r[8]))  $estado_civil   = utf8_encode($r[8]);  				              else $estado_civil   = ''; 

						if (isset($r[5]))  $sexo           = ltrim(rtrim(quitar_tildes($r[5])));              else $sexo           = ''; 
						if (isset($r[4]))  $email          = strtolower(ltrim(rtrim(quitar_tildes($r[4]))));  else $email          = ''; 
						if (isset($r[10])) $tipo_colegio   = strtoupper(ltrim(rtrim(quitar_tildes($r[10])))); else $tipo_colegio   = ''; 

						if (isset($r[11]) && $r[11] !=='Not Available' && $r[11] !=='') $notaTeorico    = utf8_encode($r[11]); else $notaTeorico    =  0; 
						if (isset($r[12]) && $r[12] !=='Not Available' && $r[12] !=='') $notaWord       = utf8_encode($r[12]); else $notaWord       =  0; 
						if (isset($r[13]) && $r[13] !=='Not Available' && $r[13] !=='') $notaExcel      = utf8_encode($r[13]); else $notaExcel      =  0; 
						if (isset($r[14]) && $r[14] !=='Not Available' && $r[14] !=='') $notaPpt        = utf8_encode($r[14]); else $notaPpt        =  0; 
						if (isset($r[15]) && $r[15] !=='Not Available' && $r[15] !=='') $numVeces       = utf8_encode($r[15]); else $numVeces       =  0; 						

						if (isset($r[2]))  $nombres        = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[2])))));  else $nombres        = ''; 
						if (isset($r[3]))  $apellidos      = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[3])))));  else $apellidos      = ''; 
						if (isset($r[9]))  $colegio        = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[9])))));  else $colegio        = ''; 
						if (isset($r[16])) $carrera        = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[16]))))); else $carrera        = ''; 	

						if ($notaWord  < 60) $cohorteWord  = 'WORD'; else $cohorteWord = '';
						if ($notaExcel < 60) $cohorteExcel = 'EXCEL'; else $cohorteExcel = '';
						if ($notaPpt   < 60) $cohortePpt   = 'PPT';   else $cohortePpt = '';
						$cohorte_temp = $cohorteWord.$cohorteExcel.$cohortePpt;

						if ($cohorte_temp == 'PPT')          $cohorte = 'PPT';
						if ($cohorte_temp == 'WORDPPT')      $cohorte = 'WORD - PPT';
						if ($cohorte_temp == 'WORDEXCEL')    $cohorte = 'WORD - EXCEL';
						if ($cohorte_temp == 'EXCEL')        $cohorte = 'EXCEL';
						if ($cohorte_temp == 'EXCELPPT')     $cohorte = 'EXCEL - PPT';
						if ($cohorte_temp == 'WORD')         $cohorte = 'WORD';
						if ($cohorte_temp == 'WORDEXCELPPT') $cohorte = 'PRACTICO';
						
						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipoEstudiante = $_POST["tipoEstudiante"];
						$archivo        = $file;							


					}				
						guardarDatosAcademicoTeoricoPractico($matricula,$identificacion,$nombres,$apellidos,$email,$sexo,$fecha_nac,$edad,$estado_civil,$colegio,$tipo_colegio,$notaTeorico,$notaWord,$notaExcel,$notaPpt,$numVeces,$carrera,$termino,$anio,$sistema,$tipoEstudiante,$cohorte,$fechaExamen);					
				} 
			} else {
			  echo SimpleXLSX::parseError();
			}
		}

	} catch (RuntimeException $e) {
		echo $e->getMessage();	
	}	
}			