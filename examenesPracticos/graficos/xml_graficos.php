<?php
include ("db/db.php");
$opt = $_POST["filtro"];

switch ($opt){
    case 'sexo':
        $termino = $_POST["termin"];
        $condicion = '';
        if( $termino != '0' )
            $condicion = "and c.termino like '%$termino%'";
        else 
            $condicion = '';
        echo json_encode([
            'posible' => 'SI',
            'termino' => $termino,
            'archivo' => "graph_pastelS.php"
        ]);
        break;
    case 'tipo':
        $termino = $_POST["termin"];
        $condicion = '';
        if( $termino != '0' )
            $condicion = "and c.termino like '%$termino%'";
        else 
            $condicion = '';
        echo json_encode([
            'posible' => 'SI',
            'termino' => $termino,
            'archivo' => "graph_columnT.php"
        ]);
        break;

    case 'carrera':
        echo json_encode([
            'posible' => 'NO'
        ]);
        break;

    case 'promedio':
        $termino = $_POST["termin"];
        $condicion = '';
        if( $termino != '0' )
            $condicion = "and c.termino like '%$termino%'";
        else 
            $condicion = '';
        echo json_encode([
            'posible' => 'SI',
            'termino' => $termino,
            'archivo' => "graph_columnP.php"
        ]);
        break;
}

?>