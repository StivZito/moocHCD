<?php 
	require_once '../modelos/modeloPuntosExtras.php';

	$puntosExtras = new modeloPuntosExtras();

	switch ($_GET["op"])
	{

		//////////////////////////////////////////////////////////Curso Mooc
		case 'reportePuntosExtrasAdmisionP':	
			$rspta = $puntosExtras -> puntosExtrasPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"matricula" => $reg -> 	matricula,
					"identificacion" => $reg -> 	identificacion,
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"calificacionExcel" => $reg -> 	calificacionExcel,
					"calificacionPPT" => $reg -> 	calificacionPPT,
					"calificacionWord" => $reg -> 	calificacionWord,
					"demografica" => $reg -> 	demografica,
					"diagnostico" => $reg -> 	diagnostico,
					"satisfaccion" => $reg -> 	satisfaccion,
					"puntosExtras" => $reg -> 	puntosExtras,
					"Excel" => $reg -> 	Excel,
					"PPT" => $reg -> 	PPT,
					"Word" => $reg -> 	Word,
					"termino" => $reg -> 	termino,
					"anio" => $reg -> 	anio,
					"sistema" => $reg -> 	sistema,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reportePuntosExtrasAdmisionTP':	
			$rspta = $puntosExtras -> puntosExtrasTeoricoPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"matricula" => $reg -> 	matricula,
					"identificacion" => $reg -> 	identificacion,
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"calificacionExcel" => $reg -> 	calificacionExcel,
					"calificacionPPT" => $reg -> 	calificacionPPT,
					"calificacionWord" => $reg -> 	calificacionWord,
					"demografica" => $reg -> 	demografica,
					"diagnostico" => $reg -> 	diagnostico,
					"satisfaccion" => $reg -> 	satisfaccion,
					"puntosExtras" => $reg -> 	puntosExtras,
					"Excel" => $reg -> 	Excel,
					"PPT" => $reg -> 	PPT,
					"Word" => $reg -> 	Word,
					"termino" => $reg -> 	termino,
					"anio" => $reg -> 	anio,
					"sistema" => $reg -> 	sistema,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reportePuntosExtrasEspolP':	
			$rspta = $puntosExtras -> puntosExtrasPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"matricula" => $reg -> 	matricula,
					"identificacion" => $reg -> 	identificacion,
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"calificacionExcel" => $reg -> 	calificacionExcel,
					"calificacionPPT" => $reg -> 	calificacionPPT,
					"calificacionWord" => $reg -> 	calificacionWord,
					"demografica" => $reg -> 	demografica,
					"diagnostico" => $reg -> 	diagnostico,
					"satisfaccion" => $reg -> 	satisfaccion,
					"puntosExtras" => $reg -> 	puntosExtras,
					"Excel" => $reg -> 	Excel,
					"PPT" => $reg -> 	PPT,
					"Word" => $reg -> 	Word,
					"termino" => $reg -> 	termino,
					"anio" => $reg -> 	anio,
					"sistema" => $reg -> 	sistema,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte
				);
			}
			
			echo json_encode($data);
		break;

		case 'reportePuntosExtrasEspolTP':	
			$rspta = $puntosExtras -> puntosExtrasTeoricoPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"matricula" => $reg -> 	matricula,
					"identificacion" => $reg -> 	identificacion,
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"calificacionExcel" => $reg -> 	calificacionExcel,
					"calificacionPPT" => $reg -> 	calificacionPPT,
					"calificacionWord" => $reg -> 	calificacionWord,
					"demografica" => $reg -> 	demografica,
					"diagnostico" => $reg -> 	diagnostico,
					"satisfaccion" => $reg -> 	satisfaccion,
					"puntosExtras" => $reg -> 	puntosExtras,
					"Excel" => $reg -> 	Excel,
					"PPT" => $reg -> 	PPT,
					"Word" => $reg -> 	Word,
					"termino" => $reg -> 	termino,
					"anio" => $reg -> 	anio,
					"sistema" => $reg -> 	sistema,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte
				);
			}
			
			echo json_encode($data);
		break;

		/////////////////////////////////////////////////////////puntos extras teorico practico
		case 'num_estudiantes_registrados_puntosExtras_tp':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_tp_espol':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_tp_admision':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_aprobados_tp':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_aprobados_tp_espol':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_aprobados_tp_admision':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_reprobados_tp':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_reprobados_tp_espol':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_reprobados_tp_admision':
			$rspta = $puntosExtras -> num_est_registrados_tp_puntosExtras('NAPA');
			echo json_encode($rspta);
		break;	

		case 'detalleIncrementoPuntosExtrasP':
			$rspta = $puntosExtras -> detalleIncrementoPuntosExtrasP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"modulo" => $reg -> modulo,
					"recibieronIncremento" => $reg -> recibieronIncremento,
					"recibieronIncrementoEspol" => $reg -> recibieronIncrementoEspol,
					"recibieronIncrementoAdmisiones" => $reg -> recibieronIncrementoAdmisiones,
					"noRecibieronIncremento" => $reg -> noRecibieronIncremento,
					"noRecibieronIncrementoEspol" => $reg -> noRecibieronIncrementoEspol,
					"noRecibieronIncrementoAdmisiones" => $reg -> noRecibieronIncrementoAdmisiones,
					"pasaronConIncremento" => $reg -> pasaronConIncremento,
					"pasaronConIncrementoEspol" => $reg -> pasaronConIncrementoEspol,
					"pasaronConIncrementoAdmision" => $reg -> pasaronConIncrementoAdmision,
					"noPasaronConIncremento" => $reg -> noPasaronConIncremento,
					"noPasaronConIncrementoEspol" => $reg -> noPasaronConIncrementoEspol,
					"noPasaronConIncrementoAdmision" => $reg -> noPasaronConIncrementoAdmision
				);
			}
			
			echo json_encode($data);
		break;


		/////////////////////////////////////////////////////////puntos extras practico
		case 'num_estudiantes_registrados_puntosExtras_p':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_p_espol':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_p_admision':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_aprobados_p':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_aprobados_p_espol':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_aprobados_p_admision':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_reprobados_p':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_reprobados_p_espol':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_puntosExtras_reprobados_p_admision':
			$rspta = $puntosExtras -> num_est_registrados_p_puntosExtras('NAPA');
			echo json_encode($rspta);
		break;	

		case 'detalleIncrementoPuntosExtrasTP':
			$rspta = $puntosExtras -> detalleIncrementoPuntosExtrasTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"modulo" => $reg -> modulo,
					"recibieronIncremento" => $reg -> recibieronIncremento,
					"recibieronIncrementoEspol" => $reg -> recibieronIncrementoEspol,
					"recibieronIncrementoAdmisiones" => $reg -> recibieronIncrementoAdmisiones,
					"noRecibieronIncremento" => $reg -> noRecibieronIncremento,
					"noRecibieronIncrementoEspol" => $reg -> noRecibieronIncrementoEspol,
					"noRecibieronIncrementoAdmisiones" => $reg -> noRecibieronIncrementoAdmisiones,
					"pasaronConIncremento" => $reg -> pasaronConIncremento,
					"pasaronConIncrementoEspol" => $reg -> pasaronConIncrementoEspol,
					"pasaronConIncrementoAdmision" => $reg -> pasaronConIncrementoAdmision,
					"noPasaronConIncremento" => $reg -> noPasaronConIncremento,
					"noPasaronConIncrementoEspol" => $reg -> noPasaronConIncrementoEspol,
					"noPasaronConIncrementoAdmision" => $reg -> noPasaronConIncrementoAdmision
				);
			}
			
			echo json_encode($data);
		break;

	}

?>