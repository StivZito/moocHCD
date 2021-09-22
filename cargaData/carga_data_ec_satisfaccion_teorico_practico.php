<?php
include("lib/funciones.php");
require_once '../src/SimpleXLSX.php';
ini_set('MAX_EXECUTION_TIME', 0);

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
						if (isset($r[0])) $username = utf8_encode($r[0]);   else	$username = ''; 
						if (isset($r[3])) $text     = utf8_encode($r[3]);   else	$text = ''; 

						if (substr($username,0,1) == '9') $username = '0'.$username;						
										
						$termino        = $_POST["termino"];
						$anio           = substr($termino,2,4);
						$sistema        = $_POST["sistema"];
						$tipoEstudiante = $_POST["tipoEstudiante"];
						$pregunta       = $_POST["pregunta"];
						$archivo        = $file;
						$literal        = 1;
						$pregunta   = substr($archivo,1,1);

						if (isset($tipoEstudiante) && $tipoEstudiante !== '') {
							$adminEspol = $tipoEstudiante;
						} else {
							if (strlen($username)  < 10) $adminEspol = 'ESPOL';
							if (strlen($username)  >  9) $adminEspol = 'ADMISION';
						}

					}		
											
					$decoded_json = json_decode($text, true);
					$respuestas = $decoded_json['choices']; 
					if (is_array($respuestas)) {
						foreach($respuestas as $respuesta => $val) 
						{
	    					$resultado = $val;
	    					guardarDatosEncuestaSatisfaccionTeoricoPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$adminEspol);
	    					$literal = $literal + 1;
	    				}
					} else {
						$respuesta = $decoded_json['choice']; 
						if (isset($respuesta)) {
    						$resultado = $respuesta;
    						guardarDatosEncuestaSatisfaccionTeoricoPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$adminEspol);
	    				} else {
							$resultado = 'NULL';
							guardarDatosEncuestaSatisfaccionTeoricoPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$adminEspol);
						}
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