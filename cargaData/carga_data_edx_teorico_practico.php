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

						if (isset($r[3])  && $r[3]  !== 'Not Available' && $r[3]  !== '') $grado        = utf8_encode($r[3]);   else	$grado        = 0; 
						
						if (isset($r[4]))   $ec1         =  validar_notas($r[4]);
						if (isset($r[5]))   $ec2         =  validar_notas($r[5]);

						if (isset($r[13]))   $avm1         =  validar_notas($r[13]);
						if (isset($r[20]))   $avm2         =  validar_notas($r[20]);
						if (isset($r[29]))   $avm3         =  validar_notas($r[29]);
						if (isset($r[39]))   $avm4         =  validar_notas($r[39]);
						if (isset($r[48]))   $avm5         =  validar_notas($r[48]);
						if (isset($r[55]))   $avm6         =  validar_notas($r[55]);
						if (isset($r[56]))   $examen       =  validar_notas($r[56]);	

						if (isset($r[1])  && $r[1]  !== 'Not Available' && $r[1]  !== '') $email        = strtolower(ltrim(rtrim(quitar_tildes($r[1]))));  else $email          == ''; 	
						if (isset($r[57]) && $r[57] !== 'Not Available' && $r[57] !== '' && $r[57] !== 'Grupo por defecto') $cohorte = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes($r[57])))));  else $cohorte == ''; 	
						if (isset($r[63])  && $r[63] !== 'Not Available' && $r[63] !== '') $enrollment   = strtolower(ltrim(rtrim(quitar_tildes($r[63]))));  else $enrollment          == ''; 														
						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipoEstudiante = $_POST["tipoEstudiante"];
						$archivo        = $file;	

						if (isset($tipoEstudiante) && $tipoEstudiante !== '') {
							$adminEspol = $tipoEstudiante;
						} else {
							$pos = strpos($email, 'espol');
							if ($pos !== false) $adminEspol = 'ESPOL';
							if ($pos  == false) $adminEspol = 'ADMISION';
						}
					}
						if ($enrollment=='enrolled' && $cohorte !== '') {
							guardarDatosEdxTeoricoPractico($idEstudiante,$email,$usuario,$grado,$ec1,$ec2,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$examen,$cohorte,$termino,$anio,$sistema,$adminEspol);						
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