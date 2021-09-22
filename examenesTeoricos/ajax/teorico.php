<?php 
	require_once '../modelos/modeloTeorico.php';

	$teorico = new modeloTeorico();

	switch ($_GET["op"]){

		case 'num_est_registrados':
			$rspta = $teorico -> num_est_registrados();
			echo json_encode($rspta);
		break;

		case 'num_est_espol':
			$rspta = $teorico -> num_est_espol();
			echo json_encode($rspta);
		break;

		case 'num_est_admisiones':
			$rspta = $teorico -> num_est_admisiones();
			echo json_encode($rspta);
		break;

		case 'num_est_hicieron_espol':
			$rspta = $teorico -> num_est_hicieron_espol();
			echo json_encode($rspta);
		break;

		case 'num_est_hicieron_admision':
			$rspta = $teorico -> num_est_hicieron_admision();
			echo json_encode($rspta);
		break;
		
		case 'num_est_no_hicieron_espol':
			$rspta = $teorico -> num_est_no_hicieron_espol();
			echo json_encode($rspta);
		break;
		
		case 'num_est_no_hicieron_admision':
			$rspta = $teorico -> num_est_no_hicieron_admision();
			echo json_encode($rspta);
		break;

		case 'num_est_aprobaron_espol':
			$rspta = $teorico -> num_est_aprobaron_espol();
			echo json_encode($rspta);
		break;

		case 'num_est_aprobaron_admision':
			$rspta = $teorico -> num_est_aprobaron_admision();
			echo json_encode($rspta);
		break;
		
		case 'num_est_no_aprobaron_espol':
			$rspta = $teorico -> num_est_no_aprobaron_espol();
			echo json_encode($rspta);
		break;
		
		case 'num_est_no_aprobaron_admision':
			$rspta = $teorico -> num_est_no_aprobaron_admision();
			echo json_encode($rspta);
		break;


		case 'detalleNotasComputador':
			$rspta = $teorico -> examen_teorico_computador('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasCompu" => $reg -> preguntasEvaluadasCompu,
					"promedioAciertosCompu" => $reg -> promedioAciertosCompu,
					"promedioCalificacionCompu" => $reg -> promedioCalificacionCompu,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_computador_espol':
			$rspta = $teorico -> examen_teorico_computador('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasCompu" => $reg -> preguntasEvaluadasCompu,
					"promedioAciertosCompu" => $reg -> promedioAciertosCompu,
					"promedioCalificacionCompu" => $reg -> promedioCalificacionCompu,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_computador_admision':
			$rspta = $teorico -> examen_teorico_computador('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasCompu" => $reg -> preguntasEvaluadasCompu,
					"promedioAciertosCompu" => $reg -> promedioAciertosCompu,
					"promedioCalificacionCompu" => $reg -> promedioCalificacionCompu,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	


		case 'detalleNotasInternet':
			$rspta = $teorico -> examen_teorico_internet('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasInter" => $reg -> preguntasEvaluadasInter,
					"promedioaciertosInter" => $reg -> promedioaciertosInter,
					"promedioCalificacionInter" => $reg -> promedioCalificacionInter,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;


		case 'examen_teorico_internet_espol':
			$rspta = $teorico -> examen_teorico_internet('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasInter" => $reg -> preguntasEvaluadasInter,
					"promedioaciertosInter" => $reg -> promedioaciertosInter,
					"promedioCalificacionInter" => $reg -> promedioCalificacionInter,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_internet_admision':
			$rspta = $teorico -> examen_teorico_internet('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasInter" => $reg -> preguntasEvaluadasInter,
					"promedioaciertosInter" => $reg -> promedioaciertosInter,
					"promedioCalificacionInter" => $reg -> promedioCalificacionInter,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	


		case 'detalleNotasPPT':
			$rspta = $teorico -> examen_teorico_ppt('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasPPT" => $reg -> preguntasEvaluadasPPT,
					"promedioaciertosPPT" => $reg -> promedioaciertosPPT,
					"promedioCalificacionPPT" => $reg -> promedioCalificacionPPT,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'examen_teorico_ppt_espol':
			$rspta = $teorico -> examen_teorico_ppt('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasPPT" => $reg -> preguntasEvaluadasPPT,
					"promedioaciertosPPT" => $reg -> promedioaciertosPPT,
					"promedioCalificacionPPT" => $reg -> promedioCalificacionPPT,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_ppt_admision':
			$rspta = $teorico -> examen_teorico_ppt('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasPPT" => $reg -> preguntasEvaluadasPPT,
					"promedioaciertosPPT" => $reg -> promedioaciertosPPT,
					"promedioCalificacionPPT" => $reg -> promedioCalificacionPPT,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleNotasExcel':
			$rspta = $teorico -> examen_teorico_excel('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasExcel" => $reg -> preguntasEvaluadasExcel,
					"promedioaciertosExcel" => $reg -> promedioaciertosExcel,
					"promedioCalificacionExcel" => $reg -> promedioCalificacionExcel,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'examen_teorico_excel_espol':
			$rspta = $teorico -> examen_teorico_excel('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasExcel" => $reg -> preguntasEvaluadasExcel,
					"promedioaciertosExcel" => $reg -> promedioaciertosExcel,
					"promedioCalificacionExcel" => $reg -> promedioCalificacionExcel,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_excel_admision':
			$rspta = $teorico -> examen_teorico_excel('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasExcel" => $reg -> preguntasEvaluadasExcel,
					"promedioaciertosExcel" => $reg -> promedioaciertosExcel,
					"promedioCalificacionExcel" => $reg -> promedioCalificacionExcel,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'detalleNotasWord':
			$rspta = $teorico -> examen_teorico_word('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasWord" => $reg -> preguntasEvaluadasWord,
					"promedioaciertosWord" => $reg -> promedioaciertosWord,
					"promedioCalificacionWord" => $reg -> promedioCalificacionWord,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'examen_teorico_word_espol':
			$rspta = $teorico -> examen_teorico_word('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasWord" => $reg -> preguntasEvaluadasWord,
					"promedioaciertosWord" => $reg -> promedioaciertosWord,
					"promedioCalificacionExcel" => $reg -> promedioCalificacionWord,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_word_admision':
			$rspta = $teorico -> examen_teorico_word('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasWord" => $reg -> preguntasEvaluadasWord,
					"promedioaciertosWord" => $reg -> promedioaciertosWord,
					"promedioCalificacionWord" => $reg -> promedioCalificacionWord,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;

		case 'detalleNotasHerramientas':
			$rspta = $teorico -> examen_teorico_herramientas('TODO');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasColabora" => $reg -> preguntasEvaluadasColabora,
					"promedioaciertosColabora" => $reg -> promedioaciertosColabora,
					"promedioCalificacionColabora" => $reg -> promedioCalificacionColabora,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_herramientas_espol':
			$rspta = $teorico -> examen_teorico_herramientas('ESPOL');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasColabora" => $reg -> preguntasEvaluadasColabora,
					"promedioaciertosColabora" => $reg -> promedioaciertosColabora,
					"promedioCalificacionColabora" => $reg -> promedioCalificacionColabora,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;	

		case 'examen_teorico_herramientas_admision':
			$rspta = $teorico -> examen_teorico_herramientas('ADMISION');
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"tipoEstudiante" => $reg -> tipoEstudiante,
					"preguntasEvaluadasColabora" => $reg -> preguntasEvaluadasColabora,
					"promedioaciertosColabora" => $reg -> promedioaciertosColabora,
					"promedioCalificacionColabora" => $reg -> promedioCalificacionColabora,
					"menosDiezAciertos" => $reg -> menosDiezAciertos,
					"masDiezAciertos" => $reg -> masDiezAciertos,
					"totalEstudiantes" => $reg -> totalEstudiantes
				);
			}
			
			echo json_encode($data);
		break;


		case 'problemas_admision':	
			$rspta = $teorico -> problemas_individuales();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" =>  $reg -> id,
					"nombres" => $reg -> nombres,
					"apellidos" => $reg -> apellidos,
					"sexo" => $reg -> sexo,
					"email" => $reg -> email,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"grade" => $reg -> grade,
					"carrera" => $reg -> carrera,
					"c_p1" => $reg -> c_p1	,
					"c_p2" => $reg -> c_p2	,
					"c_p3" => $reg -> c_p3	,
					"c_p4" => $reg -> c_p4	,
					"c_p5" => $reg -> c_p5	,
					"c_p6" => $reg -> c_p6	,
					"c_p7" => $reg -> c_p7	,
					"c_p8" => $reg -> c_p8	,
					"c_p9" => $reg -> c_p9	,
					"c_p10" => $reg -> c_p10	,
					"c_p11" => $reg -> c_p11	,
					"c_p12" => $reg -> c_p12	,
					"c_p13" => $reg -> c_p13	,
					"c_p14" => $reg -> c_p14	,
					"c_p15" => $reg -> c_p15	,
					"c_p16" => $reg -> c_p16	,
					"c_p17" => $reg -> c_p17	,
					"c_p18" => $reg -> c_p18	,
					"c_p19" => $reg -> c_p19	,
					"c_p20" => $reg -> c_p20	,
					"c_p21" => $reg -> c_p21	,
					"c_p22" => $reg -> c_p22	,
					"c_p23" => $reg -> c_p23	,
					"c_p24" => $reg -> c_p24	,
					"c_p25" => $reg -> c_p25	,
					"c_p26" => $reg -> c_p26	,
					"c_p27" => $reg -> c_p27	,
					"c_p28" => $reg -> c_p28	,
					"c_p29" => $reg -> c_p29	,
					"c_p30" => $reg -> c_p30	,
					"c_p31" => $reg -> c_p31	,
					"c_p32" => $reg -> c_p32	,
					"c_p33" => $reg -> c_p33	,
					"c_p34" => $reg -> c_p34	,
					"c_p35" => $reg -> c_p35	,
					"c_p36" => $reg -> c_p36	,
					"c_p37" => $reg -> c_p37	,
					"c_p38" => $reg -> c_p38	,
					"c_p39" => $reg -> c_p39	,
					"c_p40" => $reg -> c_p40	,
					"c_p41" => $reg -> c_p41	,
					"c_p42" => $reg -> c_p42	,
					"c_p43" => $reg -> c_p43	,
					"c_p44" => $reg -> c_p44	,
					"c_p45" => $reg -> c_p45	,
					"c_p46" => $reg -> c_p46	,
					"c_p47" => $reg -> c_p47	,
					"c_p48" => $reg -> c_p48	,
					"c_p49" => $reg -> c_p49	,
					"c_p50" => $reg -> c_p50	,
					"c_p51" => $reg -> c_p51	,
					"c_p52" => $reg -> c_p52	,
					"c_p53" => $reg -> c_p53	,
					"c_p54" => $reg -> c_p54	,
					"c_p55" => $reg -> c_p55	,
					"c_p56" => $reg -> c_p56	,
					"c_p57" => $reg -> c_p57	,
					"c_p58" => $reg -> c_p58	,
					"c_p59" => $reg -> c_p59	,
					"c_p60" => $reg -> c_p60	,
					"c_p61" => $reg -> c_p61	,
					"c_p62" => $reg -> c_p62	,
					"c_p63" => $reg -> c_p63	,
					"c_p64" => $reg -> c_p64	,
					"c_p65" => $reg -> c_p65	,
					"c_p66" => $reg -> c_p66	,
					"c_p67" => $reg -> c_p67	,
					"c_p68" => $reg -> c_p68	,
					"c_p69" => $reg -> c_p69	,
					"c_p70" => $reg -> c_p70	,
					"c_p71" => $reg -> c_p71	,
					"c_p72" => $reg -> c_p72	,
					"c_p73" => $reg -> c_p73	,
					"c_p74" => $reg -> c_p74	,
					"c_p75" => $reg -> c_p75	,
					"c_p76" => $reg -> c_p76	,
					"c_p77" => $reg -> c_p77	,
					"c_p78" => $reg -> c_p78	,
					"c_p79" => $reg -> c_p79	,
					"c_p80" => $reg -> c_p80	,
					"c_p81" => $reg -> c_p81	,
					"c_p82" => $reg -> c_p82	,
					"c_p83" => $reg -> c_p83	,
					"c_p84" => $reg -> c_p84	,
					"c_p85" => $reg -> c_p85	,
					"c_p86" => $reg -> c_p86	,
					"c_p87" => $reg -> c_p87	,
					"c_p88" => $reg -> c_p88	,
					"c_p89" => $reg -> c_p89	,
					"c_p90" => $reg -> c_p90	,
					"c_p91" => $reg -> c_p91	,
					"c_p92" => $reg -> c_p92	,
					"c_p93" => $reg -> c_p93	,
					"c_p94" => $reg -> c_p94	,
					"c_p95" => $reg -> c_p95	,
					"c_p96" => $reg -> c_p96	,
					"c_p97" => $reg -> c_p97	,
					"c_p98" => $reg -> c_p98	,
					"c_p99" => $reg -> c_p99	,
					"c_p100" => $reg -> c_p100	,
					"c_p101" => $reg -> c_p101	,
					"c_p102" => $reg -> c_p102	,
					"c_p103" => $reg -> c_p103	,
					"c_p104" => $reg -> c_p104	,
					"i_p1" => $reg -> i_p1	,
					"i_p2" => $reg -> i_p2	,
					"i_p3" => $reg -> i_p3	,
					"i_p4" => $reg -> i_p4	,
					"i_p5" => $reg -> i_p5	,
					"i_p6" => $reg -> i_p6	,
					"i_p7" => $reg -> i_p7	,
					"i_p8" => $reg -> i_p8	,
					"i_p9" => $reg -> i_p9	,
					"i_p10" => $reg -> i_p10	,
					"i_p11" => $reg -> i_p11	,
					"i_p12" => $reg -> i_p12	,
					"i_p13" => $reg -> i_p13	,
					"i_p14" => $reg -> i_p14	,
					"i_p15" => $reg -> i_p15	,
					"i_p16" => $reg -> i_p16	,
					"i_p17" => $reg -> i_p17	,
					"i_p18" => $reg -> i_p18	,
					"i_p19" => $reg -> i_p19	,
					"i_p20" => $reg -> i_p20	,
					"i_p21" => $reg -> i_p21	,
					"i_p22" => $reg -> i_p22	,
					"i_p23" => $reg -> i_p23	,
					"i_p24" => $reg -> i_p24	,
					"i_p25" => $reg -> i_p25	,
					"i_p26" => $reg -> i_p26	,
					"i_p27" => $reg -> i_p27	,
					"i_p28" => $reg -> i_p28	,
					"i_p29" => $reg -> i_p29	,
					"i_p30" => $reg -> i_p30	,
					"i_p31" => $reg -> i_p31	,
					"i_p32" => $reg -> i_p32	,
					"i_p33" => $reg -> i_p33	,
					"i_p34" => $reg -> i_p34	,
					"i_p35" => $reg -> i_p35	,
					"i_p36" => $reg -> i_p36	,
					"i_p37" => $reg -> i_p37	,
					"i_p38" => $reg -> i_p38	,
					"i_p39" => $reg -> i_p39	,
					"i_p40" => $reg -> i_p40	,
					"i_p41" => $reg -> i_p41	,
					"i_p42" => $reg -> i_p42	,
					"i_p43" => $reg -> i_p43	,
					"i_p44" => $reg -> i_p44	,
					"i_p45" => $reg -> i_p45	,
					"i_p46" => $reg -> i_p46	,
					"i_p47" => $reg -> i_p47	,
					"i_p48" => $reg -> i_p48	,
					"i_p49" => $reg -> i_p49	,
					"i_p50" => $reg -> i_p50	,
					"i_p51" => $reg -> i_p51	,
					"i_p52" => $reg -> i_p52	,
					"i_p53" => $reg -> i_p53	,
					"i_p54" => $reg -> i_p54	,
					"i_p55" => $reg -> i_p55	,
					"i_p56" => $reg -> i_p56	,
					"i_p57" => $reg -> i_p57	,
					"i_p58" => $reg -> i_p58	,
					"i_p59" => $reg -> i_p59	,
					"i_p60" => $reg -> i_p60	,
					"i_p61" => $reg -> i_p61	,
					"i_p62" => $reg -> i_p62	,
					"i_p63" => $reg -> i_p63	,
					"i_p64" => $reg -> i_p64	,
					"i_p65" => $reg -> i_p65	,
					"i_p66" => $reg -> i_p66	,
					"i_p67" => $reg -> i_p67	,
					"i_p68" => $reg -> i_p68	,
					"i_p69" => $reg -> i_p69	,
					"i_p70" => $reg -> i_p70	,
					"i_p71" => $reg -> i_p71	,
					"i_p72" => $reg -> i_p72	,
					"i_p73" => $reg -> i_p73	,
					"i_p74" => $reg -> i_p74	,
					"i_p75" => $reg -> i_p75	,
					"i_p76" => $reg -> i_p76	,
					"i_p77" => $reg -> i_p77	,
					"i_p78" => $reg -> i_p78	,
					"i_p79" => $reg -> i_p79	,
					"i_p80" => $reg -> i_p80	,
					"i_p81" => $reg -> i_p81	,
					"i_p82" => $reg -> i_p82	,
					"i_p83" => $reg -> i_p83	,
					"i_p84" => $reg -> i_p84	,
					"i_p85" => $reg -> i_p85	,
					"i_p86" => $reg -> i_p86	,
					"i_p87" => $reg -> i_p87	,
					"i_p88" => $reg -> i_p88	,
					"i_p89" => $reg -> i_p89	,
					"i_p90" => $reg -> i_p90	,
					"i_p91" => $reg -> i_p91	,
					"i_p92" => $reg -> i_p92	,
					"i_p93" => $reg -> i_p93	,
					"i_p94" => $reg -> i_p94	,
					"i_p95" => $reg -> i_p95	,
					"i_p96" => $reg -> i_p96	,
					"i_p97" => $reg -> i_p97	,
					"i_p98" => $reg -> i_p98	,
					"i_p99" => $reg -> i_p99	,
					"i_p100" => $reg -> i_p100	,
					"i_p101" => $reg -> i_p101	,
					"i_p102" => $reg -> i_p102	,
					"i_p103" => $reg -> i_p103	,
					"i_p104" => $reg -> i_p104	,
					"i_p105" => $reg -> i_p105	,
					"i_p106" => $reg -> i_p106	,
					"i_p107" => $reg -> i_p107	,
					"i_p108" => $reg -> i_p108	,
					"p_p1" => $reg -> p_p1	,
					"p_p2" => $reg -> p_p2	,
					"p_p3" => $reg -> p_p3	,
					"p_p4" => $reg -> p_p4	,
					"p_p5" => $reg -> p_p5	,
					"p_p6" => $reg -> p_p6	,
					"p_p7" => $reg -> p_p7	,
					"p_p8" => $reg -> p_p8	,
					"p_p9" => $reg -> p_p9	,
					"p_p10" => $reg -> p_p10	,
					"p_p11" => $reg -> p_p11	,
					"p_p12" => $reg -> p_p12	,
					"p_p13" => $reg -> p_p13	,
					"p_p14" => $reg -> p_p14	,
					"p_p15" => $reg -> p_p15	,
					"p_p16" => $reg -> p_p16	,
					"p_p17" => $reg -> p_p17	,
					"p_p18" => $reg -> p_p18	,
					"p_p19" => $reg -> p_p19	,
					"p_p20" => $reg -> p_p20	,
					"p_p21" => $reg -> p_p21	,
					"p_p22" => $reg -> p_p22	,
					"p_p23" => $reg -> p_p23	,
					"p_p24" => $reg -> p_p24	,
					"p_p25" => $reg -> p_p25	,
					"p_p26" => $reg -> p_p26	,
					"p_p27" => $reg -> p_p27	,
					"p_p28" => $reg -> p_p28	,
					"p_p29" => $reg -> p_p29	,
					"p_p30" => $reg -> p_p30	,
					"p_p31" => $reg -> p_p31	,
					"p_p32" => $reg -> p_p32	,
					"p_p33" => $reg -> p_p33	,
					"p_p34" => $reg -> p_p34	,
					"p_p35" => $reg -> p_p35	,
					"p_p36" => $reg -> p_p36	,
					"p_p37" => $reg -> p_p37	,
					"p_p38" => $reg -> p_p38	,
					"p_p39" => $reg -> p_p39	,
					"p_p40" => $reg -> p_p40	,
					"p_p41" => $reg -> p_p41	,
					"p_p42" => $reg -> p_p42	,
					"p_p43" => $reg -> p_p43	,
					"p_p44" => $reg -> p_p44	,
					"p_p45" => $reg -> p_p45	,
					"p_p46" => $reg -> p_p46	,
					"p_p47" => $reg -> p_p47	,
					"p_p48" => $reg -> p_p48	,
					"p_p49" => $reg -> p_p49	,
					"p_p50" => $reg -> p_p50	,
					"p_p51" => $reg -> p_p51	,
					"p_p52" => $reg -> p_p52	,
					"p_p53" => $reg -> p_p53	,
					"p_p54" => $reg -> p_p54	,
					"p_p55" => $reg -> p_p55	,
					"p_p56" => $reg -> p_p56	,
					"p_p57" => $reg -> p_p57	,
					"p_p58" => $reg -> p_p58	,
					"p_p59" => $reg -> p_p59	,
					"p_p60" => $reg -> p_p60	,
					"p_p61" => $reg -> p_p61	,
					"p_p62" => $reg -> p_p62	,
					"p_p63" => $reg -> p_p63	,
					"p_p64" => $reg -> p_p64	,
					"p_p65" => $reg -> p_p65	,
					"p_p66" => $reg -> p_p66	,
					"p_p67" => $reg -> p_p67	,
					"p_p68" => $reg -> p_p68	,
					"p_p69" => $reg -> p_p69	,
					"p_p70" => $reg -> p_p70	,
					"p_p71" => $reg -> p_p71	,
					"p_p72" => $reg -> p_p72	,
					"p_p73" => $reg -> p_p73	,
					"p_p74" => $reg -> p_p74	,
					"p_p75" => $reg -> p_p75	,
					"p_p76" => $reg -> p_p76	,
					"p_p77" => $reg -> p_p77	,
					"p_p78" => $reg -> p_p78	,
					"p_p79" => $reg -> p_p79	,
					"p_p80" => $reg -> p_p80	,
					"p_p81" => $reg -> p_p81	,
					"p_p82" => $reg -> p_p82	,
					"p_p83" => $reg -> p_p83	,
					"p_p84" => $reg -> p_p84	,
					"p_p85" => $reg -> p_p85	,
					"p_p86" => $reg -> p_p86	,
					"e_p1" => $reg -> e_p1	,
					"e_p2" => $reg -> e_p2	,
					"e_p3" => $reg -> e_p3	,
					"e_p4" => $reg -> e_p4	,
					"e_p5" => $reg -> e_p5	,
					"e_p6" => $reg -> e_p6	,
					"e_p7" => $reg -> e_p7	,
					"e_p8" => $reg -> e_p8	,
					"e_p9" => $reg -> e_p9	,
					"e_p10" => $reg -> e_p10	,
					"e_p11" => $reg -> e_p11	,
					"e_p12" => $reg -> e_p12	,
					"e_p13" => $reg -> e_p13	,
					"e_p14" => $reg -> e_p14	,
					"e_p15" => $reg -> e_p15	,
					"e_p16" => $reg -> e_p16	,
					"e_p17" => $reg -> e_p17	,
					"e_p18" => $reg -> e_p18	,
					"e_p19" => $reg -> e_p19	,
					"e_p20" => $reg -> e_p20	,
					"e_p21" => $reg -> e_p21	,
					"e_p22" => $reg -> e_p22	,
					"e_p23" => $reg -> e_p23	,
					"e_p24" => $reg -> e_p24	,
					"e_p25" => $reg -> e_p25	,
					"e_p26" => $reg -> e_p26	,
					"e_p27" => $reg -> e_p27	,
					"e_p28" => $reg -> e_p28	,
					"e_p29" => $reg -> e_p29	,
					"e_p30" => $reg -> e_p30	,
					"e_p31" => $reg -> e_p31	,
					"e_p32" => $reg -> e_p32	,
					"e_p33" => $reg -> e_p33	,
					"e_p34" => $reg -> e_p34	,
					"e_p35" => $reg -> e_p35	,
					"e_p36" => $reg -> e_p36	,
					"e_p37" => $reg -> e_p37	,
					"e_p38" => $reg -> e_p38	,
					"e_p39" => $reg -> e_p39	,
					"e_p40" => $reg -> e_p40	,
					"e_p41" => $reg -> e_p41	,
					"e_p42" => $reg -> e_p42	,
					"e_p43" => $reg -> e_p43	,
					"e_p44" => $reg -> e_p44	,
					"e_p45" => $reg -> e_p45	,
					"e_p46" => $reg -> e_p46	,
					"e_p47" => $reg -> e_p47	,
					"e_p48" => $reg -> e_p48	,
					"e_p49" => $reg -> e_p49	,
					"e_p50" => $reg -> e_p50	,
					"e_p51" => $reg -> e_p51	,
					"e_p52" => $reg -> e_p52	,
					"e_p53" => $reg -> e_p53	,
					"e_p54" => $reg -> e_p54	,
					"e_p55" => $reg -> e_p55	,
					"e_p56" => $reg -> e_p56	,
					"e_p57" => $reg -> e_p57	,
					"e_p58" => $reg -> e_p58	,
					"e_p59" => $reg -> e_p59	,
					"e_p60" => $reg -> e_p60	,
					"e_p61" => $reg -> e_p61	,
					"e_p62" => $reg -> e_p62	,
					"e_p63" => $reg -> e_p63	,
					"e_p64" => $reg -> e_p64	,
					"e_p65" => $reg -> e_p65	,
					"e_p66" => $reg -> e_p66	,
					"e_p67" => $reg -> e_p67	,
					"e_p68" => $reg -> e_p68	,
					"e_p69" => $reg -> e_p69	,
					"e_p70" => $reg -> e_p70	,
					"e_p71" => $reg -> e_p71	,
					"e_p72" => $reg -> e_p72	,
					"e_p73" => $reg -> e_p73	,
					"e_p74" => $reg -> e_p74	,
					"e_p75" => $reg -> e_p75	,
					"e_p76" => $reg -> e_p76	,
					"e_p77" => $reg -> e_p77	,
					"e_p78" => $reg -> e_p78	,
					"e_p79" => $reg -> e_p79	,
					"e_p80" => $reg -> e_p80	,
					"e_p81" => $reg -> e_p81	,
					"e_p82" => $reg -> e_p82	,
					"e_p83" => $reg -> e_p83	,
					"e_p84" => $reg -> e_p84	,
					"e_p85" => $reg -> e_p85	,
					"e_p86" => $reg -> e_p86	,
					"e_p87" => $reg -> e_p87	,
					"e_p88" => $reg -> e_p88	,
					"e_p89" => $reg -> e_p89	,
					"w_p1" => $reg -> w_p1	,
					"w_p2" => $reg -> w_p2	,
					"w_p3" => $reg -> w_p3	,
					"w_p4" => $reg -> w_p4	,
					"w_p5" => $reg -> w_p5	,
					"w_p6" => $reg -> w_p6	,
					"w_p7" => $reg -> w_p7	,
					"w_p8" => $reg -> w_p8	,
					"w_p9" => $reg -> w_p9	,
					"w_p10" => $reg -> w_p10	,
					"w_p11" => $reg -> w_p11	,
					"w_p12" => $reg -> w_p12	,
					"w_p13" => $reg -> w_p13	,
					"w_p14" => $reg -> w_p14	,
					"w_p15" => $reg -> w_p15	,
					"w_p16" => $reg -> w_p16	,
					"w_p17" => $reg -> w_p17	,
					"w_p18" => $reg -> w_p18	,
					"w_p19" => $reg -> w_p19	,
					"w_p20" => $reg -> w_p20	,
					"w_p21" => $reg -> w_p21	,
					"w_p22" => $reg -> w_p22	,
					"w_p23" => $reg -> w_p23	,
					"w_p24" => $reg -> w_p24	,
					"w_p25" => $reg -> w_p25	,
					"w_p26" => $reg -> w_p26	,
					"w_p27" => $reg -> w_p27	,
					"w_p28" => $reg -> w_p28	,
					"w_p29" => $reg -> w_p29	,
					"w_p30" => $reg -> w_p30	,
					"w_p31" => $reg -> w_p31	,
					"w_p32" => $reg -> w_p32	,
					"w_p33" => $reg -> w_p33	,
					"w_p34" => $reg -> w_p34	,
					"w_p35" => $reg -> w_p35	,
					"w_p36" => $reg -> w_p36	,
					"w_p37" => $reg -> w_p37	,
					"w_p38" => $reg -> w_p38	,
					"w_p39" => $reg -> w_p39	,
					"w_p40" => $reg -> w_p40	,
					"w_p41" => $reg -> w_p41	,
					"w_p42" => $reg -> w_p42	,
					"w_p43" => $reg -> w_p43	,
					"w_p44" => $reg -> w_p44	,
					"w_p45" => $reg -> w_p45	,
					"w_p46" => $reg -> w_p46	,
					"w_p47" => $reg -> w_p47	,
					"w_p48" => $reg -> w_p48	,
					"w_p49" => $reg -> w_p49	,
					"w_p50" => $reg -> w_p50	,
					"w_p51" => $reg -> w_p51	,
					"w_p52" => $reg -> w_p52	,
					"w_p53" => $reg -> w_p53	,
					"w_p54" => $reg -> w_p54	,
					"w_p55" => $reg -> w_p55	,
					"w_p56" => $reg -> w_p56	,
					"w_p57" => $reg -> w_p57	,
					"w_p58" => $reg -> w_p58	,
					"w_p59" => $reg -> w_p59	,
					"w_p60" => $reg -> w_p60	,
					"w_p61" => $reg -> w_p61	,
					"w_p62" => $reg -> w_p62	,
					"w_p63" => $reg -> w_p63	,
					"w_p64" => $reg -> w_p64	,
					"w_p65" => $reg -> w_p65	,
					"w_p66" => $reg -> w_p66	,
					"w_p67" => $reg -> w_p67	,
					"w_p68" => $reg -> w_p68	,
					"w_p69" => $reg -> w_p69	,
					"w_p70" => $reg -> w_p70	,
					"w_p71" => $reg -> w_p71	,
					"w_p72" => $reg -> w_p72	,
					"w_p73" => $reg -> w_p73	,
					"w_p74" => $reg -> w_p74	,
					"w_p75" => $reg -> w_p75	,
					"w_p76" => $reg -> w_p76	,
					"w_p77" => $reg -> w_p77	,
					"w_p78" => $reg -> w_p78	,
					"w_p79" => $reg -> w_p79	,
					"w_p80" => $reg -> w_p80	,
					"w_p81" => $reg -> w_p81	,
					"w_p82" => $reg -> w_p82	,
					"w_p83" => $reg -> w_p83	,
					"w_p84" => $reg -> w_p84	,
					"w_p85" => $reg -> w_p85	,
					"w_p86" => $reg -> w_p86	,
					"k_p1" => $reg -> k_p1	,
					"k_p2" => $reg -> k_p2	,
					"k_p3" => $reg -> k_p3	,
					"k_p4" => $reg -> k_p4	,
					"k_p5" => $reg -> k_p5	,
					"k_p6" => $reg -> k_p6	,
					"k_p7" => $reg -> k_p7	,
					"k_p8" => $reg -> k_p8	,
					"k_p9" => $reg -> k_p9	,
					"k_p10" => $reg -> k_p10	,
					"k_p11" => $reg -> k_p11	,
					"k_p12" => $reg -> k_p12	,
					"k_p13" => $reg -> k_p13	,
					"k_p14" => $reg -> k_p14	,
					"k_p15" => $reg -> k_p15	,
					"k_p16" => $reg -> k_p16	,
					"k_p17" => $reg -> k_p17	,
					"k_p18" => $reg -> k_p18	,
					"k_p19" => $reg -> k_p19	,
					"k_p20" => $reg -> k_p20	,
					"k_p21" => $reg -> k_p21	,
					"k_p22" => $reg -> k_p22	,
					"k_p23" => $reg -> k_p23	,
					"k_p24" => $reg -> k_p24	,
					"k_p25" => $reg -> k_p25	,
					"k_p26" => $reg -> k_p26	,
					"k_p27" => $reg -> k_p27	,
					"k_p28" => $reg -> k_p28	,
					"k_p29" => $reg -> k_p29	,
					"k_p30" => $reg -> k_p30	,
					"k_p31" => $reg -> k_p31	,
					"k_p32" => $reg -> k_p32	,
					"k_p33" => $reg -> k_p33	,
					"k_p34" => $reg -> k_p34	,
					"k_p35" => $reg -> k_p35	,
					"k_p36" => $reg -> k_p36	,
					"k_p37" => $reg -> k_p37	,
					"k_p38" => $reg -> k_p38	,
					"k_p39" => $reg -> k_p39	,
					"k_p40" => $reg -> k_p40	,
					"k_p41" => $reg -> k_p41	,
					"k_p42" => $reg -> k_p42	,
					"k_p43" => $reg -> k_p43	,
					"k_p44" => $reg -> k_p44	,
					"k_p45" => $reg -> k_p45	,
					"k_p46" => $reg -> k_p46	,
					"k_p47" => $reg -> k_p47	,
					"k_p48" => $reg -> k_p48	,
					"k_p49" => $reg -> k_p49	,
					"k_p50" => $reg -> k_p50	,
					"k_p51" => $reg -> k_p51	,
					"k_p52" => $reg -> k_p52	
				);
			}
			
			echo json_encode($data);
		break;	

		case 'problemas_espol':	
			$rspta = $teorico -> problemas_individualesEspol();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" =>  $reg -> id,
					"nombres" => $reg -> nombres,
					"apellidos" => $reg -> apellidos,
					"sexo" => $reg -> sexo,
					"email" => $reg -> email,
					"matricula" => $reg -> matricula,
					"cedula" => $reg -> cedula,
					"grade" => $reg -> grade,
					"carrera" => $reg -> carrera,
					"c_p1" => $reg -> c_p1	,
					"c_p2" => $reg -> c_p2	,
					"c_p3" => $reg -> c_p3	,
					"c_p4" => $reg -> c_p4	,
					"c_p5" => $reg -> c_p5	,
					"c_p6" => $reg -> c_p6	,
					"c_p7" => $reg -> c_p7	,
					"c_p8" => $reg -> c_p8	,
					"c_p9" => $reg -> c_p9	,
					"c_p10" => $reg -> c_p10	,
					"c_p11" => $reg -> c_p11	,
					"c_p12" => $reg -> c_p12	,
					"c_p13" => $reg -> c_p13	,
					"c_p14" => $reg -> c_p14	,
					"c_p15" => $reg -> c_p15	,
					"c_p16" => $reg -> c_p16	,
					"c_p17" => $reg -> c_p17	,
					"c_p18" => $reg -> c_p18	,
					"c_p19" => $reg -> c_p19	,
					"c_p20" => $reg -> c_p20	,
					"c_p21" => $reg -> c_p21	,
					"c_p22" => $reg -> c_p22	,
					"c_p23" => $reg -> c_p23	,
					"c_p24" => $reg -> c_p24	,
					"c_p25" => $reg -> c_p25	,
					"c_p26" => $reg -> c_p26	,
					"c_p27" => $reg -> c_p27	,
					"c_p28" => $reg -> c_p28	,
					"c_p29" => $reg -> c_p29	,
					"c_p30" => $reg -> c_p30	,
					"c_p31" => $reg -> c_p31	,
					"c_p32" => $reg -> c_p32	,
					"c_p33" => $reg -> c_p33	,
					"c_p34" => $reg -> c_p34	,
					"c_p35" => $reg -> c_p35	,
					"c_p36" => $reg -> c_p36	,
					"c_p37" => $reg -> c_p37	,
					"c_p38" => $reg -> c_p38	,
					"c_p39" => $reg -> c_p39	,
					"c_p40" => $reg -> c_p40	,
					"c_p41" => $reg -> c_p41	,
					"c_p42" => $reg -> c_p42	,
					"c_p43" => $reg -> c_p43	,
					"c_p44" => $reg -> c_p44	,
					"c_p45" => $reg -> c_p45	,
					"c_p46" => $reg -> c_p46	,
					"c_p47" => $reg -> c_p47	,
					"c_p48" => $reg -> c_p48	,
					"c_p49" => $reg -> c_p49	,
					"c_p50" => $reg -> c_p50	,
					"c_p51" => $reg -> c_p51	,
					"c_p52" => $reg -> c_p52	,
					"c_p53" => $reg -> c_p53	,
					"c_p54" => $reg -> c_p54	,
					"c_p55" => $reg -> c_p55	,
					"c_p56" => $reg -> c_p56	,
					"c_p57" => $reg -> c_p57	,
					"c_p58" => $reg -> c_p58	,
					"c_p59" => $reg -> c_p59	,
					"c_p60" => $reg -> c_p60	,
					"c_p61" => $reg -> c_p61	,
					"c_p62" => $reg -> c_p62	,
					"c_p63" => $reg -> c_p63	,
					"c_p64" => $reg -> c_p64	,
					"c_p65" => $reg -> c_p65	,
					"c_p66" => $reg -> c_p66	,
					"c_p67" => $reg -> c_p67	,
					"c_p68" => $reg -> c_p68	,
					"c_p69" => $reg -> c_p69	,
					"c_p70" => $reg -> c_p70	,
					"c_p71" => $reg -> c_p71	,
					"c_p72" => $reg -> c_p72	,
					"c_p73" => $reg -> c_p73	,
					"c_p74" => $reg -> c_p74	,
					"c_p75" => $reg -> c_p75	,
					"c_p76" => $reg -> c_p76	,
					"c_p77" => $reg -> c_p77	,
					"c_p78" => $reg -> c_p78	,
					"c_p79" => $reg -> c_p79	,
					"c_p80" => $reg -> c_p80	,
					"c_p81" => $reg -> c_p81	,
					"c_p82" => $reg -> c_p82	,
					"c_p83" => $reg -> c_p83	,
					"c_p84" => $reg -> c_p84	,
					"c_p85" => $reg -> c_p85	,
					"c_p86" => $reg -> c_p86	,
					"c_p87" => $reg -> c_p87	,
					"c_p88" => $reg -> c_p88	,
					"c_p89" => $reg -> c_p89	,
					"c_p90" => $reg -> c_p90	,
					"c_p91" => $reg -> c_p91	,
					"c_p92" => $reg -> c_p92	,
					"c_p93" => $reg -> c_p93	,
					"c_p94" => $reg -> c_p94	,
					"c_p95" => $reg -> c_p95	,
					"c_p96" => $reg -> c_p96	,
					"c_p97" => $reg -> c_p97	,
					"c_p98" => $reg -> c_p98	,
					"c_p99" => $reg -> c_p99	,
					"c_p100" => $reg -> c_p100	,
					"c_p101" => $reg -> c_p101	,
					"c_p102" => $reg -> c_p102	,
					"c_p103" => $reg -> c_p103	,
					"c_p104" => $reg -> c_p104	,
					"i_p1" => $reg -> i_p1	,
					"i_p2" => $reg -> i_p2	,
					"i_p3" => $reg -> i_p3	,
					"i_p4" => $reg -> i_p4	,
					"i_p5" => $reg -> i_p5	,
					"i_p6" => $reg -> i_p6	,
					"i_p7" => $reg -> i_p7	,
					"i_p8" => $reg -> i_p8	,
					"i_p9" => $reg -> i_p9	,
					"i_p10" => $reg -> i_p10	,
					"i_p11" => $reg -> i_p11	,
					"i_p12" => $reg -> i_p12	,
					"i_p13" => $reg -> i_p13	,
					"i_p14" => $reg -> i_p14	,
					"i_p15" => $reg -> i_p15	,
					"i_p16" => $reg -> i_p16	,
					"i_p17" => $reg -> i_p17	,
					"i_p18" => $reg -> i_p18	,
					"i_p19" => $reg -> i_p19	,
					"i_p20" => $reg -> i_p20	,
					"i_p21" => $reg -> i_p21	,
					"i_p22" => $reg -> i_p22	,
					"i_p23" => $reg -> i_p23	,
					"i_p24" => $reg -> i_p24	,
					"i_p25" => $reg -> i_p25	,
					"i_p26" => $reg -> i_p26	,
					"i_p27" => $reg -> i_p27	,
					"i_p28" => $reg -> i_p28	,
					"i_p29" => $reg -> i_p29	,
					"i_p30" => $reg -> i_p30	,
					"i_p31" => $reg -> i_p31	,
					"i_p32" => $reg -> i_p32	,
					"i_p33" => $reg -> i_p33	,
					"i_p34" => $reg -> i_p34	,
					"i_p35" => $reg -> i_p35	,
					"i_p36" => $reg -> i_p36	,
					"i_p37" => $reg -> i_p37	,
					"i_p38" => $reg -> i_p38	,
					"i_p39" => $reg -> i_p39	,
					"i_p40" => $reg -> i_p40	,
					"i_p41" => $reg -> i_p41	,
					"i_p42" => $reg -> i_p42	,
					"i_p43" => $reg -> i_p43	,
					"i_p44" => $reg -> i_p44	,
					"i_p45" => $reg -> i_p45	,
					"i_p46" => $reg -> i_p46	,
					"i_p47" => $reg -> i_p47	,
					"i_p48" => $reg -> i_p48	,
					"i_p49" => $reg -> i_p49	,
					"i_p50" => $reg -> i_p50	,
					"i_p51" => $reg -> i_p51	,
					"i_p52" => $reg -> i_p52	,
					"i_p53" => $reg -> i_p53	,
					"i_p54" => $reg -> i_p54	,
					"i_p55" => $reg -> i_p55	,
					"i_p56" => $reg -> i_p56	,
					"i_p57" => $reg -> i_p57	,
					"i_p58" => $reg -> i_p58	,
					"i_p59" => $reg -> i_p59	,
					"i_p60" => $reg -> i_p60	,
					"i_p61" => $reg -> i_p61	,
					"i_p62" => $reg -> i_p62	,
					"i_p63" => $reg -> i_p63	,
					"i_p64" => $reg -> i_p64	,
					"i_p65" => $reg -> i_p65	,
					"i_p66" => $reg -> i_p66	,
					"i_p67" => $reg -> i_p67	,
					"i_p68" => $reg -> i_p68	,
					"i_p69" => $reg -> i_p69	,
					"i_p70" => $reg -> i_p70	,
					"i_p71" => $reg -> i_p71	,
					"i_p72" => $reg -> i_p72	,
					"i_p73" => $reg -> i_p73	,
					"i_p74" => $reg -> i_p74	,
					"i_p75" => $reg -> i_p75	,
					"i_p76" => $reg -> i_p76	,
					"i_p77" => $reg -> i_p77	,
					"i_p78" => $reg -> i_p78	,
					"i_p79" => $reg -> i_p79	,
					"i_p80" => $reg -> i_p80	,
					"i_p81" => $reg -> i_p81	,
					"i_p82" => $reg -> i_p82	,
					"i_p83" => $reg -> i_p83	,
					"i_p84" => $reg -> i_p84	,
					"i_p85" => $reg -> i_p85	,
					"i_p86" => $reg -> i_p86	,
					"i_p87" => $reg -> i_p87	,
					"i_p88" => $reg -> i_p88	,
					"i_p89" => $reg -> i_p89	,
					"i_p90" => $reg -> i_p90	,
					"i_p91" => $reg -> i_p91	,
					"i_p92" => $reg -> i_p92	,
					"i_p93" => $reg -> i_p93	,
					"i_p94" => $reg -> i_p94	,
					"i_p95" => $reg -> i_p95	,
					"i_p96" => $reg -> i_p96	,
					"i_p97" => $reg -> i_p97	,
					"i_p98" => $reg -> i_p98	,
					"i_p99" => $reg -> i_p99	,
					"i_p100" => $reg -> i_p100	,
					"i_p101" => $reg -> i_p101	,
					"i_p102" => $reg -> i_p102	,
					"i_p103" => $reg -> i_p103	,
					"i_p104" => $reg -> i_p104	,
					"i_p105" => $reg -> i_p105	,
					"i_p106" => $reg -> i_p106	,
					"i_p107" => $reg -> i_p107	,
					"i_p108" => $reg -> i_p108	,
					"p_p1" => $reg -> p_p1	,
					"p_p2" => $reg -> p_p2	,
					"p_p3" => $reg -> p_p3	,
					"p_p4" => $reg -> p_p4	,
					"p_p5" => $reg -> p_p5	,
					"p_p6" => $reg -> p_p6	,
					"p_p7" => $reg -> p_p7	,
					"p_p8" => $reg -> p_p8	,
					"p_p9" => $reg -> p_p9	,
					"p_p10" => $reg -> p_p10	,
					"p_p11" => $reg -> p_p11	,
					"p_p12" => $reg -> p_p12	,
					"p_p13" => $reg -> p_p13	,
					"p_p14" => $reg -> p_p14	,
					"p_p15" => $reg -> p_p15	,
					"p_p16" => $reg -> p_p16	,
					"p_p17" => $reg -> p_p17	,
					"p_p18" => $reg -> p_p18	,
					"p_p19" => $reg -> p_p19	,
					"p_p20" => $reg -> p_p20	,
					"p_p21" => $reg -> p_p21	,
					"p_p22" => $reg -> p_p22	,
					"p_p23" => $reg -> p_p23	,
					"p_p24" => $reg -> p_p24	,
					"p_p25" => $reg -> p_p25	,
					"p_p26" => $reg -> p_p26	,
					"p_p27" => $reg -> p_p27	,
					"p_p28" => $reg -> p_p28	,
					"p_p29" => $reg -> p_p29	,
					"p_p30" => $reg -> p_p30	,
					"p_p31" => $reg -> p_p31	,
					"p_p32" => $reg -> p_p32	,
					"p_p33" => $reg -> p_p33	,
					"p_p34" => $reg -> p_p34	,
					"p_p35" => $reg -> p_p35	,
					"p_p36" => $reg -> p_p36	,
					"p_p37" => $reg -> p_p37	,
					"p_p38" => $reg -> p_p38	,
					"p_p39" => $reg -> p_p39	,
					"p_p40" => $reg -> p_p40	,
					"p_p41" => $reg -> p_p41	,
					"p_p42" => $reg -> p_p42	,
					"p_p43" => $reg -> p_p43	,
					"p_p44" => $reg -> p_p44	,
					"p_p45" => $reg -> p_p45	,
					"p_p46" => $reg -> p_p46	,
					"p_p47" => $reg -> p_p47	,
					"p_p48" => $reg -> p_p48	,
					"p_p49" => $reg -> p_p49	,
					"p_p50" => $reg -> p_p50	,
					"p_p51" => $reg -> p_p51	,
					"p_p52" => $reg -> p_p52	,
					"p_p53" => $reg -> p_p53	,
					"p_p54" => $reg -> p_p54	,
					"p_p55" => $reg -> p_p55	,
					"p_p56" => $reg -> p_p56	,
					"p_p57" => $reg -> p_p57	,
					"p_p58" => $reg -> p_p58	,
					"p_p59" => $reg -> p_p59	,
					"p_p60" => $reg -> p_p60	,
					"p_p61" => $reg -> p_p61	,
					"p_p62" => $reg -> p_p62	,
					"p_p63" => $reg -> p_p63	,
					"p_p64" => $reg -> p_p64	,
					"p_p65" => $reg -> p_p65	,
					"p_p66" => $reg -> p_p66	,
					"p_p67" => $reg -> p_p67	,
					"p_p68" => $reg -> p_p68	,
					"p_p69" => $reg -> p_p69	,
					"p_p70" => $reg -> p_p70	,
					"p_p71" => $reg -> p_p71	,
					"p_p72" => $reg -> p_p72	,
					"p_p73" => $reg -> p_p73	,
					"p_p74" => $reg -> p_p74	,
					"p_p75" => $reg -> p_p75	,
					"p_p76" => $reg -> p_p76	,
					"p_p77" => $reg -> p_p77	,
					"p_p78" => $reg -> p_p78	,
					"p_p79" => $reg -> p_p79	,
					"p_p80" => $reg -> p_p80	,
					"p_p81" => $reg -> p_p81	,
					"p_p82" => $reg -> p_p82	,
					"p_p83" => $reg -> p_p83	,
					"p_p84" => $reg -> p_p84	,
					"p_p85" => $reg -> p_p85	,
					"p_p86" => $reg -> p_p86	,
					"e_p1" => $reg -> e_p1	,
					"e_p2" => $reg -> e_p2	,
					"e_p3" => $reg -> e_p3	,
					"e_p4" => $reg -> e_p4	,
					"e_p5" => $reg -> e_p5	,
					"e_p6" => $reg -> e_p6	,
					"e_p7" => $reg -> e_p7	,
					"e_p8" => $reg -> e_p8	,
					"e_p9" => $reg -> e_p9	,
					"e_p10" => $reg -> e_p10	,
					"e_p11" => $reg -> e_p11	,
					"e_p12" => $reg -> e_p12	,
					"e_p13" => $reg -> e_p13	,
					"e_p14" => $reg -> e_p14	,
					"e_p15" => $reg -> e_p15	,
					"e_p16" => $reg -> e_p16	,
					"e_p17" => $reg -> e_p17	,
					"e_p18" => $reg -> e_p18	,
					"e_p19" => $reg -> e_p19	,
					"e_p20" => $reg -> e_p20	,
					"e_p21" => $reg -> e_p21	,
					"e_p22" => $reg -> e_p22	,
					"e_p23" => $reg -> e_p23	,
					"e_p24" => $reg -> e_p24	,
					"e_p25" => $reg -> e_p25	,
					"e_p26" => $reg -> e_p26	,
					"e_p27" => $reg -> e_p27	,
					"e_p28" => $reg -> e_p28	,
					"e_p29" => $reg -> e_p29	,
					"e_p30" => $reg -> e_p30	,
					"e_p31" => $reg -> e_p31	,
					"e_p32" => $reg -> e_p32	,
					"e_p33" => $reg -> e_p33	,
					"e_p34" => $reg -> e_p34	,
					"e_p35" => $reg -> e_p35	,
					"e_p36" => $reg -> e_p36	,
					"e_p37" => $reg -> e_p37	,
					"e_p38" => $reg -> e_p38	,
					"e_p39" => $reg -> e_p39	,
					"e_p40" => $reg -> e_p40	,
					"e_p41" => $reg -> e_p41	,
					"e_p42" => $reg -> e_p42	,
					"e_p43" => $reg -> e_p43	,
					"e_p44" => $reg -> e_p44	,
					"e_p45" => $reg -> e_p45	,
					"e_p46" => $reg -> e_p46	,
					"e_p47" => $reg -> e_p47	,
					"e_p48" => $reg -> e_p48	,
					"e_p49" => $reg -> e_p49	,
					"e_p50" => $reg -> e_p50	,
					"e_p51" => $reg -> e_p51	,
					"e_p52" => $reg -> e_p52	,
					"e_p53" => $reg -> e_p53	,
					"e_p54" => $reg -> e_p54	,
					"e_p55" => $reg -> e_p55	,
					"e_p56" => $reg -> e_p56	,
					"e_p57" => $reg -> e_p57	,
					"e_p58" => $reg -> e_p58	,
					"e_p59" => $reg -> e_p59	,
					"e_p60" => $reg -> e_p60	,
					"e_p61" => $reg -> e_p61	,
					"e_p62" => $reg -> e_p62	,
					"e_p63" => $reg -> e_p63	,
					"e_p64" => $reg -> e_p64	,
					"e_p65" => $reg -> e_p65	,
					"e_p66" => $reg -> e_p66	,
					"e_p67" => $reg -> e_p67	,
					"e_p68" => $reg -> e_p68	,
					"e_p69" => $reg -> e_p69	,
					"e_p70" => $reg -> e_p70	,
					"e_p71" => $reg -> e_p71	,
					"e_p72" => $reg -> e_p72	,
					"e_p73" => $reg -> e_p73	,
					"e_p74" => $reg -> e_p74	,
					"e_p75" => $reg -> e_p75	,
					"e_p76" => $reg -> e_p76	,
					"e_p77" => $reg -> e_p77	,
					"e_p78" => $reg -> e_p78	,
					"e_p79" => $reg -> e_p79	,
					"e_p80" => $reg -> e_p80	,
					"e_p81" => $reg -> e_p81	,
					"e_p82" => $reg -> e_p82	,
					"e_p83" => $reg -> e_p83	,
					"e_p84" => $reg -> e_p84	,
					"e_p85" => $reg -> e_p85	,
					"e_p86" => $reg -> e_p86	,
					"e_p87" => $reg -> e_p87	,
					"e_p88" => $reg -> e_p88	,
					"e_p89" => $reg -> e_p89	,
					"w_p1" => $reg -> w_p1	,
					"w_p2" => $reg -> w_p2	,
					"w_p3" => $reg -> w_p3	,
					"w_p4" => $reg -> w_p4	,
					"w_p5" => $reg -> w_p5	,
					"w_p6" => $reg -> w_p6	,
					"w_p7" => $reg -> w_p7	,
					"w_p8" => $reg -> w_p8	,
					"w_p9" => $reg -> w_p9	,
					"w_p10" => $reg -> w_p10	,
					"w_p11" => $reg -> w_p11	,
					"w_p12" => $reg -> w_p12	,
					"w_p13" => $reg -> w_p13	,
					"w_p14" => $reg -> w_p14	,
					"w_p15" => $reg -> w_p15	,
					"w_p16" => $reg -> w_p16	,
					"w_p17" => $reg -> w_p17	,
					"w_p18" => $reg -> w_p18	,
					"w_p19" => $reg -> w_p19	,
					"w_p20" => $reg -> w_p20	,
					"w_p21" => $reg -> w_p21	,
					"w_p22" => $reg -> w_p22	,
					"w_p23" => $reg -> w_p23	,
					"w_p24" => $reg -> w_p24	,
					"w_p25" => $reg -> w_p25	,
					"w_p26" => $reg -> w_p26	,
					"w_p27" => $reg -> w_p27	,
					"w_p28" => $reg -> w_p28	,
					"w_p29" => $reg -> w_p29	,
					"w_p30" => $reg -> w_p30	,
					"w_p31" => $reg -> w_p31	,
					"w_p32" => $reg -> w_p32	,
					"w_p33" => $reg -> w_p33	,
					"w_p34" => $reg -> w_p34	,
					"w_p35" => $reg -> w_p35	,
					"w_p36" => $reg -> w_p36	,
					"w_p37" => $reg -> w_p37	,
					"w_p38" => $reg -> w_p38	,
					"w_p39" => $reg -> w_p39	,
					"w_p40" => $reg -> w_p40	,
					"w_p41" => $reg -> w_p41	,
					"w_p42" => $reg -> w_p42	,
					"w_p43" => $reg -> w_p43	,
					"w_p44" => $reg -> w_p44	,
					"w_p45" => $reg -> w_p45	,
					"w_p46" => $reg -> w_p46	,
					"w_p47" => $reg -> w_p47	,
					"w_p48" => $reg -> w_p48	,
					"w_p49" => $reg -> w_p49	,
					"w_p50" => $reg -> w_p50	,
					"w_p51" => $reg -> w_p51	,
					"w_p52" => $reg -> w_p52	,
					"w_p53" => $reg -> w_p53	,
					"w_p54" => $reg -> w_p54	,
					"w_p55" => $reg -> w_p55	,
					"w_p56" => $reg -> w_p56	,
					"w_p57" => $reg -> w_p57	,
					"w_p58" => $reg -> w_p58	,
					"w_p59" => $reg -> w_p59	,
					"w_p60" => $reg -> w_p60	,
					"w_p61" => $reg -> w_p61	,
					"w_p62" => $reg -> w_p62	,
					"w_p63" => $reg -> w_p63	,
					"w_p64" => $reg -> w_p64	,
					"w_p65" => $reg -> w_p65	,
					"w_p66" => $reg -> w_p66	,
					"w_p67" => $reg -> w_p67	,
					"w_p68" => $reg -> w_p68	,
					"w_p69" => $reg -> w_p69	,
					"w_p70" => $reg -> w_p70	,
					"w_p71" => $reg -> w_p71	,
					"w_p72" => $reg -> w_p72	,
					"w_p73" => $reg -> w_p73	,
					"w_p74" => $reg -> w_p74	,
					"w_p75" => $reg -> w_p75	,
					"w_p76" => $reg -> w_p76	,
					"w_p77" => $reg -> w_p77	,
					"w_p78" => $reg -> w_p78	,
					"w_p79" => $reg -> w_p79	,
					"w_p80" => $reg -> w_p80	,
					"w_p81" => $reg -> w_p81	,
					"w_p82" => $reg -> w_p82	,
					"w_p83" => $reg -> w_p83	,
					"w_p84" => $reg -> w_p84	,
					"w_p85" => $reg -> w_p85	,
					"w_p86" => $reg -> w_p86	,
					"k_p1" => $reg -> k_p1	,
					"k_p2" => $reg -> k_p2	,
					"k_p3" => $reg -> k_p3	,
					"k_p4" => $reg -> k_p4	,
					"k_p5" => $reg -> k_p5	,
					"k_p6" => $reg -> k_p6	,
					"k_p7" => $reg -> k_p7	,
					"k_p8" => $reg -> k_p8	,
					"k_p9" => $reg -> k_p9	,
					"k_p10" => $reg -> k_p10	,
					"k_p11" => $reg -> k_p11	,
					"k_p12" => $reg -> k_p12	,
					"k_p13" => $reg -> k_p13	,
					"k_p14" => $reg -> k_p14	,
					"k_p15" => $reg -> k_p15	,
					"k_p16" => $reg -> k_p16	,
					"k_p17" => $reg -> k_p17	,
					"k_p18" => $reg -> k_p18	,
					"k_p19" => $reg -> k_p19	,
					"k_p20" => $reg -> k_p20	,
					"k_p21" => $reg -> k_p21	,
					"k_p22" => $reg -> k_p22	,
					"k_p23" => $reg -> k_p23	,
					"k_p24" => $reg -> k_p24	,
					"k_p25" => $reg -> k_p25	,
					"k_p26" => $reg -> k_p26	,
					"k_p27" => $reg -> k_p27	,
					"k_p28" => $reg -> k_p28	,
					"k_p29" => $reg -> k_p29	,
					"k_p30" => $reg -> k_p30	,
					"k_p31" => $reg -> k_p31	,
					"k_p32" => $reg -> k_p32	,
					"k_p33" => $reg -> k_p33	,
					"k_p34" => $reg -> k_p34	,
					"k_p35" => $reg -> k_p35	,
					"k_p36" => $reg -> k_p36	,
					"k_p37" => $reg -> k_p37	,
					"k_p38" => $reg -> k_p38	,
					"k_p39" => $reg -> k_p39	,
					"k_p40" => $reg -> k_p40	,
					"k_p41" => $reg -> k_p41	,
					"k_p42" => $reg -> k_p42	,
					"k_p43" => $reg -> k_p43	,
					"k_p44" => $reg -> k_p44	,
					"k_p45" => $reg -> k_p45	,
					"k_p46" => $reg -> k_p46	,
					"k_p47" => $reg -> k_p47	,
					"k_p48" => $reg -> k_p48	,
					"k_p49" => $reg -> k_p49	,
					"k_p50" => $reg -> k_p50	,
					"k_p51" => $reg -> k_p51	,
					"k_p52" => $reg -> k_p52	
				);
			}
			
			echo json_encode($data);
		break;	

		case 'notas_admision':	
			$rspta = $teorico -> notas_admision();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"Email" => $reg -> Email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"hizoExamen" => $reg -> hizoExamen ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"caliObtenidaCompu" => $reg -> caliObtenidaCompu ,
					"caliObtenidaInter" => $reg -> caliObtenidaInter ,
					"caliObtenidaPPT" => $reg -> caliObtenidaPPT ,
					"caliObtenidaExcel" => $reg -> caliObtenidaExcel ,
					"caliObtenidaWord" => $reg -> caliObtenidaWord ,
					"caliObtenidaColabora" => $reg -> caliObtenidaColabora ,
					"calificacionTotal" => $reg -> calificacionTotal ,
					"sinResponderCompu" => $reg -> sinResponderCompu ,
					"aciertosCompu" => $reg -> aciertosCompu ,
					"NoaciertosCompu" => $reg -> NoaciertosCompu ,
					"preguntasEvaluadasCompu" => $reg -> preguntasEvaluadasCompu ,
					"sinResponderInter" => $reg -> sinResponderInter ,
					"aciertosInter" => $reg -> aciertosInter ,
					"NoaciertosInter" => $reg -> NoaciertosInter ,
					"preguntasEvaluadasInter" => $reg -> preguntasEvaluadasInter ,
					"sinResponderPPT" => $reg -> sinResponderPPT ,
					"aciertosPPT" => $reg -> aciertosPPT ,
					"NoaciertosPPT" => $reg -> NoaciertosPPT ,
					"preguntasEvaluadasPPT" => $reg -> preguntasEvaluadasPPT ,
					"sinResponderExcel" => $reg -> sinResponderExcel ,
					"aciertosExcel" => $reg -> aciertosExcel ,
					"NoaciertosExcel" => $reg -> NoaciertosExcel,
					"preguntasEvaluadasExcel" => $reg -> preguntasEvaluadasExcel ,
					"sinResponderWord" => $reg -> sinResponderWord ,
					"aciertosWord" => $reg -> aciertosWord ,
					"NoaciertosWord" => $reg -> NoaciertosWord ,
					"preguntasEvaluadasWord" => $reg -> preguntasEvaluadasWord ,
					"sinResponderColabora" => $reg -> sinResponderColabora ,
					"aciertosColabora" => $reg -> aciertosColabora ,
					"NoaciertosColabora" => $reg -> NoaciertosColabora ,
					"preguntasEvaluadasColabora" => $reg -> preguntasEvaluadasColabora ,
					"nivelConocimientoComputador" => $reg -> nivelConocimientoComputador ,
					"nivelConocimientoInter" => $reg -> nivelConocimientoInter ,
					"nivelConocimientoPPT" => $reg -> nivelConocimientoPPT ,
					"nivelConocimientoExcel" => $reg -> nivelConocimientoExcel ,
					"nivelConocimientoWord" => $reg -> nivelConocimientoWord ,
					"nivelConocimientoColabora" => $reg -> nivelConocimientoColabora
				);
			}
			
			echo json_encode($data);
		break;	

		case 'notas_espol':	
			$rspta = $teorico -> notas_espol();
			$data = Array();
			while($reg = $rspta -> fetch_object()){
				$data[] = array(
					"id" => $reg -> id,
					"nombres" => $reg -> nombres, 
					"apellidos" => $reg -> apellidos ,
					"sexo" => $reg -> sexo ,
					"Email" => $reg -> Email, 
					"matricula" => $reg -> matricula ,
					"cedula" => $reg -> cedula ,
					"hizoExamen" => $reg -> hizoExamen ,
					"grade" => $reg -> grade ,
					"carrera" => $reg -> carrera ,
					"caliObtenidaCompu" => $reg -> caliObtenidaCompu ,
					"caliObtenidaInter" => $reg -> caliObtenidaInter ,
					"caliObtenidaPPT" => $reg -> caliObtenidaPPT ,
					"caliObtenidaExcel" => $reg -> caliObtenidaExcel ,
					"caliObtenidaWord" => $reg -> caliObtenidaWord ,
					"caliObtenidaColabora" => $reg -> caliObtenidaColabora ,
					"calificacionTotal" => $reg -> calificacionTotal ,
					"sinResponderCompu" => $reg -> sinResponderCompu ,
					"aciertosCompu" => $reg -> aciertosCompu ,
					"NoaciertosCompu" => $reg -> NoaciertosCompu ,
					"preguntasEvaluadasCompu" => $reg -> preguntasEvaluadasCompu ,
					"sinResponderInter" => $reg -> sinResponderInter ,
					"aciertosInter" => $reg -> aciertosInter ,
					"NoaciertosInter" => $reg -> NoaciertosInter ,
					"preguntasEvaluadasInter" => $reg -> preguntasEvaluadasInter ,
					"sinResponderPPT" => $reg -> sinResponderPPT ,
					"aciertosPPT" => $reg -> aciertosPPT ,
					"NoaciertosPPT" => $reg -> NoaciertosPPT ,
					"preguntasEvaluadasPPT" => $reg -> preguntasEvaluadasPPT ,
					"sinResponderExcel" => $reg -> sinResponderExcel ,
					"aciertosExcel" => $reg -> aciertosExcel ,
					"NoaciertosExcel" => $reg -> NoaciertosExcel,
					"preguntasEvaluadasExcel" => $reg -> preguntasEvaluadasExcel ,
					"sinResponderWord" => $reg -> sinResponderWord ,
					"aciertosWord" => $reg -> aciertosWord ,
					"NoaciertosWord" => $reg -> NoaciertosWord ,
					"preguntasEvaluadasWord" => $reg -> preguntasEvaluadasWord ,
					"sinResponderColabora" => $reg -> sinResponderColabora ,
					"aciertosColabora" => $reg -> aciertosColabora ,
					"NoaciertosColabora" => $reg -> NoaciertosColabora ,
					"preguntasEvaluadasColabora" => $reg -> preguntasEvaluadasColabora ,
					"nivelConocimientoComputador" => $reg -> nivelConocimientoComputador ,
					"nivelConocimientoInter" => $reg -> nivelConocimientoInter ,
					"nivelConocimientoPPT" => $reg -> nivelConocimientoPPT ,
					"nivelConocimientoExcel" => $reg -> nivelConocimientoExcel ,
					"nivelConocimientoWord" => $reg -> nivelConocimientoWord ,
					"nivelConocimientoColabora" => $reg -> nivelConocimientoColabora
				);
			}
			
			echo json_encode($data);
		break;		

	}

?>