<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class Academico
	{
		public function __construct(){

		}

		

		public function num_est_registrados(){
			$sql = "SELECT COUNT(*) as num_est_registrados FROM academicodata";
			return ejecutarConsultaSimpleFila($sql);
		}

		public function num_est_espol(){
			$sql = "SELECT COUNT(*) as num_est_espol FROM academicodata WHERE tipoEstudiante = 'ESPOL'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_admisiones(){
			$sql = "SELECT COUNT(*) as num_est_admisiones FROM academicodata WHERE tipoEstudiante = 'ADMISION'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_varones(){
			$sql = "SELECT COUNT(*) as num_est_varones from academicodata where sexo = 'MASCULINO'";
			return ejecutarConsultaSimpleFila($sql);	
		}
		
		public function num_est_mujeres(){
			$sql = "SELECT COUNT(*) as num_est_mujeres from academicodata where sexo = 'FEMENINO'";
			return ejecutarConsultaSimpleFila($sql);	
		}


		public function num_est_aprobados(){
			$sql = "SELECT count(*) as num_est_aprobados from (
			select c.termino,c.tipoEstudiante,c.apellidos,c.sexo,c.tipo,c.nombres,c.numVeces,
				case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end  as NotaWord,
	   			case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoWord, 
	   			case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end  as notaExcel,
	   			case when (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoExcel,
	   			case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end  as notaPpt,
	   			case when (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoPpt,
	   			case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  and 
			    (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  and
			    (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoGeneral,
	   			upper(c.carrera) as  carrera 
				from   notasmooc.academicodata c 

				left join notasmooc.sidwebData d 
				on   d.idalumno  = c.matricula
				and  d.termino   = c.termino

			) est WHERE est.EstadoGeneral = 'APROBADO'";

			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_reprobadoS(){
			$sql = "SELECT count(*) as num_est_reprobados from (
			select c.termino,c.tipoEstudiante,c.apellidos,c.sexo,c.tipo,c.nombres,c.numVeces,
				case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end  as NotaWord,
	   			case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoWord, 
	   			case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end  as notaExcel,
	   			case when (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoExcel,
	   			case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end  as notaPpt,
	   			case when (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoPpt,
	   			case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  and 
			    (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  and
			    (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoGeneral,
	   			upper(c.carrera) as  carrera 
				from   notasmooc.academicodata c 

				left join notasmooc.sidwebData d 
				on   d.idalumno  = c.matricula
				and  d.termino   = c.termino

			) est WHERE est.EstadoGeneral = 'REPROBADO'";

			return ejecutarConsultaSimpleFila($sql);	
		}


		
		public function estudiantes_termino(){
			$sql = "SELECT est_admision.termino, est_espol.est_es, est_admision.est_ad FROM (
				SELECT count(*) as est_es, termino
				FROM academicodata
				WHERE tipoEstudiante = 'ESPOL'
				GROUP BY termino) est_espol

			INNER JOIN

			(SELECT COUNT(*) AS est_ad, termino
				FROM academicodata
				WHERE tipoEstudiante = 'ADMISION'
				GROUP BY termino) est_admision
			ON est_espol.termino = est_admision.termino";
			return ejecutarConsulta($sql);	
		}

	

		public function estudiantes_estado(){
			$sql = "SELECT academico.termino, 
				COUNT(CASE WHEN academico.estado = 'APROBADO' THEN 1 END) AS aprobados,
				COUNT(CASE WHEN academico.estado = 'REPROBADO' THEN 1 END) AS reprobados
				 from(select d.tipoEstudiante,d.apellidos,d.nombres,d.sexo,c.termino,
				       round((c.grado * 100),0) - round((c.examen * 100),0) as grade,
				       round(((round((c.avm1 * 100),0)) / 5) * 100,0)  as avm1,
					   round(((round((c.avm2 * 100),0)) / 5) * 100,0)  as avm2,
					   round(((round((c.avm3 * 100),0)) / 30) * 100,0)  as avm3,
					   round(((round((c.avm4 * 100),0)) / 25) * 100,0)  as avm4,
					   round(((round((c.avm5 * 100),0)) / 30) * 100,0)  as avm5,
					   round(((round((c.avm6 * 100),0)) /  5) * 100,0)  as avm6,
					   case when round((c.grado * 100),0) - round((c.examen * 100),0) >= 60 then 'APROBADO' else 'REPROBADO' end as estado,
					   upper(d.carrera) as carrera

				from notasmooc.edxData c 

				inner join notasmooc.estudiantesMooc d 
				on  d.email = c.email
				and d.termino = c.termino
				where  c.tipo = 'TP') academico
				GROUP BY academico.termino";
				return ejecutarConsulta($sql);	
		}

		public function estudiantes_utilitarios_termino(){
			$sql = "SELECT academico.termino, 
				COUNT(CASE WHEN academico.EstadoWord = 'APROBADO' THEN 1 END) AS word_ap,
				COUNT(CASE WHEN academico.EstadoWord = 'REPROBADO' THEN 1 END) AS word_rp,
				COUNT(CASE WHEN academico.EstadoExcel = 'APROBADO' THEN 1 END) AS excel_ap,
				COUNT(CASE WHEN academico.EstadoExcel = 'REPROBADO' THEN 1 END) AS excel_rp,
				COUNT(CASE WHEN academico.EstadoPpt = 'APROBADO' THEN 1 END) AS powerp_ap,
				COUNT(CASE WHEN academico.EstadoPpt = 'REPROBADO' THEN 1 END) AS powerp_rp

				FROM (select c.termino,c.tipoEstudiante,c.apellidos,c.sexo,c.tipo,c.nombres,c.numVeces,
						       case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end  as NotaWord,
							   case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoWord, 
							   case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end  as notaExcel,
							   case when (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoExcel,
							   case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end  as notaPpt,
							   case when (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoPpt,
							   case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  and 
									     (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  and
									     (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoGeneral,
							   	upper(c.carrera) as  carrera 
								from   notasmooc.estudiantesMooc c 

								left join notasmooc.sidwebData d 
								on   d.idalumno  = c.matricula
								and  d.termino   = c.termino) academico
				GROUP BY academico.termino";
				return ejecutarConsulta($sql);	
		}

		public function estudiantes_espol_admisiones(){
			$sql = "SELECT academico.termino, 
				COUNT(CASE WHEN academico.tipoEstudiante = 'ESPOL' AND academico.Estudiantes = 'APROBADO' THEN 1 END) AS espol_ap,
				COUNT(CASE WHEN academico.tipoEstudiante = 'ESPOL' AND academico.Estudiantes = 'REPROBADO' THEN 1 END) AS espol_rp,
				COUNT(CASE WHEN academico.tipoEstudiante = 'ADMISION' AND academico.Estudiantes = 'APROBADO' THEN 1 END) AS admision_ap,
				COUNT(CASE WHEN academico.tipoEstudiante = 'ADMISION' AND academico.Estudiantes = 'REPROBADO' THEN 1 END) AS admision_rp
				
				FROM
				(select c.apellidos,c.nombres,c.numVeces,
					   round(case when (d.examen * 100) > ifnull(c.notaTeorico,0) then (d.examen * 100) else  ifnull(c.notaTeorico,0) end,0) as Teorico,
					   case when (round(case when (d.examen * 100) > ifnull(c.notaTeorico,0) then (d.examen * 100) else  ifnull(c.notaTeorico,0) end,0))  >= 60 then 'APROBADO' else 'REPROBADO' end as Estudiantes,
					   c.termino,c.tipoEstudiante,c.sexo,c.tipo,upper(c.carrera) as carrera

				from notasmooc.estudiantesMooc c 

				left join notasmooc.edxData d 
				on   d.email    = c.email
				and  d.termino  = c.termino
				and  d.tipo     = 'TP'
				and  d.cohorte like '%Examen%') academico
				GROUP BY academico.termino";
				return ejecutarConsulta($sql);
		}

		public function estudiantes_utilitarios_tipo(){
			$sql = "SELECT 
				COUNT(CASE WHEN academico.EstadoWord = 'APROBADO' THEN 1 END) AS word_ap,
				COUNT(CASE WHEN academico.EstadoWord = 'REPROBADO' THEN 1 END) AS word_rp,
				COUNT(CASE WHEN academico.EstadoExcel = 'APROBADO' THEN 1 END) AS excel_ap,
				COUNT(CASE WHEN academico.EstadoExcel = 'REPROBADO' THEN 1 END) AS excel_rp,
				COUNT(CASE WHEN academico.EstadoPpt = 'APROBADO' THEN 1 END) AS powerp_ap,
				COUNT(CASE WHEN academico.EstadoPpt = 'REPROBADO' THEN 1 END) AS powerp_rp,
				COUNT(CASE WHEN academico.tipoEstudiante = 'ESPOL' THEN 1 END) AS est_espol,
				COUNT(CASE WHEN academico.tipoEstudiante = 'ADMISION' THEN 1 END) AS est_admision
				
				FROM 

			(select c.termino,c.tipoEstudiante,c.apellidos,c.sexo,c.tipo,c.nombres,c.numVeces,
		       case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end  as NotaWord,
			   case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoWord, 
			   case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end  as notaExcel,
			   case when (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoExcel,
			   case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end  as notaPpt,
			   case when (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoPpt,
			   case when (case when c.notaWord  >= ifnull(d.notaWord,0)  then c.notaWord  else ifnull(d.notaWord,0)  end) >= 60  and 
					     (case when c.notaExcel >= ifnull(d.notaExcel,0) then c.notaExcel else ifnull(d.notaExcel,0) end) >= 60  and
					     (case when c.notaPpt   >= ifnull(d.notaPpt,0)   then c.notaPpt   else ifnull(d.notaPpt,0)   end) >= 60  then 'APROBADO' else 'REPROBADO' end as EstadoGeneral,
			   upper(c.carrera) as  carrera 
			from   notasmooc.estudiantesMooc c 

			left join notasmooc.sidwebData d 
			on   d.idalumno  = c.matricula
			and  d.termino   = c.termino) academico";
		return ejecutarConsulta($sql);
		}

		public function aprobados_reprobados_carrera(){
			$sql = "SELECT upper(c.carrera) as carrera,count(c.identificacion) as estudiantes,
       sum(case when ifnull(d.examen,0) >= 0.6 and e.notaExcel >= 60 
                                               and e.notaWord  >= 60 
										       and e.notaPpt   >= 60 then 1 else 0 end) as aprobados,
       sum(case when ifnull(d.examen,0) >= 0.6 and e.notaExcel >= 60 
                                               and e.notaWord  >= 60 
										       and e.notaPpt   >= 60 then 0 else 1 end) as reprobados

		from notasmooc.estudiantesMooc c 

		inner join notasmooc.edxData d 
		on  d.email            = c.email
		and d.termino          = c.termino 

		inner join notasmooc.sidwebData e 
		on  e.idalumno        = c.matricula
		and e.termino         = c.termino

		group by upper(c.carrera)";	
		return ejecutarConsulta($sql);
		}

		public function top_diez_carreras(){
			$sql = "SELECT upper(c.carrera) as carrera,count(c.identificacion) as estudiantes

		from notasmooc.estudiantesMooc c 

		inner join notasmooc.edxData d 
		on  d.email            = c.email
		and d.termino          = c.termino 
		and ifnull(d.examen,0) >= 0.6

		inner join notasmooc.sidwebData e 
		on  e.idalumno        = c.matricula
		and e.termino         = c.termino

		where c.numVeces   = 0
		and   ifnull(e.notaExcel,0) >= 60 
		and   ifnull(e.notaWord,0)  >= 60 
		and   ifnull(e.notaPpt,0)   >= 60 
		group by upper(c.carrera)
		
		limit 10";
			return ejecutarConsulta($sql);
		}

		public function top_diez_carreras_masveces(){
			$sql = "SELECT upper(c.carrera) as carrera,count(c.identificacion) as estudiantes

			from notasmooc.estudiantesMooc c

			inner join notasmooc.edxData d
			on  d.email            = c.email
			and d.termino          = c.termino 
			and ifnull(d.examen,0) >= 0.6

			inner join notasmooc.sidwebData e
			on  e.idalumno        = c.matricula
			and e.termino         = c.termino

			where c.numVeces  >= 3
			and   e.notaExcel >= 60 
			and   e.notaWord  >= 60 
			and   e.notaPpt   >= 60 
			group by upper(c.carrera)
			limit 10";
			return ejecutarConsulta($sql);
		}

		public function aprobados_num_veces(){
			$sql = "SELECT c.numVeces as numVeces, count(c.identificacion) as estudiantes, c.carrera as carrera
      
			from notasmooc.estudiantesMooc c 

			inner join notasmooc.edxData d 
			on  d.email            = c.email
			and d.termino          = c.termino 
			and ifnull(d.examen,0) >= 0.6

			inner join notasmooc.sidwebData e 
			on  e.idalumno        = c.matricula
			and e.termino         = c.termino

			where e.notaExcel >= 60 
			and   e.notaWord  >= 60 
			and   e.notaPpt   >= 60 

			group by (c.numVeces)";
			return ejecutarConsulta($sql);
		}

		public function ausentes_exam_practico(){
			$sql = "SELECT notas.termino, count(*) as num_est FROM  
			(select c.apellidos,c.nombres,c.sexo,c.tipo,c.tipoEstudiante,c.termino,
			       round((ifnull(d.examen,0)) * 100,0) as Teorico,
			       ifnull(e.notaExcel,0) as Excel,
				   ifnull(e.notaPpt,0) as Ppt,
				   ifnull(e.notaWord,0) as Word,upper(c.carrera) as carrera

			from notasmooc.estudiantesMooc c 

			inner join notasmooc.edxData d
			on  d.termino = c.termino
			and d.email   = c.email
			and (ifnull(d.examen,0) * 100) >= 60

			left join notasmooc.sidwebData e 
			on  e.termino = c.termino
			and e.idalumno = c.matricula

			where (ifnull(e.notaExcel,0) +  ifnull(e.notaPpt,0) + ifnull(e.notaWord,0)) = 0 

			) notas
			GROUP BY notas.termino";
			return ejecutarConsulta($sql); 
		}
	}
?>