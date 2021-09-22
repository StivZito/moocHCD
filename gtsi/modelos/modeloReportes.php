<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloReportes
	{
		public function __construct(){

		}	

		public function reportePruebaDiagnostico($tipo,$tipoEstudiante){
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
					c.EnrollmentStatus, 
					c.Grade, 
					c.termino, 
					c.anio, 
					c.sistema, 
					c.tipo, 
					c.archivo
					from reporteencuestaofimatica c 
					where (mod1 + mod2 + mod3 + mod4 + mod5 + mod6 + st + promedio)  > 0 and tipoEstudiante='".$tipoEstudiante."' and tipo = '".$tipo."'";

					return ejecutarConsulta($sql);	
		}

		public function cursoMoocTeoricoPractico($tipoEstudiante){
			$sql = "SELECT 
			        c.id,
				    c.nombres,c.apellidos,c.matricula,c.cedula,c.email,c.sexo,
					c.carrera,
					c.grado as grade,
					c.cohorte,
					c.avm1 as mod1,
					c.nivelConocimientoM1,
					c.avm2 as mod2,
					c.nivelConocimientoM2,
					c.avm3 as mod3,
					c.nivelConocimientoM3,
					c.avm4 as mod4,
					c.nivelConocimientoM4,
					c.avm5 as mod5,
					c.nivelConocimientoM5,
					c.avm6 as mod6,
					c.nivelConocimientoM6,
				    c.estado,									   
					c.termino,c.tipo

				from reporteMoocEdxTP c
				where c.tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}

		public function cursoMoocPractico($tipoEstudiante){
			$sql = "SELECT 
					c.id,
				    c.nombres,c.apellidos,c.matricula,c.cedula,c.email,c.sexo,
					c.carrera,
					c.grado as grade,
					c.cohorte,
					c.ppt,
					c.estadoPpt,
					c.IntestadoPpt,
					c.excel,
					c.estadoExcel,
					c.IntestadoExcel,
					c.word,
					c.estadoWord,
					c.IntestadoWord,
				    c.cohorte									   
				from reporteMoocEdxP c
				where c.tipoEstudiante='".$tipoEstudiante."'";

			return ejecutarConsulta($sql);	
		}

		public function reporteRubricasPPT($tipo,$tipoEstudiante){
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
					c.TamanioTres,
					c.EstadoTamanioTres,
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
					FROM reporteexamenppt c 
					where tipoEstudiante='".$tipoEstudiante."' and tipo = '".$tipo."'";

					return ejecutarConsulta($sql);	
		}

		public function reporteRubricasWord($tipo,$tipoEstudiante){
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
					c.TotalGeneral,
					c.NivelConocimiento,
					c.termino,
					c.tipo
					FROM notasmooc.reporteexamenword c
					where tipoEstudiante='".$tipoEstudiante."' and tipo = '".$tipo."'";

					return ejecutarConsulta($sql);	
		}

		public function reporteRubricasExcel($tipo,$tipoEstudiante){
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
					FROM reporteexamenexcel c 
					where tipoEstudiante='".$tipoEstudiante."' and tipo = '".$tipo."'";

					return ejecutarConsulta($sql);	
		}
	}
?>