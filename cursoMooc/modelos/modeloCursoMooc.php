<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloCursoMooc
	{
		public function __construct(){

		}	

		public function cursoMoocTeoricoPractico($tipoEstudiante){
			$sql = "SELECT 
			        id,
				    apellidos,
				    nombres,
				    matricula,
				    cedula,
				    email,
				    sexo,
				    tipoEstudiante,
				    carrera,
				    grado,
				    avm1,
				    estadoM1,
				    IntestadoM1,
				    avm2,
				    estadoM2,
				    IntestadoM2,
				    avm3,
				    estadoM3,
				    IntestadoM3,
				    avm4,
				    estadoM4,
				    IntestadoM4,
				    avm5,
				    estadoM5,
				    IntestadoM5,
				    avm6,
				    estadoM6,
				    IntestadoM6,
				    cohorte,
				    NivelConocimientoM1,
				    NivelConocimientoM2,
				    NivelConocimientoM3,
				    NivelConocimientoM4,
				    NivelConocimientoM5,
				    NivelConocimientoM6,
				    estado,
				    termino,
				    'TP' as tipo
				from reporteetp_cursoMooc
				where tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}

		public function cursoMoocPractico($tipoEstudiante){
			$sql = "SELECT 
			        id,
				    apellidos,
				    nombres,
				    matricula,
				    cedula,
				    email,
				    sexo,
				    tipoEstudiante,
				    carrera,
				    grado,
				    avm3,
				    estadoM3,
				    IntestadoM3,
				    avm4,
				    estadoM4,
				    IntestadoM4,
				    avm5,
				    estadoM5,
				    IntestadoM5,
				    cohorte,
				    NivelConocimientoM3,
				    NivelConocimientoM4,
				    NivelConocimientoM5,
				    estado,
				    termino,
				    'P' as tipo
				from reporteep_cursoMooc
				where tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}
	}
?>