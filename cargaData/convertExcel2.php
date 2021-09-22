<?php

ini_set('memory_limit', '-1');
set_time_limit(1500);
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();

/* Set CSV parsing options */

$reader->setDelimiter(',');
$reader->setEnclosure('"');
$reader->setSheetIndex(0);

/* Load a CSV file and save as a XLS */

$spreadsheet = $reader->load('edx_p_ec1_ofimatica.csv');
$writer = new Xlsx($spreadsheet);
$writer->save('edx_p_ec1_ofimatica.xlsx');

$spreadsheet->disconnectWorksheets();
unset($spreadsheet);

?>