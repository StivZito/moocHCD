<?php 
	require_once '../modelos/modeloGtsi.php';

	$gtsi = new modeloGtsi();

	switch ($_GET["op"]){


		//////////////////////////////////////////////////////////GTSI
		case 'reporteGtsiAdmisionP':	
			$rspta = $gtsi -> gtsiPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> nombres,
					"apellidos" => $reg -> apellidos,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"franja" => $reg -> franja,
					"paralelo" => $reg -> paralelo,
					"fechaExamen" => $reg -> fechaExamen,
					"ExamenTeorico" => $reg -> ExamenTeorico,
					"word" => $reg -> word,
					"ppt" => $reg -> ppt,
					"excel" => $reg -> excel,
					"Aprobaron" => $reg -> Aprobaron,
					"cohorte" => $reg -> cohorte,
					"termino" => $reg -> termino,
					"anio" => $reg -> anio,
					"sistema" => $reg -> sistema,
					"tipoEstudiante" => $reg -> tipoEstudiante	
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteGtsiAdmisionTP':	
			$rspta = $gtsi -> gtsiTeoricoPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> nombres,
					"apellidos" => $reg -> apellidos,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"franja" => $reg -> franja,
					"paralelo" => $reg -> paralelo,
					"fechaExamen" => $reg -> fechaExamen,
					"ExamenTeorico" => $reg -> ExamenTeorico,
					"word" => $reg -> word,
					"ppt" => $reg -> ppt,
					"excel" => $reg -> excel,
					"Aprobaron" => $reg -> Aprobaron,
					"cohorte" => $reg -> cohorte,
					"termino" => $reg -> termino,
					"anio" => $reg -> anio,
					"sistema" => $reg -> sistema,
					"tipoEstudiante" => $reg -> tipoEstudiante	
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteGtsiEspolP':	
			$rspta = $gtsi -> gtsiPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> nombres,
					"apellidos" => $reg -> apellidos,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"franja" => $reg -> franja,
					"paralelo" => $reg -> paralelo,
					"fechaExamen" => $reg -> fechaExamen,
					"ExamenTeorico" => $reg -> ExamenTeorico,
					"word" => $reg -> word,
					"ppt" => $reg -> ppt,
					"excel" => $reg -> excel,
					"Aprobaron" => $reg -> Aprobaron,
					"cohorte" => $reg -> cohorte,
					"termino" => $reg -> termino,
					"anio" => $reg -> anio,
					"sistema" => $reg -> sistema,
					"tipoEstudiante" => $reg -> tipoEstudiante	
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteGtsiEspolTP':	
			$rspta = $gtsi -> gtsiTeoricoPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> nombres,
					"apellidos" => $reg -> apellidos,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"franja" => $reg -> franja,
					"paralelo" => $reg -> paralelo,
					"fechaExamen" => $reg -> fechaExamen,
					"ExamenTeorico" => $reg -> ExamenTeorico,
					"word" => $reg -> word,
					"ppt" => $reg -> ppt,
					"excel" => $reg -> excel,
					"Aprobaron" => $reg -> Aprobaron,
					"cohorte" => $reg -> cohorte,
					"termino" => $reg -> termino,
					"anio" => $reg -> anio,
					"sistema" => $reg -> sistema,
					"tipoEstudiante" => $reg -> tipoEstudiante	
				);
			}
			
			echo json_encode($data);
		break;	

	}

?>