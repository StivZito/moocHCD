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
						guardarDatosExamenTeoricoComputador($idEstudiante,$email,$usuario,$grado,$m1p1,$m1p2,$m1p3,$m1p4,$m1p5,$m1p6,$m1p7,$m1p8,$m1p9,$m1p10,$m1p11,$m1p12,$m1p13,$m1p14,$m1p15,$m1p16,$m1p17,$m1p18,$m1p19,$m1p20,$m1p21,$m1p22,$m1p23,$m1p24,$m1p25,$m1p26,$m1p27,$m1p28,$m1p29,$m1p30,$m1p31,$m1p32,$m1p33,$m1p34,$m1p35,$m1p36,$m1p37,$m1p38,$m1p39,$m1p40,$m1p41,$m1p42,$m1p43,$m1p44,$m1p45,$m1p46,$m1p47,$m1p48,$m1p49,$m1p50,$m1p51,$m1p52,$m1p53,$m1p54,$m1p55,$m1p56,$m1p57,$m1p58,$m1p59,$m1p60,$m1p61,$m1p62,$m1p63,$m1p64,$m1p65,$m1p66,$m1p67,$m1p68,$m1p69,$m1p70,$m1p71,$m1p72,$m1p73,$m1p74,$m1p75,$m1p76,$m1p77,$m1p78,$m1p79,$m1p80,$m1p81,$m1p82,$m1p83,$m1p84,$m1p85,$m1p86,$m1p87,$m1p88,$m1p89,$m1p90,$m1p91,$m1p92,$m1p93,$m1p94,$m1p95,$m1p96,$m1p97,$m1p98,$m1p99,$m1p100,$m1p101,$m1p102,$m1p103,$m1p104,$termino,$anio,$sistema,$adminEspol);	

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