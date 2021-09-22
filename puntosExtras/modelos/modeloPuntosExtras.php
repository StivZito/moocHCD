<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloPuntosExtras
	{
		public function __construct(){

		}	

		public function num_est_registrados_tp_puntosExtras($flag){

			if ($flag == 'T')    $sql = "SELECT count(identificacion) as estudiantes                                                    from puntos_extras_teorico_practico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 puntosExtras = 5 then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and puntosExtras = 5 then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and puntosExtras = 5 then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 puntosExtras <> 5 then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and puntosExtras <> 5 then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and puntosExtras <> 5 then 1 else 0 end) as estudiantes from puntos_extras_teorico_practico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleIncrementoPuntosExtrasTP($flag){

			$sql = "SELECT 'EXCEL' as modulo,
						   sum(case when puntosExtras = 5 and calificacionExcel <= Excel                                then 1 else 0 end) as recibieronIncremento,
						   sum(case when puntosExtras = 5 and calificacionExcel <= Excel and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as recibieronIncrementoEspol,
						   sum(case when puntosExtras = 5 and calificacionExcel <= Excel and tipoEstudiante= 'ADMISION' then 1 else 0 end) as recibieronIncrementoAdmisiones,
					       
						   sum(case when puntosExtras <> 5                                then 1 else 0 end) as noRecibieronIncremento,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as noRecibieronIncrementoEspol,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ADMISION' then 1 else 0 end) as noRecibieronIncrementoAdmisiones,
					       
						   sum(case when calificacionExcel < 60 and excel >= 60 and puntosExtras = 5                                then 1 else 0 end) pasaronConIncremento,
						   sum(case when calificacionExcel < 60 and excel >= 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) pasaronConIncrementoEspol,
						   sum(case when calificacionExcel < 60 and excel >= 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) pasaronConIncrementoAdmision,
					       
						   sum(case when calificacionExcel < 60 and excel < 60 and puntosExtras = 5                                then 1 else 0 end) noPasaronConIncremento,
						   sum(case when calificacionExcel < 60 and excel < 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) noPasaronConIncrementoEspol,
						   sum(case when calificacionExcel < 60 and excel < 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) noPasaronConIncrementoAdmision        
					from puntos_extras_teorico_practico
					union
					SELECT 'WORD' as modulo,
						   sum(case when puntosExtras = 5 and calificacionWord <= Word                                then 1 else 0 end) as recibieronIncremento,
						   sum(case when puntosExtras = 5 and calificacionWord <= Word and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as recibieronIncrementoEspol,
						   sum(case when puntosExtras = 5 and calificacionWord <= Word and tipoEstudiante= 'ADMISION' then 1 else 0 end) as recibieronIncrementoAdmisiones,
					       
						   sum(case when puntosExtras <> 5                                then 1 else 0 end) as noRecibieronIncremento,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as noRecibieronIncrementoEspol,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ADMISION' then 1 else 0 end) as noRecibieronIncrementoAdmisiones,
					       
						   sum(case when calificacionWord < 60 and Word >= 60 and puntosExtras = 5                                then 1 else 0 end) pasaronConIncremento,
						   sum(case when calificacionWord < 60 and Word >= 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) pasaronConIncrementoEspol,
						   sum(case when calificacionWord < 60 and Word >= 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) pasaronConIncrementoAdmision,
					       
						   sum(case when calificacionWord < 60 and Word < 60 and puntosExtras = 5                                then 1 else 0 end) noPasaronConIncremento,
						   sum(case when calificacionWord < 60 and Word < 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) noPasaronConIncrementoEspol,
						   sum(case when calificacionWord < 60 and Word < 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) noPasaronConIncrementoAdmision        
					from puntos_extras_teorico_practico
					union
					SELECT 'PPT' as modulo,
						   sum(case when puntosExtras = 5 and calificacionPPT <= PPT                                then 1 else 0 end) as recibieronIncremento,
						   sum(case when puntosExtras = 5 and calificacionPPT <= PPT and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as recibieronIncrementoEspol,
						   sum(case when puntosExtras = 5 and calificacionPPT <= PPT and tipoEstudiante= 'ADMISION' then 1 else 0 end) as recibieronIncrementoAdmisiones,
					       
						   sum(case when puntosExtras <> 5                                then 1 else 0 end) as noRecibieronIncremento,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as noRecibieronIncrementoEspol,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ADMISION' then 1 else 0 end) as noRecibieronIncrementoAdmisiones,
					       
						   sum(case when calificacionPPT < 60 and PPT >= 60 and puntosExtras = 5                                then 1 else 0 end) pasaronConIncremento,
						   sum(case when calificacionPPT < 60 and PPT >= 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) pasaronConIncrementoEspol,
						   sum(case when calificacionPPT < 60 and PPT >= 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) pasaronConIncrementoAdmision,
					       
						   sum(case when calificacionPPT < 60 and PPT < 60 and puntosExtras = 5                                then 1 else 0 end) noPasaronConIncremento,
						   sum(case when calificacionPPT < 60 and PPT < 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) noPasaronConIncrementoEspol,
						   sum(case when calificacionPPT < 60 and PPT < 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) noPasaronConIncrementoAdmision        
					from puntos_extras_teorico_practico;";

			return ejecutarConsulta($sql);			
		}	

		public function num_est_registrados_p_puntosExtras($flag){

			if ($flag == 'T')    $sql = "SELECT count(identificacion) as estudiantes                                                    from puntos_extras_practico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from puntos_extras_practico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from puntos_extras_practico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 puntosExtras = 5 then 1 else 0 end) as estudiantes from puntos_extras_practico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and puntosExtras = 5 then 1 else 0 end) as estudiantes from puntos_extras_practico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and puntosExtras = 5 then 1 else 0 end) as estudiantes from puntos_extras_practico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 puntosExtras <> 5 then 1 else 0 end) as estudiantes from puntos_extras_practico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and puntosExtras <> 5 then 1 else 0 end) as estudiantes from puntos_extras_practico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and puntosExtras <> 5 then 1 else 0 end) as estudiantes from puntos_extras_practico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleIncrementoPuntosExtrasP($flag){

			$sql = "SELECT 'EXCEL' as modulo,
						   sum(case when puntosExtras = 5 and calificacionExcel <= Excel                                then 1 else 0 end) as recibieronIncremento,
						   sum(case when puntosExtras = 5 and calificacionExcel <= Excel and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as recibieronIncrementoEspol,
						   sum(case when puntosExtras = 5 and calificacionExcel <= Excel and tipoEstudiante= 'ADMISION' then 1 else 0 end) as recibieronIncrementoAdmisiones,
					       
						   sum(case when puntosExtras <> 5                                then 1 else 0 end) as noRecibieronIncremento,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as noRecibieronIncrementoEspol,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ADMISION' then 1 else 0 end) as noRecibieronIncrementoAdmisiones,
					       
						   sum(case when calificacionExcel < 60 and excel >= 60 and puntosExtras = 5                                then 1 else 0 end) pasaronConIncremento,
						   sum(case when calificacionExcel < 60 and excel >= 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) pasaronConIncrementoEspol,
						   sum(case when calificacionExcel < 60 and excel >= 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) pasaronConIncrementoAdmision,
					       
						   sum(case when calificacionExcel < 60 and excel < 60 and puntosExtras = 5                                then 1 else 0 end) noPasaronConIncremento,
						   sum(case when calificacionExcel < 60 and excel < 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) noPasaronConIncrementoEspol,
						   sum(case when calificacionExcel < 60 and excel < 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) noPasaronConIncrementoAdmision        
					from puntos_extras_practico>
					union
					SELECT 'WORD' as modulo,
						   sum(case when puntosExtras = 5 and calificacionWord <= Word                                then 1 else 0 end) as recibieronIncremento,
						   sum(case when puntosExtras = 5 and calificacionWord <= Word and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as recibieronIncrementoEspol,
						   sum(case when puntosExtras = 5 and calificacionWord <= Word and tipoEstudiante= 'ADMISION' then 1 else 0 end) as recibieronIncrementoAdmisiones,
					       
						   sum(case when puntosExtras <> 5                                then 1 else 0 end) as noRecibieronIncremento,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as noRecibieronIncrementoEspol,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ADMISION' then 1 else 0 end) as noRecibieronIncrementoAdmisiones,
					       
						   sum(case when calificacionWord < 60 and Word >= 60 and puntosExtras = 5                                then 1 else 0 end) pasaronConIncremento,
						   sum(case when calificacionWord < 60 and Word >= 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) pasaronConIncrementoEspol,
						   sum(case when calificacionWord < 60 and Word >= 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) pasaronConIncrementoAdmision,
					       
						   sum(case when calificacionWord < 60 and Word < 60 and puntosExtras = 5                                then 1 else 0 end) noPasaronConIncremento,
						   sum(case when calificacionWord < 60 and Word < 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) noPasaronConIncrementoEspol,
						   sum(case when calificacionWord < 60 and Word < 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) noPasaronConIncrementoAdmision        
					from puntos_extras_practico>
					union
					SELECT 'PPT' as modulo,
						   sum(case when puntosExtras = 5 and calificacionPPT <= PPT                                then 1 else 0 end) as recibieronIncremento,
						   sum(case when puntosExtras = 5 and calificacionPPT <= PPT and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as recibieronIncrementoEspol,
						   sum(case when puntosExtras = 5 and calificacionPPT <= PPT and tipoEstudiante= 'ADMISION' then 1 else 0 end) as recibieronIncrementoAdmisiones,
					       
						   sum(case when puntosExtras <> 5                                then 1 else 0 end) as noRecibieronIncremento,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ESPOL'    then 1 else 0 end) as noRecibieronIncrementoEspol,
						   sum(case when puntosExtras <> 5 and tipoEstudiante= 'ADMISION' then 1 else 0 end) as noRecibieronIncrementoAdmisiones,
					       
						   sum(case when calificacionPPT < 60 and PPT >= 60 and puntosExtras = 5                                then 1 else 0 end) pasaronConIncremento,
						   sum(case when calificacionPPT < 60 and PPT >= 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) pasaronConIncrementoEspol,
						   sum(case when calificacionPPT < 60 and PPT >= 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) pasaronConIncrementoAdmision,
					       
						   sum(case when calificacionPPT < 60 and PPT < 60 and puntosExtras = 5                                then 1 else 0 end) noPasaronConIncremento,
						   sum(case when calificacionPPT < 60 and PPT < 60 and puntosExtras = 5 and tipoEstudiante = 'ESPOL'   then 1 else 0 end) noPasaronConIncrementoEspol,
						   sum(case when calificacionPPT < 60 and PPT < 60 and puntosExtras = 5 and tipoEstudiante = 'ADMISION'then 1 else 0 end) noPasaronConIncrementoAdmision        
					from puntos_extras_practico>;";

			return ejecutarConsulta($sql);			
		}

		public function puntosExtrasTeoricoPractico($tipoEstudiante){
			$sql = "SELECT 
					matricula,
					identificacion,
					nombres,
					apellidos,
					email,
					calificacionExcel,
					calificacionPPT,
					calificacionWord,
					demografica,
					diagnostico,
					satisfaccion,
					puntosExtras,
					Excel,
					PPT,
					Word,
					termino,
					anio,
					sistema,
					tipoEstudiante,
					cohorte
					FROM puntos_extras_teorico_practico
				    where tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}

		public function puntosExtrasPractico($tipoEstudiante){
			$sql = "SELECT 
					matricula,
					identificacion,
					nombres,
					apellidos,
					email,
					calificacionExcel,
					calificacionPPT,
					calificacionWord,
					demografica,
					diagnostico,
					satisfaccion,
					puntosExtras,
					Excel,
					PPT,
					Word,
					termino,
					anio,
					sistema,
					tipoEstudiante,
					cohorte
					FROM puntos_extras_practico
				    where tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}
	}
?>