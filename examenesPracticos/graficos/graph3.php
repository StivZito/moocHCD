<?php
include ("db/db.php");
$termino = $_GET["termino"];
$consulta = '';
switch ($_GET["tipo_grafico"])
{

    case '3':
        $consulta = query3($termino);

        $condicion3N = "EstadoGeneral";
        $valor1 = "APROBADO";
        $valor2 = "REPROBADO";

        $condicion4N_1 = "EstadoWord";
        $condicion4N_2 = "EstadoExcel";
        $condicion4N_3 = "EstadoPpt";
        $valor4_1 = "APROBADO";
        $valor4_2 = "REPROBADO";

    break;
		
		
	case '7':
        $consulta = query7($termino);

        $condicion3N = "EstadoGeneral";
        $valor1 = "APROBADO";
        $valor2 = "REPROBADO";

        $condicion4N_1 = "estadoWord";
        $condicion4N_2 = "estadoExcel";
        $condicion4N_3 = "estadoPpt";
        $valor4_1 = "APROBADO";
        $valor4_2 = "REPROBADO";

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

        if ($row[$condicion3N] == $valor1) $arrayT['' . $row['carrera'] . ''][$valor1] += 1;
        else $arrayT['' . $row['carrera'] . ''][$valor2] += 1;

        if ($row[$condicion4N_1] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] += 1;
        else $arrayT['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] += 1;

        if ($row[$condicion4N_2] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] += 1;
        else $arrayT['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] += 1;

        if ($row[$condicion4N_3] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] += 1;
        else $arrayT['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] += 1;

        if ($row[$condicion3N] == $valor1)
        {
            if ($row[$condicion4N_1] == $valor4_1)
            {
                $arrayT['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] += 1;
            }
            else
            {
                $arrayT['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] += 1;
            }
        }
        else
        {
            if ($row[$condicion4N_1] == $valor4_1)
            {
                $arrayT['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] += 1;
            }
            else
            {
                $arrayT['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] += 1;
            }
        }

    }
    else
    {

        $arrayT['' . $row['carrera'] . '']["TOTAL"] = 1;

        if ($row[$condicion3N] == $valor1) $arrayT['' . $row['carrera'] . ''][$valor1] = 1;
        else $arrayT['' . $row['carrera'] . ''][$valor1] = 0;

        if ($row[$condicion3N] == $valor2) $arrayT['' . $row['carrera'] . ''][$valor2] = 1;
        else $arrayT['' . $row['carrera'] . ''][$valor2] = 0;

        $arrayT['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 0;
        $arrayT['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 0;
        $arrayT['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 0;
        $arrayT['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 0;
        $arrayT['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 0;
        $arrayT['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 0;
        if ($row[$condicion4N_1] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 1;

        if ($row[$condicion4N_1] == $valor4_2) $arrayT['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 1;

        if ($row[$condicion4N_2] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 1;

        if ($row[$condicion4N_2] == $valor4_2) $arrayT['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 1;

        if ($row[$condicion4N_3] == $valor4_1) $arrayT['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 1;

        if ($row[$condicion4N_3] == $valor4_2) $arrayT['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 1;

        $arrayT['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 0;
        $arrayT['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 0;
        $arrayT['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 0;
        $arrayT['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 0;
        if ($row[$condicion3N] == $valor1)
        {
            if ($row[$condicion4N_1] == $valor4_1)
            {
                $arrayT['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 1;
            }
            if ($row[$condicion4N_1] == $valor4_2)
            {
                $arrayT['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 1;
            }
        }
        else
        {
            if ($row[$condicion4N_1] == $valor4_1)
            {
                $arrayT['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 1;
            }
            if ($row[$condicion4N_1] == $valor4_2)
            {
                $arrayT['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 1;
            }
        }

    }

    $c = substr($row["termino"], 0, 2);
    if ($c == '0T')
    {
        $countF++;
        if (array_key_exists('' . $row["carrera"] . '', $arrayF))
        {

            $arrayF['' . $row['carrera'] . '']["TOTAL"] += 1;

            if ($row[$condicion3N] == $valor1) $arrayF['' . $row['carrera'] . ''][$valor1] += 1;
            else $arrayF['' . $row['carrera'] . ''][$valor2] += 1;

            if ($row[$condicion4N_1] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] += 1;
            else $arrayF['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] += 1;

            if ($row[$condicion4N_2] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] += 1;
            else $arrayF['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] += 1;

            if ($row[$condicion4N_3] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] += 1;
            else $arrayF['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] += 1;

            if ($row[$condicion3N] == $valor1)
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayF['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] += 1;
                }
                else
                {
                    $arrayF['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] += 1;
                }
            }
            else
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayF['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] += 1;
                }
                else
                {
                    $arrayF['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] += 1;
                }
            }

        }
        else
        {

            $arrayF['' . $row['carrera'] . '']["TOTAL"] = 1;

            if ($row[$condicion3N] == $valor1) $arrayF['' . $row['carrera'] . ''][$valor1] = 1;
            else $arrayF['' . $row['carrera'] . ''][$valor1] = 0;

            if ($row[$condicion3N] == $valor2) $arrayF['' . $row['carrera'] . ''][$valor2] = 1;
            else $arrayF['' . $row['carrera'] . ''][$valor2] = 0;

            $arrayF['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 0;
            $arrayF['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 0;
            $arrayF['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 0;
            $arrayF['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 0;
            $arrayF['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 0;
            $arrayF['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 0;
            if ($row[$condicion4N_1] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_1] == $valor4_2) $arrayF['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 1;

            if ($row[$condicion4N_2] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_2] == $valor4_2) $arrayF['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 1;

            if ($row[$condicion4N_3] == $valor4_1) $arrayF['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_3] == $valor4_2) $arrayF['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 1;

            $arrayF['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 0;
            $arrayF['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 0;
            $arrayF['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 0;
            $arrayF['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 0;
            if ($row[$condicion3N] == $valor1)
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayF['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 1;
                }
                if ($row[$condicion4N_1] == $valor4_2)
                {
                    $arrayF['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 1;
                }
            }
            else
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayF['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 1;
                }
                if ($row[$condicion4N_1] == $valor4_2)
                {
                    $arrayF['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 1;
                }
            }
        }
    }
    else if ($c == '1T')
    {
        $countG++;
        if (array_key_exists('' . $row["carrera"] . '', $arrayG))
        {

            $arrayG['' . $row['carrera'] . '']["TOTAL"] += 1;

            if ($row[$condicion3N] == $valor1) $arrayG['' . $row['carrera'] . ''][$valor1] += 1;
            else $arrayG['' . $row['carrera'] . ''][$valor2] += 1;

            if ($row[$condicion4N_1] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] += 1;
            else $arrayG['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] += 1;

            if ($row[$condicion4N_2] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] += 1;
            else $arrayG['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] += 1;

            if ($row[$condicion4N_3] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] += 1;
            else $arrayG['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] += 1;

            if ($row[$condicion3N] == $valor1)
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayG['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] += 1;
                }
                else
                {
                    $arrayG['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] += 1;
                }
            }
            else
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayG['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] += 1;
                }
                else
                {
                    $arrayG['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] += 1;
                }
            }

        }
        else
        {

            $arrayG['' . $row['carrera'] . '']["TOTAL"] = 1;

            if ($row[$condicion3N] == $valor1) $arrayG['' . $row['carrera'] . ''][$valor1] = 1;
            else $arrayG['' . $row['carrera'] . ''][$valor1] = 0;

            if ($row[$condicion3N] == $valor2) $arrayG['' . $row['carrera'] . ''][$valor2] = 1;
            else $arrayG['' . $row['carrera'] . ''][$valor2] = 0;

            $arrayG['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 0;
            $arrayG['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 0;
            $arrayG['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 0;
            $arrayG['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 0;
            $arrayG['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 0;
            $arrayG['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 0;
            if ($row[$condicion4N_1] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_1] == $valor4_2) $arrayG['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 1;

            if ($row[$condicion4N_2] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_2] == $valor4_2) $arrayG['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 1;

            if ($row[$condicion4N_3] == $valor4_1) $arrayG['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_3] == $valor4_2) $arrayG['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 1;

            $arrayG['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 0;
            $arrayG['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 0;
            $arrayG['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 0;
            $arrayG['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 0;
            if ($row[$condicion3N] == $valor1)
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayG['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 1;
                }
                if ($row[$condicion4N_1] == $valor4_2)
                {
                    $arrayG['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 1;
                }
            }
            else
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayG['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 1;
                }
                if ($row[$condicion4N_1] == $valor4_2)
                {
                    $arrayG['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 1;
                }
            }

        }
    }
    else
    {
        $countM++;
        if (array_key_exists('' . $row["carrera"] . '', $arrayM))
        {

            $arrayM['' . $row['carrera'] . '']["TOTAL"] += 1;

            if ($row[$condicion3N] == $valor1) $arrayM['' . $row['carrera'] . ''][$valor1] += 1;
            else $arrayM['' . $row['carrera'] . ''][$valor2] += 1;

            if ($row[$condicion4N_1] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] += 1;
            else $arrayM['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] += 1;

            if ($row[$condicion4N_2] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] += 1;
            else $arrayM['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] += 1;

            if ($row[$condicion4N_3] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] += 1;
            else $arrayM['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] += 1;

            if ($row[$condicion3N] == $valor1)
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayM['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] += 1;
                }
                else
                {
                    $arrayM['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] += 1;
                }
            }
            else
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayM['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] += 1;
                }
                else
                {
                    $arrayM['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] += 1;
                }
            }

        }
        else
        {

            $arrayM['' . $row['carrera'] . '']["TOTAL"] = 1;

            if ($row[$condicion3N] == $valor1) $arrayM['' . $row['carrera'] . ''][$valor1] = 1;
            else $arrayM['' . $row['carrera'] . ''][$valor1] = 0;

            if ($row[$condicion3N] == $valor2) $arrayM['' . $row['carrera'] . ''][$valor2] = 1;
            else $arrayM['' . $row['carrera'] . ''][$valor2] = 0;

            $arrayM['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 0;
            $arrayM['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 0;
            $arrayM['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 0;
            $arrayM['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 0;
            $arrayM['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 0;
            $arrayM['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 0;
            if ($row[$condicion4N_1] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_1] == $valor4_2) $arrayM['' . $row['carrera'] . ''][$condicion4N_1 . "_" . $valor4_2] = 1;

            if ($row[$condicion4N_2] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_2] == $valor4_2) $arrayM['' . $row['carrera'] . ''][$condicion4N_2 . "_" . $valor4_2] = 1;

            if ($row[$condicion4N_3] == $valor4_1) $arrayM['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_1] = 1;

            if ($row[$condicion4N_3] == $valor4_2) $arrayM['' . $row['carrera'] . ''][$condicion4N_3 . "_" . $valor4_2] = 1;

            $arrayM['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 0;
            $arrayM['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 0;
            $arrayM['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 0;
            $arrayM['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 0;
            if ($row[$condicion3N] == $valor1)
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayM['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_1] = 1;
                }
                if ($row[$condicion4N_1] == $valor4_2)
                {
                    $arrayM['' . $row['carrera'] . ''][$valor1 . "_" . $valor4_2] = 1;
                }
            }
            else
            {
                if ($row[$condicion4N_1] == $valor4_1)
                {
                    $arrayM['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_1] = 1;
                }
                if ($row[$condicion4N_1] == $valor4_2)
                {
                    $arrayM['' . $row['carrera'] . ''][$valor2 . "_" . $valor4_2] = 1;
                }
            }

        }
    }
}

foreach ($arrayF as $key => $value)
{

    $drilldowmF .= '{
                        name: "' . $key . '",
                        y:' . $value["TOTAL"] . ',
                        drilldown: true
                    },';

    $drilldowmF_3N .= ' "' . $key . '" :{
                        name: "' . $valor1 . '",
                        type: "column",
                        data: [
                                ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor1] . '],
                                ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor1] . '],
                                ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor1] . ']
                            ]
                        },
                        "' . $key . '2" :{
                            name: "' . $valor2 . '",
                            type: "column",
                            color: Highcharts.getOptions().colors[1],
                            data: [
                                    ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor2] . '],
                                    ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor2] . '],
                                    ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor2] . ']
                                ]
                            },';

}
foreach ($arrayG as $key => $value)
{
    $drilldowmG .= '{
                        name: "' . $key . '",
                        y:' . $value["TOTAL"] . ',
                        drilldown: true
                    },';

    $drilldowmG_3N .= ' "' . $key . '" :{
                    name: "' . $valor1 . '",
                    type: "column",
                    data: [
                            ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor1] . '],
                            ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor1] . '],
                            ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor1] . ']
                        ]
                    },
                    "' . $key . '2" :{
                        name: "' . $valor2 . '",
                        type: "column",
                        color: Highcharts.getOptions().colors[1],
                        data: [
                                ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor2] . '],
                                ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor2] . '],
                                ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor2] . ']
                            ]
                        },';
}
foreach ($arrayM as $key => $value)
{
    $drilldowmM .= '{
                    name: "' . $key . '",
                    y:' . $value["TOTAL"] . ',
                    drilldown: true
                },';

    $drilldowmM_3N .= ' "' . $key . '" :{
                    name: "' . $valor1 . '",
                    type: "column",
                    data: [
                            ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor1] . '],
                            ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor1] . '],
                            ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor1] . ']
                        ]
                    },
                    "' . $key . '2" :{
                        name: "' . $valor2 . '",
                        type: "column",
                        color: Highcharts.getOptions().colors[1],
                        data: [
                                ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor2] . '],
                                ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor2] . '],
                                ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor2] . ']
                            ]
                        },';
}

foreach ($arrayT as $key => $value)
{
    $drilldowmT .= '{
                    name: "' . $key . '",
                    y:' . $value["TOTAL"] . ',
                    drilldown: true
                },';

    $drilldowmT_3N .= ' "' . $key . '" :{
                    name: "' . $valor1 . '",
                    type: "column",
                    data: [
                            ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor1] . '],
                            ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor1] . '],
                            ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor1] . ']
                        ]
                    },
                    "' . $key . '2" :{
                        name: "' . $valor2 . '",
                        type: "column",
                        color: Highcharts.getOptions().colors[1],
                        data: [
                                ["' . $condicion4N_1 . '", ' . $value[$condicion4N_1 . "_" . $valor2] . '],
                                ["' . $condicion4N_2 . '", ' . $value[$condicion4N_2 . "_" . $valor2] . '],
                                ["' . $condicion4N_3 . '", ' . $value[$condicion4N_3 . "_" . $valor2] . ']
                            ]
                        },';
}

$series .= '[
                  {
                      name: "Término",
                      colorByPoint: true,
                      type: "column",
                      data: [
                          {
                              name: "Término 0",
                              y: ' . $countF . ',
                              drilldown: "0T"
                          },
                          {
                            name: "Término 1",
                            y: ' . $countG . ',
                            drilldown: "1T"
                        },
                          {
                            name: "Término 2",
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
                          name: "Término 0",
                          id: "0T",
                          type: "line",
                          data: [
                          ' . $drilldowmF . '
                          ]
                      },
                      {
                            name: "Término 1",
                            id: "1T",
                            type: "line",
                            data: [
                            ' . $drilldowmG . '
                            ]
                        },
                      {
                          name: "Término 2",
                          id: "2T",
                          type: "line",
                          data: [
                          ' . $drilldowmM . '
                          ]
                      },
                      {
                        name: "Todos",
                          id: "Todos",
                          type: "line",
                          data: [
                          ' . $drilldowmT . '
                          ]
                        }
                  ]
              }';
?>

<div class='container' id='container'></div>

<script>
    var chart = new Highcharts.chart({
          chart: {
              //type: 'column', 
              renderTo: 'container',
              events: {
                drilldown: function(e) {
                if (!e.seriesOptions) {
                  var chart = this,
                    drilldowns = {
                        <?php echo $drilldowmF_3N ?>
                        <?php echo $drilldowmT_3N ?>
                        <?php echo $drilldowmG_3N ?>
                        <?php echo $drilldowmM_3N ?>
                      },
                      series = [drilldowns[e.point.name], drilldowns[e.point.name + '2']];

                      chart.addSingleSeriesAsDrilldown(e.point, series[0]);
                      chart.addSingleSeriesAsDrilldown(e.point, series[1]);
                      chart.applyDrilldown();
                    }

                },
                drillup: function() {
                    let chart = this;
                }
            }
          },

          credits: {
            enabled: false
          },
          title: {
              text: ''
          },
          subtitle: {
              text: 'Notas Practicas por Cursos</a>'
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
                    stacking: 'normal',
                  dataLabels: {
                      enabled: true,
                      format: '{point.y:.0f}'
                  }
              }
          },

          tooltip: {
              headerFormat: '<span style="font-size:11px">{series.name}</span><br>',//{series.name}
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b><br/>'
          },

          series: 
          <?php
echo $series;
//print_r($arrayF);

?>
      });
</script>
