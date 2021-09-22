<?php 
	require_once '../modelos/modeloEncuestas.php';

	$encuestas = new modeloEncuestas();

	switch ($_GET["op"]){

		/////////////////////////////////////////////////////////Pruebas Demografica practico
		case 'num_estudiantes_registrados_demografica_p':
			$rspta = $encuestas -> num_est_registrados_p_demografica('T', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_p_espol':
			$rspta = $encuestas -> num_est_registrados_p_demografica('ESPOL', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_p_admision':
			$rspta = $encuestas -> num_est_registrados_p_demografica('ADMISION', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_p_espol_hombres':
			$rspta = $encuestas -> num_est_registrados_p_demografica('ESPOL', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_p_espol_mujeres':
			$rspta = $encuestas -> num_est_registrados_p_demografica('ESPOL', 'FEMENINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_p_admision_hombres':
			$rspta = $encuestas -> num_est_registrados_p_demografica('ADMISION', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_p_admision_mujeres':
			$rspta = $encuestas -> num_est_registrados_p_demografica('ADMISION', 'FEMENINO');
			echo json_encode($rspta);
		break;

		case 'detalleGeneroEstudiantesP':
			$rspta = $encuestas -> detalleDemograficaGeneroEstudiantesP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"sexo" => $reg -> sexo,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleEdadEstudiantesP':
			$rspta = $encuestas -> detalleDemograficaEdadEstudiantesP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"edad" => $reg -> edad,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleColegioEstudiantesP':
			$rspta = $encuestas -> detalleDemograficaColegioEstudiantesP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipo_colegio" => $reg -> tipo_colegio,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleDemograficaR1P':
			$rspta = $encuestas -> detalleDemograficaR1P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r1" => $reg -> r1,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR2P':
			$rspta = $encuestas -> detalleDemograficaR2P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r2" => $reg -> r2,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR3P':
			$rspta = $encuestas -> detalleDemograficaR3P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r3" => $reg -> r3,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleDemograficaR4P':
			$rspta = $encuestas -> detalleDemograficaR4P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r4" => $reg -> r4,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR5P':
			$rspta = $encuestas -> detalleDemograficaR5P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r5" => $reg -> r5,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR6P':
			$rspta = $encuestas -> detalleDemograficaR6P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r6" => $reg -> r6,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleDemograficaR7P':
			$rspta = $encuestas -> detalleDemograficaR7P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r7" => $reg -> r7,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;



		/////////////////////////////////////////////////////////Pruebas Demografica teorico practico
		case 'num_estudiantes_registrados_demografica_tp':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('T', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_tp_espol':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('ESPOL', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_tp_admision':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('ADMISION', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_tp_espol_hombres':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('ESPOL', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_tp_espol_mujeres':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('ESPOL', 'FEMENINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_tp_admision_hombres':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('ADMISION', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_demografica_tp_admision_mujeres':
			$rspta = $encuestas -> num_est_registrados_tp_demografica('ADMISION', 'FEMENINO');
			echo json_encode($rspta);
		break;

		case 'detalleGeneroEstudiantesTP':
			$rspta = $encuestas -> detalleDemograficaGeneroEstudiantesTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"sexo" => $reg -> sexo,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleEdadEstudiantesTP':
			$rspta = $encuestas -> detalleDemograficaEdadEstudiantesTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"edad" => $reg -> edad,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleColegioEstudiantesTP':
			$rspta = $encuestas -> detalleDemograficaColegioEstudiantesTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipo_colegio" => $reg -> tipo_colegio,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleDemograficaR1TP':
			$rspta = $encuestas -> detalleDemograficaR1TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r1" => $reg -> r1,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR2TP':
			$rspta = $encuestas -> detalleDemograficaR2TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r2" => $reg -> r2,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR3TP':
			$rspta = $encuestas -> detalleDemograficaR3TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r3" => $reg -> r3,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleDemograficaR4TP':
			$rspta = $encuestas -> detalleDemograficaR4TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r4" => $reg -> r4,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR5TP':
			$rspta = $encuestas -> detalleDemograficaR5TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r5" => $reg -> r5,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleDemograficaR6TP':
			$rspta = $encuestas -> detalleDemograficaR6TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r6" => $reg -> r6,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleDemograficaR7TP':
			$rspta = $encuestas -> detalleDemograficaR7TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"r7" => $reg -> r7,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reportePruebaDemograficaAdmisionP':	
			$rspta = $encuestas -> reportePruebaDemograficaEP('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1" => $reg -> R1,
						"R2" => $reg -> R2,
						"R3" => $reg -> R3,
						"R4" => $reg -> R4,
						"R5" => $reg -> R5,
						"R6" => $reg -> R6,
						"R7" => $reg -> R7,
						"cohorte" => $reg -> cohorte 
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reportePruebaDemograficaAdmisionTP':	
			$rspta = $encuestas -> reportePruebaDemograficaETP('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1" => $reg -> R1,
						"R2" => $reg -> R2,
						"R3" => $reg -> R3,
						"R4" => $reg -> R4,
						"R5" => $reg -> R5,
						"R6" => $reg -> R6,
						"R7" => $reg -> R7,
						"cohorte" => $reg -> cohorte 
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reportePruebaDemograficaEspolP':	
			$rspta = $encuestas -> reportePruebaDemograficaEP('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1" => $reg -> R1,
						"R2" => $reg -> R2,
						"R3" => $reg -> R3,
						"R4" => $reg -> R4,
						"R5" => $reg -> R5,
						"R6" => $reg -> R6,
						"R7" => $reg -> R7,
						"cohorte" => $reg -> cohorte 
				);
			}
			
			echo json_encode($data);
		break;

		case 'reportePruebaDemograficaEspolTP':	
			$rspta = $encuestas -> reportePruebaDemograficaETP('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1" => $reg -> R1,
						"R2" => $reg -> R2,
						"R3" => $reg -> R3,
						"R4" => $reg -> R4,
						"R5" => $reg -> R5,
						"R6" => $reg -> R6,
						"R7" => $reg -> R7,
						"cohorte" => $reg -> cohorte 
				);
			}
			
			echo json_encode($data);
		break;	



		/////////////////////////////////////////////////////////Pruebas de Diagnostico
		case 'reportePruebaDiagnosticoAdmisionP':	
			$rspta = $encuestas -> reportePruebaDiagnosticoEP('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reportePruebaDiagnosticoAdmisionTP':	
			$rspta = $encuestas -> reportePruebaDiagnosticoETP('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reportePruebaDiagnosticoEspolP':	
			$rspta = $encuestas -> reportePruebaDiagnosticoEP('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 
				);
			}
			
			echo json_encode($data);
		break;

		case 'reportePruebaDiagnosticoEspolTP':	
			$rspta = $encuestas -> reportePruebaDiagnosticoETP('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 
				);
			}
			
			echo json_encode($data);
		break;	

		/////////////////////////////////////////////////////////diagnostico practico
		case 'num_estudiantes_registrados_diagnostico_p':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_p_espol':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_p_admision':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_realizoPrueba_p':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('RP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_realizoPrueba_p_espol':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('RPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_realizoPrueba_p_admision':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('RPA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_noRealizoPrueba_p':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('NRP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_espol':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('NRPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_admision':
			$rspta = $encuestas -> num_est_registrados_p_diagnostico('NRPA');
			echo json_encode($rspta);
		break;

		case 'detalleDiagnosticoEstudiantesP':
			$rspta = $encuestas -> detalleDiagnosticoEstudiantesP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"modulo" => $reg -> modulo,
					"inicial_espol" => $reg -> inicial_espol,
					"inicial_admision" => $reg -> inicial_admision,
					"inicial_total" => $reg -> inicial_total,
					"regular_espol" => $reg -> regular_espol,
					"regular_admision" => $reg -> regular_admision,
					"regular_total" => $reg -> regular_total,
					"enDesarrollo_espol" => $reg -> enDesarrollo_espol,
					"enDesarrollo_admision" => $reg -> enDesarrollo_admision,
					"enDesarrollo_total" => $reg -> enDesarrollo_total,
					"desarrollado_espol" => $reg -> desarrollado_espol,
					"desarrollado_admision" => $reg -> desarrollado_admision,
					"desarrollado_total" => $reg -> desarrollado_total,
					"excelente_espol" => $reg -> excelente_espol,
					"excelente_admision" => $reg -> excelente_admision,
					"excelente_total" => $reg -> excelente_total,
					"sinRespuesta_espol" => $reg -> sinRespuesta_espol,
					"sinRespuesta_admision" => $reg -> sinRespuesta_admision,
					"sinRespuesta_total" => $reg -> sinRespuesta_total
				);
			}
			
			echo json_encode($data);
		break;


		/////////////////////////////////////////////////////////diagnostico  teorico practico
		case 'num_estudiantes_registrados_diagnostico_tp':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_tp_espol':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_tp_admision':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_realizoPrueba_tp':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('RP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_realizoPrueba_tp_espol':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('RPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_realizoPrueba_tp_admision':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('RPA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('NRP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_espol':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('NRPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_diagnostico_noRealizoPrueba_tp_admision':
			$rspta = $encuestas -> num_est_registrados_tp_diagnostico('NRPA');
			echo json_encode($rspta);
		break;

		case 'detalleDiagnosticoEstudiantesTP':
			$rspta = $encuestas -> detalleDiagnosticoEstudiantesTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"modulo" => $reg -> modulo,
					"inicial_espol" => $reg -> inicial_espol,
					"inicial_admision" => $reg -> inicial_admision,
					"inicial_total" => $reg -> inicial_total,
					"regular_espol" => $reg -> regular_espol,
					"regular_admision" => $reg -> regular_admision,
					"regular_total" => $reg -> regular_total,
					"enDesarrollo_espol" => $reg -> enDesarrollo_espol,
					"enDesarrollo_admision" => $reg -> enDesarrollo_admision,
					"enDesarrollo_total" => $reg -> enDesarrollo_total,
					"desarrollado_espol" => $reg -> desarrollado_espol,
					"desarrollado_admision" => $reg -> desarrollado_admision,
					"desarrollado_total" => $reg -> desarrollado_total,
					"excelente_espol" => $reg -> excelente_espol,
					"excelente_admision" => $reg -> excelente_admision,
					"excelente_total" => $reg -> excelente_total,
					"sinRespuesta_espol" => $reg -> sinRespuesta_espol,
					"sinRespuesta_admision" => $reg -> sinRespuesta_admision,
					"sinRespuesta_total" => $reg -> sinRespuesta_total
				);
			}
			
			echo json_encode($data);
		break;




		/////////////////////////////////////////////////////////Pruebas Satisfaccion
		case 'reportePruebaSatisfaccionAdmisionP':	
			$rspta = $encuestas -> reportePruebaSatisfaccionEP('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1" => $reg -> R1,
						"R2_L1" => $reg -> R2_L1,
						"R2_L2" => $reg -> R2_L2,
						"R2_L3" => $reg -> R2_L3,
						"R3_L1" => $reg -> R3_L1,
						"R3_L2" => $reg -> R3_L2,
						"R3_L3" => $reg -> R3_L3,
						"R3_L4" => $reg -> R3_L4,
						"R3_L5" => $reg -> R3_L5,
						"R3_L6" => $reg -> R3_L6,
						"R4" => $reg -> R4,
						"R5_L1" => $reg -> R5_L1,
						"R5_L2" => $reg -> R5_L2,
						"R6" => $reg -> R6
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reportePruebaSatisfaccionAdmisionTP':	
			$rspta = $encuestas -> reportePruebaSatisfaccionETP('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1_L1" => $reg -> R1_L1,
						"R1_L2" => $reg -> R1_L2,
						"R1_L3" => $reg -> R1_L3,
						"R1_L4" => $reg -> R1_L4,
						"R1_L5" => $reg -> R1_L5,
						"R1_L6" => $reg -> R1_L6,
						"R2" => $reg -> R2,
						"R3_L1" => $reg -> R3_L1,
						"R3_L2" => $reg -> R3_L2,
						"R3_L3" => $reg -> R3_L3,
						"R4" => $reg -> R4,
						"R5_L1" => $reg -> R5_L1,
						"R5_L2" => $reg -> R5_L2,
						"R6" => $reg -> R6
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reportePruebaSatisfaccionEspolP':	
			$rspta = $encuestas -> reportePruebaSatisfaccionEP('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1" => $reg -> R1,
						"R2_L1" => $reg -> R2_L1,
						"R2_L2" => $reg -> R2_L2,
						"R2_L3" => $reg -> R2_L3,
						"R3_L1" => $reg -> R3_L1,
						"R3_L2" => $reg -> R3_L2,
						"R3_L3" => $reg -> R3_L3,
						"R3_L4" => $reg -> R3_L4,
						"R3_L5" => $reg -> R3_L5,
						"R3_L6" => $reg -> R3_L6,
						"R4" => $reg -> R4,
						"R5_L1" => $reg -> R5_L1,
						"R5_L2" => $reg -> R5_L2,
						"R6" => $reg -> R6
				);
			}
			
			echo json_encode($data);
		break;

		case 'reportePruebaSatisfaccionEspolTP':	
			$rspta = $encuestas -> reportePruebaSatisfaccionETP('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
						"username" => $reg -> username,
						"nombres" => $reg -> nombres,
						"apellidos" => $reg -> apellidos,
						"email" => $reg -> email,
						"matricula" => $reg -> matricula,
						"cedula" => $reg -> cedula,
						"carrera" => $reg -> carrera,
						"sexo" => $reg -> sexo,
						"edad" => $reg -> edad,
						"colegio" => $reg -> colegio,
						"cohorte" => $reg -> cohorte,
						"tipoEstudiante" => $reg -> tipoEstudiante,
						"R1_L1" => $reg -> R1_L1,
						"R1_L2" => $reg -> R1_L2,
						"R1_L3" => $reg -> R1_L3,
						"R1_L4" => $reg -> R1_L4,
						"R1_L5" => $reg -> R1_L5,
						"R1_L6" => $reg -> R1_L6,
						"R2" => $reg -> R2,
						"R3_L1" => $reg -> R3_L1,
						"R3_L2" => $reg -> R3_L2,
						"R3_L3" => $reg -> R3_L3,
						"R4" => $reg -> R4,
						"R5_L1" => $reg -> R5_L1,
						"R5_L2" => $reg -> R5_L2,
						"R6" => $reg -> R6
				);
			}
			
			echo json_encode($data);
		break;



		/////////////////////////////////////////////////////////Satisfaccion practico 
		case 'num_estudiantes_registrados_satisfaccion_p':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('T', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_p_espol':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('ESPOL', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_p_admision':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('ADMISION', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_p_espol_hombres':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('ESPOL', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_p_espol_mujeres':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('ESPOL', 'FEMENINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_p_admision_hombres':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('ADMISION', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_p_admision_mujeres':
			$rspta = $encuestas -> num_est_registrados_p_satisfaccion('ADMISION', 'FEMENINO');
			echo json_encode($rspta);
		break;	

		case 'detalleSatisfaccionR1P':
			$rspta = $encuestas -> detalleSatisfaccionR1P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol_m1" => $reg -> espol_m1,
					"admision_m1" => $reg -> admision_m1,
					"total_m1" => $reg -> total_m1,
					"espol_m2" => $reg -> espol_m2,
					"admision_m2" => $reg -> admision_m2,
					"total_m2" => $reg -> total_m2,
					"espol_m3" => $reg -> espol_m3,
					"admision_m3" => $reg -> admision_m3,
					"total_m3" => $reg -> total_m3,
					"espol_m4" => $reg -> espol_m4,
					"admision_m4" => $reg -> admision_m4,
					"total_m4" => $reg -> total_m4,
					"espol_m5" => $reg -> espol_m5,
					"admision_m5" => $reg -> admision_m5,
					"total_m5" => $reg -> total_m5,
					"espol_m6" => $reg -> espol_m6,
					"admision_m6" => $reg -> admision_m6,
					"total_m6" => $reg -> total_m6
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR2P':
			$rspta = $encuestas -> detalleSatisfaccionR2P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR3L1P':
			$rspta = $encuestas -> detalleSatisfaccionR3L1P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR3L2P':
			$rspta = $encuestas -> detalleSatisfaccionR3L2P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR3L3P':
			$rspta = $encuestas -> detalleSatisfaccionR3L3P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR4P':
			$rspta = $encuestas -> detalleSatisfaccionR4P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR5L1P':
			$rspta = $encuestas -> detalleSatisfaccionR5L1P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR5L2P':
			$rspta = $encuestas -> detalleSatisfaccionR5L2P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR6P':
			$rspta = $encuestas -> detalleSatisfaccionR6P('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;


		/////////////////////////////////////////////////////////Satisfaccion teorico practico 
		case 'num_estudiantes_registrados_satisfaccion_tp':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('T', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_tp_espol':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('ESPOL', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_tp_admision':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('ADMISION', 'T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_tp_espol_hombres':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('ESPOL', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_tp_espol_mujeres':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('ESPOL', 'FEMENINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_tp_admision_hombres':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('ADMISION', 'MASCULINO');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_satisfaccion_tp_admision_mujeres':
			$rspta = $encuestas -> num_est_registrados_tp_satisfaccion('ADMISION', 'FEMENINO');
			echo json_encode($rspta);
		break;	

		case 'detalleSatisfaccionR1TP':
			$rspta = $encuestas -> detalleSatisfaccionR1TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol_m1" => $reg -> espol_m1,
					"admision_m1" => $reg -> admision_m1,
					"total_m1" => $reg -> total_m1,
					"espol_m2" => $reg -> espol_m2,
					"admision_m2" => $reg -> admision_m2,
					"total_m2" => $reg -> total_m2,
					"espol_m3" => $reg -> espol_m3,
					"admision_m3" => $reg -> admision_m3,
					"total_m3" => $reg -> total_m3,
					"espol_m4" => $reg -> espol_m4,
					"admision_m4" => $reg -> admision_m4,
					"total_m4" => $reg -> total_m4,
					"espol_m5" => $reg -> espol_m5,
					"admision_m5" => $reg -> admision_m5,
					"total_m5" => $reg -> total_m5,
					"espol_m6" => $reg -> espol_m6,
					"admision_m6" => $reg -> admision_m6,
					"total_m6" => $reg -> total_m6
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR2TP':
			$rspta = $encuestas -> detalleSatisfaccionR2TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR3L1TP':
			$rspta = $encuestas -> detalleSatisfaccionR3L1TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR3L2TP':
			$rspta = $encuestas -> detalleSatisfaccionR3L2TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR3L3TP':
			$rspta = $encuestas -> detalleSatisfaccionR3L3TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR4TP':
			$rspta = $encuestas -> detalleSatisfaccionR4TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR5L1TP':
			$rspta = $encuestas -> detalleSatisfaccionR5L1TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR5L2TP':
			$rspta = $encuestas -> detalleSatisfaccionR5L2TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleSatisfaccionR6TP':
			$rspta = $encuestas -> detalleSatisfaccionR6TP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"admision" => $reg -> admision,
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;



		
	}

?>