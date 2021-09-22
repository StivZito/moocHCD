<?php
include("lib/funciones.php");
require_once 'src/SimpleXLSX.php';

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
						if (isset($r[1]))                                            $idalumno  = utf8_encode($r[1]); else	$idalumno  = ''; 
						if (isset($r[2]) && $r[2] != 'Not Available' && $r[2] != '') $notaExcel = utf8_encode($r[2]); else	$notaExcel = 0; 
						if (isset($r[3]) && $r[3] != 'Not Available' && $r[3] != '') $notaPpt   = utf8_encode($r[3]); else	$notaPpt   = 0; 
						if (isset($r[4]) && $r[4] != 'Not Available' && $r[4] != '') $notaWord  = utf8_encode($r[4]); else	$notaWord  = 0; 

						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipo           = $_POST["tipo"];
                        $franja         = $_POST["franja"];
						$archivo        = $file;	
					}                  		
						guardarDatosSid($idalumno,$notaExcel,$notaPpt,$notaWord,$termino,$anio,$sistema,$tipo,$franja,$archivo);					
				} 
			} else {
			  echo SimpleXLSX::parseError();
			}
		} 	
	} catch (RuntimeException $e) {
		echo $e->getMessage();	
	}	
}			