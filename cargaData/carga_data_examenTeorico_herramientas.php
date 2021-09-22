<?php
include("lib/funciones.php");
require_once '../src/SimpleXLSX.php';
ini_set('MAX_EXECUTION_TIME', 0);
set_time_limit(0);

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
		if ($_FILES['archivo']['size'] > 1000000000) {
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
						if (isset($r[0])) $idEstudiante   = utf8_encode($r[0]);   else	$idEstudiante = ''; 
						if (isset($r[2])) $usuario        = utf8_encode($r[2]);   else	$usuario      = ''; 

						if (isset($r[1215]))
						{
							if (isset($r[1215]))  $m6p1 = validar_notas($r[1215]);
							if (isset($r[1217]))  $m6p2 = validar_notas($r[1217]);
							if (isset($r[1219]))  $m6p3 = validar_notas($r[1219]);
							if (isset($r[1221]))  $m6p4 = validar_notas($r[1221]);
							if (isset($r[1223]))  $m6p5 = validar_notas($r[1223]);
							if (isset($r[1225]))  $m6p6 = validar_notas($r[1225]);
							if (isset($r[1227]))  $m6p7 = validar_notas($r[1227]);
							if (isset($r[1229]))  $m6p8 = validar_notas($r[1229]);
							if (isset($r[1231]))  $m6p9 = validar_notas($r[1231]);
							if (isset($r[1233]))  $m6p10 = validar_notas($r[1233]);
							if (isset($r[1235]))  $m6p11 = validar_notas($r[1235]);
							if (isset($r[1237]))  $m6p12 = validar_notas($r[1237]);
							if (isset($r[1239]))  $m6p13 = validar_notas($r[1239]);
							if (isset($r[1241]))  $m6p14 = validar_notas($r[1241]);
							if (isset($r[1243]))  $m6p15 = validar_notas($r[1243]);
							if (isset($r[1245]))  $m6p16 = validar_notas($r[1245]);
							if (isset($r[1247]))  $m6p17 = validar_notas($r[1247]);
							if (isset($r[1249]))  $m6p18 = validar_notas($r[1249]);
							if (isset($r[1251]))  $m6p19 = validar_notas($r[1251]);
							if (isset($r[1253]))  $m6p20 = validar_notas($r[1253]);
							if (isset($r[1255]))  $m6p21 = validar_notas($r[1255]);
							if (isset($r[1257]))  $m6p22 = validar_notas($r[1257]);
							if (isset($r[1259]))  $m6p23 = validar_notas($r[1259]);
							if (isset($r[1261]))  $m6p24 = validar_notas($r[1261]);
							if (isset($r[1263]))  $m6p25 = validar_notas($r[1263]);
							if (isset($r[1265]))  $m6p26 = validar_notas($r[1265]);
							if (isset($r[1267]))  $m6p27 = validar_notas($r[1267]);
							if (isset($r[1269]))  $m6p28 = validar_notas($r[1269]);
							if (isset($r[1271]))  $m6p29 = validar_notas($r[1271]);
							if (isset($r[1273]))  $m6p30 = validar_notas($r[1273]);
							if (isset($r[1275]))  $m6p31 = validar_notas($r[1275]);
							if (isset($r[1277]))  $m6p32 = validar_notas($r[1277]);
							if (isset($r[1279]))  $m6p33 = validar_notas($r[1279]);
							if (isset($r[1281]))  $m6p34 = validar_notas($r[1281]);
							if (isset($r[1283]))  $m6p35 = validar_notas($r[1283]);
							if (isset($r[1285]))  $m6p36 = validar_notas($r[1285]);
							if (isset($r[1287]))  $m6p37 = validar_notas($r[1287]);
							if (isset($r[1289]))  $m6p38 = validar_notas($r[1289]);
							if (isset($r[1291]))  $m6p39 = validar_notas($r[1291]);
							if (isset($r[1293]))  $m6p40 = validar_notas($r[1293]);
							if (isset($r[1295]))  $m6p41 = validar_notas($r[1295]);
							if (isset($r[1297]))  $m6p42 = validar_notas($r[1297]);
							if (isset($r[1299]))  $m6p43 = validar_notas($r[1299]);
							if (isset($r[1301]))  $m6p44 = validar_notas($r[1301]);
							if (isset($r[1303]))  $m6p45 = validar_notas($r[1303]);
							if (isset($r[1305]))  $m6p46 = validar_notas($r[1305]);
							if (isset($r[1307]))  $m6p47 = validar_notas($r[1307]);
							if (isset($r[1309]))  $m6p48 = validar_notas($r[1309]);
							if (isset($r[1311]))  $m6p49 = validar_notas($r[1311]);
							if (isset($r[1313]))  $m6p50 = validar_notas($r[1313]);
							if (isset($r[1315]))  $m6p51 = validar_notas($r[1315]);
							if (isset($r[1317]))  $m6p52 = validar_notas($r[1317]);
						}					

						if (isset($r[4])  && $r[4] !== 'Not Available' && $r[4] !== '') $grado      = utf8_encode($r[4]);                              else	$grado      =   0; 							
						if (isset($r[3])  && $r[3] !== 'Not Available' && $r[3] !== '') $enrollment = strtolower(ltrim(rtrim(quitar_tildes($r[3]))));  else $enrollment == ''; 	
						if (isset($r[1])  && $r[1] !== 'Not Available' && $r[1] !== '') $email      = strtolower(ltrim(rtrim(quitar_tildes($r[1]))));  else $email      == ''; 
																			
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
					
					if ($enrollment=='enrolled') {
						guardarDatosExamenTeoricoHerramientas($idEstudiante,$email,$usuario,$grado,$m6p1,$m6p2,$m6p3,$m6p4,$m6p5,$m6p6,$m6p7,$m6p8,$m6p9,$m6p10,$m6p11,$m6p12,$m6p13,$m6p14,$m6p15,$m6p16,$m6p17,$m6p18,$m6p19,$m6p20,$m6p21,$m6p22,$m6p23,$m6p24,$m6p25,$m6p26,$m6p27,$m6p28,$m6p29,$m6p30,$m6p31,$m6p32,$m6p33,$m6p34,$m6p35,$m6p36,$m6p37,$m6p38,$m6p39,$m6p40,$m6p41,$m6p42,$m6p43,$m6p44,$m6p45,$m6p46,$m6p47,$m6p48,$m6p49,$m6p50,$m6p51,$m6p52,$termino,$anio,$sistema,$adminEspol);
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