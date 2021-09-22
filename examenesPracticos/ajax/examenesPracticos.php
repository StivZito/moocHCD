<?php 
	require_once '../modelos/modeloExamenesPracticos.php';

	$modeloExamenesPracticos = new modeloExamenesPracticos();

	switch ($_GET["op"]){


		/////////////////////////////////////////////////////////Rubricas PPT
		case 'reporteRubricasPPTAdmisionP':	
			$rspta = $modeloExamenesPracticos -> reporteEP_RubricasPPT('ADMISION');
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
					"Tamanio" => $reg -> 	Tamanio,
					"EstadoTamanio3" => $reg -> 	EstadoTamanio3,
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
			$rspta = $modeloExamenesPracticos -> reporteEP_RubricasPPT('ESPOL');
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
					"Tamanio" => $reg -> 	Tamanio,
					"EstadoTamanio3" => $reg -> 	EstadoTamanio3,
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
			$rspta = $modeloExamenesPracticos -> reporteETP_RubricasPPT('ADMISION');
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
					"Tamanio" => $reg -> 	Tamanio,
					"EstadoTamanio3" => $reg -> 	EstadoTamanio3,
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
			$rspta = $modeloExamenesPracticos -> reporteETP_RubricasPPT('ESPOL');
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
					"Tamanio" => $reg -> 	Tamanio,
					"EstadoTamanio3" => $reg -> 	EstadoTamanio3,
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
			$rspta = $modeloExamenesPracticos -> reporteEP_RubricasWord('ADMISION');
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
					"Vinetas" => $reg -> 	Vinetas	,
					"EstadoVinetas" => $reg -> 	EstadoVinetas	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo	
				);
			}
			
			echo json_encode($data);
		break;		

		case 'reporteRubricasWordAdmisionTP':	
			$rspta = $modeloExamenesPracticos -> reporteETP_RubricasWord('ADMISION');
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
					"Vinetas" => $reg -> 	Vinetas	,
					"EstadoVinetas" => $reg -> 	EstadoVinetas	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;	

		case 'reporteRubricasWordEspolP':	
			$rspta = $modeloExamenesPracticos -> reporteEP_RubricasWord('ESPOL');
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
					"Vinetas" => $reg -> 	Vinetas	,
					"EstadoVinetas" => $reg -> 	EstadoVinetas	,
					"TotalGeneral" => $reg -> 	TotalGeneral	,
					"NivelConocimiento" => $reg -> 	NivelConocimiento	,
					"termino" => $reg -> 	termino	,
					"tipo" => $reg -> 	tipo
				);
			}
			
			echo json_encode($data);
		break;

		case 'reporteRubricasWordEspolTP':	
			$rspta = $modeloExamenesPracticos -> reporteETP_RubricasWord('ESPOL');
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
					"Vinetas" => $reg -> 	Vinetas	,
					"EstadoVinetas" => $reg -> 	EstadoVinetas	,
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
			$rspta = $modeloExamenesPracticos -> reporteEP_RubricasExcel('ADMISION');
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
			$rspta = $modeloExamenesPracticos -> reporteETP_RubricasExcel('ADMISION');
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
			$rspta = $modeloExamenesPracticos -> reporteEP_RubricasExcel('ESPOL');
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
			$rspta = $modeloExamenesPracticos -> reporteETP_RubricasExcel('ESPOL');
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

		/////////////////////////////////////////////////////////excel practico
		case 'num_estudiantes_registrados_excel_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_aprobados_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_aprobados_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_aprobados_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_reprobados_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_reprobados_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_reprobados_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_excel('NAPA');
			echo json_encode($rspta);
		break;

		case 'detalleP1ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP1ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP2ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP2ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP3ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP3ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP4ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP4ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP5ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP5ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP6ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP6ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP7ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP7ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP8ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP8ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP9ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP9ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP10ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP10ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP11ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP11ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP12ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP12ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP13ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP13ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP14ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP14ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP15ExcelP':
			$rspta = $modeloExamenesPracticos -> detalleP15ExcelP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		/////////////////////////////////////////////////////////excel teorico practico
		case 'num_estudiantes_registrados_excel_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_aprobados_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_aprobados_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_aprobados_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_reprobados_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_reprobados_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_excel_reprobados_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_excel('NAPA');
			echo json_encode($rspta);
		break;

		case 'detalleP1ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP1ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP2ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP2ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP3ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP3ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP4ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP4ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP5ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP5ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP6ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP6ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP7ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP7ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP8ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP8ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP9ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP9ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP10ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP10ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP11ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP11ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP12ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP12ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP13ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP13ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP14ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP14ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP15ExcelTP':
			$rspta = $modeloExamenesPracticos -> detalleP15ExcelTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje
				);
			}
			
			echo json_encode($data);
		break;

		/////////////////////////////////////////////////////////word practico
		case 'num_estudiantes_registrados_word_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_aprobados_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_aprobados_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_aprobados_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_reprobados_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_reprobados_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_reprobados_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_word('NAPA');
			echo json_encode($rspta);
		break;

		case 'detalleP1WordP':
			$rspta = $modeloExamenesPracticos -> detalleP1WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP2WordP':
			$rspta = $modeloExamenesPracticos -> detalleP2WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP3WordP':
			$rspta = $modeloExamenesPracticos -> detalleP3WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle1TWordP':
			$rspta = $modeloExamenesPracticos -> detalle1TWordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP4WordP':
			$rspta = $modeloExamenesPracticos -> detalleP4WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP5WordP':
			$rspta = $modeloExamenesPracticos -> detalleP5WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP6WordP':
			$rspta = $modeloExamenesPracticos -> detalleP6WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP7WordP':
			$rspta = $modeloExamenesPracticos -> detalleP7WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP8WordP':
			$rspta = $modeloExamenesPracticos -> detalleP8WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle2TWordP':
			$rspta = $modeloExamenesPracticos -> detalle2TWordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP9WordP':
			$rspta = $modeloExamenesPracticos -> detalleP9WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP10WordP':
			$rspta = $modeloExamenesPracticos -> detalleP10WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP11WordP':
			$rspta = $modeloExamenesPracticos -> detalleP11WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle3TWordP':
			$rspta = $modeloExamenesPracticos -> detalle3TWordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP12WordP':
			$rspta = $modeloExamenesPracticos -> detalleP12WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP13WordP':
			$rspta = $modeloExamenesPracticos -> detalleP13WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP14WordP':
			$rspta = $modeloExamenesPracticos -> detalleP14WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP15WordP':
			$rspta = $modeloExamenesPracticos -> detalleP15WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP16WordP':
			$rspta = $modeloExamenesPracticos -> detalleP16WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP17WordP':
			$rspta = $modeloExamenesPracticos -> detalleP17WordP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		/////////////////////////////////////////////////////////word teorico practico
		case 'num_estudiantes_registrados_word_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_aprobados_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_aprobados_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_aprobados_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_reprobados_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_reprobados_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_word_reprobados_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_word('NAPA');
			echo json_encode($rspta);
		break;

		case 'detalleP1WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP1WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP2WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP2WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP3WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP3WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle1TWordTP':
			$rspta = $modeloExamenesPracticos -> detalle1TWordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP4WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP4WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP5WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP5WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP6WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP6WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP7WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP7WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP8WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP8WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle2TWordTP':
			$rspta = $modeloExamenesPracticos -> detalle2TWordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP9WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP9WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP10WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP10WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP11WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP11WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle3TWordTP':
			$rspta = $modeloExamenesPracticos -> detalle3TWordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP12WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP12WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP13WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP13WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP14WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP14WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP15WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP15WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP16WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP16WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP17WordTP':
			$rspta = $modeloExamenesPracticos -> detalleP17WordTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;



		/////////////////////////////////////////////////////////ppt practico
		case 'num_estudiantes_registrados_ppt_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_aprobados_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_aprobados_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_aprobados_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_reprobados_p':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_reprobados_p_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_reprobados_p_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_p_ppt('NAPA');
			echo json_encode($rspta);
		break;

		case 'detalleP1PptP':
			$rspta = $modeloExamenesPracticos -> detalleP1PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP2PptP':
			$rspta = $modeloExamenesPracticos -> detalleP2PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP3PptP':
			$rspta = $modeloExamenesPracticos -> detalleP3PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle1TPptP':
			$rspta = $modeloExamenesPracticos -> detalle1TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP4PptP':
			$rspta = $modeloExamenesPracticos -> detalleP4PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP5PptP':
			$rspta = $modeloExamenesPracticos -> detalleP5PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalle2TPptP':
			$rspta = $modeloExamenesPracticos -> detalle2TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalleP6PptP':
			$rspta = $modeloExamenesPracticos -> detalleP6PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP7PptP':
			$rspta = $modeloExamenesPracticos -> detalleP7PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP8PptP':
			$rspta = $modeloExamenesPracticos -> detalleP8PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle3TPptP':
			$rspta = $modeloExamenesPracticos -> detalle3TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP9PptP':
			$rspta = $modeloExamenesPracticos -> detalleP9PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP10PptP':
			$rspta = $modeloExamenesPracticos -> detalleP10PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP11PptP':
			$rspta = $modeloExamenesPracticos -> detalleP11PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalleP12PptP':
			$rspta = $modeloExamenesPracticos -> detalleP12PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP13PptP':
			$rspta = $modeloExamenesPracticos -> detalleP13PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalle4TPptP':
			$rspta = $modeloExamenesPracticos -> detalle4TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP14PptP':
			$rspta = $modeloExamenesPracticos -> detalleP14PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP15PptP':
			$rspta = $modeloExamenesPracticos -> detalleP15PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP16PptP':
			$rspta = $modeloExamenesPracticos -> detalleP16PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP17PptP':
			$rspta = $modeloExamenesPracticos -> detalleP17PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP18PptP':
			$rspta = $modeloExamenesPracticos -> detalleP18PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle5TPptP':
			$rspta = $modeloExamenesPracticos -> detalle5TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalleP19PptP':
			$rspta = $modeloExamenesPracticos -> detalleP19PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP20PptP':
			$rspta = $modeloExamenesPracticos -> detalleP20PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP21PptP':
			$rspta = $modeloExamenesPracticos -> detalleP21PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle6TPptP':
			$rspta = $modeloExamenesPracticos -> detalle6TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP22PptP':
			$rspta = $modeloExamenesPracticos -> detalleP22PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP23PptP':
			$rspta = $modeloExamenesPracticos -> detalleP23PptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle7TPptP':
			$rspta = $modeloExamenesPracticos -> detalle7TPptP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		/////////////////////////////////////////////////////////ppt teorico practico
		case 'num_estudiantes_registrados_ppt_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('T');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('TE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('TA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_aprobados_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('AP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_aprobados_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('APE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_aprobados_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('APA');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_reprobados_tp':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('NAP');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_reprobados_tp_espol':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('NAPE');
			echo json_encode($rspta);
		break;

		case 'num_estudiantes_registrados_ppt_reprobados_tp_admision':
			$rspta = $modeloExamenesPracticos -> num_est_registrados_tp_ppt('NAPA');
			echo json_encode($rspta);
		break;

		case 'detalleP1PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP1PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP2PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP2PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP3PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP3PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle1TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle1TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP4PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP4PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP5PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP5PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalle2TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle2TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalleP6PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP6PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP7PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP7PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP8PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP8PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle3TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle3TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP9PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP9PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP10PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP10PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP11PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP11PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalleP12PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP12PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP13PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP13PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalle4TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle4TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP14PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP14PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP15PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP15PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP16PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP16PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP17PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP17PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP18PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP18PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle5TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle5TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;


		case 'detalleP19PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP19PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP20PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP20PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP21PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP21PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle6TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle6TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP22PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP22PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleP23PptTP':
			$rspta = $modeloExamenesPracticos -> detalleP23PptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalle7TPptTP':
			$rspta = $modeloExamenesPracticos -> detalle7TPptTP('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"pregunta" => $reg -> pregunta,
					"respuesta" => $reg -> respuesta,
					"espol" => $reg -> espol,
					"espol_porcentaje" => $reg -> espol_porcentaje,
					"admision" => $reg -> admision,
					"admision_porcentaje" => $reg -> admision_porcentaje,
					"estudiantes" => $reg -> estudiantes,
					"porcentaje" => $reg -> porcentaje,
					"nota" => $reg -> nota
				);
			}
			
			echo json_encode($data);
		break;

	}

?>