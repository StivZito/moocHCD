<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("../plantilla/header.php")?>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("../plantilla/menu.php")?>

        <!-- page content -->
        <div class="right_col" role="main">

          <!-- top tiles -->
          <div class="row" style="display: inline-block;width:100%" >
          
            <div class="tile_count">           
              
              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES REGISTRADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES ESPOL 
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top">(HOMBRES)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp_espol_hombres"></div>
                  </div>             
                  <div class="col-md-6">
                    <span class="count_top"><i></i>(MUJERES)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp_espol_mujeres"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES ADMISIONES
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top">(HOMBRES)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp_admision_hombres"></div>
                  </div>               
                  <div class="col-md-6">
                    <span class="count_top"><i></i>(MUJERES)</span>
                    <div class="count" id="dh_estudiantes_registrados_satisfaccion_tp_admision_mujeres"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br>  
          
          <!----------------------- Fila 1 ---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle_satisfaccion_R1TP"  style="height: 500px"></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle_satisfaccion_R1TPEstudiantes"  style="height: 500px"></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 1 ---------------------------->
          <figure>
            <div id="headTablaDetalleSatisfaccionR1TP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleSatisfaccionR1TP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td rowspan="2">PORCENTAJE DE CONOCIMIENTO QUE APORTO CADA MODULO</td>
                      <td colspan="3">COMPUTADOR</td>                                         
                      <td colspan="3">INTERNET</td>                                         
                      <td colspan="3">POWER POINT</td>                                         
                      <td colspan="3">EXCEL</td>                                         
                      <td colspan="3">WORD</td>                                         
                      <td colspan="3">HERRAMIENTAS</td>                                         
                    </tr>
                    <tr>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                      <th>ESPOL</th>
                      <th>ADMISION</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <tbody id="bodyTablaDetalleSatisfaccionR1TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
          <br>   

          <!----------------------- Fila 2 ---------------------------->
          <div class="row">

            <div class="col-sm-4">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R2TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleSatisfaccionR2TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR2TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">CUANTO TIEMPO LE DEDICAS AL MOOC POR SEMANA</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR2TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R4TP"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleSatisfaccionR4TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR4TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">A TRAVES DE QUE MEDIO DE COMUNICACION REALIZAS CON MAS FRECUENCIAS TUS CONSULTAS O REPORTAS TUS PROBLEMAS CON LA PLATAFORMA</td>
                          <td colspan="3"># ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR4TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>          
            </div>

            <div class="col-sm-4">
               <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R6TP"></div>                
                </figure>
              </div>           
              <figure>
                <div id="headTablaDetalleSatisfaccionR6TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR6TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">ESCOJA EL RANGO DE TIEMPO EN QUE SUS CONSULTAS O PROBLEMAS FUERON ATENDIDOS</td>
                          <td colspan="3"># ESTUDIANTES</td>                                           
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR6TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>
          
          </div> 

          <br>
          <br> 

          <!----------------------- Fila 3 ---------------------------->
          <div class="row">

            <div class="col-sm-4">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R3L1TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleSatisfaccionR3L1TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR3L1TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">TENIAS CONOCIMIENTO DE LAS FECHAS IMPORTANTES DEL MOOC HCD</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR3L1TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R3L2TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleSatisfaccionR3L2TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR3L2TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">SABIAS ACERCA DEL PROCESO Y POLITICAS DE APROBACION DEL MOOC HCD</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR3L2TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R3L3TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleSatisfaccionR3L3TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR3L3TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">INGRESASTE A LA PESTAÑA "PREGUNTA FRECUENTE" DEL MOOC HCD</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR3L3TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>
          
          </div> 

          <br>
          <br> 

          <!----------------------- Fila 4 ---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R5L1TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleSatisfaccionR5L1TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR5L1TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">LA RESPUESTA RECIBIDA POR PARTE DEL EQUIPO MOOC HCD FUE CLARA Y ENTENDIBLE</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR5L1TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-6">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_satisfaccion_R5L2TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleSatisfaccionR5L2TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleSatisfaccionR5L2TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">SU CONSULTA O REQUERIMIENTO FUE SOLUCIONADO EFICAZMENTE</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleSatisfaccionR5L2TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>
          
          </div> 

          <br>
          <br> 


        </div>
      </div>
    </div>
    <?php include("../plantilla/footer.php")?>	
  </body>
</html>

<script type="text/javascript" src="js/encuestas.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  

    /*Numero de estudiantes registrados*/
    num_estudiantes_registrados_satisfaccion_tp();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_satisfaccion_tp_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_satisfaccion_tp_admision();

    /*numero estudiantes espol hombres*/
    num_estudiantes_registrados_satisfaccion_tp_espol_hombres();
    /*numero estudiantes espol mujeres*/
    num_estudiantes_registrados_satisfaccion_tp_espol_mujeres();

    /*numero estudiantes admision hombres*/ 
    num_estudiantes_registrados_satisfaccion_tp_admision_hombres();
    /*numero estudiantes admision mujeres*/
    num_estudiantes_registrados_satisfaccion_tp_admision_mujeres();

    //grafico de barra
    barra_detalle_satisfaccion_R1TP(grafico_barra_detalle_satisfaccion_R1TP);
    barra_detalle_satisfaccion_R1TPEstudiantes(grafico_barra_detalle_satisfaccion_R1TPEstudiantes);
    barra_detalle_satisfaccion_R1TP(grafico_barra_detalle_satisfaccion_R1TP);
    barra_detalle_satisfaccion_R2TP(grafico_barra_detalle_satisfaccion_R2TP);
    barra_detalle_satisfaccion_R3L1TP(grafico_barra_detalle_satisfaccion_R3L1TP);
    barra_detalle_satisfaccion_R3L2TP(grafico_barra_detalle_satisfaccion_R3L2TP);
    barra_detalle_satisfaccion_R3L3TP(grafico_barra_detalle_satisfaccion_R3L3TP);
    barra_detalle_satisfaccion_R4TP(grafico_barra_detalle_satisfaccion_R4TP);
    barra_detalle_satisfaccion_R5L1TP(grafico_barra_detalle_satisfaccion_R5L1TP);
    barra_detalle_satisfaccion_R5L2TP(grafico_barra_detalle_satisfaccion_R5L2TP);
    barra_detalle_satisfaccion_R6TP(grafico_barra_detalle_satisfaccion_R6TP);

    //graficos por modulos
    detalleSatisfaccionR1TP()
    detalleSatisfaccionR2TP()
    detalleSatisfaccionR3L1TP()
    detalleSatisfaccionR3L2TP()
    detalleSatisfaccionR3L3TP()
    detalleSatisfaccionR4TP()
    detalleSatisfaccionR5L1TP()
    detalleSatisfaccionR5L2TP()
    detalleSatisfaccionR6TP()
  });

</script>