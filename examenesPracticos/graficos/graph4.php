<?php
include ("db/db.php");
$termino = $_GET["termino"];
$consulta = '';
switch ($_GET["tipo_grafico"])
{
    case '4':
        $consulta = query4($termino);

        $condicion3N = "numVeces";
        //$valor1 = "FEMENINO";
        //$valor2 = "MASCULINO";
        $condicion4N = "tipoEstudiante";
        $valor4_1 = "ESPOL";
        $valor4_2 = "ADMISION";

    break;
		
	
}

$data = $consulta;
$series = '';

$drilldowmG = '';
$drilldowmF = '';
$drilldowmM = '';
$drilldowmT = '';

$drilldowmG_3N = '';
$drilldowmF_3N = '';
$drilldowmM_3N = '';
$drilldowmT_3N = '';

$countG = 0;
$countM = 0;
$countF = 0;
$countT = 0;

$arrayG = array();
$arrayF = array();
$arrayM = array();
$arrayT = array();

while ($row = $data->fetch_array())
{

    $countT++;
    if (array_key_exists('' . $row["carrera"] . '', $arrayT))
    {

        $arrayT['' . $row['carrera'] . '']["TOTAL"] += 1;

        switch ($row[$condicion3N])
        {
            case '0':
                $arrayT['' . $row['carrera'] . '']["vez_0"] += 1;
            break;
            case '1':
                $arrayT['' . $row['carrera'] . '']["vez_1"] += 1;
            break;
            case '2':
                $arrayT['' . $row['carrera'] . '']["vez_2"] += 1;
            break;
            case '3':
                $arrayT['' . $row['carrera'] . '']["vez_3"] += 1;
            break;
            case '4':
                $arrayT['' . $row['carrera'] . '']["vez_4"] += 1;
            break;
            case '5':
                $arrayT['' . $row['carrera'] . '']["vez_5"] += 1;
            break;
            case '6':
                $arrayT['' . $row['carrera'] . '']["vez_6"] += 1;
            break;
            case '7':
                $arrayT['' . $row['carrera'] . '']["vez_7"] += 1;
            break;
            case '8':
                $arrayT['' . $row['carrera'] . '']["vez_8"] += 1;
            break;
            case '9':
                $arrayT['' . $row['carrera'] . '']["vez_9"] += 1;
            break;
            case '10':
                $arrayT['' . $row['carrera'] . '']["vez_10"] += 1;
            break;

        }

        if ($row[$condicion4N] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$valor4_1] += 1;
        else $arrayT['' . $row['carrera'] . ''][$valor4_2] += 1;

    }
    else
    {

        $arrayT['' . $row['carrera'] . '']["TOTAL"] = 1;

        $arrayT['' . $row['carrera'] . '']["vez_0"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_1"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_2"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_3"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_4"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_5"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_6"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_7"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_8"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_9"] = 0;
        $arrayT['' . $row['carrera'] . '']["vez_10"] = 0;
        switch ($row[$condicion3N])
        {
            case '0':
                $arrayT['' . $row['carrera'] . '']["vez_0"] = 1;
            break;
            case '1':
                $arrayT['' . $row['carrera'] . '']["vez_1"] = 1;
            break;
            case '2':
                $arrayT['' . $row['carrera'] . '']["vez_2"] = 1;
            break;
            case '3':
                $arrayT['' . $row['carrera'] . '']["vez_3"] = 1;
            break;
            case '4':
                $arrayT['' . $row['carrera'] . '']["vez_4"] = 1;
            break;
            case '5':
                $arrayT['' . $row['carrera'] . '']["vez_5"] = 1;
            break;
            case '6':
                $arrayT['' . $row['carrera'] . '']["vez_6"] = 1;
            break;
            case '7':
                $arrayT['' . $row['carrera'] . '']["vez_7"] = 1;
            break;
            case '8':
                $arrayT['' . $row['carrera'] . '']["vez_8"] = 1;
            break;
            case '9':
                $arrayT['' . $row['carrera'] . '']["vez_9"] = 1;
            break;
            case '10':
                $arrayT['' . $row['carrera'] . '']["vez_10"] = 1;
            break;

        }

        if ($row[$condicion4N] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$valor4_1] = 1;
        else $arrayT['' . $row['carrera'] . ''][$valor4_1] = 0;

        if ($row[$condicion4N] == $valor4_2) $arrayT['' . $row['carrera'] . ''][$valor4_2] = 1;
        else $arrayT['' . $row['carrera'] . ''][$valor4_2] = 0;

    }

    $c = substr($row["termino"], 0, 2);
    if ($c == '0T')
    {
        $countF++;
        if (array_key_exists('' . $row["carrera"] . '', $arrayF))
        {

            $arrayF['' . $row['carrera'] . '']["TOTAL"] += 1;

            switch ($row[$condicion3N])
            {
                case '0':
                    $arrayF['' . $row['carrera'] . '']["vez_0"] += 1;
                break;
                case '1':
                    $arrayF['' . $row['carrera'] . '']["vez_1"] += 1;
                break;
                case '2':
                    $arrayF['' . $row['carrera'] . '']["vez_2"] += 1;
                break;
                case '3':
                    $arrayF['' . $row['carrera'] . '']["vez_3"] += 1;
                break;
                case '4':
                    $arrayF['' . $row['carrera'] . '']["vez_4"] += 1;
                break;
                case '5':
                    $arrayF['' . $row['carrera'] . '']["vez_5"] += 1;
                break;
                case '6':
                    $arrayF['' . $row['carrera'] . '']["vez_6"] += 1;
                break;
                case '7':
                    $arrayF['' . $row['carrera'] . '']["vez_7"] += 1;
                break;
                case '8':
                    $arrayF['' . $row['carrera'] . '']["vez_8"] += 1;
                break;
                case '9':
                    $arrayF['' . $row['carrera'] . '']["vez_9"] += 1;
                break;
                case '10':
                    $arrayF['' . $row['carrera'] . '']["vez_10"] += 1;
                break;

            }

            if ($row[$condicion4N] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$valor4_1] += 1;
            else $arrayF['' . $row['carrera'] . ''][$valor4_2] += 1;

        }
        else
        {

            $arrayF['' . $row['carrera'] . '']["TOTAL"] = 1;

            $arrayF['' . $row['carrera'] . '']["vez_0"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_1"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_2"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_3"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_4"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_5"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_6"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_7"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_8"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_9"] = 0;
            $arrayF['' . $row['carrera'] . '']["vez_10"] = 0;
            switch ($row[$condicion3N])
            {
                case '0':
                    $arrayF['' . $row['carrera'] . '']["vez_0"] = 1;
                break;
                case '1':
                    $arrayF['' . $row['carrera'] . '']["vez_1"] = 1;
                break;
                case '2':
                    $arrayF['' . $row['carrera'] . '']["vez_2"] = 1;
                break;
                case '3':
                    $arrayF['' . $row['carrera'] . '']["vez_3"] = 1;
                break;
                case '4':
                    $arrayF['' . $row['carrera'] . '']["vez_4"] = 1;
                break;
                case '5':
                    $arrayF['' . $row['carrera'] . '']["vez_5"] = 1;
                break;
                case '6':
                    $arrayF['' . $row['carrera'] . '']["vez_6"] = 1;
                break;
                case '7':
                    $arrayF['' . $row['carrera'] . '']["vez_7"] = 1;
                break;
                case '8':
                    $arrayF['' . $row['carrera'] . '']["vez_8"] = 1;
                break;
                case '9':
                    $arrayF['' . $row['carrera'] . '']["vez_9"] = 1;
                break;
                case '10':
                    $arrayF['' . $row['carrera'] . '']["vez_10"] = 1;
                break;

            }

            if ($row[$condicion4N] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$valor4_1] = 1;
            else $arrayF['' . $row['carrera'] . ''][$valor4_1] = 0;

            if ($row[$condicion4N] == $valor4_2) $arrayF['' . $row['carrera'] . ''][$valor4_2] = 1;
            else $arrayF['' . $row['carrera'] . ''][$valor4_2] = 0;

        }
    }
    else if ($c == '1T')
    {
        $countG++;
        if (array_key_exists('' . $row["carrera"] . '', $arrayG))
        {

            $arrayG['' . $row['carrera'] . '']["TOTAL"] += 1;

            switch ($row[$condicion3N])
            {
                case '0':
                    $arrayG['' . $row['carrera'] . '']["vez_0"] += 1;
                break;
                case '1':
                    $arrayG['' . $row['carrera'] . '']["vez_1"] += 1;
                break;
                case '2':
                    $arrayG['' . $row['carrera'] . '']["vez_2"] += 1;
                break;
                case '3':
                    $arrayG['' . $row['carrera'] . '']["vez_3"] += 1;
                break;
                case '4':
                    $arrayG['' . $row['carrera'] . '']["vez_4"] += 1;
                break;
                case '5':
                    $arrayG['' . $row['carrera'] . '']["vez_5"] += 1;
                break;
                case '6':
                    $arrayG['' . $row['carrera'] . '']["vez_6"] += 1;
                break;
                case '7':
                    $arrayG['' . $row['carrera'] . '']["vez_7"] += 1;
                break;
                case '8':
                    $arrayG['' . $row['carrera'] . '']["vez_8"] += 1;
                break;
                case '9':
                    $arrayG['' . $row['carrera'] . '']["vez_9"] += 1;
                break;
                case '10':
                    $arrayG['' . $row['carrera'] . '']["vez_10"] += 1;
                break;

            }

            if ($row[$condicion4N] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$valor4_1] += 1;
            else $arrayG['' . $row['carrera'] . ''][$valor4_2] += 1;

        }
        else
        {

            $arrayG['' . $row['carrera'] . '']["TOTAL"] = 1;

            $arrayG['' . $row['carrera'] . '']["vez_0"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_1"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_2"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_3"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_4"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_5"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_6"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_7"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_8"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_9"] = 0;
            $arrayG['' . $row['carrera'] . '']["vez_10"] = 0;
            switch ($row[$condicion3N])
            {
                case '0':
                    $arrayG['' . $row['carrera'] . '']["vez_0"] = 1;
                break;
                case '1':
                    $arrayG['' . $row['carrera'] . '']["vez_1"] = 1;
                break;
                case '2':
                    $arrayG['' . $row['carrera'] . '']["vez_2"] = 1;
                break;
                case '3':
                    $arrayG['' . $row['carrera'] . '']["vez_3"] = 1;
                break;
                case '4':
                    $arrayG['' . $row['carrera'] . '']["vez_4"] = 1;
                break;
                case '5':
                    $arrayG['' . $row['carrera'] . '']["vez_5"] = 1;
                break;
                case '6':
                    $arrayG['' . $row['carrera'] . '']["vez_6"] = 1;
                break;
                case '7':
                    $arrayG['' . $row['carrera'] . '']["vez_7"] = 1;
                break;
                case '8':
                    $arrayG['' . $row['carrera'] . '']["vez_8"] = 1;
                break;
                case '9':
                    $arrayG['' . $row['carrera'] . '']["vez_9"] = 1;
                break;
                case '10':
                    $arrayG['' . $row['carrera'] . '']["vez_10"] = 1;
                break;

            }

            if ($row[$condicion4N] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$valor4_1] = 1;
            else $arrayG['' . $row['carrera'] . ''][$valor4_1] = 0;

            if ($row[$condicion4N] == $valor4_2) $arrayG['' . $row['carrera'] . ''][$valor4_2] = 1;
            else $arrayG['' . $row['carrera'] . ''][$valor4_2] = 0;

        }
    }
    else
    {
        $countM++;
        if (array_key_exists('' . $row["carrera"] . '', $arrayM))
        {

            $arrayM['' . $row['carrera'] . '']["TOTAL"] += 1;

            switch ($row[$condicion3N])
            {
                case '0':
                    $arrayM['' . $row['carrera'] . '']["vez_0"] += 1;
                break;
                case '1':
                    $arrayM['' . $row['carrera'] . '']["vez_1"] += 1;
                break;
                case '2':
                    $arrayM['' . $row['carrera'] . '']["vez_2"] += 1;
                break;
                case '3':
                    $arrayM['' . $row['carrera'] . '']["vez_3"] += 1;
                break;
                case '4':
                    $arrayM['' . $row['carrera'] . '']["vez_4"] += 1;
                break;
                case '5':
                    $arrayM['' . $row['carrera'] . '']["vez_5"] += 1;
                break;
                case '6':
                    $arrayM['' . $row['carrera'] . '']["vez_6"] += 1;
                break;
                case '7':
                    $arrayM['' . $row['carrera'] . '']["vez_7"] += 1;
                break;
                case '8':
                    $arrayM['' . $row['carrera'] . '']["vez_8"] += 1;
                break;
                case '9':
                    $arrayM['' . $row['carrera'] . '']["vez_9"] += 1;
                break;
                case '10':
                    $arrayM['' . $row['carrera'] . '']["vez_10"] += 1;
                break;

            }

            if ($row[$condicion4N] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$valor4_1] += 1;
            else $arrayM['' . $row['carrera'] . ''][$valor4_2] += 1;

        }
        else
        {

            $arrayM['' . $row['carrera'] . '']["TOTAL"] = 1;

            $arrayM['' . $row['carrera'] . '']["vez_0"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_1"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_2"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_3"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_4"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_5"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_6"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_7"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_8"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_9"] = 0;
            $arrayM['' . $row['carrera'] . '']["vez_10"] = 0;
            switch ($row[$condicion3N])
            {
                case '0':
                    $arrayM['' . $row['carrera'] . '']["vez_0"] = 1;
                break;
                case '1':
                    $arrayM['' . $row['carrera'] . '']["vez_1"] = 1;
                break;
                case '2':
                    $arrayM['' . $row['carrera'] . '']["vez_2"] = 1;
                break;
                case '3':
                    $arrayM['' . $row['carrera'] . '']["vez_3"] = 1;
                break;
                case '4':
                    $arrayM['' . $row['carrera'] . '']["vez_4"] = 1;
                break;
                case '5':
                    $arrayM['' . $row['carrera'] . '']["vez_5"] = 1;
                break;
                case '6':
                    $arrayM['' . $row['carrera'] . '']["vez_6"] = 1;
                break;
                case '7':
                    $arrayM['' . $row['carrera'] . '']["vez_7"] = 1;
                break;
                case '8':
                    $arrayM['' . $row['carrera'] . '']["vez_8"] = 1;
                break;
                case '9':
                    $arrayM['' . $row['carrera'] . '']["vez_9"] = 1;
                break;
                case '10':
                    $arrayM['' . $row['carrera'] . '']["vez_10"] = 1;
                break;

            }

            if ($row[$condicion4N] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$valor4_1] = 1;
            else $arrayM['' . $row['carrera'] . ''][$valor4_1] = 0;

            if ($row[$condicion4N] == $valor4_2) $arrayM['' . $row['carrera'] . ''][$valor4_2] = 1;
            else $arrayM['' . $row['carrera'] . ''][$valor4_2] = 0;

        }
    }
}

foreach ($arrayF as $key => $value)
{
    $drilldowmF .= '[
                    "' . $key . '",
                    ' . $value["TOTAL"] . ',
                    "' . $key . '_OT"
                ],
    ';
    $drilldowmF_3N .= '{
    name: "' . $key . '",
    id: "' . $key . '_OT",
    type: "column",
    data: [
            ["N??mero Veces 0", ' . $value["vez_0"] . '],
            ["N??mero Veces 1", ' . $value["vez_1"] . '],
            ["N??mero Veces 2", ' . $value["vez_2"] . '],
            ["N??mero Veces 3", ' . $value["vez_3"] . '],
            ["N??mero Veces 4", ' . $value["vez_4"] . '],
            ["N??mero Veces 5", ' . $value["vez_5"] . '],
            ["N??mero Veces 6", ' . $value["vez_6"] . '],
            ["N??mero Veces 7", ' . $value["vez_7"] . '],
            ["N??mero Veces 8", ' . $value["vez_8"] . '],
            ["N??mero Veces 9", ' . $value["vez_9"] . '],
            ["N??mero Veces 10", ' . $value["vez_10"] . ']
        ],
    },';
}
foreach ($arrayG as $key => $value)
{
    $drilldowmG .= '[
                "' . $key . '",
                ' . $value["TOTAL"] . ',
                "' . $key . '_1T"
            ],
';
    $drilldowmG_3N .= '{
    name: "' . $key . '",
    id: "' . $key . '_1T",
    type: "column",
    data: [
            ["N??mero Veces 0", ' . $value["vez_0"] . '],
            ["N??mero Veces 1", ' . $value["vez_1"] . '],
            ["N??mero Veces 2", ' . $value["vez_2"] . '],
            ["N??mero Veces 3", ' . $value["vez_3"] . '],
            ["N??mero Veces 4", ' . $value["vez_4"] . '],
            ["N??mero Veces 5", ' . $value["vez_5"] . '],
            ["N??mero Veces 6", ' . $value["vez_6"] . '],
            ["N??mero Veces 7", ' . $value["vez_7"] . '],
            ["N??mero Veces 8", ' . $value["vez_8"] . '],
            ["N??mero Veces 9", ' . $value["vez_9"] . '],
            ["N??mero Veces 10", ' . $value["vez_10"] . ']
    ],
    },';
}
foreach ($arrayM as $key => $value)
{
    $drilldowmM .= '[
                    "' . $key . '",
                    ' . $value["TOTAL"] . ',
                    "' . $key . '_2T"
                ],
    ';
    $drilldowmM_3N .= '{
    name: "' . $key . '",
    id: "' . $key . '_2T",
    type: "column",
    data: [
            ["N??mero Veces 0", ' . $value["vez_0"] . '],
            ["N??mero Veces 1", ' . $value["vez_1"] . '],
            ["N??mero Veces 2", ' . $value["vez_2"] . '],
            ["N??mero Veces 3", ' . $value["vez_3"] . '],
            ["N??mero Veces 4", ' . $value["vez_4"] . '],
            ["N??mero Veces 5", ' . $value["vez_5"] . '],
            ["N??mero Veces 6", ' . $value["vez_6"] . '],
            ["N??mero Veces 7", ' . $value["vez_7"] . '],
            ["N??mero Veces 8", ' . $value["vez_8"] . '],
            ["N??mero Veces 9", ' . $value["vez_9"] . '],
            ["N??mero Veces 10", ' . $value["vez_10"] . ']
    ],
    },';
}

foreach ($arrayT as $key => $value)
{
    $drilldowmT .= '[
                "' . $key . '",
                ' . $value["TOTAL"] . ',
                "' . $key . '_Todos"
            ],
';
    $drilldowmT_3N .= '{
    name: "' . $key . '",
    id: "' . $key . '_Todos",
    type: "column",
    data: [
            ["N??mero Veces 0", ' . $value["vez_0"] . '],
            ["N??mero Veces 1", ' . $value["vez_1"] . '],
            ["N??mero Veces 2", ' . $value["vez_2"] . '],
            ["N??mero Veces 3", ' . $value["vez_3"] . '],
            ["N??mero Veces 4", ' . $value["vez_4"] . '],
            ["N??mero Veces 5", ' . $value["vez_5"] . '],
            ["N??mero Veces 6", ' . $value["vez_6"] . '],
            ["N??mero Veces 7", ' . $value["vez_7"] . '],
            ["N??mero Veces 8", ' . $value["vez_8"] . '],
            ["N??mero Veces 9", ' . $value["vez_9"] . '],
            ["N??mero Veces 10", ' . $value["vez_10"] . ']
    ],
    },';
}

$series .= '[
    {
        name: "T??rmino",
        colorByPoint: true,
        type: "column",
        data: [
            {
                name: "T??rmino 0",
                y: ' . $countF . ',
                drilldown: "0T"
            },
            {
            name: "T??rmino 1",
            y: ' . $countG . ',
            drilldown: "1T"
        },
            {
            name: "T??rmino 2",
            y: ' . $countM . ',
            drilldown: "2T"
            },
            {
            name: "Todos",
            y: ' . $countT . ',
            drilldown: "Todos"
            }
        ]
    }
],
drilldown: {
    series: [
        {
            name: "T??rmino 0",
            id: "0T",
            type: "line",
            data: [
            ' . $drilldowmF . '
            ],
            keys: ["name", "y", "drilldown"]
        },
        {
            name: "T??rmino 1",
            id: "1T",
            type: "line",
            data: [
            ' . $drilldowmG . '
            ],
            keys: ["name", "y", "drilldown"]
        },
        {
            name: "T??rmino 2",
            id: "2T",
            type: "line",
            data: [
            ' . $drilldowmM . '
            ],
            keys: ["name", "y", "drilldown"]
        },
        {
        name: "Todos",
            id: "Todos",
            type: "line",
            data: [
            ' . $drilldowmT . '
            ],
            keys: ["name", "y", "drilldown"]
        },
        ' . $drilldowmT_3N . '
        ' . $drilldowmF_3N . '
        ' . $drilldowmG_3N . '
        ' . $drilldowmM_3N . '
    ]
}';
?>

<div class='container' id='container'></div>

<script>
    var chart = new Highcharts.chart({
          chart: {
              //type: 'column', 
              renderTo: 'container'/*,
              /*events: {
                drilldown: function(e) {
                    //console.log(this)
                    var chart = this,
                    drilldowns = chart.userOptions.drilldown.series,
                    series = [];
                    Highcharts.each(drilldowns, function(p, i) {
                    if (p.id === e.point.name) {
                        chart.addSingleSeriesAsDrilldown(e.point, p);
                    }
                    });
                    chart.applyDrilldown();
                },
                drillup: function() {
                    let chart = this;
                }
            }*/
          },

          credits: {
            enabled: false
          },
          title: {
              text: ''
          },
          subtitle: {
              text: 'Click para visualizar detalle</a>'
          },

          accessibility: {
              announceNewData: {
                  enabled: true
              },
              point: {
                  valueSuffix: ''
              }
          },
          xAxis: {
            type: 'category'
        },
            yAxis: {
                title: {
                    text: 'Estudiantes'
                }

            },
          plotOptions: {
              series: {
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.0f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px"></span><br>',//{series.name}
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b><br/>'
          },

          series: 
          <?php

echo $series;
//print_r($arrayT);

?>
      });
</script>
