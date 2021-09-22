<?php 
	require_once '../modelos/nivelConocimiento.php';

	$nivelConocimiento = new nivelConocimiento();

	switch ($_GET["op"]){

		//////////////////////////////////////////////////////////estudiantes practico
		case 'informe_niveles_conocimiento_ep_admision':	
			$rspta = $nivelConocimiento -> informe_niveles_conocimiento_ep('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" =>  utf8_encode($reg -> nombres),
					"apellidos" => $reg -> apellidos,
					"email" => $reg -> email,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"sexo" => $reg -> sexo,
					"carrera" => $reg -> carrera,

					"diagnosticoM3" => $reg -> diagnosticoM3,
					"diagnosticoM4" => $reg -> diagnosticoM4,
					"diagnosticoM5" => $reg -> diagnosticoM5,

					"moocM3" => $reg -> moocM3,
					"moocM4" => $reg -> moocM4,
					"moocM5" => $reg -> moocM5,

					"nivelConocimientoPPT" => $reg -> nivelConocimientoPPT,
					"nivelConocimientoExcel" => $reg -> nivelConocimientoExcel,
					"nivelConocimientoWord" => $reg -> nivelConocimientoWord,

					"termino" => $reg -> termino
				);
			}
			
			echo json_encode($data);
		break;

		case 'informe_niveles_conocimiento_ep_espol':	
			$rspta = $nivelConocimiento -> informe_niveles_conocimiento_ep('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" =>  utf8_encode($reg -> nombres),
					"apellidos" => $reg -> apellidos,
					"email" => $reg -> email,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"sexo" => $reg -> sexo,
					"carrera" => $reg -> carrera,

					"diagnosticoM3" => $reg -> diagnosticoM3,
					"diagnosticoM4" => $reg -> diagnosticoM4,
					"diagnosticoM5" => $reg -> diagnosticoM5,

					"moocM3" => $reg -> moocM3,
					"moocM4" => $reg -> moocM4,
					"moocM5" => $reg -> moocM5,

					"nivelConocimientoPPT" => $reg -> nivelConocimientoPPT,
					"nivelConocimientoExcel" => $reg -> nivelConocimientoExcel,
					"nivelConocimientoWord" => $reg -> nivelConocimientoWord,

					"termino" => $reg -> termino
				);
			}
			
			echo json_encode($data);
		break;

		case 'niveles_conocimiento_general_practico':	
			$rspta = $nivelConocimiento -> niveles_conocimiento_general_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;


		case 'nivelesConocimientoM3_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM3_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM4_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM4_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM5_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM5_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;	

		case 'nivelesConocimientoGraph_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoGraph_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoDiagnostico_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoDiagnostico_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoMooc_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoMooc_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoExamenTeoricoPractico_practico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoExamenTeoricoPractico_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;		

		//////////////////////////////////////////////////////////estudiantes teorico practico
		case 'informe_niveles_conocimiento_etp_admision':	
			$rspta = $nivelConocimiento -> informe_niveles_conocimiento_etp('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" =>  utf8_encode($reg -> nombres),
					"apellidos" => $reg -> apellidos,
					"email" => $reg -> email,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"sexo" => $reg -> sexo,
					"carrera" => $reg -> carrera,

					"diagnosticoM1" => $reg -> diagnosticoM1,
					"diagnosticoM2" => $reg -> diagnosticoM2,
					"diagnosticoM3" => $reg -> diagnosticoM3,
					"diagnosticoM4" => $reg -> diagnosticoM4,
					"diagnosticoM5" => $reg -> diagnosticoM5,
					"diagnosticoM6" => $reg -> diagnosticoM6,

					"moocM1" => $reg -> moocM1,
					"moocM2" => $reg -> moocM2,
					"moocM3" => $reg -> moocM3,
					"moocM4" => $reg -> moocM4,
					"moocM5" => $reg -> moocM5,
					"moocM6" => $reg -> moocM6,

					"extM1" => $reg -> extM1,
					"extM2" => $reg -> extM2,
					"extM3" => $reg -> extM3,
					"extM4" => $reg -> extM4,
					"extM5" => $reg -> extM5,
					"extM6" => $reg -> extM6,

					"nivelConocimientoPPT" => $reg -> nivelConocimientoPPT,
					"nivelConocimientoExcel" => $reg -> nivelConocimientoExcel,
					"nivelConocimientoWord" => $reg -> nivelConocimientoWord,

					"termino" => $reg -> termino
				);
			}
			
			echo json_encode($data);
		break;

		case 'informe_niveles_conocimiento_etp_espol':	
			$rspta = $nivelConocimiento -> informe_niveles_conocimiento_etp('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" =>  utf8_encode($reg -> nombres),
					"apellidos" => $reg -> apellidos,
					"email" => $reg -> email,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"sexo" => $reg -> sexo,
					"carrera" => $reg -> carrera,

					"diagnosticoM1" => $reg -> diagnosticoM1,
					"diagnosticoM2" => $reg -> diagnosticoM2,
					"diagnosticoM3" => $reg -> diagnosticoM3,
					"diagnosticoM4" => $reg -> diagnosticoM4,
					"diagnosticoM5" => $reg -> diagnosticoM5,
					"diagnosticoM6" => $reg -> diagnosticoM6,

					"moocM1" => $reg -> moocM1,
					"moocM2" => $reg -> moocM2,
					"moocM3" => $reg -> moocM3,
					"moocM4" => $reg -> moocM4,
					"moocM5" => $reg -> moocM5,
					"moocM6" => $reg -> moocM6,

					"extM1" => $reg -> extM1,
					"extM2" => $reg -> extM2,
					"extM3" => $reg -> extM3,
					"extM4" => $reg -> extM4,
					"extM5" => $reg -> extM5,
					"extM6" => $reg -> extM6,

					"nivelConocimientoPPT" => $reg -> nivelConocimientoPPT,
					"nivelConocimientoExcel" => $reg -> nivelConocimientoExcel,
					"nivelConocimientoWord" => $reg -> nivelConocimientoWord,

					"termino" => $reg -> termino
				);
			}
			
			echo json_encode($data);
		break;

		case 'niveles_conocimiento_tallarin':	
			$rspta = $nivelConocimiento -> niveles_conocimiento_general();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM1':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM1();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM2':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM2();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM3':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM3();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM4':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM4();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoM5':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM5();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;
	
		case 'nivelesConocimientoM6':	
			$rspta = $nivelConocimiento -> nivelesConocimientoM6();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoGraph':	
			$rspta = $nivelConocimiento -> nivelesConocimientoGraph();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoDiagnostico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoDiagnostico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoMooc':	
			$rspta = $nivelConocimiento -> nivelesConocimientoMooc();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoExamenTeorico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoExamenTeorico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

		case 'nivelesConocimientoExamenTeoricoPractico':	
			$rspta = $nivelConocimiento -> nivelesConocimientoExamenTeoricoPractico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"codModulo" =>  utf8_encode($reg -> codModulo),
					"modulo" => $reg -> modulo,
					"inicial" => $reg -> inicial,
					"regular" => $reg -> regular,
					"enDesarrollo" => $reg -> enDesarrollo,
					"desarrollado" => $reg -> desarrollado,
					"excelente" => $reg -> excelente
				);
			}
			
			echo json_encode($data);
		break;

	}
?>
