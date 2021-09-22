<?php 
	require_once "global.php";
	$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	mysqli_query($conexion, 'SET_NAMES "'.DB_ENCODE.'"');

	//verfica error en la conexion
	if(mysqli_connect_errno()){
		printf("Fallo la conexion con la BD: %s\n", mysql_connect_error());
		exit();
	}

	function executeQuery($sql){
		global $conexion;
		$query = $conexion -> query($sql);
		$conexion->close();
		return $query;
	}

	//retorna un query
	function ejecutarConsulta($sql){
		global $conexion;
		$query = $conexion -> query($sql);
		$conexion->close();
		return $query;
	}

	//retorna una sola fila
	function ejecutarConsultaSimpleFila($sql){
		global $conexion;
		$query = $conexion -> query($sql);
		$row = $query -> fetch_assoc();
		$conexion->close();
		return $row;
	}

	//retorna el id del registro insertado
	function ejecutarConsultaId($sql){
		global $conexion;
		$query = $conexion -> query($sql);
		$conexion->close();
		return $conexion -> insert_id;
	}

	//Escapa los caracteres especiales de una cadena para usarlo en una sentencia sql
	function limpiarCadena($str){
		global $conexion;
		$str = $conexion -> mysqli_real_escape_string($conexion, trim($str));
		$conexion->close();
		return htmlspecialchars($str);
	}


?>