<?php 
	require_once '../modelos/modeloCursoMooc.php';

	$cursoMooc = new modeloCursoMooc();

	switch ($_GET["op"]){

		//////////////////////////////////////////////////////////Curso Mooc
		case 'reporteCursoMoocAdmisionP':	
			$rspta = $cursoMooc -> cursoMoocPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"apellidos" => $reg -> apellidos,
					"nombres" => $reg -> nombres,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"sexo" => $reg -> sexo,
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"carrera" => $reg -> carrera,
					"grado" => $reg -> grado,
					"avm3" => $reg -> avm3,
					"estadoM3" => $reg -> estadoM3,
					"IntestadoM3" => $reg -> IntestadoM3,
					"avm4" => $reg -> avm4,
					"estadoM4" => $reg -> estadoM4,
					"IntestadoM4" => $reg -> IntestadoM4,
					"avm5" => $reg -> avm5,
					"estadoM5" => $reg -> estadoM5,
					"IntestadoM5" => $reg -> IntestadoM5,
					"cohorte" => $reg -> cohorte,
					"NivelConocimientoM3" => $reg -> NivelConocimientoM3,
					"NivelConocimientoM4" => $reg -> NivelConocimientoM4,
					"NivelConocimientoM5" => $reg -> NivelConocimientoM5,
					"estado" => $reg -> estado,
					"termino" => $reg -> termino,
					"tipo" => $reg -> tipo
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteCursoMoocAdmisionTP':	
			$rspta = $cursoMooc -> cursoMoocTeoricoPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"apellidos" => $reg -> apellidos,
					"nombres" => $reg -> nombres,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"sexo" => $reg -> sexo,
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"carrera" => $reg -> carrera,
					"grado" => $reg -> grado,
					"avm1" => $reg -> avm1,
					"estadoM1" => $reg -> estadoM1,
					"IntestadoM1" => $reg -> IntestadoM1,
					"avm2" => $reg -> avm2,
					"estadoM2" => $reg -> estadoM2,
					"IntestadoM2" => $reg -> IntestadoM2,
					"avm3" => $reg -> avm3,
					"estadoM3" => $reg -> estadoM3,
					"IntestadoM3" => $reg -> IntestadoM3,
					"avm4" => $reg -> avm4,
					"estadoM4" => $reg -> estadoM4,
					"IntestadoM4" => $reg -> IntestadoM4,
					"avm5" => $reg -> avm5,
					"estadoM5" => $reg -> estadoM5,
					"IntestadoM5" => $reg -> IntestadoM5,
					"avm6" => $reg -> avm6,
					"estadoM6" => $reg -> estadoM6,
					"IntestadoM6" => $reg -> IntestadoM6,
					"cohorte" => $reg -> cohorte,
					"NivelConocimientoM1" => $reg -> NivelConocimientoM1,
					"NivelConocimientoM2" => $reg -> NivelConocimientoM2,
					"NivelConocimientoM3" => $reg -> NivelConocimientoM3,
					"NivelConocimientoM4" => $reg -> NivelConocimientoM4,
					"NivelConocimientoM5" => $reg -> NivelConocimientoM5,
					"NivelConocimientoM6" => $reg -> NivelConocimientoM6,
					"estado" => $reg -> estado,
					"termino" => $reg -> termino,
					"tipo" => $reg -> tipo
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteCursoMoocEspolP':	
			$rspta = $cursoMooc -> cursoMoocPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"apellidos" => $reg -> apellidos,
					"nombres" => $reg -> nombres,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"sexo" => $reg -> sexo,
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"carrera" => $reg -> carrera,
					"grado" => $reg -> grado,
					"avm3" => $reg -> avm3,
					"estadoM3" => $reg -> estadoM3,
					"IntestadoM3" => $reg -> IntestadoM3,
					"avm4" => $reg -> avm4,
					"estadoM4" => $reg -> estadoM4,
					"IntestadoM4" => $reg -> IntestadoM4,
					"avm5" => $reg -> avm5,
					"estadoM5" => $reg -> estadoM5,
					"IntestadoM5" => $reg -> IntestadoM5,
					"cohorte" => $reg -> cohorte,
					"NivelConocimientoM3" => $reg -> NivelConocimientoM3,
					"NivelConocimientoM4" => $reg -> NivelConocimientoM4,
					"NivelConocimientoM5" => $reg -> NivelConocimientoM5,
					"estado" => $reg -> estado,
					"termino" => $reg -> termino,
					"tipo" => $reg -> tipo
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteCursoMoocEspolTP':	
			$rspta = $cursoMooc -> cursoMoocTeoricoPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"apellidos" => $reg -> apellidos,
					"nombres" => $reg -> nombres,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"email" => $reg -> email,
					"sexo" => $reg -> sexo,
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"carrera" => $reg -> carrera,
					"grado" => $reg -> grado,
					"avm1" => $reg -> avm1,
					"estadoM1" => $reg -> estadoM1,
					"IntestadoM1" => $reg -> IntestadoM1,
					"avm2" => $reg -> avm2,
					"estadoM2" => $reg -> estadoM2,
					"IntestadoM2" => $reg -> IntestadoM2,
					"avm3" => $reg -> avm3,
					"estadoM3" => $reg -> estadoM3,
					"IntestadoM3" => $reg -> IntestadoM3,
					"avm4" => $reg -> avm4,
					"estadoM4" => $reg -> estadoM4,
					"IntestadoM4" => $reg -> IntestadoM4,
					"avm5" => $reg -> avm5,
					"estadoM5" => $reg -> estadoM5,
					"IntestadoM5" => $reg -> IntestadoM5,
					"avm6" => $reg -> avm6,
					"estadoM6" => $reg -> estadoM6,
					"IntestadoM6" => $reg -> IntestadoM6,
					"cohorte" => $reg -> cohorte,
					"NivelConocimientoM1" => $reg -> NivelConocimientoM1,
					"NivelConocimientoM2" => $reg -> NivelConocimientoM2,
					"NivelConocimientoM3" => $reg -> NivelConocimientoM3,
					"NivelConocimientoM4" => $reg -> NivelConocimientoM4,
					"NivelConocimientoM5" => $reg -> NivelConocimientoM5,
					"NivelConocimientoM6" => $reg -> NivelConocimientoM6,
					"estado" => $reg -> estado,
					"termino" => $reg -> termino,
					"tipo" => $reg -> tipo
				);
			}
			
			echo json_encode($data);
		break;	
	}

?>