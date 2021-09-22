<?php
include("lib/funciones.php");
require '../vendor/autoload.php';
require_once '../src/SimpleXLSX.php';

ini_set('memory_limit', '-1');
set_time_limit(1500);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

try 
{
    $conexion = Conectarse(); 
    $query = "SELECT idRuta, ruta, termino , sistema, tipo, 
           ifnull(tipoEstudiante,'') as tipoEstudiante, 
           ifnull(tipoDetalle,'') as tipoDetalle, 
           ifnull(procesado,0) as procesado,
           ifnull(convertido,0) as convertido
          FROM rutasarchivosdata where convertido = 0;";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) 
    {
        while($fila = mysqli_fetch_assoc($result))
        {
            $idRuta         = $fila["idRuta"];
            $ruta           = $fila["ruta"];
            $datos          = listarArchivos($ruta);          
            
            foreach ($datos as $data) 
            {
                $pos = strpos($data, '.csv');
                $path = $ruta.$data; 
                
                if ($pos !== false) 
                {     
                    $spreadsheet = new Spreadsheet();
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();

                    /* Set CSV parsing options */                    
                    $encoding = \PhpOffice\PhpSpreadsheet\Reader\Csv::guessEncoding($path, ".csv");
                    $reader->setInputEncoding($encoding);
                    $reader->setEnclosure('');
                    $reader->setSheetIndex(0);
                    $reader->setEscapeCharacter((version_compare(PHP_VERSION, '7.4') < 0) ? "\x0" : '');

                    /* Load a CSV file and save as a XLS */
                    $NewfileName = basename($path, ".csv");
                    $spreadsheet = $reader->load($path);
                    $writer = new Xlsx($spreadsheet);
                    $writer->setPreCalculateFormulas(false);
                    $writer->save($ruta.$NewfileName.'.xlsx');

                    $spreadsheet->disconnectWorksheets();
                    unset($spreadsheet);
                    unlink( $path );
                }                

            }
            actualizaRutaConvertido($idRuta);                
        }   
    } else {
        die("Error: No hay datos en la tabla seleccionada");
    }
} catch (RuntimeException $e) {
    echo $e->getMessage();	
}	