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
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_p_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i> REALIZARON LA PRUEBA 
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_realizoPrueba_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_realizoPrueba_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_realizoPrueba_p_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> NO REALIZARON LA PRUEBA
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_noRealizoPrueba_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_noRealizoPrueba_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_diagnostico_noRealizoPrueba_p_admision"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br>  

          <!----------------------- Fila 1 ---------------------------->
          <div class="row">
            <div class="container">
              <figure>
                <div id="grafico_barra_detalle_diagnostico_general_p"  style="height: 600px"></div>                
              </figure>                
            </div>   
          </div>          
          <br>  
          
          <!----------------------- Fila 2 ---------------------------->
          <div class="row">

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle_diagnostico_espol_p"  style="height: 500px"></div>                
                </figure>                
              </div>
            </div>     

            <div class="col-sm-6">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalle_diagnostico_admision_p"  style="height: 500px"></div>                
                </figure>                
              </div>
            </div>  
          
          </div>          
          <br>  

          <!----------------------- Tabla de Fila 1 ---------------------------->
          <figure>
            <div id="headTablaDetalleDiagnosticoP" style="display: none;background-color: white;text-align: center">
              <div class="card-box table-responsive">          
                <table id="tablaDetalleDiagnosticoP" class="table table-striped table-bordered" style="font-style: 8px">
                  <thead style="background-color: #2D3D54;color:white" >
                    <tr>
                      <td rowspan="2">MODULOS</td>
                      <td colspan="3">INICIAL</td>                                         
                      <td colspan="3">REGULAR</td>                                         
                      <td colspan="3">EN DESARROLLO</td>                                         
                      <td colspan="3">DESARROLLADO</td>                                         
                      <td colspan="3">EXCELENTE</td>  
                      <td colspan="3">SIN RESPUESTAS</td>                                                                                
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
                  <tbody id="bodyTablaDetalleDiagnosticoP" style="background-color: white;background-color: #BAD2F5"></tbody>
                </table>
              </div>
            </div>
          </figure>
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
    num_estudiantes_registrados_diagnostico_p();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_diagnostico_p_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_diagnostico_p_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_diagnostico_realizoPrueba_p();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_diagnostico_realizoPrueba_p_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_diagnostico_realizoPrueba_p_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_diagnostico_noRealizoPrueba_p();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_diagnostico_noRealizoPrueba_p_admision();

    //grafico de barra
    barra_detalle_diagnostico_general_p(grafico_barra_detalle_diagnostico_general_p);
    barra_detalle_diagnostico_espol_p(grafico_barra_detalle_diagnostico_espol_p);
    barra_detalle_diagnostico_admision_p(grafico_barra_detalle_diagnostico_admision_p);

    //graficos por modulos
    detalleDiagnosticoEstudiantesP()

  });

</script>