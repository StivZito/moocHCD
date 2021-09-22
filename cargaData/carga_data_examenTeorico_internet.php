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

						if (isset($r[477]))
						{
							if (isset($r[477]))  $m2p1 = validar_notas($r[477]);
							if (isset($r[479]))  $m2p2 = validar_notas($r[479]);
							if (isset($r[481]))  $m2p3 = validar_notas($r[481]);
							if (isset($r[483]))  $m2p4 = validar_notas($r[483]);
							if (isset($r[485]))  $m2p5 = validar_notas($r[485]);
							if (isset($r[487]))  $m2p6 = validar_notas($r[487]);
							if (isset($r[489]))  $m2p7 = validar_notas($r[489]);
							if (isset($r[491]))  $m2p8 = validar_notas($r[491]);
							if (isset($r[493]))  $m2p9 = validar_notas($r[493]);
							if (isset($r[495]))  $m2p10 = validar_notas($r[495]);
							if (isset($r[497]))  $m2p11 = validar_notas($r[497]);
							if (isset($r[499]))  $m2p12 = validar_notas($r[499]);
							if (isset($r[501]))  $m2p13 = validar_notas($r[501]);
							if (isset($r[503]))  $m2p14 = validar_notas($r[503]);
							if (isset($r[505]))  $m2p15 = validar_notas($r[505]);
							if (isset($r[507]))  $m2p16 = validar_notas($r[507]);
							if (isset($r[509]))  $m2p17 = validar_notas($r[509]);
							if (isset($r[511]))  $m2p18 = validar_notas($r[511]);
							if (isset($r[513]))  $m2p19 = validar_notas($r[513]);
							if (isset($r[515]))  $m2p20 = validar_notas($r[515]);
							if (isset($r[517]))  $m2p21 = validar_notas($r[517]);
							if (isset($r[519]))  $m2p22 = validar_notas($r[519]);
							if (isset($r[521]))  $m2p23 = validar_notas($r[521]);
							if (isset($r[523]))  $m2p24 = validar_notas($r[523]);
							if (isset($r[525]))  $m2p25 = validar_notas($r[525]);
							if (isset($r[527]))  $m2p26 = validar_notas($r[527]);
							if (isset($r[529]))  $m2p27 = validar_notas($r[529]);
							if (isset($r[531]))  $m2p28 = validar_notas($r[531]);
							if (isset($r[533]))  $m2p29 = validar_notas($r[533]);
							if (isset($r[535]))  $m2p30 = validar_notas($r[535]);
							if (isset($r[537]))  $m2p31 = validar_notas($r[537]);
							if (isset($r[539]))  $m2p32 = validar_notas($r[539]);
							if (isset($r[541]))  $m2p33 = validar_notas($r[541]);
							if (isset($r[543]))  $m2p34 = validar_notas($r[543]);
							if (isset($r[545]))  $m2p35 = validar_notas($r[545]);
							if (isset($r[547]))  $m2p36 = validar_notas($r[547]);
							if (isset($r[549]))  $m2p37 = validar_notas($r[549]);
							if (isset($r[551]))  $m2p38 = validar_notas($r[551]);
							if (isset($r[553]))  $m2p39 = validar_notas($r[553]);
							if (isset($r[555]))  $m2p40 = validar_notas($r[555]);
							if (isset($r[557]))  $m2p41 = validar_notas($r[557]);
							if (isset($r[559]))  $m2p42 = validar_notas($r[559]);
							if (isset($r[561]))  $m2p43 = validar_notas($r[561]);
							if (isset($r[563]))  $m2p44 = validar_notas($r[563]);
							if (isset($r[565]))  $m2p45 = validar_notas($r[565]);
							if (isset($r[567]))  $m2p46 = validar_notas($r[567]);
							if (isset($r[569]))  $m2p47 = validar_notas($r[569]);
							if (isset($r[571]))  $m2p48 = validar_notas($r[571]);
							if (isset($r[573]))  $m2p49 = validar_notas($r[573]);
							if (isset($r[575]))  $m2p50 = validar_notas($r[575]);
							if (isset($r[577]))  $m2p51 = validar_notas($r[577]);
							if (isset($r[579]))  $m2p52 = validar_notas($r[579]);
							if (isset($r[581]))  $m2p53 = validar_notas($r[581]);
							if (isset($r[583]))  $m2p54 = validar_notas($r[583]);
							if (isset($r[585]))  $m2p55 = validar_notas($r[585]);
							if (isset($r[587]))  $m2p56 = validar_notas($r[587]);
							if (isset($r[589]))  $m2p57 = validar_notas($r[589]);
							if (isset($r[591]))  $m2p58 = validar_notas($r[591]);
							if (isset($r[593]))  $m2p59 = validar_notas($r[593]);
							if (isset($r[595]))  $m2p60 = validar_notas($r[595]);
							if (isset($r[597]))  $m2p61 = validar_notas($r[597]);
							if (isset($r[599]))  $m2p62 = validar_notas($r[599]);
							if (isset($r[601]))  $m2p63 = validar_notas($r[601]);
							if (isset($r[603]))  $m2p64 = validar_notas($r[603]);
							if (isset($r[605]))  $m2p65 = validar_notas($r[605]);
							if (isset($r[607]))  $m2p66 = validar_notas($r[607]);
							if (isset($r[609]))  $m2p67 = validar_notas($r[609]);
							if (isset($r[611]))  $m2p68 = validar_notas($r[611]);
							if (isset($r[613]))  $m2p69 = validar_notas($r[613]);
							if (isset($r[615]))  $m2p70 = validar_notas($r[615]);
							if (isset($r[617]))  $m2p71 = validar_notas($r[617]);
							if (isset($r[619]))  $m2p72 = validar_notas($r[619]);
							if (isset($r[621]))  $m2p73 = validar_notas($r[621]);
							if (isset($r[623]))  $m2p74 = validar_notas($r[623]);
							if (isset($r[625]))  $m2p75 = validar_notas($r[625]);
							if (isset($r[627]))  $m2p76 = validar_notas($r[627]);
							if (isset($r[629]))  $m2p77 = validar_notas($r[629]);
							if (isset($r[631]))  $m2p78 = validar_notas($r[631]);
							if (isset($r[633]))  $m2p79 = validar_notas($r[633]);
							if (isset($r[635]))  $m2p80 = validar_notas($r[635]);
							if (isset($r[637]))  $m2p81 = validar_notas($r[637]);
							if (isset($r[639]))  $m2p82 = validar_notas($r[639]);
							if (isset($r[641]))  $m2p83 = validar_notas($r[641]);
							if (isset($r[643]))  $m2p84 = validar_notas($r[643]);
							if (isset($r[645]))  $m2p85 = validar_notas($r[645]);
							if (isset($r[647]))  $m2p86 = validar_notas($r[647]);
							if (isset($r[649]))  $m2p87 = validar_notas($r[649]);
							if (isset($r[651]))  $m2p88 = validar_notas($r[651]);
							if (isset($r[653]))  $m2p89 = validar_notas($r[653]);
							if (isset($r[655]))  $m2p90 = validar_notas($r[655]);
							if (isset($r[657]))  $m2p91 = validar_notas($r[657]);
							if (isset($r[659]))  $m2p92 = validar_notas($r[659]);
							if (isset($r[661]))  $m2p93 = validar_notas($r[661]);
							if (isset($r[663]))  $m2p94 = validar_notas($r[663]);
							if (isset($r[665]))  $m2p95 = validar_notas($r[665]);
							if (isset($r[667]))  $m2p96 = validar_notas($r[667]);
							if (isset($r[669]))  $m2p97 = validar_notas($r[669]);
							if (isset($r[671]))  $m2p98 = validar_notas($r[671]);
							if (isset($r[673]))  $m2p99 = validar_notas($r[673]);
							if (isset($r[675]))  $m2p100 =  validar_notas($r[675]);
							if (isset($r[677]))  $m2p101 =  validar_notas($r[677]);
							if (isset($r[679]))  $m2p102 =  validar_notas($r[679]);
							if (isset($r[681]))  $m2p103 =  validar_notas($r[681]);
							if (isset($r[683]))  $m2p104 =  validar_notas($r[683]);
							if (isset($r[685]))  $m2p105 =  validar_notas($r[685]);
							if (isset($r[687]))  $m2p106 =  validar_notas($r[687]);
							if (isset($r[689]))  $m2p107 =  validar_notas($r[689]);
							if (isset($r[691]))  $m2p108 =  validar_notas($r[691]);
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
						guardarDatosExamenTeoricoInternet($idEstudiante,$email,$usuario,$grado,$m2p1,$m2p2,$m2p3,$m2p4,$m2p5,$m2p6,$m2p7,$m2p8,$m2p9,$m2p10,$m2p11,$m2p12,$m2p13,$m2p14,$m2p15,$m2p16,$m2p17,$m2p18,$m2p19,$m2p20,$m2p21,$m2p22,$m2p23,$m2p24,$m2p25,$m2p26,$m2p27,$m2p28,$m2p29,$m2p30,$m2p31,$m2p32,$m2p33,$m2p34,$m2p35,$m2p36,$m2p37,$m2p38,$m2p39,$m2p40,$m2p41,$m2p42,$m2p43,$m2p44,$m2p45,$m2p46,$m2p47,$m2p48,$m2p49,$m2p50,$m2p51,$m2p52,$m2p53,$m2p54,$m2p55,$m2p56,$m2p57,$m2p58,$m2p59,$m2p60,$m2p61,$m2p62,$m2p63,$m2p64,$m2p65,$m2p66,$m2p67,$m2p68,$m2p69,$m2p70,$m2p71,$m2p72,$m2p73,$m2p74,$m2p75,$m2p76,$m2p77,$m2p78,$m2p79,$m2p80,$m2p81,$m2p82,$m2p83,$m2p84,$m2p85,$m2p86,$m2p87,$m2p88,$m2p89,$m2p90,$m2p91,$m2p92,$m2p93,$m2p94,$m2p95,$m2p96,$m2p97,$m2p98,$m2p99,$m2p100,$m2p101,$m2p102,$m2p103,$m2p104,$m2p105,$m2p106,$m2p107,$m2p108,$termino,$anio,$sistema,$adminEspol);
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