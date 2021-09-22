<?php
include("lib/funciones.php");
require_once '../src/SimpleXLSX.php';
ini_set('MAX_EXECUTION_TIME', 0);
set_time_limit(0);
 
try 
{
    $conexion = Conectarse(); 
    $query = "SELECT idRuta, ruta, termino , sistema, tipo, 
               ifnull(tipoEstudiante,'') as tipoEstudiante, 
               ifnull(tipoDetalle,'') as tipoDetalle, 
               ifnull(procesado,0) as procesado,
               ifnull(convertido,0) as convertido
              FROM rutasarchivosdata where procesado = 0;";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) 
    {
        while($fila = mysqli_fetch_assoc($result))
        {
            $idRuta         = $fila["idRuta"];
            $ruta           = $fila["ruta"];
            $termino        = $fila["termino"];
            $anio           = substr($termino,2,4);
            $sistema        = $fila["sistema"];
            $tipo           = $fila["tipo"];
            $tipoDetalle    = $fila["tipoDetalle"];
            $tipoEstudiante = $fila["tipoEstudiante"];               
            $datos          = listarArchivos($ruta);
            
            foreach ($datos as $data) 
            {

                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////academico
                if ($sistema == 'ACA')
                {
                    if ($tipo == 'P' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_academico_practico.php";
                        eliminarDatosAcademicoPractico($termino,$anio,$sistema,$tipoEstudiante);
                        postdataAcademicoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante);                    
                    }

                    if ($tipo == 'TP' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_academico_teorico_practico.php";
                        eliminarDatosAcademicoTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante);
                        postdataAcademicoTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante);                    
                    }
                } 

                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////edx
                if ($sistema == 'EDX')
                {
                    
                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////datos mooc
                    if ($tipoDetalle == 'M' && $tipo == 'P') 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_edx_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosEdxPracticoSte($termino,$anio,$sistema);}
                        if ($tipoEstudiante !== '') {eliminarDatosEdxPractico($termino,$anio,$sistema,$tipoEstudiante);}
                        postdataEdxPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);
                    }

                    if ($tipoDetalle == 'M' && $tipo == 'TP') 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_edx_teorico_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosEdxTeoricoPracticoSte($termino,$anio,$sistema);}
                        if ($tipoEstudiante !== '') {eliminarDatosEdxTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante);}
                        postdataEdxTeoricoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);
                    }
                                       

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////encuesta demografica
                    if ($tipoDetalle == 'D' ) 
                    {
                        $pregunta   = substr($data,1,1);
                        $respuesta  = substr($data,0,1);


                        if ($tipo == 'P') 
                        {
                            ///////////////////////////////////////////////PARA INSERTAR SOLO PREGUNTAS
                            if ($respuesta !== 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_demografica_practico.php";
                                if ($tipoEstudiante  == '') {eliminarDatosEncuestaDemograficoPracticoSte($pregunta,$termino,$anio,$sistema);}
                                if ($tipoEstudiante !== '') {eliminarDatosEncuestaDemograficoPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante);}
                                postDataEncuestaDemograficaPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta);
                            }

                            ///////////////////////////////////////////////PARA INSERTAR SOLO RESPUESTAS
                            if ($respuesta == 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_demografica_respuestas.php";
                                if ($tipoEstudiante  == '') {eliminarRespuestasEncuestaDemograficoSte($termino,$anio,$sistema, $tipo);}
                                if ($tipoEstudiante !== '') {eliminarRespuestasEncuestaDemografico($termino,$anio,$sistema,$tipo,$tipoEstudiante);}
                                postRespuestasEncuestaDemografica($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo);
                            }
                        }

                        if ($tipo == 'TP') 
                        {
                            ///////////////////////////////////////////////PARA INSERTAR SOLO PREGUNTAS
                            if ($respuesta !== 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_demografica_teorico_practico.php";
                                if ($tipoEstudiante  == '') {eliminarDatosEncuestaDemograficoTeoricoPracticoSte($pregunta,$termino,$anio,$sistema);}
                                if ($tipoEstudiante !== '') {eliminarDatosEncuestaDemograficoTeoricoPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante);}
                                postDataEncuestaDemograficaTeoricoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta);
                            }

                            ///////////////////////////////////////////////PARA INSERTAR SOLO RESPUESTAS
                            if ($respuesta == 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_demografica_respuestas.php";
                                if ($tipoEstudiante  == '') {eliminarRespuestasEncuestaDemograficoSte($termino,$anio,$sistema, $tipo);}
                                if ($tipoEstudiante !== '') {eliminarRespuestasEncuestaDemografico($termino,$anio,$sistema,$tipo,$tipoEstudiante);}
                                postRespuestasEncuestaDemografica($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo);
                            }
                        }
                    }

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////encuesta satisfaccion
                    if ($tipoDetalle == 'S' ) 
                    {
                        $pregunta   = substr($data,1,1);
                        $respuesta  = substr($data,0,1);

                        if ($tipo == 'P') 
                        {
                            ///////////////////////////////////////////////PARA INSERTAR SOLO PREGUNTAS
                            if ($respuesta !== 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_satisfaccion_practico.php";
                                if ($tipoEstudiante  == '') {eliminarDatosEncuestaSatisfaccionPracticoSte($pregunta,$termino,$anio,$sistema);}
                                if ($tipoEstudiante !== '') {eliminarDatosEncuestaSatisfaccionPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante);}
                                postDataEncuestaSatisfaccionPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta);
                            }

                            ///////////////////////////////////////////////PARA INSERTAR SOLO RESPUESTAS
                            if ($respuesta == 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_satisfaccion_p_respuestas.php";
                                if ($tipoEstudiante  == '') {eliminarRespuestasEncuestaSatisfaccionSte($termino,$anio,$sistema, $tipo);}
                                if ($tipoEstudiante !== '') {eliminarRespuestasEncuestaSatisfaccion($termino,$anio,$sistema,$tipo,$tipoEstudiante);}
                                postRespuestasEncuestaSatisfaccionP($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo);
                            }
                        }

                        if ($tipo == 'TP') 
                        {
                            ///////////////////////////////////////////////PARA INSERTAR SOLO PREGUNTAS
                            if ($respuesta !== 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_satisfaccion_teorico_practico.php";
                                if ($tipoEstudiante  == '') {eliminarDatosEncuestaSatisfaccionTeoricoPracticoSte($pregunta,$termino,$anio,$sistema);}
                                if ($tipoEstudiante !== '') {eliminarDatosEncuestaSatisfaccionTeoricoPractico($pregunta,$termino,$anio,$sistema,$tipoEstudiante);}
                                postDataEncuestaSatisfaccionTeoricoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $pregunta);
                            }

                            ///////////////////////////////////////////////PARA INSERTAR SOLO RESPUESTAS
                            if ($respuesta == 'r')    
                            {
                                $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_satisfaccion_tp_respuestas.php";
                                if ($tipoEstudiante  == '') {eliminarRespuestasEncuestaSatisfaccionSte($termino,$anio,$sistema, $tipo);}
                                if ($tipoEstudiante !== '') {eliminarRespuestasEncuestaSatisfaccion($termino,$anio,$sistema,$tipo,$tipoEstudiante);}
                                postRespuestasEncuestaSatisfaccionTP($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante, $tipo);
                            }
                        }
                    }


                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////encuesta diagnostico practico
                    if ($tipoDetalle == 'O' && $tipo == 'P') 
                    {
                        if ($tipoEstudiante  == '') {eliminarDatosEncuestaDiagnosticoPracticoSte($termino,$anio,$sistema);}
                        if ($tipoEstudiante !== '') {eliminarDatosExamenTeoricoWordPractico($termino,$anio,$sistema,$tipoEstudiante);}

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_diagnostico_practico.php";
                        postDataEncuestaDiagnosticoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);
                    }


                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////encuesta diagnostico teorico practico
                    if ($tipoDetalle == 'O' && $tipo == 'TP') 
                    {
                        if ($tipoEstudiante  == '')
                        {
                            eliminarDatosEncuestaDiagnosticoTeoricoPracticoSte($termino,$anio,$sistema);  
                            eliminarDatosExamenTeoricoComputadorSte($termino,$anio,$sistema);   
                            eliminarDatosExamenTeoricoInternetSte($termino,$anio,$sistema);  
                            eliminarDatosExamenTeoricoPPTSte($termino,$anio,$sistema);   
                            eliminarDatosExamenTeoricoExcelSte($termino,$anio,$sistema);   
                            eliminarDatosExamenTeoricoWordSte($termino,$anio,$sistema);   
                            eliminarDatosExamenTeoricoHerramientasSte($termino,$anio,$sistema);  
                        } 
                        if ($tipoEstudiante !== '') 
                        {
                            eliminarDatosEncuestaDiagnosticoTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante);
                            eliminarDatosExamenTeoricoComputador($termino,$anio,$sistema,$tipoEstudiante);   
                            eliminarDatosExamenTeoricoInternet($termino,$anio,$sistema,$tipoEstudiante);  
                            eliminarDatosExamenTeoricoPPT($termino,$anio,$sistema,$tipoEstudiante);
                            eliminarDatosExamenTeoricoExcel($termino,$anio,$sistema,$tipoEstudiante);
                            eliminarDatosExamenTeoricoWord($termino,$anio,$sistema,$tipoEstudiante);
                            eliminarDatosExamenTeoricoHerramientas($termino,$anio,$sistema,$tipoEstudiante);  
                        }

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_ec_diagnostico_teorico_practico.php";
                        postDataEncuestaDiagnosticoTeoricoPractico($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_examenTeorico_computador.php";
                        postExamenTeoricoComputador($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_examenTeorico_internet.php";
                        postExamenTeoricoInternet($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_examenTeorico_ppt.php";
                        postExamenTeoricoPPT($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_examenTeorico_excel.php";
                        postExamenTeoricoExcel($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_examenTeorico_word.php";
                        postExamenTeoricoWord($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);

                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_examenTeorico_herramientas.php";
                        postExamenTeoricoHerramientas($url, $ruta, $data, $termino, $sistema,  $tipoEstudiante);
                    } 
                }

                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////sidweb
                if ($sistema == 'SID')
                {
                    $franja   = substr($data,3,1);                
                    $paralelo = substr($data,6,1);
                    $docente  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes(substr($data,8,-5))))));

                    if (substr($data,7,1) != '_')
                    {
                        $paralelo = substr($data,6,2);
                        $docente  = str_replace('  ',' ',strtoupper(ltrim(rtrim(quitar_tildes(substr($data,9,-5))))));
                    }

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////rubricas excel
                    if ($tipo == 'P' && $tipoDetalle == 'E' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_rubrica_excel_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosRubricaExcelPracticoSte($termino,$anio,$sistema,$franja,$paralelo);}
                        if ($tipoEstudiante !== '') {eliminarDatosRubricaExcelPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo);}
                        postdataRubricaExcelPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente);
                    }

                    if ($tipo == 'TP' && $tipoDetalle == 'E' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_rubrica_excel_teorico_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosRubricaExcelTeoricoPracticoSte($termino,$anio,$sistema,$franja,$paralelo);}
                        if ($tipoEstudiante !== '') {eliminarDatosRubricaExcelTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo);}
                        postdataRubricaExcelTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente);
                    }

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////rubricas ppt
                    if ($tipo == 'P' && $tipoDetalle == 'P' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_rubrica_ppt_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosRubricaPPTPracticoSte($termino,$anio,$sistema,$franja,$paralelo);}
                        if ($tipoEstudiante !== '') {eliminarDatosRubricaPPTPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo);}
                        postdataRubricaPPTPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente);
                    }

                    if ($tipo == 'TP' && $tipoDetalle == 'P' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_rubrica_ppt_teorico_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosRubricaPPTTeoricoPracticoSte($termino,$anio,$sistema,$franja,$paralelo);}
                        if ($tipoEstudiante !== '') {eliminarDatosRubricaPPTTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo);}
                        postdataRubricaPPTTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente);
                    }

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////rubricas word
                    if ($tipo == 'P' && $tipoDetalle == 'W' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_rubrica_word_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosRubricaWordPracticoSte($termino,$anio,$sistema,$franja,$paralelo);}
                        if ($tipoEstudiante !== '') {eliminarDatosRubricaWordPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo);}
                        postdataRubricaWordPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente);
                    }

                    if ($tipo == 'TP' && $tipoDetalle == 'W' ) 
                    {
                        $url = "http://localhost:80/sistemaprocesanotasmooc/cargaData/carga_data_rubrica_word_teorico_practico.php";
                        if ($tipoEstudiante  == '') {eliminarDatosRubricaWordTeoricoPracticoSte($termino,$anio,$sistema,$franja,$paralelo);}
                        if ($tipoEstudiante !== '') {eliminarDatosRubricaWordTeoricoPractico($termino,$anio,$sistema,$tipoEstudiante,$franja,$paralelo);}
                        postdataRubricaWordTeoricoPractico($url, $ruta, $data, $termino, $sistema, $tipoEstudiante, $franja, $paralelo, $docente);
                    }
                }
            }
            actualizaRutaProcesada($idRuta);
        }   
    } else {
        die("Error: No hay datos en la tabla seleccionada");
    }
} catch (RuntimeException $e) {
    echo $e->getMessage();	
}	