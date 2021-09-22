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

						if (isset($r[5]))   $avm1         =  validar_notas($r[5]);
						if (isset($r[7]))   $avm2         =  validar_notas($r[7]);
						if (isset($r[9]))   $avm3         =  validar_notas($r[9]);
						if (isset($r[11]))  $avm4         =  validar_notas($r[11]);
						if (isset($r[13]))  $avm5         =  validar_notas($r[13]);
						if (isset($r[15]))  $avm6         =  validar_notas($r[15]);

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
							guardarDatosEncuestaDiagnosticoTeoricoPractico($idEstudiante,$email,$usuario,$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$termino,$anio,$sistema,$adminEspol);				

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



						/*///////////////////////////////////////////////////////////////////////////////////////////////computador
						if (isset($r[269]))
						{
							if (isset($r[269]))  $m1p1 = validar_notas($r[269]);
							if (isset($r[271]))  $m1p2 = validar_notas($r[271]);
							if (isset($r[273]))  $m1p3 = validar_notas($r[273]);
							if (isset($r[275]))  $m1p4 = validar_notas($r[275]);
							if (isset($r[277]))  $m1p5 = validar_notas($r[277]);
							if (isset($r[279]))  $m1p6 = validar_notas($r[279]);
							if (isset($r[281]))  $m1p7 = validar_notas($r[281]);
							if (isset($r[283]))  $m1p8 = validar_notas($r[283]);
							if (isset($r[285]))  $m1p9 = validar_notas($r[285]);
							if (isset($r[287]))  $m1p10 = validar_notas($r[287]);
							if (isset($r[289]))  $m1p11 = validar_notas($r[289]);
							if (isset($r[291]))  $m1p12 = validar_notas($r[291]);
							if (isset($r[293]))  $m1p13 = validar_notas($r[293]);
							if (isset($r[295]))  $m1p14 = validar_notas($r[295]);
							if (isset($r[297]))  $m1p15 = validar_notas($r[297]);
							if (isset($r[299]))  $m1p16 = validar_notas($r[299]);
							if (isset($r[301]))  $m1p17 = validar_notas($r[301]);
							if (isset($r[303]))  $m1p18 = validar_notas($r[303]);
							if (isset($r[305]))  $m1p19 = validar_notas($r[305]);
							if (isset($r[307]))  $m1p20 = validar_notas($r[307]);
							if (isset($r[309]))  $m1p21 = validar_notas($r[309]);
							if (isset($r[311]))  $m1p22 = validar_notas($r[311]);
							if (isset($r[313]))  $m1p23 = validar_notas($r[313]);
							if (isset($r[315]))  $m1p24 = validar_notas($r[315]);
							if (isset($r[317]))  $m1p25 = validar_notas($r[317]);
							if (isset($r[319]))  $m1p26 = validar_notas($r[319]);
							if (isset($r[321]))  $m1p27 = validar_notas($r[321]);
							if (isset($r[323]))  $m1p28 = validar_notas($r[323]);
							if (isset($r[325]))  $m1p29 = validar_notas($r[325]);
							if (isset($r[327]))  $m1p30 = validar_notas($r[327]);
							if (isset($r[329]))  $m1p31 = validar_notas($r[329]);
							if (isset($r[331]))  $m1p32 = validar_notas($r[331]);
							if (isset($r[333]))  $m1p33 = validar_notas($r[333]);
							if (isset($r[335]))  $m1p34 = validar_notas($r[335]);
							if (isset($r[337]))  $m1p35 = validar_notas($r[337]);
							if (isset($r[339]))  $m1p36 = validar_notas($r[339]);
							if (isset($r[341]))  $m1p37 = validar_notas($r[341]);
							if (isset($r[343]))  $m1p38 = validar_notas($r[343]);
							if (isset($r[345]))  $m1p39 = validar_notas($r[345]);
							if (isset($r[347]))  $m1p40 = validar_notas($r[347]);
							if (isset($r[349]))  $m1p41 = validar_notas($r[349]);
							if (isset($r[351]))  $m1p42 = validar_notas($r[351]);
							if (isset($r[353]))  $m1p43 = validar_notas($r[353]);
							if (isset($r[355]))  $m1p44 = validar_notas($r[355]);
							if (isset($r[357]))  $m1p45 = validar_notas($r[357]);
							if (isset($r[359]))  $m1p46 = validar_notas($r[359]);
							if (isset($r[361]))  $m1p47 = validar_notas($r[361]);
							if (isset($r[363]))  $m1p48 = validar_notas($r[363]);
							if (isset($r[365]))  $m1p49 = validar_notas($r[365]);
							if (isset($r[367]))  $m1p50 = validar_notas($r[367]);
							if (isset($r[369]))  $m1p51 = validar_notas($r[369]);
							if (isset($r[371]))  $m1p52 = validar_notas($r[371]);
							if (isset($r[373]))  $m1p53 = validar_notas($r[373]);
							if (isset($r[375]))  $m1p54 = validar_notas($r[375]);
							if (isset($r[377]))  $m1p55 = validar_notas($r[377]);
							if (isset($r[379]))  $m1p56 = validar_notas($r[379]);
							if (isset($r[381]))  $m1p57 = validar_notas($r[381]);
							if (isset($r[383]))  $m1p58 = validar_notas($r[383]);
							if (isset($r[385]))  $m1p59 = validar_notas($r[385]);
							if (isset($r[387]))  $m1p60 = validar_notas($r[387]);
							if (isset($r[389]))  $m1p61 = validar_notas($r[389]);
							if (isset($r[391]))  $m1p62 = validar_notas($r[391]);
							if (isset($r[393]))  $m1p63 = validar_notas($r[393]);
							if (isset($r[395]))  $m1p64 = validar_notas($r[395]);
							if (isset($r[397]))  $m1p65 = validar_notas($r[397]);
							if (isset($r[399]))  $m1p66 = validar_notas($r[399]);
							if (isset($r[401]))  $m1p67 = validar_notas($r[401]);
							if (isset($r[403]))  $m1p68 = validar_notas($r[403]);
							if (isset($r[405]))  $m1p69 = validar_notas($r[405]);
							if (isset($r[407]))  $m1p70 = validar_notas($r[407]);
							if (isset($r[409]))  $m1p71 = validar_notas($r[409]);
							if (isset($r[411]))  $m1p72 = validar_notas($r[411]);
							if (isset($r[413]))  $m1p73 = validar_notas($r[413]);
							if (isset($r[415]))  $m1p74 = validar_notas($r[415]);
							if (isset($r[417]))  $m1p75 = validar_notas($r[417]);
							if (isset($r[419]))  $m1p76 = validar_notas($r[419]);
							if (isset($r[421]))  $m1p77 = validar_notas($r[421]);
							if (isset($r[423]))  $m1p78 = validar_notas($r[423]);
							if (isset($r[425]))  $m1p79 = validar_notas($r[425]);
							if (isset($r[427]))  $m1p80 = validar_notas($r[427]);
							if (isset($r[429]))  $m1p81 = validar_notas($r[429]);
							if (isset($r[431]))  $m1p82 = validar_notas($r[431]);
							if (isset($r[433]))  $m1p83 = validar_notas($r[433]);
							if (isset($r[435]))  $m1p84 = validar_notas($r[435]);
							if (isset($r[437]))  $m1p85 = validar_notas($r[437]);
							if (isset($r[439]))  $m1p86 = validar_notas($r[439]);
							if (isset($r[441]))  $m1p87 = validar_notas($r[441]);
							if (isset($r[443]))  $m1p88 = validar_notas($r[443]);
							if (isset($r[445]))  $m1p89 = validar_notas($r[445]);
							if (isset($r[447]))  $m1p90 = validar_notas($r[447]);
							if (isset($r[449]))  $m1p91 = validar_notas($r[449]);
							if (isset($r[451]))  $m1p92 = validar_notas($r[451]);
							if (isset($r[453]))  $m1p93 = validar_notas($r[453]);
							if (isset($r[455]))  $m1p94 = validar_notas($r[455]);
							if (isset($r[457]))  $m1p95 = validar_notas($r[457]);
							if (isset($r[459]))  $m1p96 = validar_notas($r[459]);
							if (isset($r[461]))  $m1p97 = validar_notas($r[461]);
							if (isset($r[463]))  $m1p98 = validar_notas($r[463]);
							if (isset($r[465]))  $m1p99 = validar_notas($r[465]);
							if (isset($r[467]))  $m1p100 =  validar_notas($r[467]);
							if (isset($r[469]))  $m1p101 =  validar_notas($r[469]);
							if (isset($r[471]))  $m1p102 =  validar_notas($r[471]);
							if (isset($r[473]))  $m1p103 =  validar_notas($r[473]);
							if (isset($r[475]))  $m1p104 =  validar_notas($r[475]);
						}
						
						///////////////////////////////////////////////////////////////////////////////////////////////internet
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

						///////////////////////////////////////////////////////////////////////////////////////////////ppt
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
						}

						///////////////////////////////////////////////////////////////////////////////////////////////herramientas
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
						}*/	



							/*guardarDatosExamenTeoricoComputador($idEstudiante,$email,$usuario,$grado,$m1p1,$m1p2,$m1p3,$m1p4,$m1p5,$m1p6,$m1p7,$m1p8,$m1p9,$m1p10,$m1p11,$m1p12,$m1p13,$m1p14,$m1p15,$m1p16,$m1p17,$m1p18,$m1p19,$m1p20,$m1p21,$m1p22,$m1p23,$m1p24,$m1p25,$m1p26,$m1p27,$m1p28,$m1p29,$m1p30,$m1p31,$m1p32,$m1p33,$m1p34,$m1p35,$m1p36,$m1p37,$m1p38,$m1p39,$m1p40,$m1p41,$m1p42,$m1p43,$m1p44,$m1p45,$m1p46,$m1p47,$m1p48,$m1p49,$m1p50,$m1p51,$m1p52,$m1p53,$m1p54,$m1p55,$m1p56,$m1p57,$m1p58,$m1p59,$m1p60,$m1p61,$m1p62,$m1p63,$m1p64,$m1p65,$m1p66,$m1p67,$m1p68,$m1p69,$m1p70,$m1p71,$m1p72,$m1p73,$m1p74,$m1p75,$m1p76,$m1p77,$m1p78,$m1p79,$m1p80,$m1p81,$m1p82,$m1p83,$m1p84,$m1p85,$m1p86,$m1p87,$m1p88,$m1p89,$m1p90,$m1p91,$m1p92,$m1p93,$m1p94,$m1p95,$m1p96,$m1p97,$m1p98,$m1p99,$m1p100,$m1p101,$m1p102,$m1p103,$m1p104,$termino,$anio,$sistema,$adminEspol);	

							guardarDatosExamenTeoricoInternet($idEstudiante,$email,$usuario,$grado,$m2p1,$m2p2,$m2p3,$m2p4,$m2p5,$m2p6,$m2p7,$m2p8,$m2p9,$m2p10,$m2p11,$m2p12,$m2p13,$m2p14,$m2p15,$m2p16,$m2p17,$m2p18,$m2p19,$m2p20,$m2p21,$m2p22,$m2p23,$m2p24,$m2p25,$m2p26,$m2p27,$m2p28,$m2p29,$m2p30,$m2p31,$m2p32,$m2p33,$m2p34,$m2p35,$m2p36,$m2p37,$m2p38,$m2p39,$m2p40,$m2p41,$m2p42,$m2p43,$m2p44,$m2p45,$m2p46,$m2p47,$m2p48,$m2p49,$m2p50,$m2p51,$m2p52,$m2p53,$m2p54,$m2p55,$m2p56,$m2p57,$m2p58,$m2p59,$m2p60,$m2p61,$m2p62,$m2p63,$m2p64,$m2p65,$m2p66,$m2p67,$m2p68,$m2p69,$m2p70,$m2p71,$m2p72,$m2p73,$m2p74,$m2p75,$m2p76,$m2p77,$m2p78,$m2p79,$m2p80,$m2p81,$m2p82,$m2p83,$m2p84,$m2p85,$m2p86,$m2p87,$m2p88,$m2p89,$m2p90,$m2p91,$m2p92,$m2p93,$m2p94,$m2p95,$m2p96,$m2p97,$m2p98,$m2p99,$m2p100,$m2p101,$m2p102,$m2p103,$m2p104,$m2p105,$m2p106,$m2p107,$m2p108,$termino,$anio,$sistema,$adminEspol);

							guardarDatosExamenTeoricoPPT_TeoricoPractico($idEstudiante,$email,$usuario,$grado,$m3p1,$m3p2,$m3p3,$m3p4,$m3p5,$m3p6,$m3p7,$m3p8,$m3p9,$m3p10,$m3p11,$m3p12,$m3p13,$m3p14,$m3p15,$m3p16,$m3p17,$m3p18,$m3p19,$m3p20,$m3p21,$m3p22,$m3p23,$m3p24,$m3p25,$m3p26,$m3p27,$m3p28,$m3p29,$m3p30,$m3p31,$m3p32,$m3p33,$m3p34,$m3p35,$m3p36,$m3p37,$m3p38,$m3p39,$m3p40,$m3p41,$m3p42,$m3p43,$m3p44,$m3p45,$m3p46,$m3p47,$m3p48,$m3p49,$m3p50,$m3p51,$m3p52,$m3p53,$m3p54,$m3p55,$m3p56,$m3p57,$m3p58,$m3p59,$m3p60,$m3p61,$m3p62,$m3p63,$m3p64,$m3p65,$m3p66,$m3p67,$m3p68,$m3p69,$m3p70,$m3p71,$m3p72,$m3p73,$m3p74,$m3p75,$m3p76,$m3p77,$m3p78,$m3p79,$m3p80,$m3p81,$m3p82,$m3p83,$m3p84,$m3p85,$m3p86,$termino,$anio,$sistema,$adminEspol);

							guardarDatosExamenTeoricoExcel_TeoricoPractico($idEstudiante,$email,$usuario,$grado,$m4p1,$m4p2,$m4p3,$m4p4,$m4p5,$m4p6,$m4p7,$m4p8,$m4p9,$m4p10,$m4p11,$m4p12,$m4p13,$m4p14,$m4p15,$m4p16,$m4p17,$m4p18,$m4p19,$m4p20,$m4p21,$m4p22,$m4p23,$m4p24,$m4p25,$m4p26,$m4p27,$m4p28,$m4p29,$m4p30,$m4p31,$m4p32,$m4p33,$m4p34,$m4p35,$m4p36,$m4p37,$m4p38,$m4p39,$m4p40,$m4p41,$m4p42,$m4p43,$m4p44,$m4p45,$m4p46,$m4p47,$m4p48,$m4p49,$m4p50,$m4p51,$m4p52,$m4p53,$m4p54,$m4p55,$m4p56,$m4p57,$m4p58,$m4p59,$m4p60,$m4p61,$m4p62,$m4p63,$m4p64,$m4p65,$m4p66,$m4p67,$m4p68,$m4p69,$m4p70,$m4p71,$m4p72,$m4p73,$m4p74,$m4p75,$m4p76,$m4p77,$m4p78,$m4p79,$m4p80,$m4p81,$m4p82,$m4p83,$m4p84,$m4p85,$m4p86,$m4p87,$m4p88,$m4p89,$termino,$anio,$sistema,$adminEspol);

							guardarDatosExamenTeoricoWord_TeoricoPractico($idEstudiante,$email,$usuario,$grado,$m5p1,$m5p2,$m5p3,$m5p4,$m5p5,$m5p6,$m5p7,$m5p8,$m5p9,$m5p10,$m5p11,$m5p12,$m5p13,$m5p14,$m5p15,$m5p16,$m5p17,$m5p18,$m5p19,$m5p20,$m5p21,$m5p22,$m5p23,$m5p24,$m5p25,$m5p26,$m5p27,$m5p28,$m5p29,$m5p30,$m5p31,$m5p32,$m5p33,$m5p34,$m5p35,$m5p36,$m5p37,$m5p38,$m5p39,$m5p40,$m5p41,$m5p42,$m5p43,$m5p44,$m5p45,$m5p46,$m5p47,$m5p48,$m5p49,$m5p50,$m5p51,$m5p52,$m5p53,$m5p54,$m5p55,$m5p56,$m5p57,$m5p58,$m5p59,$m5p60,$m5p61,$m5p62,$m5p63,$m5p64,$m5p65,$m5p66,$m5p67,$m5p68,$m5p69,$m5p70,$m5p71,$m5p72,$m5p73,$m5p74,$m5p75,$m5p76,$m5p77,$m5p78,$m5p79,$m5p80,$m5p81,$m5p82,$m5p83,$m5p84,$m5p85,$m5p86,$termino,$anio,$sistema,$adminEspol);

							guardarDatosExamenTeoricoHerramientas($idEstudiante,$email,$usuario,$grado,$m6p1,$m6p2,$m6p3,$m6p4,$m6p5,$m6p6,$m6p7,$m6p8,$m6p9,$m6p10,$m6p11,$m6p12,$m6p13,$m6p14,$m6p15,$m6p16,$m6p17,$m6p18,$m6p19,$m6p20,$m6p21,$m6p22,$m6p23,$m6p24,$m6p25,$m6p26,$m6p27,$m6p28,$m6p29,$m6p30,$m6p31,$m6p32,$m6p33,$m6p34,$m6p35,$m6p36,$m6p37,$m6p38,$m6p39,$m6p40,$m6p41,$m6p42,$m6p43,$m6p44,$m6p45,$m6p46,$m6p47,$m6p48,$m6p49,$m6p50,$m6p51,$m6p52,$termino,$anio,$sistema,$adminEspol);*/