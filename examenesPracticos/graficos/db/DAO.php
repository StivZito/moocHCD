<?php
	function getArraySQL($sql,$conexion){
		mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		if(!$result = mysqli_query($conexion, $sql)) 
			die(); //si la conexión cancelar programa

		$rawdata = array(); //creamos un array

		//guardamos en un array multidimensional todos los datos de la consulta
		$i=0;
		while($row = mysqli_fetch_array($result)){
			$rawdata[$i] = $row;
			$i++;
		}
		return $rawdata;
	}
	
	function getArraySimple($sql,$conexion, $campo){
		mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		if(!$result = mysqli_query($conexion, $sql)) 
			die();
		$rawdata = array();
		$i=0;
		while($row = mysqli_fetch_array($result)){
			$rawdata[$i] = $row[$campo];
			$i++;
		}
		return $rawdata;
	}
?>