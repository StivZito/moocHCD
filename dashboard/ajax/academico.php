<?php 
	require_once '../modelos/Academico.php';

	$academico = new Academico();
	//$ciudad_id = isset($_POST['ciudad_id']) ? ($_POST['ciudad_id']) : "";
	//$provincia_id = isset($_GET['provincia_id']) ? ($_GET['provincia_id']) : "";


	switch ($_GET["op"]){

		case 'num_est_registrados':
			$rspta = $academico -> num_est_registrados();
			echo json_encode($rspta);
		break;

		case 'num_est_espol':
			$rspta = $academico -> num_est_espol();
			echo json_encode($rspta);
		break;

		case 'num_est_admisiones':
			$rspta = $academico -> num_est_admisiones();
			echo json_encode($rspta);
		break;

		case 'num_est_varones':
			$rspta = $academico -> num_est_varones();
			echo json_encode($rspta);
		break;

		case 'num_est_mujeres':
			$rspta = $academico -> num_est_mujeres();
			echo json_encode($rspta);
		break;
		
		case 'num_est_aprobados':
			$rspta = $academico -> num_est_aprobados();
			echo json_encode($rspta);
		break;
		
		case 'num_est_reprobados':
			$rspta = $academico -> num_est_reprobados();
			echo json_encode($rspta);
		break;
		
		case 'estudiantes_termino':
			$rspta = $academico -> estudiantes_termino();
			$data = Array();

			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"termino" => $reg -> termino,
					"est_espol" => $reg -> est_es,
					"est_admin" => $reg -> est_ad
				);
			}

			$results = array(
				"sEcho" => 1, //Informacion para datatables,
				"iTotalRecords" => count($data),
				"iTotalDisplayRecords" => count($data),
				"aaData" => $data
			);

			echo json_encode($results);

		break;

		case 'estudiantes_estado':
			$rspta = $academico -> estudiantes_estado();
			$data = Array();

			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"termino" => $reg -> termino,
					"aprobados" => $reg -> aprobados,
					"reprobados" => $reg -> reprobados,						
				);
			}
			$results = array(
				"sEcho" => 1,
				"iTotalRecords" => count($data),
				"iTotalDisplayRecords" => count($data),
				"aaData" => $data
			);

			echo json_encode($results);

		break;	
		
		case 'estudiantes_utilitarios':
			

			$rspta = $academico -> estudiantes_utilitarios_termino();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"termino" => $reg -> termino,
					"word_ap" => $reg -> word_ap,
					"word_rp" => $reg -> word_rp,
					"excel_ap" => $reg -> excel_ap,
					"excel_rp" => $reg -> excel_rp,
					"powerp_ap" => $reg -> powerp_ap,
					"powerp_rp" => $reg -> powerp_rp
				);
			}
			
			echo json_encode($data);

		break;

		case 'estudiantes_espol_admisiones':
			
			$rspta = $academico -> estudiantes_espol_admisiones();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"termino" => $reg -> termino,
					"espol_ap" => $reg -> espol_ap,
					"espol_rp" => $reg -> espol_rp,
					"admision_ap" => $reg -> admision_ap,
					"admision_rp" => $reg -> admision_rp
				);
			}
			
			echo json_encode($data);

		break;

		case 'estudiantes_utilitarios_tipo':
			
			$rspta = $academico -> estudiantes_utilitarios_tipo();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"est_espol" => $reg -> est_espol,
					"est_admision" => $reg -> est_admision,
					"word_ap" => $reg -> word_ap,
					"word_rp" => $reg -> word_rp,
					"excel_ap" => $reg -> excel_ap,
					"excel_rp" => $reg -> excel_rp,
					"powerp_ap" => $reg -> powerp_ap,
					"powerp_rp" => $reg -> powerp_rp
				);
			}
			
			echo json_encode($data);

		break;

		case 'aprobados_reprobados_carrera':	
			$rspta = $academico -> aprobados_reprobados_carrera();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"carrera" =>  utf8_encode($reg -> carrera),
					"estudiantes" => $reg -> estudiantes,
					"aprobados" => $reg -> aprobados,
					"reprobados" => $reg -> reprobados
				);
			}
			
			echo json_encode($data);
		break;	

		case 'top_diez_carreras':
			$rspta = $academico -> top_diez_carreras();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"carrera" =>  utf8_encode($reg -> carrera),
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	



		case 'top_diez_carreras_masveces':
			$rspta = $academico -> top_diez_carreras_masveces();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"carrera" => utf8_encode($reg -> carrera),
					"estudiantes" => $reg -> estudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'aprobados_num_veces':
			$rspta = $academico -> aprobados_num_veces();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"num_veces" => $reg -> numVeces,
					"num_estudiantes" => $reg -> estudiantes,
					"carrera" => utf8_encode($reg -> carrera)					
				);
			}
			
			echo json_encode($data);
		break;	


		case 'ausentes_exam_practico':
			$rspta = $academico -> ausentes_exam_practico();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"termino" => $reg -> termino,
					"num_est" => $reg -> num_est
				);
			}
			
			echo json_encode($data);
		break;	

	}



?>