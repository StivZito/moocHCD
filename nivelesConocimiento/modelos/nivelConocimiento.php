<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class nivelConocimiento
	{
		public function __construct(){

		}


		////////////////////////////////////////////////////////////////////////////////////ESTUDIANTES PRACTICO 
		public function informe_niveles_conocimiento_ep($tipoEstudiante){
			$sql = "SELECT 
					c.nombres,c.apellidos,c.email,c.matricula,c.identificacion as cedula,c.sexo,c.carrera,
					d.nivelConocimientoM3 as diagnosticoM3,
					d.nivelConocimientoM4 as diagnosticoM4,
					d.nivelConocimientoM5 as diagnosticoM5,
					e.NivelConocimientoM3 as moocM3,
					e.NivelConocimientoM4 as moocM4,
					e.NivelConocimientoM5 as moocM5,
					ifnull(h.NivelConocimiento,'NO APLICA') as nivelConocimientoPPT,
					ifnull(i.NivelConocimiento,'NO APLICA') as nivelConocimientoExcel,
					ifnull(g.NivelConocimiento,'NO APLICA') as nivelConocimientoWord,
					c.termino

					from academicopractico c

					left  join reporteep_ec_diagnostico d
					on  d.matricula = c.matricula
					and d.termino   = c.termino
					and d.tipoEstudiante = c.tipoEstudiante

					left  join reporteep_cursomooc e
					on  e.matricula = c.matricula
					and e.termino   = c.termino
					and e.tipoEstudiante = c.tipoEstudiante

					left  join reporteep_examenword g
					on  g.matricula = c.matricula
					and g.termino   = c.termino
					and g.tipoEstudiante = c.tipoEstudiante

					left  join reporteep_examenppt h
					on  h.matricula = c.matricula
					and h.termino   = c.termino
					and h.tipoEstudiante = c.tipoEstudiante

					left  join reporteep_examenexcel i 
					on  i.matricula = c.matricula
					and i.termino   = c.termino
					and i.tipoEstudiante = c.tipoEstudiante

					where  c.tipoEstudiante='".$tipoEstudiante."'";

				return ejecutarConsulta($sql);	
		}

		public function niveles_conocimiento_general_practico(){
			$sql = "SELECT
					'DIAGNOSTICO' as codModulo, 
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					union
					select 
					'DIAGNOSTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 

					union
					select 
					'MOOC' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union
					select 
					'MOOC' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 

					union 
					select 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenppt d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
                    
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenexcel d 
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenword d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM3_practico(){
			$sql = "SELECT
					'DIAGNOSTICO' as codModulo, 
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 				
					union
					select 
					'MOOC' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union
					select 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenppt d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM4_practico(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					union 
					select 
					'MOOC' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenexcel d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM5_practico(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					union
					select 
					'MOOC' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union 					
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenword d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoGraph_practico(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'0' as modulo, 
					SUM(case when d.nivelConocimientoM3='INICIAL'  or  
								  d.nivelConocimientoM4='INICIAL'  or 
					              d.nivelConocimientoM5='INICIAL'  then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'  or
								  d.nivelConocimientoM4='REGULAR'  or
					              d.nivelConocimientoM5='REGULAR'  then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' or
								  d.nivelConocimientoM4='EN DESARROLLO' or 
					              d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO' or 
								  d.nivelConocimientoM4='DESARROLLADO' or 
					              d.nivelConocimientoM5='DESARROLLADO' then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE' or 
								  d.nivelConocimientoM4='EXCELENTE' or 
					              d.nivelConocimientoM5='EXCELENTE' then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					 
					union
					select 
					'MOOC' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL' or 
								  d.nivelConocimientoM4='INICIAL' or 
					              d.nivelConocimientoM5='INICIAL' then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR' or 
								  d.nivelConocimientoM4='REGULAR' or 
					              d.nivelConocimientoM5='REGULAR' then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' or 
								  d.nivelConocimientoM4='EN DESARROLLO' or 
					              d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO' or 
								  d.nivelConocimientoM4='DESARROLLADO' or 
					              d.nivelConocimientoM5='DESARROLLADO' then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE' or
								  d.nivelConocimientoM4='EXCELENTE' or 
					              d.nivelConocimientoM5='EXCELENTE' then 1 else 0 end) as excelente
					from reporteep_cursomooc d
					union 
					select 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenppt d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenexcel d 
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenword d";					

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoDiagnostico_practico(){
			$sql = "SELECT
					'DIAGNOSTICO' as codModulo, 
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					union
					select 
					'DIAGNOSTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_ec_diagnostico d ";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoMooc_practico(){
			$sql = "SELECT 
					'MOOC' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union
					select 
					'MOOC' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_cursomooc d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoExamenTeoricoPractico_practico(){
			$sql = "SELECT 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenppt d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenexcel d 
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteep_examenword d";

			return ejecutarConsulta($sql);	
		}


		////////////////////////////////////////////////////////////////////////////////////ESTUDIANTES TEORICO PRACTICO 
		public function informe_niveles_conocimiento_etp($tipoEstudiante){
			$sql = "SELECT c.nombres,c.apellidos,c.email,c.matricula,c.identificacion as cedula,c.sexo,c.carrera,
			       ifnull(d.nivelConocimientoM1,'SIN NIVEL') as diagnosticoM1,
				   ifnull(d.nivelConocimientoM2,'SIN NIVEL') as diagnosticoM2,
				   ifnull(d.nivelConocimientoM3,'SIN NIVEL') as diagnosticoM3,
				   ifnull(d.nivelConocimientoM4,'SIN NIVEL') as diagnosticoM4,
				   ifnull(d.nivelConocimientoM5,'SIN NIVEL') as diagnosticoM5,
				   ifnull(d.nivelConocimientoM6,'SIN NIVEL') as diagnosticoM6,
				   ifnull(e.NivelConocimientoM1,'SIN NIVEL') as moocM1,
				   ifnull(e.NivelConocimientoM2,'SIN NIVEL') as moocM2,
				   ifnull(e.NivelConocimientoM3,'SIN NIVEL') as moocM3,
				   ifnull(e.NivelConocimientoM4,'SIN NIVEL') as moocM4,
				   ifnull(e.NivelConocimientoM5,'SIN NIVEL') as moocM5,
				   ifnull(e.NivelConocimientoM6,'SIN NIVEL')  as moocM6,
				   ifnull(f.nivelConocimientoComputador,'SIN NIVEL') as extM1,
				   ifnull(f.nivelConocimientoInter,'SIN NIVEL') as extM2,
				   ifnull(f.nivelConocimientoPPT,'SIN NIVEL') as extM3,
				   ifnull(f.nivelConocimientoExcel,'SIN NIVEL') as extM4,
				   ifnull(f.nivelConocimientoWord,'SIN NIVEL') as extM5,
				   ifnull(f.nivelConocimientoColabora,'SIN NIVEL') as extM6,
			       ifnull(h.NivelConocimiento,'SIN NIVEL') as nivelConocimientoPPT,   
				   ifnull(i.NivelConocimiento,'SIN NIVEL') as nivelConocimientoExcel,
			       ifnull(g.NivelConocimiento,'SIN NIVEL') as nivelConocimientoWord,
				   c.termino

					from academicoteoricopractico c

					left  join reporteetp_ec_diagnostico d
					on  d.matricula = c.matricula
					and d.termino   = c.termino
					and d.tipoEstudiante = c.tipoEstudiante

					left  join reporteetp_cursomooc e
					on  e.matricula = c.matricula
					and e.termino   = c.termino
					and e.tipoEstudiante = c.tipoEstudiante

					left  join reporteetp_examenteorico f
					on  f.matricula = c.matricula
					and f.termino   = c.termino
					and f.tipoEstudiante = c.tipoEstudiante

					left  join reporteetp_examenword g
					on  g.matricula = c.matricula
					and g.termino   = c.termino
					and g.tipoEstudiante = c.tipoEstudiante

					left  join reporteetp_examenppt h
					on  h.matricula = c.matricula
					and h.termino   = c.termino
					and h.tipoEstudiante = c.tipoEstudiante

					left  join reporteetp_examenexcel i 
					on  i.matricula = c.matricula
					and i.termino   = c.termino
					and i.tipoEstudiante = c.tipoEstudiante

					where (length(d.nivelConocimientoM1)+ length(d.nivelConocimientoM2) + 	length(d.nivelConocimientoM3) +	length(d.nivelConocimientoM4) +	length(d.nivelConocimientoM5) +
						   length(d.nivelConocimientoM6)+ length(e.NivelConocimientoM1) +	length(e.NivelConocimientoM2) +	length(e.NivelConocimientoM3) +	length(e.NivelConocimientoM4) +
						   length(e.NivelConocimientoM5)+ length(e.NivelConocimientoM6)  +	length(f.nivelConocimientoComputador) +	length(f.nivelConocimientoInter) +
						   length(f.nivelConocimientoPPT)+	length(f.nivelConocimientoExcel)+	length(f.nivelConocimientoWord) +	length(f.nivelConocimientoColabora) +
						   length(h.NivelConocimiento)+	length(i.NivelConocimiento)+	length(g.NivelConocimiento) ) > 0  
					and  c.tipoEstudiante='".$tipoEstudiante."'";

				return ejecutarConsulta($sql);	
		}


		public function niveles_conocimiento_general(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					1 as modulo, 
					SUM(case when d.nivelConocimientoM1='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM1='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoM2='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM2='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM2='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM2='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM2='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select
					'DIAGNOSTICO' as codModulo, 
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'DIAGNOSTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoM6='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM6='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM6='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM6='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'MOOC' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoM1='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM1='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoM2='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM2='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM2='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM2='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM2='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union
					select 
					'MOOC' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoM6='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM6='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM6='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM6='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoComputador='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoComputador='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoComputador='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoComputador='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoComputador='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoInter='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoInter='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoInter='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoInter='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoInter='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoPPT='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoPPT='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoPPT='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoPPT='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoPPT='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union
					select 
					'EXTEORICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoExcel='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoExcel='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoExcel='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoExcel='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoExcel='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoWord='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoWord='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoWord='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoWord='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoWord='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoColabora='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoColabora='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoColabora='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoColabora='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoColabora='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenppt d 
					
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenexcel d 
					
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenword d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM1(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'1' as modulo, 
					SUM(case when d.nivelConocimientoM1='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM1='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'MOOC' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoM1='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM1='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoComputador='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoComputador='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoComputador='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoComputador='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoComputador='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d";					

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM2(){
			$sql = "SELECT 					
					'DIAGNOSTICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoM2='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM2='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM2='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM2='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM2='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'MOOC' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoM2='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM2='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM2='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM2='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM2='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 					
					select 
					'EXTEORICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoInter='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoInter='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoInter='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoInter='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoInter='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM3(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo, 
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'MOOC' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union
					select 
					'EXTEORICO' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoPPT='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoPPT='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoPPT='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoPPT='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoPPT='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union
					select 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenppt d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM4(){
			$sql = "SELECT 
				    'DIAGNOSTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'MOOC' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoExcel='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoExcel='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoExcel='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoExcel='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoExcel='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenexcel d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM5(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'MOOC' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoWord='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoWord='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoWord='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoWord='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoWord='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenword d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoM6(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoM6='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM6='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM6='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM6='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'MOOC' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoM6='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM6='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM6='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM6='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoColabora='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoColabora='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoColabora='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoColabora='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoColabora='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoGraph(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					'0' as modulo, 
					SUM(case when d.nivelConocimientoM1='INICIAL' or d.nivelConocimientoM4='INICIAL'  or  
								  d.nivelConocimientoM2='INICIAL' or d.nivelConocimientoM5='INICIAL'  or 
					              d.nivelConocimientoM3='INICIAL' or d.nivelConocimientoM6='INICIAL'  then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR' or d.nivelConocimientoM4='REGULAR'  or
								  d.nivelConocimientoM2='REGULAR' or d.nivelConocimientoM5='REGULAR'  or
					              d.nivelConocimientoM3='REGULAR' or d.nivelConocimientoM6='REGULAR'  then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' or d.nivelConocimientoM4='EN DESARROLLO'  or
								  d.nivelConocimientoM2='EN DESARROLLO' or d.nivelConocimientoM5='EN DESARROLLO'  or
					              d.nivelConocimientoM3='EN DESARROLLO' or d.nivelConocimientoM6='EN DESARROLLO'  then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO' or d.nivelConocimientoM4='DESARROLLADO'  or
								  d.nivelConocimientoM2='DESARROLLADO' or d.nivelConocimientoM5='DESARROLLADO'  or
					              d.nivelConocimientoM3='DESARROLLADO' or d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM1='EXCELENTE' or d.nivelConocimientoM4='EXCELENTE'  or
								  d.nivelConocimientoM2='EXCELENTE' or d.nivelConocimientoM5='EXCELENTE'  or
					              d.nivelConocimientoM3='EXCELENTE' or d.nivelConocimientoM6='EXCELENTE'  then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					 
					union
					select 
					'MOOC' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoM1='INICIAL' or d.nivelConocimientoM4='INICIAL'  or  
								  d.nivelConocimientoM2='INICIAL' or d.nivelConocimientoM5='INICIAL'  or 
					              d.nivelConocimientoM3='INICIAL' or d.nivelConocimientoM6='INICIAL'  then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR' or d.nivelConocimientoM4='REGULAR'  or
								  d.nivelConocimientoM2='REGULAR' or d.nivelConocimientoM5='REGULAR'  or
					              d.nivelConocimientoM3='REGULAR' or d.nivelConocimientoM6='REGULAR'  then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' or d.nivelConocimientoM4='EN DESARROLLO'  or
								  d.nivelConocimientoM2='EN DESARROLLO' or d.nivelConocimientoM5='EN DESARROLLO'  or
					              d.nivelConocimientoM3='EN DESARROLLO' or d.nivelConocimientoM6='EN DESARROLLO'  then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO' or d.nivelConocimientoM4='DESARROLLADO'  or
								  d.nivelConocimientoM2='DESARROLLADO' or d.nivelConocimientoM5='DESARROLLADO'  or
					              d.nivelConocimientoM3='DESARROLLADO' or d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM1='EXCELENTE' or d.nivelConocimientoM4='EXCELENTE'  or
								  d.nivelConocimientoM2='EXCELENTE' or d.nivelConocimientoM5='EXCELENTE'  or
					              d.nivelConocimientoM3='EXCELENTE' or d.nivelConocimientoM6='EXCELENTE'  then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 

					union 
					select 
					'EXTEORICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoComputador='INICIAL' or d.nivelConocimientoInter         ='INICIAL'  or  
								  d.nivelConocimientoPPT       ='INICIAL' or d.nivelConocimientoExcel         ='INICIAL'  or 
					              d.nivelConocimientoWord      ='INICIAL' or d.nivelConocimientoColabora      ='INICIAL'  then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoComputador='REGULAR' or d.nivelConocimientoInter         ='REGULAR'  or
								  d.nivelConocimientoPPT       ='REGULAR' or d.nivelConocimientoExcel         ='REGULAR'  or
					              d.nivelConocimientoWord      ='REGULAR' or d.nivelConocimientoColabora      ='REGULAR'  then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoComputador='EN DESARROLLO' or d.nivelConocimientoInter   ='EN DESARROLLO'  or
								  d.nivelConocimientoPPT       ='EN DESARROLLO' or d.nivelConocimientoExcel   ='EN DESARROLLO'  or
					              d.nivelConocimientoWord      ='EN DESARROLLO' or d.nivelConocimientoColabora='EN DESARROLLO'  then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoComputador='DESARROLLADO' or d.nivelConocimientoInter    ='DESARROLLADO'  or
								  d.nivelConocimientoPPT       ='DESARROLLADO' or d.nivelConocimientoExcel    ='DESARROLLADO'  or
					              d.nivelConocimientoWord      ='DESARROLLADO' or d.nivelConocimientoColabora ='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoComputador='EXCELENTE' or d.nivelConocimientoInter       ='EXCELENTE'  or
								  d.nivelConocimientoPPT       ='EXCELENTE' or d.nivelConocimientoExcel       ='EXCELENTE'  or
					              d.nivelConocimientoWord      ='EXCELENTE' or d.nivelConocimientoColabora    ='EXCELENTE'  then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenppt d 
					
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenexcel d 
					
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenword d";					

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoDiagnostico(){
			$sql = "SELECT 
					'DIAGNOSTICO' as codModulo,
					1 as modulo, 
					SUM(case when d.nivelConocimientoM1='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM1='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoM2='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM2='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM2='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM2='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM2='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select
					'DIAGNOSTICO' as codModulo, 
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union
					select 
					'DIAGNOSTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d 
					union 
					select 
					'DIAGNOSTICO' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoM6='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM6='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM6='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoM6='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_ec_diagnostico d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoMooc(){
			$sql = "SELECT 
					'MOOC' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoM1='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM1='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM1='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM1='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM1='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoM2='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM2='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM2='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM2='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM2='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoM3='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM3='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM3='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM3='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM3='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union
					select 
					'MOOC' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoM4='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM4='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM4='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM4='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM4='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoM5='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM5='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM5='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM5='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM5='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d 
					union 
					select 
					'MOOC' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoM6='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoM6='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoM6='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoM6='DESARROLLADO'  then 1 else 0 end) as desarrollado, 
					SUM(case when d.nivelConocimientoM6='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_cursomooc d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoExamenTeorico(){
			$sql = "SELECT 
				    'EXTEORICO' as codModulo,
					'1' as modulo,
					SUM(case when d.nivelConocimientoComputador='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoComputador='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoComputador='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoComputador='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoComputador='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'2' as modulo,
					SUM(case when d.nivelConocimientoInter='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoInter='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoInter='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoInter='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoInter='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'3' as modulo,
					SUM(case when d.nivelConocimientoPPT='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoPPT='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoPPT='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoPPT='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoPPT='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union
					select 
					'EXTEORICO' as codModulo,
					'4' as modulo,
					SUM(case when d.nivelConocimientoExcel='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoExcel='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoExcel='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoExcel='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoExcel='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'5' as modulo,
					SUM(case when d.nivelConocimientoWord='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoWord='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoWord='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoWord='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoWord='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d 
					union 
					select 
					'EXTEORICO' as codModulo,
					'6' as modulo,
					SUM(case when d.nivelConocimientoColabora='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.nivelConocimientoColabora='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.nivelConocimientoColabora='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.nivelConocimientoColabora='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.nivelConocimientoColabora='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenteorico d";

			return ejecutarConsulta($sql);	
		}

		public function nivelesConocimientoExamenTeoricoPractico(){
			$sql = "SELECT 
					'EXPRACTICO' as codModulo,
					'3' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenppt d 
					
					union 
					select 
					'EXPRACTICO' as codModulo,
					'4' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenexcel d 
					
					union
					select 
					'EXPRACTICO' as codModulo,
					'5' as modulo,
					SUM(case when d.NivelConocimiento='INICIAL'       then 1 else 0 end) as inicial,
					SUM(case when d.NivelConocimiento='REGULAR'       then 1 else 0 end) as regular,
					SUM(case when d.NivelConocimiento='EN DESARROLLO' then 1 else 0 end) as enDesarrollo,
					SUM(case when d.NivelConocimiento='DESARROLLADO'  then 1 else 0 end) as desarrollado,
					SUM(case when d.NivelConocimiento='EXCELENTE'     then 1 else 0 end) as excelente
					from reporteetp_examenword d 
					";

			return ejecutarConsulta($sql);	
		}
	}
?>