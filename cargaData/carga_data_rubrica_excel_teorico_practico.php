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
						if (isset($r[0]))                               $name         = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[0])))));   else	$name = ''; 
						if (isset($r[1]))                               $idEstudiante = utf8_encode($r[1]);   else	$idEstudiante = 0; 
						if (isset($r[2]))                               $sis_id       = utf8_encode($r[2]);   else	$sis_id  = ''; 
						if (isset($r[3]))                               $section      = utf8_encode($r[3]);   else	$section = ''; 
						if (isset($r[6]))                               $enviado      = utf8_encode($r[6]);   else	$enviado = ''; 
						if (isset($r[7]))                               $intento      = utf8_encode($r[7]);   else	$intento = 0; 

						if (isset($r[8]))                $p1  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[8]))))); else $p1  = ''; 
						if (isset($r[9]) && $r[9] !=='') $c1  = utf8_encode($r[9]); else $c1  =  0;

						if (isset($r[10]))                  $p2  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[10]))))); else $p2  = ''; 
						if (isset($r[11]) && $r[11] !=='')  $c2  = utf8_encode($r[11]); else $c2  =  0; 

						if (isset($r[12]))                 $p3  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[12]))))); else $p3  = ''; 
						if (isset($r[13]) && $r[13] !=='') $c3  = utf8_encode($r[13]); else $c3  =  0; 

						if (isset($r[14]))                 $p4  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[14]))))); else $p4  = ''; 
						if (isset($r[15]) && $r[15] !=='') $c4  = utf8_encode($r[15]); else $c4  =  0; 

						if (isset($r[16]))                 $p5  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[16]))))); else $p5  = ''; 
						if (isset($r[17]) && $r[17] !=='') $c5  = utf8_encode($r[17]); else $c5  =  0; 

						if (isset($r[18]))                 $p6  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[18]))))); else $p6  = ''; 
						if (isset($r[19]) && $r[19] !=='') $c6  = utf8_encode($r[19]); else $c6  =  0; 

						if (isset($r[20]))                 $p7  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[20]))))); else $p7  = ''; 
						if (isset($r[21]) && $r[21] !=='') $c7  = utf8_encode($r[21]); else $c7  =  0; 

						if (isset($r[22]))                 $p8  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[22]))))); else $p8  = ''; 
						if (isset($r[23]) && $r[23] !=='') $c8  = utf8_encode($r[23]); else $c8  =  0; 

						if (isset($r[24]))                 $p9  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[24]))))); else $p9  = ''; 
						if (isset($r[25]) && $r[25] !=='') $c9  = utf8_encode($r[25]); else $c9  =  0; 

						if (isset($r[26]))                 $p10 = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[26]))))); else $p10 = ''; 
						if (isset($r[27]) && $r[27] !=='') $c10 = utf8_encode($r[27]); else $c10 =  0; 

						if (isset($r[28]))                 $p11 = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[28]))))); else $p11 = ''; 
						if (isset($r[29]) && $r[29] !=='') $c11 = utf8_encode($r[29]); else $c11 =  0; 

						if (isset($r[30]))                 $p12 = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[30]))))); else $p12 = ''; 
						if (isset($r[31]) && $r[31] !=='') $c12 = utf8_encode($r[31]); else $c12 =  0; 

						if (isset($r[32]))                 $p13 = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[32]))))); else $p13 = ''; 
						if (isset($r[33]) && $r[33] !=='') $c13 = utf8_encode($r[33]); else $c13 =  0; 

						if (isset($r[34]))                 $p14 = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[34]))))); else $p14 = ''; 
						if (isset($r[35]) && $r[35] !=='') $c14 = utf8_encode($r[35]); else $c14 =  0; 

						if (isset($r[36]))                 $p15 = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[36]))))); else $p15 = ''; 
						if (isset($r[37]) && $r[37] !=='') $c15 = utf8_encode($r[37]); else $c15 =  0; 

						if (isset($r[38]) && $r[38] !=='') $correcto     = utf8_encode($r[38]); else $correcto     =  0; 
						if (isset($r[39]) && $r[39] !=='') $incorrecto   = utf8_encode($r[39]); else $incorrecto   =  0; 
						if (isset($r[40]) && $r[40] !=='') $calificacion = utf8_encode($r[40]); else $calificacion =  0; 
										
						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipoEstudiante = $_POST["tipoEstudiante"];
						$franja         = $_POST["franja"];
						$paralelo       = $_POST["paralelo"];
						$docente        = $_POST["docente"];
						$archivo        = $file;

						if (isset($tipoEstudiante) && $tipoEstudiante !== '') {
							$adminEspol = $tipoEstudiante;
						} else {
							if (strlen($sis_id)  < 10) $adminEspol = 'ESPOL';
							if (strlen($sis_id)  >  9) $adminEspol = 'ADMISION';
						}

					}
						guardarDatosRubricaExcelTeoricoPractico($name,$idEstudiante,$sis_id,$section,$enviado,$p1,$c1,$p2,$c2,$p3,$c3,$p4,$c4,$p5,$c5,$p6,$c6,$p7,$c7,$p8,$c8,$p9,$c9,$p10,$c10,$p11,$c11,$p12,$c12,$p13,$c13,$p14,$c14,$p15,$c15,$intento,$correcto,$incorrecto,$calificacion,$termino,$anio,$sistema,$adminEspol,$franja,$paralelo,$docente);			
				} 
			} else {
			  echo SimpleXLSX::parseError();
			}
		} 	
	} catch (RuntimeException $e) {
		echo $e->getMessage();	
	}	
}			