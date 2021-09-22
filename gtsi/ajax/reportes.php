<?php 
	require_once '../modelos/modeloReportes.php';

	$reportes = new modeloReportes();

	switch ($_GET["op"]){

		/////////////////////////////////////////////////////////Pruebas de Diagnostico
		case 'reportePruebaDiagnosticoAdmisionP':	
			$rspta = $reportes -> reportePruebaDiagnostico('P','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reportePruebaDiagnosticoAdmisionTP':	
			$rspta = $reportes -> reportePruebaDiagnostico('TP','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reportePruebaDiagnosticoEspolP':	
			$rspta = $reportes -> reportePruebaDiagnostico('P','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 
				);
			}
			
			echo json_encode($data);
		break;

		case 'reportePruebaDiagnosticoEspolTP':	
			$rspta = $reportes -> reportePruebaDiagnostico('TP','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 
				);
			}
			
			echo json_encode($data);
		break;	

		//////////////////////////////////////////////////////////Curso Mooc
		case 'reporteCursoMoocAdmisionP':	
			$rspta = $reportes -> cursoMoocPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"ppt" => $reg -> ppt ,
					"excel" => $reg -> excel ,
					"word" => $reg -> word ,
					"estadoPpt" => $reg -> estadoPpt ,
					"estadoExcel" => $reg -> estadoExcel ,
					"estadoWord" => $reg -> estadoWord ,
					"cohorte" => $reg -> cohorte
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteCursoMoocAdmisionTP':	
			$rspta = $reportes -> cursoMoocTeoricoPractico('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 ,
					"estado" => $reg -> estado 
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteCursoMoocEspolP':	
			$rspta = $reportes -> cursoMoocPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"ppt" => $reg -> ppt ,
					"excel" => $reg -> excel ,
					"word" => $reg -> word ,
					"estadoPpt" => $reg -> estadoPpt ,
					"estadoExcel" => $reg -> estadoExcel ,
					"estadoWord" => $reg -> estadoWord ,
					"cohorte" => $reg -> cohorte
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteCursoMoocEspolTP':	
			$rspta = $reportes -> cursoMoocTeoricoPractico('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo,
					"email" => $reg -> email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"mod1" => $reg -> mod1 ,
					"mod2" => $reg -> mod2 ,
					"mod3" => $reg -> mod3 ,
					"mod4" => $reg -> mod4 ,
					"mod5" => $reg -> mod5 ,
					"mod6" => $reg -> mod6 ,
					"nivelConocimientoM1" => $reg -> nivelConocimientoM1 ,
					"nivelConocimientoM2" => $reg -> nivelConocimientoM2 ,
					"nivelConocimientoM3" => $reg -> nivelConocimientoM3 ,
					"nivelConocimientoM4" => $reg -> nivelConocimientoM4 ,
					"nivelConocimientoM5" => $reg -> nivelConocimientoM5 ,
					"nivelConocimientoM6" => $reg -> nivelConocimientoM6 ,
					"estado" => $reg -> estado 
				);
			}
			
			echo json_encode($data);
		break;	


		/////////////////////////////////////////////////////////Rubricas PPT
		case 'reporteRubricasPPTAdmisionP':	
			$rspta = $reportes -> reporteRubricasPPT('P','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"matricula" => $reg -> 	matricula,
					"cedula" => $reg -> 	cedula,
					"sexo" => $reg -> 	sexo,
					"carrera" => $reg -> 	carrera,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte,
					"franja" => $reg -> 	franja,
					"paralelo" => $reg -> 	paralelo,
					"docente" => $reg -> 	docente,
					"IdeaPrincipal" => $reg -> 	IdeaPrincipal,
					"EstadoIdeaPrincipal" => $reg -> 	EstadoIdeaPrincipal,
					"TitulosAdecuados" => $reg -> 	TitulosAdecuados,
					"EstadoTitulosAdecuados" => $reg -> 	EstadoTitulosAdecuados,
					"DiapositivaNoSobrecargada" => $reg -> 	DiapositivaNoSobrecargada,
					"EstadoDiapositivaNoSobrecargada" => $reg -> 	EstadoDiapositivaNoSobrecargada,
					"TotalContenidos" => $reg -> 	TotalContenidos,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos,
					"InsertaVineta" => $reg -> 	InsertaVineta,
					"EstadoInsertaVineta" => $reg -> 	EstadoInsertaVineta,
					"BuenasPracticasUsoFormato" => $reg -> 	BuenasPracticasUsoFormato,
					"EstadoBuenasPracticasUsoFormato" => $reg -> 	EstadoBuenasPracticasUsoFormato,
					"TotalRepresentacionAdecuada" => $reg -> 	TotalRepresentacionAdecuada,
					"EstadoTotalRepresentacionAdecuada" => $reg -> 	EstadoTotalRepresentacionAdecuada,
					"NumeroDiapositivas" => $reg -> 	NumeroDiapositivas,
					"EstadoNumeroDiapositivas" => $reg -> 	EstadoNumeroDiapositivas,
					"UsoDeTodasImagenes" => $reg -> 	UsoDeTodasImagenes,
					"EstadoUsoDeTodasImagenes" => $reg -> 	EstadoUsoDeTodasImagenes,
					"BuenasPracticasUsoFormato2" => $reg -> 	BuenasPracticasUsoFormato2,
					"EstadoBuenasPracticasUsoFormato2" => $reg -> 	EstadoBuenasPracticasUsoFormato2,
					"TotalUsoImagenes" => $reg -> 	TotalUsoImagenes,
					"EstadoTotalUsoImagenes" => $reg -> 	EstadoTotalUsoImagenes,
					"TipoFuente" => $reg -> 	TipoFuente,
					"EstadoTipoFuente" => $reg -> 	EstadoTipoFuente,
					"Tamanio2" => $reg -> 	Tamanio2,
					"EstadoTamanio" => $reg -> 	EstadoTamanio,
					"FormatoFuente" => $reg -> 	FormatoFuente,
					"EstadoFormatoFuente" => $reg -> 	EstadoFormatoFuente,
					"ColorRellenoTexto" => $reg -> 	ColorRellenoTexto,
					"EstadoColorRellenoTexto" => $reg -> 	EstadoColorRellenoTexto,
					"ContornoYEfecto" => $reg -> 	ContornoYEfecto,
					"EstadoContornoYEfecto" => $reg -> 	EstadoContornoYEfecto,
					"TotalPortada" => $reg -> 	TotalPortada,
					"EstadoTotalPortada" => $reg -> 	EstadoTotalPortada,
					"TipoDeFuente" => $reg -> 	TipoDeFuente,
					"EstadoTipoDeFuente" => $reg -> 	EstadoTipoDeFuente,
					"TamanioTres" => $reg -> 	TamanioTres,
					"EstadoTamanioTres" => $reg -> 	EstadoTamanioTres,
					"FormatoDeFuente" => $reg -> 	FormatoDeFuente,
					"EstadoFormatoDeFuente" => $reg -> 	EstadoFormatoDeFuente,
					"ColorDeRelleno" => $reg -> 	ColorDeRelleno,
					"EstadoColorDeRelleno" => $reg -> 	EstadoColorDeRelleno,
					"ContornoEfecto" => $reg -> 	ContornoEfecto,
					"EstadoContornoEfecto" => $reg -> 	EstadoContornoEfecto,
					"TotalTitulo" => $reg -> 	TotalTitulo,
					"EstadoContornoEfecto0" => $reg -> 	EstadoContornoEfecto0,
					"TipoDeFuente4" => $reg -> 	TipoDeFuente4,
					"EstadoTipoDeFuente4" => $reg -> 	EstadoTipoDeFuente4,
					"TamanioColor" => $reg -> 	TamanioColor,
					"EstadoTamanioColor" => $reg -> 	EstadoTamanioColor,
					"Interlineado" => $reg -> 	Interlineado,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado,
					"TotalTexto" => $reg -> 	TotalTexto,
					"EstadoContornoEfecto1" => $reg -> 	EstadoContornoEfecto1,
					"Trama" => $reg -> 	Trama,
					"EstadoTrama" => $reg -> 	EstadoTrama,
					"TextoColor" => $reg -> 	TextoColor,
					"EstadoTextoColor" => $reg -> 	EstadoTextoColor,
					"TotalFondo" => $reg -> 	TotalFondo,
					"EstadoContornoEfecto2" => $reg -> 	EstadoContornoEfecto2,
					"TotalGeneral" => $reg -> 	TotalGeneral,
					"NivelConocimiento" => $reg -> 	NivelConocimiento,
					"termino" => $reg -> 	termino,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteRubricasPPTAdmisionTP':	
			$rspta = $reportes -> reporteRubricasPPT('TP','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"matricula" => $reg -> 	matricula,
					"cedula" => $reg -> 	cedula,
					"sexo" => $reg -> 	sexo,
					"carrera" => $reg -> 	carrera,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte,
					"franja" => $reg -> 	franja,
					"paralelo" => $reg -> 	paralelo,
					"docente" => $reg -> 	docente,
					"IdeaPrincipal" => $reg -> 	IdeaPrincipal,
					"EstadoIdeaPrincipal" => $reg -> 	EstadoIdeaPrincipal,
					"TitulosAdecuados" => $reg -> 	TitulosAdecuados,
					"EstadoTitulosAdecuados" => $reg -> 	EstadoTitulosAdecuados,
					"DiapositivaNoSobrecargada" => $reg -> 	DiapositivaNoSobrecargada,
					"EstadoDiapositivaNoSobrecargada" => $reg -> 	EstadoDiapositivaNoSobrecargada,
					"TotalContenidos" => $reg -> 	TotalContenidos,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos,
					"InsertaVineta" => $reg -> 	InsertaVineta,
					"EstadoInsertaVineta" => $reg -> 	EstadoInsertaVineta,
					"BuenasPracticasUsoFormato" => $reg -> 	BuenasPracticasUsoFormato,
					"EstadoBuenasPracticasUsoFormato" => $reg -> 	EstadoBuenasPracticasUsoFormato,
					"TotalRepresentacionAdecuada" => $reg -> 	TotalRepresentacionAdecuada,
					"EstadoTotalRepresentacionAdecuada" => $reg -> 	EstadoTotalRepresentacionAdecuada,
					"NumeroDiapositivas" => $reg -> 	NumeroDiapositivas,
					"EstadoNumeroDiapositivas" => $reg -> 	EstadoNumeroDiapositivas,
					"UsoDeTodasImagenes" => $reg -> 	UsoDeTodasImagenes,
					"EstadoUsoDeTodasImagenes" => $reg -> 	EstadoUsoDeTodasImagenes,
					"BuenasPracticasUsoFormato2" => $reg -> 	BuenasPracticasUsoFormato2,
					"EstadoBuenasPracticasUsoFormato2" => $reg -> 	EstadoBuenasPracticasUsoFormato2,
					"TotalUsoImagenes" => $reg -> 	TotalUsoImagenes,
					"EstadoTotalUsoImagenes" => $reg -> 	EstadoTotalUsoImagenes,
					"TipoFuente" => $reg -> 	TipoFuente,
					"EstadoTipoFuente" => $reg -> 	EstadoTipoFuente,
					"Tamanio2" => $reg -> 	Tamanio2,
					"EstadoTamanio" => $reg -> 	EstadoTamanio,
					"FormatoFuente" => $reg -> 	FormatoFuente,
					"EstadoFormatoFuente" => $reg -> 	EstadoFormatoFuente,
					"ColorRellenoTexto" => $reg -> 	ColorRellenoTexto,
					"EstadoColorRellenoTexto" => $reg -> 	EstadoColorRellenoTexto,
					"ContornoYEfecto" => $reg -> 	ContornoYEfecto,
					"EstadoContornoYEfecto" => $reg -> 	EstadoContornoYEfecto,
					"TotalPortada" => $reg -> 	TotalPortada,
					"EstadoTotalPortada" => $reg -> 	EstadoTotalPortada,
					"TipoDeFuente" => $reg -> 	TipoDeFuente,
					"EstadoTipoDeFuente" => $reg -> 	EstadoTipoDeFuente,
					"TamanioTres" => $reg -> 	TamanioTres,
					"EstadoTamanioTres" => $reg -> 	EstadoTamanioTres,
					"FormatoDeFuente" => $reg -> 	FormatoDeFuente,
					"EstadoFormatoDeFuente" => $reg -> 	EstadoFormatoDeFuente,
					"ColorDeRelleno" => $reg -> 	ColorDeRelleno,
					"EstadoColorDeRelleno" => $reg -> 	EstadoColorDeRelleno,
					"ContornoEfecto" => $reg -> 	ContornoEfecto,
					"EstadoContornoEfecto" => $reg -> 	EstadoContornoEfecto,
					"TotalTitulo" => $reg -> 	TotalTitulo,
					"EstadoContornoEfecto0" => $reg -> 	EstadoContornoEfecto0,
					"TipoDeFuente4" => $reg -> 	TipoDeFuente4,
					"EstadoTipoDeFuente4" => $reg -> 	EstadoTipoDeFuente4,
					"TamanioColor" => $reg -> 	TamanioColor,
					"EstadoTamanioColor" => $reg -> 	EstadoTamanioColor,
					"Interlineado" => $reg -> 	Interlineado,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado,
					"TotalTexto" => $reg -> 	TotalTexto,
					"EstadoContornoEfecto1" => $reg -> 	EstadoContornoEfecto1,
					"Trama" => $reg -> 	Trama,
					"EstadoTrama" => $reg -> 	EstadoTrama,
					"TextoColor" => $reg -> 	TextoColor,
					"EstadoTextoColor" => $reg -> 	EstadoTextoColor,
					"TotalFondo" => $reg -> 	TotalFondo,
					"EstadoContornoEfecto2" => $reg -> 	EstadoContornoEfecto2,
					"TotalGeneral" => $reg -> 	TotalGeneral,
					"NivelConocimiento" => $reg -> 	NivelConocimiento,
					"termino" => $reg -> 	termino,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteRubricasPPTEspolP':	
			$rspta = $reportes -> reporteRubricasPPT('P','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"matricula" => $reg -> 	matricula,
					"cedula" => $reg -> 	cedula,
					"sexo" => $reg -> 	sexo,
					"carrera" => $reg -> 	carrera,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte,
					"franja" => $reg -> 	franja,
					"paralelo" => $reg -> 	paralelo,
					"docente" => $reg -> 	docente,
					"IdeaPrincipal" => $reg -> 	IdeaPrincipal,
					"EstadoIdeaPrincipal" => $reg -> 	EstadoIdeaPrincipal,
					"TitulosAdecuados" => $reg -> 	TitulosAdecuados,
					"EstadoTitulosAdecuados" => $reg -> 	EstadoTitulosAdecuados,
					"DiapositivaNoSobrecargada" => $reg -> 	DiapositivaNoSobrecargada,
					"EstadoDiapositivaNoSobrecargada" => $reg -> 	EstadoDiapositivaNoSobrecargada,
					"TotalContenidos" => $reg -> 	TotalContenidos,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos,
					"InsertaVineta" => $reg -> 	InsertaVineta,
					"EstadoInsertaVineta" => $reg -> 	EstadoInsertaVineta,
					"BuenasPracticasUsoFormato" => $reg -> 	BuenasPracticasUsoFormato,
					"EstadoBuenasPracticasUsoFormato" => $reg -> 	EstadoBuenasPracticasUsoFormato,
					"TotalRepresentacionAdecuada" => $reg -> 	TotalRepresentacionAdecuada,
					"EstadoTotalRepresentacionAdecuada" => $reg -> 	EstadoTotalRepresentacionAdecuada,
					"NumeroDiapositivas" => $reg -> 	NumeroDiapositivas,
					"EstadoNumeroDiapositivas" => $reg -> 	EstadoNumeroDiapositivas,
					"UsoDeTodasImagenes" => $reg -> 	UsoDeTodasImagenes,
					"EstadoUsoDeTodasImagenes" => $reg -> 	EstadoUsoDeTodasImagenes,
					"BuenasPracticasUsoFormato2" => $reg -> 	BuenasPracticasUsoFormato2,
					"EstadoBuenasPracticasUsoFormato2" => $reg -> 	EstadoBuenasPracticasUsoFormato2,
					"TotalUsoImagenes" => $reg -> 	TotalUsoImagenes,
					"EstadoTotalUsoImagenes" => $reg -> 	EstadoTotalUsoImagenes,
					"TipoFuente" => $reg -> 	TipoFuente,
					"EstadoTipoFuente" => $reg -> 	EstadoTipoFuente,
					"Tamanio2" => $reg -> 	Tamanio2,
					"EstadoTamanio" => $reg -> 	EstadoTamanio,
					"FormatoFuente" => $reg -> 	FormatoFuente,
					"EstadoFormatoFuente" => $reg -> 	EstadoFormatoFuente,
					"ColorRellenoTexto" => $reg -> 	ColorRellenoTexto,
					"EstadoColorRellenoTexto" => $reg -> 	EstadoColorRellenoTexto,
					"ContornoYEfecto" => $reg -> 	ContornoYEfecto,
					"EstadoContornoYEfecto" => $reg -> 	EstadoContornoYEfecto,
					"TotalPortada" => $reg -> 	TotalPortada,
					"EstadoTotalPortada" => $reg -> 	EstadoTotalPortada,
					"TipoDeFuente" => $reg -> 	TipoDeFuente,
					"EstadoTipoDeFuente" => $reg -> 	EstadoTipoDeFuente,
					"TamanioTres" => $reg -> 	TamanioTres,
					"EstadoTamanioTres" => $reg -> 	EstadoTamanioTres,
					"FormatoDeFuente" => $reg -> 	FormatoDeFuente,
					"EstadoFormatoDeFuente" => $reg -> 	EstadoFormatoDeFuente,
					"ColorDeRelleno" => $reg -> 	ColorDeRelleno,
					"EstadoColorDeRelleno" => $reg -> 	EstadoColorDeRelleno,
					"ContornoEfecto" => $reg -> 	ContornoEfecto,
					"EstadoContornoEfecto" => $reg -> 	EstadoContornoEfecto,
					"TotalTitulo" => $reg -> 	TotalTitulo,
					"EstadoContornoEfecto0" => $reg -> 	EstadoContornoEfecto0,
					"TipoDeFuente4" => $reg -> 	TipoDeFuente4,
					"EstadoTipoDeFuente4" => $reg -> 	EstadoTipoDeFuente4,
					"TamanioColor" => $reg -> 	TamanioColor,
					"EstadoTamanioColor" => $reg -> 	EstadoTamanioColor,
					"Interlineado" => $reg -> 	Interlineado,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado,
					"TotalTexto" => $reg -> 	TotalTexto,
					"EstadoContornoEfecto1" => $reg -> 	EstadoContornoEfecto1,
					"Trama" => $reg -> 	Trama,
					"EstadoTrama" => $reg -> 	EstadoTrama,
					"TextoColor" => $reg -> 	TextoColor,
					"EstadoTextoColor" => $reg -> 	EstadoTextoColor,
					"TotalFondo" => $reg -> 	TotalFondo,
					"EstadoContornoEfecto2" => $reg -> 	EstadoContornoEfecto2,
					"TotalGeneral" => $reg -> 	TotalGeneral,
					"NivelConocimiento" => $reg -> 	NivelConocimiento,
					"termino" => $reg -> 	termino,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteRubricasPPTEspolTP':	
			$rspta = $reportes -> reporteRubricasPPT('TP','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres,
					"apellidos" => $reg -> 	apellidos,
					"email" => $reg -> 	email,
					"matricula" => $reg -> 	matricula,
					"cedula" => $reg -> 	cedula,
					"sexo" => $reg -> 	sexo,
					"carrera" => $reg -> 	carrera,
					"tipoEstudiante" => $reg -> 	tipoEstudiante,
					"cohorte" => $reg -> 	cohorte,
					"franja" => $reg -> 	franja,
					"paralelo" => $reg -> 	paralelo,
					"docente" => $reg -> 	docente,
					"IdeaPrincipal" => $reg -> 	IdeaPrincipal,
					"EstadoIdeaPrincipal" => $reg -> 	EstadoIdeaPrincipal,
					"TitulosAdecuados" => $reg -> 	TitulosAdecuados,
					"EstadoTitulosAdecuados" => $reg -> 	EstadoTitulosAdecuados,
					"DiapositivaNoSobrecargada" => $reg -> 	DiapositivaNoSobrecargada,
					"EstadoDiapositivaNoSobrecargada" => $reg -> 	EstadoDiapositivaNoSobrecargada,
					"TotalContenidos" => $reg -> 	TotalContenidos,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos,
					"InsertaVineta" => $reg -> 	InsertaVineta,
					"EstadoInsertaVineta" => $reg -> 	EstadoInsertaVineta,
					"BuenasPracticasUsoFormato" => $reg -> 	BuenasPracticasUsoFormato,
					"EstadoBuenasPracticasUsoFormato" => $reg -> 	EstadoBuenasPracticasUsoFormato,
					"TotalRepresentacionAdecuada" => $reg -> 	TotalRepresentacionAdecuada,
					"EstadoTotalRepresentacionAdecuada" => $reg -> 	EstadoTotalRepresentacionAdecuada,
					"NumeroDiapositivas" => $reg -> 	NumeroDiapositivas,
					"EstadoNumeroDiapositivas" => $reg -> 	EstadoNumeroDiapositivas,
					"UsoDeTodasImagenes" => $reg -> 	UsoDeTodasImagenes,
					"EstadoUsoDeTodasImagenes" => $reg -> 	EstadoUsoDeTodasImagenes,
					"BuenasPracticasUsoFormato2" => $reg -> 	BuenasPracticasUsoFormato2,
					"EstadoBuenasPracticasUsoFormato2" => $reg -> 	EstadoBuenasPracticasUsoFormato2,
					"TotalUsoImagenes" => $reg -> 	TotalUsoImagenes,
					"EstadoTotalUsoImagenes" => $reg -> 	EstadoTotalUsoImagenes,
					"TipoFuente" => $reg -> 	TipoFuente,
					"EstadoTipoFuente" => $reg -> 	EstadoTipoFuente,
					"Tamanio2" => $reg -> 	Tamanio2,
					"EstadoTamanio" => $reg -> 	EstadoTamanio,
					"FormatoFuente" => $reg -> 	FormatoFuente,
					"EstadoFormatoFuente" => $reg -> 	EstadoFormatoFuente,
					"ColorRellenoTexto" => $reg -> 	ColorRellenoTexto,
					"EstadoColorRellenoTexto" => $reg -> 	EstadoColorRellenoTexto,
					"ContornoYEfecto" => $reg -> 	ContornoYEfecto,
					"EstadoContornoYEfecto" => $reg -> 	EstadoContornoYEfecto,
					"TotalPortada" => $reg -> 	TotalPortada,
					"EstadoTotalPortada" => $reg -> 	EstadoTotalPortada,
					"TipoDeFuente" => $reg -> 	TipoDeFuente,
					"EstadoTipoDeFuente" => $reg -> 	EstadoTipoDeFuente,
					"TamanioTres" => $reg -> 	TamanioTres,
					"EstadoTamanioTres" => $reg -> 	EstadoTamanioTres,
					"FormatoDeFuente" => $reg -> 	FormatoDeFuente,
					"EstadoFormatoDeFuente" => $reg -> 	EstadoFormatoDeFuente,
					"ColorDeRelleno" => $reg -> 	ColorDeRelleno,
					"EstadoColorDeRelleno" => $reg -> 	EstadoColorDeRelleno,
					"ContornoEfecto" => $reg -> 	ContornoEfecto,
					"EstadoContornoEfecto" => $reg -> 	EstadoContornoEfecto,
					"TotalTitulo" => $reg -> 	TotalTitulo,
					"EstadoContornoEfecto0" => $reg -> 	EstadoContornoEfecto0,
					"TipoDeFuente4" => $reg -> 	TipoDeFuente4,
					"EstadoTipoDeFuente4" => $reg -> 	EstadoTipoDeFuente4,
					"TamanioColor" => $reg -> 	TamanioColor,
					"EstadoTamanioColor" => $reg -> 	EstadoTamanioColor,
					"Interlineado" => $reg -> 	Interlineado,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado,
					"TotalTexto" => $reg -> 	TotalTexto,
					"EstadoContornoEfecto1" => $reg -> 	EstadoContornoEfecto1,
					"Trama" => $reg -> 	Trama,
					"EstadoTrama" => $reg -> 	EstadoTrama,
					"TextoColor" => $reg -> 	TextoColor,
					"EstadoTextoColor" => $reg -> 	EstadoTextoColor,
					"TotalFondo" => $reg -> 	TotalFondo,
					"EstadoContornoEfecto2" => $reg -> 	EstadoContornoEfecto2,
					"TotalGeneral" => $reg -> 	TotalGeneral,
					"NivelConocimiento" => $reg -> 	NivelConocimiento,
					"termino" => $reg -> 	termino,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;	


		/////////////////////////////////////////////////////////Rubricas WORD
		case 'reporteRubricasWordAdmisionP':	
			$rspta = $reportes -> reporteRubricasWord('P','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"GeneraTC" => $reg -> 	GeneraTC	,
					"EstadoGeneraTC" => $reg -> 	EstadoGeneraTC	,
					"AplicaEstilos" => $reg -> 	AplicaEstilos	,
					"EstadoAplicaEstilos" => $reg -> 	EstadoAplicaEstilos	,
					"AsociaMultiNivel" => $reg -> 	AsociaMultiNivel	,
					"EstadoAsociaMultiNivel" => $reg -> 	EstadoAsociaMultiNivel	,
					"TotalContenidos" => $reg -> 	TotalContenidos	,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos	,
					"Interlineado" => $reg -> 	Interlineado	,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado	,
					"Espaciado" => $reg -> 	Espaciado	,
					"EstadoEspaciado" => $reg -> 	EstadoEspaciado	,
					"Fuente" => $reg -> 	Fuente	,
					"EstadoFuente" => $reg -> 	EstadoFuente	,
					"Tamanio" => $reg -> 	Tamanio	,
					"EstadoTamanio" => $reg -> 	EstadoTamanio	,
					"Color" => $reg -> 	Color	,
					"EstadoColor" => $reg -> 	EstadoColor	,
					"TotalFormatoDocumento" => $reg -> 	TotalFormatoDocumento	,
					"EstadoTotalFormatoDocumento" => $reg -> 	EstadoTotalFormatoDocumento	,
					"ColorBorde" => $reg -> 	ColorBorde	,
					"EstadoColorBorde" => $reg -> 	EstadoColorBorde	,
					"Contorno" => $reg -> 	Contorno	,
					"EstadoContorno" => $reg -> 	EstadoContorno	,
					"Grosor" => $reg -> 	Grosor	,
					"EstadoGrosor" => $reg -> 	EstadoGrosor	,
					"TotalBorde" => $reg -> 	TotalBorde	,
					"EstadoTotalBorde" => $reg -> 	EstadoTotalBorde	,
					"NotaPie" => $reg -> 	NotaPie	,
					"EstadoNotaPie" => $reg -> 	EstadoNotaPie	,
					"PiePagina" => $reg -> 	PiePagina	,
					"EstadoPiePagina" => $reg -> 	EstadoPiePagina	,
					"LetraCapital" => $reg -> 	LetraCapital	,
					"EstadoLetraCapital" => $reg -> 	EstadoLetraCapital	,
					"Columnas" => $reg -> 	Columnas	,
					"EstadoColumnas" => $reg -> 	EstadoColumnas	,
					"SaltoPagina" => $reg -> 	SaltoPagina	,
					"EstadoSaltoPagina" => $reg -> 	EstadoSaltoPagina	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo	
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteRubricasWordAdmisionTP':	
			$rspta = $reportes -> reporteRubricasWord('TP','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"GeneraTC" => $reg -> 	GeneraTC	,
					"EstadoGeneraTC" => $reg -> 	EstadoGeneraTC	,
					"AplicaEstilos" => $reg -> 	AplicaEstilos	,
					"EstadoAplicaEstilos" => $reg -> 	EstadoAplicaEstilos	,
					"AsociaMultiNivel" => $reg -> 	AsociaMultiNivel	,
					"EstadoAsociaMultiNivel" => $reg -> 	EstadoAsociaMultiNivel	,
					"TotalContenidos" => $reg -> 	TotalContenidos	,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos	,
					"Interlineado" => $reg -> 	Interlineado	,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado	,
					"Espaciado" => $reg -> 	Espaciado	,
					"EstadoEspaciado" => $reg -> 	EstadoEspaciado	,
					"Fuente" => $reg -> 	Fuente	,
					"EstadoFuente" => $reg -> 	EstadoFuente	,
					"Tamanio" => $reg -> 	Tamanio	,
					"EstadoTamanio" => $reg -> 	EstadoTamanio	,
					"Color" => $reg -> 	Color	,
					"EstadoColor" => $reg -> 	EstadoColor	,
					"TotalFormatoDocumento" => $reg -> 	TotalFormatoDocumento	,
					"EstadoTotalFormatoDocumento" => $reg -> 	EstadoTotalFormatoDocumento	,
					"ColorBorde" => $reg -> 	ColorBorde	,
					"EstadoColorBorde" => $reg -> 	EstadoColorBorde	,
					"Contorno" => $reg -> 	Contorno	,
					"EstadoContorno" => $reg -> 	EstadoContorno	,
					"Grosor" => $reg -> 	Grosor	,
					"EstadoGrosor" => $reg -> 	EstadoGrosor	,
					"TotalBorde" => $reg -> 	TotalBorde	,
					"EstadoTotalBorde" => $reg -> 	EstadoTotalBorde	,
					"NotaPie" => $reg -> 	NotaPie	,
					"EstadoNotaPie" => $reg -> 	EstadoNotaPie	,
					"PiePagina" => $reg -> 	PiePagina	,
					"EstadoPiePagina" => $reg -> 	EstadoPiePagina	,
					"LetraCapital" => $reg -> 	LetraCapital	,
					"EstadoLetraCapital" => $reg -> 	EstadoLetraCapital	,
					"Columnas" => $reg -> 	Columnas	,
					"EstadoColumnas" => $reg -> 	EstadoColumnas	,
					"SaltoPagina" => $reg -> 	SaltoPagina	,
					"EstadoSaltoPagina" => $reg -> 	EstadoSaltoPagina	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteRubricasWordEspolP':	
			$rspta = $reportes -> reporteRubricasWord('P','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"GeneraTC" => $reg -> 	GeneraTC	,
					"EstadoGeneraTC" => $reg -> 	EstadoGeneraTC	,
					"AplicaEstilos" => $reg -> 	AplicaEstilos	,
					"EstadoAplicaEstilos" => $reg -> 	EstadoAplicaEstilos	,
					"AsociaMultiNivel" => $reg -> 	AsociaMultiNivel	,
					"EstadoAsociaMultiNivel" => $reg -> 	EstadoAsociaMultiNivel	,
					"TotalContenidos" => $reg -> 	TotalContenidos	,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos	,
					"Interlineado" => $reg -> 	Interlineado	,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado	,
					"Espaciado" => $reg -> 	Espaciado	,
					"EstadoEspaciado" => $reg -> 	EstadoEspaciado	,
					"Fuente" => $reg -> 	Fuente	,
					"EstadoFuente" => $reg -> 	EstadoFuente	,
					"Tamanio" => $reg -> 	Tamanio	,
					"EstadoTamanio" => $reg -> 	EstadoTamanio	,
					"Color" => $reg -> 	Color	,
					"EstadoColor" => $reg -> 	EstadoColor	,
					"TotalFormatoDocumento" => $reg -> 	TotalFormatoDocumento	,
					"EstadoTotalFormatoDocumento" => $reg -> 	EstadoTotalFormatoDocumento	,
					"ColorBorde" => $reg -> 	ColorBorde	,
					"EstadoColorBorde" => $reg -> 	EstadoColorBorde	,
					"Contorno" => $reg -> 	Contorno	,
					"EstadoContorno" => $reg -> 	EstadoContorno	,
					"Grosor" => $reg -> 	Grosor	,
					"EstadoGrosor" => $reg -> 	EstadoGrosor	,
					"TotalBorde" => $reg -> 	TotalBorde	,
					"EstadoTotalBorde" => $reg -> 	EstadoTotalBorde	,
					"NotaPie" => $reg -> 	NotaPie	,
					"EstadoNotaPie" => $reg -> 	EstadoNotaPie	,
					"PiePagina" => $reg -> 	PiePagina	,
					"EstadoPiePagina" => $reg -> 	EstadoPiePagina	,
					"LetraCapital" => $reg -> 	LetraCapital	,
					"EstadoLetraCapital" => $reg -> 	EstadoLetraCapital	,
					"Columnas" => $reg -> 	Columnas	,
					"EstadoColumnas" => $reg -> 	EstadoColumnas	,
					"SaltoPagina" => $reg -> 	SaltoPagina	,
					"EstadoSaltoPagina" => $reg -> 	EstadoSaltoPagina	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteRubricasWordEspolTP':	
			$rspta = $reportes -> reporteRubricasWord('TP','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"GeneraTC" => $reg -> 	GeneraTC	,
					"EstadoGeneraTC" => $reg -> 	EstadoGeneraTC	,
					"AplicaEstilos" => $reg -> 	AplicaEstilos	,
					"EstadoAplicaEstilos" => $reg -> 	EstadoAplicaEstilos	,
					"AsociaMultiNivel" => $reg -> 	AsociaMultiNivel	,
					"EstadoAsociaMultiNivel" => $reg -> 	EstadoAsociaMultiNivel	,
					"TotalContenidos" => $reg -> 	TotalContenidos	,
					"EstadoTotalContenidos" => $reg -> 	EstadoTotalContenidos	,
					"Interlineado" => $reg -> 	Interlineado	,
					"EstadoInterlineado" => $reg -> 	EstadoInterlineado	,
					"Espaciado" => $reg -> 	Espaciado	,
					"EstadoEspaciado" => $reg -> 	EstadoEspaciado	,
					"Fuente" => $reg -> 	Fuente	,
					"EstadoFuente" => $reg -> 	EstadoFuente	,
					"Tamanio" => $reg -> 	Tamanio	,
					"EstadoTamanio" => $reg -> 	EstadoTamanio	,
					"Color" => $reg -> 	Color	,
					"EstadoColor" => $reg -> 	EstadoColor	,
					"TotalFormatoDocumento" => $reg -> 	TotalFormatoDocumento	,
					"EstadoTotalFormatoDocumento" => $reg -> 	EstadoTotalFormatoDocumento	,
					"ColorBorde" => $reg -> 	ColorBorde	,
					"EstadoColorBorde" => $reg -> 	EstadoColorBorde	,
					"Contorno" => $reg -> 	Contorno	,
					"EstadoContorno" => $reg -> 	EstadoContorno	,
					"Grosor" => $reg -> 	Grosor	,
					"EstadoGrosor" => $reg -> 	EstadoGrosor	,
					"TotalBorde" => $reg -> 	TotalBorde	,
					"EstadoTotalBorde" => $reg -> 	EstadoTotalBorde	,
					"NotaPie" => $reg -> 	NotaPie	,
					"EstadoNotaPie" => $reg -> 	EstadoNotaPie	,
					"PiePagina" => $reg -> 	PiePagina	,
					"EstadoPiePagina" => $reg -> 	EstadoPiePagina	,
					"LetraCapital" => $reg -> 	LetraCapital	,
					"EstadoLetraCapital" => $reg -> 	EstadoLetraCapital	,
					"Columnas" => $reg -> 	Columnas	,
					"EstadoColumnas" => $reg -> 	EstadoColumnas	,
					"SaltoPagina" => $reg -> 	SaltoPagina	,
					"EstadoSaltoPagina" => $reg -> 	EstadoSaltoPagina	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;

		/////////////////////////////////////////////////////////Rubricas EXCEL
		case 'reporteRubricasExcelAdmisionP':	
			$rspta = $reportes -> reporteRubricasExcel('P','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"FuncionesBasicasP1" => $reg -> 	FuncionesBasicasP1	,
					"estadoFuncionesBasicasP1" => $reg -> 	estadoFuncionesBasicasP1	,
					"FuncionesBasicasP2" => $reg -> 	FuncionesBasicasP2	,
					"estadoFuncionesBasicasP2" => $reg -> 	estadoFuncionesBasicasP2	,
					"FuncionesBasicasP3" => $reg -> 	FuncionesBasicasP3	,
					"estadoFuncionesBasicasP3" => $reg -> 	estadoFuncionesBasicasP3	,
					"FuncionesBasicasP4" => $reg -> 	FuncionesBasicasP4	,
					"estadoFuncionesBasicasP4" => $reg -> 	estadoFuncionesBasicasP4	,
					"FuncionesBasicasP5" => $reg -> 	FuncionesBasicasP5	,
					"estadoFuncionesBasicasP5" => $reg -> 	estadoFuncionesBasicasP5	,
					"TotalFuncionesBasicas" => $reg -> 	TotalFuncionesBasicas	,
					"EstadoTotalFuncionesBasicas" => $reg -> 	EstadoTotalFuncionesBasicas	,
					"OrdenarPorUnNivel" => $reg -> 	OrdenarPorUnNivel	,
					"estadoOrdenarPorNivel" => $reg -> 	estadoOrdenarPorNivel	,
					"OrdenarPorDosNivel" => $reg -> 	OrdenarPorDosNivel	,
					"estadoOrdenarPorDosNivel" => $reg -> 	estadoOrdenarPorDosNivel	,
					"FiltrarPorUnNivel" => $reg -> 	FiltrarPorUnNivel	,
					"estadoFiltrarPorUnNivel" => $reg -> 	estadoFiltrarPorUnNivel	,
					"FiltrarPorDosNivel" => $reg -> 	FiltrarPorDosNivel	,
					"estadoFiltrarPorDosNivel" => $reg -> 	estadoFiltrarPorDosNivel	,
					"TablaDinamicaP10" => $reg -> 	TablaDinamicaP10	,
					"estadoFuncionesBasicasP10" => $reg -> 	estadoFuncionesBasicasP10	,
					"TablaDinamicaP11" => $reg -> 	TablaDinamicaP11	,
					"estadoFuncionesBasicasP11" => $reg -> 	estadoFuncionesBasicasP11	,
					"TablaDinamicaP12" => $reg -> 	TablaDinamicaP12	,
					"estadoFuncionesBasicasP12" => $reg -> 	estadoFuncionesBasicasP12	,
					"TablaDinamicaP13" => $reg -> 	TablaDinamicaP13	,
					"estadoFuncionesBasicasP13" => $reg -> 	estadoFuncionesBasicasP13	,
					"tablaDinamica" => $reg -> 	tablaDinamica	,
					"estadoTablaDinamica" => $reg -> 	estadoTablaDinamica	,
					"siSencillo" => $reg -> 	siSencillo	,
					"estadosiSencillo" => $reg -> 	estadosiSencillo	,
					"siConcatenado" => $reg -> 	siConcatenado	,
					"estadoSiConcatenado" => $reg -> 	estadoSiConcatenado	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo	
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteRubricasExcelAdmisionTP':	
			$rspta = $reportes -> reporteRubricasExcel('TP','ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"FuncionesBasicasP1" => $reg -> 	FuncionesBasicasP1	,
					"estadoFuncionesBasicasP1" => $reg -> 	estadoFuncionesBasicasP1	,
					"FuncionesBasicasP2" => $reg -> 	FuncionesBasicasP2	,
					"estadoFuncionesBasicasP2" => $reg -> 	estadoFuncionesBasicasP2	,
					"FuncionesBasicasP3" => $reg -> 	FuncionesBasicasP3	,
					"estadoFuncionesBasicasP3" => $reg -> 	estadoFuncionesBasicasP3	,
					"FuncionesBasicasP4" => $reg -> 	FuncionesBasicasP4	,
					"estadoFuncionesBasicasP4" => $reg -> 	estadoFuncionesBasicasP4	,
					"FuncionesBasicasP5" => $reg -> 	FuncionesBasicasP5	,
					"estadoFuncionesBasicasP5" => $reg -> 	estadoFuncionesBasicasP5	,
					"TotalFuncionesBasicas" => $reg -> 	TotalFuncionesBasicas	,
					"EstadoTotalFuncionesBasicas" => $reg -> 	EstadoTotalFuncionesBasicas	,
					"OrdenarPorUnNivel" => $reg -> 	OrdenarPorUnNivel	,
					"estadoOrdenarPorNivel" => $reg -> 	estadoOrdenarPorNivel	,
					"OrdenarPorDosNivel" => $reg -> 	OrdenarPorDosNivel	,
					"estadoOrdenarPorDosNivel" => $reg -> 	estadoOrdenarPorDosNivel	,
					"FiltrarPorUnNivel" => $reg -> 	FiltrarPorUnNivel	,
					"estadoFiltrarPorUnNivel" => $reg -> 	estadoFiltrarPorUnNivel	,
					"FiltrarPorDosNivel" => $reg -> 	FiltrarPorDosNivel	,
					"estadoFiltrarPorDosNivel" => $reg -> 	estadoFiltrarPorDosNivel	,
					"TablaDinamicaP10" => $reg -> 	TablaDinamicaP10	,
					"estadoFuncionesBasicasP10" => $reg -> 	estadoFuncionesBasicasP10	,
					"TablaDinamicaP11" => $reg -> 	TablaDinamicaP11	,
					"estadoFuncionesBasicasP11" => $reg -> 	estadoFuncionesBasicasP11	,
					"TablaDinamicaP12" => $reg -> 	TablaDinamicaP12	,
					"estadoFuncionesBasicasP12" => $reg -> 	estadoFuncionesBasicasP12	,
					"TablaDinamicaP13" => $reg -> 	TablaDinamicaP13	,
					"estadoFuncionesBasicasP13" => $reg -> 	estadoFuncionesBasicasP13	,
					"tablaDinamica" => $reg -> 	tablaDinamica	,
					"estadoTablaDinamica" => $reg -> 	estadoTablaDinamica	,
					"siSencillo" => $reg -> 	siSencillo	,
					"estadosiSencillo" => $reg -> 	estadosiSencillo	,
					"siConcatenado" => $reg -> 	siConcatenado	,
					"estadoSiConcatenado" => $reg -> 	estadoSiConcatenado	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo	
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteRubricasExcelEspolP':	
			$rspta = $reportes -> reporteRubricasExcel('P','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"FuncionesBasicasP1" => $reg -> 	FuncionesBasicasP1	,
					"estadoFuncionesBasicasP1" => $reg -> 	estadoFuncionesBasicasP1	,
					"FuncionesBasicasP2" => $reg -> 	FuncionesBasicasP2	,
					"estadoFuncionesBasicasP2" => $reg -> 	estadoFuncionesBasicasP2	,
					"FuncionesBasicasP3" => $reg -> 	FuncionesBasicasP3	,
					"estadoFuncionesBasicasP3" => $reg -> 	estadoFuncionesBasicasP3	,
					"FuncionesBasicasP4" => $reg -> 	FuncionesBasicasP4	,
					"estadoFuncionesBasicasP4" => $reg -> 	estadoFuncionesBasicasP4	,
					"FuncionesBasicasP5" => $reg -> 	FuncionesBasicasP5	,
					"estadoFuncionesBasicasP5" => $reg -> 	estadoFuncionesBasicasP5	,
					"TotalFuncionesBasicas" => $reg -> 	TotalFuncionesBasicas	,
					"EstadoTotalFuncionesBasicas" => $reg -> 	EstadoTotalFuncionesBasicas	,
					"OrdenarPorUnNivel" => $reg -> 	OrdenarPorUnNivel	,
					"estadoOrdenarPorNivel" => $reg -> 	estadoOrdenarPorNivel	,
					"OrdenarPorDosNivel" => $reg -> 	OrdenarPorDosNivel	,
					"estadoOrdenarPorDosNivel" => $reg -> 	estadoOrdenarPorDosNivel	,
					"FiltrarPorUnNivel" => $reg -> 	FiltrarPorUnNivel	,
					"estadoFiltrarPorUnNivel" => $reg -> 	estadoFiltrarPorUnNivel	,
					"FiltrarPorDosNivel" => $reg -> 	FiltrarPorDosNivel	,
					"estadoFiltrarPorDosNivel" => $reg -> 	estadoFiltrarPorDosNivel	,
					"TablaDinamicaP10" => $reg -> 	TablaDinamicaP10	,
					"estadoFuncionesBasicasP10" => $reg -> 	estadoFuncionesBasicasP10	,
					"TablaDinamicaP11" => $reg -> 	TablaDinamicaP11	,
					"estadoFuncionesBasicasP11" => $reg -> 	estadoFuncionesBasicasP11	,
					"TablaDinamicaP12" => $reg -> 	TablaDinamicaP12	,
					"estadoFuncionesBasicasP12" => $reg -> 	estadoFuncionesBasicasP12	,
					"TablaDinamicaP13" => $reg -> 	TablaDinamicaP13	,
					"estadoFuncionesBasicasP13" => $reg -> 	estadoFuncionesBasicasP13	,
					"tablaDinamica" => $reg -> 	tablaDinamica	,
					"estadoTablaDinamica" => $reg -> 	estadoTablaDinamica	,
					"siSencillo" => $reg -> 	siSencillo	,
					"estadosiSencillo" => $reg -> 	estadosiSencillo	,
					"siConcatenado" => $reg -> 	siConcatenado	,
					"estadoSiConcatenado" => $reg -> 	estadoSiConcatenado	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo	
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteRubricasExcelEspolTP':	
			$rspta = $reportes -> reporteRubricasExcel('TP','ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"nombres" => $reg -> 	nombres	,
					"apellidos" => $reg -> 	apellidos	,
					"email" => $reg -> 	email	,
					"matricula" => $reg -> 	matricula	,
					"cedula" => $reg -> 	cedula	,
					"sexo" => $reg -> 	sexo	,
					"carrera" => $reg -> 	carrera	,
					"tipoEstudiante" => $reg -> 	tipoEstudiante	,
					"cohorte" => $reg -> 	cohorte	,
					"franja" => $reg -> 	franja	,
					"paralelo" => $reg -> 	paralelo	,
					"docente" => $reg -> 	docente	,
					"FuncionesBasicasP1" => $reg -> 	FuncionesBasicasP1	,
					"estadoFuncionesBasicasP1" => $reg -> 	estadoFuncionesBasicasP1	,
					"FuncionesBasicasP2" => $reg -> 	FuncionesBasicasP2	,
					"estadoFuncionesBasicasP2" => $reg -> 	estadoFuncionesBasicasP2	,
					"FuncionesBasicasP3" => $reg -> 	FuncionesBasicasP3	,
					"estadoFuncionesBasicasP3" => $reg -> 	estadoFuncionesBasicasP3	,
					"FuncionesBasicasP4" => $reg -> 	FuncionesBasicasP4	,
					"estadoFuncionesBasicasP4" => $reg -> 	estadoFuncionesBasicasP4	,
					"FuncionesBasicasP5" => $reg -> 	FuncionesBasicasP5	,
					"estadoFuncionesBasicasP5" => $reg -> 	estadoFuncionesBasicasP5	,
					"TotalFuncionesBasicas" => $reg -> 	TotalFuncionesBasicas	,
					"EstadoTotalFuncionesBasicas" => $reg -> 	EstadoTotalFuncionesBasicas	,
					"OrdenarPorUnNivel" => $reg -> 	OrdenarPorUnNivel	,
					"estadoOrdenarPorNivel" => $reg -> 	estadoOrdenarPorNivel	,
					"OrdenarPorDosNivel" => $reg -> 	OrdenarPorDosNivel	,
					"estadoOrdenarPorDosNivel" => $reg -> 	estadoOrdenarPorDosNivel	,
					"FiltrarPorUnNivel" => $reg -> 	FiltrarPorUnNivel	,
					"estadoFiltrarPorUnNivel" => $reg -> 	estadoFiltrarPorUnNivel	,
					"FiltrarPorDosNivel" => $reg -> 	FiltrarPorDosNivel	,
					"estadoFiltrarPorDosNivel" => $reg -> 	estadoFiltrarPorDosNivel	,
					"TablaDinamicaP10" => $reg -> 	TablaDinamicaP10	,
					"estadoFuncionesBasicasP10" => $reg -> 	estadoFuncionesBasicasP10	,
					"TablaDinamicaP11" => $reg -> 	TablaDinamicaP11	,
					"estadoFuncionesBasicasP11" => $reg -> 	estadoFuncionesBasicasP11	,
					"TablaDinamicaP12" => $reg -> 	TablaDinamicaP12	,
					"estadoFuncionesBasicasP12" => $reg -> 	estadoFuncionesBasicasP12	,
					"TablaDinamicaP13" => $reg -> 	TablaDinamicaP13	,
					"estadoFuncionesBasicasP13" => $reg -> 	estadoFuncionesBasicasP13	,
					"tablaDinamica" => $reg -> 	tablaDinamica	,
					"estadoTablaDinamica" => $reg -> 	estadoTablaDinamica	,
					"siSencillo" => $reg -> 	siSencillo	,
					"estadosiSencillo" => $reg -> 	estadosiSencillo	,
					"siConcatenado" => $reg -> 	siConcatenado	,
					"estadoSiConcatenado" => $reg -> 	estadoSiConcatenado	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo	
				);
			}
			
			echo json_encode($data);
		break;



	}

?>