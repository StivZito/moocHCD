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
              
              <div class="col-md-2 col-sm-2  tile_stats_count" style="text-align: center">
                <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> REGISTRADOS</span>
                <div class="count" id="dh_estudiantes_registrados"></div>
              </div>
              
              <div class="col-md-3 col-sm-3  tile_stats_count">
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> (ESPOL)</span>
                    <div class="count" id="dh_estudiantes_espol"></div>
                  </div>
                
                  <div class="col-md-3"></div>

                  <div class="col-md-4">
                    <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> (ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_admisiones"></div>
                  </div>                
                </div>
              </div>
              
              <div class="col-md-3 col-sm-3  tile_stats_count">
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> (MUJERES)</span>
                    <div class="count" id="dh_estudiantes_mujeres"></div>
                  </div>
                  
                  <div class="col-md-3"></div>

                  <div class="col-md-4">
                    <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> (VARONES)</span>
                    <div class="count" id="dh_estudiantes_varones"></div>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-3 col-sm-3  tile_stats_count">
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> (APROBADOS)</span>
                    <div class="count" id="dh_estudiantes_aprobados"></div>
                  </div>
                  
                  <div class="col-md-3"></div>

                  <div class="col-md-4">
                    <span class="count_top"><i class="fa fa-user"></i> Estudiantes <br> (REPROBADOS)</span>
                    <div class="count" id="dh_estudiantes_reprobados"></div>
                  </div>
                  
                </div>
              </div>

            </div>
          </div>
         
          <br>

          <!----------------------- Fila 1 ---------------------------->
          <div class="row">
            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_estudiantes_termino"></div>
                
              </figure>
            </div>

            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_estudiantes_utilitarios"></div>
                <img id="load_grafica_utilitarios" src="img/loading_blue.gif">
              </figure>
            </div>
          </div>

          <!----------------------- Fila 2 ---------------------------->
          <div class="row">
            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_estudiantes_estado"></div>
                
              </figure>
            </div>

            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_estudiantes_espol_admisiones"></div>
                
              </figure>
            </div>
          </div>

          <!----------------------- Fila 3 ---------------------------->
          <div class="row">
            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_estudiantes_utilitarios_tipo"></div>
                
              </figure>
            </div>

            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="headTablaAprobadosReprobados" style="display: none;background-color: white;text-align: center">
                  <p style="color:black;font-size: 18px;font-family: Arial">Rendimiento por Carreras cohorte Práctico y Teórico Práctico</p>
                  
                  <table id="tablaAprobadosReprobados" class="table table-striped table-bordered" style="font-style: 8px">
                    <thead style="background-color: #2D3D54;color:white" >
                      <th>CARRERA</th>
                      <th>(%) APROBADOS</th>
                      <th>(%) REPROBADOS</th>
                    </thead>
                    <tbody id="bodyTablaAprobadosReprobados" style="background-color: white;background-color: #BAD2F5">
                      
                    </tbody>
                  </table>

                </div>
                    
              </figure>
            </div>
          </div>

          <!----------------------- Fila 4 ---------------------------->
          <div class="row">
            <div class="col-sm-6">
              <figure class="highcharts-figure">
                <div id="grafico_top10_carreras">
                  
                </div>
                
              </figure>
            </div>

            <div class="col-sm-6">
              <figure class="highcharts-figure">
                <div id="grafico_top10_carreras_masveces"></div>
                  
              </figure>
            </div>
          </div>

          <!----------------------- Fila 5 ---------------------------->
          <div class="row">
            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_aprobados_num_veces">
                </div>
              </figure>
            </div>

            <div class="col-sm-6" style="height: 500px">
              <figure class="highcharts-figure">
                <div id="grafico_ausentes_exam_practico"></div>
              </figure>
            </div>
          </div>

          <br>
          <br>
        
        </div>
        <!-- /page content -->       
      </div>
    </div>
   <?php include("../plantilla/footer.php")?>  	
  </body>
</html>
<script type="text/javascript" src="js/academico.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    /*Numero de estudiantes registrados*/
    num_est_registrados();
    /*Numero de estudiantes espol*/
    num_est_espol();
    /*Numero de estudiantes admisiones*/
    num_est_admisiones();
    /*Numero de estudiantes varones*/
    num_est_varones();
    /*Numero de estudiantes mujeres*/
    num_est_mujeres();
    /*Numero de estudiantes aprobados*/
    num_est_aprobados();
    /*Numero de estudiantes reprobados*/
    num_est_reprobados();

    
    /*graficos*/
    estudiantes_termino(grafico_estudiantes_termino);
    estudiantes_estado(grafico_estudiantes_estado);
    estudiantes_utilitarios(grafico_estudiantes_utilitarios);
    estudiantes_espol_admisiones(grafico_estudiantes_espol_admisiones);
    estudiantes_utilitarios_tipo(grafico_estudiantes_utilitarios_tipo);
    estudiantes_aprobados_reprobados_carrera();
    estudiantes_top10_carreras(grafico_top10_carreras);
    estudiantes_top10_carreras_masveces(grafico_top10_carreras_masveces);
    estudiantes_aprobados_num_veces(grafico_aprobados_num_veces);
    estudiantes_ausentes_exam_practico(grafico_ausentes_exam_practico);
  });
</script>