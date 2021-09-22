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
					if ($k == 1) continue;
					for ( $i = 0; $i < $cols; $i ++ ) 
					{
						if (isset($r[0])) $id         = utf8_encode($r[0]);   else	$id = 0; 
						if (isset($r[2])) $cedula     = utf8_encode($r[2]);   else	$cedula  = ''; 
						if (substr($cedula,0,1)      == '9')                        $cedula  = '0'.$cedula;
						if (strlen($cedula) > 10)                                   $cedula  = ''; 
						if (isset($r[1])) $estudiante = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[1])))));   else	$estudiante = ''; 						

						if (isset($r[3])  && $r[3]  !=='') $p1  = utf8_encode($r[3]);  else $p1  =  0;
						if (isset($r[4])  && $r[4]  !=='') $p2  = utf8_encode($r[4]);  else $p2  =  0;  
						if (isset($r[5])  && $r[5]  !=='') $p3  = utf8_encode($r[5]);  else $p3  =  0; 
						if (isset($r[6])  && $r[6]  !=='') $p4  = utf8_encode($r[6]);  else $p4  =  0; 
						if (isset($r[7])  && $r[7]  !=='') $p5  = utf8_encode($r[7]);  else $p5  =  0; 
						if (isset($r[8])  && $r[8]  !=='') $p6  = utf8_encode($r[8]);  else $p6  =  0; 
						if (isset($r[9])  && $r[9]  !=='') $p7  = utf8_encode($r[9]);  else $p7  =  0; 
						if (isset($r[10]) && $r[10] !=='') $p8  = utf8_encode($r[10]); else $p8  =  0; 
						if (isset($r[11]) && $r[11] !=='') $p9  = utf8_encode($r[11]); else $p9  =  0; 
						if (isset($r[12]) && $r[12] !=='') $p10 = utf8_encode($r[12]); else $p10 =  0; 
						if (isset($r[13]) && $r[13] !=='') $p11 = utf8_encode($r[13]); else $p11 =  0; 
						if (isset($r[14]) && $r[14] !=='') $p12 = utf8_encode($r[14]); else $p12 =  0; 
						if (isset($r[15]) && $r[15] !=='') $p13 = utf8_encode($r[15]); else $p13 =  0; 
						if (isset($r[16]) && $r[16] !=='') $p14 = utf8_encode($r[16]); else $p14 =  0; 
						if (isset($r[17]) && $r[17] !=='') $p15 = utf8_encode($r[17]); else $p15 =  0; 
						if (isset($r[18]) && $r[18] !=='') $p16 = utf8_encode($r[18]); else $p16 =  0;
						if (isset($r[19]) && $r[19] !=='') $p17 = utf8_encode($r[19]); else $p17 =  0;  

						if (isset($r[20]) && $r[20] !=='') $calificacion = utf8_encode($r[20]); else $calificacion =  0; 						
										
						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipoEstudiante = $_POST["tipoEstudiante"];
						$franja         = $_POST["franja"];
						$paralelo       = $_POST["paralelo"];
						$docente        = $_POST["docente"];
						$archivo        = $file;

						if (isset($tipoEstudiante) && $tipoEstudiante !=='') {
							$adminEspol = $tipoEstudiante;
						} else {
							if (strlen($cedula)  < 10) $adminEspol = 'ESPOL';
							if (strlen($cedula)  >  9) $adminEspol = 'ADMISION';
						}

					}
					if ($cedula !==''){
						guardarDatosRubricawordTeoricoPractico($id,$estudiante,$cedula,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$calificacion,$termino,$anio,$sistema,$adminEspol,$franja,$paralelo,$docente);			
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