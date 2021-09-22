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
              
              <div class="col-md-3 col-sm-3  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES REGISTRADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top"><br> (TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top"><br> (ESPOL)</span>
                    <div class="count" id="dh_estudiantes_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top"><br> (ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_admisiones"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-3 col-sm-3 tile_stats_count" align="center"><i class="fa fa-user"></i> APROBARON CURSO MOOC HCD
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top"><br> (ESPOL)</span>
                    <div class="count" id="dh_estudiantes_hicieron_espol"></div>
                  </div>             
                  <div class="col-md-6">
                    <span class="count_top"><i></i>  <br> (ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_hicieron_admisiones"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-3 col-sm-3  tile_stats_count" align="center"><i class="fa fa-user"></i> APROBARON EL EXAMEN
                <div class="row">
                  <div class="col-md-6">
                    <span class="count_top"><br> (ESPOL)</span>
                    <div class="count" id="dh_estudiantes_aprobados_espol"></div>
                  </div>               
                  <div class="col-md-6">
                    <span class="count_top"><i></i><br> (ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_aprobados_admisiones"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-3 col-sm-3  tile_stats_count" align="center"><i class="fa fa-user"></i> REPROBARON EL EXAMEN
                <div class="row" align="center" style="text-align:center">
                  <div class="col-md-3" align="center" style="text-align:center">NO COMPLETARON PUNTAJE <br>
                    <span class="count_top" align="center">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_no_aprobados_espol"></div>
                  </div>
                  <div class="col-md-3" style="text-align:center">
                    <span class="count_top"> <br> (ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_no_aprobados_admisiones"></div>
                  </div>
                  <div class="col-md-3" align="center" style="text-align:center">
                    <span class="count_top" align="center" style="text-align:center">NO PRESENTARON EL EXAMEN <br>(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_no_hicieron_espol"></div>
                  </div>
                  <div class="col-md-3">
                    <span class="count_top"> <br> (ADMISIONES)</span>
                      <div class="count" id="dh_estudiantes_no_hicieron_admisiones"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>                 
          <br>  

          <!----------------------- Fila 1 ---------------------------->
          <div class="row">
            <div class="col-sm-6">
              <figure>
                <div id="headTablaNotasComputador" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasComputador" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="4">EL COMPUTADOR (24 PUNTOS)</td>
                          <td colspan="3">CANTIDAD DE ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>TIPO ESTUDIANTE</th>
                          <th>PREGUNTAS EVALUADAS</th>
                          <th>PROMEDIO PREGUNTAS ACERTADAS</th>
                          <th>CALIFICACION PROMEDIO</th>
                          <th><  10 ACIERTOS</th>
                          <th>>= 10 ACIERTOS</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasComputador" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_examen_teorico_computador"></div>                
                </figure>
              </div>
            </div>

            <div class="col-sm-6">
              <figure>
                <div id="headTablaNotasInternet" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasInternet" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="4">INTERNET Y SUS HERRAMIENTAS BASICAS (24 PUNTOS)</td>
                          <td colspan="3">CANTIDAD DE ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>TIPO ESTUDIANTE</th>
                          <th>PREGUNTAS EVALUADAS</th>
                          <th>PROMEDIO PREGUNTAS ACERTADAS</th>
                          <th>CALIFICACION PROMEDIO</th>
                          <th><  10 ACIERTOS</th>
                          <th>>= 10 ACIERTOS</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasInternet" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_examen_teorico_internet"></div>                
                </figure>
              </div>           
            </div>
          
          </div> 

          <br>
          <br> 


          <!----------------------- Fila 2 ---------------------------->
          <div class="row">
            <div class="col-sm-6">
              <figure>
                <div id="headTablaNotasPPT" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasPPT" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="4">POWER POINT (14 PUNTOS)</td>
                          <td colspan="3">CANTIDAD DE ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>TIPO ESTUDIANTE</th>
                          <th>PREGUNTAS EVALUADAS</th>
                          <th>PROMEDIO PREGUNTAS ACERTADAS</th>
                          <th>CALIFICACION PROMEDIO</th>
                          <th><  6 ACIERTOS</th>
                          <th>>= 6 ACIERTOS</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasPPT" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
               <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_examen_teorico_ppt"></div>                
                </figure>
              </div>           
            </div>

            <div class="col-sm-6">
              <figure>
                <div id="headTablaNotasExcel" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasExcel" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="4">EXCEL (14 PUNTOS)</td>
                          <td colspan="3">CANTIDAD DE ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>TIPO ESTUDIANTE</th>
                          <th>PREGUNTAS EVALUADAS</th>
                          <th>PROMEDIO PREGUNTAS ACERTADAS</th>
                          <th>CALIFICACION PROMEDIO</th>
                          <th><  5 ACIERTOS</th>
                          <th>>= 5 ACIERTOS</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasExcel" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_examen_teorico_excel"></div>                
                </figure>
              </div>         
            </div>
          </div> 
          <br>
          <br> 


          <!----------------------- Fila 3 ---------------------------->
          <div class="row">
            <div class="col-sm-6">
              <figure>
                <div id="headTablaNotasWord" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasWord" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="4">WORD (14 PUNTOS)</td>
                          <td colspan="3">CANTIDAD DE ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>TIPO ESTUDIANTE</th>
                          <th>PREGUNTAS EVALUADAS</th>
                          <th>PROMEDIO PREGUNTAS ACERTADAS</th>
                          <th>CALIFICACION PROMEDIO</th>
                          <th><  5 ACIERTOS</th>
                          <th>>= 5 ACIERTOS</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasWord" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure>
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_examen_teorico_word"></div>                
                </figure>
              </div>
            </div>

            <div class="col-sm-6">
              <figure>
                <div id="headTablaNotasHerramientas" style="display: none;background-color: white;text-align: center">
                  <div class="card-box table-responsive">          
                    <table id="tablaNotasHerramientas" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <td colspan="4">TRABAJO COLABORATIVO EN LA WEB (10 PUNTOS)</td>
                          <td colspan="3">CANTIDAD DE ESTUDIANTES</td>                        
                        </tr>
                        <tr>
                          <th>TIPO ESTUDIANTE</th>
                          <th>PREGUNTAS EVALUADAS</th>
                          <th>PROMEDIO PREGUNTAS ACERTADAS</th>
                          <th>CALIFICACION PROMEDIO</th>
                          <th><  4 ACIERTOS</th>
                          <th>>= 4 ACIERTOS</th>
                          <th>TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="bodyTablaNotasHerramientas" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                  </div>
                </div>
              </figure> 
              <div class="container">
                <figure class="highcharts-figure">
                  <div id="grafico_barra_examen_teorico_herramientas"></div>                
                </figure>
              </div>        
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

<script type="text/javascript" src="js/teorico.js"></script>
<script type="text/javascript">
  $(document).ready(function() {  

    /*Numero de estudiantes registrados*/
    num_est_registrados();

    /*Numero de estudiantes espol*/
    num_est_espol();
    /*Numero de estudiantes admisiones*/
    num_est_admisiones();
    
    /*Numero de estudiantes hicieron examen espol*/
    num_est_hicieron_espol();
    /*Numero de estudiantes hicieron examen admision*/
    num_est_hicieron_admision();

    /*Numero de estudiantes no hicieron examen espol*/
    num_est_no_hicieron_espol();
    /*Numero de estudiantes no hicieron examen espol*/
    num_est_no_hicieron_admision();

    /*Numero de estudiantes aprobaron examen espol*/
    num_est_aprobaron_espol();
    /*Numero de estudiantes aprobaron examen admision*/
    num_est_aprobaron_admision();

    /*Numero de estudiantes no aprobaron examen espol*/
    num_est_no_aprobaron_espol();
    /*Numero de estudiantes no aprobaron examen espol*/
    num_est_no_aprobaron_admision();

    //grafico de barra
    barra_examen_teorico_computador(grafico_barra_examen_teorico_computador);
    barra_examen_teorico_internet(grafico_barra_examen_teorico_internet);
    barra_examen_teorico_ppt(grafico_barra_examen_teorico_ppt);
    barra_examen_teorico_excel(grafico_barra_examen_teorico_excel);
    barra_examen_teorico_word(grafico_barra_examen_teorico_word);
    barra_examen_teorico_herramientas(grafico_barra_examen_teorico_herramientas);

    //graficos por modulos
    detalleNotasComputador()
    detalleNotasInternet()

    detalleNotasPPT()
    detalleNotasExcel()

    detalleNotasWord()
    detalleNotasHerramientas()
  });

</script>