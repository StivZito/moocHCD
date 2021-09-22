<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloGtsi
	{
		public function __construct(){

		}

		public function gtsiPractico($tipoEstudiante)
		{
			$sql = "SELECT 
					nombres,
					apellidos,
					matricula,
					cedula,
					email,
					franja,
					paralelo,
					cast(fechaExamen as date) as fechaExamen,
					ExamenTeorico,
					word,
					ppt,
					excel,
					Aprobaron,
					cohorte,
					termino,
					anio,
					sistema,
					tipoEstudiante
					FROM reporteep_gtsi
					where tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}	

		public function gtsiTeoricoPractico($tipoEstudiante)
		{
			$sql = "SELECT 
					nombres,
					apellidos,
					matricula,
					cedula,
					email,
					franja,
					paralelo,
					cast(fechaExamen as date) as fechaExamen,
					ExamenTeorico,
					word,
					ppt,
					excel,
					Aprobaron,
					cohorte,
					termino,
					anio,
					sistema,
					tipoEstudiante
					FROM reporteetp_gtsi
					where tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}

	}
?>