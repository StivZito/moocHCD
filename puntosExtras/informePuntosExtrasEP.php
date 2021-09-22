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
          <br> 
            <div class="tile_count">           
              
              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ESTUDIANTES PRACTICOS REGISTRADOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_p_admision"></div>
                  </div>                
                </div>
              </div>    

              <div class="col-md-4 col-sm-4 tile_stats_count" align="center"><i class="fa fa-user"></i>   ALUMNOS QUE GANARON LOS 5 PUNTOS  
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_aprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_aprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_aprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

              <div class="col-md-4 col-sm-4  tile_stats_count" align="center"><i class="fa fa-user"></i> ALUMNOS QUE NO GANARON LOS 5 PUNTOS
                <div class="row">
                  <div class="col-md-4">
                    <span class="count_top">(TODOS)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_reprobados_p"></div>
                  </div>
                  <div class="col-md-4">
                    <span class="count_top">(ESPOL)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_reprobados_p_espol"></div>
                  </div>                           
                  <div class="col-md-4">
                    <span class="count_top">(ADMISIONES)</span>
                    <div class="count" id="dh_estudiantes_registrados_puntosExtras_reprobados_p_admision"></div>
                  </div>                
                </div>
              </div>

            </div>
          </div>                 
          <br>  
          <br> 
          <br> 

          <div class="row">    
            <div class="col-sm-3">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleIncrementoPuntosExtrasTodoP"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-3">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleIncrementoPuntosExtrasExcelP"  ></div>                
                </figure>                
              </div>
            </div>
            <div class="col-sm-3">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleIncrementoPuntosExtrasWordP"  ></div>                
                </figure>                
              </div>
            </div>  
            <div class="col-sm-3">
              <div class="container">
                <figure>
                  <div id="grafico_barra_detalleIncrementoPuntosExtrasPptP"  ></div>                
                </figure>                
              </div>
            </div>  
          </div>          
          <br> 
        <br> 
        

          <!--PUNTOS EXTRAS PRACTICO ADMISIONES-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPuntosExtrasAdmisionP" style="display: none;background-color: white;text-align: center">
                  <h3>ADMISIONES</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPuntosExtrasAdmisionP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <th colspan="6">DATOS DEL ESTUDIANTE</th>
                          <th colspan="3">EXAMEN</td>
                          <th colspan="3">ENCUESTA</th>                       
                          <th rowspan="2">PUNTOS EXTRAS</th>
                          <th colspan="3">EXAMEN + PUNTOS EXTRAS</th>                 
                        </tr>
                        <tr>
                          <th>MATRICULA</th>
                          <th>IDENTIFICACION</th>
                          <th>APELLIDOS</th>
                          <th>NOMBRES</th>
                          <th>EMAIL</th>
                          <th>COHORTE</th>
                          <th>EXCEL</th>
                          <th>PPT</th>
                          <th>WORD</th>
                          <th>DEMOGRAFICA</th>
                          <th>DIAGNOSTICO</th>
                          <th>SATISFACCION</th>
                          <th>EXCEL</th>
                          <th>PPT</th>
                          <th>WORD</th>
                        </tr>
                      </thead>
                      <tbody id="bodytablaPuntosExtrasAdmisionP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                    <div align="left">
                      <br>
                      <button id="jsonAdmin" class="btn btn-round btn-primary">JSON</button><button id="csvAdmin" class="btn btn-round btn-info">CSV</button><button id="pdfAdmin" class="btn btn-round btn-danger">PDF</button><br>
                    </div>
                  </div>
                </div>
              </figure>
            </div>          
          </div> 

          <!--PUNTOS EXTRAS PRACTICO ESPOL-->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <figure>
                <div id="headTablaPuntosExtrasEspolP" style="display: none;background-color: white;text-align: center">
                  <h3>ESPOL</h3>
                  <div class="card-box table-responsive">          
                    <table id="tablaPuntosExtrasEspolP" class="table table-striped table-bordered" style="font-style: 8px">
                      <thead style="background-color: #2D3D54;color:white" >
                        <tr>
                          <th colspan="6">DATOS DEL ESTUDIANTE</th>
                          <th colspan="3">EXAMEN</td>
                          <th colspan="3">ENCUESTA</th>                       
                          <th rowspan="2">PUNTOS EXTRAS</th>
                          <th colspan="3">EXAMEN + PUNTOS EXTRAS</th>                 
                        </tr>
                        <tr>
                          <th>MATRICULA</th>
                          <th>IDENTIFICACION</th>
                          <th>APELLIDOS</th>
                          <th>NOMBRES</th>
                          <th>EMAIL</th>
                          <th>COHORTE</th>
                          <th>EXCEL</th>
                          <th>PPT</th>
                          <th>WORD</th>
                          <th>DEMOGRAFICA</th>
                          <th>DIAGNOSTICO</th>
                          <th>SATISFACCION</th>
                          <th>EXCEL</th>
                          <th>PPT</th>
                          <th>WORD</th>
                        </tr>
                      </thead>
                      <tbody id="bodytablaPuntosExtrasEspolP" style="background-color: white;background-color: #BAD2F5"></tbody>
                    </table>
                    <div align="left">
                      <br>
                      <button id="jsonEspol" class="btn btn-round btn-primary">JSON</button><button id="csvEspol" class="btn btn-round btn-info">CSV</button><button id="pdfEspol" class="btn btn-round btn-danger">PDF</button>
                    </div>
                  </div>
                </div>
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

<script type="text/javascript" src="js/puntosExtras.js"></script>
<script type="text/javascript">
  $(document).ready(function() { 
     /*Numero de estudiantes registrados*/
    num_estudiantes_registrados_puntosExtras_p();
    /*Numero de estudiantes espol*/
    num_estudiantes_registrados_puntosExtras_p_espol();
    /*Numero de estudiantes admisiones*/
    num_estudiantes_registrados_puntosExtras_p_admision();

    /*numero estudiantes realizaron la prueba */
    num_estudiantes_registrados_puntosExtras_aprobados_p();
    /*numero estudiantes realizaron la prueba espol */
    num_estudiantes_registrados_puntosExtras_aprobados_p_espol();
    /*numero estudiantes realizaron la prueba admsion */
    num_estudiantes_registrados_puntosExtras_aprobados_p_admision();

    /*numero estudiantes no realizaron la prueba */
    num_estudiantes_registrados_puntosExtras_reprobados_p();
    /*numero estudiantes no realizaron la prueba espol */
    num_estudiantes_registrados_puntosExtras_reprobados_p_espol();
    /*numero estudiantes no realizaron la prueba admsion */
    num_estudiantes_registrados_puntosExtras_reprobados_p_admision();

    barra_detalleIncrementoPuntosExtrasTodoP(grafico_barra_detalleIncrementoPuntosExtrasTodoP);
    barra_detalleIncrementoPuntosExtrasExcelP(grafico_barra_detalleIncrementoPuntosExtrasExcelP);
    barra_detalleIncrementoPuntosExtrasWordP(grafico_barra_detalleIncrementoPuntosExtrasWordP);
    barra_detalleIncrementoPuntosExtrasPptP(grafico_barra_detalleIncrementoPuntosExtrasPptP);
 
    reportePuntosExtrasAdmisionP()
    reportePuntosExtrasEspolP()
  });

</script>

<!-- botones de tabla admision -->
<script>
  $('#jsonAdmin').on('click',function(){
    $("#tablaPuntosExtrasAdmisionP").tableHTMLExport({type:'json',filename:'PuntosExtrasEstudiantesAdmisionesPractico.json'});
  })
  $('#csvAdmin').on('click',function(){
    $("#tablaPuntosExtrasAdmisionP").tableHTMLExport({type:'csv',filename:'PuntosExtrasEstudiantesAdmisionesPractico.csv'});
  })
  $('#pdfAdmin').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPuntosExtrasAdmisionP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "PuntosExtrasEstudiantesAdmisionesPractico.pdf");
    });
  })
</script>

<!-- botones de tabla espol -->
<script>
  $('#jsonEspol').on('click',function(){
    $("#tablaPuntosExtrasEspolP").tableHTMLExport({type:'json',filename:'PuntosExtrasEstudiantesEspolPractico.json'});
  })
  $('#csvEspol').on('click',function(){
    $("#tablaPuntosExtrasEspolP").tableHTMLExport({type:'csv',filename:'PuntosExtrasEstudiantesEspolPractico.csv'});
  })
  $('#pdfEspol').on('click',function(){
    kendo.drawing.drawDOM($("#tablaPuntosExtrasEspolP")).then(function(group) {
      kendo.drawing.pdf.saveAs(group, "PuntosExtrasEstudiantesEspolPractico.pdf");
    });
  })
</script>