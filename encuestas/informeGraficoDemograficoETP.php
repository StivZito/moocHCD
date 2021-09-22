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
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES ESPOL 
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top">(HOMBRES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp_espol_hombres"></div>
                  </div>             
                  <div class="col-md-6">
                    <span class="count_top"><i></i>(MUJERES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp_espol_mujeres"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES ADMISIONES
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top">(HOMBRES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp_admision_hombres"></div>
                  </div>               
                  <div class="col-md-6">
                    <span class="count_top"><i></i>(MUJERES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_tp_admision_mujeres"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br>  
          
          <!----------------------- Fila 1 ---------------------------->
          <div class="row">

            <div class="col-sm-4">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_genero_estudiantes_tp"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaGeneroEstudiantesTP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaGeneroEstudiantesTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">GENERO DEL ESTUDIANTE</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaGeneroEstudiantesTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_edad_estudiantes_tp"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaEdadEstudiantesTP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaEdadEstudiantesTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">EDAD DEL ESTUDIANTE</td>
                          <td colspan="3"># ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaEdadEstudiantesTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>          
            </div>

            <div class="col-sm-4">
               <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_colegio_estudiantes_tp"></div>                
                </figure>
              </div>           
              <figure>
                <div id="headTablaColegioEstudiantesTP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaColegioEstudiantesTP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">INSTITUCION EDUCATIVA</td>
                          <td colspan="3"># ESTUDIANTES</td>                                           
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaColegioEstudiantesTP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>
          
          </div>

          <br>  
          <br>   

          <!----------------------- Fila 2 ---------------------------->
          <div class="row">

            <div class="col-sm-4">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R1TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleDemograficaR1TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR1TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">OCUPACION DEL ESTUDIANTE</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR1TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R2TP"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleDemograficaR2TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR2TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">DE QUE FORMA PREFIERE RECIBIR CLASES</td>
                          <td colspan="3"># ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR2TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>          
            </div>

            <div class="col-sm-4">
               <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R3TP"></div>                
                </figure>
              </div>           
              <figure>
                <div id="headTablaDetalleDemograficaR3TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR3TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">NIVEL DE CONOCIMIENTOS EN OFIMATICA</td>
                          <td colspan="3"># ESTUDIANTES</td>                                           
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR3TP" style="background-color: white;background-color: #BAD2F5"></tbody>
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

            <div class="col-sm-6">
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R4TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleDemograficaR4TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR4TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">MEDIOS DE REGISTRO CURSO MOOC</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR4TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-6"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R5TP"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleDemograficaR5TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR5TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">MATERIA HABILITADA AL APROBAR EL CURSO MOOC HCD</td>
                          <td colspan="3"># ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR5TP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalle_demografica_R6TP"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleDemograficaR6TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR6TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">EQUIPOS TECNOLOGICOS DISPONIBLES EN EL HOGAR</td>
                          <td colspan="3"># ESTUDIANTES</td>                                         
                        </tr>
                        <tr>
                          <th>ESPOL</th>
                          <th>ADMISION</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR6TP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-6"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R7TP"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleDemograficaR7TP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR7TP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td rowspan="2">QUE CONEXION DE INTERNET UTILIZA</td>
                          <td colspan="3"># ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>ADMISION</th>
                          <th>ESPOL</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaDetalleDemograficaR7TP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    num_estudiantes_registrados_demografica_tp();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_demografica_tp_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_demografica_tp_admision();

    /*numero estudiantes espol hombres*/
    num_estudiantes_registrados_demografica_tp_espol_hombres();
    /*numero estudiantes espol mujeres*/
    num_estudiantes_registrados_demografica_tp_espol_mujeres();

    /*numero estudiantes admision hombres*/ 
    num_estudiantes_registrados_demografica_tp_admision_hombres();
    /*numero estudiantes admision mujeres*/
    num_estudiantes_registrados_demografica_tp_admision_mujeres();

    //grafico de barra
    barra_genero_estudiantes_tp(grafico_barra_genero_estudiantes_tp);
    barra_edad_estudiantes_tp(grafico_barra_edad_estudiantes_tp);
    barra_colegio_estudiantes_tp(grafico_barra_colegio_estudiantes_tp);

    barra_detalle_demografica_R1TP(grafico_barra_detalle_demografica_R1TP);
    barra_detalle_demografica_R2TP(grafico_barra_detalle_demografica_R2TP);
    barra_detalle_demografica_R3TP(grafico_barra_detalle_demografica_R3TP);
    barra_detalle_demografica_R4TP(grafico_barra_detalle_demografica_R4TP);
    barra_detalle_demografica_R5TP(grafico_barra_detalle_demografica_R5TP);
    barra_detalle_demografica_R6TP(grafico_barra_detalle_demografica_R6TP);
    barra_detalle_demografica_R7TP(grafico_barra_detalle_demografica_R7TP);

    //graficos por modulos
    detalleGeneroEstudiantesTP()
    detalleEdadEstudiantesTP()
    detalleColegioEstudiantesTP()

    detalleDemograficaR1TP()
    detalleDemograficaR2TP()
    detalleDemograficaR3TP()
    detalleDemograficaR4TP()
    detalleDemograficaR5TP()
    detalleDemograficaR6TP()
    detalleDemograficaR7TP()
  });

</script>