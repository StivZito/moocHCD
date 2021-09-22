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
						if (isset($r[0]))                               $idEstudiante = utf8_encode($r[0]);   else	$idEstudiante = ''; 
						if (isset($r[2]))                               $usuario      = utf8_encode($r[2]);   else	$usuario      = ''; 

						if (isset($r[4])  && $r[4] !== 'Not Available' && $r[4] !== '') $grado      = utf8_encode($r[4]);                              else	$grado      =   0; 							
						if (isset($r[3])  && $r[3] !== 'Not Available' && $r[3] !== '') $enrollment = strtolower(ltrim(rtrim(quitar_tildes($r[3]))));  else $enrollment == ''; 	
						if (isset($r[1])  && $r[1] !== 'Not Available' && $r[1] !== '') $email      = strtolower(ltrim(rtrim(quitar_tildes($r[1]))));  else $email      == ''; 	
						
						if (isset($r[1043]))
						{
							if (isset($r[1043]))  $m5p1 = validar_notas($r[1043]);
							if (isset($r[1045]))  $m5p2 = validar_notas($r[1045]);
							if (isset($r[1047]))  $m5p3 = validar_notas($r[1047]);
							if (isset($r[1049]))  $m5p4 = validar_notas($r[1049]);
							if (isset($r[1051]))  $m5p5 = validar_notas($r[1051]);
							if (isset($r[1053]))  $m5p6 = validar_notas($r[1053]);
							if (isset($r[1055]))  $m5p7 = validar_notas($r[1055]);
							if (isset($r[1057]))  $m5p8 = validar_notas($r[1057]);
							if (isset($r[1059]))  $m5p9 = validar_notas($r[1059]);
							if (isset($r[1061]))  $m5p10 = validar_notas($r[1061]);
							if (isset($r[1063]))  $m5p11 = validar_notas($r[1063]);
							if (isset($r[1065]))  $m5p12 = validar_notas($r[1065]);
							if (isset($r[1067]))  $m5p13 = validar_notas($r[1067]);
							if (isset($r[1069]))  $m5p14 = validar_notas($r[1069]);
							if (isset($r[1071]))  $m5p15 = validar_notas($r[1071]);
							if (isset($r[1073]))  $m5p16 = validar_notas($r[1073]);
							if (isset($r[1075]))  $m5p17 = validar_notas($r[1075]);
							if (isset($r[1077]))  $m5p18 = validar_notas($r[1077]);
							if (isset($r[1079]))  $m5p19 = validar_notas($r[1079]);
							if (isset($r[1081]))  $m5p20 = validar_notas($r[1081]);
							if (isset($r[1083]))  $m5p21 = validar_notas($r[1083]);
							if (isset($r[1085]))  $m5p22 = validar_notas($r[1085]);
							if (isset($r[1087]))  $m5p23 = validar_notas($r[1087]);
							if (isset($r[1089]))  $m5p24 = validar_notas($r[1089]);
							if (isset($r[1091]))  $m5p25 = validar_notas($r[1091]);
							if (isset($r[1093]))  $m5p26 = validar_notas($r[1093]);
							if (isset($r[1095]))  $m5p27 = validar_notas($r[1095]);
							if (isset($r[1097]))  $m5p28 = validar_notas($r[1097]);
							if (isset($r[1099]))  $m5p29 = validar_notas($r[1099]);
							if (isset($r[1101]))  $m5p30 = validar_notas($r[1101]);
							if (isset($r[1103]))  $m5p31 = validar_notas($r[1103]);
							if (isset($r[1105]))  $m5p32 = validar_notas($r[1105]);
							if (isset($r[1107]))  $m5p33 = validar_notas($r[1107]);
							if (isset($r[1109]))  $m5p34 = validar_notas($r[1109]);
							if (isset($r[1111]))  $m5p35 = validar_notas($r[1111]);
							if (isset($r[1113]))  $m5p36 = validar_notas($r[1113]);
							if (isset($r[1115]))  $m5p37 = validar_notas($r[1115]);
							if (isset($r[1117]))  $m5p38 = validar_notas($r[1117]);
							if (isset($r[1119]))  $m5p39 = validar_notas($r[1119]);
							if (isset($r[1121]))  $m5p40 = validar_notas($r[1121]);
							if (isset($r[1123]))  $m5p41 = validar_notas($r[1123]);
							if (isset($r[1125]))  $m5p42 = validar_notas($r[1125]);
							if (isset($r[1127]))  $m5p43 = validar_notas($r[1127]);
							if (isset($r[1129]))  $m5p44 = validar_notas($r[1129]);
							if (isset($r[1131]))  $m5p45 = validar_notas($r[1131]);
							if (isset($r[1133]))  $m5p46 = validar_notas($r[1133]);
							if (isset($r[1135]))  $m5p47 = validar_notas($r[1135]);
							if (isset($r[1137]))  $m5p48 = validar_notas($r[1137]);
							if (isset($r[1139]))  $m5p49 = validar_notas($r[1139]);
							if (isset($r[1141]))  $m5p50 = validar_notas($r[1141]);
							if (isset($r[1143]))  $m5p51 = validar_notas($r[1143]);
							if (isset($r[1145]))  $m5p52 = validar_notas($r[1145]);
							if (isset($r[1147]))  $m5p53 = validar_notas($r[1147]);
							if (isset($r[1149]))  $m5p54 = validar_notas($r[1149]);
							if (isset($r[1151]))  $m5p55 = validar_notas($r[1151]);
							if (isset($r[1153]))  $m5p56 = validar_notas($r[1153]);
							if (isset($r[1155]))  $m5p57 = validar_notas($r[1155]);
							if (isset($r[1157]))  $m5p58 = validar_notas($r[1157]);
							if (isset($r[1159]))  $m5p59 = validar_notas($r[1159]);
							if (isset($r[1161]))  $m5p60 = validar_notas($r[1161]);
							if (isset($r[1163]))  $m5p61 = validar_notas($r[1163]);
							if (isset($r[1165]))  $m5p62 = validar_notas($r[1165]);
							if (isset($r[1167]))  $m5p63 = validar_notas($r[1167]);
							if (isset($r[1169]))  $m5p64 = validar_notas($r[1169]);
							if (isset($r[1171]))  $m5p65 = validar_notas($r[1171]);
							if (isset($r[1173]))  $m5p66 = validar_notas($r[1173]);
							if (isset($r[1175]))  $m5p67 = validar_notas($r[1175]);
							if (isset($r[1177]))  $m5p68 = validar_notas($r[1177]);
							if (isset($r[1179]))  $m5p69 = validar_notas($r[1179]);
							if (isset($r[1181]))  $m5p70 = validar_notas($r[1181]);
							if (isset($r[1183]))  $m5p71 = validar_notas($r[1183]);
							if (isset($r[1185]))  $m5p72 = validar_notas($r[1185]);
							if (isset($r[1187]))  $m5p73 = validar_notas($r[1187]);
							if (isset($r[1189]))  $m5p74 = validar_notas($r[1189]);
							if (isset($r[1191]))  $m5p75 = validar_notas($r[1191]);
							if (isset($r[1193]))  $m5p76 = validar_notas($r[1193]);
							if (isset($r[1195]))  $m5p77 = validar_notas($r[1195]);
							if (isset($r[1197]))  $m5p78 = validar_notas($r[1197]);
							if (isset($r[1199]))  $m5p79 = validar_notas($r[1199]);
							if (isset($r[1201]))  $m5p80 = validar_notas($r[1201]);
							if (isset($r[1203]))  $m5p81 = validar_notas($r[1203]);
							if (isset($r[1205]))  $m5p82 = validar_notas($r[1205]);
							if (isset($r[1207]))  $m5p83 = validar_notas($r[1207]);
							if (isset($r[1209]))  $m5p84 = validar_notas($r[1209]);
							if (isset($r[1211]))  $m5p85 = validar_notas($r[1211]);
							if (isset($r[1213]))  $m5p86 = validar_notas($r[1213]);
						}
																			
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
						guardarDatosExamenTeoricoWord_Practico($idEstudiante,$email,$usuario,$grado,$m5p1,$m5p2,$m5p3,$m5p4,$m5p5,$m5p6,$m5p7,$m5p8,$m5p9,$m5p10,$m5p11,$m5p12,$m5p13,$m5p14,$m5p15,$m5p16,$m5p17,$m5p18,$m5p19,$m5p20,$m5p21,$m5p22,$m5p23,$m5p24,$m5p25,$m5p26,$m5p27,$m5p28,$m5p29,$m5p30,$m5p31,$m5p32,$m5p33,$m5p34,$m5p35,$m5p36,$m5p37,$m5p38,$m5p39,$m5p40,$m5p41,$m5p42,$m5p43,$m5p44,$m5p45,$m5p46,$m5p47,$m5p48,$m5p49,$m5p50,$m5p51,$m5p52,$m5p53,$m5p54,$m5p55,$m5p56,$m5p57,$m5p58,$m5p59,$m5p60,$m5p61,$m5p62,$m5p63,$m5p64,$m5p65,$m5p66,$m5p67,$m5p68,$m5p69,$m5p70,$m5p71,$m5p72,$m5p73,$m5p74,$m5p75,$m5p76,$m5p77,$m5p78,$m5p79,$m5p80,$m5p81,$m5p82,$m5p83,$m5p84,$m5p85,$m5p86,$termino,$anio,$sistema,$adminEspol);
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