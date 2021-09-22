<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloEncuestas
	{
		public function __construct(){

		}	

		///////////////////////////////////////////////////////////////////////DIAGNOSTICO
		public function reportePruebaDiagnosticoEP($tipoEstudiante)
		{
			$sql = "SELECT
					c.StudentID as id,
					c.nombres,
					c.apellidos,
					c.Email as email,  
					c.matricula,
					c.sexo,
					c.edad,
					c.tipo_colegio,
					c.cedula,
					c.grade,
					c.carrera,
					c.mod3,
					c.mod4,
					c.mod5,
					c.st,
					c.promedio,
					c.nivelConocimientoM3,
					c.nivelConocimientoM4,
					c.nivelConocimientoM5,
					c.Grade, 
					c.termino, 
					c.anio, 
					c.sistema
					from reporteep_ec_diagnostico c 
					where (mod3 + mod4 + mod5  + st + grade)  > 0 and tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reportePruebaDiagnosticoETP($tipoEstudiante)
		{
			$sql = "SELECT
					c.StudentID as id,
					c.nombres,
					c.apellidos,
					c.Email as email,  
					c.matricula,
					c.sexo,
					c.edad,
					c.tipo_colegio,
					c.cedula,
					c.grade,
					c.carrera,
					c.mod1,
					c.mod2,
					c.mod3,
					c.mod4,
					c.mod5,
					c.mod6,
					c.st,
					c.promedio,
					c.nivelConocimientoM1,
					c.nivelConocimientoM2,
					c.nivelConocimientoM3,
					c.nivelConocimientoM4,
					c.nivelConocimientoM5,
					c.nivelConocimientoM6,
					c.Grade, 
					c.termino, 
					c.anio, 
					c.sistema
					from reporteetp_ec_diagnostico c 
					where (mod1 + mod2 + mod3 + mod4 + mod5 + mod6 + st + promedio)  > 0 and tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		//////////////////////////////////////////////////////////////////diagnostico practico 
		public function num_est_registrados_p_diagnostico($flag)
		{
			if ($flag == 'T')    $sql = "SELECT count(StudentID) as estudiantes                                             from reporteep_ec_diagnostico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'Espol'    then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'Admision' then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";

			if ($flag == 'RP')   $sql = "SELECT sum(case when                                 st > 0 then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";
			if ($flag == 'RPE')  $sql = "SELECT sum(case when tipoEstudiante = 'Espol'    and st > 0 then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";
			if ($flag == 'RPA')  $sql = "SELECT sum(case when tipoEstudiante = 'Admision' and st > 0 then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";

			if ($flag == 'NRP')  $sql = "SELECT sum(case when                                 st = 0 then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";
			if ($flag == 'NRPE') $sql = "SELECT sum(case when tipoEstudiante = 'Espol'    and st = 0 then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";
			if ($flag == 'NRPA') $sql = "SELECT sum(case when tipoEstudiante = 'Admision' and st = 0 then 1 else 0 end) as estudiantes from reporteep_ec_diagnostico;";

			return ejecutarConsultaSimpleFila($sql);				
		}

		public function detalleDiagnosticoEstudiantesP($tipoEstudiante)
		{
			$sql = "SELECT 
			        'MODULO 3' as modulo,
					sum(case when c.nivelConocimientoM3 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as inicial_espol,
					sum(case when c.nivelConocimientoM3 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 3 else 0 end) as inicial_admision,
					sum(case when c.nivelConocimientoM3 = 'INICIAL'                                         then 3 else 0 end) as inicial_total,
					sum(case when c.nivelConocimientoM3 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as regular_espol,
					sum(case when c.nivelConocimientoM3 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 3 else 0 end) as regular_admision,
					sum(case when c.nivelConocimientoM3 = 'REGULAR'                                         then 3 else 0 end) as regular_total,
					sum(case when c.nivelConocimientoM3 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as enDesarrollo_espol,
					sum(case when c.nivelConocimientoM3 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 3 else 0 end) as enDesarrollo_admision,
					sum(case when c.nivelConocimientoM3 = 'EN DESARROLLO'                                   then 3 else 0 end) as enDesarrollo_total,
					sum(case when c.nivelConocimientoM3 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as desarrollado_espol,
					sum(case when c.nivelConocimientoM3 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 3 else 0 end) as desarrollado_admision,
					sum(case when c.nivelConocimientoM3 = 'DESARROLLADO'                                    then 3 else 0 end) as desarrollado_total,
					sum(case when c.nivelConocimientoM3 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as excelente_espol,
					sum(case when c.nivelConocimientoM3 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 3 else 0 end) as excelente_admision,
					sum(case when c.nivelConocimientoM3 = 'EXCELENTE'                                       then 3 else 0 end) as excelente_total,
					sum(case when c.nivelConocimientoM3 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as sinRespuesta_espol,
					sum(case when c.nivelConocimientoM3 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 3 else 0 end) as sinRespuesta_admision,
					sum(case when c.nivelConocimientoM3 = 'SIN RESPUESTA'                                   then 3 else 0 end) as sinRespuesta_total
					from reporteep_ec_diagnostico c
					union
					select 'MODULO 4' as modulo,
					sum(case when c.nivelConocimientoM4 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as inicial_espol,
					sum(case when c.nivelConocimientoM4 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 4 else 0 end) as inicial_admision,
					sum(case when c.nivelConocimientoM4 = 'INICIAL'                                         then 4 else 0 end) as inicial_total,
					sum(case when c.nivelConocimientoM4 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as regular_espol,
					sum(case when c.nivelConocimientoM4 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 4 else 0 end) as regular_admision,
					sum(case when c.nivelConocimientoM4 = 'REGULAR'                                         then 4 else 0 end) as regular_total,
					sum(case when c.nivelConocimientoM4 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as enDesarrollo_espol,
					sum(case when c.nivelConocimientoM4 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 4 else 0 end) as enDesarrollo_admision,
					sum(case when c.nivelConocimientoM4 = 'EN DESARROLLO'                                   then 4 else 0 end) as enDesarrollo_total,
					sum(case when c.nivelConocimientoM4 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as desarrollado_espol,
					sum(case when c.nivelConocimientoM4 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 4 else 0 end) as desarrollado_admision,
					sum(case when c.nivelConocimientoM4 = 'DESARROLLADO'                                    then 4 else 0 end) as desarrollado_total,
					sum(case when c.nivelConocimientoM4 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as excelente_espol,
					sum(case when c.nivelConocimientoM4 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 4 else 0 end) as excelente_admision,
					sum(case when c.nivelConocimientoM4 = 'EXCELENTE'                                       then 4 else 0 end) as excelente_total,
					sum(case when c.nivelConocimientoM4 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as sinRespuesta_espol,
					sum(case when c.nivelConocimientoM4 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 4 else 0 end) as sinRespuesta_admision,
					sum(case when c.nivelConocimientoM4 = 'SIN RESPUESTA'                                   then 4 else 0 end) as sinRespuesta_total
					from reporteep_ec_diagnostico c
					union
					select 'MODULO 5' as modulo,
					sum(case when c.nivelConocimientoM5 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as inicial_espol,
					sum(case when c.nivelConocimientoM5 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 5 else 0 end) as inicial_admision,
					sum(case when c.nivelConocimientoM5 = 'INICIAL'                                         then 5 else 0 end) as inicial_total,
					sum(case when c.nivelConocimientoM5 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as regular_espol,
					sum(case when c.nivelConocimientoM5 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 5 else 0 end) as regular_admision,
					sum(case when c.nivelConocimientoM5 = 'REGULAR'                                         then 5 else 0 end) as regular_total,
					sum(case when c.nivelConocimientoM5 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as enDesarrollo_espol,
					sum(case when c.nivelConocimientoM5 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 5 else 0 end) as enDesarrollo_admision,
					sum(case when c.nivelConocimientoM5 = 'EN DESARROLLO'                                   then 5 else 0 end) as enDesarrollo_total,
					sum(case when c.nivelConocimientoM5 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as desarrollado_espol,
					sum(case when c.nivelConocimientoM5 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 5 else 0 end) as desarrollado_admision,
					sum(case when c.nivelConocimientoM5 = 'DESARROLLADO'                                    then 5 else 0 end) as desarrollado_total,
					sum(case when c.nivelConocimientoM5 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as excelente_espol,
					sum(case when c.nivelConocimientoM5 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 5 else 0 end) as excelente_admision,
					sum(case when c.nivelConocimientoM5 = 'EXCELENTE'                                       then 5 else 0 end) as excelente_total,
					sum(case when c.nivelConocimientoM5 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as sinRespuesta_espol,
					sum(case when c.nivelConocimientoM5 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 5 else 0 end) as sinRespuesta_admision,
					sum(case when c.nivelConocimientoM5 = 'SIN RESPUESTA'                                   then 5 else 0 end) as sinRespuesta_total
					from reporteep_ec_diagnostico c;";
			
			return ejecutarConsulta($sql);	
		}

		//////////////////////////////////////////////////////////////////diagnostico teorico practico 
		public function num_est_registrados_tp_diagnostico($flag)
		{
			if ($flag == 'T')    $sql = "SELECT count(StudentID) as estudiantes                                             from reporteetp_ec_diagnostico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'Espol'    then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'Admision' then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";

			if ($flag == 'RP')   $sql = "SELECT sum(case when                                 st > 0 then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";
			if ($flag == 'RPE')  $sql = "SELECT sum(case when tipoEstudiante = 'Espol'    and st > 0 then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";
			if ($flag == 'RPA')  $sql = "SELECT sum(case when tipoEstudiante = 'Admision' and st > 0 then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";

			if ($flag == 'NRP')  $sql = "SELECT sum(case when                                 st = 0 then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";
			if ($flag == 'NRPE') $sql = "SELECT sum(case when tipoEstudiante = 'Espol'    and st = 0 then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";
			if ($flag == 'NRPA') $sql = "SELECT sum(case when tipoEstudiante = 'Admision' and st = 0 then 1 else 0 end) as estudiantes from reporteetp_ec_diagnostico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleDiagnosticoEstudiantesTP($tipoEstudiante)
		{
			$sql = "SELECT 'MODULO 1' as modulo,
				       sum(case when c.nivelConocimientoM1 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 1 else 0 end) as inicial_espol,
				       sum(case when c.nivelConocimientoM1 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 1 else 0 end) as inicial_admision,
				       sum(case when c.nivelConocimientoM1 = 'INICIAL'                                         then 1 else 0 end) as inicial_total,
				       sum(case when c.nivelConocimientoM1 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 1 else 0 end) as regular_espol,
				       sum(case when c.nivelConocimientoM1 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 1 else 0 end) as regular_admision,
				       sum(case when c.nivelConocimientoM1 = 'REGULAR'                                         then 1 else 0 end) as regular_total,
				       sum(case when c.nivelConocimientoM1 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 1 else 0 end) as enDesarrollo_espol,
				       sum(case when c.nivelConocimientoM1 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 1 else 0 end) as enDesarrollo_admision,
				       sum(case when c.nivelConocimientoM1 = 'EN DESARROLLO'                                   then 1 else 0 end) as enDesarrollo_total,
				       sum(case when c.nivelConocimientoM1 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 1 else 0 end) as desarrollado_espol,
				       sum(case when c.nivelConocimientoM1 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 1 else 0 end) as desarrollado_admision,
				       sum(case when c.nivelConocimientoM1 = 'DESARROLLADO'                                    then 1 else 0 end) as desarrollado_total,
				       sum(case when c.nivelConocimientoM1 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 1 else 0 end) as excelente_espol,
				       sum(case when c.nivelConocimientoM1 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 1 else 0 end) as excelente_admision,
				       sum(case when c.nivelConocimientoM1 = 'EXCELENTE'                                       then 1 else 0 end) as excelente_total,
				       sum(case when c.nivelConocimientoM1 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 1 else 0 end) as sinRespuesta_espol,
				       sum(case when c.nivelConocimientoM1 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 1 else 0 end) as sinRespuesta_admision,
				       sum(case when c.nivelConocimientoM1 = 'SIN RESPUESTA'                                   then 1 else 0 end) as sinRespuesta_total
					from reporteetp_ec_diagnostico c
					union
					select 'MODULO 2' as modulo,
				       sum(case when c.nivelConocimientoM2 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 2 else 0 end) as inicial_espol,
				       sum(case when c.nivelConocimientoM2 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 2 else 0 end) as inicial_admision,
				       sum(case when c.nivelConocimientoM2 = 'INICIAL'                                         then 2 else 0 end) as inicial_total,
				       sum(case when c.nivelConocimientoM2 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 2 else 0 end) as regular_espol,
				       sum(case when c.nivelConocimientoM2 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 2 else 0 end) as regular_admision,
				       sum(case when c.nivelConocimientoM2 = 'REGULAR'                                         then 2 else 0 end) as regular_total,
				       sum(case when c.nivelConocimientoM2 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 2 else 0 end) as enDesarrollo_espol,
				       sum(case when c.nivelConocimientoM2 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 2 else 0 end) as enDesarrollo_admision,
				       sum(case when c.nivelConocimientoM2 = 'EN DESARROLLO'                                   then 2 else 0 end) as enDesarrollo_total,
				       sum(case when c.nivelConocimientoM2 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 2 else 0 end) as desarrollado_espol,
				       sum(case when c.nivelConocimientoM2 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 2 else 0 end) as desarrollado_admision,
				       sum(case when c.nivelConocimientoM2 = 'DESARROLLADO'                                    then 2 else 0 end) as desarrollado_total,
				       sum(case when c.nivelConocimientoM2 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 2 else 0 end) as excelente_espol,
				       sum(case when c.nivelConocimientoM2 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 2 else 0 end) as excelente_admision,
				       sum(case when c.nivelConocimientoM2 = 'EXCELENTE'                                       then 2 else 0 end) as excelente_total,
				       sum(case when c.nivelConocimientoM2 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 2 else 0 end) as sinRespuesta_espol,
				       sum(case when c.nivelConocimientoM2 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 2 else 0 end) as sinRespuesta_admision,
				       sum(case when c.nivelConocimientoM2 = 'SIN RESPUESTA'                                   then 2 else 0 end) as sinRespuesta_total
					from reporteetp_ec_diagnostico c
					union
					select 'MODULO 3' as modulo,
				       sum(case when c.nivelConocimientoM3 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as inicial_espol,
				       sum(case when c.nivelConocimientoM3 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 3 else 0 end) as inicial_admision,
				       sum(case when c.nivelConocimientoM3 = 'INICIAL'                                         then 3 else 0 end) as inicial_total,
				       sum(case when c.nivelConocimientoM3 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as regular_espol,
				       sum(case when c.nivelConocimientoM3 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 3 else 0 end) as regular_admision,
				       sum(case when c.nivelConocimientoM3 = 'REGULAR'                                         then 3 else 0 end) as regular_total,
				       sum(case when c.nivelConocimientoM3 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as enDesarrollo_espol,
				       sum(case when c.nivelConocimientoM3 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 3 else 0 end) as enDesarrollo_admision,
				       sum(case when c.nivelConocimientoM3 = 'EN DESARROLLO'                                   then 3 else 0 end) as enDesarrollo_total,
				       sum(case when c.nivelConocimientoM3 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as desarrollado_espol,
				       sum(case when c.nivelConocimientoM3 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 3 else 0 end) as desarrollado_admision,
				       sum(case when c.nivelConocimientoM3 = 'DESARROLLADO'                                    then 3 else 0 end) as desarrollado_total,
				       sum(case when c.nivelConocimientoM3 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as excelente_espol,
				       sum(case when c.nivelConocimientoM3 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 3 else 0 end) as excelente_admision,
				       sum(case when c.nivelConocimientoM3 = 'EXCELENTE'                                       then 3 else 0 end) as excelente_total,
				       sum(case when c.nivelConocimientoM3 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 3 else 0 end) as sinRespuesta_espol,
				       sum(case when c.nivelConocimientoM3 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 3 else 0 end) as sinRespuesta_admision,
				       sum(case when c.nivelConocimientoM3 = 'SIN RESPUESTA'                                   then 3 else 0 end) as sinRespuesta_total
					from reporteetp_ec_diagnostico c
					union
					select 'MODULO 4' as modulo,
				       sum(case when c.nivelConocimientoM4 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as inicial_espol,
				       sum(case when c.nivelConocimientoM4 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 4 else 0 end) as inicial_admision,
				       sum(case when c.nivelConocimientoM4 = 'INICIAL'                                         then 4 else 0 end) as inicial_total,
				       sum(case when c.nivelConocimientoM4 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as regular_espol,
				       sum(case when c.nivelConocimientoM4 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 4 else 0 end) as regular_admision,
				       sum(case when c.nivelConocimientoM4 = 'REGULAR'                                         then 4 else 0 end) as regular_total,
				       sum(case when c.nivelConocimientoM4 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as enDesarrollo_espol,
				       sum(case when c.nivelConocimientoM4 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 4 else 0 end) as enDesarrollo_admision,
				       sum(case when c.nivelConocimientoM4 = 'EN DESARROLLO'                                   then 4 else 0 end) as enDesarrollo_total,
				       sum(case when c.nivelConocimientoM4 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as desarrollado_espol,
				       sum(case when c.nivelConocimientoM4 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 4 else 0 end) as desarrollado_admision,
				       sum(case when c.nivelConocimientoM4 = 'DESARROLLADO'                                    then 4 else 0 end) as desarrollado_total,
				       sum(case when c.nivelConocimientoM4 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as excelente_espol,
				       sum(case when c.nivelConocimientoM4 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 4 else 0 end) as excelente_admision,
				       sum(case when c.nivelConocimientoM4 = 'EXCELENTE'                                       then 4 else 0 end) as excelente_total,
				       sum(case when c.nivelConocimientoM4 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 4 else 0 end) as sinRespuesta_espol,
				       sum(case when c.nivelConocimientoM4 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 4 else 0 end) as sinRespuesta_admision,
				       sum(case when c.nivelConocimientoM4 = 'SIN RESPUESTA'                                   then 4 else 0 end) as sinRespuesta_total
					from reporteetp_ec_diagnostico c
					union
					select 'MODULO 5' as modulo,
				       sum(case when c.nivelConocimientoM5 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as inicial_espol,
				       sum(case when c.nivelConocimientoM5 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 5 else 0 end) as inicial_admision,
				       sum(case when c.nivelConocimientoM5 = 'INICIAL'                                         then 5 else 0 end) as inicial_total,
				       sum(case when c.nivelConocimientoM5 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as regular_espol,
				       sum(case when c.nivelConocimientoM5 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 5 else 0 end) as regular_admision,
				       sum(case when c.nivelConocimientoM5 = 'REGULAR'                                         then 5 else 0 end) as regular_total,
				       sum(case when c.nivelConocimientoM5 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as enDesarrollo_espol,
				       sum(case when c.nivelConocimientoM5 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 5 else 0 end) as enDesarrollo_admision,
				       sum(case when c.nivelConocimientoM5 = 'EN DESARROLLO'                                   then 5 else 0 end) as enDesarrollo_total,
				       sum(case when c.nivelConocimientoM5 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as desarrollado_espol,
				       sum(case when c.nivelConocimientoM5 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 5 else 0 end) as desarrollado_admision,
				       sum(case when c.nivelConocimientoM5 = 'DESARROLLADO'                                    then 5 else 0 end) as desarrollado_total,
				       sum(case when c.nivelConocimientoM5 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as excelente_espol,
				       sum(case when c.nivelConocimientoM5 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 5 else 0 end) as excelente_admision,
				       sum(case when c.nivelConocimientoM5 = 'EXCELENTE'                                       then 5 else 0 end) as excelente_total,
				       sum(case when c.nivelConocimientoM5 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 5 else 0 end) as sinRespuesta_espol,
				       sum(case when c.nivelConocimientoM5 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 5 else 0 end) as sinRespuesta_admision,
				       sum(case when c.nivelConocimientoM5 = 'SIN RESPUESTA'                                   then 5 else 0 end) as sinRespuesta_total
					from reporteetp_ec_diagnostico c
					union
					select 'MODULO 6' as modulo,
				       sum(case when c.nivelConocimientoM6 = 'INICIAL'       and c.tipoEstudiante = 'Espol'    then 6 else 0 end) as inicial_espol,
				       sum(case when c.nivelConocimientoM6 = 'INICIAL'       and c.tipoEstudiante = 'Admision' then 6 else 0 end) as inicial_admision,
				       sum(case when c.nivelConocimientoM6 = 'INICIAL'                                         then 6 else 0 end) as inicial_total,
				       sum(case when c.nivelConocimientoM6 = 'REGULAR'       and c.tipoEstudiante = 'Espol'    then 6 else 0 end) as regular_espol,
				       sum(case when c.nivelConocimientoM6 = 'REGULAR'       and c.tipoEstudiante = 'Admision' then 6 else 0 end) as regular_admision,
				       sum(case when c.nivelConocimientoM6 = 'REGULAR'                                         then 6 else 0 end) as regular_total,
				       sum(case when c.nivelConocimientoM6 = 'EN DESARROLLO' and c.tipoEstudiante = 'Espol'    then 6 else 0 end) as enDesarrollo_espol,
				       sum(case when c.nivelConocimientoM6 = 'EN DESARROLLO' and c.tipoEstudiante = 'Admision' then 6 else 0 end) as enDesarrollo_admision,
				       sum(case when c.nivelConocimientoM6 = 'EN DESARROLLO'                                   then 6 else 0 end) as enDesarrollo_total,
				       sum(case when c.nivelConocimientoM6 = 'DESARROLLADO'  and c.tipoEstudiante = 'Espol'    then 6 else 0 end) as desarrollado_espol,
				       sum(case when c.nivelConocimientoM6 = 'DESARROLLADO'  and c.tipoEstudiante = 'Admision' then 6 else 0 end) as desarrollado_admision,
				       sum(case when c.nivelConocimientoM6 = 'DESARROLLADO'                                    then 6 else 0 end) as desarrollado_total,
				       sum(case when c.nivelConocimientoM6 = 'EXCELENTE'     and c.tipoEstudiante = 'Espol'    then 6 else 0 end) as excelente_espol,
				       sum(case when c.nivelConocimientoM6 = 'EXCELENTE'     and c.tipoEstudiante = 'Admision' then 6 else 0 end) as excelente_admision,
				       sum(case when c.nivelConocimientoM6 = 'EXCELENTE'                                       then 6 else 0 end) as excelente_total,
				       sum(case when c.nivelConocimientoM6 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Espol'    then 6 else 0 end) as sinRespuesta_espol,
				       sum(case when c.nivelConocimientoM6 = 'SIN RESPUESTA' and c.tipoEstudiante = 'Admision' then 6 else 0 end) as sinRespuesta_admision,
				       sum(case when c.nivelConocimientoM6 = 'SIN RESPUESTA'                                   then 6 else 0 end) as sinRespuesta_total
					from reporteetp_ec_diagnostico c;";
			
			return ejecutarConsulta($sql);	
		}


		/////////////////////////////////////////////////////////////////////DEMOGRAFICA PRACTICO
		public function num_est_registrados_p_demografica($tipoEstudiante, $sexo)
		{

			$sql = "SELECT count(username) as estudiantes from reporteep_ec_demografica where tipoEstudiante = '".$tipoEstudiante."'"."and sexo = '".$sexo."'"."group by tipoEstudiante,sexo;";
			
			if ($tipoEstudiante  == 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteep_ec_demografica;";
			if ($tipoEstudiante !== 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteep_ec_demografica where tipoEstudiante = '".$tipoEstudiante."';";
			if ($tipoEstudiante  == 'T' && $sexo !== 'T') $sql = "SELECT count(username) as estudiantes from reporteep_ec_demografica where sexo = '".$sexo."';";

			return ejecutarConsultaSimpleFila($sql);
		}

		public function detalleDemograficaGeneroEstudiantesP($tipoEstudiante){
			$sql = "SELECT sexo,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(sexo) as estudiantes 
					from reporteep_ec_demografica
					group by sexo
					union
					select 'TOTAL' as sexo,
					       sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					       sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					       count(sexo) as estudiantes 
					from reporteep_ec_demografica;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaEdadEstudiantesP($tipoEstudiante){
			$sql = "SELECT 'NN' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(edad,0) < 17
					union 
					select '17 - 20' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(edad,0) > 16 and ifnull(edad,0) < 21
					union
					select '21 - 25' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(edad,0) > 20 and ifnull(edad,0) < 26
					union
					select '26 - 30' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(edad,0) > 25 and ifnull(edad,0) < 31
					union
					select 'MAS' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(edad,0) > 30
					union
					select 'TOTAL' as edad,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(edad) as estudiantes 
					from reporteep_ec_demografica;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaColegioEstudiantesP($tipoEstudiante){
			$sql = "SELECT d.tipo_colegio,
					       sum(case when c.tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					       sum(case when c.tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					       count(d.tipo_colegio) as estudiantes 
					from reporteep_ec_demografica c
					inner join academicopractico d 
					on  d.matricula = c.matricula 
					and d.identificacion    = c.cedula 
					and d.tipoEstudiante = c.tipoEstudiante
					group by d.tipo_colegio
					union
					select 'TOTAL' as tipo_colegio,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(edad) as estudiantes 
					from reporteep_ec_demografica;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR1P($tipoEstudiante){
			$sql = "SELECT r1,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r1) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r1,'') <> ''
					group by r1
					union
					select 'TOTAL' as r1,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r1) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r1,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR2P($tipoEstudiante){
			$sql = "SELECT r2,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r2) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r2,'') <> ''
					group by r2
					union
					select 'TOTAL' as r2,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r2) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r2,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR3P($tipoEstudiante){
			$sql = "SELECT r3,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r3) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r3,'') <> ''
					group by r3
					union
					select 'TOTAL' as r3,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r3) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r3,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR4P($tipoEstudiante){
			$sql = "SELECT r4,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r4) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r4,'') <> ''
					group by r4
					union
					select 'TOTAL' as r4,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r4) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r4,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR5P($tipoEstudiante){
			$sql = "SELECT r5,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r5) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r5,'') <> ''
					group by r5
					union
					select 'TOTAL' as r5,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r5) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r5,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR6P($tipoEstudiante){
			$sql = "SELECT r6,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r6) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r6,'') <> ''
					group by r6
					union
					select 'TOTAL' as r6,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r6) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r6,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR7P($tipoEstudiante){
			$sql = "SELECT r7,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r7) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r7,'') <> ''
					group by r7
					union
					select 'TOTAL' as r7,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r7) as estudiantes 
					from reporteep_ec_demografica
					where ifnull(r7,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}


		/////////////////////////////////////////////////////////////////////DEMOGRAFICA TEORICO PRACTICO
		public function num_est_registrados_tp_demografica($tipoEstudiante, $sexo)
		{

			$sql = "SELECT count(username) as estudiantes from reporteetp_ec_demografica where tipoEstudiante = '".$tipoEstudiante."'"."and sexo = '".$sexo."'"."group by tipoEstudiante,sexo;";
			
			if ($tipoEstudiante  == 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteetp_ec_demografica;";
			if ($tipoEstudiante !== 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteetp_ec_demografica where tipoEstudiante = '".$tipoEstudiante."';";
			if ($tipoEstudiante  == 'T' && $sexo !== 'T') $sql = "SELECT count(username) as estudiantes from reporteetp_ec_demografica where sexo = '".$sexo."';";

			return ejecutarConsultaSimpleFila($sql);
		}

		public function detalleDemograficaGeneroEstudiantesTP($tipoEstudiante){
			$sql = "SELECT sexo,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(sexo) as estudiantes 
					from reporteetp_ec_demografica
					group by sexo
					union
					select 'TOTAL' as sexo,
					       sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					       sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					       count(sexo) as estudiantes 
					from reporteetp_ec_demografica;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaEdadEstudiantesTP($tipoEstudiante){
			$sql = "SELECT 'NN' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(edad,0) < 17
					union 
					select '17 - 20' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(edad,0) > 16 and ifnull(edad,0) < 21
					union
					select '21 - 25' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(edad,0) > 20 and ifnull(edad,0) < 26
					union
					select '26 - 30' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(edad,0) > 25 and ifnull(edad,0) < 31
					union
					select 'MAS' as edad,
					       ifnull(sum(case when tipoEstudiante='ESPOL' then 1 else 0 end),0) as espol,
					       ifnull(sum(case when tipoEstudiante='ADMISION' then 1 else 0 end),0) as admision,
					       count(edad) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(edad,0) > 30
					union
					select 'TOTAL' as edad,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(edad) as estudiantes 
					from reporteetp_ec_demografica;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaColegioEstudiantesTP($tipoEstudiante){
			$sql = "SELECT d.tipo_colegio,
					       sum(case when c.tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					       sum(case when c.tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					       count(d.tipo_colegio) as estudiantes 
					from reporteetp_ec_demografica c
					inner join academicoteoricopractico d 
					on  d.matricula = c.matricula 
					and d.identificacion    = c.cedula 
					and d.tipoEstudiante = c.tipoEstudiante
					group by d.tipo_colegio
					union
					select 'TOTAL' as tipo_colegio,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(edad) as estudiantes 
					from reporteetp_ec_demografica;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR1TP($tipoEstudiante){
			$sql = "SELECT r1,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r1) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r1,'') <> ''
					group by r1
					union
					select 'TOTAL' as r1,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r1) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r1,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR2TP($tipoEstudiante){
			$sql = "SELECT r2,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r2) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r2,'') <> ''
					group by r2
					union
					select 'TOTAL' as r2,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r2) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r2,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR3TP($tipoEstudiante){
			$sql = "SELECT r3,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r3) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r3,'') <> ''
					group by r3
					union
					select 'TOTAL' as r3,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r3) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r3,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR4TP($tipoEstudiante){
			$sql = "SELECT r4,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r4) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r4,'') <> ''
					group by r4
					union
					select 'TOTAL' as r4,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r4) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r4,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR5TP($tipoEstudiante){
			$sql = "SELECT r5,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r5) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r5,'') <> ''
					group by r5
					union
					select 'TOTAL' as r5,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r5) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r5,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR6TP($tipoEstudiante){
			$sql = "SELECT r6,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r6) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r6,'') <> ''
					group by r6
					union
					select 'TOTAL' as r6,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r6) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r6,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleDemograficaR7TP($tipoEstudiante){
			$sql = "SELECT r7,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r7) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r7,'') <> ''
					group by r7
					union
					select 'TOTAL' as r7,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r7) as estudiantes 
					from reporteetp_ec_demografica
					where ifnull(r7,'') <> '';";
			
			return ejecutarConsulta($sql);	
		}




		public function reportePruebaDemograficaEP($tipoEstudiante)
		{
			$sql = "SELECT 
					username,
					nombres,
					apellidos,
					email,
					matricula,
					cedula,
					carrera,
					sexo,
					edad,
					colegio,
					cohorte,
					tipoEstudiante,
					R1,
					R2,
					R3,
					R4,
					R5,
					R6,
					R7
					from reporteep_ec_demografica  
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reportePruebaDemograficaETP($tipoEstudiante)
		{
			$sql = "SELECT 
					username,
					nombres,
					apellidos,
					email,
					matricula,
					cedula,
					carrera,
					sexo,
					edad,
					colegio,
					cohorte,
					tipoEstudiante,
					R1,
					R2,
					R3,
					R4,
					R5,
					R6,
					R7
					from reporteetp_ec_demografica  
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}


		/////////////////////////////////////////////////////////////////////////SATISFACCION
		public function reportePruebaSatisfaccionEP($tipoEstudiante)
		{
			$sql = "SELECT 
					username,
					nombres,
					apellidos,
					email,
					matricula,
					cedula,
					carrera,
					sexo,
					edad,
					colegio,
					cohorte,
					tipoEstudiante,
					R1,
					R2_L1,
					R2_L2,
					R2_L3,
					R3_L1,
					R3_L2,
					R3_L3,
					R3_L4,
					R3_L5,
					R3_L6,
					R4,
					R5_L1,
					R5_L2,
					R6
					FROM reporteep_ec_satisfaccion
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reportePruebaSatisfaccionETP($tipoEstudiante)
		{
			$sql = "SELECT 
					username,
					nombres,
					apellidos,
					email,
					matricula,
					cedula,
					carrera,
					sexo,
					edad,
					colegio,
					cohorte,
					tipoEstudiante,
					R1_L1,
					R1_L2,
					R1_L3,
					R1_L4,
					R1_L5,
					R1_L6,
					R2,
					R3_L1,
					R3_L2,
					R3_L3,
					R4,
					R5_L1,
					R5_L2,
					R6
					FROM reporteetp_ec_satisfaccion
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}


		//////////////////////////////////////////////////////////////////////////////SATISFACCION PRACITCO
		public function num_est_registrados_p_satisfaccion($tipoEstudiante, $sexo)
		{

			$sql = "SELECT count(username) as estudiantes from reporteep_ec_satisfaccion where tipoEstudiante = '".$tipoEstudiante."'"."and sexo = '".$sexo."'"."group by tipoEstudiante,sexo;";
			
			if ($tipoEstudiante  == 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteep_ec_satisfaccion;";
			if ($tipoEstudiante !== 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteep_ec_satisfaccion where tipoEstudiante = '".$tipoEstudiante."';";
			if ($tipoEstudiante  == 'T' && $sexo !== 'T') $sql = "SELECT count(username) as estudiantes from reporteep_ec_satisfaccion where sexo = '".$sexo."';";

			return ejecutarConsultaSimpleFila($sql);
		}
		
		public function detalleSatisfaccionR1P($tipoEstudiante){
			$sql ="SELECT 
					'25%' as respuesta,
					sum(case when c.r3_l1 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					sum(case when c.r3_l1 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					sum(case when c.r3_l1 = 0.25                                 then 1 else 0 end) as total_m1,
					sum(case when c.r3_l2 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					sum(case when c.r3_l2 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					sum(case when c.r3_l2 = 0.25                                 then 1 else 0 end) as total_m2,
					sum(case when c.r3_l3 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					sum(case when c.r3_l3 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					sum(case when c.r3_l3 = 0.25                                 then 1 else 0 end) as total_m3,
					sum(case when c.r3_l4 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					sum(case when c.r3_l4 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					sum(case when c.r3_l4 = 0.25                                 then 1 else 0 end) as total_m4,
					sum(case when c.r3_l5 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					sum(case when c.r3_l5 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					sum(case when c.r3_l5 = 0.25                                 then 1 else 0 end) as total_m5,
					sum(case when c.r3_l6 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					sum(case when c.r3_l6 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					sum(case when c.r3_l6 = 0.25                                 then 1 else 0 end) as total_m6       
					from  reporteep_ec_satisfaccion c

					union

					select '50%' as respuesta,
					sum(case when c.r3_l1 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					sum(case when c.r3_l1 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					sum(case when c.r3_l1 = 0.50                                 then 1 else 0 end) as total_m1,
					sum(case when c.r3_l2 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					sum(case when c.r3_l2 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					sum(case when c.r3_l2 = 0.50                                 then 1 else 0 end) as total_m2,
					sum(case when c.r3_l3 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					sum(case when c.r3_l3 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					sum(case when c.r3_l3 = 0.50                                 then 1 else 0 end) as total_m3,
					sum(case when c.r3_l4 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					sum(case when c.r3_l4 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					sum(case when c.r3_l4 = 0.50                                 then 1 else 0 end) as total_m4,
					sum(case when c.r3_l5 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					sum(case when c.r3_l5 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					sum(case when c.r3_l5 = 0.50                                 then 1 else 0 end) as total_m5,
					sum(case when c.r3_l6 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					sum(case when c.r3_l6 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					sum(case when c.r3_l6 = 0.50                                 then 1 else 0 end) as total_m6       
					from  reporteep_ec_satisfaccion c

					union

					select '75%' as respuesta,
					sum(case when c.r3_l1 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					sum(case when c.r3_l1 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					sum(case when c.r3_l1 = 0.75                                 then 1 else 0 end) as total_m1,
					sum(case when c.r3_l2 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					sum(case when c.r3_l2 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					sum(case when c.r3_l2 = 0.75                                 then 1 else 0 end) as total_m2,
					sum(case when c.r3_l3 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					sum(case when c.r3_l3 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					sum(case when c.r3_l3 = 0.75                                 then 1 else 0 end) as total_m3,
					sum(case when c.r3_l4 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					sum(case when c.r3_l4 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					sum(case when c.r3_l4 = 0.75                                 then 1 else 0 end) as total_m4,
					sum(case when c.r3_l5 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					sum(case when c.r3_l5 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					sum(case when c.r3_l5 = 0.75                                 then 1 else 0 end) as total_m5,
					sum(case when c.r3_l6 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					sum(case when c.r3_l6 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					sum(case when c.r3_l6 = 0.75                                 then 1 else 0 end) as total_m6       
					from  reporteep_ec_satisfaccion c

					union

					select '100%' as respuesta,
					sum(case when c.r3_l1 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					sum(case when c.r3_l1 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					sum(case when c.r3_l1 = 1                                 then 1 else 0 end) as total_m1,
					sum(case when c.r3_l2 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					sum(case when c.r3_l2 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					sum(case when c.r3_l2 = 1                                 then 1 else 0 end) as total_m2,
					sum(case when c.r3_l3 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					sum(case when c.r3_l3 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					sum(case when c.r3_l3 = 1                                 then 1 else 0 end) as total_m3,
					sum(case when c.r3_l4 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					sum(case when c.r3_l4 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					sum(case when c.r3_l4 = 1                                 then 1 else 0 end) as total_m4,
					sum(case when c.r3_l5 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					sum(case when c.r3_l5 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					sum(case when c.r3_l5 = 1                                 then 1 else 0 end) as total_m5,
					sum(case when c.r3_l6 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					sum(case when c.r3_l6 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					sum(case when c.r3_l6 = 1                                 then 1 else 0 end) as total_m6       
					from  reporteep_ec_satisfaccion c

					union

					select 'Total%' as respuesta,
					sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					count(c.tipoestudiante) as total_m1,
					sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					count(c.tipoestudiante) as total_m2,
					sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					count(c.tipoestudiante) as total_m3,
					sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					count(c.tipoestudiante) as total_m4,
					sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					count(c.tipoestudiante) as total_m5,
					sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					count(c.tipoestudiante) as total_m6
					from  reporteep_ec_satisfaccion c;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR2P($tipoEstudiante){
			$sql = "SELECT 
					'De 1 a 3 Horas' as respuesta,
					sum(case when c.r1 = 'De 1 a 3 Horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r1 = 'De 1 a 3 Horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r1 = 'De 1 a 3 Horas'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'De 4 a 6 horas' as respuesta,
					sum(case when c.r1 = 'De 4 a 6 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r1 = 'De 4 a 6 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r1 = 'De 4 a 6 horas'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'De 7 a 9 horas' as respuesta,
					sum(case when c.r1 = 'De 7 a 9 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r1 = 'De 7 a 9 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r1 = 'De 7 a 9 horas'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'No le dedico tiempo' as respuesta,
					sum(case when c.r1 = 'No le dedico tiempo' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r1 = 'No le dedico tiempo' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r1 = 'No le dedico tiempo'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r1,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					   count(r1) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR3L1P($tipoEstudiante){
			$sql = "SELECT 
			        'Si' as respuesta,
					sum(case when c.r2_l1 = 'Si' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l1 = 'Si' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l1 = 'Si'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'No' as respuesta,
					sum(case when c.r2_l1 = 'No' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l1 = 'No' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l1 = 'No'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Mas o menos' as respuesta,
					sum(case when c.r2_l1 = 'Mas o menos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l1 = 'Mas o menos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l1 = 'Mas o menos'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r2_l1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r2_l1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r2_l1,'') = ''                                 then 1 else 0 end) as estudiantes
                    from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r2_l1) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR3L2P($tipoEstudiante){
			$sql = "SELECT 
			        'Si' as respuesta,
					sum(case when c.r2_l1 = 'Si' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l1 = 'Si' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l1 = 'Si'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'No' as respuesta,
					sum(case when c.r2_l1 = 'No' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l1 = 'No' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l1 = 'No'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Mas o menos' as respuesta,
					sum(case when c.r2_l1 = 'Mas o menos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l1 = 'Mas o menos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l1 = 'Mas o menos'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r2_l1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r2_l1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r2_l1,'') = ''                                 then 1 else 0 end) as estudiantes
                    from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r2_l1) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR3L3P($tipoEstudiante){
			$sql = "SELECT 
					'Si' as respuesta,
					sum(case when c.r2_l3 = 'Si' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l3 = 'Si' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l3 = 'Si'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'No' as respuesta,
					sum(case when c.r2_l3 = 'No' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l3 = 'No' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l3 = 'No'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Mas o menos' as respuesta,
					sum(case when c.r2_l3 = 'Mas o menos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2_l3 = 'Mas o menos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2_l3 = 'Mas o menos'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r2_l3,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r2_l3,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r2_l3,'') = ''                                 then 1 else 0 end) as estudiantes
                    from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r2_l3) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR4P($tipoEstudiante){
			$sql = "SELECT 
					'Foro' as respuesta,
					sum(case when c.r4 = 'Foro' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Foro' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Foro'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Twitter' as respuesta,
					sum(case when c.r4 = 'Twitter' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Twitter' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Twitter'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Correo' as respuesta,
					sum(case when c.r4 = 'Correo' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Correo' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Correo'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Llamadas telefonicas' as respuesta,
					sum(case when c.r4 = 'Llamadas telefonicas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Llamadas telefonicas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Llamadas telefonicas'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Cita presencial' as respuesta,
					sum(case when c.r4 = 'Cita presencial' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Cita presencial' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Cita presencial'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r4,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r4,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r4,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r4) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR5L1P($tipoEstudiante){
			$sql = "SELECT 
					'Totalmente Satisfecho' as respuesta,
					sum(case when c.r5_l1 = 'Totalmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l1 = 'Totalmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l1 = 'Totalmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Parcialmente Satisfecho' as respuesta,
					sum(case when c.r5_l1 = 'Parcialmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l1 = 'Parcialmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l1 = 'Parcialmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Nada Satisfecho' as respuesta,
					sum(case when c.r5_l1 = 'Nada Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l1 = 'Nada Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l1 = 'Nada Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r5_l1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r5_l1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r5_l1,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r5_l1) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR5L2P($tipoEstudiante){
			$sql = "SELECT 
					'Totalmente Satisfecho' as respuesta,
					sum(case when c.r5_l2 = 'Totalmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l2 = 'Totalmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l2 = 'Totalmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Parcialmente Satisfecho' as respuesta,
					sum(case when c.r5_l2 = 'Parcialmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l2 = 'Parcialmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l2 = 'Parcialmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'Nada Satisfecho' as respuesta,
					sum(case when c.r5_l2 = 'Nada Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l2 = 'Nada Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l2 = 'Nada Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r5_l2,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r5_l2,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r5_l2,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r5_l2) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR6P($tipoEstudiante){
			$sql = "SELECT 
					'5 a 10 minutos' as respuesta,
					sum(case when c.r6 = '5 a 10 minutos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '5 a 10 minutos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '5 a 10 minutos'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT '15 a 30 minutos' as respuesta,
					sum(case when c.r6 = '15 a 30 minutos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '15 a 30 minutos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '15 a 30 minutos'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT '1 a 2 horas' as respuesta,
					sum(case when c.r6 = '1 a 2 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '1 a 2 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '1 a 2 horas'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT '3 a 5 horas' as respuesta,
					sum(case when c.r6 = '3 a 5 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '3 a 5 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '3 a 5 horas'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT '1 a 2 dias' as respuesta,
					sum(case when c.r6 = '1 a 2 dias' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '1 a 2 dias' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '1 a 2 dias'                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r6,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r6,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r6,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteep_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r6) as estudiantes 
					from reporteep_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}


		//////////////////////////////////////////////////////////////////////////////SATISFACCION TEORICO PRACITCO
		public function num_est_registrados_tp_satisfaccion($tipoEstudiante, $sexo)
		{

			$sql = "SELECT count(username) as estudiantes from reporteetp_ec_satisfaccion where tipoEstudiante = '".$tipoEstudiante."'"."and sexo = '".$sexo."'"."group by tipoEstudiante,sexo;";
			
			if ($tipoEstudiante  == 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteetp_ec_satisfaccion;";
			if ($tipoEstudiante !== 'T' && $sexo  == 'T') $sql = "SELECT count(username) as estudiantes from reporteetp_ec_satisfaccion where tipoEstudiante = '".$tipoEstudiante."';";
			if ($tipoEstudiante  == 'T' && $sexo !== 'T') $sql = "SELECT count(username) as estudiantes from reporteetp_ec_satisfaccion where sexo = '".$sexo."';";

			return ejecutarConsultaSimpleFila($sql);
		}
		public function detalleSatisfaccionR1TP($tipoEstudiante){
			$sql ="SELECT 
			       '25%' as respuesta,
			       sum(case when c.r1_l1 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
			       sum(case when c.r1_l1 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
			       sum(case when c.r1_l1 = 0.25                                 then 1 else 0 end) as total_m1,
			       sum(case when c.r1_l2 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
			       sum(case when c.r1_l2 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
			       sum(case when c.r1_l2 = 0.25                                 then 1 else 0 end) as total_m2,
			       sum(case when c.r1_l3 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
			       sum(case when c.r1_l3 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
			       sum(case when c.r1_l3 = 0.25                                 then 1 else 0 end) as total_m3,
			       sum(case when c.r1_l4 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
			       sum(case when c.r1_l4 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
			       sum(case when c.r1_l4 = 0.25                                 then 1 else 0 end) as total_m4,
			       sum(case when c.r1_l5 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
			       sum(case when c.r1_l5 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
			       sum(case when c.r1_l5 = 0.25                                 then 1 else 0 end) as total_m5,
			       sum(case when c.r1_l6 = 0.25 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
			       sum(case when c.r1_l6 = 0.25 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
			       sum(case when c.r1_l6 = 0.25                                 then 1 else 0 end) as total_m6       
					from  reporteetp_ec_satisfaccion c

					union

					select '50%' as respuesta,
					       sum(case when c.r1_l1 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					       sum(case when c.r1_l1 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					       sum(case when c.r1_l1 = 0.50                                 then 1 else 0 end) as total_m1,
					       sum(case when c.r1_l2 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					       sum(case when c.r1_l2 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					       sum(case when c.r1_l2 = 0.50                                 then 1 else 0 end) as total_m2,
					       sum(case when c.r1_l3 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					       sum(case when c.r1_l3 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					       sum(case when c.r1_l3 = 0.50                                 then 1 else 0 end) as total_m3,
					       sum(case when c.r1_l4 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					       sum(case when c.r1_l4 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					       sum(case when c.r1_l4 = 0.50                                 then 1 else 0 end) as total_m4,
					       sum(case when c.r1_l5 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					       sum(case when c.r1_l5 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					       sum(case when c.r1_l5 = 0.50                                 then 1 else 0 end) as total_m5,
					       sum(case when c.r1_l6 = 0.50 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					       sum(case when c.r1_l6 = 0.50 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					       sum(case when c.r1_l6 = 0.50                                 then 1 else 0 end) as total_m6       
					from  reporteetp_ec_satisfaccion c

					union

					select '75%' as respuesta,
					       sum(case when c.r1_l1 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					       sum(case when c.r1_l1 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					       sum(case when c.r1_l1 = 0.75                                 then 1 else 0 end) as total_m1,
					       sum(case when c.r1_l2 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					       sum(case when c.r1_l2 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					       sum(case when c.r1_l2 = 0.75                                 then 1 else 0 end) as total_m2,
					       sum(case when c.r1_l3 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					       sum(case when c.r1_l3 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					       sum(case when c.r1_l3 = 0.75                                 then 1 else 0 end) as total_m3,
					       sum(case when c.r1_l4 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					       sum(case when c.r1_l4 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					       sum(case when c.r1_l4 = 0.75                                 then 1 else 0 end) as total_m4,
					       sum(case when c.r1_l5 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					       sum(case when c.r1_l5 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					       sum(case when c.r1_l5 = 0.75                                 then 1 else 0 end) as total_m5,
					       sum(case when c.r1_l6 = 0.75 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					       sum(case when c.r1_l6 = 0.75 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					       sum(case when c.r1_l6 = 0.75                                 then 1 else 0 end) as total_m6       
					from  reporteetp_ec_satisfaccion c

					union

					select '100%' as respuesta,
					       sum(case when c.r1_l1 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					       sum(case when c.r1_l1 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					       sum(case when c.r1_l1 = 1                                 then 1 else 0 end) as total_m1,
					       sum(case when c.r1_l2 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					       sum(case when c.r1_l2 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					       sum(case when c.r1_l2 = 1                                 then 1 else 0 end) as total_m2,
					       sum(case when c.r1_l3 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					       sum(case when c.r1_l3 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					       sum(case when c.r1_l3 = 1                                 then 1 else 0 end) as total_m3,
					       sum(case when c.r1_l4 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					       sum(case when c.r1_l4 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					       sum(case when c.r1_l4 = 1                                 then 1 else 0 end) as total_m4,
					       sum(case when c.r1_l5 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					       sum(case when c.r1_l5 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					       sum(case when c.r1_l5 = 1                                 then 1 else 0 end) as total_m5,
					       sum(case when c.r1_l6 = 1 and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					       sum(case when c.r1_l6 = 1 and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					       sum(case when c.r1_l6 = 1                                 then 1 else 0 end) as total_m6       
					from  reporteetp_ec_satisfaccion c

					union

					select 'Total%' as respuesta,
					       sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m1,
					       sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m1,
					       count(c.tipoestudiante) as total_m1,
					       sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m2,
					       sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m2,
					       count(c.tipoestudiante) as total_m2,
					       sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m3,
					       sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m3,
					       count(c.tipoestudiante) as total_m3,
					       sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m4,
					       sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m4,
					       count(c.tipoestudiante) as total_m4,
					       sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m5,
					       sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m5,
					       count(c.tipoestudiante) as total_m5,
					       sum(case when c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol_m6,
					       sum(case when c.tipoestudiante='ADMISION' then 1 else 0 end) as admision_m6,
					       count(c.tipoestudiante) as total_m6
					from  reporteetp_ec_satisfaccion c;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR2TP($tipoEstudiante){
			$sql = "SELECT 
			        'De 1 a 3 Horas' as respuesta,
					sum(case when c.r2 = 'De 1 a 3 Horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2 = 'De 1 a 3 Horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2 = 'De 1 a 3 Horas'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'De 4 a 6 horas' as respuesta,
					sum(case when c.r2 = 'De 4 a 6 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2 = 'De 4 a 6 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2 = 'De 4 a 6 horas'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'De 7 a 9 horas' as respuesta,
					sum(case when c.r2 = 'De 7 a 9 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2 = 'De 7 a 9 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2 = 'De 7 a 9 horas'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'No le dedico tiempo' as respuesta,
					sum(case when c.r2 = 'No le dedico tiempo' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r2 = 'No le dedico tiempo' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r2 = 'No le dedico tiempo'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r2,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r2,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r2,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r2) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR3L1TP($tipoEstudiante){
			$sql = "SELECT 
			        'Si' as respuesta,
					sum(case when c.r3_l1 = 'Si' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l1 = 'Si' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l1 = 'Si'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'No' as respuesta,
					sum(case when c.r3_l1 = 'No' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l1 = 'No' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l1 = 'No'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Mas o menos' as respuesta,
					sum(case when c.r3_l1 = 'Mas o menos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l1 = 'Mas o menos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l1 = 'Mas o menos'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r3_l1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r3_l1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r3_l1,'') = ''                                 then 1 else 0 end) as estudiantes
                    from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r3_l1) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR3L2TP($tipoEstudiante){
			$sql = "SELECT 
			        'Si' as respuesta,
					sum(case when c.r3_l1 = 'Si' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l1 = 'Si' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l1 = 'Si'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'No' as respuesta,
					sum(case when c.r3_l1 = 'No' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l1 = 'No' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l1 = 'No'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Mas o menos' as respuesta,
					sum(case when c.r3_l1 = 'Mas o menos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l1 = 'Mas o menos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l1 = 'Mas o menos'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r3_l1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r3_l1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r3_l1,'') = ''                                 then 1 else 0 end) as estudiantes
                    from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r3_l1) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR3L3TP($tipoEstudiante){
			$sql = "SELECT 
					'Si' as respuesta,
					sum(case when c.r3_l3 = 'Si' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l3 = 'Si' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l3 = 'Si'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'No' as respuesta,
					sum(case when c.r3_l3 = 'No' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l3 = 'No' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l3 = 'No'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Mas o menos' as respuesta,
					sum(case when c.r3_l3 = 'Mas o menos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r3_l3 = 'Mas o menos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r3_l3 = 'Mas o menos'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r3_l3,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r3_l3,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r3_l3,'') = ''                                 then 1 else 0 end) as estudiantes
                    from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
						   sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
						   sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
						   count(r3_l3) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR4TP($tipoEstudiante){
			$sql = "SELECT 
					'Foro' as respuesta,
					sum(case when c.r4 = 'Foro' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Foro' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Foro'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Twitter' as respuesta,
					sum(case when c.r4 = 'Twitter' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Twitter' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Twitter'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Correo' as respuesta,
					sum(case when c.r4 = 'Correo' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Correo' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Correo'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Llamadas telefonicas' as respuesta,
					sum(case when c.r4 = 'Llamadas telefonicas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Llamadas telefonicas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Llamadas telefonicas'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Cita presencial' as respuesta,
					sum(case when c.r4 = 'Cita presencial' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r4 = 'Cita presencial' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r4 = 'Cita presencial'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r4,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r4,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r4,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r4) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR5L1TP($tipoEstudiante){
			$sql = "SELECT 
					'Totalmente Satisfecho' as respuesta,
					sum(case when c.r5_l1 = 'Totalmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l1 = 'Totalmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l1 = 'Totalmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Parcialmente Satisfecho' as respuesta,
					sum(case when c.r5_l1 = 'Parcialmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l1 = 'Parcialmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l1 = 'Parcialmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Nada Satisfecho' as respuesta,
					sum(case when c.r5_l1 = 'Nada Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l1 = 'Nada Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l1 = 'Nada Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r5_l1,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r5_l1,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r5_l1,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r5_l1) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR5L2TP($tipoEstudiante){
			$sql = "SELECT 
					'Totalmente Satisfecho' as respuesta,
					sum(case when c.r5_l2 = 'Totalmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l2 = 'Totalmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l2 = 'Totalmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Parcialmente Satisfecho' as respuesta,
					sum(case when c.r5_l2 = 'Parcialmente Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l2 = 'Parcialmente Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l2 = 'Parcialmente Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'Nada Satisfecho' as respuesta,
					sum(case when c.r5_l2 = 'Nada Satisfecho' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r5_l2 = 'Nada Satisfecho' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r5_l2 = 'Nada Satisfecho'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r5_l2,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r5_l2,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r5_l2,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r5_l2) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleSatisfaccionR6TP($tipoEstudiante){
			$sql = "SELECT 
					'5 a 10 minutos' as respuesta,
					sum(case when c.r6 = '5 a 10 minutos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '5 a 10 minutos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '5 a 10 minutos'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT '15 a 30 minutos' as respuesta,
					sum(case when c.r6 = '15 a 30 minutos' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '15 a 30 minutos' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '15 a 30 minutos'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT '1 a 2 horas' as respuesta,
					sum(case when c.r6 = '1 a 2 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '1 a 2 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '1 a 2 horas'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT '3 a 5 horas' as respuesta,
					sum(case when c.r6 = '3 a 5 horas' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '3 a 5 horas' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '3 a 5 horas'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT '1 a 2 dias' as respuesta,
					sum(case when c.r6 = '1 a 2 dias' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when c.r6 = '1 a 2 dias' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when c.r6 = '1 a 2 dias'                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					SELECT 'NN' as respuesta,
					sum(case when ifnull(c.r6,'') = '' and c.tipoestudiante='ESPOL'    then 1 else 0 end) as espol,
					sum(case when ifnull(c.r6,'') = '' and c.tipoestudiante='ADMISION' then 1 else 0 end) as admision,
					sum(case when ifnull(c.r6,'') = ''                                 then 1 else 0 end) as estudiantes
					from reporteetp_ec_satisfaccion c
					union
					select 'TOTAL' as respuesta,
					sum(case when tipoEstudiante='ESPOL' then 1 else 0 end) as espol,
					sum(case when tipoEstudiante='ADMISION' then 1 else 0 end) as admision,
					count(r6) as estudiantes 
					from reporteetp_ec_satisfaccion;";
			
			return ejecutarConsulta($sql);	
		}

	}
?>