	<?php
	ini_set('MAX_EXECUTION_TIME', 0);
	set_time_limit(0);

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////UTILIDADES VARIAS
	function Conectarse()
	{
		if (!($link=mysqli_connect("localhost:3306","root","","moochcd")))
		{
			echo "Error MySQL: ".mysql_error();
			echo "Error conectando a la base de datos.";
			exit();
		}
	$link->query("SET NAMES 'utf8'");
	return $link;
	}


	function listarArchivos( $ruta )
	{
		$directorio=opendir($ruta);
		$datos=array();
		while ($archivo = readdir($directorio)) 
		{ 
			if(($archivo != '.')&&($archivo != '..'))
			{
				$datos[]=$archivo; 
			} 
		}
		closedir($directorio);
		return $datos;
	}

	
	function quitar_tildes($cadena) 
	{
		$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
		$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
		$texto = str_replace($no_permitidas, $permitidas ,$cadena);
		
		$buscar=array(chr(13).chr(10), "\r\n", "\n", "\r", ",", "_");
		$reemplazar=array("", "", "", ""," "," ");
		$texto2=str_ireplace($buscar,$reemplazar,$texto);
		
		return $texto2;
	}

	function validar_notas($nota)
	{
		if ($nota  == '')                                                                                $notaValidada =  0;
		if ($nota  == 'Not Available')                                                                   $notaValidada = -1;
		if ($nota  == 'Not Attempted') 																     $notaValidada = -2;
		if ($nota  == 'None')                                                                            $notaValidada = -3;
		if ($nota !== 'Not Available' && $nota !== 'Not Attempted' && $nota !== 'None' && $nota  !== '') $notaValidada = utf8_encode($nota);

		return $notaValidada;
	}

	

	function actualizaRutaProcesada($idRuta)
	{	
		$link=Conectarse();
		$sql="update rutasarchivosdata set procesado = 1 where idRuta = $idRuta;";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function actualizaRutaConvertido($idRuta)
	{	
		$link=Conectarse();
		$sql="update rutasarchivosdata set convertido = 1 where idRuta = $idRuta;";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ACADEMICO PRACTICO
	function postdataAcademicoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosAcademicoPractico($matricula,$identificacion,$nombres,$apellidos,$email,$sexo,$fecha_nac,$edad,$estado_civil,$colegio,$tipo_colegio,$notaTeorico,$notaWord,$notaExcel,$notaPpt,$numVeces,$carrera,$termino,$anio,$sistema,$tipoEstudiante,$cohorte,$fechaExamen)
	{	
		$link=Conectarse();
		$sql="insert into academicoPractico (matricula,identificacion,nombres,apellidos,email,sexo,fecha_nac,edad,estado_civil,colegio,tipo_colegio,notaTeorico,notaWord,notaExcel,notaPpt,numVeces,carrera,termino,anio,sistema,tipoEstudiante,cohorte,fechaExamen)
		VALUES ('$matricula','$identificacion','$nombres','$apellidos','$email','$sexo','$fecha_nac',$edad,'$estado_civil','$colegio','$tipo_colegio',$notaTeorico,$notaWord,$notaExcel,$notaPpt,$numVeces,'$carrera','$termino',$anio,'$sistema','$tipoEstudiante','$cohorte','$fechaExamen');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosAcademicoPractico($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from academicoPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and tipoEstudiante='$tipoEstudiante';";
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	   return $result;
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ACADEMICO TEORICO PRACTICO
	function postdataAcademicoTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosAcademicoTeoricoPractico($matricula,$identificacion,$nombres,$apellidos,$email,$sexo,$fecha_nac,$edad,$estado_civil,$colegio,$tipo_colegio,$notaTeorico,$notaWord,$notaExcel,$notaPpt,$numVeces,$carrera,$termino,$anio,$sistema,$tipoEstudiante,$cohorte,$fechaExamen)
	{	
		$link=Conectarse();
		$sql="insert into academicoTeoricoPractico (matricula,identificacion,nombres,apellidos,email,sexo,fecha_nac,edad,estado_civil,colegio,tipo_colegio,notaTeorico,notaWord,notaExcel,notaPpt,numVeces,carrera,termino,anio,sistema,tipoEstudiante,cohorte,fechaExamen)
		VALUES ('$matricula','$identificacion','$nombres','$apellidos','$email','$sexo','$fecha_nac',$edad,'$estado_civil','$colegio','$tipo_colegio',$notaTeorico,$notaWord,$notaExcel,$notaPpt,$numVeces,'$carrera','$termino',$anio,'$sistema','$tipoEstudiante','$cohorte','$fechaExamen');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosAcademicoTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from academicoTeoricoPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and tipoEstudiante='$tipoEstudiante';";
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}




	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX PRACTICO (MOOC)
	function postdataEdxPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEdxPractico($idEstudiante,$email,$usuario,$grado,$ec1,$ec2,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$examen,$cohorte,$termino,$anio,$sistema,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into edxPractico(studentID,email,username,grade,ec1,ec2,avm1,avm2,avm3,avm4,avm5,avm6,examen,cohorte,termino,anio,sistema,tipoEstudiante)
		VALUES ('$idEstudiante','$email','$usuario',$grado,$ec1,$ec2,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$examen,'$cohorte','$termino',$anio,'$sistema','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEdxPractico($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from edxPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEdxPracticoSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from edxPractico where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX TEORICO PRACTICO (MOOC)
	function postdataEdxTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEdxTeoricoPractico($idEstudiante,$email,$usuario,$grado,$ec1,$ec2,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$examen,$cohorte,$termino,$anio,$sistema,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into edxTeoricoPractico(studentID,email,username,grade,ec1,ec2,avm1,avm2,avm3,avm4,avm5,avm6,examen,cohorte,termino,anio,sistema,tipoEstudiante)
		VALUES ('$idEstudiante','$email','$usuario',$grado,$ec1,$ec2,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$examen,'$cohorte','$termino',$anio,'$sistema','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEdxTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from edxTeoricoPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEdxTeoricoPracticoSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from edxTeoricoPractico where termino = '$termino' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX ENCUESTA DEMOGRAFICO PRACTICO
	function postDataEncuestaDemograficaPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'pregunta' => $pregunta
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEncuestaDemograficaPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into ec_demografica_practico(username, pregunta, literal, respuesta, termino, anio, sistema, tipoEstudiante)
		VALUES ('$username',$pregunta,$literal,'$resultado','$termino',$anio,'$sistema','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEncuestaDemograficoPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_demografica_practico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEncuestaDemograficoPracticoSte($pregunta,$termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from ec_demografica_practico where termino = '$termino' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}



	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX ENCUESTA DEMOGRAFICO TEORICO PRACTICO
	function postDataEncuestaDemograficaTeoricoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'pregunta' => $pregunta
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEncuestaDemograficaTeoricoPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into ec_demografica_teorico_practico(username, pregunta, literal, respuesta, termino, anio, sistema, tipoEstudiante)
		VALUES ('$username',$pregunta,$literal,'$resultado','$termino',$anio,'$sistema','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEncuestaDemograficoTeoricoPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_demografica_teorico_practico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEncuestaDemograficoTeoricoPracticoSte($pregunta,$termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from ec_demografica_teorico_practico where termino = '$termino' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX RESPUESTAS ENCUESTA DEMOGRAFICA
	function postRespuestasEncuestaDemografica($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipo' => $tipo,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarRespuestasEncuestaDemografica($numPregunta,$numRespuesta,$pregunta,$literal,$codigo_a,$opcion_a,$codigo_b,$opcion_b,$codigo_c,$opcion_c,$codigo_d,$opcion_d,$codigo_e,$opcion_e,$codigo_f,$opcion_f,$termino,$anio,$sistema,$tipo,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into ec_demografica_respuestas(numPregunta,numLiteral,pregunta,literal,codigo_a,opcion_a,codigo_b,opcion_b,codigo_c,opcion_c,codigo_d,opcion_d,codigo_e,opcion_e,codigo_f,opcion_f,termino,anio,sistema,tipo,tipoEstudiante)
		VALUES ($numPregunta,$numRespuesta,'$pregunta','$literal','$codigo_a','$opcion_a','$codigo_b','$opcion_b','$codigo_c','$opcion_c','$codigo_d','$opcion_d','$codigo_e','$opcion_e','$codigo_f','$opcion_f','$termino',$anio,'$sistema','$tipo','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarRespuestasEncuestaDemografico($termino,$anio,$sistema,$tipo,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_demografica_respuestas where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and tipo='$tipo';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarRespuestasEncuestaDemograficoSte($termino,$anio,$sistema, $tipo)
	{
	   $link=Conectarse();
	   $sql="delete from ec_demografica_respuestas where termino = '$termino' and anio = $anio and sistema= '$sistema' and tipo='$tipo';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX ENCUESTA SATISFACCION PRACTICO
	function postDataEncuestaSatisfaccionPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'pregunta' => $pregunta
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEncuestaSatisfaccionPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into ec_satisfaccion_practico(username, pregunta, literal, respuesta, termino, anio, sistema, tipoEstudiante)
		VALUES ('$username',$pregunta,$literal,'$resultado','$termino',$anio,'$sistema','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEncuestaSatisfaccionPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_satisfaccion_practico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEncuestaSatisfaccionPracticoSte($pregunta,$termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from ec_satisfaccion_practico where termino = '$termino' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}



	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX ENCUESTA SATISFACCION TEORICO PRACTICO
	function postDataEncuestaSatisfaccionTeoricoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'pregunta' => $pregunta
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEncuestaSatisfaccionTeoricoPractico($username,$pregunta,$literal,$resultado,$termino,$anio,$sistema,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into ec_satisfaccion_teorico_practico(username, pregunta, literal, respuesta, termino, anio, sistema, tipoEstudiante)
		VALUES ('$username',$pregunta,$literal,'$resultado','$termino',$anio,'$sistema','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEncuestaSatisfaccionTeoricoPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_satisfaccion_teorico_practico where pregunta=$pregunta and termino = '$termino' and anio = $anio and sistema= '$sistema' and tipoEstudiante = '$tipoEstudiante';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEncuestaSatisfaccionTeoricoPracticoSte($pregunta,$termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from ec_satisfaccion_teorico_practico where termino = '$termino' and anio = $anio and sistema= '$sistema' and pregunta=$pregunta;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX RESPUESTAS ENCUESTA SATISFACCION 
	function postRespuestasEncuestaSatisfaccionP($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'tipo' => $tipo
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postRespuestasEncuestaSatisfaccionTP($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'tipo' => $tipo
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarRespuestasEncuestaSatisfaccion($numPregunta,$numRespuesta,$pregunta,$literal,$codigo_a,$opcion_a,$codigo_b,$opcion_b,$codigo_c,$opcion_c,$codigo_d,$opcion_d,$codigo_e,$opcion_e,$codigo_f,$opcion_f,$termino,$anio,$sistema,$tipo,$tipoEstudiante)
	{
		$link=Conectarse();
		$sql="insert into ec_satisfaccion_respuestas(numPregunta,numLiteral,pregunta,literal,codigo_a,opcion_a,codigo_b,opcion_b,codigo_c,opcion_c,codigo_d,opcion_d,codigo_e,opcion_e,codigo_f,opcion_f,termino,anio,sistema,tipo,tipoEstudiante)
		VALUES ($numPregunta,$numRespuesta,'$pregunta','$literal','$codigo_a','$opcion_a','$codigo_b','$opcion_b','$codigo_c','$opcion_c','$codigo_d','$opcion_d','$codigo_e','$opcion_e','$codigo_f','$opcion_f','$termino',$anio,'$sistema','$tipo','$tipoEstudiante');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarRespuestasEncuestaSatisfaccion($termino,$anio,$sistema,$tipo,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_satisfaccion_respuestas where termino = '$termino' and anio = $anio and sistema= '$sistema' and tipo='$tipo' and tipoEstudiante = '$tipoEstudiante';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarRespuestasEncuestaSatisfaccionSte($termino,$anio,$sistema, $tipo)
	{
	   $link=Conectarse();
	   $sql="delete from ec_satisfaccion_respuestas where termino = '$termino' and anio = $anio and sistema= '$sistema' and tipo='$tipo';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX ENCUESTA DIAGNOSTICO PRACITCO
	function postDataEncuestaDiagnosticoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}


	function guardarDatosEncuestaDiagnosticoPractico($idEstudiante,$email,$usuario,$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into ec_diagnostico_practico(studentId,email,username,grade,m1,m2,m3,m4,m5,m6,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}


	function eliminarDatosEncuestaDiagnosticoPractico($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_diagnostico_practico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEncuestaDiagnosticoPracticoSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from ec_diagnostico_practico where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////EDX ENCUESTA DIAGNOSTICO TEORICO PRACITCO
	function postDataEncuestaDiagnosticoTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postExamenTeoricoComputador($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postExamenTeoricoInternet($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postExamenTeoricoPPT($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postExamenTeoricoExcel($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postExamenTeoricoWord($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function postExamenTeoricoHerramientas($url, $ruta, $data, $termino, $sistema, $tipoEstudiante)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosEncuestaDiagnosticoTeoricoPractico($idEstudiante,$email,$usuario,$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into ec_diagnostico_teorico_practico(studentId,email,username,grade,m1,m2,m3,m4,m5,m6,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$avm1,$avm2,$avm3,$avm4,$avm5,$avm6,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function guardarDatosExamenTeoricoComputador($idEstudiante,$email,$usuario,$grado,$m1p1,$m1p2,$m1p3,$m1p4,$m1p5,$m1p6,$m1p7,$m1p8,$m1p9,$m1p10,$m1p11,$m1p12,$m1p13,$m1p14,$m1p15,$m1p16,$m1p17,$m1p18,$m1p19,$m1p20,$m1p21,$m1p22,$m1p23,$m1p24,$m1p25,$m1p26,$m1p27,$m1p28,$m1p29,$m1p30,$m1p31,$m1p32,$m1p33,$m1p34,$m1p35,$m1p36,$m1p37,$m1p38,$m1p39,$m1p40,$m1p41,$m1p42,$m1p43,$m1p44,$m1p45,$m1p46,$m1p47,$m1p48,$m1p49,$m1p50,$m1p51,$m1p52,$m1p53,$m1p54,$m1p55,$m1p56,$m1p57,$m1p58,$m1p59,$m1p60,$m1p61,$m1p62,$m1p63,$m1p64,$m1p65,$m1p66,$m1p67,$m1p68,$m1p69,$m1p70,$m1p71,$m1p72,$m1p73,$m1p74,$m1p75,$m1p76,$m1p77,$m1p78,$m1p79,$m1p80,$m1p81,$m1p82,$m1p83,$m1p84,$m1p85,$m1p86,$m1p87,$m1p88,$m1p89,$m1p90,$m1p91,$m1p92,$m1p93,$m1p94,$m1p95,$m1p96,$m1p97,$m1p98,$m1p99,$m1p100,$m1p101,$m1p102,$m1p103,$m1p104,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into et_computador(studentId,email,username,grade,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63,p64,p65,p66,p67,p68,p69,p70,p71,p72,p73,p74,p75,p76,p77,p78,p79,p80,p81,p82,p83,p84,p85,p86,p87,p88,p89,p90,p91,p92,p93,p94,p95,p96,p97,p98,p99,p100,p101,p102,p103,p104,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$m1p1,$m1p2,$m1p3,$m1p4,$m1p5,$m1p6,$m1p7,$m1p8,$m1p9,$m1p10,$m1p11,$m1p12,$m1p13,$m1p14,$m1p15,$m1p16,$m1p17,$m1p18,$m1p19,$m1p20,$m1p21,$m1p22,$m1p23,$m1p24,$m1p25,$m1p26,$m1p27,$m1p28,$m1p29,$m1p30,$m1p31,$m1p32,$m1p33,$m1p34,$m1p35,$m1p36,$m1p37,$m1p38,$m1p39,$m1p40,$m1p41,$m1p42,$m1p43,$m1p44,$m1p45,$m1p46,$m1p47,$m1p48,$m1p49,$m1p50,$m1p51,$m1p52,$m1p53,$m1p54,$m1p55,$m1p56,$m1p57,$m1p58,$m1p59,$m1p60,$m1p61,$m1p62,$m1p63,$m1p64,$m1p65,$m1p66,$m1p67,$m1p68,$m1p69,$m1p70,$m1p71,$m1p72,$m1p73,$m1p74,$m1p75,$m1p76,$m1p77,$m1p78,$m1p79,$m1p80,$m1p81,$m1p82,$m1p83,$m1p84,$m1p85,$m1p86,$m1p87,$m1p88,$m1p89,$m1p90,$m1p91,$m1p92,$m1p93,$m1p94,$m1p95,$m1p96,$m1p97,$m1p98,$m1p99,$m1p100,$m1p101,$m1p102,$m1p103,$m1p104,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function guardarDatosExamenTeoricoInternet($idEstudiante,$email,$usuario,$grado,$m2p1,$m2p2,$m2p3,$m2p4,$m2p5,$m2p6,$m2p7,$m2p8,$m2p9,$m2p10,$m2p11,$m2p12,$m2p13,$m2p14,$m2p15,$m2p16,$m2p17,$m2p18,$m2p19,$m2p20,$m2p21,$m2p22,$m2p23,$m2p24,$m2p25,$m2p26,$m2p27,$m2p28,$m2p29,$m2p30,$m2p31,$m2p32,$m2p33,$m2p34,$m2p35,$m2p36,$m2p37,$m2p38,$m2p39,$m2p40,$m2p41,$m2p42,$m2p43,$m2p44,$m2p45,$m2p46,$m2p47,$m2p48,$m2p49,$m2p50,$m2p51,$m2p52,$m2p53,$m2p54,$m2p55,$m2p56,$m2p57,$m2p58,$m2p59,$m2p60,$m2p61,$m2p62,$m2p63,$m2p64,$m2p65,$m2p66,$m2p67,$m2p68,$m2p69,$m2p70,$m2p71,$m2p72,$m2p73,$m2p74,$m2p75,$m2p76,$m2p77,$m2p78,$m2p79,$m2p80,$m2p81,$m2p82,$m2p83,$m2p84,$m2p85,$m2p86,$m2p87,$m2p88,$m2p89,$m2p90,$m2p91,$m2p92,$m2p93,$m2p94,$m2p95,$m2p96,$m2p97,$m2p98,$m2p99,$m2p100,$m2p101,$m2p102,$m2p103,$m2p104,$m2p105,$m2p106,$m2p107,$m2p108,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into et_internet(studentId,email,username,grade,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63,p64,p65,p66,p67,p68,p69,p70,p71,p72,p73,p74,p75,p76,p77,p78,p79,p80,p81,p82,p83,p84,p85,p86,p87,p88,p89,p90,p91,p92,p93,p94,p95,p96,p97,p98,p99,p100,p101,p102,p103,p104,p105,p106,p107,p108,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$m2p1,$m2p2,$m2p3,$m2p4,$m2p5,$m2p6,$m2p7,$m2p8,$m2p9,$m2p10,$m2p11,$m2p12,$m2p13,$m2p14,$m2p15,$m2p16,$m2p17,$m2p18,$m2p19,$m2p20,$m2p21,$m2p22,$m2p23,$m2p24,$m2p25,$m2p26,$m2p27,$m2p28,$m2p29,$m2p30,$m2p31,$m2p32,$m2p33,$m2p34,$m2p35,$m2p36,$m2p37,$m2p38,$m2p39,$m2p40,$m2p41,$m2p42,$m2p43,$m2p44,$m2p45,$m2p46,$m2p47,$m2p48,$m2p49,$m2p50,$m2p51,$m2p52,$m2p53,$m2p54,$m2p55,$m2p56,$m2p57,$m2p58,$m2p59,$m2p60,$m2p61,$m2p62,$m2p63,$m2p64,$m2p65,$m2p66,$m2p67,$m2p68,$m2p69,$m2p70,$m2p71,$m2p72,$m2p73,$m2p74,$m2p75,$m2p76,$m2p77,$m2p78,$m2p79,$m2p80,$m2p81,$m2p82,$m2p83,$m2p84,$m2p85,$m2p86,$m2p87,$m2p88,$m2p89,$m2p90,$m2p91,$m2p92,$m2p93,$m2p94,$m2p95,$m2p96,$m2p97,$m2p98,$m2p99,$m2p100,$m2p101,$m2p102,$m2p103,$m2p104,$m2p105,$m2p106,$m2p107,$m2p108,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function guardarDatosExamenTeoricoPPT($idEstudiante,$email,$usuario,$grado,$m3p1,$m3p2,$m3p3,$m3p4,$m3p5,$m3p6,$m3p7,$m3p8,$m3p9,$m3p10,$m3p11,$m3p12,$m3p13,$m3p14,$m3p15,$m3p16,$m3p17,$m3p18,$m3p19,$m3p20,$m3p21,$m3p22,$m3p23,$m3p24,$m3p25,$m3p26,$m3p27,$m3p28,$m3p29,$m3p30,$m3p31,$m3p32,$m3p33,$m3p34,$m3p35,$m3p36,$m3p37,$m3p38,$m3p39,$m3p40,$m3p41,$m3p42,$m3p43,$m3p44,$m3p45,$m3p46,$m3p47,$m3p48,$m3p49,$m3p50,$m3p51,$m3p52,$m3p53,$m3p54,$m3p55,$m3p56,$m3p57,$m3p58,$m3p59,$m3p60,$m3p61,$m3p62,$m3p63,$m3p64,$m3p65,$m3p66,$m3p67,$m3p68,$m3p69,$m3p70,$m3p71,$m3p72,$m3p73,$m3p74,$m3p75,$m3p76,$m3p77,$m3p78,$m3p79,$m3p80,$m3p81,$m3p82,$m3p83,$m3p84,$m3p85,$m3p86,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into et_ppt(studentId,email,username,grade,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63,p64,p65,p66,p67,p68,p69,p70,p71,p72,p73,p74,p75,p76,p77,p78,p79,p80,p81,p82,p83,p84,p85,p86,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$m3p1,$m3p2,$m3p3,$m3p4,$m3p5,$m3p6,$m3p7,$m3p8,$m3p9,$m3p10,$m3p11,$m3p12,$m3p13,$m3p14,$m3p15,$m3p16,$m3p17,$m3p18,$m3p19,$m3p20,$m3p21,$m3p22,$m3p23,$m3p24,$m3p25,$m3p26,$m3p27,$m3p28,$m3p29,$m3p30,$m3p31,$m3p32,$m3p33,$m3p34,$m3p35,$m3p36,$m3p37,$m3p38,$m3p39,$m3p40,$m3p41,$m3p42,$m3p43,$m3p44,$m3p45,$m3p46,$m3p47,$m3p48,$m3p49,$m3p50,$m3p51,$m3p52,$m3p53,$m3p54,$m3p55,$m3p56,$m3p57,$m3p58,$m3p59,$m3p60,$m3p61,$m3p62,$m3p63,$m3p64,$m3p65,$m3p66,$m3p67,$m3p68,$m3p69,$m3p70,$m3p71,$m3p72,$m3p73,$m3p74,$m3p75,$m3p76,$m3p77,$m3p78,$m3p79,$m3p80,$m3p81,$m3p82,$m3p83,$m3p84,$m3p85,$m3p86,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function guardarDatosExamenTeoricoExcel($idEstudiante,$email,$usuario,$grado,$m4p1,$m4p2,$m4p3,$m4p4,$m4p5,$m4p6,$m4p7,$m4p8,$m4p9,$m4p10,$m4p11,$m4p12,$m4p13,$m4p14,$m4p15,$m4p16,$m4p17,$m4p18,$m4p19,$m4p20,$m4p21,$m4p22,$m4p23,$m4p24,$m4p25,$m4p26,$m4p27,$m4p28,$m4p29,$m4p30,$m4p31,$m4p32,$m4p33,$m4p34,$m4p35,$m4p36,$m4p37,$m4p38,$m4p39,$m4p40,$m4p41,$m4p42,$m4p43,$m4p44,$m4p45,$m4p46,$m4p47,$m4p48,$m4p49,$m4p50,$m4p51,$m4p52,$m4p53,$m4p54,$m4p55,$m4p56,$m4p57,$m4p58,$m4p59,$m4p60,$m4p61,$m4p62,$m4p63,$m4p64,$m4p65,$m4p66,$m4p67,$m4p68,$m4p69,$m4p70,$m4p71,$m4p72,$m4p73,$m4p74,$m4p75,$m4p76,$m4p77,$m4p78,$m4p79,$m4p80,$m4p81,$m4p82,$m4p83,$m4p84,$m4p85,$m4p86,$m4p87,$m4p88,$m4p89,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into et_excel(studentId,email,username,grade,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63,p64,p65,p66,p67,p68,p69,p70,p71,p72,p73,p74,p75,p76,p77,p78,p79,p80,p81,p82,p83,p84,p85,p86,p87,p88,p89,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$m4p1,$m4p2,$m4p3,$m4p4,$m4p5,$m4p6,$m4p7,$m4p8,$m4p9,$m4p10,$m4p11,$m4p12,$m4p13,$m4p14,$m4p15,$m4p16,$m4p17,$m4p18,$m4p19,$m4p20,$m4p21,$m4p22,$m4p23,$m4p24,$m4p25,$m4p26,$m4p27,$m4p28,$m4p29,$m4p30,$m4p31,$m4p32,$m4p33,$m4p34,$m4p35,$m4p36,$m4p37,$m4p38,$m4p39,$m4p40,$m4p41,$m4p42,$m4p43,$m4p44,$m4p45,$m4p46,$m4p47,$m4p48,$m4p49,$m4p50,$m4p51,$m4p52,$m4p53,$m4p54,$m4p55,$m4p56,$m4p57,$m4p58,$m4p59,$m4p60,$m4p61,$m4p62,$m4p63,$m4p64,$m4p65,$m4p66,$m4p67,$m4p68,$m4p69,$m4p70,$m4p71,$m4p72,$m4p73,$m4p74,$m4p75,$m4p76,$m4p77,$m4p78,$m4p79,$m4p80,$m4p81,$m4p82,$m4p83,$m4p84,$m4p85,$m4p86,$m4p87,$m4p88,$m4p89,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function guardarDatosExamenTeoricoWord($idEstudiante,$email,$usuario,$grado,$m5p1,$m5p2,$m5p3,$m5p4,$m5p5,$m5p6,$m5p7,$m5p8,$m5p9,$m5p10,$m5p11,$m5p12,$m5p13,$m5p14,$m5p15,$m5p16,$m5p17,$m5p18,$m5p19,$m5p20,$m5p21,$m5p22,$m5p23,$m5p24,$m5p25,$m5p26,$m5p27,$m5p28,$m5p29,$m5p30,$m5p31,$m5p32,$m5p33,$m5p34,$m5p35,$m5p36,$m5p37,$m5p38,$m5p39,$m5p40,$m5p41,$m5p42,$m5p43,$m5p44,$m5p45,$m5p46,$m5p47,$m5p48,$m5p49,$m5p50,$m5p51,$m5p52,$m5p53,$m5p54,$m5p55,$m5p56,$m5p57,$m5p58,$m5p59,$m5p60,$m5p61,$m5p62,$m5p63,$m5p64,$m5p65,$m5p66,$m5p67,$m5p68,$m5p69,$m5p70,$m5p71,$m5p72,$m5p73,$m5p74,$m5p75,$m5p76,$m5p77,$m5p78,$m5p79,$m5p80,$m5p81,$m5p82,$m5p83,$m5p84,$m5p85,$m5p86,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into et_word(studentId,email,username,grade,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,p53,p54,p55,p56,p57,p58,p59,p60,p61,p62,p63,p64,p65,p66,p67,p68,p69,p70,p71,p72,p73,p74,p75,p76,p77,p78,p79,p80,p81,p82,p83,p84,p85,p86,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$m5p1,$m5p2,$m5p3,$m5p4,$m5p5,$m5p6,$m5p7,$m5p8,$m5p9,$m5p10,$m5p11,$m5p12,$m5p13,$m5p14,$m5p15,$m5p16,$m5p17,$m5p18,$m5p19,$m5p20,$m5p21,$m5p22,$m5p23,$m5p24,$m5p25,$m5p26,$m5p27,$m5p28,$m5p29,$m5p30,$m5p31,$m5p32,$m5p33,$m5p34,$m5p35,$m5p36,$m5p37,$m5p38,$m5p39,$m5p40,$m5p41,$m5p42,$m5p43,$m5p44,$m5p45,$m5p46,$m5p47,$m5p48,$m5p49,$m5p50,$m5p51,$m5p52,$m5p53,$m5p54,$m5p55,$m5p56,$m5p57,$m5p58,$m5p59,$m5p60,$m5p61,$m5p62,$m5p63,$m5p64,$m5p65,$m5p66,$m5p67,$m5p68,$m5p69,$m5p70,$m5p71,$m5p72,$m5p73,$m5p74,$m5p75,$m5p76,$m5p77,$m5p78,$m5p79,$m5p80,$m5p81,$m5p82,$m5p83,$m5p84,$m5p85,$m5p86,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function guardarDatosExamenTeoricoHerramientas($idEstudiante,$email,$usuario,$grado,$m6p1,$m6p2,$m6p3,$m6p4,$m6p5,$m6p6,$m6p7,$m6p8,$m6p9,$m6p10,$m6p11,$m6p12,$m6p13,$m6p14,$m6p15,$m6p16,$m6p17,$m6p18,$m6p19,$m6p20,$m6p21,$m6p22,$m6p23,$m6p24,$m6p25,$m6p26,$m6p27,$m6p28,$m6p29,$m6p30,$m6p31,$m6p32,$m6p33,$m6p34,$m6p35,$m6p36,$m6p37,$m6p38,$m6p39,$m6p40,$m6p41,$m6p42,$m6p43,$m6p44,$m6p45,$m6p46,$m6p47,$m6p48,$m6p49,$m6p50,$m6p51,$m6p52,$termino,$anio,$sistema,$adminEspol)
	{
		$link=Conectarse();
		$sql="insert into et_herramientas(studentId,email,username,grade,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,p24,p25,p26,p27,p28,p29,p30,p31,p32,p33,p34,p35,p36,p37,p38,p39,p40,p41,p42,p43,p44,p45,p46,p47,p48,p49,p50,p51,p52,termino,anio,sistema,tipoEstudiante)
		VALUES ($idEstudiante,'$email','$usuario',$grado,$m6p1,$m6p2,$m6p3,$m6p4,$m6p5,$m6p6,$m6p7,$m6p8,$m6p9,$m6p10,$m6p11,$m6p12,$m6p13,$m6p14,$m6p15,$m6p16,$m6p17,$m6p18,$m6p19,$m6p20,$m6p21,$m6p22,$m6p23,$m6p24,$m6p25,$m6p26,$m6p27,$m6p28,$m6p29,$m6p30,$m6p31,$m6p32,$m6p33,$m6p34,$m6p35,$m6p36,$m6p37,$m6p38,$m6p39,$m6p40,$m6p41,$m6p42,$m6p43,$m6p44,$m6p45,$m6p46,$m6p47,$m6p48,$m6p49,$m6p50,$m6p51,$m6p52,'$termino',$anio,'$sistema','$adminEspol');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosEncuestaDiagnosticoTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from ec_diagnostico_teorico_practico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoComputador($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from et_computador where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoInternet($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from et_internet where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoPPT($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from et_ppt where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoExcel($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from et_excel where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoWord($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from et_word where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoHerramientas($termino,$anio,$sistema,$tipoEstudiante)
	{
	   $link=Conectarse();
	   $sql="delete from et_herramientas where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosEncuestaDiagnosticoTeoricoPracticoSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from ec_diagnostico_teorico_practico where termino = '$termino' and anio = $anio and sistema= '$sistema';";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoComputadorSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from et_computador where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoInternetSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from et_internet where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoPPTSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from et_ppt where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoExcelSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from et_excel where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoWordSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from et_word where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosExamenTeoricoHerramientasSte($termino,$anio,$sistema)
	{
	   $link=Conectarse();
	   $sql="delete from et_herramientas where termino = '$termino' and anio = $anio and sistema= '$sistema';";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}



	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUBRICA EXCEL PRACTICO
	function postdataRubricaExcelPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'franja' => $franja,
			'paralelo' => $paralelo,
			'docente' => $docente
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosRubricaExcelPractico($name,$id,$sis_id,$section,$enviado,$p1,$c1,$p2,$c2,$p3,$c3,$p4,$c4,$p5,$c5,$p6,$c6,$p7,$c7,$p8,$c8,$p9,$c9,$p10,$c10,$p11,$c11,$p12,$c12,$p13,$c13,$p14,$c14,$p15,$c15,$intento,$correcto,$incorrecto,$calificacion,$termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo,$docente)
	{
		$link=Conectarse();
		$sql="insert into rubricasExcelPractico(name,id,sis_id,section,envio,p1,c1,p2,c2,p3,c3,p4,c4,p5,c5,p6,c6,p7,c7,p8,c8,p9,c9,p10,c10,p11,c11,p12,c12,p13,c13,p14,c14,p15,c15,intento,correcto,incorrecto,calificacion,termino,anio,sistema,tipoEstudiante,franja,paralelo,docente)
		VALUES ('$name',$id,'$sis_id','$section','$enviado','$p1',$c1,'$p2',$c2,'$p3',$c3,'$p4',$c4,'$p5',$c5,'$p6',$c6,'$p7',$c7,'$p8',$c8,'$p9',$c9,'$p10',$c10,'$p11',$c11,'$p12',$c12,'$p13',$c13,'$p14',$c14,'$p15',$c15,$intento,$correcto,$incorrecto,$calificacion,'$termino',$anio,'$sistema','$tipoEstudiante',$franja,$paralelo,'$docente');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosRubricaExcelPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasExcelPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosRubricaExcelPracticoSte($termino,$anio,$sistema,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasExcelPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}




	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUBRICA EXCEL TEORICO PRACTICO
	function postdataRubricaExcelTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'franja' => $franja,
			'paralelo' => $paralelo,
			'docente' => $docente
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosRubricaExcelTeoricoPractico($name,$id,$sis_id,$section,$enviado,$p1,$c1,$p2,$c2,$p3,$c3,$p4,$c4,$p5,$c5,$p6,$c6,$p7,$c7,$p8,$c8,$p9,$c9,$p10,$c10,$p11,$c11,$p12,$c12,$p13,$c13,$p14,$c14,$p15,$c15,$intento,$correcto,$incorrecto,$calificacion,$termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo,$docente)
	{
		$link=Conectarse();
		$sql="insert into rubricasExcelTeoricoPractico(name,id,sis_id,section,envio,p1,c1,p2,c2,p3,c3,p4,c4,p5,c5,p6,c6,p7,c7,p8,c8,p9,c9,p10,c10,p11,c11,p12,c12,p13,c13,p14,c14,p15,c15,intento,correcto,incorrecto,calificacion,termino,anio,sistema,tipoEstudiante,franja,paralelo,docente)
		VALUES ('$name',$id,'$sis_id','$section','$enviado','$p1',$c1,'$p2',$c2,'$p3',$c3,'$p4',$c4,'$p5',$c5,'$p6',$c6,'$p7',$c7,'$p8',$c8,'$p9',$c9,'$p10',$c10,'$p11',$c11,'$p12',$c12,'$p13',$c13,'$p14',$c14,'$p15',$c15,$intento,$correcto,$incorrecto,$calificacion,'$termino',$anio,'$sistema','$tipoEstudiante',$franja,$paralelo,'$docente');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosRubricaExcelTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasExcelTeoricoPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosRubricaExcelTeoricoPracticoSte($termino,$anio,$sistema,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasExcelTeoricoPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}





	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUBRICA POWER POINT PRACTICO
	function postdataRubricaPPTPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'franja' => $franja,
			'paralelo' => $paralelo,
			'docente' => $docente
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosRubricaPPTPractico($id,$estudiante,$cedula,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,$p23,$calificacion,$termino,$anio,$sistema,$adminEspol,$franja,$paralelo,$docente)
	{
		$link=Conectarse();
		$sql="insert into rubricasPPTPractico(id,estudiante,cedula,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,calificacion,termino,anio,sistema,tipoEstudiante,franja,paralelo,docente)
		VALUES ($id,'$estudiante','$cedula',$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,$p23,$calificacion,'$termino',$anio,'$sistema','$adminEspol',$franja,$paralelo,'$docente');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosRubricaPPTPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasPPTPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosRubricaPPTPracticoSte($termino,$anio,$sistema,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasPPTPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}




	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUBRICA POWER POINT TEORICO PRACTICO
	function postdataRubricaPPTTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'franja' => $franja,
			'paralelo' => $paralelo,
			'docente' => $docente
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosRubricaPPTTeoricoPractico($id,$estudiante,$cedula,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,$p23,$calificacion,$termino,$anio,$sistema,$adminEspol,$franja,$paralelo,$docente)
	{
		$link=Conectarse();
		$sql="insert into rubricasPPTTeoricoPractico(id,estudiante,cedula,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20,p21,p22,p23,calificacion,termino,anio,sistema,tipoEstudiante,franja,paralelo,docente)
		VALUES ($id,'$estudiante','$cedula',$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20,$p21,$p22,$p23,$calificacion,'$termino',$anio,'$sistema','$adminEspol',$franja,$paralelo,'$docente');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosRubricaPPTTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasPPTTeoricoPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosRubricaPPTTeoricoPracticoSte($termino,$anio,$sistema,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasPPTTeoricoPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}





	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUBRICA WORD PRACTICO
	function postdataRubricaWordPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'franja' => $franja,
			'paralelo' => $paralelo,
			'docente' => $docente
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosRubricaWordPractico($id,$estudiante,$cedula,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$calificacion,$termino,$anio,$sistema,$adminEspol,$franja,$paralelo,$docente)
	{
		$link=Conectarse();
		$sql="insert into rubricasWordPractico(id,estudiante,cedula,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,calificacion,termino,anio,sistema,tipoEstudiante,franja,paralelo,docente)
		VALUES ($id,'$estudiante','$cedula',$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$calificacion,'$termino',$anio,'$sistema','$adminEspol',$franja,$paralelo,'$docente');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosRubricaWordPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasWordPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosRubricaWordPracticoSte($termino,$anio,$sistema,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasWordPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}




	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RUBRICA WORD TEORICO PRACTICO
	function postdataRubricaWordTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente)
	{
		set_time_limit(500);
		$target_url = $url;           
		$fname = $ruta.$data;   
		$cfile = new CURLFile(realpath($fname));                    
		$post = array 
		(
			'archivo' => $cfile,
			'termino' => $termino,
			'sistema' => $sistema,
			'tipoEstudiante' => $tipoEstudiante,
			'franja' => $franja,
			'paralelo' => $paralelo,
			'docente' => $docente
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" . $fname .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardarDatosRubricaWordTeoricoPractico($id,$estudiante,$cedula,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$calificacion,$termino,$anio,$sistema,$adminEspol,$franja,$paralelo,$docente)
	{
		$link=Conectarse();
		$sql="insert into rubricasWordTeoricoPractico(id,estudiante,cedula,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,calificacion,termino,anio,sistema,tipoEstudiante,franja,paralelo,docente)
		VALUES ($id,'$estudiante','$cedula',$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$calificacion,'$termino',$anio,'$sistema','$adminEspol',$franja,$paralelo,'$docente');";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosRubricaWordTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasWordTeoricoPractico where termino = '$termino' and tipoEstudiante = '$tipoEstudiante' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";	
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

	function eliminarDatosRubricaWordTeoricoPracticoSte($termino,$anio,$sistema,$franja,$paralelo)
	{
	   $link=Conectarse();
	   $sql="delete from rubricasWordTeoricoPractico where termino = '$termino' and anio = $anio and sistema= '$sistema' and franja=$franja and paralelo=$paralelo;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////PUNTAS EXTRAS PRACTICO
	function postdatapuntosextraspractico($url, $termino, $anio)
	{
		set_time_limit(500);
		$target_url = $url;           
		$post = array 
		(
			'termino' => $termino,
			'anio' => $anio
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardar_datos_puntos_extras_practico($matricula,$identificacion,$nombres,$apellidos,$email,$calificacionExcel,$calificacionPPT,$calificacionWord,$demografica,$diagnostico,$satisfaccion,$puntosExtras,$Excel,$PPT,$Word,$termino,$anio,$sistema,$tipoEstudiante,$cohorte,$franja,$paralelo)
	{
		$link=Conectarse();
		$sql="insert into puntos_extras_practico(matricula,identificacion,nombres,apellidos,email,calificacionExcel,calificacionPPT,calificacionWord,demografica,diagnostico,satisfaccion,puntosExtras,Excel,PPT,Word,termino,anio,sistema,tipoEstudiante,cohorte,franja,paralelo)
		VALUES ('$matricula','$identificacion','$nombres','$apellidos','$email',$calificacionExcel,$calificacionPPT,$calificacionWord,$demografica,$diagnostico,$satisfaccion,$puntosExtras,$Excel,$PPT,$Word,'$termino',$anio,'$sistema','$tipoEstudiante','$cohorte',$franja,$paralelo);";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosPuntosExtrasPracticos($termino,$anio)
	{
	   $link=Conectarse();
	   $sql="delete from puntos_extras_practico where termino = '$termino' and anio = $anio;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////PUNTAS EXTRAS TEORICO PRACTICO
	function postdatapuntosextrasteoricopractico($url, $termino, $anio)
	{
		set_time_limit(500);
		$target_url = $url;           
		$post = array 
		(
			'termino' => $termino,
			'anio' => $anio
		);    
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		
		$resultadoExec = curl_exec ($ch);
		
		if ($resultadoExec === FALSE) {
			$response =  "Error sending" .  " " . curl_error($ch);
			curl_close ($ch);
		}else{
			curl_close ($ch);
			$response =   "Result: " . $resultadoExec;
		}
		
		return $response;
	}

	function guardar_datos_puntos_extras_teorico_practico($matricula,$identificacion,$nombres,$apellidos,$email,$calificacionExcel,$calificacionPPT,$calificacionWord,$demografica,$diagnostico,$satisfaccion,$puntosExtras,$Excel,$PPT,$Word,$termino,$anio,$sistema,$tipoEstudiante,$cohorte,$franja,$paralelo)
	{
		$link=Conectarse();
		$sql="insert into puntos_extras_teorico_practico(matricula,identificacion,nombres,apellidos,email,calificacionExcel,calificacionPPT,calificacionWord,demografica,diagnostico,satisfaccion,puntosExtras,Excel,PPT,Word,termino,anio,sistema,tipoEstudiante,cohorte,franja,paralelo)
		VALUES ('$matricula','$identificacion','$nombres','$apellidos','$email',$calificacionExcel,$calificacionPPT,$calificacionWord,$demografica,$diagnostico,$satisfaccion,$puntosExtras,$Excel,$PPT,$Word,'$termino',$anio,'$sistema','$tipoEstudiante','$cohorte',$franja,$paralelo);";
		$result=mysqli_query($link,$sql) or die(mysqli_error($link));
		return $result;
	}

	function eliminarDatosPuntosExtrasTeoricoPracticos($termino,$anio)
	{
	   $link=Conectarse();
	   $sql="delete from puntos_extras_teorico_practico where termino = '$termino' and anio = $anio;";		   
	   $result=mysqli_query($link,$sql) or die(mysqli_error());
	}




?>