<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloExamenesPracticos
	{
		public function __construct(){

		}	

		public function reporteEP_RubricasPPT($tipoEstudiante){
			$sql = "SELECT 
					c.nombres,
					c.apellidos,
					c.email,
					c.matricula,
					c.cedula,
					c.sexo,
					c.carrera,
					c.tipoEstudiante,
					c.cohorte,
					c.franja,
					c.paralelo,
					c.docente,
					c.IdeaPrincipal,
					c.EstadoIdeaPrincipal,
					c.TitulosAdecuados,
					c.EstadoTitulosAdecuados,
					c.DiapositivaNoSobrecargada,
					c.EstadoDiapositivaNoSobrecargada,
					c.TotalContenidos,
					c.EstadoTotalContenidos,
					c.InsertaVineta,
					c.EstadoInsertaVineta,
					c.BuenasPracticasUsoFormato,
					c.EstadoBuenasPracticasUsoFormato,
					c.TotalRepresentacionAdecuada,
					c.EstadoTotalRepresentacionAdecuada,
					c.NumeroDiapositivas,
					c.EstadoNumeroDiapositivas,
					c.UsoDeTodasImagenes,
					c.EstadoUsoDeTodasImagenes,
					c.BuenasPracticasUsoFormato2,
					c.EstadoBuenasPracticasUsoFormato2,
					c.TotalUsoImagenes,
					c.EstadoTotalUsoImagenes,
					c.TipoFuente,
					c.EstadoTipoFuente,
					c.Tamanio2,
					c.EstadoTamanio,
					c.FormatoFuente,
					c.EstadoFormatoFuente,
					c.ColorRellenoTexto,
					c.EstadoColorRellenoTexto,
					c.ContornoYEfecto,
					c.EstadoContornoYEfecto,
					c.TotalPortada,
					c.EstadoTotalPortada,
					c.TipoDeFuente,
					c.EstadoTipoDeFuente,
					c.Tamanio,
					c.EstadoTamanio3,
					c.FormatoDeFuente,
					c.EstadoFormatoDeFuente,
					c.ColorDeRelleno,
					c.EstadoColorDeRelleno,
					c.ContornoEfecto,
					c.EstadoContornoEfecto,
					c.TotalTitulo,
					c.EstadoContornoEfecto0,
					c.TipoDeFuente4,
					c.EstadoTipoDeFuente4,
					c.TamanioColor,
					c.EstadoTamanioColor,
					c.Interlineado,
					c.EstadoInterlineado,
					c.TotalTexto,
					c.EstadoContornoEfecto1,
					c.Trama,
					c.EstadoTrama,
					c.TextoColor,
					c.EstadoTextoColor,
					c.TotalFondo,
					c.EstadoContornoEfecto2,
					c.TotalGeneral,
					c.NivelConocimiento,
					c.termino,
					c.tipo
					FROM reporteEP_ExamenPPT c 
					where tipoEstudiante='".$tipoEstudiante."'";

				return ejecutarConsulta($sql);	
		}

		public function reporteETP_RubricasPPT($tipoEstudiante){
			$sql = "SELECT 
					c.nombres,
					c.apellidos,
					c.email,
					c.matricula,
					c.cedula,
					c.sexo,
					c.carrera,
					c.tipoEstudiante,
					c.cohorte,
					c.franja,
					c.paralelo,
					c.docente,
					c.IdeaPrincipal,
					c.EstadoIdeaPrincipal,
					c.TitulosAdecuados,
					c.EstadoTitulosAdecuados,
					c.DiapositivaNoSobrecargada,
					c.EstadoDiapositivaNoSobrecargada,
					c.TotalContenidos,
					c.EstadoTotalContenidos,
					c.InsertaVineta,
					c.EstadoInsertaVineta,
					c.BuenasPracticasUsoFormato,
					c.EstadoBuenasPracticasUsoFormato,
					c.TotalRepresentacionAdecuada,
					c.EstadoTotalRepresentacionAdecuada,
					c.NumeroDiapositivas,
					c.EstadoNumeroDiapositivas,
					c.UsoDeTodasImagenes,
					c.EstadoUsoDeTodasImagenes,
					c.BuenasPracticasUsoFormato2,
					c.EstadoBuenasPracticasUsoFormato2,
					c.TotalUsoImagenes,
					c.EstadoTotalUsoImagenes,
					c.TipoFuente,
					c.EstadoTipoFuente,
					c.Tamanio2,
					c.EstadoTamanio,
					c.FormatoFuente,
					c.EstadoFormatoFuente,
					c.ColorRellenoTexto,
					c.EstadoColorRellenoTexto,
					c.ContornoYEfecto,
					c.EstadoContornoYEfecto,
					c.TotalPortada,
					c.EstadoTotalPortada,
					c.TipoDeFuente,
					c.EstadoTipoDeFuente,
					c.Tamanio,
					c.EstadoTamanio3,
					c.FormatoDeFuente,
					c.EstadoFormatoDeFuente,
					c.ColorDeRelleno,
					c.EstadoColorDeRelleno,
					c.ContornoEfecto,
					c.EstadoContornoEfecto,
					c.TotalTitulo,
					c.EstadoContornoEfecto0,
					c.TipoDeFuente4,
					c.EstadoTipoDeFuente4,
					c.TamanioColor,
					c.EstadoTamanioColor,
					c.Interlineado,
					c.EstadoInterlineado,
					c.TotalTexto,
					c.EstadoContornoEfecto1,
					c.Trama,
					c.EstadoTrama,
					c.TextoColor,
					c.EstadoTextoColor,
					c.TotalFondo,
					c.EstadoContornoEfecto2,
					c.TotalGeneral,
					c.NivelConocimiento,
					c.termino,
					c.tipo
					FROM reporteETP_ExamenPPT c 
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reporteETP_RubricasExcel($tipoEstudiante){
			$sql = "SELECT 
			        c.nombres,
				    c.apellidos,
				    c.email,
				    c.matricula,
				    c.cedula,
				    c.sexo,
				    c.carrera,
				    c.tipoEstudiante,
				    c.cohorte,
				    c.franja,
				    c.paralelo,
				    c.docente,
				    c.FuncionesBasicasP1,
				    c.estadoFuncionesBasicasP1,
				    c.FuncionesBasicasP2,
				    c.estadoFuncionesBasicasP2,
				    c.FuncionesBasicasP3,
				    c.estadoFuncionesBasicasP3,
				    c.FuncionesBasicasP4,
				    c.estadoFuncionesBasicasP4,
				    c.FuncionesBasicasP5,
				    c.estadoFuncionesBasicasP5,
				    c.TotalFuncionesBasicas,
				    c.EstadoTotalFuncionesBasicas,
				    c.OrdenarPorUnNivel,
				    c.estadoOrdenarPorNivel,
				    c.OrdenarPorDosNivel,
				    c.estadoOrdenarPorDosNivel,
				    c.FiltrarPorUnNivel,
				    c.estadoFiltrarPorUnNivel,
				    c.FiltrarPorDosNivel,
				    c.estadoFiltrarPorDosNivel,
				    c.TablaDinamicaP10,
				    c.estadoFuncionesBasicasP10,
				    c.TablaDinamicaP11,
				    c.estadoFuncionesBasicasP11,
				    c.TablaDinamicaP12,
				    c.estadoFuncionesBasicasP12,
				    c.TablaDinamicaP13,
				    c.estadoFuncionesBasicasP13,
				    c.tablaDinamica,
				    c.estadoTablaDinamica,
				    c.siSencillo,
				    c.estadosiSencillo,
				    c.siConcatenado,
				    c.estadoSiConcatenado,
				    c.TotalGeneral,
				    c.NivelConocimiento,
				    c.termino,
				    c.tipo
					FROM reporteETP_ExamenExcel c 
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reporteEP_RubricasExcel($tipoEstudiante){
			$sql = "SELECT 
			        c.nombres,
				    c.apellidos,
				    c.email,
				    c.matricula,
				    c.cedula,
				    c.sexo,
				    c.carrera,
				    c.tipoEstudiante,
				    c.cohorte,
				    c.franja,
				    c.paralelo,
				    c.docente,
				    c.FuncionesBasicasP1,
				    c.estadoFuncionesBasicasP1,
				    c.FuncionesBasicasP2,
				    c.estadoFuncionesBasicasP2,
				    c.FuncionesBasicasP3,
				    c.estadoFuncionesBasicasP3,
				    c.FuncionesBasicasP4,
				    c.estadoFuncionesBasicasP4,
				    c.FuncionesBasicasP5,
				    c.estadoFuncionesBasicasP5,
				    c.TotalFuncionesBasicas,
				    c.EstadoTotalFuncionesBasicas,
				    c.OrdenarPorUnNivel,
				    c.estadoOrdenarPorNivel,
				    c.OrdenarPorDosNivel,
				    c.estadoOrdenarPorDosNivel,
				    c.FiltrarPorUnNivel,
				    c.estadoFiltrarPorUnNivel,
				    c.FiltrarPorDosNivel,
				    c.estadoFiltrarPorDosNivel,
				    c.TablaDinamicaP10,
				    c.estadoFuncionesBasicasP10,
				    c.TablaDinamicaP11,
				    c.estadoFuncionesBasicasP11,
				    c.TablaDinamicaP12,
				    c.estadoFuncionesBasicasP12,
				    c.TablaDinamicaP13,
				    c.estadoFuncionesBasicasP13,
				    c.tablaDinamica,
				    c.estadoTablaDinamica,
				    c.siSencillo,
				    c.estadosiSencillo,
				    c.siConcatenado,
				    c.estadoSiConcatenado,
				    c.TotalGeneral,
				    c.NivelConocimiento,
				    c.termino,
				    c.tipo
					FROM reporteEP_ExamenExcel c 
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reporteEP_RubricasWord($tipoEstudiante){
			$sql = "SELECT 
					c.nombres,
					c.apellidos,
					c.email,
					c.matricula,
					c.cedula,
					c.sexo,
					c.carrera,
					c.tipoEstudiante,
					c.cohorte,
					c.franja,
					c.paralelo,
					c.docente,
					c.GeneraTC,
					c.EstadoGeneraTC,
					c.AplicaEstilos,
					c.EstadoAplicaEstilos,
					c.AsociaMultiNivel,
					c.EstadoAsociaMultiNivel,
					c.TotalContenidos,
					c.EstadoTotalContenidos,
					c.Interlineado,
					c.EstadoInterlineado,
					c.Espaciado,
					c.EstadoEspaciado,
					c.Fuente,
					c.EstadoFuente,
					c.Tamanio,
					c.EstadoTamanio,
					c.Color,
					c.EstadoColor,
					c.TotalFormatoDocumento,
					c.EstadoTotalFormatoDocumento,
					c.ColorBorde,
					c.EstadoColorBorde,
					c.Contorno,
					c.EstadoContorno,
					c.Grosor,
					c.EstadoGrosor,
					c.TotalBorde,
					c.EstadoTotalBorde,
					c.NotaPie,
					c.EstadoNotaPie,
					c.PiePagina,
					c.EstadoPiePagina,
					c.LetraCapital,
					c.EstadoLetraCapital,
					c.Columnas,
					c.EstadoColumnas,
					c.SaltoPagina,
					c.EstadoSaltoPagina,
					c.Vinetas,
					c.EstadoVinetas,
					c.TotalGeneral,
					c.NivelConocimiento,
					c.termino,
					c.tipo
					FROM reporteEP_ExamenWord c
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		public function reporteETP_RubricasWord($tipoEstudiante){
			$sql = "SELECT 
					c.nombres,
					c.apellidos,
					c.email,
					c.matricula,
					c.cedula,
					c.sexo,
					c.carrera,
					c.tipoEstudiante,
					c.cohorte,
					c.franja,
					c.paralelo,
					c.docente,
					c.GeneraTC,
					c.EstadoGeneraTC,
					c.AplicaEstilos,
					c.EstadoAplicaEstilos,
					c.AsociaMultiNivel,
					c.EstadoAsociaMultiNivel,
					c.TotalContenidos,
					c.EstadoTotalContenidos,
					c.Interlineado,
					c.EstadoInterlineado,
					c.Espaciado,
					c.EstadoEspaciado,
					c.Fuente,
					c.EstadoFuente,
					c.Tamanio,
					c.EstadoTamanio,
					c.Color,
					c.EstadoColor,
					c.TotalFormatoDocumento,
					c.EstadoTotalFormatoDocumento,
					c.ColorBorde,
					c.EstadoColorBorde,
					c.Contorno,
					c.EstadoContorno,
					c.Grosor,
					c.EstadoGrosor,
					c.TotalBorde,
					c.EstadoTotalBorde,
					c.NotaPie,
					c.EstadoNotaPie,
					c.PiePagina,
					c.EstadoPiePagina,
					c.LetraCapital,
					c.EstadoLetraCapital,
					c.Columnas,
					c.EstadoColumnas,
					c.SaltoPagina,
					c.EstadoSaltoPagina,
					c.Vinetas,
					c.EstadoVinetas,
					c.TotalGeneral,
					c.NivelConocimiento,
					c.termino,
					c.tipo
					FROM reporteETP_ExamenWord c
					where tipoEstudiante='".$tipoEstudiante."'";

					return ejecutarConsulta($sql);	
		}

		//////////////////////////////////////////////////////////preguntas practico
		public function num_est_registrados_p_excel($flag){
			
			if ($flag == 'T')    $sql = "SELECT count(id) as estudiantes                                                    from rubricasexcelpractico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from rubricasexcelpractico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from rubricasexcelpractico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 calificacion >= 60 then 1 else 0 end) as estudiantes from rubricasexcelpractico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricasexcelpractico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricasexcelpractico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 calificacion <  60 then 1 else 0 end) as estudiantes from rubricasexcelpractico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion <  60 then 1 else 0 end) as estudiantes from rubricasexcelpractico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion <  60 then 1 else 0 end) as estudiantes from rubricasexcelpractico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleP1ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 1' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c1,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c1,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c1,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c1,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c1,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c1,0) = 4 then 1 else 0 end) / count(c1)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 1' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and length(p1) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c1,0) = 0 and length(p1) > 0 then 1 else 0 end) / count(c1)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 1' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and length(p1)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c1,0) = 0 and length(p1) = 0 then 1 else 0 end) / count(c1)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 1' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c1) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP2ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 2' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c2,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c2,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c2,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c2,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c2,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c2,0) = 4 then 1 else 0 end) / count(c2)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 2' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and length(p2) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c2,0) = 0 and length(p2) > 0 then 1 else 0 end) / count(c2)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 2' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and length(p2)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c2,0) = 0 and length(p2) = 0 then 1 else 0 end) / count(c2)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 2' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c2) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP3ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 3' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c3,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c3,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c3,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c3,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c3,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c3,0) = 4 then 1 else 0 end) / count(c3)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 3' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and length(p3) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c3,0) = 0 and length(p3) > 0 then 1 else 0 end) / count(c3)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 3' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and length(p3)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c3,0) = 0 and length(p3) = 0 then 1 else 0 end) / count(c3)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 3' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c3) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP4ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 4' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c4,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c4,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c4,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c4,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c4,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c4,0) = 4 then 1 else 0 end) / count(c4)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 4' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and length(p4) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c4,0) = 0 and length(p4) > 0 then 1 else 0 end) / count(c4)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 4' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and length(p4)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c4,0) = 0 and length(p4) = 0 then 1 else 0 end) / count(c4)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 4' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c4) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP5ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 5' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c5,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c5,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c5,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c5,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c5,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c5,0) = 4 then 1 else 0 end) / count(c5)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 5' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and length(p5) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c5,0) = 0 and length(p5) > 0 then 1 else 0 end) / count(c5)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 5' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and length(p5)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c5,0) = 0 and length(p5) = 0 then 1 else 0 end) / count(c5)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 5' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c5) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP6ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 6' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c6,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c6,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c6,0) = 9 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c6,0) = 9  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c6,0) = 9 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c6,0) = 9 then 1 else 0 end) / count(c6)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 6' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and length(p6) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c6,0) = 0 and length(p6) > 0 then 1 else 0 end) / count(c6)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 6' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and length(p6)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c6,0) = 0 and length(p6) = 0 then 1 else 0 end) / count(c6)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 6' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c6) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP7ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 7' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c7,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c7,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c7,0) = 11 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c7,0) = 11  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c7,0) = 11 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c7,0) = 11 then 1 else 0 end) / count(c7)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 7' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and length(p7) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c7,0) = 0 and length(p7) > 0 then 1 else 0 end) / count(c7)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 7' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and length(p7)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c7,0) = 0 and length(p7) = 0 then 1 else 0 end) / count(c7)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 7' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c7) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP8ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 8' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c8,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c8,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c8,0) = 9 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c8,0) = 9  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c8,0) = 9 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c8,0) = 9 then 1 else 0 end) / count(c8)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 8' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and length(p8) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c8,0) = 0 and length(p8) > 0 then 1 else 0 end) / count(c8)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 8' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and length(p8)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c8,0) = 0 and length(p8) = 0 then 1 else 0 end) / count(c8)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 8' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c8) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP9ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 9' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c9,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c9,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c9,0) = 11 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c9,0) = 11  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c9,0) = 11 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c9,0) = 11 then 1 else 0 end) / count(c9)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 9' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and length(p9) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c9,0) = 0 and length(p9) > 0 then 1 else 0 end) / count(c9)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 9' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and length(p9)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c9,0) = 0 and length(p9) = 0 then 1 else 0 end) / count(c9)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 9' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c9) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP10ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 10' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c10,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c10,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c10,0) = 5 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c10,0) = 5  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c10,0) = 5 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c10,0) = 5 then 1 else 0 end) / count(c10)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 10' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and length(p10) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c10,0) = 0 and length(p10) > 0 then 1 else 0 end) / count(c10)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 10' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and length(p10)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c10,0) = 0 and length(p10) = 0 then 1 else 0 end) / count(c10)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 10' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c10) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP11ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 11' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c11,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c11,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c11,0) = 6 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c11,0) = 6  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c11,0) = 6 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c11,0) = 6 then 1 else 0 end) / count(c11)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 11' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and length(p11) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c11,0) = 0 and length(p11) > 0 then 1 else 0 end) / count(c11)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 11' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and length(p11)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c11,0) = 0 and length(p11) = 0 then 1 else 0 end) / count(c11)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 11' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c11) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP12ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 12' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c12,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c12,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c12,0) = 6 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c12,0) = 6  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c12,0) = 6 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c12,0) = 6 then 1 else 0 end) / count(c12)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 12' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and length(p12) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c12,0) = 0 and length(p12) > 0 then 1 else 0 end) / count(c12)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 12' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and length(p12)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c12,0) = 0 and length(p12) = 0 then 1 else 0 end) / count(c12)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 12' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c12) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP13ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 13' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c13,0) = 8 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c13,0) = 8 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c13,0) = 8 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c13,0) = 8  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c13,0) = 8 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c13,0) = 8 then 1 else 0 end) / count(c13)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 13' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and length(p13) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c13,0) = 0 and length(p13) > 0 then 1 else 0 end) / count(c13)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 13' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and length(p13)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c13,0) = 0 and length(p13) = 0 then 1 else 0 end) / count(c13)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 13' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c13) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP14ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 14' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c14,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c14,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c14,0) = 5 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c14,0) = 5  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c14,0) = 5 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c14,0) = 5 then 1 else 0 end) / count(c14)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 14' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and length(p14) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c14,0) = 0 and length(p14) > 0 then 1 else 0 end) / count(c14)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 14' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and length(p14)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c14,0) = 0 and length(p14) = 0 then 1 else 0 end) / count(c14)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 14' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c14) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP15ExcelP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 15' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c15,0) = 10 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c15,0) = 10 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c15,0) = 10 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c15,0) = 10  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c15,0) = 10 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c15,0) = 10 then 1 else 0 end) / count(c15)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 15' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and length(p15) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c15,0) = 0 and length(p15) > 0 then 1 else 0 end) / count(c15)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 15' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and length(p15)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c15,0) = 0 and length(p15) = 0 then 1 else 0 end) / count(c15)) * 100,2) as porcentaje
					from rubricasexcelpractico
					union
					select  'PREGUNTA 15' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c15) as estudiantes,
					        100 as porcentaje
					from rubricasexcelpractico;";
			
			return ejecutarConsulta($sql);	
		}


		//////////////////////////////////////////////////////////preguntas teorico practico
		public function num_est_registrados_tp_excel($flag){

			if ($flag == 'T')    $sql = "SELECT count(id) as estudiantes                                                    from rubricasexcelteoricopractico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 calificacion >= 60 then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 calificacion <  60 then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion <  60 then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion <  60 then 1 else 0 end) as estudiantes from rubricasexcelteoricopractico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleP1ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 1' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c1,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c1,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c1,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c1,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c1,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c1,0) = 4 then 1 else 0 end) / count(c1)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 1' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and length(p1) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c1,0) = 0 and length(p1) > 0 then 1 else 0 end) / count(c1)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 1' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ESPOL' and length(p1) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c1,0) = 0 and tipoEstudiante = 'ADMISION' and length(p1) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c1,0) = 0 and length(p1)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c1,0) = 0 and length(p1) = 0 then 1 else 0 end) / count(c1)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 1' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c1) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP2ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 2' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c2,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c2,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c2,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c2,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c2,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c2,0) = 4 then 1 else 0 end) / count(c2)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 2' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and length(p2) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c2,0) = 0 and length(p2) > 0 then 1 else 0 end) / count(c2)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 2' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ESPOL' and length(p2) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c2,0) = 0 and tipoEstudiante = 'ADMISION' and length(p2) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c2,0) = 0 and length(p2)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c2,0) = 0 and length(p2) = 0 then 1 else 0 end) / count(c2)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 2' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c2) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP3ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 3' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c3,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c3,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c3,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c3,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c3,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c3,0) = 4 then 1 else 0 end) / count(c3)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 3' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and length(p3) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c3,0) = 0 and length(p3) > 0 then 1 else 0 end) / count(c3)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 3' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ESPOL' and length(p3) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c3,0) = 0 and tipoEstudiante = 'ADMISION' and length(p3) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c3,0) = 0 and length(p3)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c3,0) = 0 and length(p3) = 0 then 1 else 0 end) / count(c3)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 3' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c3) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP4ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 4' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c4,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c4,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c4,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c4,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c4,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c4,0) = 4 then 1 else 0 end) / count(c4)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 4' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and length(p4) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c4,0) = 0 and length(p4) > 0 then 1 else 0 end) / count(c4)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 4' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ESPOL' and length(p4) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c4,0) = 0 and tipoEstudiante = 'ADMISION' and length(p4) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c4,0) = 0 and length(p4)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c4,0) = 0 and length(p4) = 0 then 1 else 0 end) / count(c4)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 4' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c4) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP5ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 5' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c5,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c5,0) = 4 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c5,0) = 4 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c5,0) = 4  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c5,0) = 4 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c5,0) = 4 then 1 else 0 end) / count(c5)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 5' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and length(p5) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c5,0) = 0 and length(p5) > 0 then 1 else 0 end) / count(c5)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 5' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ESPOL' and length(p5) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c5,0) = 0 and tipoEstudiante = 'ADMISION' and length(p5) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c5,0) = 0 and length(p5)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c5,0) = 0 and length(p5) = 0 then 1 else 0 end) / count(c5)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 5' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c5) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP6ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 6' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c6,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c6,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c6,0) = 9 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c6,0) = 9  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c6,0) = 9 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c6,0) = 9 then 1 else 0 end) / count(c6)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 6' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and length(p6) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c6,0) = 0 and length(p6) > 0 then 1 else 0 end) / count(c6)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 6' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ESPOL' and length(p6) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c6,0) = 0 and tipoEstudiante = 'ADMISION' and length(p6) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c6,0) = 0 and length(p6)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c6,0) = 0 and length(p6) = 0 then 1 else 0 end) / count(c6)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 6' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c6) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP7ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 7' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c7,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c7,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c7,0) = 11 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c7,0) = 11  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c7,0) = 11 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c7,0) = 11 then 1 else 0 end) / count(c7)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 7' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and length(p7) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c7,0) = 0 and length(p7) > 0 then 1 else 0 end) / count(c7)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 7' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ESPOL' and length(p7) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c7,0) = 0 and tipoEstudiante = 'ADMISION' and length(p7) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c7,0) = 0 and length(p7)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c7,0) = 0 and length(p7) = 0 then 1 else 0 end) / count(c7)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 7' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c7) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP8ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 8' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c8,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c8,0) = 9 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c8,0) = 9 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c8,0) = 9  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c8,0) = 9 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c8,0) = 9 then 1 else 0 end) / count(c8)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 8' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and length(p8) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c8,0) = 0 and length(p8) > 0 then 1 else 0 end) / count(c8)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 8' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ESPOL' and length(p8) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c8,0) = 0 and tipoEstudiante = 'ADMISION' and length(p8) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c8,0) = 0 and length(p8)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c8,0) = 0 and length(p8) = 0 then 1 else 0 end) / count(c8)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 8' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c8) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP9ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 9' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c9,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c9,0) = 11 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c9,0) = 11 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c9,0) = 11  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c9,0) = 11 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c9,0) = 11 then 1 else 0 end) / count(c9)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 9' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and length(p9) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c9,0) = 0 and length(p9) > 0 then 1 else 0 end) / count(c9)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 9' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ESPOL' and length(p9) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c9,0) = 0 and tipoEstudiante = 'ADMISION' and length(p9) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c9,0) = 0 and length(p9)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c9,0) = 0 and length(p9) = 0 then 1 else 0 end) / count(c9)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 9' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c9) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP10ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 10' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c10,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c10,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c10,0) = 5 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c10,0) = 5  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c10,0) = 5 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c10,0) = 5 then 1 else 0 end) / count(c10)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 10' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and length(p10) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c10,0) = 0 and length(p10) > 0 then 1 else 0 end) / count(c10)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 10' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ESPOL' and length(p10) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c10,0) = 0 and tipoEstudiante = 'ADMISION' and length(p10) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c10,0) = 0 and length(p10)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c10,0) = 0 and length(p10) = 0 then 1 else 0 end) / count(c10)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 10' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c10) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP11ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 11' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c11,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c11,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c11,0) = 6 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c11,0) = 6  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c11,0) = 6 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c11,0) = 6 then 1 else 0 end) / count(c11)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 11' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and length(p11) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c11,0) = 0 and length(p11) > 0 then 1 else 0 end) / count(c11)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 11' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ESPOL' and length(p11) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c11,0) = 0 and tipoEstudiante = 'ADMISION' and length(p11) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c11,0) = 0 and length(p11)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c11,0) = 0 and length(p11) = 0 then 1 else 0 end) / count(c11)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 11' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c11) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP12ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 12' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c12,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c12,0) = 6 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c12,0) = 6 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c12,0) = 6  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c12,0) = 6 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c12,0) = 6 then 1 else 0 end) / count(c12)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 12' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and length(p12) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c12,0) = 0 and length(p12) > 0 then 1 else 0 end) / count(c12)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 12' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ESPOL' and length(p12) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c12,0) = 0 and tipoEstudiante = 'ADMISION' and length(p12) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c12,0) = 0 and length(p12)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c12,0) = 0 and length(p12) = 0 then 1 else 0 end) / count(c12)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 12' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c12) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP13ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 13' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c13,0) = 8 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c13,0) = 8 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c13,0) = 8 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c13,0) = 8  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c13,0) = 8 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c13,0) = 8 then 1 else 0 end) / count(c13)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 13' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and length(p13) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c13,0) = 0 and length(p13) > 0 then 1 else 0 end) / count(c13)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 13' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ESPOL' and length(p13) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c13,0) = 0 and tipoEstudiante = 'ADMISION' and length(p13) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c13,0) = 0 and length(p13)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c13,0) = 0 and length(p13) = 0 then 1 else 0 end) / count(c13)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 13' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c13) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP14ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 14' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c14,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c14,0) = 5 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c14,0) = 5 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c14,0) = 5  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c14,0) = 5 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c14,0) = 5 then 1 else 0 end) / count(c14)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 14' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and length(p14) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c14,0) = 0 and length(p14) > 0 then 1 else 0 end) / count(c14)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 14' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ESPOL' and length(p14) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c14,0) = 0 and tipoEstudiante = 'ADMISION' and length(p14) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c14,0) = 0 and length(p14)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c14,0) = 0 and length(p14) = 0 then 1 else 0 end) / count(c14)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 14' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c14) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP15ExcelTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 15' as pregunta,
					        'CORRECTA' as respuesta,
					        sum(case when ifnull(c15,0) = 10 and tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c15,0) = 10 and tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c15,0) = 10 and tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c15,0) = 10  and tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c15,0) = 10 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c15,0) = 10 then 1 else 0 end) / count(c15)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 15' as pregunta,
					        'INCORRECTA' as respuesta,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15) > 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15) > 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15) > 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and length(p15) > 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c15,0) = 0 and length(p15) > 0 then 1 else 0 end) / count(c15)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 15' as pregunta,
					        'SIN RESPONDER' as respuesta,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15)  = 0 then 1 else 0 end) as espol,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ESPOL' and length(p15) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15)  = 0 then 1 else 0 end) as admision,
					        round((sum(case when ifnull(c15,0) = 0 and tipoEstudiante = 'ADMISION' and length(p15) = 0 then 1 else 0 end) / sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
					        sum(case when ifnull(c15,0) = 0 and length(p15)  = 0 then 1 else 0 end) as estudiantes,
					        round((sum(case when ifnull(c15,0) = 0 and length(p15) = 0 then 1 else 0 end) / count(c15)) * 100,2) as porcentaje
					from rubricasexcelteoricopractico
					union
					select  'PREGUNTA 15' as pregunta,
					        'TOTAL' as respuesta,
					        sum(case when tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
					        100 as espol_porcentaje,
					        sum(case when tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
					        100 as admision_porcentaje,
					        count(c15) as estudiantes,
					        100 as porcentaje
					from rubricasexcelteoricopractico;";
			
			return ejecutarConsulta($sql);	
		}

		//////////////////////////////////////////////////////////preguntas word practico
		public function num_est_registrados_p_word($flag){

			if ($flag == 'T')    $sql = "SELECT count(id) as estudiantes                                                    from rubricaswordpractico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from rubricaswordpractico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from rubricaswordpractico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaswordpractico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaswordpractico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaswordpractico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 calificacion <  60 then 1 else 0 end) as estudiantes from rubricaswordpractico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaswordpractico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaswordpractico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleP1WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' then 1 else 0 end) / count(c.EstadoGeneraTC)) * 100,2) as porcentaje
					        ,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.EstadoGeneraTC)) * 100,2) as porcentaje
					        ,'2 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' then 1 else 0 end) / count(c.EstadoGeneraTC)) * 100,2) as porcentaje
					        ,'4 - 5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP2WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' then 1 else 0 end) / count(c.EstadoAplicaEstilos)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.EstadoAplicaEstilos)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' then 1 else 0 end) / count(c.EstadoAplicaEstilos)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula ";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP3WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' then 1 else 0 end) / count(c.EstadoAsociaMultinivel)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.EstadoAsociaMultinivel)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' then 1 else 0 end) / count(c.EstadoAsociaMultinivel)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle1TWordP($tipoEstudiante){
			$sql = "SELECT  'TEMA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'0 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'8 - 17' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'18 - 25' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'25' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP4WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 4' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 4' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP5WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 5' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoEspaciado)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoEspaciado)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoEspaciado)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 5' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP6WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 6' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoFuente)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoFuente)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 6' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP7WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 7' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 7' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP8WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 8' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColor)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColor)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColor)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 8' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle2TWordP($tipoEstudiante){
			$sql = "SELECT  'TEMA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalFormatoDocumento)) * 100,2) as porcentaje
							,'0 - 6' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalFormatoDocumento)) * 100,2) as porcentaje
							,'7 - 14' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalFormatoDocumento)) * 100,2) as porcentaje
							,'15 - 20' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'20' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP9WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 9' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColorBorde)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColorBorde)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColorBorde)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 9' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP10WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 10' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContorno,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContorno)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContorno)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContorno)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 10' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP11WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 11' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoGrosor)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoGrosor)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoGrosor)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 11' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle3TWordP($tipoEstudiante){
			$sql = "SELECT  'TEMA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalBorde)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalBorde)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalBorde)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP12WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 12' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoNotaPie)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoNotaPie)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoNotaPie)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 12' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP13WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 13' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoPiePagina)) * 100,2) as porcentaje
							,'0 - 2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoPiePagina)) * 100,2) as porcentaje
							,'3 - 5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoPiePagina)) * 100,2) as porcentaje
							,'6 - 8' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 13' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'8' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP14WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 14' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoLetraCapital)) * 100,2) as porcentaje
							,'0 - 2' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoLetraCapital)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoLetraCapital)) * 100,2) as porcentaje
							,'5 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 14' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP15WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 15' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColumnas)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColumnas)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColumnas)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 15' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP16WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 16' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoSaltoPagina)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoSaltoPagina)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoSaltoPagina)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 16' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP17WordP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 17' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoVinetas)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoVinetas)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoVinetas)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 17' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenword c
					inner join rubricaswordpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}



		//////////////////////////////////////////////////////////preguntas word teorico practico
		public function num_est_registrados_tp_word($flag){

			if ($flag == 'T')    $sql = "SELECT count(id) as estudiantes                                                    from rubricaswordteoricopractico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 calificacion <  60 then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaswordteoricopractico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleP1WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'INICIAL' then 1 else 0 end) / count(c.EstadoGeneraTC)) * 100,2) as porcentaje
					        ,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.EstadoGeneraTC)) * 100,2) as porcentaje
					        ,'2 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoGeneraTC,'') = 'EXCELENTE' then 1 else 0 end) / count(c.EstadoGeneraTC)) * 100,2) as porcentaje
					        ,'4 - 5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP2WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'INICIAL' then 1 else 0 end) / count(c.EstadoAplicaEstilos)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.EstadoAplicaEstilos)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAplicaEstilos,'') = 'EXCELENTE' then 1 else 0 end) / count(c.EstadoAplicaEstilos)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula ";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP3WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'INICIAL' then 1 else 0 end) / count(c.EstadoAsociaMultinivel)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.EstadoAsociaMultinivel)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.EstadoAsociaMultinivel,'') = 'EXCELENTE' then 1 else 0 end) / count(c.EstadoAsociaMultinivel)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle1TWordTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'0 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'8 - 17' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'18 - 25' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'25' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP4WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 4' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 4' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP5WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 5' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoEspaciado)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoEspaciado)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoEspaciado,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoEspaciado)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 5' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP6WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 6' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoFuente)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoFuente)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 6' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP7WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 7' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 7' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP8WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 8' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColor)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColor)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColor)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 8' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle2TWordTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalFormatoDocumento)) * 100,2) as porcentaje
							,'0 - 6' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalFormatoDocumento)) * 100,2) as porcentaje
							,'7 - 14' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalFormatoDocumento,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalFormatoDocumento)) * 100,2) as porcentaje
							,'15 - 20' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'20' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP9WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 9' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColorBorde)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColorBorde)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorBorde,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColorBorde)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 9' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP10WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 10' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContorno,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContorno,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContorno)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContorno)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContorno,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContorno)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 10' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP11WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 11' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoGrosor)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoGrosor)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoGrosor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoGrosor)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 11' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle3TWordTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalBorde)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalBorde)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalBorde,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalBorde)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP12WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 12' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoNotaPie)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoNotaPie)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNotaPie,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoNotaPie)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 12' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP13WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 13' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoPiePagina)) * 100,2) as porcentaje
							,'0 - 2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoPiePagina)) * 100,2) as porcentaje
							,'3 - 5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoPiePagina,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoPiePagina)) * 100,2) as porcentaje
							,'6 - 8' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 13' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'8' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP14WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 14' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoLetraCapital)) * 100,2) as porcentaje
							,'0 - 2' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoLetraCapital)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoLetraCapital,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoLetraCapital)) * 100,2) as porcentaje
							,'5 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 14' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP15WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 15' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColumnas)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColumnas)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColumnas,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColumnas)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 15' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP16WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 16' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoSaltoPagina)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoSaltoPagina)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoSaltoPagina,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoSaltoPagina)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 16' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP17WordTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 17' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoVinetas)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoVinetas)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoVinetas,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoVinetas)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 17' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenword c
					inner join rubricaswordteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}


		//////////////////////////////////////////////////////////preguntas ppt practico
		public function num_est_registrados_p_ppt($flag){

			if ($flag == 'T')    $sql = "SELECT count(id) as estudiantes                                                    from rubricaspptpractico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from rubricaspptpractico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from rubricaspptpractico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaspptpractico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaspptpractico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaspptpractico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 calificacion <  60 then 1 else 0 end) as estudiantes from rubricaspptpractico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaspptpractico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaspptpractico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleP1PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoIdeaPrincipal)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoIdeaPrincipal)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoIdeaPrincipal)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP2PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTitulosAdecuados)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTitulosAdecuados)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTitulosAdecuados)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula ";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP3PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoDiapositivaNoSobrecargada)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoDiapositivaNoSobrecargada)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoDiapositivaNoSobrecargada)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle1TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'0 - 9' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'10 - 21' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'22 - 30' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'30' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP4PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 4' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoInsertaVineta)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoInsertaVineta)) * 100,2) as porcentaje
							,'2 - 4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoInsertaVineta)) * 100,2) as porcentaje
							,'5 - 6' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 4' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'6' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP5PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 5' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 5' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle2TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalRepresentacionAdecuada)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalRepresentacionAdecuada)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalRepresentacionAdecuada)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP6PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 6' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoNumeroDiapositivas)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoNumeroDiapositivas)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoNumeroDiapositivas)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 6' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP7PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 7' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoUsoDeTodasImagenes)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoUsoDeTodasImagenes)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoUsoDeTodasImagenes)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 7' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP8PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 8' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato2)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato2)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato2)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 8' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle3TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalUsoImagenes)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalUsoImagenes)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalUsoImagenes)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP9PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 9' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTipoFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTipoFuente)) * 100,2) as porcentaje
							,'1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTipoFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 9' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP10PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 10' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 10' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP11PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 11' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoFormatoFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoFormatoFuente)) * 100,2) as porcentaje
							,'1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoFormatoFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 11' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP12PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 12' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColorRellenoTexto)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColorRellenoTexto)) * 100,2) as porcentaje
							,'1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColorRellenoTexto)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 12' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP13PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 13' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoYEfecto)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoYEfecto)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoYEfecto)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 13' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle4TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 4' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalPortada)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 4' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalPortada)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 4' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalPortada)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 4' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP14PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 14' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTipoDeFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTipoDeFuente)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTipoDeFuente)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 14' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP15PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 15' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanio3)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanio3)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanio3)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 15' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP16PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 16' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoFormatoDeFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoFormatoDeFuente)) * 100,2) as porcentaje
							,'1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoFormatoDeFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 16' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP17PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 17' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColorDeRelleno)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColorDeRelleno)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColorDeRelleno)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 17' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP18PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 18' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 18' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 18' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 18' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle5TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 5' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto0)) * 100,2) as porcentaje
							,'0 - 4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 5' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto0)) * 100,2) as porcentaje
							,'5 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 5' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto0)) * 100,2) as porcentaje
							,'11 - 15' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 5' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'15' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP19PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 19' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTipoDeFuente4)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 19' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTipoDeFuente4)) * 100,2) as porcentaje
							,'2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 19' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTipoDeFuente4)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 19' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP20PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 20' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanioColor)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 20' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanioColor)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 20' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanioColor)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 20' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP21PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 21' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'0' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 21' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 21' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 21' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle6TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 6' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto1)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 6' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto1)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 6' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto1)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 6' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP22PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 22' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTrama,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTrama)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 22' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTrama)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 22' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTrama)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 22' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP23PptP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 23' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTextoColor)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 23' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTextoColor)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 23' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTextoColor)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 23' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle7TPptP($tipoEstudiante){
			$sql = "SELECT  'TEMA 7' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto2)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 7' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto2)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 7' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto2)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 7' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteep_examenppt c
					inner join rubricaspptpractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}



		//////////////////////////////////////////////////////////preguntas ppt teorico practico
		public function num_est_registrados_tp_ppt($flag){

			if ($flag == 'T')    $sql = "SELECT count(id) as estudiantes                                                    from rubricaspptteoricopractico;";
			if ($flag == 'TE')   $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";
			if ($flag == 'TA')   $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";

			if ($flag == 'AP')   $sql = "SELECT sum(case when                                 calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";
			if ($flag == 'APE')  $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";
			if ($flag == 'APA')  $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion >= 60 then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";

			if ($flag == 'NAP')  $sql = "SELECT sum(case when                                 calificacion <  60 then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";
			if ($flag == 'NAPE') $sql = "SELECT sum(case when tipoEstudiante = 'ESPOL'    and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";
			if ($flag == 'NAPA') $sql = "SELECT sum(case when tipoEstudiante = 'ADMISION' and calificacion <  60 then 1 else 0 end) as estudiantes from rubricaspptteoricopractico;";

			return ejecutarConsultaSimpleFila($sql);			
		}

		public function detalleP1PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoIdeaPrincipal)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoIdeaPrincipal)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoIdeaPrincipal,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoIdeaPrincipal)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP2PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTitulosAdecuados)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTitulosAdecuados)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTitulosAdecuados,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTitulosAdecuados)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula ";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP3PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoDiapositivaNoSobrecargada)) * 100,2) as porcentaje
					        ,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoDiapositivaNoSobrecargada)) * 100,2) as porcentaje
					        ,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoDiapositivaNoSobrecargada,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoDiapositivaNoSobrecargada)) * 100,2) as porcentaje
					        ,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle1TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 1' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'0 - 9' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'10 - 21' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 1' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalContenidos,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalContenidos)) * 100,2) as porcentaje
					        ,'22 - 30' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 1' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
					        ,'30' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP4PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 4' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoInsertaVineta)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoInsertaVineta)) * 100,2) as porcentaje
							,'2 - 4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 4' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInsertaVineta,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoInsertaVineta)) * 100,2) as porcentaje
							,'5 - 6' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 4' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'6' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP5PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 5' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 5' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 5' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle2TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 2' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalRepresentacionAdecuada)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalRepresentacionAdecuada)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 2' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalRepresentacionAdecuada,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalRepresentacionAdecuada)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 2' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP6PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 6' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoNumeroDiapositivas)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoNumeroDiapositivas)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 6' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoNumeroDiapositivas,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoNumeroDiapositivas)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 6' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula ;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP7PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 7' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoUsoDeTodasImagenes)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoUsoDeTodasImagenes)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 7' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoUsoDeTodasImagenes,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoUsoDeTodasImagenes)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 7' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP8PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 8' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato2)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato2)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 8' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoBuenasPracticasUsoFormato2,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoBuenasPracticasUsoFormato2)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 8' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle3TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 3' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalUsoImagenes)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalUsoImagenes)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 3' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalUsoImagenes,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalUsoImagenes)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 3' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP9PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 9' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTipoFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTipoFuente)) * 100,2) as porcentaje
							,'1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 9' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTipoFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 9' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP10PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 10' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 10' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanio)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 10' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP11PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 11' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoFormatoFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoFormatoFuente)) * 100,2) as porcentaje
							,'1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 11' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoFormatoFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 11' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP12PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 12' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColorRellenoTexto)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColorRellenoTexto)) * 100,2) as porcentaje
							,'1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 12' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorRellenoTexto,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColorRellenoTexto)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 12' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP13PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 13' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoYEfecto)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoYEfecto)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 13' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoYEfecto,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoYEfecto)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 13' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle4TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 4' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTotalPortada)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 4' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTotalPortada)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 4' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTotalPortada,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTotalPortada)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 4' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP14PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 14' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTipoDeFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTipoDeFuente)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 14' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTipoDeFuente)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 14' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP15PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 15' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanio3)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanio3)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 15' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanio3,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanio3)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 15' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP16PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 16' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoFormatoDeFuente)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoFormatoDeFuente)) * 100,2) as porcentaje
							,'1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 16' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoFormatoDeFuente,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoFormatoDeFuente)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 16' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP17PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 17' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoColorDeRelleno)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoColorDeRelleno)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 17' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoColorDeRelleno,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoColorDeRelleno)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 17' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP18PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 18' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 18' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 18' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 18' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle5TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 5' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto0)) * 100,2) as porcentaje
							,'0 - 4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 5' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto0)) * 100,2) as porcentaje
							,'5 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 5' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto0,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto0)) * 100,2) as porcentaje
							,'11 - 15' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 5' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'15' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP19PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 19' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTipoDeFuente4)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 19' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTipoDeFuente4)) * 100,2) as porcentaje
							,'2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 19' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTipoDeFuente4,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTipoDeFuente4)) * 100,2) as porcentaje
							,'3 - 4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 19' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'4' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP20PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 20' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTamanioColor)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 20' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTamanioColor)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 20' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTamanioColor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTamanioColor)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 20' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP21PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 21' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'0' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 21' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'1 - 2' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 21' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoInterlineado,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoInterlineado)) * 100,2) as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 21' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle6TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 6' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto1)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 6' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto1)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 6' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto1,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto1)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 6' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP22PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 22' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTrama,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTrama,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTrama)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 22' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTrama)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 22' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTrama,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTrama)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 22' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalleP23PptTP($tipoEstudiante){
			$sql = "SELECT  'PREGUNTA 23' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoTextoColor)) * 100,2) as porcentaje
							,'0 - 1' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 23' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoTextoColor)) * 100,2) as porcentaje
							,'2 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'PREGUNTA 23' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoTextoColor,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoTextoColor)) * 100,2) as porcentaje
							,'4 - 5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'PREGUNTA 23' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'5' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

		public function detalle7TPptTP($tipoEstudiante){
			$sql = "SELECT  'TEMA 7' as pregunta,
							'INICIAL' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'INICIAL' then 1 else 0 end) / count(c.estadoContornoEfecto2)) * 100,2) as porcentaje
							,'0 - 3' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 7' as pregunta,
							'EN DESARROLLO' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EN DESARROLLO' then 1 else 0 end) / count(c.estadoContornoEfecto2)) * 100,2) as porcentaje
							,'4 - 7' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					SELECT  'TEMA 7' as pregunta,
							'EXCELENTE' as respuesta,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) as espol,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ESPOL' then 1 else 0 end) / sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end)) * 100,2) as espol_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) as admision,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE'  and c.tipoEstudiante = 'ADMISION'  then 1 else 0 end) / sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end)) * 100,2) as admision_porcentaje,
							sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' then 1 else 0 end) as estudiantes,
							round((sum(case when ifnull(c.estadoContornoEfecto2,'') = 'EXCELENTE' then 1 else 0 end) / count(c.estadoContornoEfecto2)) * 100,2) as porcentaje
							,'8 - 10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula 
					union
					select  'TEMA 7' as pregunta,
							'TOTAL' as respuesta,
							sum(case when c.tipoEstudiante ='ESPOL' then 1 else 0 end) as espol,
							100 as espol_porcentaje,
							sum(case when c.tipoEstudiante ='ADMISION' then 1 else 0 end) as admision,
							100 as admision_porcentaje,
							count(c.tipoEstudiante) as estudiantes,
							100 as porcentaje
							,'10' as nota
					from reporteetp_examenppt c
					inner join rubricaspptteoricopractico d
					on d.cedula = c.cedula;";
			
			return ejecutarConsulta($sql);	
		}

	}
?>