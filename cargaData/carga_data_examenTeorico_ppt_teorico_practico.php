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
						guardarDatosExamenTeoricoPPT_TeoricoPractico($idEstudiante,$email,$usuario,$grado,$m3p1,$m3p2,$m3p3,$m3p4,$m3p5,$m3p6,$m3p7,$m3p8,$m3p9,$m3p10,$m3p11,$m3p12,$m3p13,$m3p14,$m3p15,$m3p16,$m3p17,$m3p18,$m3p19,$m3p20,$m3p21,$m3p22,$m3p23,$m3p24,$m3p25,$m3p26,$m3p27,$m3p28,$m3p29,$m3p30,$m3p31,$m3p32,$m3p33,$m3p34,$m3p35,$m3p36,$m3p37,$m3p38,$m3p39,$m3p40,$m3p41,$m3p42,$m3p43,$m3p44,$m3p45,$m3p46,$m3p47,$m3p48,$m3p49,$m3p50,$m3p51,$m3p52,$m3p53,$m3p54,$m3p55,$m3p56,$m3p57,$m3p58,$m3p59,$m3p60,$m3p61,$m3p62,$m3p63,$m3p64,$m3p65,$m3p66,$m3p67,$m3p68,$m3p69,$m3p70,$m3p71,$m3p72,$m3p73,$m3p74,$m3p75,$m3p76,$m3p77,$m3p78,$m3p79,$m3p80,$m3p81,$m3p82,$m3p83,$m3p84,$m3p85,$m3p86,$termino,$anio,$sistema,$adminEspol);

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