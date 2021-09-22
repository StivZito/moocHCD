<?php  
	require '../config/conexion.php';

	/**
	 * 
	 */
	class modeloTeorico
	{
		public function __construct(){

		}	

		public function num_est_registrados(){
			$sql = "SELECT count(StudentID) as num_est_registrados FROM reporteETP_examenTeorico";
			return ejecutarConsultaSimpleFila($sql);
		}

		public function num_est_espol(){
			$sql = "SELECT COUNT(StudentID) as num_est_espol FROM reporteETP_examenTeorico WHERE tipoEstudiante = 'ESPOL'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_admisiones(){
			$sql = "SELECT COUNT(StudentID) as num_est_admisiones FROM reporteETP_examenTeorico WHERE tipoEstudiante = 'ADMISION'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_hicieron_espol(){
			$sql = "SELECT sum(case when hizoExamen = 'SI' then 1 else 0 end) as num_est_hicieron_espol
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ESPOL'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_hicieron_admision(){
			$sql = "SELECT sum(case when hizoExamen = 'SI' then 1 else 0 end) as num_est_hicieron_admision
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ADMISION'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_no_hicieron_espol(){
			$sql = "SELECT sum(case when hizoExamen = 'SI' then 0 else 1 end) as num_est_no_hicieron_espol
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ESPOL'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_no_hicieron_admision(){
			$sql = "SELECT sum(case when hizoExamen = 'SI' then 0 else 1 end) as num_est_no_hicieron_admision
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ADMISION'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_aprobaron_espol(){
			$sql = "SELECT sum(case when calificacionTotal >=  60 then 1 else 0 end) as num_est_aprobaron_espol
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ESPOL'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_aprobaron_admision(){
			$sql = "SELECT sum(case when calificacionTotal >=  60 then 1 else 0 end) as num_est_aprobaron_admision
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ADMISION'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_no_aprobaron_espol(){
			$sql = "SELECT sum(case when calificacionTotal >=  60 then 0 else 1 end) as num_est_no_aprobaron_espol
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ESPOL' and hizoExamen = 'SI'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function num_est_no_aprobaron_admision(){
			$sql = "SELECT sum(case when calificacionTotal >=  60 then 0 else 1 end) as num_est_no_aprobaron_admision
                    from reporteETP_examenTeorico
                    WHERE tipoEstudiante = 'ADMISION' and hizoExamen = 'SI'";
			return ejecutarConsultaSimpleFila($sql);	
		}

		public function examen_teorico_computador($tipoEstudiante){
			if ($tipoEstudiante == "TODO")
			{
				$sql = "SELECT
				        tipoEstudiante,
						cast(AVG(preguntasEvaluadasCompu) as decimal(18,0)) as preguntasEvaluadasCompu,
					    cast(AVG(aciertosCompu) as decimal(18,2)) as promedioAciertosCompu, 
					    cast(AVG(caliObtenidaCompu) as decimal(18,2)) as promedioCalificacionCompu,
					    sum(case when aciertosCompu <  10 then 1 else 0 end) as menosDiezAciertos,
					    sum(case when aciertosCompu >= 10 then 1 else 0 end) as masDiezAciertos,
					    count(tipoEstudiante) as totalEstudiantes
						from reporteETP_examenTeorico
						group by tipoEstudiante";
			} else {
				$sql = "SELECT
				        tipoEstudiante,
						cast(AVG(preguntasEvaluadasCompu) as decimal(18,0)) as preguntasEvaluadasCompu,
					    cast(AVG(aciertosCompu) as decimal(18,2)) as promedioAciertosCompu, 
					    cast(AVG(caliObtenidaCompu) as decimal(18,2)) as promedioCalificacionCompu,
					    sum(case when aciertosCompu <  10 then 1 else 0 end) as menosDiezAciertos,
					    sum(case when aciertosCompu >= 10 then 1 else 0 end) as masDiezAciertos,
					    count(tipoEstudiante) as totalEstudiantes
						from reporteETP_examenTeorico
						where tipoEstudiante='".$tipoEstudiante."' group by tipoEstudiante";
			}

			return ejecutarConsulta($sql);	
		}

		public function examen_teorico_internet($tipoEstudiante){
			if ($tipoEstudiante == "TODO")
			{
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasInter) as decimal(18,0)) as preguntasEvaluadasInter,
				        cast(AVG(aciertosInter) as decimal(18,2)) as promedioaciertosInter, 
				        cast(AVG(caliObtenidaInter) as decimal(18,2)) as promedioCalificacionInter,
				        sum(case when aciertosInter <  10 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosInter >= 10 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
				        from reporteETP_examenTeorico
						group by tipoEstudiante";
			} else {
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasInter) as decimal(18,0)) as preguntasEvaluadasInter,
				        cast(AVG(aciertosInter) as decimal(18,2)) as promedioaciertosInter, 
				        cast(AVG(caliObtenidaInter) as decimal(18,2)) as promedioCalificacionInter,
				        sum(case when aciertosInter <  10 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosInter >= 10 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
				        from reporteETP_examenTeorico
						where tipoEstudiante='".$tipoEstudiante."' group by tipoEstudiante";
			}
			return ejecutarConsulta($sql);	
		}

		public function examen_teorico_ppt($tipoEstudiante){
			if ($tipoEstudiante == "TODO")
			{
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasPPT) as decimal(18,0)) as preguntasEvaluadasPPT,
				        cast(AVG(aciertosPPT) as decimal(18,2)) as promedioaciertosPPT, 
				        cast(AVG(caliObtenidaPPT) as decimal(18,2)) as promedioCalificacionPPT,
				        sum(case when aciertosPPT <  6 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosPPT >= 6 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
				        from reporteETP_examenTeorico
						group by tipoEstudiante";
			} else {
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasPPT) as decimal(18,0)) as preguntasEvaluadasPPT,
				        cast(AVG(aciertosPPT) as decimal(18,2)) as promedioaciertosPPT, 
				        cast(AVG(caliObtenidaPPT) as decimal(18,2)) as promedioCalificacionPPT,
				        sum(case when aciertosPPT <  6 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosPPT >= 6 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
				        from reporteETP_examenTeorico
						where tipoEstudiante='".$tipoEstudiante."' group by tipoEstudiante";
			}
			return ejecutarConsulta($sql);	
		}

		public function examen_teorico_excel($tipoEstudiante){
			if ($tipoEstudiante == "TODO")
			{
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasExcel) as decimal(18,0)) as preguntasEvaluadasExcel,
				        cast(AVG(aciertosExcel) as decimal(18,2)) as promedioaciertosExcel, 
				        cast(AVG(caliObtenidaExcel) as decimal(18,2)) as promedioCalificacionExcel,
				        sum(case when aciertosExcel <  5 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosExcel >= 5 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
						from reporteETP_examenTeorico
						group by tipoEstudiante";
			} else {
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasExcel) as decimal(18,0)) as preguntasEvaluadasExcel,
				        cast(AVG(aciertosExcel) as decimal(18,2)) as promedioaciertosExcel, 
				        cast(AVG(caliObtenidaExcel) as decimal(18,2)) as promedioCalificacionExcel,
				        sum(case when aciertosExcel <  5 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosExcel >= 5 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
						from reporteETP_examenTeorico
						where tipoEstudiante='".$tipoEstudiante."' group by tipoEstudiante";
			}
			return ejecutarConsulta($sql);	
		}

		public function examen_teorico_word($tipoEstudiante){
			if ($tipoEstudiante == "TODO")
			{
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasWord) as decimal(18,0)) as preguntasEvaluadasWord,
				        cast(AVG(aciertosWord) as decimal(18,2)) as promedioaciertosWord, 
				        cast(AVG(caliObtenidaWord) as decimal(18,2)) as promedioCalificacionWord,
				        sum(case when aciertosWord <  5 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosWord >= 5 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
				        from reporteETP_examenTeorico
						group by tipoEstudiante";
			} else {
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasWord) as decimal(18,0)) as preguntasEvaluadasWord,
				        cast(AVG(aciertosWord) as decimal(18,2)) as promedioaciertosWord, 
				        cast(AVG(caliObtenidaWord) as decimal(18,2)) as promedioCalificacionWord,
				        sum(case when aciertosWord <  5 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosWord >= 5 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
				        from reporteETP_examenTeorico
						where tipoEstudiante='".$tipoEstudiante."' group by tipoEstudiante";
			}
			return ejecutarConsulta($sql);	
		}

		public function examen_teorico_herramientas($tipoEstudiante){
			if ($tipoEstudiante == "TODO")
			{
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasColabora) as decimal(18,0)) as preguntasEvaluadasColabora,
				        cast(AVG(aciertosColabora) as decimal(18,2)) as promedioaciertosColabora, 
				        cast(AVG(caliObtenidaColabora) as decimal(18,2)) as promedioCalificacionColabora,
				        sum(case when aciertosColabora <  4 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosColabora >= 4 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
						from reporteETP_examenTeorico
						group by tipoEstudiante";
			} else {
				$sql = "SELECT tipoEstudiante,
					    cast(AVG(preguntasEvaluadasColabora) as decimal(18,0)) as preguntasEvaluadasColabora,
				        cast(AVG(aciertosColabora) as decimal(18,2)) as promedioaciertosColabora, 
				        cast(AVG(caliObtenidaColabora) as decimal(18,2)) as promedioCalificacionColabora,
				        sum(case when aciertosColabora <  4 then 1 else 0 end) as menosDiezAciertos,
				        sum(case when aciertosColabora >= 4 then 1 else 0 end) as masDiezAciertos,
				        count(tipoEstudiante) as totalEstudiantes
						from reporteETP_examenTeorico
						where tipoEstudiante='".$tipoEstudiante."' group by tipoEstudiante";
			}
			return ejecutarConsulta($sql);	
		}

		public function problemas_individuales(){
			$sql = "SELECT 
					c.StudentID as id ,
					c.nombres,
					c.apellidos,
					c.sexo,
					c.email, 
					c.matricula,
					c.cedula,
					c.tipoEstudiante,
					c.grade,
					c.cohorte,
					c.carrera,

					f.P1 as c_p1,	f.P2 as c_p2,	f.P3 as c_p3,	f.P4 as c_p4,	f.P5 as c_p5,	f.P6 as c_p6,	f.P7 as c_p7,	f.P8 as c_p8,	f.P9 as c_p9,	f.P10 as c_p10,
					f.P11 as c_p11,	f.P12 as c_p12,	f.P13 as c_p13,	f.P14 as c_p14,	f.P15 as c_p15,	f.P16 as c_p16,	f.P17 as c_p17,	f.P18 as c_p18,	f.P19 as c_p19,	f.P20 as c_p20,
					f.P21 as c_p21,	f.P22 as c_p22,	f.P23 as c_p23,	f.P24 as c_p24,	f.P25 as c_p25,	f.P26 as c_p26,	f.P27 as c_p27,	f.P28 as c_p28,	f.P29 as c_p29,	f.P30 as c_p30,
					f.P31 as c_p31,	f.P32 as c_p32,	f.P33 as c_p33,	f.P34 as c_p34,	f.P35 as c_p35,	f.P36 as c_p36,	f.P37 as c_p37,	f.P38 as c_p38,	f.P39 as c_p39,	f.P40 as c_p40,
					f.P41 as c_p41,	f.P42 as c_p42,	f.P43 as c_p43,	f.P44 as c_p44,	f.P45 as c_p45,	f.P46 as c_p46,	f.P47 as c_p47,	f.P48 as c_p48,	f.P49 as c_p49,	f.P50 as c_p50,
					f.P51 as c_p51,	f.P52 as c_p52,	f.P53 as c_p53,	f.P54 as c_p54,	f.P55 as c_p55,	f.P56 as c_p56,	f.P57 as c_p57,	f.P58 as c_p58,	f.P59 as c_p59,	f.P60 as c_p60,
					f.P61 as c_p61,	f.P62 as c_p62,	f.P63 as c_p63,	f.P64 as c_p64,	f.P65 as c_p65,	f.P66 as c_p66,	f.P67 as c_p67,	f.P68 as c_p68,	f.P69 as c_p69,	f.P70 as c_p70,
					f.P71 as c_p71,	f.P72 as c_p72,	f.P73 as c_p73,	f.P74 as c_p74,	f.P75 as c_p75,	f.P76 as c_p76,	f.P77 as c_p77,	f.P78 as c_p78,	f.P79 as c_p79,	f.P80 as c_p80,
					f.P81 as c_p81,	f.P82 as c_p82,	f.P83 as c_p83,	f.P84 as c_p84,	f.P85 as c_p85,	f.P86 as c_p86,	f.P87 as c_p87,	f.P88 as c_p88,	f.P89 as c_p89,	f.P90 as c_p90,
					f.P91 as c_p91,	f.P92 as c_p92,	f.P93 as c_p93,	f.P94 as c_p94,	f.P95 as c_p95,	f.P96 as c_p96,	f.P97 as c_p97,	f.P98 as c_p98,	f.P99 as c_p99,	f.P100 as c_p100,
					f.P101 as c_p101,	f.P102 as c_p102,	f.P103 as c_p103,	f.P104 as c_p104,	

					g.P1 as i_p1,g.P2 as i_p2,g.P3 as i_p3,g.P4 as i_p4,g.P5 as i_p5,g.P6 as i_p6,g.P7 as i_p7,g.P8 as i_p8,g.P9 as i_p9,g.P10 as i_p10,g.P11 as i_p11,g.P12 as i_p12,
					g.P13 as i_p13,g.P14 as i_p14,g.P15 as i_p15,g.P16 as i_p16,g.P17 as i_p17,g.P18 as i_p18,g.P19 as i_p19,g.P20 as i_p20,g.P21 as i_p21,g.P22 as i_p22,g.P23 as i_p23,
					g.P24 as i_p24,g.P25 as i_p25,g.P26 as i_p26,g.P27 as i_p27,g.P28 as i_p28,g.P29 as i_p29,g.P30 as i_p30,g.P31 as i_p31,g.P32 as i_p32,g.P33 as i_p33,g.P34 as i_p34,
					g.P35 as i_p35,g.P36 as i_p36,g.P37 as i_p37,g.P38 as i_p38,g.P39 as i_p39,g.P40 as i_p40,g.P41 as i_p41,g.P42 as i_p42,g.P43 as i_p43,g.P44 as i_p44,g.P45 as i_p45,
					g.P46 as i_p46,g.P47 as i_p47,g.P48 as i_p48,g.P49 as i_p49,g.P50 as i_p50,g.P51 as i_p51,g.P52 as i_p52,g.P53 as i_p53,g.P54 as i_p54,g.P55 as i_p55,g.P56 as i_p56,
					g.P57 as i_p57,g.P58 as i_p58,g.P59 as i_p59,g.P60 as i_p60,g.P61 as i_p61,g.P62 as i_p62,g.P63 as i_p63,g.P64 as i_p64,g.P65 as i_p65,g.P66 as i_p66,g.P67 as i_p67,
					g.P68 as i_p68,g.P69 as i_p69,g.P70 as i_p70,g.P71 as i_p71,g.P72 as i_p72,g.P73 as i_p73,g.P74 as i_p74,g.P75 as i_p75,g.P76 as i_p76,g.P77 as i_p77,g.P78 as i_p78,
					g.P79 as i_p79,g.P80 as i_p80,g.P81 as i_p81,g.P82 as i_p82,g.P83 as i_p83,g.P84 as i_p84,g.P85 as i_p85,g.P86 as i_p86,g.P87 as i_p87,g.P88 as i_p88,g.P89 as i_p89,
					g.P90 as i_p90,g.P91 as i_p91,g.P92 as i_p92,g.P93 as i_p93,g.P94 as i_p94,g.P95 as i_p95,g.P96 as i_p96,g.P97 as i_p97,g.P98 as i_p98,g.P99 as i_p99,g.P100 as i_p100,
					g.P101 as i_p101,g.P102 as i_p102,g.P103 as i_p103,g.P104 as i_p104,g.P105 as i_p105,g.P106 as i_p106,g.P107 as i_p107,g.P108 as i_p108,

					h.P1 as p_p1,h.P2 as p_p2,h.P3 as p_p3,h.P4 as p_p4,h.P5 as p_p5,h.P6 as p_p6,h.P7 as p_p7,h.P8 as p_p8,h.P9 as p_p9,h.P10 as p_p10,h.P11 as p_p11,h.P12 as p_p12,h.P13 as p_p13,
					h.P14 as p_p14,h.P15 as p_p15,h.P16 as p_p16,h.P17 as p_p17,h.P18 as p_p18,h.P19 as p_p19,h.P20 as p_p20,h.P21 as p_p21,h.P22 as p_p22,h.P23 as p_p23,h.P24 as p_p24,h.P25 as p_p25,
					h.P26 as p_p26,h.P27 as p_p27,h.P28 as p_p28,h.P29 as p_p29,h.P30 as p_p30,h.P31 as p_p31,h.P32 as p_p32,h.P33 as p_p33,h.P34 as p_p34,h.P35 as p_p35,h.P36 as p_p36,h.P37 as p_p37,
					h.P38 as p_p38,h.P39 as p_p39,h.P40 as p_p40,h.P41 as p_p41,h.P42 as p_p42,h.P43 as p_p43,h.P44 as p_p44,h.P45 as p_p45,h.P46 as p_p46,h.P47 as p_p47,h.P48 as p_p48,h.P49 as p_p49,
					h.P50 as p_p50,h.P51 as p_p51,h.P52 as p_p52,h.P53 as p_p53,h.P54 as p_p54,h.P55 as p_p55,h.P56 as p_p56,h.P57 as p_p57,h.P58 as p_p58,h.P59 as p_p59,h.P60 as p_p60,h.P61 as p_p61,
					h.P62 as p_p62,h.P63 as p_p63,h.P64 as p_p64,h.P65 as p_p65,h.P66 as p_p66,h.P67 as p_p67,h.P68 as p_p68,h.P69 as p_p69,h.P70 as p_p70,h.P71 as p_p71,h.P72 as p_p72,h.P73 as p_p73,
					h.P74 as p_p74,h.P75 as p_p75,h.P76 as p_p76,h.P77 as p_p77,h.P78 as p_p78,h.P79 as p_p79,h.P80 as p_p80,h.P81 as p_p81,h.P82 as p_p82,h.P83 as p_p83,h.P84 as p_p84,h.P85 as p_p85,
					h.P86 as p_p86,

					i.P1 as e_p1,i.P2 as e_p2,i.P3 as e_p3,i.P4 as e_p4,i.P5 as e_p5,i.P6 as e_p6,i.P7 as e_p7,i.P8 as e_p8,i.P9 as e_p9,i.P10 as e_p10,i.P11 as e_p11,i.P12 as e_p12,i.P13 as e_p13,
					i.P14 as e_p14,i.P15 as e_p15,i.P16 as e_p16,i.P17 as e_p17,i.P18 as e_p18,i.P19 as e_p19,i.P20 as e_p20,i.P21 as e_p21,i.P22 as e_p22,i.P23 as e_p23,i.P24 as e_p24,i.P25 as e_p25,
					i.P26 as e_p26,i.P27 as e_p27,i.P28 as e_p28,i.P29 as e_p29,i.P30 as e_p30,i.P31 as e_p31,i.P32 as e_p32,i.P33 as e_p33,i.P34 as e_p34,i.P35 as e_p35,i.P36 as e_p36,i.P37 as e_p37,
					i.P38 as e_p38,i.P39 as e_p39,i.P40 as e_p40,i.P41 as e_p41,i.P42 as e_p42,i.P43 as e_p43,i.P44 as e_p44,i.P45 as e_p45,i.P46 as e_p46,i.P47 as e_p47,i.P48 as e_p48,i.P49 as e_p49,
					i.P50 as e_p50,i.P51 as e_p51,i.P52 as e_p52,i.P53 as e_p53,i.P54 as e_p54,i.P55 as e_p55,i.P56 as e_p56,i.P57 as e_p57,i.P58 as e_p58,i.P59 as e_p59,i.P60 as e_p60,i.P61 as e_p61,
					i.P62 as e_p62,i.P63 as e_p63,i.P64 as e_p64,i.P65 as e_p65,i.P66 as e_p66,i.P67 as e_p67,i.P68 as e_p68,i.P69 as e_p69,i.P70 as e_p70,i.P71 as e_p71,i.P72 as e_p72,i.P73 as e_p73,
					i.P74 as e_p74,i.P75 as e_p75,i.P76 as e_p76,i.P77 as e_p77,i.P78 as e_p78,i.P79 as e_p79,i.P80 as e_p80,i.P81 as e_p81,i.P82 as e_p82,i.P83 as e_p83,i.P84 as e_p84,i.P85 as e_p85,
					i.P86 as e_p86,i.P87 as e_p87,i.P88 as e_p88,i.P89 as e_p89,

					j.P1 as w_p1,j.P2 as w_p2,j.P3 as w_p3,j.P4 as w_p4,j.P5 as w_p5,j.P6 as w_p6,j.P7 as w_p7,j.P8 as w_p8,j.P9 as w_p9,j.P10 as w_p10,j.P11 as w_p11,j.P12 as w_p12,j.P13 as w_p13,
					j.P14 as w_p14,j.P15 as w_p15,j.P16 as w_p16,j.P17 as w_p17,j.P18 as w_p18,j.P19 as w_p19,j.P20 as w_p20,j.P21 as w_p21,j.P22 as w_p22,j.P23 as w_p23,j.P24 as w_p24,j.P25 as w_p25,
					j.P26 as w_p26,j.P27 as w_p27,j.P28 as w_p28,j.P29 as w_p29,j.P30 as w_p30,j.P31 as w_p31,j.P32 as w_p32,j.P33 as w_p33,j.P34 as w_p34,j.P35 as w_p35,j.P36 as w_p36,j.P37 as w_p37,
					j.P38 as w_p38,j.P39 as w_p39,j.P40 as w_p40,j.P41 as w_p41,j.P42 as w_p42,j.P43 as w_p43,j.P44 as w_p44,j.P45 as w_p45,j.P46 as w_p46,j.P47 as w_p47,j.P48 as w_p48,j.P49 as w_p49,
					j.P50 as w_p50,j.P51 as w_p51,j.P52 as w_p52,j.P53 as w_p53,j.P54 as w_p54,j.P55 as w_p55,j.P56 as w_p56,j.P57 as w_p57,j.P58 as w_p58,j.P59 as w_p59,j.P60 as w_p60,j.P61 as w_p61,
					j.P62 as w_p62,j.P63 as w_p63,j.P64 as w_p64,j.P65 as w_p65,j.P66 as w_p66,j.P67 as w_p67,j.P68 as w_p68,j.P69 as w_p69,j.P70 as w_p70,j.P71 as w_p71,j.P72 as w_p72,j.P73 as w_p73,
					j.P74 as w_p74,j.P75 as w_p75,j.P76 as w_p76,j.P77 as w_p77,j.P78 as w_p78,j.P79 as w_p79,j.P80 as w_p80,j.P81 as w_p81,j.P82 as w_p82,j.P83 as w_p83,j.P84 as w_p84,j.P85 as w_p85,
					j.P86 as w_p86,

					k.P1 as k_p1,k.P2 as k_p2,k.P3 as k_p3,k.P4 as k_p4,k.P5 as k_p5,k.P6 as k_p6,k.P7 as k_p7,k.P8 as k_p8,k.P9 as k_p9,k.P10 as k_p10,k.P11 as k_p11,k.P12 as k_p12,k.P13 as k_p13,k.P14 as k_p14,
					k.P15 as k_p15,k.P16 as k_p16,k.P17 as k_p17,k.P18 as k_p18,k.P19 as k_p19,k.P20 as k_p20,k.P21 as k_p21,k.P22 as k_p22,k.P23 as k_p23,k.P24 as k_p24,k.P25 as k_p25,k.P26 as k_p26,
					k.P27 as k_p27,k.P28 as k_p28,k.P29 as k_p29,k.P30 as k_p30,k.P31 as k_p31,k.P32 as k_p32,k.P33 as k_p33,k.P34 as k_p34,k.P35 as k_p35,k.P36 as k_p36,k.P37 as k_p37,k.P38 as k_p38,
					k.P39 as k_p39,k.P40 as k_p40,k.P41 as k_p41,k.P42 as k_p42,k.P43 as k_p43,k.P44 as k_p44,k.P45 as k_p45,k.P46 as k_p46,k.P47 as k_p47,k.P48 as k_p48,k.P49 as k_p49,k.P50 as k_p50,
					k.P51 as k_p51,k.P52 as k_p52,

					c.caliObtenidaCompu, 
					c.caliObtenidaInter,
					c.caliObtenidaPPT,
					c.caliObtenidaExcel,
					c.caliObtenidaWord,
					c.caliObtenidaColabora,
					c.calificacionTotal, 
					c.termino, 
					c.anio, 
					c.sistema

					from reporteETP_examenTeorico c 

					left join ( select   f.StudentID,f.Email,f.termino,f.tipoEstudiante,
								f.P1, f.P2,f.P3, f.P4, f.P5, f.P6, f.P7, f.P8, f.P9, f.P10, f.P11, f.P12, f.P13, f.P14, f.P15, f.P16, f.P17, f.P18, f.P19, f.P20, f.P21, f.P22, f.P23, 
								f.P24, f.P25, f.P26, f.P27, f.P28, f.P29, f.P30, f.P31, f.P32, f.P33, f.P34, f.P35, f.P36, f.P37, f.P38, f.P39, f.P40, f.P41, f.P42, f.P43, f.P44, f.P45, f.P46, f.P47, 
								f.P48, f.P49, f.P50, f.P51, f.P52, f.P53, f.P54, f.P55, f.P56, f.P57, f.P58, f.P59, f.P60, f.P61, f.P62, f.P63, f.P64, f.P65, f.P66, f.P67, f.P68, f.P69, f.P70, f.P71, 
								f.P72, f.P73, f.P74, f.P75, f.P76, f.P77, f.P78, f.P79, f.P80, f.P81, f.P82, f.P83, f.P84, f.P85, f.P86, f.P87, f.P88, f.P89, f.P90, f.P91, f.P92, f.P93, f.P94, f.P95, f.P96, 
								f.P97, f.P98, f.P99, f.P100, f.P101, f.P102, f.P103, f.P104
							from et_computador f 
							where f.tipoEstudiante= 'ADMISION') f 
					on  f.StudentID = c.StudentID
					and f.email     = c.email 
					and f.termino   = c.termino 
					and f.tipoEstudiante = c.tipoEstudiante

					left join ( select   g.StudentID,g.Email,g.termino,g.tipoEstudiante,
								g.P1, g.P2, g.P3, g.P4, g.P5, g.P6, g.P7, g.P8, g.P9, g.P10,g.P11, g.P12, g.P13, g.P14, g.P15, g.P16, g.P17, g.P18, g.P19, g.P20, g.P21, g.P22, 
								g.P23, g.P24, g.P25, g.P26, g.P27, g.P28, g.P29, g.P30, g.P31, g.P32, g.P33, g.P34, g.P35, g.P36, g.P37, g.P38, g.P39, g.P40, g.P41, g.P42, g.P43, g.P44, g.P45, g.P46, 
								g.P47, g.P48, g.P49, g.P50, g.P51, g.P52, g.P53, g.P54, g.P55, g.P56, g.P57, g.P58, g.P59, g.P60, g.P61, g.P62, g.P63, g.P64, g.P65, g.P66, g.P67, g.P68, g.P69, g.P70, 
								g.P71, g.P72, g.P73, g.P74, g.P75, g.P76, g.P77, g.P78, g.P79, g.P80, g.P81, g.P82, g.P83, g.P84, g.P85, g.P86, g.P87, g.P88, g.P89, g.P90, g.P91, g.P92, g.P93, g.P94, g.P95, g.P96, g.P97, g.P98, 
								g.P99, g.P100, g.P101, g.P102, g.P103, g.P104, g.P105, g.P106, g.P107, g.P108
							from et_internet g 
							where g.tipoEstudiante= 'ADMISION') g
					on  g.StudentID = c.StudentID
					and g.email     = c.email 
					and g.termino   = c.termino 
					and g.tipoEstudiante = c.tipoEstudiante

					left join ( select   h.StudentID,h.Email,h.termino,h.tipoEstudiante,
								h.P1, h.P2,h.P3, h.P4, h.P5, h.P6, h.P7, h.P8, h.P9, h.P10, h.P11, h.P12, h.P13, h.P14, h.P15, h.P16, h.P17, h.P18, h.P19, h.P20, h.P21, h.P22, h.P23, h.P24, h.P25, h.P26, h.P27, h.P28, h.P29, 
								h.P30, h.P31, h.P32, h.P33, h.P34, h.P35, h.P36, h.P37, h.P38, h.P39, h.P40, h.P41, h.P42, h.P43, h.P44, h.P45, h.P46, h.P47, h.P48, h.P49, h.P50, h.P51, h.P52, h.P53, h.P54, h.P55, h.P56, 
								h.P57, h.P58, h.P59, h.P60, h.P61, h.P62, h.P63, h.P64, h.P65, h.P66, h.P67, h.P68, h.P69, h.P70, h.P71, h.P72, h.P73, h.P74, h.P75, h.P76, h.P77, h.P78, h.P79, h.P80, h.P81, h.P82, h.P83, h.P84, h.P85, h.P86
							from et_ppt h 
							where h.tipoEstudiante= 'ADMISION') h
					on  h.StudentID = c.StudentID
					and h.email     = c.email 
					and h.termino   = c.termino 
					and h.tipoEstudiante = c.tipoEstudiante

					left join ( select   i.StudentID,i.Email,i.termino,i.tipoEstudiante,
								i.P1, i.P2, i.P3, i.P4, i.P5, i.P6, i.P7, i.P8, i.P9, i.P10, i.P11, i.P12, i.P13, i.P14, i.P15, i.P16, i.P17, i.P18, i.P19, i.P20, i.P21, i.P22, i.P23, i.P24, i.P25, i.P26, i.P27, i.P28, i.P29, i.P30, i.P31, 
								i.P32, i.P33, i.P34, i.P35, i.P36, i.P37, i.P38, i.P39, i.P40, i.P41, i.P42, i.P43, i.P44, i.P45, i.P46, i.P47, i.P48, i.P49, i.P50, i.P51, i.P52, i.P53, i.P54, i.P55, i.P56, i.P57, i.P58, i.P59, i.P60, i.P61, i.P62, i.P63, 
								i.P64, i.P65, i.P66, i.P67, i.P68, i.P69, i.P70, i.P71, i.P72, i.P73, i.P74, i.P75, i.P76, i.P77, i.P78, i.P79, i.P80, i.P81, i.P82, i.P83, i.P84, i.P85, i.P86, i.P87, i.P88, i.P89
							from et_excel i 
							where i.tipoEstudiante= 'ADMISION') i
					on  i.StudentID = c.StudentID
					and i.email     = c.email 
					and i.termino   = c.termino 
					and i.tipoEstudiante = c.tipoEstudiante

					left join ( select   j.StudentID,j.Email,j.termino,j.tipoEstudiante,
								j.P1, j.P2, j.P3, j.P4, j.P5, j.P6, j.P7,j.P8, j.P9, j.P10, j.P11, j.P12, j.P13, j.P14, j.P15, j.P16, j.P17, j.P18, j.P19, j.P20, j.P21, j.P22, j.P23, j.P24, j.P25, j.P26, j.P27, j.P28, j.P29, j.P30, j.P31, j.P32, j.P33, j.P34, j.P35, 
								j.P36, j.P37, j.P38, j.P39, j.P40, j.P41, j.P42, j.P43, j.P44, j.P45, j.P46, j.P47, j.P48, j.P49, j.P50, j.P51, j.P52, j.P53, j.P54, j.P55, j.P56, j.P57, j.P58, j.P59, j.P60, j.P61, j.P62, j.P63, j.P64, j.P65, j.P66, j.P67, j.P68, j.P69, 
								j.P70, j.P71, j.P72, j.P73, j.P74, j.P75, j.P76, j.P77, j.P78, j.P79, j.P80, j.P81, j.P82, j.P83, j.P84, j.P85, j.P86
							from et_word j 
							where j.tipoEstudiante= 'ADMISION') j
					on  j.StudentID = c.StudentID
					and j.email     = c.email 
					and j.termino   = c.termino 
					and j.tipoEstudiante = c.tipoEstudiante

					left join ( select   k.StudentID,k.Email,k.termino,k.tipoEstudiante,
								k.P1, k.P2,k.P3, k.P4, k.P5, k.P6, k.P7, k.P8, k.P9, k.P10, k.P11, k.P12, k.P13, k.P14, k.P15, k.P16, k.P17, k.P18, k.P19, k.P20, k.P21, k.P22, k.P23, k.P24, k.P25, k.P26, k.P27, k.P28, k.P29, 
								k.P30, k.P31, k.P32, k.P33, k.P34, k.P35, k.P36, k.P37, k.P38, k.P39, k.P40, k.P41, k.P42, k.P43, k.P44, k.P45,k.P46, k.P47, k.P48, k.P49, k.P50, k.P51, k.P52
							from et_herramientas k 
							where k.tipoEstudiante= 'ADMISION') k
					on  k.StudentID = c.StudentID
					and k.email     = c.email 
					and k.termino   = c.termino 
					and k.tipoEstudiante = c.tipoEstudiante

					where c.tipoEstudiante= 'ADMISION'";

			return executeQuery($sql);
		}

		public function problemas_individualesEspol(){
			$sql = "SELECT 
					c.StudentID as id ,
					c.nombres,
					c.apellidos,
					c.sexo,
					c.email, 
					c.matricula,
					c.cedula,
					c.tipoEstudiante,
					c.grade,
					c.cohorte,
					c.carrera,

					f.P1 as c_p1,	f.P2 as c_p2,	f.P3 as c_p3,	f.P4 as c_p4,	f.P5 as c_p5,	f.P6 as c_p6,	f.P7 as c_p7,	f.P8 as c_p8,	f.P9 as c_p9,	f.P10 as c_p10,
					f.P11 as c_p11,	f.P12 as c_p12,	f.P13 as c_p13,	f.P14 as c_p14,	f.P15 as c_p15,	f.P16 as c_p16,	f.P17 as c_p17,	f.P18 as c_p18,	f.P19 as c_p19,	f.P20 as c_p20,
					f.P21 as c_p21,	f.P22 as c_p22,	f.P23 as c_p23,	f.P24 as c_p24,	f.P25 as c_p25,	f.P26 as c_p26,	f.P27 as c_p27,	f.P28 as c_p28,	f.P29 as c_p29,	f.P30 as c_p30,
					f.P31 as c_p31,	f.P32 as c_p32,	f.P33 as c_p33,	f.P34 as c_p34,	f.P35 as c_p35,	f.P36 as c_p36,	f.P37 as c_p37,	f.P38 as c_p38,	f.P39 as c_p39,	f.P40 as c_p40,
					f.P41 as c_p41,	f.P42 as c_p42,	f.P43 as c_p43,	f.P44 as c_p44,	f.P45 as c_p45,	f.P46 as c_p46,	f.P47 as c_p47,	f.P48 as c_p48,	f.P49 as c_p49,	f.P50 as c_p50,
					f.P51 as c_p51,	f.P52 as c_p52,	f.P53 as c_p53,	f.P54 as c_p54,	f.P55 as c_p55,	f.P56 as c_p56,	f.P57 as c_p57,	f.P58 as c_p58,	f.P59 as c_p59,	f.P60 as c_p60,
					f.P61 as c_p61,	f.P62 as c_p62,	f.P63 as c_p63,	f.P64 as c_p64,	f.P65 as c_p65,	f.P66 as c_p66,	f.P67 as c_p67,	f.P68 as c_p68,	f.P69 as c_p69,	f.P70 as c_p70,
					f.P71 as c_p71,	f.P72 as c_p72,	f.P73 as c_p73,	f.P74 as c_p74,	f.P75 as c_p75,	f.P76 as c_p76,	f.P77 as c_p77,	f.P78 as c_p78,	f.P79 as c_p79,	f.P80 as c_p80,
					f.P81 as c_p81,	f.P82 as c_p82,	f.P83 as c_p83,	f.P84 as c_p84,	f.P85 as c_p85,	f.P86 as c_p86,	f.P87 as c_p87,	f.P88 as c_p88,	f.P89 as c_p89,	f.P90 as c_p90,
					f.P91 as c_p91,	f.P92 as c_p92,	f.P93 as c_p93,	f.P94 as c_p94,	f.P95 as c_p95,	f.P96 as c_p96,	f.P97 as c_p97,	f.P98 as c_p98,	f.P99 as c_p99,	f.P100 as c_p100,
					f.P101 as c_p101,	f.P102 as c_p102,	f.P103 as c_p103,	f.P104 as c_p104,	

					g.P1 as i_p1,g.P2 as i_p2,g.P3 as i_p3,g.P4 as i_p4,g.P5 as i_p5,g.P6 as i_p6,g.P7 as i_p7,g.P8 as i_p8,g.P9 as i_p9,g.P10 as i_p10,g.P11 as i_p11,g.P12 as i_p12,
					g.P13 as i_p13,g.P14 as i_p14,g.P15 as i_p15,g.P16 as i_p16,g.P17 as i_p17,g.P18 as i_p18,g.P19 as i_p19,g.P20 as i_p20,g.P21 as i_p21,g.P22 as i_p22,g.P23 as i_p23,
					g.P24 as i_p24,g.P25 as i_p25,g.P26 as i_p26,g.P27 as i_p27,g.P28 as i_p28,g.P29 as i_p29,g.P30 as i_p30,g.P31 as i_p31,g.P32 as i_p32,g.P33 as i_p33,g.P34 as i_p34,
					g.P35 as i_p35,g.P36 as i_p36,g.P37 as i_p37,g.P38 as i_p38,g.P39 as i_p39,g.P40 as i_p40,g.P41 as i_p41,g.P42 as i_p42,g.P43 as i_p43,g.P44 as i_p44,g.P45 as i_p45,
					g.P46 as i_p46,g.P47 as i_p47,g.P48 as i_p48,g.P49 as i_p49,g.P50 as i_p50,g.P51 as i_p51,g.P52 as i_p52,g.P53 as i_p53,g.P54 as i_p54,g.P55 as i_p55,g.P56 as i_p56,
					g.P57 as i_p57,g.P58 as i_p58,g.P59 as i_p59,g.P60 as i_p60,g.P61 as i_p61,g.P62 as i_p62,g.P63 as i_p63,g.P64 as i_p64,g.P65 as i_p65,g.P66 as i_p66,g.P67 as i_p67,
					g.P68 as i_p68,g.P69 as i_p69,g.P70 as i_p70,g.P71 as i_p71,g.P72 as i_p72,g.P73 as i_p73,g.P74 as i_p74,g.P75 as i_p75,g.P76 as i_p76,g.P77 as i_p77,g.P78 as i_p78,
					g.P79 as i_p79,g.P80 as i_p80,g.P81 as i_p81,g.P82 as i_p82,g.P83 as i_p83,g.P84 as i_p84,g.P85 as i_p85,g.P86 as i_p86,g.P87 as i_p87,g.P88 as i_p88,g.P89 as i_p89,
					g.P90 as i_p90,g.P91 as i_p91,g.P92 as i_p92,g.P93 as i_p93,g.P94 as i_p94,g.P95 as i_p95,g.P96 as i_p96,g.P97 as i_p97,g.P98 as i_p98,g.P99 as i_p99,g.P100 as i_p100,
					g.P101 as i_p101,g.P102 as i_p102,g.P103 as i_p103,g.P104 as i_p104,g.P105 as i_p105,g.P106 as i_p106,g.P107 as i_p107,g.P108 as i_p108,

					h.P1 as p_p1,h.P2 as p_p2,h.P3 as p_p3,h.P4 as p_p4,h.P5 as p_p5,h.P6 as p_p6,h.P7 as p_p7,h.P8 as p_p8,h.P9 as p_p9,h.P10 as p_p10,h.P11 as p_p11,h.P12 as p_p12,h.P13 as p_p13,
					h.P14 as p_p14,h.P15 as p_p15,h.P16 as p_p16,h.P17 as p_p17,h.P18 as p_p18,h.P19 as p_p19,h.P20 as p_p20,h.P21 as p_p21,h.P22 as p_p22,h.P23 as p_p23,h.P24 as p_p24,h.P25 as p_p25,
					h.P26 as p_p26,h.P27 as p_p27,h.P28 as p_p28,h.P29 as p_p29,h.P30 as p_p30,h.P31 as p_p31,h.P32 as p_p32,h.P33 as p_p33,h.P34 as p_p34,h.P35 as p_p35,h.P36 as p_p36,h.P37 as p_p37,
					h.P38 as p_p38,h.P39 as p_p39,h.P40 as p_p40,h.P41 as p_p41,h.P42 as p_p42,h.P43 as p_p43,h.P44 as p_p44,h.P45 as p_p45,h.P46 as p_p46,h.P47 as p_p47,h.P48 as p_p48,h.P49 as p_p49,
					h.P50 as p_p50,h.P51 as p_p51,h.P52 as p_p52,h.P53 as p_p53,h.P54 as p_p54,h.P55 as p_p55,h.P56 as p_p56,h.P57 as p_p57,h.P58 as p_p58,h.P59 as p_p59,h.P60 as p_p60,h.P61 as p_p61,
					h.P62 as p_p62,h.P63 as p_p63,h.P64 as p_p64,h.P65 as p_p65,h.P66 as p_p66,h.P67 as p_p67,h.P68 as p_p68,h.P69 as p_p69,h.P70 as p_p70,h.P71 as p_p71,h.P72 as p_p72,h.P73 as p_p73,
					h.P74 as p_p74,h.P75 as p_p75,h.P76 as p_p76,h.P77 as p_p77,h.P78 as p_p78,h.P79 as p_p79,h.P80 as p_p80,h.P81 as p_p81,h.P82 as p_p82,h.P83 as p_p83,h.P84 as p_p84,h.P85 as p_p85,
					h.P86 as p_p86,

					i.P1 as e_p1,i.P2 as e_p2,i.P3 as e_p3,i.P4 as e_p4,i.P5 as e_p5,i.P6 as e_p6,i.P7 as e_p7,i.P8 as e_p8,i.P9 as e_p9,i.P10 as e_p10,i.P11 as e_p11,i.P12 as e_p12,i.P13 as e_p13,
					i.P14 as e_p14,i.P15 as e_p15,i.P16 as e_p16,i.P17 as e_p17,i.P18 as e_p18,i.P19 as e_p19,i.P20 as e_p20,i.P21 as e_p21,i.P22 as e_p22,i.P23 as e_p23,i.P24 as e_p24,i.P25 as e_p25,
					i.P26 as e_p26,i.P27 as e_p27,i.P28 as e_p28,i.P29 as e_p29,i.P30 as e_p30,i.P31 as e_p31,i.P32 as e_p32,i.P33 as e_p33,i.P34 as e_p34,i.P35 as e_p35,i.P36 as e_p36,i.P37 as e_p37,
					i.P38 as e_p38,i.P39 as e_p39,i.P40 as e_p40,i.P41 as e_p41,i.P42 as e_p42,i.P43 as e_p43,i.P44 as e_p44,i.P45 as e_p45,i.P46 as e_p46,i.P47 as e_p47,i.P48 as e_p48,i.P49 as e_p49,
					i.P50 as e_p50,i.P51 as e_p51,i.P52 as e_p52,i.P53 as e_p53,i.P54 as e_p54,i.P55 as e_p55,i.P56 as e_p56,i.P57 as e_p57,i.P58 as e_p58,i.P59 as e_p59,i.P60 as e_p60,i.P61 as e_p61,
					i.P62 as e_p62,i.P63 as e_p63,i.P64 as e_p64,i.P65 as e_p65,i.P66 as e_p66,i.P67 as e_p67,i.P68 as e_p68,i.P69 as e_p69,i.P70 as e_p70,i.P71 as e_p71,i.P72 as e_p72,i.P73 as e_p73,
					i.P74 as e_p74,i.P75 as e_p75,i.P76 as e_p76,i.P77 as e_p77,i.P78 as e_p78,i.P79 as e_p79,i.P80 as e_p80,i.P81 as e_p81,i.P82 as e_p82,i.P83 as e_p83,i.P84 as e_p84,i.P85 as e_p85,
					i.P86 as e_p86,i.P87 as e_p87,i.P88 as e_p88,i.P89 as e_p89,

					j.P1 as w_p1,j.P2 as w_p2,j.P3 as w_p3,j.P4 as w_p4,j.P5 as w_p5,j.P6 as w_p6,j.P7 as w_p7,j.P8 as w_p8,j.P9 as w_p9,j.P10 as w_p10,j.P11 as w_p11,j.P12 as w_p12,j.P13 as w_p13,
					j.P14 as w_p14,j.P15 as w_p15,j.P16 as w_p16,j.P17 as w_p17,j.P18 as w_p18,j.P19 as w_p19,j.P20 as w_p20,j.P21 as w_p21,j.P22 as w_p22,j.P23 as w_p23,j.P24 as w_p24,j.P25 as w_p25,
					j.P26 as w_p26,j.P27 as w_p27,j.P28 as w_p28,j.P29 as w_p29,j.P30 as w_p30,j.P31 as w_p31,j.P32 as w_p32,j.P33 as w_p33,j.P34 as w_p34,j.P35 as w_p35,j.P36 as w_p36,j.P37 as w_p37,
					j.P38 as w_p38,j.P39 as w_p39,j.P40 as w_p40,j.P41 as w_p41,j.P42 as w_p42,j.P43 as w_p43,j.P44 as w_p44,j.P45 as w_p45,j.P46 as w_p46,j.P47 as w_p47,j.P48 as w_p48,j.P49 as w_p49,
					j.P50 as w_p50,j.P51 as w_p51,j.P52 as w_p52,j.P53 as w_p53,j.P54 as w_p54,j.P55 as w_p55,j.P56 as w_p56,j.P57 as w_p57,j.P58 as w_p58,j.P59 as w_p59,j.P60 as w_p60,j.P61 as w_p61,
					j.P62 as w_p62,j.P63 as w_p63,j.P64 as w_p64,j.P65 as w_p65,j.P66 as w_p66,j.P67 as w_p67,j.P68 as w_p68,j.P69 as w_p69,j.P70 as w_p70,j.P71 as w_p71,j.P72 as w_p72,j.P73 as w_p73,
					j.P74 as w_p74,j.P75 as w_p75,j.P76 as w_p76,j.P77 as w_p77,j.P78 as w_p78,j.P79 as w_p79,j.P80 as w_p80,j.P81 as w_p81,j.P82 as w_p82,j.P83 as w_p83,j.P84 as w_p84,j.P85 as w_p85,
					j.P86 as w_p86,

					k.P1 as k_p1,k.P2 as k_p2,k.P3 as k_p3,k.P4 as k_p4,k.P5 as k_p5,k.P6 as k_p6,k.P7 as k_p7,k.P8 as k_p8,k.P9 as k_p9,k.P10 as k_p10,k.P11 as k_p11,k.P12 as k_p12,k.P13 as k_p13,k.P14 as k_p14,
					k.P15 as k_p15,k.P16 as k_p16,k.P17 as k_p17,k.P18 as k_p18,k.P19 as k_p19,k.P20 as k_p20,k.P21 as k_p21,k.P22 as k_p22,k.P23 as k_p23,k.P24 as k_p24,k.P25 as k_p25,k.P26 as k_p26,
					k.P27 as k_p27,k.P28 as k_p28,k.P29 as k_p29,k.P30 as k_p30,k.P31 as k_p31,k.P32 as k_p32,k.P33 as k_p33,k.P34 as k_p34,k.P35 as k_p35,k.P36 as k_p36,k.P37 as k_p37,k.P38 as k_p38,
					k.P39 as k_p39,k.P40 as k_p40,k.P41 as k_p41,k.P42 as k_p42,k.P43 as k_p43,k.P44 as k_p44,k.P45 as k_p45,k.P46 as k_p46,k.P47 as k_p47,k.P48 as k_p48,k.P49 as k_p49,k.P50 as k_p50,
					k.P51 as k_p51,k.P52 as k_p52,

					c.caliObtenidaCompu, 
					c.caliObtenidaInter,
					c.caliObtenidaPPT,
					c.caliObtenidaExcel,
					c.caliObtenidaWord,
					c.caliObtenidaColabora,
					c.calificacionTotal, 
					c.termino, 
					c.anio, 
					c.sistema

					from reporteETP_examenTeorico c 

					left join ( select   f.StudentID,f.Email,f.termino,f.tipoEstudiante,
								f.P1, f.P2,f.P3, f.P4, f.P5, f.P6, f.P7, f.P8, f.P9, f.P10, f.P11, f.P12, f.P13, f.P14, f.P15, f.P16, f.P17, f.P18, f.P19, f.P20, f.P21, f.P22, f.P23, 
								f.P24, f.P25, f.P26, f.P27, f.P28, f.P29, f.P30, f.P31, f.P32, f.P33, f.P34, f.P35, f.P36, f.P37, f.P38, f.P39, f.P40, f.P41, f.P42, f.P43, f.P44, f.P45, f.P46, f.P47, 
								f.P48, f.P49, f.P50, f.P51, f.P52, f.P53, f.P54, f.P55, f.P56, f.P57, f.P58, f.P59, f.P60, f.P61, f.P62, f.P63, f.P64, f.P65, f.P66, f.P67, f.P68, f.P69, f.P70, f.P71, 
								f.P72, f.P73, f.P74, f.P75, f.P76, f.P77, f.P78, f.P79, f.P80, f.P81, f.P82, f.P83, f.P84, f.P85, f.P86, f.P87, f.P88, f.P89, f.P90, f.P91, f.P92, f.P93, f.P94, f.P95, f.P96, 
								f.P97, f.P98, f.P99, f.P100, f.P101, f.P102, f.P103, f.P104
							from et_computador f 
							where f.tipoEstudiante= 'ESPOL') f 
					on  f.StudentID = c.StudentID
					and f.email     = c.email 
					and f.termino   = c.termino 
					and f.tipoEstudiante = c.tipoEstudiante

					left join ( select   g.StudentID,g.Email,g.termino,g.tipoEstudiante,
								g.P1, g.P2, g.P3, g.P4, g.P5, g.P6, g.P7, g.P8, g.P9, g.P10,g.P11, g.P12, g.P13, g.P14, g.P15, g.P16, g.P17, g.P18, g.P19, g.P20, g.P21, g.P22, 
								g.P23, g.P24, g.P25, g.P26, g.P27, g.P28, g.P29, g.P30, g.P31, g.P32, g.P33, g.P34, g.P35, g.P36, g.P37, g.P38, g.P39, g.P40, g.P41, g.P42, g.P43, g.P44, g.P45, g.P46, 
								g.P47, g.P48, g.P49, g.P50, g.P51, g.P52, g.P53, g.P54, g.P55, g.P56, g.P57, g.P58, g.P59, g.P60, g.P61, g.P62, g.P63, g.P64, g.P65, g.P66, g.P67, g.P68, g.P69, g.P70, 
								g.P71, g.P72, g.P73, g.P74, g.P75, g.P76, g.P77, g.P78, g.P79, g.P80, g.P81, g.P82, g.P83, g.P84, g.P85, g.P86, g.P87, g.P88, g.P89, g.P90, g.P91, g.P92, g.P93, g.P94, g.P95, g.P96, g.P97, g.P98, 
								g.P99, g.P100, g.P101, g.P102, g.P103, g.P104, g.P105, g.P106, g.P107, g.P108
							from et_internet g 
							where g.tipoEstudiante= 'ESPOL') g
					on  g.StudentID = c.StudentID
					and g.email     = c.email 
					and g.termino   = c.termino 
					and g.tipoEstudiante = c.tipoEstudiante

					left join ( select   h.StudentID,h.Email,h.termino,h.tipoEstudiante,
								h.P1, h.P2,h.P3, h.P4, h.P5, h.P6, h.P7, h.P8, h.P9, h.P10, h.P11, h.P12, h.P13, h.P14, h.P15, h.P16, h.P17, h.P18, h.P19, h.P20, h.P21, h.P22, h.P23, h.P24, h.P25, h.P26, h.P27, h.P28, h.P29, 
								h.P30, h.P31, h.P32, h.P33, h.P34, h.P35, h.P36, h.P37, h.P38, h.P39, h.P40, h.P41, h.P42, h.P43, h.P44, h.P45, h.P46, h.P47, h.P48, h.P49, h.P50, h.P51, h.P52, h.P53, h.P54, h.P55, h.P56, 
								h.P57, h.P58, h.P59, h.P60, h.P61, h.P62, h.P63, h.P64, h.P65, h.P66, h.P67, h.P68, h.P69, h.P70, h.P71, h.P72, h.P73, h.P74, h.P75, h.P76, h.P77, h.P78, h.P79, h.P80, h.P81, h.P82, h.P83, h.P84, h.P85, h.P86
							from et_ppt h 
							where h.tipoEstudiante= 'ESPOL') h
					on  h.StudentID = c.StudentID
					and h.email     = c.email 
					and h.termino   = c.termino 
					and h.tipoEstudiante = c.tipoEstudiante

					left join ( select   i.StudentID,i.Email,i.termino,i.tipoEstudiante,
								i.P1, i.P2, i.P3, i.P4, i.P5, i.P6, i.P7, i.P8, i.P9, i.P10, i.P11, i.P12, i.P13, i.P14, i.P15, i.P16, i.P17, i.P18, i.P19, i.P20, i.P21, i.P22, i.P23, i.P24, i.P25, i.P26, i.P27, i.P28, i.P29, i.P30, i.P31, 
								i.P32, i.P33, i.P34, i.P35, i.P36, i.P37, i.P38, i.P39, i.P40, i.P41, i.P42, i.P43, i.P44, i.P45, i.P46, i.P47, i.P48, i.P49, i.P50, i.P51, i.P52, i.P53, i.P54, i.P55, i.P56, i.P57, i.P58, i.P59, i.P60, i.P61, i.P62, i.P63, 
								i.P64, i.P65, i.P66, i.P67, i.P68, i.P69, i.P70, i.P71, i.P72, i.P73, i.P74, i.P75, i.P76, i.P77, i.P78, i.P79, i.P80, i.P81, i.P82, i.P83, i.P84, i.P85, i.P86, i.P87, i.P88, i.P89
							from et_excel i 
							where i.tipoEstudiante= 'ESPOL') i
					on  i.StudentID = c.StudentID
					and i.email     = c.email 
					and i.termino   = c.termino 
					and i.tipoEstudiante = c.tipoEstudiante

					left join ( select   j.StudentID,j.Email,j.termino,j.tipoEstudiante,
								j.P1, j.P2, j.P3, j.P4, j.P5, j.P6, j.P7,j.P8, j.P9, j.P10, j.P11, j.P12, j.P13, j.P14, j.P15, j.P16, j.P17, j.P18, j.P19, j.P20, j.P21, j.P22, j.P23, j.P24, j.P25, j.P26, j.P27, j.P28, j.P29, j.P30, j.P31, j.P32, j.P33, j.P34, j.P35, 
								j.P36, j.P37, j.P38, j.P39, j.P40, j.P41, j.P42, j.P43, j.P44, j.P45, j.P46, j.P47, j.P48, j.P49, j.P50, j.P51, j.P52, j.P53, j.P54, j.P55, j.P56, j.P57, j.P58, j.P59, j.P60, j.P61, j.P62, j.P63, j.P64, j.P65, j.P66, j.P67, j.P68, j.P69, 
								j.P70, j.P71, j.P72, j.P73, j.P74, j.P75, j.P76, j.P77, j.P78, j.P79, j.P80, j.P81, j.P82, j.P83, j.P84, j.P85, j.P86
							from et_word j 
							where j.tipoEstudiante= 'ESPOL') j
					on  j.StudentID = c.StudentID
					and j.email     = c.email 
					and j.termino   = c.termino 
					and j.tipoEstudiante = c.tipoEstudiante

					left join ( select   k.StudentID,k.Email,k.termino,k.tipoEstudiante,
								k.P1, k.P2,k.P3, k.P4, k.P5, k.P6, k.P7, k.P8, k.P9, k.P10, k.P11, k.P12, k.P13, k.P14, k.P15, k.P16, k.P17, k.P18, k.P19, k.P20, k.P21, k.P22, k.P23, k.P24, k.P25, k.P26, k.P27, k.P28, k.P29, 
								k.P30, k.P31, k.P32, k.P33, k.P34, k.P35, k.P36, k.P37, k.P38, k.P39, k.P40, k.P41, k.P42, k.P43, k.P44, k.P45,k.P46, k.P47, k.P48, k.P49, k.P50, k.P51, k.P52
							from et_herramientas k 
							where k.tipoEstudiante= 'ESPOL') k
					on  k.StudentID = c.StudentID
					and k.email     = c.email 
					and k.termino   = c.termino 
					and k.tipoEstudiante = c.tipoEstudiante

					where c.tipoEstudiante= 'ESPOL'";

			return executeQuery($sql);
		}

		public function notas_admision(){
			$sql = "SELECT 
			        StudentID as id, 
					nombres, 
					apellidos, 
					sexo, 
					Email, 
					matricula, 
					cedula, 
					tipoEstudiante, 
					grade, 
					cohorte, 
					carrera, 
					caliObtenidaCompu, 
					caliObtenidaInter, 
					caliObtenidaPPT, 
					caliObtenidaExcel, 
					caliObtenidaWord, 
					caliObtenidaColabora, 
					calificacionTotal, 
					sinResponderCompu, 
					aciertosCompu, 
					NoaciertosCompu, 
					preguntasEvaluadasCompu, 
					sinResponderInter, 
					aciertosInter, 
					NoaciertosInter, 
					preguntasEvaluadasInter, 
					sinResponderPPT, 
					aciertosPPT, 
					NoaciertosPPT, 
					preguntasEvaluadasPPT, 
					sinResponderExcel, 
					aciertosExcel, 
					NoaciertosExcel,
					preguntasEvaluadasExcel, 
					sinResponderWord, 
					aciertosWord, 
					NoaciertosWord, 
					preguntasEvaluadasWord, 
					sinResponderColabora, 
					aciertosColabora, 
					NoaciertosColabora, 
					preguntasEvaluadasColabora, 
					hizoExamen, 
					nivelConocimientoComputador, 
					nivelConocimientoInter, 
					nivelConocimientoPPT, 
					nivelConocimientoExcel, 
					nivelConocimientoWord, 
					nivelConocimientoColabora, 
					termino, 
					anio, 
					sistema
					FROM   reporteETP_examenTeorico
					where tipoEstudiante = 'ADMISION'";

			return executeQuery($sql);
		}

		public function notas_espol(){
			$sql = "SELECT 
			        StudentID as id, 
					nombres, 
					apellidos, 
					sexo, 
					Email, 
					matricula, 
					cedula, 
					tipoEstudiante, 
					grade, 
					cohorte, 
					carrera, 
					caliObtenidaCompu, 
					caliObtenidaInter, 
					caliObtenidaPPT, 
					caliObtenidaExcel, 
					caliObtenidaWord, 
					caliObtenidaColabora, 
					calificacionTotal, 
					sinResponderCompu, 
					aciertosCompu, 
					NoaciertosCompu, 
					preguntasEvaluadasCompu, 
					sinResponderInter, 
					aciertosInter, 
					NoaciertosInter, 
					preguntasEvaluadasInter, 
					sinResponderPPT, 
					aciertosPPT, 
					NoaciertosPPT, 
					preguntasEvaluadasPPT, 
					sinResponderExcel, 
					aciertosExcel, 
					NoaciertosExcel,
					preguntasEvaluadasExcel, 
					sinResponderWord, 
					aciertosWord, 
					NoaciertosWord, 
					preguntasEvaluadasWord, 
					sinResponderColabora, 
					aciertosColabora, 
					NoaciertosColabora, 
					preguntasEvaluadasColabora, 
					hizoExamen, 
					nivelConocimientoComputador, 
					nivelConocimientoInter, 
					nivelConocimientoPPT, 
					nivelConocimientoExcel, 
					nivelConocimientoWord, 
					nivelConocimientoColabora, 
					termino, 
					anio, 
					sistema
					FROM   reporteETP_examenTeorico
					where tipoEstudiante = 'ESPOL'";

			return executeQuery($sql);
		}
		
	}
?>