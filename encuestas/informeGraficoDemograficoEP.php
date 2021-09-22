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
                    <div class="count" id="dh_estudiantes_registrados_demografica_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_p_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES ESPOL 
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top">(HOMBRES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_p_espol_hombres"></div>
                  </div>             
                  <div class="col-md-6">
                    <span class="count_top"><i></i>(MUJERES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_p_espol_mujeres"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES ADMISIONES
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top">(HOMBRES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_p_admision_hombres"></div>
                  </div>               
                  <div class="col-md-6">
                    <span class="count_top"><i></i>(MUJERES)</span>
                    <div class="count" id="dh_estudiantes_registrados_demografica_p_admision_mujeres"></div>
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
                  <div id="grafico_barra_genero_estudiantes_p"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaGeneroEstudiantesP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaGeneroEstudiantesP" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaGeneroEstudiantesP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_edad_estudiantes_p"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaEdadEstudiantesP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaEdadEstudiantesP" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaEdadEstudiantesP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>          
            </div>

            <div class="col-sm-4">
               <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_colegio_estudiantes_p"></div>                
                </figure>
              </div>           
              <figure>
                <div id="headTablaColegioEstudiantesP" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaColegioEstudiantesP" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaColegioEstudiantesP" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalle_demografica_R1P"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleDemograficaR1P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR1P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR1P" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-4"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R2P"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleDemograficaR2P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR2P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR2P" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>          
            </div>

            <div class="col-sm-4">
               <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R3P"></div>                
                </figure>
              </div>           
              <figure>
                <div id="headTablaDetalleDemograficaR3P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR3P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR3P" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalle_demografica_R4P"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleDemograficaR4P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR4P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR4P" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-6"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R5P"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleDemograficaR5P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR5P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR5P" style="background-color: white;background-color: #BAD2F5"></tbody>
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
                  <div id="grafico_barra_detalle_demografica_R6P"></div>                
                </figure>
              </div>
              <figure>
                <div id="headTablaDetalleDemograficaR6P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR6P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR6P" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
            </div>

            <div class="col-sm-6"> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_detalle_demografica_R7P"></div>                
                </figure>
              </div> 
              <figure>
                <div id="headTablaDetalleDemograficaR7P" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaDetalleDemograficaR7P" class="table table-striped table-bordered" style="font-style: 8px">
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
                      <tbody id="bodyTablaDetalleDemograficaR7P" style="background-color: white;background-color: #BAD2F5"></tbody>
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
    num_estudiantes_registrados_demografica_p();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_demografica_p_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_demografica_p_admision();

    /*numero estudiantes espol hombres*/
    num_estudiantes_registrados_demografica_p_espol_hombres();
    /*numero estudiantes espol mujeres*/
    num_estudiantes_registrados_demografica_p_espol_mujeres();

    /*numero estudiantes admision hombres*/ 
    num_estudiantes_registrados_demografica_p_admision_hombres();
    /*numero estudiantes admision mujeres*/
    num_estudiantes_registrados_demografica_p_admision_mujeres();

    //grafico de barra
    barra_genero_estudiantes_p(grafico_barra_genero_estudiantes_p);
    barra_edad_estudiantes_p(grafico_barra_edad_estudiantes_p);
    barra_colegio_estudiantes_p(grafico_barra_colegio_estudiantes_p);

    barra_detalle_demografica_R1P(grafico_barra_detalle_demografica_R1P);
    barra_detalle_demografica_R2P(grafico_barra_detalle_demografica_R2P);
    barra_detalle_demografica_R3P(grafico_barra_detalle_demografica_R3P);
    barra_detalle_demografica_R4P(grafico_barra_detalle_demografica_R4P);
    barra_detalle_demografica_R5P(grafico_barra_detalle_demografica_R5P);
    barra_detalle_demografica_R6P(grafico_barra_detalle_demografica_R6P);
    barra_detalle_demografica_R7P(grafico_barra_detalle_demografica_R7P);

    //graficos por modulos
    detalleGeneroEstudiantesP()
    detalleEdadEstudiantesP()
    detalleColegioEstudiantesP()

    detalleDemograficaR1P()
    detalleDemograficaR2P()
    detalleDemograficaR3P()
    detalleDemograficaR4P()
    detalleDemograficaR5P()
    detalleDemograficaR6P()
    detalleDemograficaR7P()
  });

</script>