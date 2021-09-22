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
						
						if (isset($r[5]))   $avm1         =  validar_notas($r[5]);
						if (isset($r[7]))   $avm2         =  validar_notas($r[7]);
						if (isset($r[9]))   $avm3         =  validar_notas($r[9]);
						if (isset($r[11]))  $avm4         =  validar_notas($r[11]);
						if (isset($r[13]))  $avm5         =  validar_notas($r[13]);
						if (isset($r[15]))  $avm6         =  validar_notas($r[15]);
																			
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
							guardarDatosEncuestaDiagnosticoPractico($idEstudiante,$email,$usuario,$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$termino,$anio,$sistema,$adminEspol);		
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


						/*///////////////////////////////////////////////////////////////////////////////////////////////ppt
						if (isset($r[693]))
						{
							if (isset($r[693]))  $m3p1 = validar_notas($r[693]);
							if (isset($r[695]))  $m3p2 = validar_notas($r[695]);
							if (isset($r[697]))  $m3p3 = validar_notas($r[697]);
							if (isset($r[699]))  $m3p4 = validar_notas($r[699]);
							if (isset($r[701]))  $m3p5 = validar_notas($r[701]);
							if (isset($r[703]))  $m3p6 = validar_notas($r[703]);
							if (isset($r[705]))  $m3p7 = validar_notas($r[705]);
							if (isset($r[707]))  $m3p8 = validar_notas($r[707]);
							if (isset($r[709]))  $m3p9 = validar_notas($r[709]);
							if (isset($r[711]))  $m3p10 = validar_notas($r[711]);
							if (isset($r[713]))  $m3p11 = validar_notas($r[713]);
							if (isset($r[715]))  $m3p12 = validar_notas($r[715]);
							if (isset($r[717]))  $m3p13 = validar_notas($r[717]);
							if (isset($r[719]))  $m3p14 = validar_notas($r[719]);
							if (isset($r[721]))  $m3p15 = validar_notas($r[721]);
							if (isset($r[723]))  $m3p16 = validar_notas($r[723]);
							if (isset($r[725]))  $m3p17 = validar_notas($r[725]);
							if (isset($r[727]))  $m3p18 = validar_notas($r[727]);
							if (isset($r[729]))  $m3p19 = validar_notas($r[729]);
							if (isset($r[731]))  $m3p20 = validar_notas($r[731]);
							if (isset($r[733]))  $m3p21 = validar_notas($r[733]);
							if (isset($r[735]))  $m3p22 = validar_notas($r[735]);
							if (isset($r[737]))  $m3p23 = validar_notas($r[737]);
							if (isset($r[739]))  $m3p24 = validar_notas($r[739]);
							if (isset($r[741]))  $m3p25 = validar_notas($r[741]);
							if (isset($r[743]))  $m3p26 = validar_notas($r[743]);
							if (isset($r[745]))  $m3p27 = validar_notas($r[745]);
							if (isset($r[747]))  $m3p28 = validar_notas($r[747]);
							if (isset($r[749]))  $m3p29 = validar_notas($r[749]);
							if (isset($r[751]))  $m3p30 = validar_notas($r[751]);
							if (isset($r[753]))  $m3p31 = validar_notas($r[753]);
							if (isset($r[755]))  $m3p32 = validar_notas($r[755]);
							if (isset($r[757]))  $m3p33 = validar_notas($r[757]);
							if (isset($r[759]))  $m3p34 = validar_notas($r[759]);
							if (isset($r[761]))  $m3p35 = validar_notas($r[761]);
							if (isset($r[763]))  $m3p36 = validar_notas($r[763]);
							if (isset($r[765]))  $m3p37 = validar_notas($r[765]);
							if (isset($r[767]))  $m3p38 = validar_notas($r[767]);
							if (isset($r[769]))  $m3p39 = validar_notas($r[769]);
							if (isset($r[771]))  $m3p40 = validar_notas($r[771]);
							if (isset($r[773]))  $m3p41 = validar_notas($r[773]);
							if (isset($r[775]))  $m3p42 = validar_notas($r[775]);
							if (isset($r[777]))  $m3p43 = validar_notas($r[777]);
							if (isset($r[779]))  $m3p44 = validar_notas($r[779]);
							if (isset($r[781]))  $m3p45 = validar_notas($r[781]);
							if (isset($r[783]))  $m3p46 = validar_notas($r[783]);
							if (isset($r[785]))  $m3p47 = validar_notas($r[785]);
							if (isset($r[787]))  $m3p48 = validar_notas($r[787]);
							if (isset($r[789]))  $m3p49 = validar_notas($r[789]);
							if (isset($r[791]))  $m3p50 = validar_notas($r[791]);
							if (isset($r[793]))  $m3p51 = validar_notas($r[793]);
							if (isset($r[795]))  $m3p52 = validar_notas($r[795]);
							if (isset($r[797]))  $m3p53 = validar_notas($r[797]);
							if (isset($r[799]))  $m3p54 = validar_notas($r[799]);
							if (isset($r[801]))  $m3p55 = validar_notas($r[801]);
							if (isset($r[803]))  $m3p56 = validar_notas($r[803]);
							if (isset($r[805]))  $m3p57 = validar_notas($r[805]);
							if (isset($r[807]))  $m3p58 = validar_notas($r[807]);
							if (isset($r[809]))  $m3p59 = validar_notas($r[809]);
							if (isset($r[811]))  $m3p60 = validar_notas($r[811]);
							if (isset($r[813]))  $m3p61 = validar_notas($r[813]);
							if (isset($r[815]))  $m3p62 = validar_notas($r[815]);
							if (isset($r[817]))  $m3p63 = validar_notas($r[817]);
							if (isset($r[819]))  $m3p64 = validar_notas($r[819]);
							if (isset($r[821]))  $m3p65 = validar_notas($r[821]);
							if (isset($r[823]))  $m3p66 = validar_notas($r[823]);
							if (isset($r[825]))  $m3p67 = validar_notas($r[825]);
							if (isset($r[827]))  $m3p68 = validar_notas($r[827]);
							if (isset($r[829]))  $m3p69 = validar_notas($r[829]);
							if (isset($r[831]))  $m3p70 = validar_notas($r[831]);
							if (isset($r[833]))  $m3p71 = validar_notas($r[833]);
							if (isset($r[835]))  $m3p72 = validar_notas($r[835]);
							if (isset($r[837]))  $m3p73 = validar_notas($r[837]);
							if (isset($r[839]))  $m3p74 = validar_notas($r[839]);
							if (isset($r[841]))  $m3p75 = validar_notas($r[841]);
							if (isset($r[843]))  $m3p76 = validar_notas($r[843]);
							if (isset($r[845]))  $m3p77 = validar_notas($r[845]);
							if (isset($r[847]))  $m3p78 = validar_notas($r[847]);
							if (isset($r[849]))  $m3p79 = validar_notas($r[849]);
							if (isset($r[851]))  $m3p80 = validar_notas($r[851]);
							if (isset($r[853]))  $m3p81 = validar_notas($r[853]);
							if (isset($r[855]))  $m3p82 = validar_notas($r[855]);
							if (isset($r[857]))  $m3p83 = validar_notas($r[857]);
							if (isset($r[859]))  $m3p84 = validar_notas($r[859]);
							if (isset($r[861]))  $m3p85 = validar_notas($r[861]);
							if (isset($r[863]))  $m3p86 = validar_notas($r[863]);
						}

						///////////////////////////////////////////////////////////////////////////////////////////////excel
						if (isset($r[865]))
						{
							if (isset($r[865]))  $m4p1 = validar_notas($r[865]);
							if (isset($r[867]))  $m4p2 = validar_notas($r[867]);
							if (isset($r[869]))  $m4p3 = validar_notas($r[869]);
							if (isset($r[871]))  $m4p4 = validar_notas($r[871]);
							if (isset($r[873]))  $m4p5 = validar_notas($r[873]);
							if (isset($r[875]))  $m4p6 = validar_notas($r[875]);
							if (isset($r[877]))  $m4p7 = validar_notas($r[877]);
							if (isset($r[879]))  $m4p8 = validar_notas($r[879]);
							if (isset($r[881]))  $m4p9 = validar_notas($r[881]);
							if (isset($r[883]))  $m4p10 = validar_notas($r[883]);
							if (isset($r[885]))  $m4p11 = validar_notas($r[885]);
							if (isset($r[887]))  $m4p12 = validar_notas($r[887]);
							if (isset($r[889]))  $m4p13 = validar_notas($r[889]);
							if (isset($r[891]))  $m4p14 = validar_notas($r[891]);
							if (isset($r[893]))  $m4p15 = validar_notas($r[893]);
							if (isset($r[895]))  $m4p16 = validar_notas($r[895]);
							if (isset($r[897]))  $m4p17 = validar_notas($r[897]);
							if (isset($r[899]))  $m4p18 = validar_notas($r[899]);
							if (isset($r[901]))  $m4p19 = validar_notas($r[901]);
							if (isset($r[903]))  $m4p20 = validar_notas($r[903]);
							if (isset($r[905]))  $m4p21 = validar_notas($r[905]);
							if (isset($r[907]))  $m4p22 = validar_notas($r[907]);
							if (isset($r[909]))  $m4p23 = validar_notas($r[909]);
							if (isset($r[911]))  $m4p24 = validar_notas($r[911]);
							if (isset($r[913]))  $m4p25 = validar_notas($r[913]);
							if (isset($r[915]))  $m4p26 = validar_notas($r[915]);
							if (isset($r[917]))  $m4p27 = validar_notas($r[917]);
							if (isset($r[919]))  $m4p28 = validar_notas($r[919]);
							if (isset($r[921]))  $m4p29 = validar_notas($r[921]);
							if (isset($r[923]))  $m4p30 = validar_notas($r[923]);
							if (isset($r[925]))  $m4p31 = validar_notas($r[925]);
							if (isset($r[927]))  $m4p32 = validar_notas($r[927]);
							if (isset($r[929]))  $m4p33 = validar_notas($r[929]);
							if (isset($r[931]))  $m4p34 = validar_notas($r[931]);
							if (isset($r[933]))  $m4p35 = validar_notas($r[933]);
							if (isset($r[935]))  $m4p36 = validar_notas($r[935]);
							if (isset($r[937]))  $m4p37 = validar_notas($r[937]);
							if (isset($r[939]))  $m4p38 = validar_notas($r[939]);
							if (isset($r[941]))  $m4p39 = validar_notas($r[941]);
							if (isset($r[943]))  $m4p40 = validar_notas($r[943]);
							if (isset($r[945]))  $m4p41 = validar_notas($r[945]);
							if (isset($r[947]))  $m4p42 = validar_notas($r[947]);
							if (isset($r[949]))  $m4p43 = validar_notas($r[949]);
							if (isset($r[951]))  $m4p44 = validar_notas($r[951]);
							if (isset($r[953]))  $m4p45 = validar_notas($r[953]);
							if (isset($r[955]))  $m4p46 = validar_notas($r[955]);
							if (isset($r[957]))  $m4p47 = validar_notas($r[957]);
							if (isset($r[959]))  $m4p48 = validar_notas($r[959]);
							if (isset($r[961]))  $m4p49 = validar_notas($r[961]);
							if (isset($r[963]))  $m4p50 = validar_notas($r[963]);
							if (isset($r[965]))  $m4p51 = validar_notas($r[965]);
							if (isset($r[967]))  $m4p52 = validar_notas($r[967]);
							if (isset($r[969]))  $m4p53 = validar_notas($r[969]);
							if (isset($r[971]))  $m4p54 = validar_notas($r[971]);
							if (isset($r[973]))  $m4p55 = validar_notas($r[973]);
							if (isset($r[975]))  $m4p56 = validar_notas($r[975]);
							if (isset($r[977]))  $m4p57 = validar_notas($r[977]);
							if (isset($r[979]))  $m4p58 = validar_notas($r[979]);
							if (isset($r[981]))  $m4p59 = validar_notas($r[981]);
							if (isset($r[983]))  $m4p60 = validar_notas($r[983]);
							if (isset($r[985]))  $m4p61 = validar_notas($r[985]);
							if (isset($r[987]))  $m4p62 = validar_notas($r[987]);
							if (isset($r[989]))  $m4p63 = validar_notas($r[989]);
							if (isset($r[991]))  $m4p64 = validar_notas($r[991]);
							if (isset($r[993]))  $m4p65 = validar_notas($r[993]);
							if (isset($r[995]))  $m4p66 = validar_notas($r[995]);
							if (isset($r[997]))  $m4p67 = validar_notas($r[997]);
							if (isset($r[999]))  $m4p68 = validar_notas($r[999]);
							if (isset($r[1001]))  $m4p69 = validar_notas($r[1001]);
							if (isset($r[1003]))  $m4p70 = validar_notas($r[1003]);
							if (isset($r[1005]))  $m4p71 = validar_notas($r[1005]);
							if (isset($r[1007]))  $m4p72 = validar_notas($r[1007]);
							if (isset($r[1009]))  $m4p73 = validar_notas($r[1009]);
							if (isset($r[1011]))  $m4p74 = validar_notas($r[1011]);
							if (isset($r[1013]))  $m4p75 = validar_notas($r[1013]);
							if (isset($r[1015]))  $m4p76 = validar_notas($r[1015]);
							if (isset($r[1017]))  $m4p77 = validar_notas($r[1017]);
							if (isset($r[1019]))  $m4p78 = validar_notas($r[1019]);
							if (isset($r[1021]))  $m4p79 = validar_notas($r[1021]);
							if (isset($r[1023]))  $m4p80 = validar_notas($r[1023]);
							if (isset($r[1025]))  $m4p81 = validar_notas($r[1025]);
							if (isset($r[1027]))  $m4p82 = validar_notas($r[1027]);
							if (isset($r[1029]))  $m4p83 = validar_notas($r[1029]);
							if (isset($r[1031]))  $m4p84 = validar_notas($r[1031]);
							if (isset($r[1033]))  $m4p85 = validar_notas($r[1033]);
							if (isset($r[1035]))  $m4p86 = validar_notas($r[1035]);
							if (isset($r[1037]))  $m4p87 = validar_notas($r[1037]);
							if (isset($r[1039]))  $m4p88 = validar_notas($r[1039]);
							if (isset($r[1041]))  $m4p89 = validar_notas($r[1041]);
						}

						///////////////////////////////////////////////////////////////////////////////////////////////word
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
						}*/


							/*guardarDatosExamenTeoricoPPT_Practico($idEstudiante,$email,$usuario,$grado,$m3p1,$m3p2,$m3p3,$m3p4,$m3p5,$m3p6,$m3p7,$m3p8,$m3p9,$m3p10,$m3p11,$m3p12,$m3p13,$m3p14,$m3p15,$m3p16,$m3p17,$m3p18,$m3p19,$m3p20,$m3p21,$m3p22,$m3p23,$m3p24,$m3p25,$m3p26,$m3p27,$m3p28,$m3p29,$m3p30,$m3p31,$m3p32,$m3p33,$m3p34,$m3p35,$m3p36,$m3p37,$m3p38,$m3p39,$m3p40,$m3p41,$m3p42,$m3p43,$m3p44,$m3p45,$m3p46,$m3p47,$m3p48,$m3p49,$m3p50,$m3p51,$m3p52,$m3p53,$m3p54,$m3p55,$m3p56,$m3p57,$m3p58,$m3p59,$m3p60,$m3p61,$m3p62,$m3p63,$m3p64,$m3p65,$m3p66,$m3p67,$m3p68,$m3p69,$m3p70,$m3p71,$m3p72,$m3p73,$m3p74,$m3p75,$m3p76,$m3p77,$m3p78,$m3p79,$m3p80,$m3p81,$m3p82,$m3p83,$m3p84,$m3p85,$m3p86,$termino,$anio,$sistema,$adminEspol);

							guardarDatosExamenTeoricoExcel_Practico($idEstudiante,$email,$usuario,$grado,$m4p1,$m4p2,$m4p3,$m4p4,$m4p5,$m4p6,$m4p7,$m4p8,$m4p9,$m4p10,$m4p11,$m4p12,$m4p13,$m4p14,$m4p15,$m4p16,$m4p17,$m4p18,$m4p19,$m4p20,$m4p21,$m4p22,$m4p23,$m4p24,$m4p25,$m4p26,$m4p27,$m4p28,$m4p29,$m4p30,$m4p31,$m4p32,$m4p33,$m4p34,$m4p35,$m4p36,$m4p37,$m4p38,$m4p39,$m4p40,$m4p41,$m4p42,$m4p43,$m4p44,$m4p45,$m4p46,$m4p47,$m4p48,$m4p49,$m4p50,$m4p51,$m4p52,$m4p53,$m4p54,$m4p55,$m4p56,$m4p57,$m4p58,$m4p59,$m4p60,$m4p61,$m4p62,$m4p63,$m4p64,$m4p65,$m4p66,$m4p67,$m4p68,$m4p69,$m4p70,$m4p71,$m4p72,$m4p73,$m4p74,$m4p75,$m4p76,$m4p77,$m4p78,$m4p79,$m4p80,$m4p81,$m4p82,$m4p83,$m4p84,$m4p85,$m4p86,$m4p87,$m4p88,$m4p89,$termino,$anio,$sistema,$adminEspol);

							guardarDatosExamenTeoricoWord_Practico($idEstudiante,$email,$usuario,$grado,$m5p1,$m5p2,$m5p3,$m5p4,$m5p5,$m5p6,$m5p7,$m5p8,$m5p9,$m5p10,$m5p11,$m5p12,$m5p13,$m5p14,$m5p15,$m5p16,$m5p17,$m5p18,$m5p19,$m5p20,$m5p21,$m5p22,$m5p23,$m5p24,$m5p25,$m5p26,$m5p27,$m5p28,$m5p29,$m5p30,$m5p31,$m5p32,$m5p33,$m5p34,$m5p35,$m5p36,$m5p37,$m5p38,$m5p39,$m5p40,$m5p41,$m5p42,$m5p43,$m5p44,$m5p45,$m5p46,$m5p47,$m5p48,$m5p49,$m5p50,$m5p51,$m5p52,$m5p53,$m5p54,$m5p55,$m5p56,$m5p57,$m5p58,$m5p59,$m5p60,$m5p61,$m5p62,$m5p63,$m5p64,$m5p65,$m5p66,$m5p67,$m5p68,$m5p69,$m5p70,$m5p71,$m5p72,$m5p73,$m5p74,$m5p75,$m5p76,$m5p77,$m5p78,$m5p79,$m5p80,$m5p81,$m5p82,$m5p83,$m5p84,$m5p85,$m5p86,$termino,$anio,$sistema,$adminEspol);*/