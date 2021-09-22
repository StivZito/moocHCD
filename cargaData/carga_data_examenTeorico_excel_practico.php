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
						guardarDatosExamenTeoricoExcel_Practico($idEstudiante,$email,$usuario,$grado,$m4p1,$m4p2,$m4p3,$m4p4,$m4p5,$m4p6,$m4p7,$m4p8,$m4p9,$m4p10,$m4p11,$m4p12,$m4p13,$m4p14,$m4p15,$m4p16,$m4p17,$m4p18,$m4p19,$m4p20,$m4p21,$m4p22,$m4p23,$m4p24,$m4p25,$m4p26,$m4p27,$m4p28,$m4p29,$m4p30,$m4p31,$m4p32,$m4p33,$m4p34,$m4p35,$m4p36,$m4p37,$m4p38,$m4p39,$m4p40,$m4p41,$m4p42,$m4p43,$m4p44,$m4p45,$m4p46,$m4p47,$m4p48,$m4p49,$m4p50,$m4p51,$m4p52,$m4p53,$m4p54,$m4p55,$m4p56,$m4p57,$m4p58,$m4p59,$m4p60,$m4p61,$m4p62,$m4p63,$m4p64,$m4p65,$m4p66,$m4p67,$m4p68,$m4p69,$m4p70,$m4p71,$m4p72,$m4p73,$m4p74,$m4p75,$m4p76,$m4p77,$m4p78,$m4p79,$m4p80,$m4p81,$m4p82,$m4p83,$m4p84,$m4p85,$m4p86,$m4p87,$m4p88,$m4p89,$termino,$anio,$sistema,$adminEspol);
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